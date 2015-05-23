<?php

/**
 * Configuration
 *
 * For more info about constants please @see http://php.net/manual/en/function.define.php
 * If you want to know why we use "define" instead of "const" @see http://stackoverflow.com/q/2447791/1114320
 */

/**
 * Configuration for: Error reporting
 * Useful to show every little problem during development, but only show hard errors in production
 */


//removed passwords and configs for security reasons



/**
 * Configuration for: Email content data
 *
 * php-login uses the PHPMailer library, please have a look here if you want to add more
 * config stuff: @see https://github.com/PHPMailer/PHPMailer
 *
 * As email sending within your project needs some setting, you can do this here:
 *
 * Absolute URL to password reset action, necessary for email password reset links
 * define("EMAIL_PASSWORD_RESET_URL", "http://127.0.0.1/php-login/4-full-mvc-framework/login/passwordReset");
 * define("EMAIL_PASSWORD_RESET_FROM_EMAIL", "noreply@example.com");
 * define("EMAIL_PASSWORD_RESET_FROM_NAME", "My Project");
 * define("EMAIL_PASSWORD_RESET_SUBJECT", "Password reset for PROJECT XY");
 * define("EMAIL_PASSWORD_RESET_CONTENT", "Please click on this link to reset your password:");
 *
 * absolute URL to verification action, necessary for email verification links
 * define("EMAIL_VERIFICATION_URL", "http://127.0.0.1/php-login/4-full-mvc-framework/login/verify/");
 * define("EMAIL_VERIFICATION_FROM_EMAIL", "noreply@example.com");
 * define("EMAIL_VERIFICATION_FROM_NAME", "My Project");
 * define("EMAIL_VERIFICATION_SUBJECT", "Account Activation for PROJECT XY");
 * define("EMAIL_VERIFICATION_CONTENT", "Please click on this link to activate your account:");
 */
define("EMAIL_PASSWORD_RESET_URL", URL . "login/verifypasswordreset");
define("EMAIL_PASSWORD_RESET_FROM_EMAIL", "no-reply@lextutorexchange.com");
define("EMAIL_PASSWORD_RESET_FROM_NAME", "Lexington Tutor Exchange");
define("EMAIL_PASSWORD_RESET_SUBJECT", "Password reset for Lex Tutor Exchange");
define("EMAIL_PASSWORD_RESET_CONTENT", "Please click on this link to reset your password: ");

define("EMAIL_VERIFICATION_URL", URL . "login/verify");
define("EMAIL_VERIFICATION_FROM_EMAIL", "no-reply@lextutorexchange.com");
define("EMAIL_VERIFICATION_FROM_NAME", "Lexington Tutor Exchange");
define("EMAIL_VERIFICATION_SUBJECT", "Account Activation");
define("EMAIL_VERIFICATION_CONTENT", "Thank you for creating an account with Lexington Tutor Exchange. Please click on this link to activate your account: ");

define("EMAIL_FROM", "lextutorexchange@gmail.com");
define("EMAIL_CONTACT_FROM_NAME", "Lexington Tutor Exchange Forwarder");
define("EMAIL_CONTACT_FORM_ADDRESS", "lextutorexchangecontact@gmail.com");

/**
 * Configuration for: Error messages and notices
 *
 * In this project, the error messages, notices etc are all-together called "feedback".
 */
