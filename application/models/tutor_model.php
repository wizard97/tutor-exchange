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
        $sth = $this->db->prepare("SELECT users.user_id, users.fname, users.lname, users.user_email, users.user_active, users.user_account_type, tutors.* FROM users INNER JOIN tutors ON users.user_id=tutors.id WHERE user_active = 1 AND user_id = :user_id");
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

        $stmt = $this->db->prepare("UPDATE tutors SET age = :age, grade = :grade, about_me = :about_me, elementary_math = :elementary_math, middle_math =:middle_math, math_1 = :math_1, math_2 = :math_2, math_3 = :math_3, math_4 = :math_4,
         stats = :stats, comp_sci = :comp_sci, calc = :calc, highest_math_name = :highest_math_name, highest_math_level = :highest_math_level WHERE id = :id LIMIT 1");


$query = array();

foreach($math_subject as $math_class)
{

    if (isset($_POST['math']) && isset($_POST[$math_class]) && in_array($math_class, $_POST['math']) && $_POST[$math_class] >= 0 && $_POST[$math_class] <= 6)
    {
        $query[':'.$math_class] = $_POST[$math_class];
    }

    else $query[':'.$math_class] = 0;

}

    $query[':id'] = Session::get('user_id');



if (isset($_POST['grade']) && isset($_POST['highest_math_name']) && !empty(trim($_POST['highest_math_name'])) && isset($_POST['highest_math_level']) && !empty(trim($_POST['highest_math_level'])))

{


if (isset($_POST['age']))
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


if ($_POST['grade'] == "6th" || $_POST['grade'] == "7th" || $_POST['grade'] == "8th" || $_POST['grade'] == "9th" || $_POST['grade'] == "10th" || $_POST['grade'] == "11th" || $_POST['grade'] == "12th" || $_POST['grade'] == "High School Grad."
 || $_POST['grade'] == "College" || $_POST['grade'] == "College Grad.")
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
   $query[':about_me'] = trim(strip_tags($_POST['about_me']));
}
else
{
    $query[':about_me'] = "";
}


$query[':highest_math_name'] = trim(strip_tags($_POST['highest_math_name']));

$query[':highest_math_level'] = trim(strip_tags($_POST['highest_math_level']));



 $stmt->execute($query);
$_SESSION["feedback_positive"][] = FEEDBACK_TUTORING_EDIT_SUCESS;
    return false;
}


else
{
    $_SESSION["feedback_negative"][] = FEEDBACK_INCOMPLETE_FIELDS;
    return false;
}

}



 }