<div class="content">
    <h1>Your saved tutors:</h1>

    <!-- echo out the system feedback (error and success messages) -->
    <?php $this->renderFeedbackMessages(); ?>

<?php if (empty($this->users)){ echo("<p>You have not saved any tutors. Saving tutors is a great way to bookmark them, so you can find them later.</p>");} 

elseif(Session::get('user_logged_in')){ ?>
<form action="<?php echo URL; ?>search/saved_action" method="POST">
    <table class="overview-table">
<caption>You have <?php echo(count($this->users));?> tutors saved:</caption>
<tr>
<th>ID</th>
<th>Picture</th>
<th>Name</th>
<th>Grade</th>
<th>Age</th>
<th>Hourly Rate ($/hour)</th>
<th>Email</th>
<th>Highest Math Class (level)</th>
<th>User's Profile</th>
<th>Delete Saved Tutors</th>

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
            echo '<td><a href="'.URL.'overview/showuserprofile/'.$user->user_id.'">Show user\'s profile</a></td>';
            echo '<td><input type="checkbox" name="delete_tutors_id[]" value="'.$user->user_id.'"';
            echo '>';
            echo "</tr>";
        }
    echo "</table>";
    echo "<input type=\"submit\" value=\"Delete\">";
    echo "</form>";
    }

?>
</div>

