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
        }
    
    }
    return $tutors_affected;
}


}
