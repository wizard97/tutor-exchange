<?php

/**
 * OverviewModel
 * Handles data for overviews (pages that show user profiles / lists)
 */
class SearchModel
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
     * Gets an array that contains all the users in the database. The array's keys are the user ids.
     * Each array element is an object, containing a specific user's data.
     * @return array The profiles of all users
     */
    public function getResults()
    {

$this->AddOneSearch();

$math_subject = array("elementary_math", "middle_math", "math_1", "math_2", "math_3", "math_4", "stats", "comp_sci", "calc");
$science_subject = array("elementary_science", "middle_science", "earth_science", "bio", "chem", "phys");
$foreign_language_subject = array("elementary_french", "middle_french", "french_1", "french_2", "french_3", "french_4", "french_5", "french_AP", "elementary_spanish", "middle_spanish", "spanish_1", "spanish_2", "spanish_3", "spanish_4", "spanish_5", "spanish_AP");
$social_studies_subject = array("elementary_social", "middle_social", "world_history_1", "world_history_2", "ap_world", "us_history", "econ", "psych");

$sql_stub = "SELECT users.user_id, users.fname, users.lname, users.user_email, users.user_active, users.user_has_avatar, users.user_account_type, tutors.* FROM users INNER JOIN tutors ON users.user_id=tutors.id WHERE user_active =1 AND user_account_type >= 2 AND tutor_active = 1";

$sql_vars=array();

//create the prepared statement based on classes the user selected

//math
foreach($math_subject as $math_class)
{
    if (isset($_POST['math']) && isset($_POST[$math_class]) && in_array($math_class, $_POST['math']) && is_numeric($_POST[$math_class]) && $_POST[$math_class] >= 0 && $_POST[$math_class] <= 6)
    {
    $sql_stub.=" AND ".$math_class." >= :".$math_class;
    $sql_vars[":".$math_class] = $_POST[$math_class];
    }
}

//science
foreach($science_subject as $science_class)
{
    if (isset($_POST['science']) && isset($_POST[$science_class]) && in_array($science_class, $_POST['science']) && is_numeric($_POST[$science_class]) && $_POST[$science_class] >= 0 && $_POST[$science_class] <= 6)
    {
    $sql_stub.=" AND ".$science_class." >= :".$science_class;
    $sql_vars[":".$science_class] = $_POST[$science_class];
    }
}

//science
foreach($social_studies_subject as $social_class)
{
    if (isset($_POST['social']) && isset($_POST[$social_class]) && in_array($social_class, $_POST['social']) && is_numeric($_POST[$social_class]) && $_POST[$social_class] >= 0 && $_POST[$social_class] <= 6)
    {
    $sql_stub.=" AND ".$social_class." >= :".$social_class;
    $sql_vars[":".$social_class] = $_POST[$social_class];
    }
}

//social studies
foreach($foreign_language_subject as $language_class)
{
    if (isset($_POST['foreign_language']) && isset($_POST[$language_class]) && in_array($language_class, $_POST['foreign_language']) && is_numeric($_POST[$language_class]) && $_POST[$language_class] >= 0 && $_POST[$language_class] <= 6)
    {
    $sql_stub.=" AND ".$language_class." >= :".$language_class;
    $sql_vars[":".$language_class] = $_POST[$language_class];
    }
}


//music
if (isset($_POST['instrument']) && !empty($_POST['instrument']) && isset($_POST['music']) && $_POST['music'] == 1 && isset($_POST['music_level']) && !empty($_POST['music_level']) && is_numeric($_POST['music_level']))
{
    $sql_stub.=" AND instrument = :instrument";
    $sql_stub.=" AND music_level >= :music_level";
    $sql_vars[":instrument"] = $_POST['instrument'];
    $sql_vars[":music_level"] = $_POST['music_level'];
}


if (isset($_POST['start_rate']) && isset($_POST['end_rate']) && !empty($_POST['end_rate']) && !empty($_POST['start_rate']))
{
    if (trim($_POST['end_rate']) < 1 || trim($_POST['start_rate']) < 1 || trim($_POST['end_rate']) < trim($_POST['start_rate']) || !is_numeric(trim($_POST['start_rate'])) || !is_numeric(trim($_POST['end_rate'])))
    {
    $_SESSION["feedback_negative"][] = FEEDBACK_INVALID_RATE;
    return false;
    }

    else
    {
    $sql_stub.=" AND rate >= :start_rate AND rate <= :end_rate";
    $sql_vars[":start_rate"] = trim($_POST['start_rate']);
    $sql_vars[":end_rate"] = trim($_POST['end_rate']);
    }
}
elseif (isset($_POST['start_rate']) && !empty($_POST['start_rate']))
{
    if (trim($_POST['start_rate']) < 1 || !is_numeric(trim($_POST['start_rate'])))
    {
    $_SESSION["feedback_negative"][] = FEEDBACK_INVALID_RATE;
    return false;
    }
    else
    {
    $sql_stub.=" AND rate >= :start_rate";
    $sql_vars[":start_rate"] = trim($_POST['start_rate']);
    }
}
elseif (isset($_POST['end_rate']) && !empty($_POST['end_rate']))
{
    if (trim($_POST['end_rate']) < 1 || !is_numeric(trim($_POST['end_rate'])))
    {
    $_SESSION["feedback_negative"][] = FEEDBACK_INVALID_RATE;
    return false;
    }
    else
    {
    $sql_stub.=" AND rate >= :end_rate";
    $sql_vars[":end_rate"] = trim($_POST['end_rate']);
    }
}


if (isset($_POST['min_grade']) && is_numeric(trim($_POST['min_grade'])) && trim($_POST['min_grade']) >= 6 && trim($_POST['min_grade']) <= 16)
{
$sql_stub.=" AND grade >= :min_grade";
$sql_vars[":min_grade"] = trim($_POST['min_grade']);
}

//get the saved tutors
if(SESSION::get('user_logged_in'))
{
$tutor_array = $this->getSavedTutors();
}
else
{
$_SESSION["feedback_neutral"][] = FEEDBACK_WARNING_SEARCH_NOT_LOGGED_IN;
}

$sth = $this->db->prepare($sql_stub);
$sth->execute($sql_vars);


        $count =  $sth->rowCount();
           if ($count == 0) {
            $_SESSION["feedback_neutral"][] = FEEDBACK_WARNING_NO_RESULTS;
            return array();
        }

        $all_users = array();

        foreach ($sth->fetchAll() as $user) {
            // a new object for every user. This is eventually not really optimal when it comes
            // to performance, but it fits the view style better
            $all_users[$user->user_id] = new stdClass();
            $all_users[$user->user_id]->user_id = $user->user_id;
            $all_users[$user->user_id]->fname = $user->fname;
            $all_users[$user->user_id]->lname = $user->lname;
            $all_users[$user->user_id]->age = $user->age;
            $all_users[$user->user_id]->grade = $user->grade;
            $all_users[$user->user_id]->user_email = $user->user_email;
            $all_users[$user->user_id]->user_account_type = $user->user_account_type;
            $all_users[$user->user_id]->highest_math_name = $user->highest_math_name;
            $all_users[$user->user_id]->highest_math_level = $user->highest_math_level;
            $all_users[$user->user_id]->rate = $user->rate;

//reviews
        $stmt = $this->db->prepare("SELECT * FROM reviews WHERE tutor_id = :user_id");
        $stmt->execute(array(':user_id' => $user->user_id));

$all_users[$user->user_id]->review_number = $stmt->rowCount();

        if ($stmt->rowCount() != 0)
        {
            $avg_rating = 0;

            $i = 0;
            foreach ($stmt->fetchAll() as $tutor_review) {
                //sum up all reviews, to find average later
                $avg_rating += $tutor_review->rating;
                $i++;
            }

            $all_users[$user->user_id]->star_count = floor($avg_rating/($stmt->rowCount()));
            $all_users[$user->user_id]->avg_rating = round((float)$avg_rating/(float)($stmt->rowCount()), 1);
            if((float)$all_users[$user->user_id]->avg_rating - floor($all_users[$user->user_id]->avg_rating) >= 0.2 && (float)$all_users[$user->user_id]->avg_rating - floor($all_users[$user->user_id]->avg_rating) <= 0.7) $all_users[$user->user_id]->half_star = true;
            else $all_users[$user->user_id]->half_star = false;
        }
        else
        {
            $all_users[$user->user_id]->star_count = 0;
            $all_users[$user->user_id]->half_star = false;
        $all_users[$user->user_id]->avg_rating = 0;
        }



            if(SESSION::get('user_logged_in') && array_key_exists((string)$user->user_id, $tutor_array))
            {
                $all_users[$user->user_id]->check = true;
            }
            else
            {
               $all_users[$user->user_id]->check = false; 
            }


            if (USE_GRAVATAR) {
                $all_users[$user->user_id]->user_avatar_link =
                    $this->getGravatarLinkFromEmail($user->user_email);
            } else {
                $all_users[$user->user_id]->user_avatar_link =
                    $this->getUserAvatarFilePath($user->user_has_avatar, $user->user_id);
            }

           $all_users[$user->user_id]->user_active = $user->user_active;
        }
        return $all_users;
    }


        public function AddOneSearch()
    {

$stmt = $this->db->prepare("UPDATE stats SET searches=searches+1");
$stmt->execute();
return false;
}



