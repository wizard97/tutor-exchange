<div class="content">
    <h1>Home</h1>

    <!-- echo out the system feedback (error and success messages) -->
    <?php $this->renderFeedbackMessages(); ?>

<p style="color: red">This tutoring site is a work in progress by Aaron Wisner & Matan Silver, please pardon the appearance.</p>

<h3><b>Are you a Lexington high schooler who would like to make money tutoring or even giving music lessons?</b></h3>
<p>Our site is from from complete, but we have decided to start tutor sign ups in advance. So when our site launches oficially in the next few weeks, we already have tutors signed up ready for people to contact them. By signing up early, you will be more likely to get contacted by someone looking for a tutor.</p>

<p><b>To sign up, follow the direction below:</b></p>
<ol class="a">
<li>Register as a tutor <a href="<?php echo(URL . 'login/register');?>">here</a>.</li>
<li>Fill out your tutoring credentials (subjects, rate, etc...) <a href="<?php echo(URL . 'tutor/edittutor');?>">here</a>.</li>
<li>Wait for someone to contact you based on your credentials.</li>
<li>Start tutoring and making money.</li>
</ol>

<br><br>
<p>Vistor Number: <?php echo($this->info->visitors); ?></p>
<p>Tutor Searches: <?php echo($this->info->searches); ?></p>

</div>
