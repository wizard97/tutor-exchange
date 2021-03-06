<div class="container">
  <div class="page-header">
    <h1>Find Me a Tutor</h1>
  </div>
  <?php $this->renderFeedbackMessages(); ?>
  <form method="POST" action="<?php echo URL; ?>search/showresults">

<p class="alert alert-success"><i class="fa fa-info-circle"></i> Just select all the credentials you would like your tutor to have, and we will try and find you the best match.</p>

<ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#Criteria">Tutor Criteria</a></li>
  <li><a data-toggle="tab" href="#Math">Math</a></li>
  <li><a data-toggle="tab" href="#Science">Science</a></li>
  <li><a data-toggle="tab" href="#Social_Studies">Social Studies</a></li>
  <li><a data-toggle="tab" href="#English">English</a></li>
    <li role="presentation" class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">
      Language <span class="caret"></span>
    </a>
    <ul class="dropdown-menu" role="menu">
    <li><a data-toggle="tab" href="#French">French</a></li>
    <li><a data-toggle="tab" href="#German">German</a></li>
    <li><a data-toggle="tab" href="#Italian">Italian</a></li>
    <li><a data-toggle="tab" href="#Mandarin">Mandarin</a></li>
    <li><a data-toggle="tab" href="#Spanish">Spanish</a></li>
    </ul>
  </li>
    <li><a data-toggle="tab" href="#music">Music</a></li>
</ul>




<div class="tab-content">
  <div id="Criteria" class="tab-pane fade in active">
  <div class="row">
  <div class="col-md-6">
    <h3>Tutor Criteria</h3>
              <label for="start_rate">Price range</label>
              <div class="row">
              <div class="col-xs-4">
              <input type="number" class="form-control" name="start_rate" id="start_rate" size="5" maxlength="3" placeholder="min"  min="0">
              </div>
               <div class="col-xs-4">
              <input class="form-control" type="number" name="end_rate" id="end_rate" size="5" maxlength="3" min="1" placeholder="max">
              </div>
            </div>
            <p class="help-block">Enter your price range in dollars per hour</p>

            <div class="form-group">
              <label for="min_grade">Minimum grade</label>
              <select class="form-control" name="min_grade" id ="min_grade">
                <option value="">No Preference</option>
                <option value="7">7th</option>
                <option value="8">8th</option>
                <option value="9">9th</option>
                <option value="10">10th</option>
                <option value="11">11th</option>
                <option value="12">12th</option>
                <option value="13">High School Grad.</option>
                <option value="14">College</option>
                <option value="15">College Grad.</option>
              </select>
              <p class="help-block">The minimum grade your tutor should be in</p>
            </div>
  </div>

  </div>
  </div>

  <!-- math classes -->
  <?php foreach ($this->classes as $subject => $subject_classes): ?>
  <div id="<?php echo str_replace(' ', '_', $subject); ?>" class="tab-pane fade">
    <div class="row">
      <div class="col-md-6">
    <h3><?php echo ucfirst($subject);?></h3>
<?php foreach ($subject_classes as $class_id => $class): ?>
            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                <label>
                    <input type="checkbox" name="<?php echo $subject;?>[]" value="<?php echo $class_id; ?>">
                    <?php echo $class['class_name']; ?></label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="class_<?php echo $class_id; ?>" id="class_<?php echo $class_id; ?>">
                    <?php foreach ($class['level_names'] as $level_num => $level_name): ?>
                    <option value="<?php echo $level_num; ?>"><?php echo $level_name; ?></option>
                  <?php endforeach; ?>
                  </select>
                </div>
              </div>
            </div>

<?php endforeach;?>
      </div>
    </div>
  </div>
<?php endforeach; ?>

</div>


<div class="clearfix"></div>




<hr>
    <div class="pull-left">
      <button type="submit" class="btn btn-lg btn-success"> <span class="glyphicon glyphicon-search" aria-hidden="true"></span> Search </button>
    </div>
  </form>
</div>
