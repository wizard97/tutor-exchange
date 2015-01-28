<div class="content">
    <h1>Search Results:</h1>

    <!-- echo out the system feedback (error and success messages) -->
    <?php $this->renderFeedbackMessages(); ?>


    <p>



<?php
if(Session::get('user_logged_in'))
{
?>
    <table class="overview-table">
<caption>We found you <?php echo(count($this->users));?> tutors:</caption>
<tr>
<th>ID</th>
<th>Picture</th>
<th>Name</th>
<th>Grade</th>
<th>Age</th>
<th>Email</th>
<th>Highest Math Class (level)</th>
<th>User's Profile</th>
<th>

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
            echo '<td>'.$user->user_email.'</td>';
            echo '<td>'.$user->highest_math_name.' ('.$user->highest_math_level.')</td>';
            echo '<td><a href="'.URL.'overview/showuserprofile/'.$user->user_id.'">Show user\'s profile</a></td>';
            echo "</tr>";
        }

        ?>
        </table>
<?php
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
<th>Highest Math Class (level)</th>
<th>

</tr>

        <?php


        foreach ($this->users as $user) {


                echo '<tr class="active">';

            echo '<td>'.$user->fname.'</td>';
            echo '<td>'.$user->grade.'</td>';
            echo '<td>'.$user->age.'</td>';
            echo '<td>'.$user->highest_math_name.' ('.$user->highest_math_level.')</td>';
            echo "</tr>";
        }

        ?>
        </table>

<?php
}
?>

    </p>
</div>

