<div class="container">
  <div class="page-header">
    <h1>Update Your Tutoring Info</h1>
  </div>
  <?php $this->renderFeedbackMessages(); ?>
  <form method="POST" action="<?php echo URL; ?>tutor/edittutor_action">

  <p class="alert alert-success"><i class="fa fa-info-circle"></i> This is where you update your tutoring info. Make sure to fill it out as completely as possible and keep it updated. If you are unsure of what is covered in certain classes, please refer to the <a href="http://lps.lexingtonma.org/cms/lib2/ma01001631/centricity/domain/636/1314lhscatalog.pdf">LHS Program of Studies</a>.</p>
    
<ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#criteria">Your Info</a></li>
  <li><a data-toggle="tab" href="#math">Math</a></li>
  <li><a data-toggle="tab" href="#science">Science</a></li>
  <li><a data-toggle="tab" href="#social_studies">Social Studies</a></li>
  <li><a data-toggle="tab" href="#english">English</a></li>
    <li role="presentation" class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">
      Language <span class="caret"></span>
    </a>
    <ul class="dropdown-menu" role="menu">
    <li><a data-toggle="tab" href="#french">French</a></li>
    <li><a data-toggle="tab" href="#german">German</a></li>
    <li><a data-toggle="tab" href="#italian">Italian</a></li>
    <li><a data-toggle="tab" href="#mandarin">Mandarin</a></li>
    <li><a data-toggle="tab" href="#spanish">Spanish</a></li>
    </ul>
  </li>
    <li><a data-toggle="tab" href="#music">Music</a></li>
</ul>

<div class="tab-content">
  <div id="criteria" class="tab-pane fade in active">
  <div class="row">
  <div class="col-md-6">
  <h3>Your Info</h3>
            <div class="form-group">
              <label for="age">Age</label>
              <input type="number" class="form-control" name="age" id="age" size="5" maxlength="3" placeholder="Optional" <?php if (!empty($this->user->age)){ echo("value=".'"'.$this->user->age.'"');} ?>>
            </div>
            <div class="form-group">
              <label for="grade">Your grade</label>
              <select class="form-control" name="grade" id ="grade" required>
                <option value="7" <?php if ($this->user->grade == "7"){ echo("selected=selected");} ?> >7th</option>
                <option value="8" <?php if ($this->user->grade == "8"){ echo("selected=selected");} ?> >8th</option>
                <option value="9" <?php if ($this->user->grade == "9"){ echo("selected=selected");} ?> >9th</option>
                <option value="10" <?php if ($this->user->grade == "10"){ echo("selected=selected");} ?> >10th</option>
                <option value="11" <?php if ($this->user->grade == "11"){ echo("selected=selected");} ?> >11th</option>
                <option value="12" <?php if ($this->user->grade == "12"){ echo("selected=selected");} ?> >12th</option>
                <option value="13" <?php if ($this->user->grade == "13"){ echo("selected=selected");} ?> >High School Graduate</option>
                <option value="14"  <?php if ($this->user->grade == "14"){ echo("selected=selected");} ?> >College</option>
                <option value="15" <?php if ($this->user->grade == "15"){ echo("selected=selected");} ?> >College Graduate</option>
              </select>
            </div>
            <div class="form-group">
              <label for="rate">Requested hourly rate</label>
              <input type="number" class="form-control" name="rate" id="rate" size="5" maxlength="3" min="8" max="150" required <?php if (!empty($this->user->rate) || $this->user->rate == 0){ echo("value=".'"'.$this->user->rate.'"');} else {echo("placeholder=".'"'."$/hour".'"');} ?>>
            </div>
            <div class="form-group">
              <label for="about_me">About me</label>
              <textarea name="about_me" class="form-control" id="about_me" rows="10" cols="50" maxlength="3000" <?php if (empty($this->user->about_me)){ echo("placeholder=".'"'."If you want, tell the people searching for tutors a little about yourself/your tutoring ability. Maybe mention your schedule. This is confidential, and will only be viewable by people with registered accounts.".'"');} ?> >