public function saveTutors()
{
if (!isset($_POST['saved_tutors_id']) || !is_array($_POST['saved_tutors_id']) || empty($_POST['saved_tutors_id']))
{
    return false;
}
$tutors_form_array = $_POST['saved_tutors_id'];


//get saved tutors from DB
$tutor_array = array();
$tutor_array = $this->getSavedTutors();


foreach($tutors_form_array  as $tutor_form_id)
{
$tutor_form_id = preg_replace('/[^0-9.]+/', '', $tutor_form_id);
if(count($tutor_array) > 20)
{
$_SESSION["feedback_negative"][] = FEEDBACK_TOO_MANY_TUTORS;
return false;
}
elseif (array_key_exists($tutor_form_id, $tutor_array)) unset($tutor_array[$tutor_form_id]);
else $tutor_array[$tutor_form_id] = time();
}

$saved_tutors_time = implode(",", $tutor_array);
$saved_tutors_id = implode(",", array_keys($tutor_array));


$save = $this->db->prepare("UPDATE users SET saved_tutors_id = :saved_tutors_id, saved_tutors_time = :saved_tutors_time WHERE user_id = :user_id LIMIT 1");

$save->execute(array(":saved_tutors_id" => $saved_tutors_id, ":saved_tutors_time" => $saved_tutors_time, ":user_id" => SESSION::get('user_id')));

$_SESSION["feedback_positive"][] = FEEDBACK_SUCESS_SAVING;
return false;
}


