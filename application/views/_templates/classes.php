<?php



        $math_subject = array("elementary_math", "middle_math", "math_1", "math_2", "math_3", "math_4", "stats", "comp_sci", "calc");
        $science_subject = array("elementary_science", "middle_science", "earth_science", "bio", "chem", "phys");
        $foreign_language_subject = array("elementary_french", "middle_french", "french_1", "french_2", "french_3", "french_4", "french_5", "french_AP", "elementary_spanish", "middle_spanish", "spanish_1", "spanish_2", "spanish_3", "spanish_4", "spanish_5", "spanish_AP", "german_1", "german_2", "german_3", "german_4", "italian_1", "italian_2", "italian_3", "italian_4", "italian_AP", "mandarin_1", "mandarin_2", "mandarin_3", "mandarin_4", "mandarin_5", "mandarin_AP");
        $social_studies_subject = array("elementary_social", "middle_social", "world_history_1", "world_history_2", "ap_world", "us_history", "econ", "psych");
        $english_subject = array("analytical_essay", "memoir", "poetry", "english_project", "other_english");


/*

foreach($english_subject as $class)
{


echo ("\$english_classes[\"".$class."\"] = new stdClass;\n");

echo ("\$english_classes[\"".$class."\"]->name = \"\";\n");

for ($i=4; $i > 0; $i--)
{
echo ("\$english_classes[\"".$class."\"]->levels[".$i."] = ");

switch($i)
{
	case 1:
	echo "\"Level 2\";\n";
	break;

	case 2:
	echo "\"Level 1\";\n";
	break;

	case 3:
	echo "\"Honors\";\n";
	break;

	case 4:
	echo "\"AP\";\n";
	break;

	case 5:
	echo "\"AP\";\n";
	break;
}

}
echo "\n";
}

*/



   $math_subject = array("elementary_math", "middle_math", "math_1", "math_2", "math_3", "math_4", "stats", "comp_sci", "calc");
        $science_subject = array("elementary_science", "middle_science", "earth_science", "bio", "chem", "phys");
        $foreign_language_subject = array("elementary_french", "middle_french", "french_1", "french_2", "french_3", "french_4", "french_5", "french_AP", "elementary_spanish", "middle_spanish", "spanish_1", "spanish_2", "spanish_3", "spanish_4", "spanish_5", "spanish_AP", "german_1", "german_2", "german_3", "german_4", "italian_1", "italian_2", "italian_3", "italian_4", "italian_AP", "mandarin_1", "mandarin_2", "mandarin_3", "mandarin_4", "mandarin_5", "mandarin_AP");
        $social_studies_subject = array("elementary_social", "middle_social", "world_history_1", "world_history_2", "ap_world", "us_history", "econ", "psych");
        $english_subject = array("analytical_essay", "memoir", "poetry", "english_project", "other_english");


//english
$english_classes["analytical_essay"] = new stdClass;
$english_classes["analytical_essay"]->name = "Analytical Essays";
$english_classes["analytical_essay"]->levels[4] = "High School (11-12th)";
$english_classes["analytical_essay"]->levels[3] = "High School (9-10th)";
$english_classes["analytical_essay"]->levels[2] = "Middle School";
$english_classes["analytical_essay"]->levels[1] = "Elementary School";

$english_classes["memoir"] = new stdClass;
$english_classes["memoir"]->name = "Memoir/Narrative/Fiction";
$english_classes["memoir"]->levels[4] = "High School (11-12th)";
$english_classes["memoir"]->levels[3] = "High School (9-10th)";
$english_classes["memoir"]->levels[2] = "Middle School";
$english_classes["memoir"]->levels[1] = "Elementary School";

$english_classes["poetry"] = new stdClass;
$english_classes["poetry"]->name = "Poetry";
$english_classes["poetry"]->levels[4] = "High School (11-12th)";
$english_classes["poetry"]->levels[3] = "High School (9-10th)";
$english_classes["poetry"]->levels[2] = "Middle School";
$english_classes["poetry"]->levels[1] = "Elementary School";

$english_classes["english_project"] = new stdClass;
$english_classes["english_project"]->name = "Project Help";
$english_classes["english_project"]->levels[4] = "High School (11-12th)";
$english_classes["english_project"]->levels[3] = "High School (9-10th)";
$english_classes["english_project"]->levels[2] = "Middle School";
$english_classes["english_project"]->levels[1] = "Elementary School";

