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
$foreign_language_subject = array("elementary_french", "middle_french", "french_1", "french_2", "french_3", "french_4", "french_5", "french_AP", "elementary_spanish", "middle_spanish", "spanish_1", "spanish_2", "spanish_3", "spanish_4", "spanish_5", "spanish_AP");
$social_studies_subject = array("elementary_social", "middle_social", "world_history_1", "world_history_2", "ap_world", "us_history", "econ", "psych");

if (isset($_POST['grade']) && isset($_POST['rate']))
{

        $stmt = $this->db->prepare("UPDATE tutors SET tutor_active = 1, age = :age, grade = :grade, rate = :rate, about_me = :about_me, elementary_math = :elementary_math, middle_math =:middle_math, math_1 = :math_1, math_2 = :math_2, math_3 = :math_3, math_4 = :math_4,
         stats = :stats, comp_sci = :comp_sci, calc = :calc, highest_math_name = :highest_math_name, highest_math_level = :highest_math_level, elementary_science = :elementary_science, middle_science = :middle_science,
         earth_science = :earth_science, bio = :bio, chem = :chem, phys =:phys, highest_science_name = :highest_science_name, highest_science_level = :highest_science_level, elementary_french = :elementary_french, middle_french = :middle_french, french_1 = :french_1, french_2 = :french_2,
         french_3 = :french_3, french_4 = :french_4, french_5 = :french_5, french_AP = :french_AP, highest_french_name = :highest_french_name, highest_french_level = :highest_french_level, elementary_spanish = :elementary_spanish, middle_spanish = :middle_spanish, spanish_1 = :spanish_1, spanish_2 = :spanish_2, spanish_3 = :spanish_3, spanish_4 = :spanish_4, spanish_5 = :spanish_5,
         spanish_AP = :spanish_AP, highest_spanish_name = :highest_spanish_name, highest_spanish_level = :highest_spanish_level, instrument = :instrument, music_level = :music_level, music_years = :music_years, elementary_social = :elementary_social,
         middle_social = :middle_social, world_history_1 = :world_history_1, world_history_2 = :world_history_2, ap_world = :ap_world, us_history = :us_history, econ = :econ, psych = :psych,  highest_social_name = :highest_social_name, highest_social_level = :highest_social_level WHERE id = :id LIMIT 1");

$query = array();
$query[':id'] = Session::get('user_id');

//math subjects
foreach($math_subject as $math_class)
{

    if (isset($_POST['math']) && isset($_POST[$math_class]) && in_array($math_class, $_POST['math']) && $_POST[$math_class] >= 0 && $_POST[$math_class] <= 6)
    {
        $query[':'.$math_class] = $_POST[$math_class];
    }
    else $query[':'.$math_class] = 0;
}

//science subjects
foreach($science_subject as $science_class)
{

    if (isset($_POST['science']) && isset($_POST[$science_class]) && in_array($science_class, $_POST['science']) && $_POST[$science_class] >= 0 && $_POST[$science_class] <= 6)
    {
        $query[':'.$science_class] = $_POST[$science_class];
    }
    else $query[':'.$science_class] = 0;
}

//foreighn language
foreach($foreign_language_subject as $language_class)
{
    if (isset($_POST['foreign_language']) && isset($_POST[$language_class]) && in_array($language_class, $_POST['foreign_language']) && is_numeric($_POST[$language_class]) && $_POST[$language_class] >= 0 && $_POST[$language_class] <= 6)
    {
        $query[':'.$language_class] = $_POST[$language_class];
    }
    else $query[':'.$language_class] = 0;
}

//social studies
foreach($social_studies_subject as $social_class)
{
    if (isset($_POST['social']) && isset($_POST[$social_class]) && in_array($social_class, $_POST['social']) && is_numeric($_POST[$social_class]) && $_POST[$social_class] >= 0 && $_POST[$social_class] <= 6)
    {
        $query[':'.$social_class] = $_POST[$social_class];
    }
    else $query[':'.$social_class] = 0;
}

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

if (isset($_POST['highest_math_name']) && !empty($_POST['highest_math_name']) && isset($_POST['highest_math_level']) && !empty($_POST['highest_math_level']))
{
$query[':highest_math_name'] = trim(strip_tags($_POST['highest_math_name']));

$query[':highest_math_level'] = trim(strip_tags($_POST['highest_math_level']));
}
else 
{
    $query[':highest_math_name'] = "";
    $query[':highest_math_level'] = "";
}


if (isset($_POST['highest_science_name']) && !empty($_POST['highest_science_name']) && isset($_POST['highest_science_level']) && !empty($_POST['highest_science_level']))
{
$query[':highest_science_name'] = trim(strip_tags($_POST['highest_science_name']));

$query[':highest_science_level'] = trim(strip_tags($_POST['highest_science_level']));

}
else 
{
    $query[':highest_science_name'] = "";
    $query[':highest_science_level'] = "";
}


if (isset($_POST['highest_social_name']) && !empty($_POST['highest_social_name']) && isset($_POST['highest_social_level']) && !empty($_POST['highest_social_level']))
{
$query[':highest_social_name'] = trim(strip_tags($_POST['highest_social_name']));

$query[':highest_social_level'] = trim(strip_tags($_POST['highest_social_level']));

}
else 
{
    $query[':highest_social_name'] = "";
    $query[':highest_social_level'] = "";
}

//french
if (isset($_POST['highest_french_name']) && !empty($_POST['highest_french_name']) && isset($_POST['highest_french_level']) && !empty($_POST['highest_french_level']))
{
$query[':highest_french_name'] = trim(strip_tags($_POST['highest_french_name']));

$query[':highest_french_level'] = trim(strip_tags($_POST['highest_french_level']));

}
else 
{
    $query[':highest_french_name'] = "";
    $query[':highest_french_level'] = "";
}

//spanish
if (isset($_POST['highest_spanish_name']) && !empty($_POST['highest_spanish_name']) && isset($_POST['highest_spanish_level']) && !empty($_POST['highest_spanish_level']))
{
$query[':highest_spanish_name'] = trim(strip_tags($_POST['highest_spanish_name']));

$query[':highest_spanish_level'] = trim(strip_tags($_POST['highest_spanish_level']));

}
else 
{
    $query[':highest_spanish_name'] = "";
    $query[':highest_spanish_level'] = "";
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

        return $tutor;
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