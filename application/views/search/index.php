

<div class="content">
<?php $this->renderFeedbackMessages(); ?>

<form method="POST" action="<?php echo URL; ?>search/showresults">



<fieldset>
<legend>Math:</legend>




<input type="checkbox" name="math[]" id="elementary_math" value="elementary_math">
<label for="elementary_math">Elementary School Math</label>
<select class="radio-input" name="elementary_math">
<option value="3">Honors</option>
<option value="2">Standard</option>
</select>

<br>


<input type="checkbox" name="math[]" id="middle_math" value="middle_math">
<label for="middle_math">Middle School Math</label>
<select class="radio-input" name="middle_math">
<option value="3">Honors</option>
<option value="2">Standard</option>
</select>

<br><br>
<label>High School:</label>
<br>


<input type="checkbox" name="math_1" id="math_1" value="math_1">
<label for="math_1">Math 1</label>
<select class="radio-input" name="math_1">
<option value="3">Honors</option>
<option value="2">Level 1</option>
<option value="1">Level 2</option>
</select>

<br>


<input type="checkbox" name="math[]" id="math_2" value="math_2">
<label for="math_2">Math 2</label>
<select class="radio-input" name="math_2">
<option value="3">Honors</option>
<option value="2">Level 1</option>
<option value="1">Level 2</option>
</select>

<br>


<input type="checkbox" name="math[]" id="math_3" value="math_3">
<label for="math_3">Math 3</label>
<select class="radio-input" name="math_3">
<option value="3">Honors</option>
<option value="2">Level 1</option>
<option value="1">Level 2</option>
</select>

<br>


<input type="checkbox" name="math[]" id="math_4" value="math_4">
<label for="math_4">Math 4</label>
<select class="radio-input" name="math_4">
<option value="3">Honors</option>
<option value="2">Level 1</option>
<option value="1">Level 2</option>
</select>

<br>


<input type="checkbox" name="math[]" id="stats" value="stats">
<label for="stats">Statistics</label>
<select class="radio-input" name="stats">
<option value="4">AP</option>
<option value="3">Honors</option>
<option value="2">Level 1</option>
<option value="1">Level 2</option>
</select>

<br>




<input type="checkbox" name="math[]" id="comp_sci" value="comp_sci">
<label for="comp_sci">Computer Science</label>
<select class="radio-input" name="comp_sci">
<option value="4">AP</option>
</select>

<br>


<input type="checkbox" name="math[]" id="calc" value="calc">
<label for="calc">Calculus</label>
<select class="radio-input" name="calc">
<option value="5">AP BC</option>
<option value="4">AP AB</option>
<option value="3">Honors</option>
<option value="2">Level 1</option>
<option value="1">Level 2</option>
</select>



</fieldset>

<br>
<input type="submit" value="Search">

</form>

</div>