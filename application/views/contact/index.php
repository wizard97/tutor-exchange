<div class="container">
    <div class="page-header">
  <h1>Contact Us</h1>
</div>
    <!-- echo out the system feedback (error and success messages) -->
    <?php $this->renderFeedbackMessages(); ?>
    <div class="col-md-6">
    <form  action="<?php echo URL; ?>contact/send" method="POST" enctype="multipart/form-data">
		<fieldset>
    		
    		<div class="form-group">
    			<label for="name">Your name</label>
    			<input name="name" class="form-control" id="name" type="text" value="" size="30" required>
			</div>
    		<div class="form-group">
    			<label for="subject">Subject</label>
    			<input name="subject" class="form-control" id="subject" type="text" value="" size="30" required>
			</div>
    		<div class="form-group">
    			<label for="email">Your email address</label>
    			<input name="email" class="form-control" id="email" type="text" value="" size="30" required>
			</div>
    		<div class="form-group">
    			<label for="message">Your message</label>
    			<textarea name="message" class="form-control" id="message" rows="7" cols="60" required placeholder="Your message to us goes here."></textarea>
    		</div>
            <button type="submit" class="btn btn-lg btn-primary">
<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Send Email
</button>
    	</fieldset>
    </form>
    </div>
</div>