define("FEEDBACK_UNKNOWN_ERROR", "Unknown error occurred!");
define("FEEDBACK_PASSWORD_WRONG_3_TIMES", "You have typed in a wrong password 3 or more times already. Please wait 30 seconds to try again.");
define("FEEDBACK_ACCOUNT_NOT_ACTIVATED_YET", "Your account is not activated yet. Please click on the confirm link in the mail.");
define("FEEDBACK_PASSWORD_WRONG", "Password was wrong.");
define("FEEDBACK_USER_DOES_NOT_EXIST", "This user does not exist.");
// The "login failed"-message is a security improved feedback that doesn't show a potential attacker if the user exists or not
define("FEEDBACK_LOGIN_FAILED", "Login failed.");
define("FEEDBACK_NAME_FIELD_EMPTY", "Your first and/or last name field was empty.");
define("FEEDBACK_PASSWORD_FIELD_EMPTY", "Password field was empty.");
define("FEEDBACK_EMAIL_FIELD_EMPTY", "Email and passwords fields were empty.");
define("FEEDBACK_EMAIL_AND_PASSWORD_FIELDS_EMPTY", "Email field was empty.");
define("FEEDBACK_NAME_SAME_AS_OLD_ONE", "Sorry, that name is the same as your current one. Please choose another one.");
define("FEEDBACK_NAME_ALREADY_TAKEN", "Sorry, your name is already taken. Please only make one account.");
define("FEEDBACK_USER_EMAIL_ALREADY_TAKEN", "Sorry, that email is already in use. Please choose another one.");
define("FEEDBACK_NAME_CHANGE_SUCCESSFUL", "Your name has been updated successfully.");
define("FEEDBACK_USERNAME_AND_PASSWORD_FIELD_EMPTY", "Username and password fields were empty.");
define("FEEDBACK_NAME_DOES_NOT_FIT_PATTERN", "Your first and/or last name does not fit the name scheme: only a-Z and numbers are allowed, 2 to 20 characters.");
define("FEEDBACK_EMAIL_DOES_NOT_FIT_PATTERN", "Sorry, your chosen email does not fit into the email naming pattern.");
define("FEEDBACK_EMAIL_SAME_AS_OLD_ONE", "Sorry, that email address is the same as your current one. Please choose another one.");
define("FEEDBACK_EMAIL_CHANGE_SUCCESSFUL", "Your email address has been changed successfully.");
define("FEEDBACK_CAPTCHA_WRONG", "The entered captcha security characters were wrong.");
define("FEEDBACK_PASSWORD_REPEAT_WRONG", "Password and password repeat are not the same.");
define("FEEDBACK_PASSWORD_TOO_SHORT", "Password has a minimum length of 6 characters.");
define("FEEDBACK_USERNAME_TOO_SHORT_OR_TOO_LONG", "Username cannot be shorter than 2 or longer than 64 characters.");
define("FEEDBACK_NAME_TOO_SHORT_OR_TOO_LONG", "Your first and/or last name cannot be shorter than 2 or longer than 20 characters.");
define("FEEDBACK_EMAIL_TOO_LONG", "Email cannot be longer than 64 characters.");
define("FEEDBACK_ACCOUNT_SUCCESSFULLY_CREATED", "Your account has been created successfully and we have sent you an email. Please click the VERIFICATION LINK within that mail.");
define("FEEDBACK_VERIFICATION_MAIL_SENDING_FAILED", "Sorry, we could not send you an verification mail. Your account has NOT been created.");
define("FEEDBACK_ACCOUNT_CREATION_FAILED", "Sorry, your registration failed. Please go back and try again.");
define("FEEDBACK_VERIFICATION_MAIL_SENDING_ERROR", "Verification mail could not be sent due to: ");
define("FEEDBACK_VERIFICATION_MAIL_SENDING_SUCCESSFUL", "A verification mail has been sent successfully.");
define("FEEDBACK_ACCOUNT_ACTIVATION_SUCCESSFUL", "Activation was successful! You can now log in.");
define("FEEDBACK_ACCOUNT_ACTIVATION_FAILED", "Sorry, no such id/verification code combination here...");
define("FEEDBACK_AVATAR_UPLOAD_SUCCESSFUL", "Avatar upload was successful.");
define("FEEDBACK_AVATAR_UPLOAD_WRONG_TYPE", "Only JPEG and PNG files are supported.");
define("FEEDBACK_AVATAR_UPLOAD_TOO_SMALL", "Avatar source file's width/height is too small. Needs to be 100x100 pixel minimum.");
define("FEEDBACK_AVATAR_UPLOAD_TOO_BIG", "Avatar source file is too big. 5 Megabyte is the maximum.");
define("FEEDBACK_AVATAR_FOLDER_DOES_NOT_EXIST_OR_NOT_WRITABLE", "Avatar folder does not exist or is not writable. Please change this via chmod 775 or 777.");
define("FEEDBACK_AVATAR_IMAGE_UPLOAD_FAILED", "Something went wrong with the image upload.");
define("FEEDBACK_PASSWORD_RESET_TOKEN_FAIL", "Could not write token to database.");
define("FEEDBACK_PASSWORD_RESET_TOKEN_MISSING", "No password reset token.");
define("FEEDBACK_PASSWORD_RESET_MAIL_SENDING_ERROR", "Password reset mail could not be sent due to: ");
define("FEEDBACK_PASSWORD_RESET_MAIL_SENDING_SUCCESSFUL", "A password reset mail has been sent successfully.");
define("FEEDBACK_PASSWORD_RESET_LINK_EXPIRED", "Your reset link has expired. Please use the reset link within one hour.");
define("FEEDBACK_PASSWORD_RESET_COMBINATION_DOES_NOT_EXIST", "Username/Verification code combination does not exist.");
define("FEEDBACK_PASSWORD_RESET_LINK_VALID", "Password reset validation link is valid. Please change the password now.");
define("FEEDBACK_PASSWORD_CHANGE_SUCCESSFUL", "Password successfully changed.");
define("FEEDBACK_PASSWORD_CHANGE_FAILED", "Sorry, your password changing failed.");
define("FEEDBACK_ACCOUNT_UPGRADE_SUCCESSFUL", "Account upgrade was successful.");
define("FEEDBACK_ACCOUNT_UPGRADE_FAILED", "Account upgrade failed.");
define("FEEDBACK_ACCOUNT_DOWNGRADE_SUCCESSFUL", "Account downgrade was successful.");
define("FEEDBACK_ACCOUNT_DOWNGRADE_FAILED", "Account downgrade failed.");
define("FEEDBACK_NOTE_CREATION_FAILED", "Note creation failed.");
define("FEEDBACK_NOTE_EDITING_FAILED", "Note editing failed.");
define("FEEDBACK_NOTE_DELETION_FAILED", "Note deletion failed.");
define("FEEDBACK_COOKIE_INVALID", "Your remember-me-cookie is invalid.");
define("FEEDBACK_COOKIE_LOGIN_SUCCESSFUL", "You were successfully logged in via the remember-me-cookie.");
define("FEEDBACK_FACEBOOK_LOGIN_NOT_REGISTERED", "Sorry, you don't have an account here. Please register first.");
define("FEEDBACK_FACEBOOK_EMAIL_NEEDED", "Sorry, but you need to allow us to see your email address to register.");
define("FEEDBACK_FACEBOOK_UID_ALREADY_EXISTS", "Sorry, but you have already registered here (your Facebook ID exists in our database).");
define("FEEDBACK_FACEBOOK_EMAIL_ALREADY_EXISTS", "Sorry, but you have already registered here (your Facebook email exists in our database).");
define("FEEDBACK_FACEBOOK_USERNAME_ALREADY_EXISTS", "Sorry, but you have already registered here (your Facebook username exists in our database).");
define("FEEDBACK_FACEBOOK_REGISTER_SUCCESSFUL", "You have been successfully registered with Facebook.");
define("FEEDBACK_FACEBOOK_OFFLINE", "We could not reach the Facebook servers. Maybe Facebook is offline (that really happens sometimes).");

