<div class="content">
    <h1>Search Results:</h1>

    <!-- echo out the system feedback (error and success messages) -->
    <?php $this->renderFeedbackMessages(); ?>

<?php if (empty($this->users)){ echo("<p>Sorry, we were not able to find a match for you. Perhaps broaden your search criteria and/or check back in a week or two.</p>");} 

elseif(Session::get('user_logged_in')){ ?>
<form action="<?php echo URL; ?>search/showresults_action" method="POST">
    <table class="overview-table">
<caption>We found you <?php echo(count($this->users));?> tutors:</caption>
<tr>
<th>ID</th>
<th>Picture</th>
<th>Name</th>
<th>Grade</th>
<th>Age</th>
<th>Hourly Rate ($/hour)</th>
<th>Email</th>
<th>Highest Math Class (level)</th>
<th>Tutors's Profile</th>
<th>Bookmark Tutor</th>

</tr>

        <?php
        foreach ($this->users as $user) {


                echo '<tr class="active">';
            

            echo '<td>'.$user->user_id.'</td>';
            echo '<td class="avatar">';

            if (isset($user->user_avatar_link)) {
                echo '<img src="'.$user->user_avatar_link.'" />';
            }

            echo '</td>';
            echo '<td>'.$user->fname.' '.$user->lname.'</td>';
            echo '<td>'.$user->grade.'</td>';
            echo '<td>'.$user->age.'</td>';
            echo '<td>'.$user->rate.'</td>';
            echo '<td><a href="'.URL."search/emailtutor/".$user->user_id.'">Email Me</a></td>';
            echo '<td>'.$user->highest_math_name.' ('.$user->highest_math_level.')</td>';
            echo '<td><a href="'.URL.'search/showtutorprofile/'.$user->user_id.'">Show tutor\'s profile</a></td>';
            echo '<td><input type="checkbox" name="saved_tutors_id[]" value="'.$user->user_id.'"';
            if ($user->check){echo " checked disabled ";}
            echo '>';
            echo "</tr>";
        }
    echo "</table>";
    echo "<input type=\"submit\" value=\"Save\">";
    echo "</form>";
    }
else
{
?>
    <table class="overview-table">
    <p style="color: red">You are not logged in! Please <a href="<?php echo(URL . 'login');?>">log in</a> to see specific information about the tutors.</p>
<caption>We found you <?php echo(count($this->users));?> tutors:</caption>
<tr>
<th>Name</th>
<th>Grade</th>
<th>Age</th>
<th>Hourly Rate</th>
<th>Highest Math Class (level)</th>

</tr>

        <?php


        foreach ($this->users as $user) {


                echo '<tr class="active">';

            echo '<td>'.$user->fname.'</td>';
            echo '<td>'.$user->grade.'</td>';
            echo '<td>'.$user->age.'</td>';
            echo '<td>'.$user->rate.'</td>';
            echo '<td>'.$user->highest_math_name.' ('.$user->highest_math_level.')</td>';
            echo "</tr>";
        }

        echo "</table>";
    }
        ?>
</div>