<?php if (!empty($this->user->about_me)){echo $this->user->about_me;}?>
</textarea>
            </div>
  </div>
  </div>
  </div>

    <div id="math" class="tab-pane fade">
  <div class="row">
  <div class="col-md-6">
  <h3>Math Tutoring</h3>
            <div class="form-group">
              <label for="highest_math_name">Highest completed math class</label>
              <input type="text" class="form-control" name="highest_math_name" id="highest_math_name" size="15" maxlength="40" <?php if (!empty($this->user->highest_math_name)){ echo("value=".'"'.$this->user->highest_math_name.'"');} ?>>
              <p class="help-block">What was the highest math class you successfully completed?</p>
            </div>
            <div class="form=group">
              <label for="highest_math_level">Class level</label>
              <input type="text" class="form-control" name="highest_math_level" id="highest_math_level" size="15" maxlength="20" <?php if (!empty($this->user->highest_math_level)){ echo("value=".'"'.$this->user->highest_math_level.'"');} else{echo("placeholder=\"Example: Honors\"");} ?>>
              <p class="help-block">What level was this class?</p>
            </div>
            <label>Which of these classes can you tutor?</label>
            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="math[]" id="elementary_math" value="elementary_math" <?php if ($this->user->elementary_math != 0){ echo "checked";} ?>>
                    Elementary School Math</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="elementary_math" id="elementary_math">
                    <option value="3" <?php if ($this->user->elementary_math == 3){ echo("selected=selected");} ?>>Honors</option>
                    <option value="2" <?php if ($this->user->elementary_math == 2){ echo("selected=selected");} ?>>Standard</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="math[]" id="middle_math" value="middle_math" <?php if ($this->user->middle_math != 0){ echo "checked";} ?>>
                    Middle School Math</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="middle_math" id="middle_math">
                    <option value="3" <?php if ($this->user->middle_math == 3){ echo("selected=selected");} ?>>Honors</option>
                    <option value="2" <?php if ($this->user->middle_math == 2){ echo("selected=selected");} ?>>Standard</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="math[]" id="math_1" value="math_1" <?php if ($this->user->math_1 != 0){ echo "checked";} ?>>
                    Math 1</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="math_1" id="math_1">
                    <option value="3" <?php if ($this->user->math_1 == 3){ echo("selected=selected");} ?>>Honors</option>
                    <option value="2" <?php if ($this->user->math_1 == 2){ echo("selected=selected");} ?>>Level 1</option>
                    <option value="1" <?php if ($this->user->math_1 == 1){ echo("selected=selected");} ?>>Level 2</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="math[]" id="math_2" value="math_2" <?php if ($this->user->math_2 != 0){ echo "checked";} ?>>
                    Math 2</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="math_2" id="math_2">
                    <option value="3" <?php if ($this->user->math_2 == 3){ echo("selected=selected");} ?>>Honors</option>
                    <option value="2" <?php if ($this->user->math_2 == 2){ echo("selected=selected");} ?>>Level 1</option>
                    <option value="1" <?php if ($this->user->math_2 == 1){ echo("selected=selected");} ?>>Level 2</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="math[]" id="math_3" value="math_3" <?php if ($this->user->math_3 != 0){ echo "checked";} ?>>
                    Math 3</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="math_3" id="math_3">
                    <option value="3" <?php if ($this->user->math_3 == 3){ echo("selected=selected");} ?>>Honors</option>
                    <option value="2" <?php if ($this->user->math_3 == 2){ echo("selected=selected");} ?>>Level 1</option>
                    <option value="1" <?php if ($this->user->math_3 == 1){ echo("selected=selected");} ?>>Level 2</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="math[]" id="math_4" value="math_4" <?php if ($this->user->math_4 != 0){ echo "checked";} ?>>
                    Math 4</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="math_4" id="math_4">
                    <option value="3" <?php if ($this->user->math_4 == 3){ echo("selected=selected");} ?>>Honors</option>
                    <option value="2" <?php if ($this->user->math_4 == 2){ echo("selected=selected");} ?>>Level 1</option>
                    <option value="1" <?php if ($this->user->math_4 == 1){ echo("selected=selected");} ?>>Level 2</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="math[]" id="stats" value="stats" <?php if ($this->user->stats != 0){ echo "checked";} ?>>
                    Statistics</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="stats" id="stats">
                    <option value="4" <?php if ($this->user->stats == 4){ echo("selected=selected");} ?>>AP</option>
                    <option value="3" <?php if ($this->user->stats == 3){ echo("selected=selected");} ?>>Honors</option>
                    <option value="2" <?php if ($this->user->stats == 2){ echo("selected=selected");} ?>>Level 1</option>
                    <option value="1" <?php if ($this->user->stats == 1){ echo("selected=selected");} ?>>Level 2</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="math[]" id="calc" value="calc" <?php if ($this->user->calc != 0){ echo "checked";} ?>>
                    Calculus</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="calc" id="calc">
                    <option value="5" <?php if ($this->user->calc == 5){ echo("selected=selected");} ?>>AP BC</option>
                    <option value="4" <?php if ($this->user->calc == 4){ echo("selected=selected");} ?>>AP AB</option>
                    <option value="3" <?php if ($this->user->calc == 3){ echo("selected=selected");} ?>>Honors</option>
                    <option value="2" <?php if ($this->user->calc == 2){ echo("selected=selected");} ?>>Level 1</option>
                    <option value="1" <?php if ($this->user->calc == 1){ echo("selected=selected");} ?>>Level 2</option>
                  </select>
                </div>
              </div>
            </div>
  </div>
  </div>
  </div>

    <div id="science" class="tab-pane fade">
  <div class="row">
  <div class="col-md-6">
<h3>Science Tutoring</h3>
           <div class="form-group">
              <label for="highest_science_name">Highest completed science class</label>
              <input type="text" class="form-control" name="highest_science_name" id="highest_science_name" size="15" maxlength="40" <?php if (!empty($this->user->highest_science_name)){ echo("value=".'"'.$this->user->highest_science_name.'"');} ?>>
              <p class="help-block">What was the highest science class you successfully completed?</p>
            </div>
            <div class="form-group">
              <label for="highest_science_level">Class level</label>
              <input type="text" class="form-control" name="highest_science_level" id="highest_science_level" size="15" maxlength="20" <?php if (!empty($this->user->highest_science_level)){ echo("value=".'"'.$this->user->highest_science_level.'"');} else{echo("placeholder=\"Example: Honors\"");} ?>>
              <p class="help-block">What level was this class?</p>
            </div>
            <label>Which of these classes can you tutor?</label>
            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="science[]" id="elementary_science" value="elementary_science" <?php if ($this->user->elementary_science != 0){ echo "checked";} ?>>
                    Elementary School Science</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="elementary_science" id="elementary_science">
                    <option value="3" <?php if ($this->user->elementary_science == 3){ echo("selected=selected");} ?>>Honors</option>
                    <option value="2" <?php if ($this->user->elementary_science == 2){ echo("selected=selected");} ?>>Standard</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="science[]" id="middle_science" value="middle_science" <?php if ($this->user->middle_science != 0){ echo "checked";} ?>>
                    Middle School Science</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="middle_science" id="middle_science">
                    <option value="3" <?php if ($this->user->middle_science == 3){ echo("selected=selected");} ?>>Honors</option>
                    <option value="2" <?php if ($this->user->middle_science == 2){ echo("selected=selected");} ?>>Standard</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="science[]" id="earth_science" value="earth_science" <?php if ($this->user->earth_science != 0){ echo "checked";} ?>>
                    Earth Science</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="earth_science" id="earth_science">
                    <option value="3" <?php if ($this->user->earth_science == 3){ echo("selected=selected");} ?>>Honors</option>
                    <option value="2" <?php if ($this->user->earth_science == 2){ echo("selected=selected");} ?>>Level 1</option>
                    <option value="1" <?php if ($this->user->earth_science == 1){ echo("selected=selected");} ?>>Level 2</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="science[]" id="bio" value="bio" <?php if ($this->user->bio != 0){ echo "checked";} ?>>
                    Biology</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="bio" id="bio">
                    <option value="4" <?php if ($this->user->bio == 4){ echo("selected=selected");} ?>>AP</option>
                    <option value="2" <?php if ($this->user->bio == 2){ echo("selected=selected");} ?>>Level 1</option>
                    <option value="1" <?php if ($this->user->bio == 1){ echo("selected=selected");} ?>>Level 2</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="science[]" id="chem" value="chem" <?php if ($this->user->chem != 0){ echo "checked";} ?>>
                    Chemistry</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="chem" id="chem">
                    <option value="4" <?php if ($this->user->chem == 4){ echo("selected=selected");} ?>>AP</option>
                    <option value="3" <?php if ($this->user->chem == 4){ echo("selected=selected");} ?>>Honors</option>
                    <option value="2" <?php if ($this->user->chem == 2){ echo("selected=selected");} ?>>Level 1</option>
                    <option value="1" <?php if ($this->user->chem == 1){ echo("selected=selected");} ?>>Level 2</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="science[]" id="phys" value="phys" <?php if ($this->user->phys != 0){ echo "checked";} ?>>
                    Physics</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="phys" id="phys">
                    <option value="5" <?php if ($this->user->phys == 5){ echo("selected=selected");} ?>>AP C</option>
                    <option value="4" <?php if ($this->user->phys == 4){ echo("selected=selected");} ?>>AP I</option>
                    <option value="2" <?php if ($this->user->phys == 2){ echo("selected=selected");} ?>>Level 1</option>
                    <option value="1" <?php if ($this->user->phys == 1){ echo("selected=selected");} ?>>Level 2</option>
                  </select>
                </div>
              </div>
            </div>
  </div>
  </div>
  </div>

      <div id="social_studies" class="tab-pane fade">
  <div class="row">
  <div class="col-md-6">
