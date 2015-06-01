
<div class="container">
  <div class="page-header">
    <h1>Find Me a Tutor</h1>
  </div>
  <?php $this->renderFeedbackMessages(); ?>
  <form method="POST" action="<?php echo URL; ?>search/showresults">

<p class="alert alert-success"><i class="fa fa-info-circle"></i> Just select all the credentials you would like your tutor to have, and we will try and find you the best match.</p>
    
<ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#criteria">Tutor Criteria</a></li>
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
                <option>No Preference</option>
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

  <div id="math" class="tab-pane fade">
  <div class="row">
    <div class="col-md-6">
    <h3>Math</h3>

            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                <label>
                    <input type="checkbox" name="math[]" value="elementary_math">
                    Elementary School Math</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="elementary_math" id="elementary_math">
                    <option value="3">Honors</option>
                    <option value="2">Standard</option>
                  </select>
                </div>
              </div>
            </div>
            
            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"  name="math[]" value="middle_math">
                    Middle School Math</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="middle_math" id="middle_math">
                    <option value="3">Honors</option>
                    <option value="2">Standard</option>
                  </select>
                </div>
              </div>
            </div>
            
            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"  name="math[]" value="math_1">
                    Math 1</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="math_1" id="math_1">
                    <option value="3">Honors</option>
                    <option value="2">Level 1</option>
                    <option value="1">Level 2</option>
                  </select>
                </div>
              </div>
            </div>
            
            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"  name="math[]" value="math_2">
                    Math 2</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="math_2" id="math_2">
                    <option value="3">Honors</option>
                    <option value="2">Level 1</option>
                    <option value="1">Level 2</option>
                  </select>
                </div>
              </div>
            </div>
            
            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"  name="math[]" value="math_3">
                    Math 3</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="math_3" id="math_3">
                    <option value="3">Honors</option>
                    <option value="2">Level 1</option>
                    <option value="1">Level 2</option>
                  </select>
                </div>
              </div>
            </div>
            
            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"  name="math[]" value="math_4">
                    Math 4</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="math_4" id="math_4">
                    <option value="3">Honors</option>
                    <option value="2">Level 1</option>
                    <option value="1">Level 2</option>
                  </select>
                </div>
              </div>
            </div>
            
            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"  name="math[]" value="stats">
                    Statistics</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="stats" id="stats">
                    <option value="4">AP</option>
                    <option value="3">Honors</option>
                    <option value="2">Level 1</option>
                    <option value="1">Level 2</option>
                  </select>
                </div>
              </div>
            </div>
            
            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"  name="math[]" value="comp_sci">
                    Computer Science</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="comp_sci" id="comp_sci">
                    <option value="4">AP</option>
                  </select>
                </div>
              </div>
            </div>
            
            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"  name="math[]" value="calc">
                    Calculus</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="calc" id="calc">
                    <option value="5">AP BC</option>
                    <option value="4">AP AB</option>
                    <option value="3">Honors</option>
                    <option value="2">Level 1</option>
                    <option value="1">Level 2</option>
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
    <h3>Science</h3>
            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"  name="science[]" value="elementary_science">
                    Elementary School Science</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="elementary_science" id="elementary_science">
                    <option value="3">Honors</option>
                    <option value="2">Standard</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"  name="science[]" value="middle_science">
                    Middle School Science</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="middle_science" id="middle_science">
                    <option value="3">Honors</option>
                    <option value="2">Standard</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"  name="science[]" value="earth_science">
                    Earth Science</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="earth_science" id="earth_science">
                    <option value="3">Honors</option>
                    <option value="2">Level 1</option>
                    <option value="1">Level 2</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"  name="science[]" value="bio">
                    Biology</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="bio" id="bio">
                    <option value="4">AP</option>
                    <option value="2">Level 1</option>
                    <option value="1">Level 2</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"  name="science[]" value="chem">
                    Chemistry</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="chem" id="chem">
                    <option value="4">AP</option>
                    <option value="3">Honors</option>
                    <option value="2">Level 1</option>
                    <option value="1">Level 2</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"  name="science[]" value="phys">
                    Physics</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="phys" id="phys">
                    <option value="5">AP C</option>
                    <option value="4">AP 1</option>
                    <option value="3">Honors</option>
                    <option value="2">Level 1</option>
                    <option value="1">Level 2</option>
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
            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"  name="social[]" value="elementary_social">
                    Elementary School Social Studies</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="elementary_social" id="elementary_social">
                    <option value="3">Honors</option>
                    <option value="2">Standard</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"  name="social[]" value="middle_social">
                    Middle School Social Studies</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="middle_social" id="middle_scocial">
                    <option value="3">Honors</option>
                    <option value="2">Standard</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"  name="social[]" value="world_history_1">
                    World History I</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="world_history_1" id="world_history_1">
                    <option value="2">Level 1</option>
                    <option value="1">Level 2</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"  name="social[]" value="world_history_2">
                    World History II</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="world_history_2" id="world_history_2">
                    <option value="2">Level 1</option>
                    <option value="1">Level 2</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"  name="social[]" value="ap_world">
                    AP World History</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="ap_world" id="ap_world">
                    <option value="4">AP</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"  name="social[]" value="us_history">
                    US History</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="us_history" id="us_history">
                    <option value="4">AP</option>
                    <option value="2">Level 1</option>
                    <option value="1">Level 2</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"  name="social[]" value="econ">
                    Economics</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="econ" id="econ">
                    <option value="4">AP</option>
                    <option value="2">Level 1</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"  name="social[]" value="psych">
                    Psychology</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="psych" id="psych">
                    <option value="4">AP</option>
                    <option value="2">Level 1</option>
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
<h3>French</h3>
            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"  name="foreign_language[]" value="elementary_french">
                    Elementary School French</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="elementary_french" id="elementary_french">
                    <option value="3">Honors</option>
                    <option value="2">Standard</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"  name="foreign_language[]" value="middle_french">
                    Middle School French</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="middle_french" id="middle_french">
                    <option value="3">Honors</option>
                    <option value="2">Standard</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"  name="foreign_language[]" value="french_1">
                    French 1</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="french_1" id="french_1">
                    <option value="3">Honors</option>
                    <option value="2">Level 1</option>
                    <option value="1">Level 2</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"  name="foreign_language[]" value="french_2">
                    French 2</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="french_2" id="french_2">
                    <option value="3">Honors</option>
                    <option value="2">Level 1</option>
                    <option value="1">Level 2</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"  name="foreign_language[]" value="french_3">
                    French 3</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="french_3" id="french_3">
                    <option value="3">Honors</option>
                    <option value="2">Level 1</option>
                    <option value="1">Level 2</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"  name="foreign_language[]" value="french_4">
                    French 4</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="french_4" id="french_4">
                    <option value="3">Honors</option>
                    <option value="2">Level 1</option>
                    <option value="1">Level 2</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"  name="foreign_language[]" value="french_5">
                    French 5</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="french_5" id="french_5">
                    <option value="2">Level 1</option>
                    <option value="1">Level 2</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"  name="foreign_language[]" value="french_AP">
                    AP French</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="french_AP" id="french_AP">
                    <option value="4">AP</option>
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
<h3>German</h3>
            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"  name="foreign_language[]" value="german_1">
                    German 1</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="german_1" id="german_1">
                    <option value="3">Honors</option>
                    <option value="2">Level 1</option>
                    <option value="1">Level 2</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"  name="foreign_language[]" value="german_2">
                    German 2</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="german_2" id="german_2">
                    <option value="3">Honors</option>
                    <option value="2">Level 1</option>
                    <option value="1">Level 2</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"  name="foreign_language[]" value="german_3">
                    German 3</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="german_3" id="german_3">
                    <option value="3">Honors</option>
                    <option value="2">Level 1</option>
                    <option value="1">Level 2</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"  name="foreign_language[]" value="german_4">
                    German 4</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="german_4" id="german_4">
                    <option value="3">Honors</option>
                    <option value="2">Level 1</option>
                    <option value="1">Level 2</option>
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
<h3>Spanish</h3>
            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"  name="foreign_language[]" value="elementary_spanish">
                    Elementary School Spanish</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="elementary_spanish" id="elementary_spanish">
                    <option value="3">Honors</option>
                    <option value="2">Standard</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"  name="foreign_language[]" value="middle_spanish">
                    Middle School Spanish</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="middle_spanish" id="middle_spanish">
                    <option value="3">Honors</option>
                    <option value="2">Standard</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"  name="foreign_language[]" value="spanish_1">
                    Spanish 1</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="spanish_1" id="spanish_1">
                    <option value="3">Honors</option>
                    <option value="2">Level 1</option>
                    <option value="1">Level 2</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"  name="foreign_language[]" value="spanish_2">
                    Spanish 2</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="spanish_2" id="spanish_2">
                    <option value="3">Honors</option>
                    <option value="2">Level 1</option>
                    <option value="1">Level 2</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"  name="foreign_language[]" value="spanish_3">
                    Spanish 3</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="spanish_3" id="spanish_3">
                    <option value="3">Honors</option>
                    <option value="2">Level 1</option>
                    <option value="1">Level 2</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"  name="foreign_language[]" value="spanish_4">
                    Spanish 4</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="spanish_4" id="spanish_4">
                    <option value="3">Honors</option>
                    <option value="2">Level 1</option>
                    <option value="1">Level 2</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"  name="foreign_language[]" value="spanish_5">
                    Spanish 5</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="spanish_5" id="spanish_5">
                    <option value="2">Level 1</option>
                    <option value="1">Level 2</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"  name="foreign_language[]" value="spanish_AP">
                    AP Spanish</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="spanish_AP" id="spanish_AP">
                    <option value="4">AP</option>
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
<h3>Italian</h3>
            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"  name="foreign_language[]" value="italian_1">
                    Italian 1</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="italian_1" id="italian_1">
                    <option value="3">Honors</option>
                    <option value="2">Level 1</option>
                    <option value="1">Level 2</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"  name="foreign_language[]" value="italian_2">
                    Italian 2</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="italian_2" id="italian_2">
                    <option value="3">Honors</option>
                    <option value="2">Level 1</option>
                    <option value="1">Level 2</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"  name="foreign_language[]" value="italian_3">
                    Italian 3</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="italian_3" id="italian_3">
                    <option value="3">Honors</option>
                    <option value="2">Level 1</option>
                    <option value="1">Level 2</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"  name="foreign_language[]" value="italian_4">
                    Italian 4</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="italian_4" id="italian_4">
                    <option value="3">Honors</option>
                    <option value="2">Level 1</option>
                    <option value="1">Level 2</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"  name="foreign_language[]" value="italian_AP">
                    AP Italian</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="italian_AP" id="italian_AP">
                    <option value="4">AP</option>
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
<h3>Mandarin</h3>
            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"  name="foreign_language[]" value="mandarin_1">
                    Mandarin 1</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="mandarin_1" id="mandarin_1">
                    <option value="3">Honors</option>
                    <option value="2">Level 1</option>
                    <option value="1">Level 2</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"  name="foreign_language[]" value="mandarin_2">
                    Mandarin 2</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="mandarin_2" id="mandarin_2">
                    <option value="3">Honors</option>
                    <option value="2">Level 1</option>
                    <option value="1">Level 2</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"  name="foreign_language[]" value="mandarin_3">
                    Mandarin 3</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="mandarin_3" id="mandarin_3">
                    <option value="3">Honors</option>
                    <option value="2">Level 1</option>
                    <option value="1">Level 2</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"  name="foreign_language[]" value="mandarin_4">
                    Mandarin 4</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="mandarin_4" id="mandarin_4">
                    <option value="3">Honors</option>
                    <option value="2">Level 1</option>
                    <option value="1">Level 2</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"  name="foreign_language[]" value="mandarin_5">
                    Mandarin 5</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="mandarin_5" id="mandarin_5">
                    <option value="3">Honors</option>
                    <option value="2">Level 1</option>
                    <option value="1">Level 2</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"  name="foreign_language[]" value="mandarin_AP">
                    AP Mandarin</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="mandarin_AP" id="mandarin_AP">
                    <option value="4">AP</option>
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
<h3>English</h3>
            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"  name="english[]" value="analytical_essay">
                    Analytical Essays</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="analytical_essay" id="analytical_essay">
                  <option value="4">High School (11-12th)</option>
                    <option value="3">High School (9-10th)</option>
                    <option value="2">Middle School</option>
                    <option value="1">Elementary School</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"  name="english[]" value="memoir">
                    Memoir/Narrative/Fiction</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="memoir" id="memoir">
                  <option value="4">High School (11-12th)</option>
                    <option value="3">High School (9-10th)</option>
                    <option value="2">Middle School</option>
                    <option value="1">Elementary School</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"  name="english[]" value="poetry">
                    Poetry</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="poetry" id="poetry">
                  <option value="4">High School (11-12th)</option>
                    <option value="3">High School (9-10th)</option>
                    <option value="2">Middle School</option>
                    <option value="1">Elementary School</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"  name="english[]" value="english_project">
                    Project Help</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="english_project" id="english_project">
                    <option value="4">High School (11-12th)</option>
                    <option value="3">High School (9-10th)</option>
                    <option value="2">Middle School</option>
                    <option value="1">Elementary School</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-7">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"  name="english[]" value="other_english">
                    Other</label>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <select class="form-control" name="other_english" id="other_english">
                    <option value="4">High School (11-12th)</option>
                    <option value="3">High School (9-10th)</option>
                    <option value="2">Middle School</option>
                    <option value="1">Elementary School</option>
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
<h3>Music</h3>
            <div class="checkbox">
              <label>
                <input type="checkbox"  name="music" value="1">
                Music Tutoring</label>
              <p class="help-block">Do you want someone who can tutor you in music?</p>
            </div>
            <div class="form-group">
              <label for="instrument">Instrument</label>
              <select class="form-control" name="instrument" id="instrument">
                <option value="bass">Bass</option>
                <option value="cello">Cello</option>
                <option value="clarinet">Clarinet</option>
                <option value="euphonium">Euphonium</option>
                <option value="flute">Flute</option>
                <option value="french_horn">French Horn</option>
                <option value="oboe">Oboe</option>
                <option value="percussion">Percussion</option>
                <option value="piano">Piano</option>
                <option value="saxophone">Saxophone</option>
                <option value="trombone">Trombone</option>
                <option value="trumpet">Trumpet</option>
                <option value="tuba">Tuba</option>
                <option value="viola">Viola</option>
                <option value="violin">Violin</option>
                <option value="voice">Voice</option>
              </select>
              <p class="help-block">What instrument do you play?</p>
            </div>
            <div class="form-group">
              <label for="music_level">Experience</label>
              <select class="form-control" name="music_level" id="music_level">
                <option value="1">None</option>
                <option value="2">Beginning (0-3 years)</option>
                <option value="3">Intermediate (3-6 years)</option>
                <option value="4">Advanced (6+ years)</option>
              </select>
              <p class="help-block">What level are you?</p>
            </div>

</div>
</div>
</div>

</div>


<div class="clearfix"></div>




<hr>
    <div class="pull-left">
      <button type="submit" class="btn btn-lg btn-success"> <span class="glyphicon glyphicon-search" aria-hidden="true"></span> Search </button>
    </div>
  </form>
</div>