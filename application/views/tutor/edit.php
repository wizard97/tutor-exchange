

<div class="content">

<h1>Update Your Tutoring Info:</h1>
<?php $this->renderFeedbackMessages(); ?>

<form method="POST" action="<?php echo URL; ?>tutor/edittutor_action">

<fieldset>
<legend>Basic Tutoring Info:</legend>

<label for="age">Age:</label>
<input type="number" name="age" size="5" maxlength="3" <?php if (!empty($this->user->age)){ echo("value=".'"'.$this->user->age.'"');} ?> >
<br>

<label for="grade">Your grade:</label>
<select class="radio-input" name="grade" required>
<option value="6th" <?php if ($this->user->grade == "6th"){ echo("selected=selected");} ?> >6th</option>
<option value="7th" <?php if ($this->user->grade == "7th"){ echo("selected=selected");} ?> >7th</option>
<option value="8th" <?php if ($this->user->grade == "8th"){ echo("selected=selected");} ?> >8th</option>
<option value="9th" <?php if ($this->user->grade == "9th"){ echo("selected=selected");} ?> >9th</option>
<option value="10th" <?php if ($this->user->grade == "10th"){ echo("selected=selected");} ?> >10th</option>
<option value="11th" <?php if ($this->user->grade == "11th"){ echo("selected=selected");} ?> >11th</option>
<option value="12th" <?php if ($this->user->grade == "12th"){ echo("selected=selected");} ?> >12th</option>
<option value="High School Grad." <?php if ($this->user->grade == "High School Grad."){ echo("selected=selected");} ?> >High School Grad.</option>
<option value="College"  <?php if ($this->user->grade == "College"){ echo("selected=selected");} ?> >College</option>
<option value="College Grad." <?php if ($this->user->grade == "College Grad."){ echo("selected=selected");} ?> >College Grad.</option>
</select>
<br>

<label for="about_me">About me:</label>
<textarea name="about_me" rows="10" cols="50" maxlength="1000" <?php if (empty($this->user->about_me)){ echo("placeholder=".'"'."If you want, tell the people searching for tutors a little about yourself/your tutoring ability. This is confidential, and will only be viewable by people with registered accounts. Maximum length is 1000 characters.".'"');} ?> >
<?php if (!empty($this->user->about_me))
{
	echo $this->user->about_me;
}
?>
</textarea>

</fieldset>

<br><br>



<fieldset>
<legend>Math:</legend>

<label for="age">Highest Completed Math Class:</label>
<input type="text" name="highest_math_name" size="15" maxlength="40" required <?php if (!empty($this->user->highest_math_name)){ echo("value=".'"'.$this->user->highest_math_name.'"');} ?> >
<br>

<label for="age">What level was it?</label>
<input type="text" name="highest_math_level" size="15" maxlength="20" required <?php if (!empty($this->user->highest_math_level)){ echo("value=".'"'.$this->user->highest_math_level.'"');} else{echo("placeholder=\"Example: Honors\"");} ?> >


<input type="checkbox" name="math[]" id="elementary_math" value="elementary_math" <?php if ($this->user->elementary_math != 0){ echo "checked";} ?> >
<label for="elementary_math">Elementary School Math</label>
<select class="radio-input" name="elementary_math">
<option value="3" <?php if ($this->user->elementary_math == 3){ echo("selected=selected");} ?> >Honors</option>
<option value="2" <?php if ($this->user->elementary_math == 2){ echo("selected=selected");} ?> >Standard</option>
</select>

<br>


<input type="checkbox" name="math[]" id="middle_math" value="middle_math" <?php if ($this->user->middle_math != 0){ echo "checked";} ?> >
<label for="middle_math">Middle School Math</label>
<select class="radio-input" name="middle_math">
<option value="3" <?php if ($this->user->middle_math == 3){ echo("selected=selected");} ?> >Honors</option>
<option value="2" <?php if ($this->user->middle_math == 2){ echo("selected=selected");} ?> >Standard</option>
</select>

<br><br>
<label>High School:</label>
<br>


<input type="checkbox" name="math_1" id="math_1" value="math_1" <?php if ($this->user->math_1 != 0){ echo "checked";} ?> >
<label for="math_1">Math 1</label>
<select class="radio-input" name="math_1">
<option value="3" <?php if ($this->user->math_1 == 3){ echo("selected=selected");} ?> >Honors</option>
<option value="2" <?php if ($this->user->math_1 == 2){ echo("selected=selected");} ?> >Level 1</option>
<option value="1" <?php if ($this->user->math_1 == 1){ echo("selected=selected");} ?> >Level 2</option>
</select>

