<?php

/**
 * LoginModel
 *
 * Handles the user's login / logout / registration stuff
 */

class TutorModel
{
    /**
     * Constructor, expects a Database connection
     * @param Database $db The Database object
     */
    public function __construct(Database $db)
    {
        $this->db = $db;
    }


    public function loadInfo()
    {
        $sth = $this->db->prepare("SELECT users.user_id, users.fname, users.lname, users.user_email, users.user_active, users.user_account_type, tutors.* FROM users INNER JOIN tutors ON users.user_id=tutors.id WHERE user_active = 1 AND user_id = :user_id AND user_account_type >= 2");
        $sth->execute(array(':user_id' => Session::get('user_id')));
        $user = $sth->fetch();

        $count =  $sth->rowCount();

        if ($count != 1)
        {
            $_SESSION["feedback_negative"][] = FEEDBACK_USER_DOES_NOT_EXIST;
        }

        return $user;
    }   


    public function editInfo()
    {

        $math_subject = array("elementary_math", "middle_math", "math_1", "math_2", "math_3", "math_4", "stats", "comp_sci", "calc");
        $science_subject = array("elementary_science", "middle_science", "earth_science", "bio", "chem", "phys");
        $foreign_language_subject = array("elementary_french", "middle_french", "french_1", "french_2", "french_3", "french_4", "french_5", "french_AP", "elementary_spanish", "middle_spanish", "spanish_1", "spanish_2", "spanish_3", "spanish_4", "spanish_5", "spanish_AP", "german_1", "german_2", "german_3", "german_4", "italian_1", "italian_2", "italian_3", "italian_4", "italian_AP", "mandarin_1", "mandarin_2", "mandarin_3", "mandarin_4", "mandarin_5", "mandarin_AP");
        $social_studies_subject = array("elementary_social", "middle_social", "world_history_1", "world_history_2", "ap_world", "us_history", "econ", "psych");
        $english_subject = array("analytical_essay", "memoir", "poetry", "english_project", "other_english");
        //so I don't have to type so much
        $subjects = array("math", "science", "french", "spanish", "german", "italian", "mandarin", "social", "english");

$sql = "UPDATE tutors SET tutor_active = 1, profile_expiration = :profile_expiration, age = :age, grade = :grade, rate = :rate, about_me = :about_me, instrument = :instrument, music_level = :music_level, music_years = :music_years";

foreach($subjects as $subject) $sql .= ", highest_".$subject."_name = :highest_".$subject."_name, highest_".$subject."_level = :highest_".$subject."_level";


       if (isset($_POST['grade']) && isset($_POST['rate']))
        {

$query = array();
$query[':id'] = Session::get('user_id');

//math subjects
foreach($math_subject as $math_class)
{
    $sql .= ", ".$math_class." = :".$math_class;

    if (isset($_POST['math']) && isset($_POST[$math_class]) && in_array($math_class, $_POST['math']) && $_POST[$math_class] >= 0 && $_POST[$math_class] <= 6)
    {
        $query[':'.$math_class] = $_POST[$math_class];
    }
    else $query[':'.$math_class] = 0;
}

//science subjects
foreach($science_subject as $science_class)
{
    $sql .= ", ".$science_class." = :".$science_class;

    if (isset($_POST['science']) && isset($_POST[$science_class]) && in_array($science_class, $_POST['science']) && $_POST[$science_class] >= 0 && $_POST[$science_class] <= 6)
    {
        $query[':'.$science_class] = $_POST[$science_class];
    }
    else $query[':'.$science_class] = 0;
}

//foreighn language
foreach($foreign_language_subject as $language_class)
{
    $sql .= ", ".$language_class." = :".$language_class;

    if (isset($_POST['foreign_language']) && isset($_POST[$language_class]) && in_array($language_class, $_POST['foreign_language']) && is_numeric($_POST[$language_class]) && $_POST[$language_class] >= 0 && $_POST[$language_class] <= 6)
    {
        $query[':'.$language_class] = $_POST[$language_class];
    }
    else $query[':'.$language_class] = 0;
}

//social studies
foreach($social_studies_subject as $social_class)
{
    $sql .= ", ".$social_class." = :".$social_class;

    if (isset($_POST['social']) && isset($_POST[$social_class]) && in_array($social_class, $_POST['social']) && is_numeric($_POST[$social_class]) && $_POST[$social_class] >= 0 && $_POST[$social_class] <= 6)
    {
        $query[':'.$social_class] = $_POST[$social_class];
    }
    else $query[':'.$social_class] = 0;
}

//english
foreach($english_subject as $english_class)
{
    $sql .= ", ".$english_class." = :".$english_class;

    if (isset($_POST['english']) && isset($_POST[$english_class]) && in_array($english_class, $_POST['english']) && is_numeric($_POST[$english_class]) && $_POST[$english_class] >= 0 && $_POST[$english_class] <= 6)
    {
        $query[':'.$english_class] = $_POST[$english_class];
    }
    else $query[':'.$english_class] = 0;
}

//finsih building query
$sql .= " WHERE id = :id LIMIT 1";
$stmt = $this->db->prepare($sql);


//age
if (isset($_POST['age']) && !empty(trim($_POST['age'])))
{
    if (is_numeric(trim($_POST['age'])) && trim($_POST['age']) >= 12 && trim($_POST['age']) < 150)
    {
        $query[':age'] = trim($_POST['age']);
    }
    else
    {
        $_SESSION["feedback_negative"][] = FEEDBACK_INVALID_AGE;
        return false;
    }
}
else
{
 $query[':age'] = ""; 
}




if (is_numeric(trim($_POST['rate'])) && trim($_POST['rate']) >= 8 && trim($_POST['rate']) < 150)
{
    $query[':rate'] = trim($_POST['rate']);
}
else
{
    $_SESSION["feedback_negative"][] = FEEDBACK_INVALID_RATE;
    return false;
}


if (is_numeric($_POST['grade']) && is_numeric(trim($_POST['grade'])) && trim($_POST['grade']) >=7 && trim($_POST['grade']) <= 16)
{
    $query[':grade'] = $_POST['grade'];
}
else
{
    $_SESSION["feedback_negative"][] = FEEDBACK_INVALID_GRADE;
    return false;
}


if (isset($_POST['about_me']))
{
 $query[':about_me'] = trim(strip_tags($_POST['about_me']), '<p></p><br></br>');
}
else
{
    $query[':about_me'] = "";
}

//take care of highest levels
foreach($subjects as $subject)
{
if (isset($_POST["highest_".$subject."_name"]) && !empty($_POST["highest_".$subject."_name"]) && isset($_POST["highest_".$subject."_level"]) && !empty($_POST["highest_".$subject."_level"]))
{
    $query[":highest_".$subject."_name"] = trim(strip_tags($_POST["highest_".$subject."_name"]));

    $query[":highest_".$subject."_level"] = trim(strip_tags($_POST["highest_".$subject."_level"]));
}
else 
{
    $query[":highest_".$subject."_name"] = "";
    $query[":highest_".$subject."_level"] = "";
}
}


if (isset($_POST['instrument']) && !empty($_POST['instrument']) && isset($_POST['music_level']) && !empty($_POST['music_level']) && is_numeric($_POST['music_level']) && $_POST['music_level'] > 0)
{
    $query[':instrument'] = trim(strip_tags($_POST['instrument']));
    $query[':music_level'] = trim(strip_tags($_POST['music_level']));

//years of experiance
    if (isset($_POST['music_years']) && !empty(trim($_POST['music_years'])) && is_numeric(trim($_POST['music_years'])) && trim($_POST['music_years']) >= 0 && trim($_POST['music_years']) < 100)
    {
        $query[':music_years'] = trim($_POST['music_years']);
    }
    else
    {
     $query[':music_years'] = ""; 
 }


}
else 
{
    $query[':instrument'] = "";
    $query[':music_level'] = "";
    $query[':music_years'] = ""; 
}

//90 days from now
$query['profile_expiration'] = time() + (3600*24*90);


//execute the update
$stmt->execute($query);

$_SESSION["feedback_positive"][] = FEEDBACK_TUTORING_EDIT_SUCESS;
return false;
}

//if required fields not filled in
else
{
    $_SESSION["feedback_negative"][] = FEEDBACK_INCOMPLETE_FIELDS;
    return false;
}
}


public function dashBoardActions()
{
    if (isset($_POST['actions']) && !empty($_POST['actions']))
    {

        $sth = $this->db->prepare("SELECT * FROM tutors WHERE id = :user_id");
        $sth->execute(array(':user_id' => Session::get('user_id')));
        $tutor = $sth->fetch();
        if ($sth->rowCount() != 1)
        {
            $_SESSION["feedback_negative"][] = FEEDBACK_UNKNOWN_ERROR;
            return 1;
        }

        if (in_array("resume_pause", $_POST['actions']))
        { 
            if ($tutor->tutor_active == 0)
            {
            	if(empty($tutor->grade) || empty($tutor->rate))
            	{
            		$_SESSION["feedback_negative"][] = FEEDBACK_TUTORING_RESUME_PROFILE_EMPTY;
            		return 1;
            	}
            //once payment process added be sure to check if they are a professional tutor
                $stmt = $this->db->prepare("UPDATE tutors SET tutor_active = :tutor_active, profile_expiration = :profile_expiration WHERE id = :user_id LIMIT 1");
                $query[':tutor_active'] = 1;
                $query[':profile_expiration'] = time() + (3600*24*90);
                $query[':user_id'] = Session::get('user_id');

                $stmt->execute($query);
                if ($stmt->rowCount() != 1)
                {
                    $_SESSION["feedback_negative"][] = FEEDBACK_UNKNOWN_ERROR;
                    return 1;
                }
                $_SESSION["feedback_positive"][] = FEEDBACK_TUTORING_RESUME_SUCESS;
            }

            else
            {
             $stmt = $this->db->prepare("UPDATE tutors SET tutor_active = :tutor_active WHERE id = :user_id LIMIT 1");
             $query[':tutor_active'] = 0;
             $query[':user_id'] = Session::get('user_id');

             $stmt->execute($query);
             if ($stmt->rowCount() != 1)
             {
                $_SESSION["feedback_negative"][] = FEEDBACK_UNKNOWN_ERROR;
                return 1;
            }
            $_SESSION["feedback_positive"][] = FEEDBACK_TUTORING_PAUSE_SUCESS;
            }
        }

        if (in_array("refresh", $_POST['actions']))
        {
        	if(empty($tutor->grade) || empty($tutor->rate))
            	{
            		$_SESSION["feedback_negative"][] = FEEDBACK_TUTORING_RESUME_PROFILE_EMPTY;
            		return 1;
            	}
            //once payment process, check if professional tutor, and if so take them to payment page
             $stmt = $this->db->prepare("UPDATE tutors SET tutor_active = 1, profile_expiration = :profile_expiration WHERE id = :user_id LIMIT 1");
             $query[':profile_expiration'] = time() + (3600*24*90);
             $query[':user_id'] = Session::get('user_id');

             $stmt->execute($query);
             if ($stmt->rowCount() != 1)
             {
                $_SESSION["feedback_negative"][] = FEEDBACK_UNKNOWN_ERROR;
                return 1;
            }
            $_SESSION["feedback_positive"][] = FEEDBACK_TUTOR_RENEW_SUCESS;

        }
        return 0;
    }

$_SESSION["feedback_negative"][] = FEEDBACK_NO_SELECTION;
}

public function getUserProfile()
{
    $sql = "SELECT users.*, tutors.* FROM users INNER JOIN tutors ON users.user_id=tutors.id WHERE user_active =1 AND user_account_type >= 2 AND user_id = :user_id";

    $sth = $this->db->prepare($sql);
    $sth->execute(array(':user_id' => Session::get('user_id')));

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


        if ($tutor->grade > 12)
        {
            switch($tutor->grade)
            {
                case 13:
                $tutor->grade = "High School Graduate";
                break;

                case 14:
                $tutor->grade = "College";
                break;

                case 15:
                $tutor->grade = "College Graduate";
                break;

                default:
                $tutor->grade = "College Graduate+";

            }
        }
        else $tutor->grade = (string)$tutor->grade.'th';

    if ($tutor->tutor_active != 1) $_SESSION["feedback_neutral"][] = FEEDBACK_TUTOR_NOT_ACTIVE;

    return $tutor;
}

    public function getReviews()
    {
    	$review = array();
    	$stmt = $this->db->prepare("SELECT users.fname, users.lname, reviews.* FROM reviews INNER JOIN users ON reviews.reviewer_id = users.user_id WHERE tutor_id = :user_id ORDER BY time DESC");
    	$stmt->execute(array(':user_id' => Session::get('user_id')));


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