<h3>Social Studies</h3>
            <div class="form-group">
              <label for="highest_social_name">Highest completed Social Studies class</label>
              <input type="text" class="form-control" name="highest_social_name" id="highest_social_name" size="15" maxlength="40" <?php if (!empty($this->user->highest_social_name)){ echo("value=".'"'.$this->user->highest_social_name.'"');} ?>>
              <p class="help-block">What was the highest Social Studies class you successfully completed?</p>
            </div>
            <div class="form=group">
              <label for="highest_social_level">Class level</label>
              <input type="text" class="form-control" name="highest_social_level" id="highest_social_level" size="15" maxlength="20" <?php if (!empty($this->user->highest_social_level)){ echo("value=".'"'.$this->user->highest_social_level.'"');} else{echo("placeholder=\"Example: Honors\"");} ?>>
              <p class="help-block">What level was this class?</p>
            </div>
            <label>Which of these classes can you tutor?</label>
             <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"  name="social[]" value="elementary_social" <?php if ($this->user->elementary_social != 0){ echo "checked";} ?>>
                    Elementary School Social Studies</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="elementary_social" id="elementary_social">
                    <option value="3" <?php if ($this->user->elementary_social == 3){ echo("selected=selected");} ?>>Honors</option>
                    <option value="2" <?php if ($this->user->elementary_social == 2){ echo("selected=selected");} ?>>Standard</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"  name="social[]" value="middle_social" <?php if ($this->user->middle_social != 0){ echo "checked";} ?>>
                    Middle School Social Studies</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="middle_social" id="middle_scocial">
                    <option value="3" <?php if ($this->user->middle_social == 3){ echo("selected=selected");} ?>>Honors</option>
                    <option value="2" <?php if ($this->user->middle_social == 2){ echo("selected=selected");} ?>>Standard</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"  name="social[]" value="world_history_1" <?php if ($this->user->world_history_1 != 0){ echo "checked";} ?>>
                    World History I</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="world_history_1" id="world_history_1">
                    <option value="2" <?php if ($this->user->world_history_1 == 2){ echo("selected=selected");} ?>>Level 1</option>
                    <option value="1" <?php if ($this->user->world_history_1 == 1){ echo("selected=selected");} ?>>Level 2</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"  name="social[]" value="world_history_2" <?php if ($this->user->world_history_2 != 0){ echo "checked";} ?>>
                    World History II</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="world_history_2" id="world_history_2">
                    <option value="2"<?php if ($this->user->world_history_2 == 2){ echo("selected=selected");} ?>>Level 1</option>
                    <option value="1" <?php if ($this->user->world_history_2 == 1){ echo("selected=selected");} ?>>Level 2</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"  name="social[]" value="ap_world" <?php if ($this->user->ap_world != 0){ echo "checked";} ?>>
                    AP World History</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="ap_world" id="ap_world">
                    <option value="4" <?php if ($this->user->ap_world == 4){ echo("selected=selected");} ?>>AP</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"  name="social[]" value="us_history" <?php if ($this->user->us_history != 0){ echo "checked";} ?>>
                    US History</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="us_history" id="us_history">
                    <option value="4" <?php if ($this->user->us_history == 4){ echo("selected=selected");} ?>>AP</option>
                    <option value="2" <?php if ($this->user->us_history == 2){ echo("selected=selected");} ?>>Level 1</option>
                    <option value="1" <?php if ($this->user->us_history == 1){ echo("selected=selected");} ?>>Level 2</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"  name="social[]" value="econ" <?php if ($this->user->econ != 0){ echo "checked";} ?>>
                    Economics</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="econ" id="econ">
                    <option value="4" <?php if ($this->user->econ == 4){ echo("selected=selected");} ?>>AP</option>
                    <option value="2" <?php if ($this->user->econ == 2){ echo("selected=selected");} ?>>Level 1</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"  name="social[]" value="psych" <?php if ($this->user->psych != 0){ echo "checked";} ?>>
                    Psychology</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="psych" id="psych">
                    <option value="4" <?php if ($this->user->psych == 4){ echo("selected=selected");} ?>>AP</option>
                    <option value="2" <?php if ($this->user->psych == 2){ echo("selected=selected");} ?>>Level 1</option>
                  </select>
                </div>
              </div>
            </div>
  </div>
  </div>
  </div>


      <div id="french" class="tab-pane fade">
  <div class="row">
  <div class="col-md-6">