$english_classes["other_english"] = new stdClass;
$english_classes["other_english"]->name = "Other (See About Me)";
$english_classes["other_english"]->levels[4] = "High School (11-12th)";
$english_classes["other_english"]->levels[3] = "High School (9-10th)";
$english_classes["other_english"]->levels[2] = "Middle School";
$english_classes["other_english"]->levels[1] = "Elementary School";


//math
$math_classes["elementary_math"] = new stdClass;
$math_classes["elementary_math"]->name = "Elementary School Math";
$math_classes["elementary_math"]->levels[3] = "Honors";
$math_classes["elementary_math"]->levels[2] = "Standard";

$math_classes["middle_math"] = new stdClass;
$math_classes["middle_math"]->name = "Middle School Math";
$math_classes["middle_math"]->levels[3] = "Honors";
$math_classes["middle_math"]->levels[2] = "Standard";

$math_classes["math_1"] = new stdClass;
$math_classes["math_1"]->name = "Math 1";
$math_classes["math_1"]->levels[3] = "Honors";
$math_classes["math_1"]->levels[2] = "Level 1";
$math_classes["math_1"]->levels[1] = "Level 2";
$math_classes["math_2"] = new stdClass;
$math_classes["math_2"]->name = "Math 2";
$math_classes["math_2"]->levels[3] = "Honors";
$math_classes["math_2"]->levels[2] = "Level 1";
$math_classes["math_2"]->levels[1] = "Level 2";

$math_classes["math_3"] = new stdClass;
$math_classes["math_3"]->name = "Math 3";
$math_classes["math_3"]->levels[3] = "Honors";
$math_classes["math_3"]->levels[2] = "Level 1";
$math_classes["math_3"]->levels[1] = "Level 2";

$math_classes["math_4"] = new stdClass;
$math_classes["math_4"]->name = "Math 4";
$math_classes["math_4"]->levels[3] = "Honors";
$math_classes["math_4"]->levels[2] = "Level 1";
$math_classes["math_4"]->levels[1] = "Level 2";

$math_classes["stats"] = new stdClass;
$math_classes["stats"]->name = "Statistics";
$math_classes["stats"]->levels[4] = "AP";
$math_classes["stats"]->levels[3] = "Honors";
$math_classes["stats"]->levels[2] = "Level 1";
$math_classes["stats"]->levels[1] = "Level 2";

$math_classes["comp_sci"] = new stdClass;
$math_classes["comp_sci"]->name = "Computer Science";
$math_classes["comp_sci"]->levels[4] = "AP";


$math_classes["calc"] = new stdClass;
$math_classes["calc"]->name = "Calculus";
$math_classes["calc"]->levels[5] = "AP BC";
$math_classes["calc"]->levels[4] = "AP AB";
$math_classes["calc"]->levels[3] = "Honors";
$math_classes["calc"]->levels[2] = "Level 1";
$math_classes["calc"]->levels[1] = "Level 2";


//science
$science_classes["elementary_science"] = new stdClass;
$science_classes["elementary_science"]->name = "Elementary School Science";
$science_classes["elementary_science"]->levels[3] = "Honors";
$science_classes["elementary_science"]->levels[2] = "Standard";

$science_classes["middle_science"] = new stdClass;
$science_classes["middle_science"]->name = "Middle School Science";
$science_classes["middle_science"]->levels[3] = "Honors";
$science_classes["middle_science"]->levels[2] = "Standard";

$science_classes["earth_science"] = new stdClass;
$science_classes["earth_science"]->name = "Earth Science";
$science_classes["earth_science"]->levels[3] = "Honors";
$science_classes["earth_science"]->levels[2] = "Level 1";
$science_classes["earth_science"]->levels[1] = "Level 2";

$science_classes["bio"] = new stdClass;
$science_classes["bio"]->name = "Biology";
$science_classes["bio"]->levels[4] = "AP";
$science_classes["bio"]->levels[3] = "Honors";
$science_classes["bio"]->levels[2] = "Level 1";
$science_classes["bio"]->levels[1] = "Level 2";

$science_classes["chem"] = new stdClass;
$science_classes["chem"]->name = "Chemistry";
$science_classes["chem"]->levels[4] = "AP";
$science_classes["chem"]->levels[3] = "Honors";
$science_classes["chem"]->levels[2] = "Level 1";
$science_classes["chem"]->levels[1] = "Level 2";
$science_classes["phys"] = new stdClass;

