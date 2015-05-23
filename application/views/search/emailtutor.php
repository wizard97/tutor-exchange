<div class="container">
    <div class="page-header">
  <h1>Contact a Tutor</h1>
</div>

    <!-- echo out the system feedback (error and success messages) -->
    <?php $this->renderFeedbackMessages(); ?>
	<div class="col-md-6 well">
    <form  action="<?php echo URL."search/emailtutor_action/".($this->tutor->user_id)?>" method="POST" enctype="multipart/form-data">
	<fieldset>
    <div class="form-group">
    <label for="to">To</label>
    <input id="to" type="text" class="form-control" size="30" required disabled value="<?php echo($this->tutor->fname." ".$this->tutor->lname);?>">
	</div>
    
    <div class="form-group">
    <label for="name">From</label>
    <input name="name" id="name" class="form-control" type="text" size="30" required disabled value="<?php echo(SESSION::get('fname')." ".SESSION::get('lname'));?>">
	</div>
    
    <div class="form-group">
    <label for="email">Your Email Address</label>
    <input name="email" id="email" class="form-control" type="text" size="30" required disabled value="<?php echo(SESSION::get('user_email'));?>">
	</div>
    
    <div class="form-group">
    <label for="subject">Subject</label>
    <input name="subject" id="subject" class="form-control" type="text" size="30" required value="Tutoring Inquiry">
	</div>

    <div class="checkbox">
    <label>
    <input type="checkbox"  name="save_tutor" value="1" checked>
    Add Tutor to <a href="<?php echo URL; ?>search/saved">My Saved Tutors</a> (so you can find his/her profile later)</label>
    </div>
    
	<div class="form-group">
    <label for="message">Your Message</label>
    <textarea name="message" id="message" class="form-control" rows="7" cols="60" required placeholder="Your message to the tutor goes here."></textarea>
    </div>

            <button type="submit" class="btn btn-lg btn-success">
<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Send Email
</button>
    </fieldset>
    </form>
	</div>
</div>
