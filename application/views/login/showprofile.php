<div class="content">
    <h1>Your profile</h1>

    <!-- echo out the system feedback (error and success messages) -->
    <?php $this->renderFeedbackMessages(); ?>

    <div>
        Your name: <?php echo Session::get('fname').' '.Session::get('lname'); ?>
    </div>
    <div>
        Your email: <?php echo Session::get('user_email'); ?>
    </div>
    <div>
        Your avatar image:
        <?php // if usage of gravatar is activated show gravatar image, else show local avatar ?>
        <?php if (USE_GRAVATAR) { ?>
            Your gravatar pic (on gravatar.com): <img src='<?php echo Session::get('user_gravatar_image_url'); ?>' />
        <?php } else { ?>
            Your avatar pic (saved on local server): <img src='<?php echo Session::get('user_avatar_file'); ?>' />
        <?php } ?>
    </div>
    <div>
        Your account type is: <?php echo Session::get('user_account_type'); ?>
    </div>
</div>
