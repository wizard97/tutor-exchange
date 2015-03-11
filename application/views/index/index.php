<div class="container">
<div class="page-header">
  <h1>Lexington Tutor Exchange <small>V1.9 Beta </small></h1>
</div>

    <!-- echo out the system feedback (error and success messages) -->
    <?php $this->renderFeedbackMessages(); ?>
<div class="alert alert-warning" role="alert"><strong>Note: </strong>This tutoring site is in beta. It is currently a work in progress by Aaron Wisner & Matan Silver, please pardon the appearance and/or any functionality issues.</div>

<div class="jumbotron">
  <div class="container">
    <h2>Hello, Lexington MA!</h2>
    <p>Are you a Lexington student either looking for or wanting to become a tutor? Are you a professional tutor who lives in Lexington, but needs a way for students/parents to find them?</p>
    <p>
    <a class="btn btn-success btn-lg" href="<?php echo(URL . 'search/index');?>" role="button"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Find a Tutor</a> 
    <a class="btn btn-primary btn-lg" href="<?php echo(URL . 'login/register');?>" role="button"><span class="glyphicon glyphicon-book" aria-hidden="true"></span> Start Tutoring</a>
    </p>
  </div>
</div>


<p><b>To sign up as a tutor, follow the direction below:</b></p>
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
