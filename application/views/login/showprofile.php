<div class="container">
  <h1>Your profile</h1>
  
  <!-- echo out the system feedback (error and success messages) -->
  <?php $this->renderFeedbackMessages(); ?>
  <div class="col-md-6">
    <ul class="list-group">
      <li class="list-group-item">Your name: <?php echo Session::get('fname').' '.Session::get('lname'); ?></li>
      <li class="list-group-item">Your email: <?php echo Session::get('user_email'); ?></li>
      <li class="list-group-item">Your account type is:
        <?php if (Session::get('user_account_type') == 1){echo 'Standard Tutor';}
		if (Session::get('user_account_type') == 2){echo 'Standard Tutor';} if (Session::get('user_account_type') == 3) {echo 'Professional Tutor';}; ?>
      </li>
    </ul>
    Your avatar image:
    <?php // if usage of gravatar is activated show gravatar image, else show local avatar ?>
    <?php if (USE_GRAVATAR) { ?>
    Your gravatar pic (on gravatar.com): <img src='<?php echo Session::get('user_gravatar_image_url'); ?>' class='img img-rounded' width='300' height='300' />
    <?php } else { ?>
    Your avatar pic (saved on local server): <img src='<?php echo Session::get('user_avatar_file'); ?>' class='img img-rounded' width='300' height='300' />
    <?php } ?>
  </div>
</div>