<h3>French Tutoring</h3>
            <div class="form-group">
              <label for="highest_french_name">Highest completed French class</label>
              <input type="text" class="form-control" name="highest_french_name" id="highest_french_name" size="15" maxlength="40" <?php if (!empty($this->user->highest_french_name)){ echo("value=".'"'.$this->user->highest_french_name.'"');} ?>>
              <p class="help-block">What was the highest French class you successfully completed?</p>
            </div>
            <div class="form-group">
              <label for="highest_french_level">Class level</label>
              <input type="text" class="form-control" name="highest_french_level" id="highest_french_level" size="15" maxlength="20" <?php if (!empty($this->user->highest_french_level)){ echo("value=".'"'.$this->user->highest_french_level.'"');} else{echo("placeholder=\"Example: Honors\"");} ?>>
              <p class="help-block">What level was this class?</p>
            </div>
            <label>Which of these classes can you tutor?</label>
            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"  name="foreign_language[]" value="elementary_french" <?php if ($this->user->elementary_french != 0){ echo "checked";} ?>>
                    Elementary School French</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="elementary_french" id="elementary_french">
                    <option value="3" <?php if ($this->user->elementary_french == 3){ echo("selected=selected");} ?>>Honors</option>
                    <option value="2" <?php if ($this->user->elementary_french == 2){ echo("selected=selected");} ?>>Standard</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"  name="foreign_language[]" value="middle_french" <?php if ($this->user->middle_french != 0){ echo "checked";} ?>>
                    Middle School French</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="middle_french" id="middle_french">
                    <option value="3" <?php if ($this->user->middle_french == 3){ echo("selected=selected");} ?>>Honors</option>
                    <option value="2" <?php if ($this->user->middle_french == 2){ echo("selected=selected");} ?>>Standard</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"  name="foreign_language[]" value="french_1" <?php if ($this->user->french_1 != 0){ echo "checked";} ?>>
                    French 1</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="french_1" id="french_1">
                    <option value="3" <?php if ($this->user->french_1 == 3){ echo("selected=selected");} ?>>Honors</option>
                    <option value="2" <?php if ($this->user->french_1 == 2){ echo("selected=selected");} ?>>Level 1</option>
                    <option value="1" <?php if ($this->user->french_1 == 1){ echo("selected=selected");} ?>>Level 2</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"  name="foreign_language[]" value="french_2" <?php if ($this->user->french_2 != 0){ echo "checked";} ?>>
                    French 2</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="french_2" id="french_2">
                    <option value="3" <?php if ($this->user->french_2 == 3){ echo("selected=selected");} ?>>Honors</option>
                    <option value="2" <?php if ($this->user->french_2 == 2){ echo("selected=selected");} ?>>Level 1</option>
                    <option value="1" <?php if ($this->user->french_2 == 1){ echo("selected=selected");} ?>>Level 2</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"  name="foreign_language[]" value="french_3" <?php if ($this->user->french_3 != 0){ echo "checked";} ?>>
                    French 3</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="french_3" id="french_3">
                    <option value="3" <?php if ($this->user->french_3 == 3){ echo("selected=selected");} ?>>Honors</option>
                    <option value="2" <?php if ($this->user->french_3 == 2){ echo("selected=selected");} ?>>Level 1</option>
                    <option value="1" <?php if ($this->user->french_3 == 1){ echo("selected=selected");} ?>>Level 2</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"  name="foreign_language[]" value="french_4" <?php if ($this->user->french_4 != 0){ echo "checked";} ?>>
                    French 4</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="french_4" id="french_4">
                    <option value="3" <?php if ($this->user->french_4 == 3){ echo("selected=selected");} ?>>Honors</option>
                    <option value="2" <?php if ($this->user->french_4 == 2){ echo("selected=selected");} ?>>Level 1</option>
                    <option value="1" <?php if ($this->user->french_4 == 1){ echo("selected=selected");} ?>>Level 2</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"  name="foreign_language[]" value="french_5" <?php if ($this->user->french_5 != 0){ echo "checked";} ?>>
                    French 5</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="french_5" id="french_5">
                    <option value="2" <?php if ($this->user->french_5 == 2){ echo("selected=selected");} ?>>Level 1</option>
                    <option value="1" <?php if ($this->user->french_5 == 1){ echo("selected=selected");} ?>>Level 2</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"  name="foreign_language[]" value="french_AP" <?php if ($this->user->french_AP != 0){ echo "checked";} ?>>
                    AP French</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="french_AP" id="french_AP">
                    <option value="4" <?php if ($this->user->french_AP == 4){ echo("selected=selected");} ?>>AP</option>
                  </select>
                </div>
              </div>
            </div>

  </div>
  </div>
  </div>

      <div id="spanish" class="tab-pane fade">
  <div class="row">
  <div class="col-md-6">
