<div class="container">
<div class="page-header">
  <h1>Search Results</h1>
</div>


    <!-- echo out the system feedback (error and success messages) -->
    <?php $this->renderFeedbackMessages(); ?>

<?php if (empty($this->users)){ echo("<p>Sorry, we were not able to find a match for you. Perhaps broaden your search criteria and/or check back in a week or two.</p>");} 

elseif(Session::get('user_logged_in')){ ?>
<div class="table-responsive">
<form action="<?php echo URL; ?>search/showresults_action" method="POST">
    <table class="table table-striped" id="resultsTable">
<caption>We found you <?php echo(count($this->users));?> tutors:</caption>
<thead>
<tr>
<th>Picture</th>
<th>Name</th>
<th>Grade</th>
<th>Age</th>
<th>Hourly Rate</th>
<th>Highest Math Class (level)</th>
<th>Options</th>

</tr>
</thead>
<tbody>
        <?php
        foreach ($this->users as $user) {


                echo '<tr>';
            

            echo '<td class="avatar">';

            if (isset($user->user_avatar_link)) {
                echo '<img height="42" width="42" src="'.$user->user_avatar_link.'" />';
            }

            echo '</td>';
            echo '<td>'.$user->fname.' '.$user->lname.'</td>';
            echo '<td>'.$user->grade.'</td>';
            echo '<td>'.$user->age.'</td>';
            echo '<td>'.'$'.$user->rate.'</td>';
            echo '<td>'.$user->highest_math_name;
            if(!empty($user->highest_math_level))
            {
                echo ' ('.$user->highest_math_level.')';
            }
            echo '</td>';

            echo '<td><a class="btn btn-success btn-sm" href="'.URL.'search/showtutorprofile/'.$user->user_id.'" '.'role="button"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Profile</a>';
            echo ' <a class="btn btn-primary btn-sm" href="'.URL.'search/emailtutor/'.$user->user_id.'" '.'role="button"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Contact</a>';
            //echo '<td><a target="_blank" href="'.URL."search/emailtutor/".$user->user_id.'">Email Me</a></td>';
            
if ($user->check){
            echo ' <button type="submit" name="saved_tutors_id[]" value="'.$user->user_id.'"class="btn btn-info btn-sm" aria-expanded="false"><span class="glyphicon glyphicon-floppy-saved" aria-hidden="true"></span> Saved!</a></button></td></tr>';
            }
            else echo ' <button type="submit" name="saved_tutors_id[]" value="'.$user->user_id.'" class="btn btn-warning btn-sm" aria-expanded="false"><span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span> Save</a></button></td></tr>';
            }
            /*
            echo ' <input type="checkbox" name="saved_tutors_id[]" value="'.$user->user_id.'"';
            if ($user->check){echo " checked disabled";}
            echo '></td>';
            echo "</tr>";
        }
    echo "</tbody></table>";
    //echo "<input type=\"submit\" class=\"btn btn-primary\" value=\"Save\">";
    */
    echo "</tbody></table>";
    echo "</form></div>";
   
}
else
{
?>
<div class="table-responsive">
    <table class="table table-striped" id="resultsTable">
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


                echo '<tr>';

            echo '<td>'.$user->fname.'</td>';
            echo '<td>'.$user->grade.'</td>';
            echo '<td>'.$user->age.'</td>';
            echo '<td>'.$user->rate.'</td>';
            echo '<td>'.$user->highest_math_name.' ('.$user->highest_math_level.')</td>';
            echo "</tr>";
        }

        echo "</table></div>";
    }
        ?>
</div>



