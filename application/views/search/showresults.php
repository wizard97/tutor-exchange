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
<th>Reviews</th>
<th>Options</th>

</tr>
</thead>
<tbody>
        <?php
        foreach ($this->users as $user) {

            if($user->user_account_type > 2) echo '<tr class="success">';
            else echo '<tr>';
            ?>

            <td class="vert-align">
            <?php if (isset($user->user_avatar_link)) { ?>
                <a target="_blank" href="<?php echo $user->user_avatar_link; ?>"><img href="<?php echo $user->user_avatar_link;?>" class="img-rounded" height="50" width="50" src="<?php echo $user->user_avatar_link;?>"/></a>
            <?php } ?>
            </td>

            <td class="vert-align"><?php echo $user->fname.' '.$user->lname;?></td>
            <td class="vert-align"><?php echo $user->grade;?></td>
            <td class="vert-align"><?php echo $user->age;?></td>
            <td class="vert-align"><?php echo '$'.$user->rate;?></td>
            <?php if(!empty($user->user_account_type > 2)) echo '<td class="vert-align">Professional Tutor</td>';
            else echo '<td class="vert-align">Student Tutor</td>';
            ?>
            <td class="vert-align">
            <span class="text-nowrap">
            <span style="font-size: 18px">
            <?php
            for ($i = 0; $i < $user->star_count; $i++) echo '<i style="color: #FEC601" class="fa fa-star"></i>';
                    if ($user->half_star)
                    {
                        echo '<i style="color: #FEC601" class="fa fa-star-half-o"></i>';
                        for ($i = 0; $i < 4 - $user->star_count; $i++) echo '<i style="color: #FEC601" class="fa fa-star-o"></i>';
                    }
                    else for ($i = 0; $i < 5 - $user->star_count; $i++) echo '<i style="color: #FEC601" class="fa fa-star-o"></i>';
            ?>
                    </span> (<span class="text-primary"><a href="<?php echo URL.'search/showtutorprofile/'.$user->user_id;?>"><?php echo $user->review_number;?></a></span>)</span>

              </td>

            <td class="vert-align"><a class="btn btn-success btn-sm" target="_blank" href="<?php echo URL.'search/showtutorprofile/'.$user->user_id; ?>" role="button"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Profile</a>
            <a class="btn btn-primary btn-sm" target="_blank" href="<?php echo URL.'search/emailtutor/'.$user->user_id; ?>" role="button"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Contact</a>
           
           <?php if ($user->check){ ?>
             <button type="submit" name="saved_tutors_id[]" value="<?php echo $user->user_id; ?>" class="btn btn-info btn-sm" aria-expanded="false"><span class="glyphicon glyphicon-floppy-saved" aria-hidden="true"></span> Saved!</a></button></td></tr>
        <?php } else {?>
                <button type="submit" name="saved_tutors_id[]" value="<?php echo $user->user_id; ?>" class="btn btn-warning btn-sm" aria-expanded="false"><span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span> Save</a></button></td></tr>
            <?php } }?>

    </tbody></table>
    </form></div>
   
<?php }
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
<th>Tutor Reviews</th>
</tr>
</thead>
<tbody>
        <?php foreach ($this->users as $user) {
            if($user->user_account_type > 2) echo '<tr class="success">';
            else echo '<tr>';
            ?>

            <td class="vert-align"><?php echo $user->fname;?></td>
            <td class="vert-align"><?php echo $user->grade;?></td>
            <td class="vert-align"><?php echo $user->age;?></td>
            <td class="vert-align"><?php echo '$'.$user->rate;?></td>

            <?php
            if(!empty($user->user_account_type > 2))
            {
                echo '<td class="vert-align">Professional Tutor</td>';
            }
            else echo '<td class="vert-align">Student Tutor</td>';
            ?>

            <td class="vert-align">
            <span class="text-nowrap">
            <span style="font-size: 18px">
            <?php
            for ($i = 0; $i < $user->star_count; $i++) echo '<i style="color: #FEC601" class="fa fa-star"></i>';
                    if ($user->half_star)
                    {
                        echo '<i style="color: #FEC601" class="fa fa-star-half-o"></i>';
                        for ($i = 0; $i < 4 - $user->star_count; $i++) echo '<i style="color: #FEC601" class="fa fa-star-o"></i>';
                    }
                    else for ($i = 0; $i < 5 - $user->star_count; $i++) echo '<i style="color: #FEC601" class="fa fa-star-o"></i>';
                    ?>
                    </span> (<span class="text-primary"><?php echo $user->review_number;?></span>)</span>
              </td>

        <?php } ?>

        </tbody></table></div>
    <?php } ?>
</div>