<h3>Spanish Tutoring</h3>
            <div class="form-group">
              <label for="highest_spanish_name">Highest completed Spanish class</label>
              <input type="text" class="form-control" name="highest_spanish_name" id="highest_spanish_name" size="15" maxlength="40" <?php if (!empty($this->user->highest_spanish_name)){ echo("value=".'"'.$this->user->highest_spanish_name.'"');} ?>>
              <p class="help-block">What was the highest Spanish class you successfully completed?</p>
            </div>
            <div class="form-group">
              <label for="highest_spanish_level">Class level</label>
              <input type="text" class="form-control" name="highest_spanish_level" id="highest_spanish_level" size="15" maxlength="20" <?php if (!empty($this->user->highest_spanish_level)){ echo("value=".'"'.$this->user->highest_spanish_level.'"');} else{echo("placeholder=\"Example: Honors\"");} ?>>
              <p class="help-block">What level was this class?</p>
            </div>
            <label>Which of these classes can you tutor?</label>
            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"  name="foreign_language[]" value="elementary_spanish" <?php if ($this->user->elementary_spanish != 0){ echo "checked";} ?>>
                    Elementary School Spanish</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="elementary_spanish" id="elementary_spanish">
                    <option value="3" <?php if ($this->user->elementary_spanish == 3){ echo("selected=selected");} ?>>Honors</option>
                    <option value="2" <?php if ($this->user->elementary_spanish == 2){ echo("selected=selected");} ?>>Standard</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"  name="foreign_language[]" value="middle_spanish" <?php if ($this->user->middle_spanish != 0){ echo "checked";} ?>>
                    Middle School Spanish</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="middle_spanish" id="middle_spanish">
                    <option value="3" <?php if ($this->user->middle_spanish == 3){ echo("selected=selected");} ?>>Honors</option>
                    <option value="2" <?php if ($this->user->middle_spanish == 2){ echo("selected=selected");} ?>>Standard</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"  name="foreign_language[]" value="spanish_1" <?php if ($this->user->spanish_1 != 0){ echo "checked";} ?>>
                    Spanish 1</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="spanish_1" id="spanish_1">
                    <option value="3" <?php if ($this->user->spanish_1 == 3){ echo("selected=selected");} ?>>Honors</option>
                    <option value="2" <?php if ($this->user->spanish_1 == 2){ echo("selected=selected");} ?>>Level 1</option>
                    <option value="1" <?php if ($this->user->spanish_1 == 1){ echo("selected=selected");} ?>>Level 2</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"  name="foreign_language[]" value="spanish_2" <?php if ($this->user->spanish_2 != 0){ echo "checked";} ?>>
                    Spanish 2</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="spanish_2" id="spanish_2">
                    <option value="3" <?php if ($this->user->spanish_2 == 3){ echo("selected=selected");} ?>>Honors</option>
                    <option value="2" <?php if ($this->user->spanish_2 == 2){ echo("selected=selected");} ?>>Level 1</option>
                    <option value="1" <?php if ($this->user->spanish_2 == 1){ echo("selected=selected");} ?>>Level 2</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"  name="foreign_language[]" value="spanish_3" <?php if ($this->user->spanish_3 != 0){ echo "checked";} ?>>
                    Spanish 3</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="spanish_3" id="spanish_3">
                    <option value="3" <?php if ($this->user->spanish_3 == 3){ echo("selected=selected");} ?>>Honors</option>
                    <option value="2" <?php if ($this->user->spanish_3 == 2){ echo("selected=selected");} ?>>Level 1</option>
                    <option value="1" <?php if ($this->user->spanish_3 == 1){ echo("selected=selected");} ?>>Level 2</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"  name="foreign_language[]" value="spanish_4" <?php if ($this->user->spanish_4 != 0){ echo "checked";} ?>>
                    Spanish 4</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="spanish_4" id="spanish_4">
                    <option value="3" <?php if ($this->user->spanish_4 == 3){ echo("selected=selected");} ?>>Honors</option>
                    <option value="2" <?php if ($this->user->spanish_4 == 2){ echo("selected=selected");} ?>>Level 1</option>
                    <option value="1" <?php if ($this->user->spanish_4 == 1){ echo("selected=selected");} ?>>Level 2</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"  name="foreign_language[]" value="spanish_5" <?php if ($this->user->spanish_5 != 0){ echo "checked";} ?>>
                    Spanish 5</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="spanish_5" id="spanish_5">
                    <option value="2" <?php if ($this->user->spanish_5 == 2){ echo("selected=selected");} ?>>Level 1</option>
                    <option value="1" <?php if ($this->user->spanish_5 == 1){ echo("selected=selected");} ?>>Level 2</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"  name="foreign_language[]" value="spanish_AP" <?php if ($this->user->spanish_AP != 0){ echo "checked";} ?>>
                    AP Spanish</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="spanish_AP" id="spanish_AP">
                    <option value="4" <?php if ($this->user->spanish_AP == 4){ echo("selected=selected");} ?>>AP</option>
                  </select>
                </div>
              </div>
            </div>
  </div>
  </div>
  </div>

  <div id="german" class="tab-pane fade">
  <div class="row">
  <div class="col-md-6">
<h3>German Tutoring</h3>
            <div class="form-group">
              <label for="highest_german_name">Highest completed German class</label>
              <input type="text" class="form-control" name="highest_german_name" id="highest_german_name" size="15" maxlength="40" <?php if (!empty($this->user->highest_german_name)){ echo("value=".'"'.$this->user->highest_german_name.'"');} ?>>
              <p class="help-block">What was the highest German class you successfully completed?</p>
            </div>
            <div class="form-group">
              <label for="highest_german_level">Class level</label>
              <input type="text" class="form-control" name="highest_german_level" id="highest_german_level" size="15" maxlength="20" <?php if (!empty($this->user->highest_german_level)){ echo("value=".'"'.$this->user->highest_german_level.'"');} else{echo("placeholder=\"Example: Honors\"");} ?>>
              <p class="help-block">What level was this class?</p>
            </div>
            <label>Which of these classes can you tutor?</label>

 <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"  name="foreign_language[]" value="german_1" <?php if ($this->user->german_1 != 0){ echo "checked";} ?>>
                    German 1</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="german_1" id="german_1">
                    <option value="3" <?php if ($this->user->german_1 == 3){ echo("selected=selected");} ?>>Honors</option>
                    <option value="2" <?php if ($this->user->german_1 == 2){ echo("selected=selected");} ?>>Level 1</option>
                    <option value="1" <?php if ($this->user->german_1 == 1){ echo("selected=selected");} ?>>Level 2</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"  name="foreign_language[]" value="german_2" <?php if ($this->user->german_2 != 0){ echo "checked";} ?>>
                    German 2</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="german_2" id="german_2">
                    <option value="3" <?php if ($this->user->german_2 == 3){ echo("selected=selected");} ?>>Honors</option>
                    <option value="2" <?php if ($this->user->german_2 == 2){ echo("selected=selected");} ?>>Level 1</option>
                    <option value="1" <?php if ($this->user->german_2 == 1){ echo("selected=selected");} ?>>Level 2</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"  name="foreign_language[]" value="german_3" <?php if ($this->user->german_3 != 0){ echo "checked";} ?>>
                    German 3</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="german_3" id="german_3">
                    <option value="3" <?php if ($this->user->german_3 == 3){ echo("selected=selected");} ?>>Honors</option>
                    <option value="2" <?php if ($this->user->german_3 == 2){ echo("selected=selected");} ?>>Level 1</option>
                    <option value="1" <?php if ($this->user->german_3 == 1){ echo("selected=selected");} ?>>Level 2</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"  name="foreign_language[]" value="german_4" <?php if ($this->user->german_4 != 0){ echo "checked";} ?>>
                    German 4</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="german_4" id="german_4">
                    <option value="3" <?php if ($this->user->german_4 == 3){ echo("selected=selected");} ?>>Honors</option>
                    <option value="2" <?php if ($this->user->german_4 == 2){ echo("selected=selected");} ?>>Level 1</option>
                    <option value="1" <?php if ($this->user->german_4 == 1){ echo("selected=selected");} ?>>Level 2</option>
                  </select>
                </div>
              </div>
            </div>
           
  </div>
  </div>
  </div>


    <div id="italian" class="tab-pane fade">
  <div class="row">
  <div class="col-md-6">