public function getSavedTutors()
{
$query = $this->db->prepare("SELECT saved_tutors_id, saved_tutors_time FROM users WHERE user_id = :user_id LIMIT 1");
$query->execute(array(':user_id' => SESSION::get('user_id')));

$results = $query->fetch();
$tutor_array = array();


if (!empty($results->saved_tutors_id) && !empty($results->saved_tutors_time))
{
$saved_tutors_id = explode(",", $results->saved_tutors_id);
$saved_tutors_time = explode(",", $results->saved_tutors_time);

if (count($saved_tutors_id) == count($saved_tutors_time))
{
for($i=0; $i < count($saved_tutors_id); $i++) $tutor_array[$saved_tutors_id[$i]] = $saved_tutors_time[$i];
}
}

return $tutor_array;
}

public function getTutor($user_id)
{
if (!isset($user_id))
{
     $_SESSION["feedback_negative"][] = FEEDBACK_USER_DOES_NOT_EXIST;
    return false;   
}

$query = $this->db->prepare("SELECT fname, lname, user_id FROM users WHERE user_id = :user_id LIMIT 1");
$query->execute(array(':user_id' => $user_id));
$tutor = $query->fetch();

if($query->rowCount() != 1)
{
    $_SESSION["feedback_negative"][] = FEEDBACK_USER_DOES_NOT_EXIST;
    return false;
}


return $tutor;
}

