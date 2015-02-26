<div class="content">
    <h1>Contact a Tutor</h1>

    <!-- echo out the system feedback (error and success messages) -->
    <?php $this->renderFeedbackMessages(); ?>

    <form  action="<?php echo URL."search/emailtutor_action/".($this->tutor->user_id)?>" method="POST" enctype="multipart/form-data">

    <label for="to">To</label>
    <input id="to" type="text" size="30" required disabled value="<?php echo($this->tutor->fname." ".$this->tutor->lname);?>">

    <label for="name">From</label>
    <input name="name" id="name" type="text" size="30" required disabled value="<?php echo(SESSION::get('fname')." ".SESSION::get('lname'));?>">

    <label for="email">Your email address</label>
    <input name="email" id="email" type="text" size="30" required disabled value="<?php echo(SESSION::get('user_email'));?>">

    <label for="subject">Subject</label>
    <input name="subject" id="subject" type="text" size="30" required value="Tutoring Inquiry">


    <label for="message">Your message</label>
    <textarea name="message" id="message" rows="7" cols="60" required placeholder="Your message to the tutor goes here."></textarea><br>
    <br>
    <input type="submit" value="Send email"/>
    </form>

</div>
