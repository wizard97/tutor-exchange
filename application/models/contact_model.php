<?php


class ContactModel
{
    /**
     * Constructor, expects a Database connection
     * @param Database $db The Database object
     */
    public function __construct(Database $db)
    {
        $this->db = $db;
    }

    /**
     * Login process (for DEFAULT user accounts).
     * Users who login with Facebook etc. are handled with loginWithFacebook()
     * @return bool success state
     */

    public function sendContactEmail()
    {
        // create PHPMailer object (this is easily possible as we auto-load the according class(es) via composer)
        $mail = new PHPMailer;

        // please look into the config/config.php for much more info on how to use this!
        if (EMAIL_USE_SMTP) {
            // set PHPMailer to use SMTP
            $mail->IsSMTP();
            // useful for debugging, shows full SMTP errors, config this in config/config.php
            $mail->SMTPDebug = PHPMAILER_DEBUG_MODE;
            // enable SMTP authentication
            $mail->SMTPAuth = EMAIL_SMTP_AUTH;
            // enable encryption, usually SSL/TLS
            if (defined('EMAIL_SMTP_ENCRYPTION')) {
                $mail->SMTPSecure = EMAIL_SMTP_ENCRYPTION;
            }
            // set SMTP provider's credentials
            $mail->Host = EMAIL_SMTP_HOST;
            $mail->Username = EMAIL_SMTP_USERNAME;
            $mail->Password = EMAIL_SMTP_PASSWORD;
            $mail->Port = EMAIL_SMTP_PORT;
        } else {
            $mail->IsMail();
        }


    if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['message']) || empty($_POST['subject']))
    {
        $_SESSION["feedback_negative"][] = FEEDBACK_INCOMPLETE_FIELDS;
    }
elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
{
$_SESSION["feedback_negative"][] = FEEDBACK_EMAIL_DOES_NOT_FIT_PATTERN;
}
else
{   
    $mail->From = EMAIL_FROM;
    $mail->AddAddress(EMAIL_CONTACT_FORM_ADDRESS);
    $mail->addReplyTo(trim($_POST['email']), trim($_POST['name']));
    $mail->FromName = "Lex Tutor Exchange Contact Form";
    $mail->Subject = trim($_POST['subject']);
    $mail->Body = trim($_POST['message']);

}
        // final sending and check
        if($mail->Send()) {
            $_SESSION["feedback_positive"][] = FEEDBACK_EMAIL_SEND_SUCESS;
            $this->save_email('contact_form', 0, 0, $mail->Subject, $mail->Body);
            return true;
        } else {
            $_SESSION["feedback_negative"][] = FEEDBACK_EMAIL_SEND_FAIL . $mail->ErrorInfo;
            return false;
        }
    }

        public function save_email($email_type, $from_id, $to_id, $subject, $message)
    {

        $sql = $this->db->prepare("INSERT INTO emails (email_type, from_id, to_id, subject, message, time_sent) VALUES (:email_type, :from_id, :to_id, :subject, :message, :time_sent)");
        if(!$sql->execute(array(':email_type' => trim($email_type), ':from_id' => trim($from_id), ':to_id' => trim($to_id), ':subject' => trim($subject), ':message' => $message, ':time_sent' => time()))) return 0;
        return 1;
    }
}

