
<div class="content">
<?php $this->renderFeedbackMessages(); ?>

<form method="POST" action="<?php echo URL; ?>search/showresults">


<h1>Find Me a Tutor</h1>
	<p>Price Range ($/hour)</p>
    <input type="number" style="float:left" name="start_rate" id="start_rate" size="5" maxlength="3" placeholder="min"  min="0">
	<p style="float:left;margin-left:15px;margin-right:15px;"><b>to</b></p>
    <input type="number" name="end_rate" id="end_rate" size="5" maxlength="3" min="0" placeholder="max">

    <label for="min_grade"><b>Minimum tutor grade</b></label>
		<select class="radio-input" name="min_grade" id ="min_grade">
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
<br />
<br />
<p>Tutor credentials</p>

<fieldset>
	<h2>Math:</h2>
	<table class="subject-table">
    <tr>
   		<td colspan="3">
    		<b>Elementary/Middle School</b>
    	</td>
        </tr>
    	<tr>
        	<td>
				<input type="checkbox" class="checkbox-format" name="math[]" id="elementary_math" value="elementary_math">
            </td>
            <td>
				<label for="elementary_math" class="checkbox-label">Elementary School Math</label>
			</td>
            <td>
				<select class="radio-input" name="elementary_math">
				<option value="3">Honors</option>
				<option value="2">Standard</option>
				</select>
            </td>
        </tr>
		<tr>
        	<td>
				<input type="checkbox" class="subject-table" name="math[]" id="middle_math" value="middle_math">
                </td>
            <td>
				<label for="middle_math" class="checkbox-label">Middle School Math</label>
			</td>
            <td>
				<select class="radio-input" name="middle_math">
				<option value="3">Honors</option>
				<option value="2">Standard</option>
				</select>
            </td>
        </tr>
        <tr>
		<td colspan="3">
			<b>High School:</b>
		</td>
        </tr>
    	<tr>
        	<td>
				<input type="checkbox" class="subject-table" name="math_1" id="math_1" value="math_1">
            </td>
            <td>
				<label for="math_1" class="checkbox-label">Math 1</label>
			</td>
            <td>
				<select class="radio-input" name="math_1">
				<option value="3">Honors</option>
				<option value="2">Level 1</option>
				<option value="1">Level 2</option>
				</select>
			</td>
        </tr>
		<tr>
        	<td>
				<input type="checkbox" class="subject-table" name="math[]" id="math_2" value="math_2">
                </td>
            <td>
				<label for="math_2" class="checkbox-label">Math 2</label>
			</td>
            <td>
				<select class="radio-input" name="math_2">
				<option value="3">Honors</option>
				<option value="2">Level 1</option>
				<option value="1">Level 2</option>
				</select>
            </td>
        </tr>
		<tr>
        	<td>
				<input type="checkbox" class="subject-table" name="math[]" id="math_3" value="math_3">
                </td>
            <td>
				<label for="math_3" class="checkbox-label">Math 3</label>
			</td>
            <td>
				<select class="radio-input" name="math_3">
				<option value="3">Honors</option>
				<option value="2">Level 1</option>
				<option value="1">Level 2</option>
				</select>
            </td>
		</tr>
		<tr>
        	<td>
				<input type="checkbox" class="subject-table" name="math[]" id="math_4" value="math_4">
                </td>
            <td>
				<label for="math_4" class="checkbox-label">Math 4</label>
			</td>
            <td>
				<select class="radio-input" name="math_4">
				<option value="3">Honors</option>
				<option value="2">Level 1</option>
				<option value="1">Level 2</option>
				</select>
            </td>
        </tr>
		<tr>
        	<td>
				<input type="checkbox" class="subject-table" name="math[]" id="stats" value="stats">
                </td>
            <td>
				<label for="stats" class="checkbox-label">Statistics</label>
			</td>
            <td>
				<select class="radio-input" name="stats">
				<option value="4">AP</option>
				<option value="3">Honors</option>
				<option value="2">Level 1</option>
				<option value="1">Level 2</option>
				</select>
			</td>
        </tr>
   		<tr>
        	<td>
	    		<input type="checkbox" class="subject-table" name="math[]" id="comp_sci" value="comp_sci">
                </td>
            <td>
				<label for="comp_sci">Computer Science</label>
			</td>
            <td>
				<select class="radio-input" name="comp_sci">
				<option value="4">AP</option>
				</select>
            </td>
        </tr>
		<tr>
        	<td>
				<input type="checkbox" class="subject-table" name="math[]" id="calc" value="calc">
                </td>
            <td>
				<label for="calc" class="checkbox-label">Calculus</label>
			</td>
            <td>
				<select class="radio-input" name="calc">
				<option value="5">AP BC</option>
				<option value="4">AP AB</option>
				<option value="3">Honors</option>
				<option value="2">Level 1</option>
				<option value="1">Level 2</option>
				</select>
            </td>
        </tr>
    </table>