<h3>Italian Tutoring</h3>
            <div class="form-group">
              <label for="highest_italian_name">Highest completed Italian class</label>
              <input type="text" class="form-control" name="highest_italian_name" id="highest_italian_name" size="15" maxlength="40" <?php if (!empty($this->user->highest_italian_name)){ echo("value=".'"'.$this->user->highest_italian_name.'"');} ?>>
              <p class="help-block">What was the highest Italian class you successfully completed?</p>
            </div>
            <div class="form-group">
              <label for="highest_italian_level">Class level</label>
              <input type="text" class="form-control" name="highest_italian_level" id="highest_italian_level" size="15" maxlength="20" <?php if (!empty($this->user->highest_italian_level)){ echo("value=".'"'.$this->user->highest_italian_level.'"');} else{echo("placeholder=\"Example: Honors\"");} ?>>
              <p class="help-block">What level was this class?</p>
            </div>
            <label>Which of these classes can you tutor?</label>

 <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"  name="foreign_language[]" value="italian_1" <?php if ($this->user->italian_1 != 0){ echo "checked";} ?>>
                    Italian 1</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="italian_1" id="italian_1">
                    <option value="3" <?php if ($this->user->italian_1 == 3){ echo("selected=selected");} ?>>Honors</option>
                    <option value="2" <?php if ($this->user->italian_1 == 2){ echo("selected=selected");} ?>>Level 1</option>
                    <option value="1" <?php if ($this->user->italian_1 == 1){ echo("selected=selected");} ?>>Level 2</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"  name="foreign_language[]" value="italian_2" <?php if ($this->user->italian_2 != 0){ echo "checked";} ?>>
                    Italian 2</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="italian_2" id="italian_2">
                    <option value="3" <?php if ($this->user->italian_2 == 3){ echo("selected=selected");} ?>>Honors</option>
                    <option value="2" <?php if ($this->user->italian_2 == 2){ echo("selected=selected");} ?>>Level 1</option>
                    <option value="1" <?php if ($this->user->italian_2 == 1){ echo("selected=selected");} ?>>Level 2</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"  name="foreign_language[]" value="italian_3" <?php if ($this->user->italian_3 != 0){ echo "checked";} ?>>
                    Italian 3</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="italian_3" id="italian_3">
                    <option value="3" <?php if ($this->user->italian_3 == 3){ echo("selected=selected");} ?>>Honors</option>
                    <option value="2" <?php if ($this->user->italian_3 == 2){ echo("selected=selected");} ?>>Level 1</option>
                    <option value="1" <?php if ($this->user->italian_3 == 1){ echo("selected=selected");} ?>>Level 2</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"  name="foreign_language[]" value="italian_4" <?php if ($this->user->italian_4 != 0){ echo "checked";} ?>>
                    Italian 4</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="italian_4" id="italian_4">
                    <option value="3" <?php if ($this->user->italian_4 == 3){ echo("selected=selected");} ?>>Honors</option>
                    <option value="2" <?php if ($this->user->italian_4 == 2){ echo("selected=selected");} ?>>Level 1</option>
                    <option value="1" <?php if ($this->user->italian_4 == 1){ echo("selected=selected");} ?>>Level 2</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"  name="foreign_language[]" value="italian_AP" <?php if ($this->user->italian_AP != 0){ echo "checked";} ?>>
                    AP Italian</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="italian_AP" id="italian_AP">
                    <option value="4" <?php if ($this->user->italian_AP == 4){ echo("selected=selected");} ?>>AP italian</option>
                  </select>
                </div>
              </div>
            </div>
  </div>
  </div>
  </div>

  <div id="mandarin" class="tab-pane fade">
  <div class="row">
  <div class="col-md-6">
