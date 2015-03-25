<script>
    $(document).ready(function(){
        $(".delete_btn").on("click", function(){
            var $button = $(this);
            var id = $button.val();
            var url = $("#url").val();
            $.post(url, {
                'saved_tutors_id[]': [id]
            },
            function (data) {
                var json = $.parseJSON(data);
                if(json[id] === false)
                {  
                    $button.parents('tr').remove();
                }

                var url_feed = $("#url_feedback").val();

                $.ajax(url_feed, {
                    success: function(data) {
                //remove old feedback messages
                $(".alert").remove();
                $(".page-header").after(data);
            }
        });

            });
        });
    });
</script>


<div class="container">
    <!-- pass url from php to ajax -->
    <input type="hidden" id="url" value="<?php echo URL; ?>search/showresults_action">
    <input type="hidden" id="url_feedback" value="<?php echo URL; ?>ajax/getfeedbackmessages">

    <div class="page-header">
      <h1>Your saved tutors</h1>
  </div>


  <!-- echo out the system feedback (error and success messages) -->
  <?php $this->renderFeedbackMessages(); ?>

  <?php if (empty($this->users)){ echo("<p>You have not saved any tutors. Saving tutors is a great way to bookmark them, so you can find them later.</p>");} ?>
<?php if (count($this->users) != 0) { ?>
  <div class="table-responsive">
    <table class="table table-striped" id="resultsTable">
        <caption>You have <?php echo(count($this->users));?> tutors saved:</caption>
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
            ?>

            
            <tr>
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
                        <button type="button" name="delete_tutors_id[]" value="<?php echo $user->user_id; ?>" class="btn btn-danger btn-sm delete_btn" aria-expanded="false"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Delete</button></td></tr>

                        <?php } ?>

                    </tbody>
                </table>
            </div>
            <?php } ?>
        </div>