</fieldset>
<fieldset>
	<h2>Science:</h2>
    <table class="subject-table">
    <tr>
   		<td colspan="3">
    		<b>Elementary/Middle School</b>
    	</td>
        </tr>
    	<tr>
        	<td>
				<input type="checkbox" class="checkbox-format" name="science[]" id="elementary_science" value="elementary_science">
            </td>
            <td>
				<label for="elementary_science" class="checkbox-label">Elementary School Science</label>
			</td>
            <td>
				<select class="radio-input" name="elementary_science">
				<option value="3">Honors</option>
				<option value="2">Standard</option>
				</select>
            </td>
        </tr>
		<tr>
        	<td>
				<input type="checkbox" class="checkbox-format" name="science[]" id="middle_science" value="middle_science">
            </td>
            <td>
				<label for="middle_science" class="checkbox-label">Middle School Science</label>
			</td>
            <td>
				<select class="radio-input" name="middle_science">
				<option value="3">Honors</option>
				<option value="2">Standard</option>
				</select>
            </td>
        </tr>
        <td colspan="3">
    		<b>High School</b>
    	</td>
        <tr>
        	<td>
				<input type="checkbox" class="checkbox-format" name="science[]" id="earth_science" value="earth_science">
            </td>
            <td>
				<label for="earth_science" class="checkbox-label">Earth Science</label>
			</td>
            <td>
				<select class="radio-input" name="earth_science">
				<option value="3">Honors</option>
				<option value="2">Level 1</option>
                <option value="1">Level 2</option>
				</select>
            </td>
        </tr>
        <tr>
        	<td>
				<input type="checkbox" class="checkbox-format" name="science[]" id="bio" value="bio">
            </td>
            <td>
				<label for="bio" class="checkbox-label">Biology</label>
			</td>
            <td>
				<select class="radio-input" name="bio">
				<option value="4">AP</option>
				<option value="2">Level 1</option>
                <option value="1">Level 2</option>
				</select>
            </td>
        </tr>
        <tr>
        	<td>
				<input type="checkbox" class="checkbox-format" name="science[]" id="chem" value="chem">
            </td>
            <td>
				<label for="chem" class="checkbox-label">Chemistry</label>
			</td>
            <td>
				<select class="radio-input" name="chem">
				<option value="4">AP</option>
				<option value="2">Level 1</option>
                <option value="1">Level 2</option>
				</select>
            </td>
        </tr>
        <tr>
        	<td>
				<input type="checkbox" class="checkbox-format" name="science[]" id="phys" value="phys">
            </td>
            <td>
				<label for="phys" class="checkbox-label">Physics</label>
			</td>
            <td>
				<select class="radio-input" name="phys">
				<option value="5">AP Physics C</option>
				<option value="4">AP Physics I</option>
                <option value="2">Level 1</option>
                <option value="1">Level 2</option>
				</select>
            </td>
        </tr>
    </table>
</fieldset>
<fieldset>
	<h2>Music:</h2>
    <p>
      <input type="checkbox" class="checkbox-format" name="music" id="music" value="1">
      <label for="music">Do you want a tutor in music?</label>
      
      <label for="instrument" style="float:left">Instrument:</label>
      
      <select name="instrument" id="instrument" style="float:left">
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
        <br />
        <br />
      <label for="level" style="float:left">Level of Musicality:</label>
      <select name="music_level" id="music_level" style="float:left">
        <option value="1">None</option>
        <option value="2">Beginning (0-3 years)</option>
        <option value="3">Intermediate (3-6 years)</option>
        <option value="4">Advanced (6+ years)</option>
      </select>
    </p>
</fieldset>

<br>
<input type="submit" value="Search" style="right">
	
</form>	
</div>
<br>
