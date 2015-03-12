<div class="container">
<h1>Your saved tutors:</h1>

<!-- echo out the system feedback (error and success messages) -->
<?php $this->renderFeedbackMessages(); ?>
<?php if (empty($this->users)){ echo("<p>You have not saved any tutors. Saving tutors is a great way to bookmark them, so you can find them later.</p>");} 

elseif(Session::get('user_logged_in')){ ?>
<form action="<?php echo URL; ?>search/saved_action" method="POST">
<div class="table-responsive">
  <table class="table table-striped" id="resultsTable">
    <caption>
    You have <?php echo(count($this->users));?> tutors saved:
    </caption>
    <thead>
      <tr>
        <th>Picture</th>
        <th>Name</th>
        <th>Grade</th>
        <th>Age</th>
        <th>Hourly Rate ($/hour)</th>
        <th>Options</th>
      </tr>
    </thead>
    <tbody>
      <?php
        foreach ($this->users as $user) {


                echo '<tr class="active">';
            

            echo '<td class="avatar">';

            if (isset($user->user_avatar_link)) {
                echo '<img src="'.$user->user_avatar_link.'" width="50" height="50" class="img-rounded"/>';
            }

            echo '</td>';
            echo '<td class="vert-align">'.$user->fname.' '.$user->lname.'</td>';
            echo '<td class="vert-align">'.$user->grade.'</td>';
            echo '<td class="vert-align">'.$user->age.'</td>';
            echo '<td class="vert-align">'.$user->rate.'</td>';
			echo '<td class="vert-align"><a class="btn btn-success btn-sm" target="_blank" href="'.URL.'search/showtutorprofile/'.$user->user_id.'" '.'role="button"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Profile</a>';
            echo ' <a class="btn btn-primary btn-sm" target="_blank" href="'.URL.'search/emailtutor/'.$user->user_id.'" '.'role="button"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Contact</a>';
			echo '<button type="submit" name="delete_tutors_id[]" value="'.$user->user_id.'" class="btn btn-danger btn-sm" aria-expanded="false"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Delete</button></td>';
            echo "</td>";
			echo "</tr>";
        }
    echo "</table>";
    
    echo "</form>";
    }

?>
    </tbody>
  </table>
</div>
