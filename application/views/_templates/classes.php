<?php



$math_subject = array("elementary_math", "middle_math", "math_1", "math_2", "math_3", "math_4", "stats", "comp_sci", "calc");
$science_subject = array("elementary_science", "middle_science", "earth_science", "bio", "chem", "phys");
$foreign_language_subject = array("elementary_french", "middle_french", "french_1", "french_2", "french_3", "french_4", "french_5", "french_AP", "elementary_spanish", "middle_spanish", "spanish_1", "spanish_2", "spanish_3", "spanish_4", "spanish_5", "spanish_AP");
$social_studies_subject = array("elementary_social", "middle_social", "world_history_1", "world_history_2", "ap_world", "us_history", "econ", "psych");


/*

foreach($foreign_language_subject as $class)
{


echo ("\$foreign_language_classes[\"".$class."\"] = new stdClass;\n");

echo ("\$foreign_language_classes[\"".$class."\"]->name = \"\";\n");

for ($i=4; $i > 0; $i--)
{
echo ("\$foreign_language_classes[\"".$class."\"]->levels[".$i."] = ");

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