public function emailTutor_action($user_id)
{

if (!isset($user_id))
{
     $_SESSION["feedback_negative"][] = FEEDBACK_USER_DOES_NOT_EXIST;
    return false;   
}


$query = $this->db->prepare("SELECT users.fname, users.lname, users.user_email, users.user_account_type FROM users INNER JOIN tutors ON users.user_id=tutors.id WHERE user_id = :user_id LIMIT 1");
$query->execute(array(':user_id' => $user_id));
$tutor = $query->fetch();

if($query->rowCount() != 1)
{
    $_SESSION["feedback_negative"][] = FEEDBACK_USER_DOES_NOT_OR_NOT_TUTOR;
    return false;
}

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


    $mail->From = EMAIL_FROM;
    $mail->addReplyTo(SESSION::get('user_email'), (SESSION::get('fname').' '.Session::get('lname')));
    $mail->FromName = EMAIL_CONTACT_FROM_NAME;
    $mail->AddAddress($tutor->user_email);


    if (empty($_POST['subject']) || !isset($_POST['subject']))
    {
       $_SESSION["feedback_negative"][] =  FEEDBACK_NO_SUBJECT;
       return false;
    }
    else
    {
    $mail->Subject = trim($_POST['subject']);
    }

    if (empty(trim($_POST['message'])) || !isset($_POST['message']))
    {
      $_SESSION["feedback_negative"][] =  FEEDBACK_NO_MESSAGE;
       return false;  
    }

    $mail->Body = "Someone looking for a tutor on Lexington Tutor Exchange has contacted you. They will not know your email address until you reply.\n\nSincerely,\nLexington Tutor Exchange\n\n_____Begin Forwarded Message_____\n\n".trim($_POST['message']);
        // final sending and check
        if($mail->Send()) {
            $_SESSION["feedback_positive"][] = FEEDBACK_EMAIL_SEND_SUCESS;
            return true;
        } else {
            $_SESSION["feedback_negative"][] = FEEDBACK_EMAIL_SEND_FAIL . $mail->ErrorInfo;
            return false;
        }
    }


    public function reviewTutor_action($user_id)
{

if (!isset($user_id))
{
     $_SESSION["feedback_negative"][] = FEEDBACK_USER_DOES_NOT_EXIST;
    return false;   
}
elseif($user_id == SESSION::get('user_id'))
{
$_SESSION["feedback_negative"][] = FEEDBACK_CANT_REVIEW_YOURSELF;
return false;
}

$query = $this->db->prepare("SELECT * FROM tutors WHERE id = :user_id LIMIT 1");
$query->execute(array(':user_id' => $user_id));
$tutor = $query->fetch();

if($query->rowCount() != 1)
{
    $_SESSION["feedback_negative"][] = FEEDBACK_USER_DOES_NOT_OR_NOT_TUTOR;
    return false;
}

$query = $this->db->prepare("SELECT * FROM reviews WHERE reviewer_id = :reviewer_id AND tutor_id = :tutor_id LIMIT 1");
$query->execute(array('reviewer_id' => SESSION::get('user_id'), ':tutor_id' => $user_id));
$tutor = $query->fetch();

if($query->rowCount() != 0)
{
    $_SESSION["feedback_negative"][] = FEEDBACK_ALREADY_REVIEWED;
    return false;
}

if (!isset($_POST['review_title']) || empty($_POST['review_title']) || !isset($_POST['message']) || !isset($_POST['rating']) || empty($_POST['rating']) || !isset($_POST['message']) || ($_POST['reviewer'] != "student" && $_POST['reviewer'] != "parent") || empty($_POST['message']) || !is_numeric($_POST['rating']) || $_POST['rating'] < 0 || $_POST['rating'] > 5)
{
$_SESSION["feedback_negative"][] = FEEDBACK_INCOMPLETE_FIELDS;
return false;
}

$anonymous = 0;
if (isset($_POST['anonymous']) && $_POST['anonymous'] == 1)
{
$anonymous = 1;
}

$query = $this->db->prepare("INSERT INTO reviews (reviewer_id, tutor_id, reviewer, rating, review_title, message, time, anonymous) VALUES (:reviewer_id, :tutor_id, :reviewer, :rating, :review_title, :message, :time, :anonymous)");
$query->execute(array('reviewer_id' => SESSION::get('user_id'), ':tutor_id' => $user_id, ':reviewer' => $_POST['reviewer'], ':rating' => trim($_POST['rating']), ':review_title' => trim($_POST['review_title']), ':message' => trim(strip_tags($_POST['message'])), ':time' => time(), ':anonymous' => $anonymous));

$_SESSION["feedback_positive"][] = FEEDBACK_SUCESS_REVIEWING;
return true;
    }


    public function getReviews($user_id)
    {
    	$review = array();
    	$stmt = $this->db->prepare("SELECT users.fname, users.lname, reviews.* FROM reviews INNER JOIN users ON reviews.reviewer_id = users.user_id WHERE tutor_id = :user_id ORDER BY time DESC");
    	$stmt->execute(array(':user_id' => $user_id));


    	$review['review_stats'] = new stdClass();
    	$review['all_reviews'] = array();

    	if ($stmt->rowCount() != 0)
    	{
    		$review['review_stats']->has_reviews = true;
    		$avg_rating = 0;

    		$i = 0;
    		foreach ($stmt->fetchAll() as $tutor_review) {
    			//sum up all reviews, to find average later
    			$avg_rating += $tutor_review->rating;
    			//save all individual reviews
    			$review['all_reviews'][$i] = new stdClass();
    			$review['all_reviews'][$i]->rating = $tutor_review->rating;
				$review['all_reviews'][$i]->review_title = $tutor_review->review_title;
    			if (!$tutor_review->anonymous) $review['all_reviews'][$i]->reviewer_name = $tutor_review->fname.' '.$tutor_review->lname;
    			else $review['all_reviews'][$i]->reviewer_name = "Anonymous";
    			$review['all_reviews'][$i]->time = $tutor_review->time;
    			$review['all_reviews'][$i]->reviewer = $tutor_review->reviewer;
    			$review['all_reviews'][$i]->message = $tutor_review->message;
    			$i++;
    		}


    		$review['review_stats']->star_count = floor($avg_rating/($stmt->rowCount()));
    		$review['review_stats']->avg_rating = round((float)$avg_rating/(float)($stmt->rowCount()), 1);
    		if((float)$review['review_stats']->avg_rating - floor($review['review_stats']->avg_rating) >= 0.2 && (float)$review['review_stats']->avg_rating - floor($review['review_stats']->avg_rating) <= 0.7) $review['review_stats']->half_star = true;
    		else $review['review_stats']->half_star = false;
    		$review['review_stats']->review_number = $stmt->rowCount();

    	}
    	else
    	{
    		$review['review_stats']->star_count = 0;
    		$review['review_stats']->half_star = false;
    	$review['review_stats']->has_reviews = false;
    	$review['review_stats']->review_number = 0;
    	$review['review_stats']->avg_rating = 0;
    	}
return $review;
    }