$science_classes["phys"]->name = "Physics";
$science_classes["phys"]->levels[5] = "AP C";
$science_classes["phys"]->levels[4] = "AP I";
$science_classes["phys"]->levels[3] = "Honors";
$science_classes["phys"]->levels[2] = "Level 1";
$science_classes["phys"]->levels[1] = "Level 2";


//social studies
$social_classes["elementary_social"] = new stdClass;
$social_classes["elementary_social"]->name = "Elementary School Social Studies";
$social_classes["elementary_social"]->levels[3] = "Honors";
$social_classes["elementary_social"]->levels[2] = "Standard";

$social_classes["middle_social"] = new stdClass;
$social_classes["middle_social"]->name = "Middle School Social Studies";
$social_classes["middle_social"]->levels[3] = "Honors";
$social_classes["middle_social"]->levels[2] = "Standard";

$social_classes["world_history_1"] = new stdClass;
$social_classes["world_history_1"]->name = "World History 1";
$social_classes["world_history_1"]->levels[3] = "Honors";
$social_classes["world_history_1"]->levels[2] = "Level 1";
$social_classes["world_history_1"]->levels[1] = "Level 2";

$social_classes["world_history_2"] = new stdClass;
$social_classes["world_history_2"]->name = "World History 2";
$social_classes["world_history_2"]->levels[3] = "Honors";
$social_classes["world_history_2"]->levels[2] = "Level 1";
$social_classes["world_history_2"]->levels[1] = "Level 2";

$social_classes["ap_world"] = new stdClass;
$social_classes["ap_world"]->name = "AP World History";
$social_classes["ap_world"]->levels[4] = "AP";

$social_classes["us_history"] = new stdClass;
$social_classes["us_history"]->name = "US History";
$social_classes["us_history"]->levels[4] = "AP";
$social_classes["us_history"]->levels[2] = "Level 1";
$social_classes["us_history"]->levels[1] = "Level 2";

$social_classes["econ"] = new stdClass;
$social_classes["econ"]->name = "Economics";
$social_classes["econ"]->levels[4] = "AP";
$social_classes["econ"]->levels[3] = "Honors";
$social_classes["econ"]->levels[2] = "Level 1";
$social_classes["econ"]->levels[1] = "Level 2";

$social_classes["psych"] = new stdClass;
$social_classes["psych"]->name = "Psychology";
$social_classes["psych"]->levels[4] = "AP";
$social_classes["psych"]->levels[3] = "Honors";
$social_classes["psych"]->levels[2] = "Level 1";
$social_classes["psych"]->levels[1] = "Level 2";


//foriegn language
//french
$french_classes["elementary_french"] = new stdClass;
$french_classes["elementary_french"]->name = "Elementary School French";
$french_classes["elementary_french"]->levels[3] = "Honors";
$french_classes["elementary_french"]->levels[2] = "Standard";

$french_classes["middle_french"] = new stdClass;
$french_classes["middle_french"]->name = "Middle School French";
$french_classes["middle_french"]->levels[3] = "Honors";
$french_classes["middle_french"]->levels[2] = "Standard";

$french_classes["french_1"] = new stdClass;
$french_classes["french_1"]->name = "French 1";
$french_classes["french_1"]->levels[3] = "Honors";
$french_classes["french_1"]->levels[2] = "Level 1";
$french_classes["french_1"]->levels[1] = "Level 2";

$french_classes["french_2"] = new stdClass;
$french_classes["french_2"]->name = "French 2";
$french_classes["french_2"]->levels[3] = "Honors";
$french_classes["french_2"]->levels[2] = "Level 1";
$french_classes["french_2"]->levels[1] = "Level 2";

$french_classes["french_3"] = new stdClass;
$french_classes["french_3"]->name = "French 3";
$french_classes["french_3"]->levels[3] = "Honors";
$french_classes["french_3"]->levels[2] = "Level 1";
$french_classes["french_3"]->levels[1] = "Level 2";

$french_classes["french_4"] = new stdClass;
$french_classes["french_4"]->name = "French 4";
$french_classes["french_4"]->levels[3] = "Honors";
$french_classes["french_4"]->levels[2] = "Level 1";
$french_classes["french_4"]->levels[1] = "Level 2";

