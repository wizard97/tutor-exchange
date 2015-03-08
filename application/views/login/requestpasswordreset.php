<div class="container">
  <h1>Request a password reset</h1>
  
  <!-- echo out the system feedback (error and success messages) -->
  <?php $this->renderFeedbackMessages(); ?>
  
  <!-- request password reset form box -->
  <form method="post" action="<?php echo URL; ?>login/requestpasswordreset_action" name="password_reset_form">
    <div class="col-md-5">
      <div class="form-group">
        <label for="password_reset_input_email"> <p class="bg-info">Enter your email and you'll get a message shortly with instructions: </p></label>
        <input id="password_reset_input_email" class="password_reset_input form-control" type="text" name="user_email" required />
        
      </div>
      <input type="submit"  class="btn btn-primary form-control" name="request_password_reset" value="Reset my password" />
    </div>
  </form>
</div>
