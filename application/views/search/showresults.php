<div class="container">
<div class="page-header">
  <h1>Search Results</h1>
</div>


    <!-- echo out the system feedback (error and success messages) -->
    <?php $this->renderFeedbackMessages(); ?>

<?php
if(Session::get('user_logged_in')){ ?>

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
<th>Tutor Type</th>
<th>Options</th>

</tr>
</thead>
<tbody>
        <?php
        foreach ($this->users as $user) {

            if($user->user_account_type > 2) echo '<tr class="success">';
            else echo '<tr>';
            

            echo '<td class="vert-align">';

            if (isset($user->user_avatar_link)) {
                echo '<a target="_blank" href="'.$user->user_avatar_link.'">'.'<img href="'.$user->user_avatar_link.'" class="img-rounded" height="50" width="50" src="'.$user->user_avatar_link.'" /></a>';
            }

            echo '</td>';
            echo '<td class="vert-align">'.$user->fname.' '.$user->lname.'</td>';
            echo '<td class="vert-align">'.$user->grade.'</td>';
            echo '<td class="vert-align">'.$user->age.'</td>';
            echo '<td class="vert-align">'.'$'.$user->rate.'</td>';
            if(!empty($user->user_account_type > 2))
            {
                echo '<td class="vert-align">Professional Tutor</td>';
            }
            else echo '<td class="vert-align">Student Tutor</td>';

            echo '<td class="vert-align""><a class="btn btn-success btn-sm" target="_blank" href="'.URL.'search/showtutorprofile/'.$user->user_id.'" '.'role="button"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Profile</a>';
            echo ' <a class="btn btn-primary btn-sm" target="_blank" href="'.URL.'search/emailtutor/'.$user->user_id.'" '.'role="button"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Contact</a>';
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
<caption>We found you <?php echo(count($this->users));?> tutors:</caption>
<thead>
<tr>
<th>Name</th>
<th>Grade</th>
<th>Age</th>
<th>Hourly Rate</th>
<th>Tutor Type</th>
</tr>
</thead>
<tbody>
        <?php


        foreach ($this->users as $user) {


            if($user->user_account_type > 2) echo '<tr class="success">';
            else echo '<tr>';

            echo '<td class="vert-align">'.$user->fname.'</td>';
            echo '<td class="vert-align">'.$user->grade.'</td>';
            echo '<td class="vert-align">'.$user->age.'</td>';
            echo '<td class="vert-align">'.'$'.$user->rate.'</td>';
            if(!empty($user->user_account_type > 2))
            {
                echo '<td class="vert-align">Professional Tutor</td>';
            }
            else echo '<td class="vert-align">Student Tutor</td>';
        }

        echo "</tbody></table></div>";
    }
        ?>
</div>