$french_classes["french_5"] = new stdClass;
$french_classes["french_5"]->name = "French 5";
$french_classes["french_5"]->levels[3] = "Honors";
$french_classes["french_5"]->levels[2] = "Level 1";
$french_classes["french_5"]->levels[1] = "Level 2";

$french_classes["french_AP"] = new stdClass;
$french_classes["french_AP"]->name = "AP French";
$french_classes["french_AP"]->levels[4] = "AP";

//spanish
$spanish_classes["elementary_spanish"] = new stdClass;
$spanish_classes["elementary_spanish"]->name = "Elementary School Spanish";
$spanish_classes["elementary_spanish"]->levels[3] = "Honors";
$spanish_classes["elementary_spanish"]->levels[2] = "Level 1";

$spanish_classes["middle_spanish"] = new stdClass;
$spanish_classes["middle_spanish"]->name = "Middle School Spanish";
$spanish_classes["middle_spanish"]->levels[3] = "Honors";
$spanish_classes["middle_spanish"]->levels[2] = "Level 1";

$spanish_classes["spanish_1"] = new stdClass;
$spanish_classes["spanish_1"]->name = "Spanish 1";
$spanish_classes["spanish_1"]->levels[3] = "Honors";
$spanish_classes["spanish_1"]->levels[2] = "Level 1";
$spanish_classes["spanish_1"]->levels[1] = "Level 2";

$spanish_classes["spanish_2"] = new stdClass;
$spanish_classes["spanish_2"]->name = "Spanish 2";
$spanish_classes["spanish_2"]->levels[3] = "Honors";
$spanish_classes["spanish_2"]->levels[2] = "Level 1";
$spanish_classes["spanish_2"]->levels[1] = "Level 2";

$spanish_classes["spanish_3"] = new stdClass;
$spanish_classes["spanish_3"]->name = "Spanish 3";
$spanish_classes["spanish_3"]->levels[3] = "Honors";
$spanish_classes["spanish_3"]->levels[2] = "Level 1";
$spanish_classes["spanish_3"]->levels[1] = "Level 2";

$spanish_classes["spanish_4"] = new stdClass;
$spanish_classes["spanish_4"]->name = "Spanish 4";
$spanish_classes["spanish_4"]->levels[3] = "Honors";
$spanish_classes["spanish_4"]->levels[2] = "Level 1";
$spanish_classes["spanish_4"]->levels[1] = "Level 2";

$spanish_classes["spanish_5"] = new stdClass;
$spanish_classes["spanish_5"]->name = "Spanish 5";
$spanish_classes["spanish_5"]->levels[3] = "Honors";
$spanish_classes["spanish_5"]->levels[2] = "Level 1";
$spanish_classes["spanish_5"]->levels[1] = "Level 2";

$spanish_classes["spanish_AP"] = new stdClass;
$spanish_classes["spanish_AP"]->name = "AP Spanish";
$spanish_classes["spanish_AP"]->levels[4] = "AP";

//german
$german_classes["german_1"] = new stdClass;
$german_classes["german_1"]->name = "German 1";
$german_classes["german_1"]->levels[4] = "AP";
$german_classes["german_1"]->levels[3] = "Honors";
$german_classes["german_1"]->levels[2] = "Level 1";
$german_classes["german_1"]->levels[1] = "Level 2";

$german_classes["german_2"] = new stdClass;
$german_classes["german_2"]->name = "German 2";
$german_classes["german_2"]->levels[4] = "AP";
$german_classes["german_2"]->levels[3] = "Honors";
$german_classes["german_2"]->levels[2] = "Level 1";
$german_classes["german_2"]->levels[1] = "Level 2";

$german_classes["german_3"] = new stdClass;
$german_classes["german_3"]->name = "German 3";
$german_classes["german_3"]->levels[4] = "AP";
$german_classes["german_3"]->levels[3] = "Honors";
$german_classes["german_3"]->levels[2] = "Level 1";
$german_classes["german_3"]->levels[1] = "Level 2";

$german_classes["german_4"] = new stdClass;
$german_classes["german_4"]->name = "German 4";
$german_classes["german_4"]->levels[4] = "AP";
$german_classes["german_4"]->levels[3] = "Honors";
$german_classes["german_4"]->levels[2] = "Level 1";
$german_classes["german_4"]->levels[1] = "Level 2";

//italian
$italian_classes["italian_1"] = new stdClass;
$italian_classes["italian_1"]->name = "Italian 1";
$italian_classes["italian_1"]->levels[4] = "AP";
$italian_classes["italian_1"]->levels[3] = "Honors";
$italian_classes["italian_1"]->levels[2] = "Level 1";
$italian_classes["italian_1"]->levels[1] = "Level 2";

