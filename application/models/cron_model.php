<?php

/**
 * CronModel
 * Handles routine tasks, called by cron tables routinley
 */
class CronModel
{
    /**
     * Constructor, expects a Database connection
     * @param Database $db The Database object
     */
    public function __construct(Database $db)
    {
        $this->db = $db;
    }


    public function pauseEmailExpired()
{
    $tutors = $this->db->prepare("SELECT users.user_id, users.fname, users.lname, users.user_email, users.user_account_type, tutors.tutor_active, tutors.profile_expiration FROM users INNER JOIN tutors ON users.user_id=tutors.id WHERE profile_expiration <= :time_now AND tutor_active != 0");
    $tutors->execute(array(':time_now' => time()));
    
    $tutors_affected = $tutors->rowCount();
    if ($tutors_affected != 0)
    {
    $mail = new PHPMailer;
    if (EMAIL_USE_SMTP) {
            // set PHPMailer to use SMTP
        $mail->IsSMTP();
            // useful for debugging, shows full SMTP errors, config this in config/config.php
        $mail->SMTPDebug = PHPMAILER_DEBUG_MODE;
            // enable SMTP authentication
        $mail->SMTPAuth = EMAIL_SMTP_AUTH;
            // enable encryption, usually SSL/TLS
        if (defined('EMAIL_SMTP_ENCRYPTION')) $mail->SMTPSecure = EMAIL_SMTP_ENCRYPTION;

                // set SMTP provider's credentials
        $mail->Host = EMAIL_SMTP_HOST;
        $mail->Username = EMAIL_SMTP_USERNAME;
        $mail->Password = EMAIL_SMTP_PASSWORD;
        $mail->Port = EMAIL_SMTP_PORT;
    }
    else $mail->IsMail();

    foreach ($tutors->fetchAll() as $expired_tutor)
        {
            //pause listing
        $pause_listing = $this->db->prepare("UPDATE tutors SET tutor_active = 0 WHERE id = :user_id LIMIT 1");
        $pause_listing->execute(array(':user_id' => $expired_tutor->user_id));
        //send them email
        $mail->From = EMAIL_FROM;
        $mail->addReplyTo(EMAIL_CONTACT_FORM_ADDRESS);
        $mail->FromName = EMAIL_VERIFICATION_FROM_NAME;
        $mail->AddAddress($expired_tutor->user_email);
        $mail->Subject = "Expired Tutoring Listing";
        $mail->Body = 
        "Dear ".$expired_tutor->fname." ".$expired_tutor->lname.",\n\nYour tutoring listing expired on ".date('l, F jS, Y \a\t h:i A', $expired_tutor->profile_expiration).". Your listing has been paused (not deleted). From now on you will no longer show up in tutor searches. We do this to prevent inactive tutors from showing up in tutor searches.\n\nIf you are still interested in tutoring, please visit your tutor profile (lextutorexchange.com/login) to renew your listing. Be sure to also update your tutoring credentials while you're logged on.\n\nThanks for your service!\n\nSincerely,\nLexington Tutor Exchange\n(lextutorexchange.com)\n\nMessage Sent On: ".date('l, F jS, Y \a\t h:i A', time());
        $mail->Send();
        $this->save_email('tutor_list_pause', 0, $expired_tutor->user_id, $mail->Subject, $mail->Body);
        }
    
    }
    return $tutors_affected;

}


public function EmailWarn()
{
$tutors = $this->db->prepare("SELECT users.user_id, users.fname, users.lname, users.user_email, users.user_account_type, tutors.tutor_active, tutors.profile_expiration FROM users INNER JOIN tutors ON users.user_id=tutors.id WHERE profile_expiration <= :time_end AND profile_expiration > :time_start AND tutor_active != 0");
  $time_end = time() + 3600*24*7;
  //since the script runs every 2 hours, make sure it only sends one email
  $tutors->execute(array(':time_end' => $time_end, ':time_start' => $time_end - 3600*2));
    
    $tutors_affected = $tutors->rowCount();
    if ($tutors_affected != 0)
    {
    $mail = new PHPMailer;
    if (EMAIL_USE_SMTP) {
            // set PHPMailer to use SMTP
        $mail->IsSMTP();
            // useful for debugging, shows full SMTP errors, config this in config/config.php
        $mail->SMTPDebug = PHPMAILER_DEBUG_MODE;
            // enable SMTP authentication
        $mail->SMTPAuth = EMAIL_SMTP_AUTH;
            // enable encryption, usually SSL/TLS
        if (defined('EMAIL_SMTP_ENCRYPTION')) $mail->SMTPSecure = EMAIL_SMTP_ENCRYPTION;

                // set SMTP provider's credentials
        $mail->Host = EMAIL_SMTP_HOST;
        $mail->Username = EMAIL_SMTP_USERNAME;
        $mail->Password = EMAIL_SMTP_PASSWORD;
        $mail->Port = EMAIL_SMTP_PORT;
    }
    else $mail->IsMail();

    foreach ($tutors->fetchAll() as $expired_tutor)
        {
        //send them email
        $mail->From = EMAIL_FROM;
        $mail->addReplyTo(EMAIL_CONTACT_FORM_ADDRESS);
        $mail->FromName = EMAIL_VERIFICATION_FROM_NAME;
        $mail->AddAddress($expired_tutor->user_email);
        $mail->Subject = "Your Listing Expires Soon";
        $mail->Body = 
        "Dear ".$expired_tutor->fname." ".$expired_tutor->lname.",\n\nYour tutoring listing will expire in a week on ".date('l, F jS, Y \a\t h:i A', $expired_tutor->profile_expiration).". Your listing will be paused (not deleted), and you will no longer show up in tutor searches. We do this to prevent inactive tutors from showing up in tutor searches.\n\nIf you are still interested in tutoring, please visit your tutor profile (lextutorexchange.com/login) within the next week to renew your listing. Be sure to also update your tutoring credentials while you're logged on.\n\nThanks for your service!\n\nSincerely,\nLexington Tutor Exchange\n(lextutorexchange.com)\n\nMessage Sent On: ".date('l, F jS, Y \a\t h:i A', time());
        $mail->Send();
        $this->save_email('tutor_list_warn', 0, $expired_tutor->user_id, $mail->Subject, $mail->Body);
        }
    
    }
    return $tutors_affected;
}



public function EmailFollowup()
{
$contacts = $this->db->prepare("SELECT emails.message_num, emails.from_id, emails.to_id, emails.subject, emails.time_sent, emails.followed_up, users.fname, users.lname FROM emails INNER JOIN users ON emails.to_id=users.user_id WHERE email_type = 'tutor_contact' AND followed_up = 0 AND time_sent < :follow_up_time ORDER BY from_id ASC");

//if its longer tahn two weeks ago
  $time_end = time() - 3600*24*7*2;
  //since the script runs every 2 hours, make sure it only sends one email
  $contacts->execute(array(':follow_up_time' => $time_end));
    
    $rows_affected = $contacts->rowCount();
    if ($rows_affected != 0)
    {
            $mail = new PHPMailer;
    if (EMAIL_USE_SMTP) {
            // set PHPMailer to use SMTP
        $mail->IsSMTP();
            // useful for debugging, shows full SMTP errors, config this in config/config.php
        $mail->SMTPDebug = PHPMAILER_DEBUG_MODE;
            // enable SMTP authentication
        $mail->SMTPAuth = EMAIL_SMTP_AUTH;
            // enable encryption, usually SSL/TLS
        if (defined('EMAIL_SMTP_ENCRYPTION')) $mail->SMTPSecure = EMAIL_SMTP_ENCRYPTION;

                // set SMTP provider's credentials
        $mail->Host = EMAIL_SMTP_HOST;
        $mail->Username = EMAIL_SMTP_USERNAME;
        $mail->Password = EMAIL_SMTP_PASSWORD;
        $mail->Port = EMAIL_SMTP_PORT;
    }
    else $mail->IsMail();
//remove duplicate contacts
        $user_contacts = array();

        //create an array of arrays of objects. first key is sender is, second key is the tutor id which contains an object of the message
foreach ($contacts as $tutoring_inquiry)
{
    if (!isset($user_contacts[$tutoring_inquiry->from_id][$tutoring_inquiry->to_id])) $user_contacts[$tutoring_inquiry->from_id][$tutoring_inquiry->to_id] = $tutoring_inquiry;

}

foreach ($user_contacts as $user_id => $tutor_contacts)
{
    //get the user's info
    $sql = $this->db->prepare("SELECT user_id, fname, lname, user_email, user_account_type FROM users WHERE user_id = :user_id");
    $sql->execute(array(':user_id' => $user_id));
    $results = $sql->fetch();
$users_name = $results->fname.' '.$results->lname;

//an array of all of the names of tutors contacted by this user
$contacts_array = array();
    foreach ($tutor_contacts as $tutor_message_object) $contacts_array[] = $tutor_message_object->fname.' '.$tutor_message_object->lname;

        //send the email
        $mail->From = EMAIL_FROM;
        $mail->addReplyTo(EMAIL_CONTACT_FORM_ADDRESS);
        $mail->FromName = EMAIL_VERIFICATION_FROM_NAME;
        $mail->AddAddress($results->user_email);
        $mail->Subject = "Tutoring Inquiry Follow-Up";

        if (count($contacts_array) > 1) $mail->Body = "Dear ".$users_name.",\n\nTwo weeks ago you contacted the following tutors:\n-".implode("\n-", $contacts_array)."\n\nIf you ended up receiving tutoring from any of these tutors, we would love it if you could take a few minutes to leave a review for them. Just log on to your lextutorexchange.com account, find the profile of your tutor, then click on the review button. Your review can be anonymous, and your feedback will help others looking for tutors."."\n\nAlso, if you found this site helpful, we would be grateful if you could help support us. We are only high school students and have spent hours on end during our school year designing this site. At the same time, we are swallowing a yearly operating cost that totals close to $100, all out of our own pockets. If you could, please visit lextutorexchange.com and click the 'Help Support Us button' at the bottom of the page."."\n\nSincerely,\nLexington Tutor Exchange\n(lextutorexchange.com)";
        else $mail->Body = "Dear ".$users_name.",\n\nTwo weeks ago you contacted ".$contacts_array[0]." for tutoring.\n\nIf you ended up receiving tutoring from him/her, we would love it if you could take a few minutes to leave a review. Just log on to your lextutorexchange.com account, find the profile of your tutor, then click on the review button. Your review can be anonymous, and your feedback will help others looking for tutors."."\n\nAlso, if you found this site helpful, we would be grateful if you could help support us. We are only high school students and have spent hours on end during our school year designing this site. At the same time, we are swallowing a yearly operating cost that totals close to $100, all out of our own pockets. If you could, please visit lextutorexchange.com and click the 'Help Support Us button' at the bottom of the page."."\n\nSincerely,\nLexington Tutor Exchange\n(lextutorexchange.com)";

        $mail->Send();
        //note that you emailed them in the database
        $this->save_email('tutor_contact_followup', 0, $user_id, $mail->Subject, $mail->Body);

        $in = implode(', ', array_fill(0, count($tutor_contacts), '?'));
         $update = $this->db->prepare("UPDATE emails SET followed_up = 1 WHERE from_id = ? AND to_id IN ($in)");
         $vars = array_keys($tutor_contacts);
         array_unshift($vars, $user_id);
         $update->execute($vars);
}

    return count($user_contacts);
    }
    return 0;
}

    public function save_email($email_type, $from_id, $to_id, $subject, $message)
    {

        $sql = $this->db->prepare("INSERT INTO emails (email_type, from_id, to_id, subject, message, time_sent) VALUES (:email_type, :from_id, :to_id, :subject, :message, :time_sent)");
        if(!$sql->execute(array(':email_type' => trim($email_type), ':from_id' => trim($from_id), ':to_id' => trim($to_id), ':subject' => trim($subject), ':message' => $message, ':time_sent' => time()))) return 0;
        return 1;
    }



}
