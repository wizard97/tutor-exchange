<div class="container">
<div class="page-header">
  <h1>Find Me a Tutor</h1>
</div>

<?php $this->renderFeedbackMessages(); ?>

<form method="POST" action="<?php echo URL; ?>search/showresults">

<div class="row">

<div class="col-md-6">
<div class="panel panel-primary">
<div class="panel-heading"><h3 class="panel-title">Tutor Criteria</h3></div>
<div class="panel-body">
<div class="form-group">
	<label for="start_rate">Price range</label>
    <input type="number" class="form-control" name="start_rate" id="start_rate" size="5" maxlength="3" placeholder="min"  min="1">
</div>

<div class="form-group">
    <input class="form-control" type="number" name="end_rate" id="end_rate" size="5" maxlength="3" min="1" placeholder="max">
    <p class="help-block">Enter your price range in dollars per hour</p>
</div>


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
</div>


<div class="row">
<div class="col-md-6">
<div class="panel panel-info">
    <div class="panel-heading"><h3 class="panel-title">Math</h3></div>
    <div class="panel-body">

    <div class="row">
    <div class="col-xs-7">
        
            <div class="checkbox">
            <label><input type="checkbox"  name="math[]" value="elementary_math">Elementary School Math</label>
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
            <label><input type="checkbox"  name="math[]" value="middle_math">Middle School Math</label>
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
            <label><input type="checkbox"  name="math[]" value="math_1">Math 1</label>
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
            <label><input type="checkbox"  name="math[]" value="math_2">Math 2</label>
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
            <label><input type="checkbox"  name="math[]" value="math_3">Math 3</label>
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
            <label><input type="checkbox"  name="math[]" value="math_4">Math 4</label>
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
            <label><input type="checkbox"  name="math[]" value="stats">Statistics</label>
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
            <label><input type="checkbox"  name="math[]" value="comp_sci">Computer Science</label>
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
            <label><input type="checkbox"  name="math[]" value="calc">Calculus</label>
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





<div class="col-md-6">
<div class="panel panel-info">
    <div class="panel-heading"><h3 class="panel-title">Science</h3></div>
    <div class="panel-body">

    <div class="row">
    <div class="col-xs-7">
        
            <div class="checkbox">
            <label><input type="checkbox"  name="science[]" value="elementary_science">Elementary School Science</label>
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
            <label><input type="checkbox"  name="science[]" value="middle_science">Middle School Science</label>
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
            <label><input type="checkbox"  name="science[]" value="earth_science">Earth Science</label>
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
            <label><input type="checkbox"  name="science[]" value="bio">Biology</label>
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
            <label><input type="checkbox"  name="science[]" value="chem">Chemistry</label>
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
            <label><input type="checkbox"  name="science[]" value="phys">Physics</label>
            </div>
        
        </div>
        <div class="col-xs-5">
        <div class="form-group">
                <select class="form-control" name="phys" id="phys">
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
</div>



<div class="row">

<div class="col-md-6">
    <div class="panel panel-info">
    <div class="panel-heading"><h3 class="panel-title">Music</h3></div>
    <div class="panel-body">

    
            <div class="checkbox">
            <label><input type="checkbox"  name="music" value="1">Music Tutoring</label>
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


<button type="submit" class="btn btn-lg btn-primary">
<span class="glyphicon glyphicon-search" aria-hidden="true"></span> Search
</button>

</form>	
</div>

