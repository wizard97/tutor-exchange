<div class="content">
    <h1>Contact Us</h1>

    <!-- echo out the system feedback (error and success messages) -->
    <?php $this->renderFeedbackMessages(); ?>

    <form  action="<?php echo URL; ?>contact/send" method="POST" enctype="multipart/form-data">

    <label for="name">Your name</label>
    <input name="name" id="name" type="text" value="" size="30" required>

    <label for="subject">Subject</label>
    <input name="subject" id="subject" type="text" value="" size="30" required>

    <label for="email">Your email address</label>
    <input name="email" id="email" type="text" value="" size="30" required>

    <label for="message">Your message</label>
    <textarea name="message" id="message" rows="7" cols="60" required placeholder="Your message to us goes here."></textarea><br>
    <br>
    <input type="submit" value="Send email"/>
    </form>

</div>