<h3>Mandarin Tutoring</h3>
            <div class="form-group">
              <label for="highest_mandarin_name">Highest completed Mandarin class</label>
              <input type="text" class="form-control" name="highest_mandarin_name" id="highest_mandarin_name" size="15" maxlength="40" <?php if (!empty($this->user->highest_mandarin_name)){ echo("value=".'"'.$this->user->highest_mandarin_name.'"');} ?>>
              <p class="help-block">What was the highest Mandarin class you successfully completed?</p>
            </div>
            <div class="form-group">
              <label for="highest_mandarin_level">Class level</label>
              <input type="text" class="form-control" name="highest_mandarin_level" id="highest_mandarin_level" size="15" maxlength="20" <?php if (!empty($this->user->highest_mandarin_level)){ echo("value=".'"'.$this->user->highest_mandarin_level.'"');} else{echo("placeholder=\"Example: Honors\"");} ?>>
              <p class="help-block">What level was this class?</p>
            </div>
            <label>Which of these classes can you tutor?</label>

            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"  name="foreign_language[]" value="mandarin_1" <?php if ($this->user->mandarin_1 != 0){ echo "checked";} ?>>
                    Mandarin 1</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="mandarin_1" id="mandarin_1">
                    <option value="3" <?php if ($this->user->mandarin_1 == 3){ echo("selected=selected");} ?>>Honors</option>
                    <option value="2" <?php if ($this->user->mandarin_1 == 2){ echo("selected=selected");} ?>>Level 1</option>
                    <option value="1" <?php if ($this->user->mandarin_1 == 1){ echo("selected=selected");} ?>>Level 2</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"  name="foreign_language[]" value="mandarin_2" <?php if ($this->user->mandarin_2 != 0){ echo "checked";} ?>>
                    Mandarin 2</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="mandarin_2" id="mandarin_2">
                    <option value="3" <?php if ($this->user->mandarin_2 == 3){ echo("selected=selected");} ?>>Honors</option>
                    <option value="2" <?php if ($this->user->mandarin_2 == 2){ echo("selected=selected");} ?>>Level 1</option>
                    <option value="1" <?php if ($this->user->mandarin_2 == 1){ echo("selected=selected");} ?>>Level 2</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"  name="foreign_language[]" value="mandarin_3" <?php if ($this->user->mandarin_3 != 0){ echo "checked";} ?>>
                    Mandarin 3</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="mandarin_3" id="mandarin_3">
                    <option value="3" <?php if ($this->user->mandarin_3 == 3){ echo("selected=selected");} ?>>Honors</option>
                    <option value="2" <?php if ($this->user->mandarin_3 == 2){ echo("selected=selected");} ?>>Level 1</option>
                    <option value="1" <?php if ($this->user->mandarin_3 == 1){ echo("selected=selected");} ?>>Level 2</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"  name="foreign_language[]" value="mandarin_4" <?php if ($this->user->mandarin_4 != 0){ echo "checked";} ?>>
                    Mandarin 4</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="mandarin_4" id="mandarin_4">
                    <option value="3" <?php if ($this->user->mandarin_4 == 3){ echo("selected=selected");} ?>>Honors</option>
                    <option value="2" <?php if ($this->user->mandarin_4 == 2){ echo("selected=selected");} ?>>Level 1</option>
                    <option value="1" <?php if ($this->user->mandarin_4 == 1){ echo("selected=selected");} ?>>Level 2</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"  name="foreign_language[]" value="mandarin_5" <?php if ($this->user->mandarin_5 != 0){ echo "checked";} ?>>
                    Mandarin 5</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="mandarin_5" id="mandarin_5">
                  <option value="3" <?php if ($this->user->mandarin_5 == 3){ echo("selected=selected");} ?>>Honors</option>
                    <option value="2" <?php if ($this->user->mandarin_5 == 2){ echo("selected=selected");} ?>>Level 1</option>
                    <option value="1" <?php if ($this->user->mandarin_5 == 1){ echo("selected=selected");} ?>>Level 2</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"  name="foreign_language[]" value="mandarin_AP" <?php if ($this->user->mandarin_AP != 0){ echo "checked";} ?>>
                    AP Mandarin</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="mandarin_AP" id="mandarin_AP">
                    <option value="4" <?php if ($this->user->mandarin_AP == 4){ echo("selected=selected");} ?>>AP</option>
                  </select>
                </div>
              </div>
            </div>
  </div>
  </div>
  </div>

  <div id="english" class="tab-pane fade">
  <div class="row">
  <div class="col-md-6">