<br>


<input type="checkbox" name="math[]" id="math_2" value="math_2" <?php if ($this->user->math_2 != 0){ echo "checked";} ?> >
<label for="math_2">Math 2</label>
<select class="radio-input" name="math_2">
<option value="3" <?php if ($this->user->math_2 == 3){ echo("selected=selected");} ?> >Honors</option>
<option value="2" <?php if ($this->user->math_2 == 2){ echo("selected=selected");} ?> >Level 1</option>
<option value="1" <?php if ($this->user->math_2 == 1){ echo("selected=selected");} ?> >Level 2</option>
</select>

<br>


<input type="checkbox" name="math[]" id="math_3" value="math_3" <?php if ($this->user->math_3 != 0){ echo "checked";} ?> >
<label for="math_3">Math 3</label>
<select class="radio-input" name="math_3">
<option value="3" <?php if ($this->user->math_3 == 3){ echo("selected=selected");} ?> >Honors</option>
<option value="2" <?php if ($this->user->math_3 == 2){ echo("selected=selected");} ?> >Level 1</option>
<option value="1" <?php if ($this->user->math_3 == 1){ echo("selected=selected");} ?> >Level 2</option>
</select>

<br>


<input type="checkbox" name="math[]" id="math_4" value="math_4" <?php if ($this->user->math_4 != 0){ echo "checked";} ?> >
<label for="math_4">Math 4</label>
<select class="radio-input" name="math_4">
<option value="3" <?php if ($this->user->math_4 == 3){ echo("selected=selected");} ?> >Honors</option>
<option value="2" <?php if ($this->user->math_4 == 2){ echo("selected=selected");} ?> >Level 1</option>
<option value="1" <?php if ($this->user->math_4 == 1){ echo("selected=selected");} ?> >Level 2</option>
</select>

<br>


<input type="checkbox" name="math[]" id="stats" value="stats" <?php if ($this->user->stats != 0){ echo "checked";} ?> >
<label for="stats">Statistics</label>
<select class="radio-input" name="stats">
<option value="4" <?php if ($this->user->stats == 4){ echo("selected=selected");} ?> >AP</option>
<option value="3" <?php if ($this->user->stats == 3){ echo("selected=selected");} ?> >Honors</option>
<option value="2" <?php if ($this->user->stats == 2){ echo("selected=selected");} ?> >Level 1</option>
<option value="1" <?php if ($this->user->stats == 1){ echo("selected=selected");} ?> >Level 2</option>
</select>

<br>




<input type="checkbox" name="math[]" id="comp_sci" value="comp_sci" <?php if ($this->user->comp_sci != 0){ echo "checked";} ?> >
<label for="comp_sci">Computer Science</label>
<select class="radio-input" name="comp_sci">
<option value="4" <?php if ($this->user->comp_sci == 4){ echo("selected=selected");} ?> >AP</option>
</select>

<br>


<input type="checkbox" name="math[]" id="calc" value="calc" <?php if ($this->user->calc != 0){ echo "checked";} ?> >
<label for="calc">Calculus</label>
<select class="radio-input" name="calc">
<option value="5" <?php if ($this->user->calc == 5){ echo("selected=selected");} ?>  <?php if ($this->user->elementary_math == 3){ echo("selected=selected");} ?>  <?php if ($this->user->elementary_math == 3){ echo("selected=selected");} ?>  <?php if ($this->user->elementary_math == 3){ echo("selected=selected");} ?> >AP BC</option>
<option value="4" <?php if ($this->user->calc == 4){ echo("selected=selected");} ?>  <?php if ($this->user->elementary_math == 3){ echo("selected=selected");} ?>  <?php if ($this->user->elementary_math == 3){ echo("selected=selected");} ?> >AP AB</option>
<option value="3" <?php if ($this->user->calc == 3){ echo("selected=selected");} ?>  <?php if ($this->user->elementary_math == 3){ echo("selected=selected");} ?> >Honors</option>
<option value="2" <?php if ($this->user->calc == 2){ echo("selected=selected");} ?> >Level 1</option>
<option value="1" <?php if ($this->user->calc == 1){ echo("selected=selected");} ?> >Level 2</option>
</select>



</fieldset>

<br>
<input type="submit" value="Update">

</form>

</div>