public function loadSaved()
{
$all_users = array();

if (!empty($this->getSavedTutors()))
{

    $ids = implode(", ", array_keys($this->getSavedTutors()));

    $stub = "SELECT users.user_id, users.fname, users.lname, users.user_email, users.user_active, users.user_has_avatar, users.user_account_type, tutors.* FROM users INNER JOIN tutors ON users.user_id=tutors.id WHERE user_active =1 AND user_account_type >= 2 AND user_id IN ($ids)";

$query = $this->db->prepare($stub);

$query->execute();

        foreach ($query->fetchAll() as $user) {
            // a new object for every user. This is eventually not really optimal when it comes
            // to performance, but it fits the view style better
            $all_users[$user->user_id] = new stdClass();
            $all_users[$user->user_id]->user_id = $user->user_id;
            $all_users[$user->user_id]->fname = $user->fname;
            $all_users[$user->user_id]->lname = $user->lname;
            $all_users[$user->user_id]->age = $user->age;
            $all_users[$user->user_id]->grade = $user->grade;
            $all_users[$user->user_id]->user_email = $user->user_email;
            $all_users[$user->user_id]->user_account_type = $user->user_account_type;
            $all_users[$user->user_id]->highest_math_name = $user->highest_math_name;
            $all_users[$user->user_id]->highest_math_level = $user->highest_math_level;
            $all_users[$user->user_id]->rate = $user->rate;


            if (USE_GRAVATAR) {
                $all_users[$user->user_id]->user_avatar_link =
                    $this->getGravatarLinkFromEmail($user->user_email);
            } else {
                $all_users[$user->user_id]->user_avatar_link =
                    $this->getUserAvatarFilePath($user->user_has_avatar, $user->user_id);
            }

           $all_users[$user->user_id]->user_active = $user->user_active;
        }
    }
        return $all_users;

}