<h3>English Tutoring</h3>
            <div class="form-group">
              <label for="highest_english_name">Highest completed English class</label>
              <input type="text" class="form-control" name="highest_english_name" id="highest_english_name" size="15" maxlength="40" <?php if (!empty($this->user->highest_english_name)){ echo("value=".'"'.$this->user->highest_english_name.'"');} ?>>
              <p class="help-block">What was the highest English class you successfully completed?</p>
            </div>
            <div class="form-group">
              <label for="highest_english_level">Class level</label>
              <input type="text" class="form-control" name="highest_english_level" id="highest_english_level" size="15" maxlength="20" <?php if (!empty($this->user->highest_english_level)){ echo("value=".'"'.$this->user->highest_english_level.'"');} else{echo("placeholder=\"Example: Honors\"");} ?>>
              <p class="help-block">What level was this class?</p>
            </div>
            <label>Which of these can you help students in?</label>
            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="english[]" id="analytical_essay" value="analytical_essay" <?php if ($this->user->analytical_essay != 0){ echo "checked";} ?>>
                    Analytical Essays</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="analytical_essay">
                    <option value="4" <?php if ($this->user->analytical_essay == 4){ echo("selected=selected");} ?>>High School (11-12th)</option>
                    <option value="3" <?php if ($this->user->analytical_essay == 3){ echo("selected=selected");} ?>>High School (9-10th)</option>
                    <option value="2" <?php if ($this->user->analytical_essay == 2){ echo("selected=selected");} ?>>Middle School</option>
                    <option value="1" <?php if ($this->user->analytical_essay == 1){ echo("selected=selected");} ?>>Elementary School</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="english[]" id="memoir" value="memoir" <?php if ($this->user->memoir != 0){ echo "checked";} ?>>
                    Memoir/Narrative/Fiction</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="memoir" id="memoir">
                    <option value="4" <?php if ($this->user->memoir == 4){ echo("selected=selected");} ?>>High School (11-12th)</option>
                    <option value="3" <?php if ($this->user->memoir == 3){ echo("selected=selected");} ?>>High School (9-10th)</option>
                    <option value="2" <?php if ($this->user->memoir == 2){ echo("selected=selected");} ?>>Middle School</option>
                    <option value="1" <?php if ($this->user->memoir == 1){ echo("selected=selected");} ?>>Elementary School</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="english[]" id="poetry" value="poetry" <?php if ($this->user->poetry != 0){ echo "checked";} ?>>
                    Poetry</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="poetry" id="poetry">
                    <option value="4" <?php if ($this->user->poetry == 4){ echo("selected=selected");} ?>>High School (11-12th)</option>
                    <option value="3" <?php if ($this->user->poetry == 3){ echo("selected=selected");} ?>>High School (9-10th)</option>
                    <option value="2" <?php if ($this->user->poetry == 2){ echo("selected=selected");} ?>>Middle School</option>
                    <option value="1" <?php if ($this->user->poetry == 1){ echo("selected=selected");} ?>>Elementary School</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="english[]" id="english_project" value="english_project" <?php if ($this->user->english_project != 0){ echo "checked";} ?>>
                    Project Help</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="english_project" id="english_project">
                    <option value="4" <?php if ($this->user->english_project == 4){ echo("selected=selected");} ?>>High School (11-12th)</option>
                    <option value="3" <?php if ($this->user->english_project == 3){ echo("selected=selected");} ?>>High School (9-10th)</option>
                    <option value="2" <?php if ($this->user->english_project == 2){ echo("selected=selected");} ?>>Middle School</option>
                    <option value="1" <?php if ($this->user->english_project == 1){ echo("selected=selected");} ?>>Elementary School</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="english[]" id="other_english" value="other_english" <?php if ($this->user->other_english != 0){ echo "checked";} ?>>
                    Other</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="other_english" id="other_english">
                    <option value="4" <?php if ($this->user->other_english == 4){ echo("selected=selected");} ?>>High School (11-12th)</option>
                    <option value="3" <?php if ($this->user->other_english== 3){ echo("selected=selected");} ?>>High School (9-10th)</option>
                    <option value="2" <?php if ($this->user->other_english == 2){ echo("selected=selected");} ?>>Middle School</option>
                    <option value="1" <?php if ($this->user->other_english == 1){ echo("selected=selected");} ?>>Elementary School</option>
                  </select>
                </div>
              </div>
            </div>

  </div>
  </div>
  </div>

  <div id="music" class="tab-pane fade">
  <div class="row">
  <div class="col-md-6">
<h3>Music Tutoring</h3>
            <div class="form-group">
              <label for="instrument">Instrument</label>
              <select name="instrument" class="form-control" id="instrument" >
                <option value="0" <?php if ($this->user->instrument == "0"){ echo("selected=selected");} ?>>None</option>
                <option value="bass" <?php if ($this->user->instrument == "bass"){ echo("selected=selected");} ?>>Bass</option>
                <option value="clarinet" <?php if ($this->user->instrument == "clarinet"){ echo("selected=selected");} ?>>Clarinet</option>
                <option value="cello" <?php if ($this->user->instrument == "cello"){ echo("selected=selected");} ?>>Cello</option>
                <option value="euphonium" <?php if ($this->user->instrument == "euphonium"){ echo("selected=selected");} ?>>Euphonium</option>
                <option value="flute" <?php if ($this->user->instrument == "flute"){ echo("selected=selected");} ?>>Flute</option>
                <option value="french_horn" <?php if ($this->user->instrument == "french_horn"){ echo("selected=selected");} ?>>French Horn</option>
                <option value="oboe" <?php if ($this->user->instrument == "oboe"){ echo("selected=selected");} ?>>Oboe</option>
                <option value="percussion" <?php if ($this->user->instrument == "percussion"){ echo("selected=selected");} ?>>Percussion</option>
                <option value="piano" <?php if ($this->user->instrument == "piano"){ echo("selected=selected");} ?>>Piano</option>
                <option value="saxophone" <?php if ($this->user->instrument == "saxophone"){ echo("selected=selected");} ?>>Saxophone</option>
                <option value="trombone" <?php if ($this->user->instrument == "trombone" ){ echo("selected=selected");} ?>>Trombone</option>
                <option value="trumpet" <?php if ($this->user->instrument == "trumpet"){ echo("selected=selected");} ?>>Trumpet</option>
                <option value="tuba" <?php if ($this->user->instrument == "tuba" ){ echo("selected=selected");} ?>>Tuba</option>
                <option value="viola" <?php if ($this->user->instrument == "viola"){ echo("selected=selected");} ?>>Viola</option>
                <option value="violin" <?php if ($this->user->instrument == "violin"){ echo("selected=selected");} ?>>Violin</option>
                <option value="voice" <?php if ($this->user->instrument == "voice"){ echo("selected=selected");} ?>>Voice</option>
              </select>
            </div>
            <div class="form-group">
              <label for="student_level">Experience level</label>
              <select name="music_level" class="form-control" id="student_level">
                <option value="1" <?php if ($this->user->music_level == "1"){ echo("selected=selected");} ?>>None</option>
                <option value="2" <?php if ($this->user->music_level == "2"){ echo("selected=selected");} ?>>Beginning (0-3 years)</option>
                <option value="3" <?php if ($this->user->music_level == "3"){ echo("selected=selected");} ?>>Intermediate (3-6 years)</option>
                <option value="4" <?php if ($this->user->music_level == "4"){ echo("selected=selected");} ?>>Advanced (6+ years)</option>
              </select>
              <p class="help-block">Up to what level can you tutor students?</p>
            </div>
            <div class="form-group">
              <label for="tutor_level">Experience</label>
              <input type="number" class="form-control" name="music_years" id="tutor_level" size="5" maxlength="3" min="0"  <?php if (!empty($this->user->music_years)){ echo("value=".'"'.$this->user->music_years.'"');} ?>>
              <p class="help-block">How many years have you played?</p>
            </div>

  </div>
  </div>
  </div>
</div>




      
<hr>
    <div class="pull-left">
      <button type="submit" class="btn btn-lg btn-success"> <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span> Update </button>
    </div>
  </form>
</div>
