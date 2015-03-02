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

            <strong>Highest Completed Math Class: </strong>Calculus (College)
				<table class="table table-striped">
					<caption>I can tutor the following classes:</caption>
					<tr>
					<th>Classes</th>
					<th>Highest Level</th>
					</tr>

					<tr>
					<td>Calculus I</td>
					<td>AP</td>
					</tr>

					<tr>
					<td>Math 4</td>
					<td>Honors</td>
				</table>

        </div>
        <div id="Science" class="tab-pane fade">
            <h3>Science Tutoring</h3>
            <p>Vestibulum nec erat eu nulla rhoncus fringilla ut non neque. Vivamus nibh urna, ornare id gravida ut, mollis a magna. Aliquam porttitor condimentum nisi, eu viverra ipsum porta ut. Nam hendrerit bibendum turpis, sed molestie mi fermentum id. Aenean volutpat velit sem. Sed consequat ante in rutrum convallis. Nunc facilisis leo at faucibus adipiscing.</p>
        </div>
        <div id="French" class="tab-pane fade">
            <h3>French Tutoring</h3>
            <p>WInteger convallis, nulla in sollicitudin placerat, ligula enim auctor lectus, in mollis diam dolor at lorem. Sed bibendum nibh sit amet dictum feugiat. Vivamus arcu sem, cursus a feugiat ut, iaculis at erat. Donec vehicula at ligula vitae venenatis. Sed nunc nulla, vehicula non porttitor in, pharetra et dolor. Fusce nec velit velit. Pellentesque consectetur eros.</p>
        </div>
        <div id="Spanish" class="tab-pane fade">
            <h3>Spanish Tutoring</h3>
            <p>Donec vel placerat quam, ut euismod risus. Sed a mi suscipit, elementum sem a, hendrerit velit. Donec at erat magna. Sed dignissim orci nec eleifend egestas. Donec eget mi consequat massa vestibulum laoreet. Mauris et ultrices nulla, malesuada volutpat ante. Fusce ut orci lorem. Donec molestie libero in tempus imperdiet. Cum sociis natoque penatibus et magnis.</p>
        </div>

             <div id="Music" class="tab-pane fade">
            <h3>Music</h3>
            <p>Donec vel placerat quam, ut euismod risus. Sed a mi suscipit, elementum sem a, hendrerit velit. Donec at erat magna. Sed dignissim orci nec eleifend egestas. Donec eget mi consequat massa vestibulum laoreet. Mauris et ultrices nulla, malesuada volutpat ante. Fusce ut orci lorem. Donec molestie libero in tempus imperdiet. Cum sociis natoque penatibus et magnis.</p>
        </div>
    </div>

</div>
    </div>
    </div>


</div>


