<!--
<div class="container">
<div class="page-header">
  <h1>Lexington Tutor Exchange <small>V1.12 Beta </small></h1>
</div>
-->
    <!-- echo out the system feedback (error and success messages) -->
<div class="container">
    <?php $this->renderFeedbackMessages(); ?>

<!--<div class="alert alert-warning" role="alert"><strong>Note: </strong>This tutoring site is in beta. It is currently under heavy development by Aaron Wisner & Matan Silver, please pardon the appearance and/or any functionality issues.</div> -->

<div class="jumbotron">
  <div class="container">
  <div class="col-md-8">
 <h1>Lexington Tutor Exchange</h1>
    <h2>Hello, Lexington MA!</h2>
    <p>This site was designed by Lexington students for Lexington students. We will find the best tutor for you based on pricing, subject, and tutor level. This site welcomes both student and professional tutor signups.</p>
    <p>
    <a class="btn btn-success btn-lg" href="<?php echo(URL . 'search/index');?>" role="button"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Find a Tutor</a> 
    <a class="btn btn-primary btn-lg" href="<?php echo(URL . 'login/register');?>" role="button"><span class="glyphicon glyphicon-book" aria-hidden="true"></span> Start Tutoring</a>
    </p>
  </div>

<div class="col-md-4">
<h1><i class="fa fa-exchange fa-5x"></i></h1>
</div>
  </div>
</div>

<!-- <div class="alert alert-success" role="alert"><strong>New in V1.12:</strong> Save tutor button now works without page refresh (using ajax requests and jQuery), Crontab jobs now auto emails tutor when listing expires.</div> -->




<div class="row">

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="<?php echo(URL.IMG_PATH.'minuteman.jpg');?>" alt="">
                    </div>
                    <div class="caption">
                        <h3>Lexington MA Only</h3>
                        <p>This site was designed exclusively for students, parents, and tutors of the Lexington Community.</p>
                        <p>
                            <a href="<?php echo(URL . 'about/index');?>" class="btn btn-default">About Us »</a>
                        </p>
                    </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="<?php echo(URL.IMG_PATH.'search.jpg');?>" alt="">
                    </div>
                    <div class="caption">
                        <h3>Find The Perfect Tutor</h3>
                        <p>Just select the credentials you require in your tutor, and we will search all our listing to find you the best one. You can even rate tutors. Currently there are <?php echo($this->member_count->std + $this->member_count->tutor); ?> active tutors.</p>
                        <p>
                            <a href="<?php echo(URL . 'search/index');?>" class="btn btn-default">Find a Tutor »</a>
                        </p>
                    </div>
                
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="<?php echo(URL.IMG_PATH.'profile.jpg');?>" alt="">
                    </div>
                    <div class="caption">
                        <h3>Become a Tutor Yourself</h3>
                        <p>Interested in tutoring? We provide a free easy way to be found. Just register as a tutor, and complete your tutor profile. We will do the rest. Both student and professional tutors are welcome.</p>
                        <p>
                            <a href="<?php echo(URL . 'login/register');?>" class="btn btn-default">Start Tutoring »</a>
                        </p>
                    </div>
                
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="<?php echo(URL.IMG_PATH.'github.jpg');?>" alt="">
                    </div>
                    <div class="caption">
                        <h3>Site Run & Created by LHS Students</h3>
                        <p>This entire site is hand-coded, designed, and run by Lexington High School seniors.</p>
                        <p>
                            <a href="https://github.com/wizard97/tutor-exchange" class="btn btn-default">Source Code »</a>
                        </p>
                    </div>
               
            </div>

        </div>



<br><br>
<p>Vistor Number: <?php echo($this->info->visitors); ?></p>
<p>Tutor Searches: <?php echo($this->info->searches); ?></p>
<p>Total Members: <?php echo($this->member_count->std + $this->member_count->tutor); ?></p>
<p>Active Tutors: <?php echo($this->member_count->tutor_active); ?></p>

</div>

