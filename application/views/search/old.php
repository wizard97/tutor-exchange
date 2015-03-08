<div class="container">
<div class="page-header">
  <h1><?php echo $this->tutor->fname.' '.$this->tutor->lname;?></h1>
</div>

    <?php $this->renderFeedbackMessages(); ?>
<div class="alert alert-warning" role="alert"><strong>Note: </strong>Much of the functionality on this page is not done/working. Please check back later.</div>


<div class="col-md-3">

<div class="row">
<img src="<?php echo $this->tutor->user_avatar_link;?>" width="300" height="300" class="img-thumbnail img-responsive">
</div>

<div class="row">
<br>
<ul class="list-group">
				<li class="list-group-item text-muted list-group-item-success" contenteditable="false">Student Tutor</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong class="">Age:</strong></span> <?php echo $this->tutor->age;?></li>
                <li class="list-group-item text-right"><span class="pull-left"><strong class="">Grade:</strong></span> <?php echo $this->tutor->grade;?></li>
                <li class="list-group-item text-right"><span class="pull-left"><strong class="">Rate:</strong></span> $<?php echo $this->tutor->rate;?></li>
                <li class="list-group-item text-right"><span class="pull-left"><strong class="">Last Login:</strong></span> <?php echo date("m/d/y", $this->tutor->user_last_login_timestamp);?></li>
              	<li class="list-group-item text-right"><span class="pull-left"><strong class="">Joined:</strong></span> <?php echo date("m/d/y", $this->tutor->user_creation_timestamp);?></li>
            
</ul>
</div>

<div class="row center-block">
<button type="button" class="btn btn-success">Save me!</button>  <a class="btn btn-primary" href="<?php echo(URL . 'search/emailtutor/'.$this->tutor->user_id);?>" role="button"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Contact Me</a>
</div>

</div>


<div class="col-md-9">

<div class="alert alert-info">
<h3>About Me:</h3>
<p><?php echo $this->tutor->about_me;?></p>
</div>

<div class="panel panel-default">
<div class="panel-heading">Tutoring Subjects</div>
<div class="panel-body">
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#Math">Math</a></li>
        <li><a data-toggle="tab" href="#Science">Science</a></li>
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">Foreign Language <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a data-toggle="tab" href="#French">French</a></li>
                <li><a data-toggle="tab" href="#Spanish">Spanish</a></li>
            </ul>
        </li>
        <li><a data-toggle="tab" href="#Music">Music</a></li>
    </ul>


   <div class="tab-content">
        
        <div id="Math" class="tab-pane fade in active">
            <h3>Math Tutoring</h3>

<?php if(!empty($this->tutor->highest_math_name)):?>
            <strong>Highest Completed Math Class: </strong><?php echo($this->tutor->highest_math_name); if(!empty($this->tutor->highest_math_level)) echo(' ('.$this->tutor->highest_math_level.')'); ?>
<?php endif;?>
				<table class="table table-striped">
					<caption>I can tutor the following classes:</caption>
					<tr>
					<th>Classes</th>
					<th>Highest Level I Can Tutor</th>
					</tr>

                    <?php foreach ($this->math_classes as $db_name=>$class)
                    if($this->tutor->{$db_name} > 0)
                    {
                        echo '<tr><td>'.$class->name.'</td>';
                        echo '<td>'.$class->levels[(int)$this->tutor->{$db_name}].'</td></tr>';
                    }
                    ?>
				</table>

        </div>

        <div id="Science" class="tab-pane fade">
            <h3>Science Tutoring</h3>

<?php if(!empty($this->tutor->highest_science_name)):?>
            <strong>Highest Completed Science Class: </strong><?php echo($this->tutor->highest_science_name); if(!empty($this->tutor->highest_science_level)) echo(' ('.$this->tutor->highest_science_level.')'); ?>
<?php endif;?>
                <table class="table table-striped">
                    <caption>I can tutor the following classes:</caption>
                    <tr>
                    <th>Classes</th>
                    <th>Highest Level I Can Tutor</th>
                    </tr>

                    <?php foreach ($this->science_classes as $db_name=>$class)
                    if($this->tutor->{$db_name} > 0)
                    {
                        echo '<tr><td>'.$class->name.'</td>';
                        echo '<td>'.$class->levels[(int)$this->tutor->{$db_name}].'</td></tr>';
                    }
                    ?>
                </table>

        </div>

        <div id="French" class="tab-pane fade">
<h3>French Tutoring</h3>

<?php if(!empty($this->tutor->highest_french_name)):?>
            <strong>Highest Completed French Class: </strong><?php echo($this->tutor->highest_french_name); if(!empty($this->tutor->highest_french_level)) echo(' ('.$this->tutor->highest_french_level.')'); ?>
<?php endif;?>
                <table class="table table-striped">
                    <caption>I can tutor the following classes:</caption>
                    <tr>
                    <th>Classes</th>
                    <th>Highest Level I Can Tutor</th>
                    </tr>

                    <?php foreach ($this->french_classes as $db_name=>$class)
                    if($this->tutor->{$db_name} > 0)
                    {
                        echo '<tr><td>'.$class->name.'</td>';
                        echo '<td>'.$class->levels[(int)$this->tutor->{$db_name}].'</td></tr>';
                    }
                    ?>
                    </table>
        </div>

        <div id="Spanish" class="tab-pane fade">

<h3>Spanish Tutoring</h3>

<?php if(!empty($this->tutor->highest_spanish_name)):?>
            <strong>Highest Completed Spanish Class: </strong><?php echo($this->tutor->highest_spanish_name); if(!empty($this->tutor->highest_spanish_level)) echo(' ('.$this->tutor->highest_spanish_level.')'); ?>
<?php endif;?>
                <table class="table table-striped">
                    <caption>I can tutor the following classes:</caption>
                    <tr>
                    <th>Classes</th>
                    <th>Highest Level I Can Tutor</th>
                    </tr>

                    <?php foreach ($this->spanish_classes as $db_name=>$class)
                    if($this->tutor->{$db_name} > 0)
                    {
                        echo '<tr><td>'.$class->name.'</td>';
                        echo '<td>'.$class->levels[(int)$this->tutor->{$db_name}].'</td></tr>';
                    }
                    ?>
                    </table>
        </div>           



        <div id="Music" class="tab-pane fade">
            <h3>Music</h3>
            <?php if(!empty($this->tutor->instrument)):?>
            <ul class="list-group">
                <li class="list-group-item text-right list-group-item-info"><span class="pull-left"><strong class="">I tutor:</strong></span> <?php echo ucfirst($this->tutor->instrument);?></li>
                <li class="list-group-item text-right"><span class="pull-left"><strong class="">My Experiance:</strong></span> <?php echo $this->tutor->music_years.' years';?></li>
                <li class="list-group-item text-right"><span class="pull-left"><strong class="">Max Student Experiance:</strong></span>
                <?php 
                switch($this->tutor->music_level)
                {
                case 1:
                echo "None";
                break;
                case 2:
                echo "Beginning (0-3 years)";
                break;
                case 3:
                echo "Intermediate (3-6 years)";
                break;
                case 4:
                echo "Advanced (6+ years)";
                break;
                }
                ?>
                </li>
            </ul>
            <?php endif;?>
        </div>
    
    </div>

</div>
    </div>
    </div>


</div>