$italian_classes["italian_2"] = new stdClass;
$italian_classes["italian_2"]->name = "Italian 2";
$italian_classes["italian_2"]->levels[4] = "AP";
$italian_classes["italian_2"]->levels[3] = "Honors";
$italian_classes["italian_2"]->levels[2] = "Level 1";
$italian_classes["italian_2"]->levels[1] = "Level 2";

$italian_classes["italian_3"] = new stdClass;
$italian_classes["italian_3"]->name = "Italian 3";
$italian_classes["italian_3"]->levels[4] = "AP";
$italian_classes["italian_3"]->levels[3] = "Honors";
$italian_classes["italian_3"]->levels[2] = "Level 1";
$italian_classes["italian_3"]->levels[1] = "Level 2";

$italian_classes["italian_4"] = new stdClass;
$italian_classes["italian_4"]->name = "Italian 4";
$italian_classes["italian_4"]->levels[4] = "AP";
$italian_classes["italian_4"]->levels[3] = "Honors";
$italian_classes["italian_4"]->levels[2] = "Level 1";
$italian_classes["italian_4"]->levels[1] = "Level 2";

$italian_classes["italian_AP"] = new stdClass;
$italian_classes["italian_AP"]->name = "AP Italian";
$italian_classes["italian_AP"]->levels[4] = "AP";
$italian_classes["italian_AP"]->levels[3] = "Honors";
$italian_classes["italian_AP"]->levels[2] = "Level 1";
$italian_classes["italian_AP"]->levels[1] = "Level 2";

//mandarin
$mandarin_classes["mandarin_1"] = new stdClass;
$mandarin_classes["mandarin_1"]->name = "Mandarin 1";
$mandarin_classes["mandarin_1"]->levels[4] = "AP";
$mandarin_classes["mandarin_1"]->levels[3] = "Honors";
$mandarin_classes["mandarin_1"]->levels[2] = "Level 1";
$mandarin_classes["mandarin_1"]->levels[1] = "Level 2";

$mandarin_classes["mandarin_2"] = new stdClass;
$mandarin_classes["mandarin_2"]->name = "Mandarin 2";
$mandarin_classes["mandarin_2"]->levels[4] = "AP";
$mandarin_classes["mandarin_2"]->levels[3] = "Honors";
$mandarin_classes["mandarin_2"]->levels[2] = "Level 1";
$mandarin_classes["mandarin_2"]->levels[1] = "Level 2";

$mandarin_classes["mandarin_3"] = new stdClass;
$mandarin_classes["mandarin_3"]->name = "Mandarin 3";
$mandarin_classes["mandarin_3"]->levels[4] = "AP";
$mandarin_classes["mandarin_3"]->levels[3] = "Honors";
$mandarin_classes["mandarin_3"]->levels[2] = "Level 1";
$mandarin_classes["mandarin_3"]->levels[1] = "Level 2";

$mandarin_classes["mandarin_4"] = new stdClass;
$mandarin_classes["mandarin_4"]->name = "Mandarin 4";
$mandarin_classes["mandarin_4"]->levels[4] = "AP";
$mandarin_classes["mandarin_4"]->levels[3] = "Honors";
$mandarin_classes["mandarin_4"]->levels[2] = "Level 1";
$mandarin_classes["mandarin_4"]->levels[1] = "Level 2";

$mandarin_classes["mandarin_5"] = new stdClass;
$mandarin_classes["mandarin_5"]->name = "Mandarin 5";
$mandarin_classes["mandarin_5"]->levels[4] = "AP";
$mandarin_classes["mandarin_5"]->levels[3] = "Honors";
$mandarin_classes["mandarin_5"]->levels[2] = "Level 1";
$mandarin_classes["mandarin_5"]->levels[1] = "Level 2";

$mandarin_classes["mandarin_AP"] = new stdClass;
$mandarin_classes["mandarin_AP"]->name = "AP Mandarin";
$mandarin_classes["mandarin_AP"]->levels[4] = "AP";
$mandarin_classes["mandarin_AP"]->levels[3] = "Honors";
$mandarin_classes["mandarin_AP"]->levels[2] = "Level 1";
$mandarin_classes["mandarin_AP"]->levels[1] = "Level 2";