public function deleteSaved()
{
if (!isset($_POST['delete_tutors_id']) || !is_array($_POST['delete_tutors_id']) || empty($_POST['delete_tutors_id']))
{
    $_SESSION["feedback_negative"][] = FEEDBACK_NO_SELECTION;
    return false;
}
$tutors_form_array = $_POST['delete_tutors_id'];


//get saved tutors from DB
$tutor_array = array();
$tutor_array = $this->getSavedTutors();


foreach($tutors_form_array as $tutor_form_id)
{
unset($tutor_array[$tutor_form_id]);
}

$saved_tutors_time = implode(",", $tutor_array);
$saved_tutors_id = implode(",", array_keys($tutor_array));


$save = $this->db->prepare("UPDATE users SET saved_tutors_id = :saved_tutors_id, saved_tutors_time = :saved_tutors_time WHERE user_id = :user_id LIMIT 1");

$save->execute(array(":saved_tutors_id" => $saved_tutors_id, ":saved_tutors_time" => $saved_tutors_time, ":user_id" => SESSION::get('user_id')));

$_SESSION["feedback_positive"][] = FEEDBACK_SUCESS_SAVING;
return false;
}


    /**
     * Gets a user's profile data, according to the given $user_id
     * @param int $user_id The user's id
     * @return object/null The selected user's profile
     */
    public function getUserProfile($user_id)
    {
        $sql = "SELECT users.*, tutors.* FROM users INNER JOIN tutors ON users.user_id=tutors.id WHERE user_active =1 AND user_account_type >= 2 AND user_id = :user_id";

        $sth = $this->db->prepare($sql);
        $sth->execute(array(':user_id' => $user_id));

        $tutor = $sth->fetch();
        $count =  $sth->rowCount();

        if ($count == 1) {
            if (USE_GRAVATAR) {
                $tutor->user_avatar_link = $this->getGravatarLinkFromEmail($tutor->user_email);
            } else {
                $tutor->user_avatar_link = $this->getUserAvatarFilePath($tutor->user_has_avatar, $tutor->user_id);
            }
        } else {
            $_SESSION["feedback_negative"][] = FEEDBACK_USER_DOES_NOT_EXIST;
            return false;
        }
        $stmt = $this->db->prepare("UPDATE tutors SET profile_views=profile_views+1 WHERE id = :user_id LIMIT 1");
$stmt->execute(array(':user_id' => $user_id));

        return $tutor;
    }


    /**
     * Gets a gravatar image link from given email address
     *
     * Gravatar is the #1 (free) provider for email address based global avatar hosting.
     * The URL (or image) returns always a .jpg file !
     * For deeper info on the different parameter possibilities:
     * @see http://gravatar.com/site/implement/images/
     * @source http://gravatar.com/site/implement/images/php/
     *
     * This method will return in something like
     * http://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50?s=80&d=mm&r=g
     * Note: the url does NOT have something like ".jpg" ! It works without.
     *
     * @param string $email The email address
     * @param int|string $s Size in pixels, defaults to 50px [ 1 - 2048 ]
     * @param string $d Default imageset to use [ 404 | mm | identicon | monsterid | wavatar ]
     * @param string $r Maximum rating (inclusive) [ g | pg | r | x ]
     * @param array $options Optional, additional key/value attributes to include in the IMG tag
     * @return string
     */
    public function getGravatarLinkFromEmail($email, $s = AVATAR_SIZE, $d = 'mm', $r = 'pg', $options = array())
    {
        $gravatar_image_link = 'http://www.gravatar.com/avatar/';
        $gravatar_image_link .= md5( strtolower( trim( $email ) ) );
        $gravatar_image_link .= "?s=$s&d=$d&r=$r";

        return $gravatar_image_link;
    }

    /**
     * Gets the user's avatar file path
     * @param int $user_has_avatar Marker from database
     * @param int $user_id User's id
     * @return string/null Avatar file path
     */
    public function getUserAvatarFilePath($user_has_avatar, $user_id)
    {
        if ($user_has_avatar) {
            return URL . AVATAR_PATH . $user_id . '.jpg';
        } else {
            return URL . AVATAR_PATH . AVATAR_DEFAULT_IMAGE;
        }
        // default return
        return null;
    }
}