//tutoring feedback
define("FEEDBACK_INVALID_AGE", "Please double check the age field. We require that you are at least 12.");
define("FEEDBACK_INVALID_GRADE", "Please double check the grade field. We require you be in at least 7th grade.");
define("FEEDBACK_INCOMPLETE_FIELDS", "You must fill in all required fields.");
define("FEEDBACK_INVALID_RATE", "Please enter a valid rate in $/hour. Minimum rate is $8.");
define("FEEDBACK_TUTORING_EDIT_SUCESS", "You successfully updated your tutoring credentials.");
define("FEEDBACK_ERROR_FINDING_ID", "There was a problem loading your tutoring credentials, please contact the administrator.");
define("FEEDBACK_TOO_MANY_TUTORS", "You can only save up to 20 tutors, please delete some tutors.");
define("FEEDBACK_SUCESS_SAVING", "We sucessfully updated your saved tutors.");
define("FEEDBACK_NO_SELECTION", "You did not make a valid selection.");
define("INVALID_ACCOUNT_TYPE", "You did not make a valid account type selection");
define("FEEDBACK_NO_SUBJECT", "You must include a subject.");
define("FEEDBACK_NO_MESSAGE", "You must include a message to the tutor.");
define("FEEDBACK_EMAIL_SEND_SUCESS", "Your email has been sent.");
define("FEEDBACK_EMAIL_SEND_FAIL", "An error occured, your email has not been sent: ");
define("FEEDBACK_WARNING_SEARCH_NOT_LOGGED_IN", "You are not logged in. For the protection of our tutors, we are blocking most of the tutors' personal info (including tutor profile and contact info) and site functionality. Please <a href=\"".URL."login/index\">Login/Register</a>.");
define("FEEDBACK_WARNING_NO_RESULTS", "Sorry, we were not able to find a match for you. Perhaps broaden your search criteria and/or check back in a week or two. <a href=\"".URL."search/index\">Search Again</a>?");

//dashboard feedback
define("FEEDBACK_TUTORING_PAUSE_SUCESS", "You successfully paused your tutoring listing. You will no longer show up in searches. Click resume whenever you are ready to start tutoring again.");
define("FEEDBACK_TUTORING_RESUME_SUCESS", "You successfully resumed your tutoring listing. You will now show up in searches until your listing expires. Click pause if you want to temporarily stop tutoring.");
define("FEEDBACK_TUTORING_RESUME_PROFILE_EMPTY", "We cannot list you as a tutor if your tutor profile is empty. Please update your tutor profile.");
define("FEEDBACK_TUTOR_NOT_ACTIVE", "Your listing is not active. You will not show up in tutor searches. To make your listing active, click the Resume button after making sure your tutor profile is up to date.");
define("FEEDBACK_TUTOR_RENEW_SUCESS", "Your listing has been refreshed. You will show up in searches until your listing expires.");

//tutor reviews
define("FEEDBACK_CANT_REVIEW_YOURSELF", "Nice try. You can't review yourself.");
define("FEEDBACK_USER_DOES_NOT_OR_NOT_TUTOR","This user does not exist or is not a tutor.");
define("FEEDBACK_ALREADY_REVIEWED","You have already reviewed this tutor.");
define("FEEDBACK_SUCESS_REVIEWING","You have successfully submitted your review. Thanks for taking the time to write a review!");
