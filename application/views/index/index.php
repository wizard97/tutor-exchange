<div class="container">
<div class="page-header">
  <h1>Lexington Tutor Exchange <small>V1.6 Beta </small></h1>
</div>

    <!-- echo out the system feedback (error and success messages) -->
    <?php $this->renderFeedbackMessages(); ?>
<div class="alert alert-warning" role="alert">This tutoring site is in beta. It is currently a work in progress by Aaron Wisner & Matan Silver, please pardon the appearance.</div>

<div class="jumbotron">
  <div class="container">
    <h2>Hello, Lexington!</h2>
    <p>Are you a Lexington student looking either for a tutor or want to become a tutor?</p>
    <p><a class="btn btn-primary btn-lg" href="<?php echo(URL . 'login/register');?>" role="button">Start Tutoring</a> <a class="btn btn-success btn-lg" href="<?php echo(URL . 'search/index');?>" role="button">Find a Tutor</a></p>
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
