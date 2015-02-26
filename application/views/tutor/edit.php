<div class="content">
    <h1>Update Your Tutoring Info:</h1>
    <?php $this->renderFeedbackMessages(); ?>
    <form method="POST" action="<?php echo URL; ?>tutor/edittutor_action">
            <h3>Basic Tutoring Info:</h3>
            <label for="age">Age:</label>
            <input type="number" name="age" id="age" size="5" maxlength="3" <?php if (!empty($this->user->age)){ echo("value=".'"'.$this->user->age.'"');} ?>>
            <br>
            <label for="grade">Your grade:</label>
                <select class="radio-input" name="grade" id ="grade" required>
                    <option value="6" <?php if ($this->user->grade == "6"){ echo("selected=selected");} ?> >6th</option>
                    <option value="7" <?php if ($this->user->grade == "7"){ echo("selected=selected");} ?> >7th</option>
                    <option value="8" <?php if ($this->user->grade == "8"){ echo("selected=selected");} ?> >8th</option>
                    <option value="9" <?php if ($this->user->grade == "9"){ echo("selected=selected");} ?> >9th</option>
                    <option value="10" <?php if ($this->user->grade == "10"){ echo("selected=selected");} ?> >10th</option>
                    <option value="11" <?php if ($this->user->grade == "11"){ echo("selected=selected");} ?> >11th</option>
                    <option value="12" <?php if ($this->user->grade == "12"){ echo("selected=selected");} ?> >12th</option>
                    <option value="13" <?php if ($this->user->grade == "13"){ echo("selected=selected");} ?> >High School Grad.</option>
                    <option value="14"  <?php if ($this->user->grade == "14"){ echo("selected=selected");} ?> >College</option>
                    <option value="15" <?php if ($this->user->grade == "15"){ echo("selected=selected");} ?> >College Grad.</option>
                </select>
            <br>
            <label for="rate">Requested Hourly Rate ($/hour):</label>
            <input type="number" name="rate" id="rate" size="5" maxlength="3" required <?php if (!empty($this->user->rate) || $this->user->rate == 0){ echo("value=".'"'.$this->user->rate.'"');} else {echo("placeholder=".'"'."$/hour".'"');} ?>>
            <br>
            <label for="about_me">About me:</label>
            <textarea name="about_me" id="about_me" rows="10" cols="50" maxlength="1000" <?php if (empty($this->user->about_me)){ echo("placeholder=".'"'."If you want, tell the people searching for tutors a little about yourself/your tutoring ability. This is confidential, and will only be viewable by people with registered accounts. Maximum length is 1000 characters.".'"');} ?> >
<?php if (!empty($this->user->about_me)){echo $this->user->about_me;}?></textarea>
        <br><br>
        <fieldset>
            <h2>Math Tutoring:</h2>
            <label for="highest_math_name">Highest Completed Math Class:</label>
            <input type="text" name="highest_math_name" id="highest_math_name" size="15" maxlength="40" <?php if (!empty($this->user->highest_math_name)){ echo("value=".'"'.$this->user->highest_math_name.'"');} ?>>
            <br>
            <label for="highest_math_level">What level was it?</label>
            <input type="text" name="highest_math_level" id="highest_math_level" size="15" maxlength="20" <?php if (!empty($this->user->highest_math_level)){ echo("value=".'"'.$this->user->highest_math_level.'"');} else{echo("placeholder=\"Example: Honors\"");} ?>>
            <table class="subject-table">
                <tr>
                    <td colspan="3">
                        <b>Elementary/Middle School:</b>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" name="math[]" id="elementary_math" value="elementary_math" <?php if ($this->user->elementary_math != 0){ echo "checked";} ?>>
                    </td>
                    <td>
                        <label for="elementary_math">Elementary School Math</label>
                    </td>
                    <td>
                        <select class="radio-input" name="elementary_math">
                            <option value="3" <?php if ($this->user->elementary_math == 3){ echo("selected=selected");} ?>>Honors</option>
                            <option value="2" <?php if ($this->user->elementary_math == 2){ echo("selected=selected");} ?>>Standard</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" name="math[]" id="middle_math" value="middle_math" <?php if ($this->user->middle_math != 0){ echo "checked";} ?>>
                   </td>
                    <td>
                        <label for="middle_math">Middle School Math</label>
                    </td>
                    <td>
                        <select class="radio-input" name="middle_math">
                            <option value="3" <?php if ($this->user->middle_math == 3){ echo("selected=selected");} ?>>Honors</option>
                            <option value="2" <?php if ($this->user->middle_math == 2){ echo("selected=selected");} ?>>Standard</option>
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
                        <input type="checkbox" name="math_1" id="math_1" value="math_1" <?php if ($this->user->math_1 != 0){ echo "checked";} ?>>
                   </td>
                    <td>
                        <label for="math_1">Math 1</label>
                    </td>
                    <td>
                        <select class="radio-input" name="math_1">
                            <option value="3" <?php if ($this->user->math_1 == 3){ echo("selected=selected");} ?>>Honors</option>
                            <option value="2" <?php if ($this->user->math_1 == 2){ echo("selected=selected");} ?>>Level 1</option>
                            <option value="1" <?php if ($this->user->math_1 == 1){ echo("selected=selected");} ?>>Level 2</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" name="math[]" id="math_2" value="math_2" <?php if ($this->user->math_2 != 0){ echo "checked";} ?>>
                  </td>
                    <td>
                        <label for="math_2">Math 2</label>
                    </td>
                    <td>
                        <select class="radio-input" name="math_2">
                            <option value="3" <?php if ($this->user->math_2 == 3){ echo("selected=selected");} ?>>Honors</option>
                            <option value="2" <?php if ($this->user->math_2 == 2){ echo("selected=selected");} ?>>Level 1</option>
                            <option value="1" <?php if ($this->user->math_2 == 1){ echo("selected=selected");} ?>>Level 2</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" name="math[]" id="math_3" value="math_3" <?php if ($this->user->math_3 != 0){ echo "checked";} ?>>
                   </td>
                    <td>
                        <label for="math_3">Math 3</label>
                    </td>
                    <td>
                        <select class="radio-input" name="math_3">
                            <option value="3" <?php if ($this->user->math_3 == 3){ echo("selected=selected");} ?>>Honors</option>
                            <option value="2" <?php if ($this->user->math_3 == 2){ echo("selected=selected");} ?>>Level 1</option>
                            <option value="1" <?php if ($this->user->math_3 == 1){ echo("selected=selected");} ?>>Level 2</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" name="math[]" id="math_4" value="math_4" <?php if ($this->user->math_4 != 0){ echo "checked";} ?>>
                  </td>
                    <td>
                        <label for="math_4">Math 4</label>
                    </td>
                    <td>
                        <select class="radio-input" name="math_4">
                            <option value="3" <?php if ($this->user->math_4 == 3){ echo("selected=selected");} ?>>Honors</option>
                            <option value="2" <?php if ($this->user->math_4 == 2){ echo("selected=selected");} ?>>Level 1</option>
                            <option value="1" <?php if ($this->user->math_4 == 1){ echo("selected=selected");} ?>>Level 2</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" name="math[]" id="stats" value="stats" <?php if ($this->user->stats != 0){ echo "checked";} ?>>
                  </td>
                    <td>
                        <label for="stats">Statistics</label>
                    </td>
                    <td>
                        <select class="radio-input" name="stats">
                            <option value="4" <?php if ($this->user->stats == 4){ echo("selected=selected");} ?>>AP</option>
                            <option value="3" <?php if ($this->user->stats == 3){ echo("selected=selected");} ?>>Honors</option>
                            <option value="2" <?php if ($this->user->stats == 2){ echo("selected=selected");} ?>>Level 1</option>
                            <option value="1" <?php if ($this->user->stats == 1){ echo("selected=selected");} ?>>Level 2</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" name="math[]" id="comp_sci" value="comp_sci" <?php if ($this->user->comp_sci != 0){ echo "checked";} ?>>
                    </td>
                    <td>
                        <label for="comp_sci">Computer Science</label>
                    </td>
                    <td>
                        <select class="radio-input" name="comp_sci">
                            <option value="4" <?php if ($this->user->comp_sci == 4){ echo("selected=selected");} ?>>AP</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" name="math[]" id="calc" value="calc" <?php if ($this->user->calc != 0){ echo "checked";} ?>>
                    </td>
                    <td>
                      <label for="calc">Calculus</label>
                    </td>
                    <td>
                        <select class="radio-input" name="calc">
                            <option value="5" <?php if ($this->user->calc == 5){ echo("selected=selected");} ?>>AP BC</option>
                            <option value="4" <?php if ($this->user->calc == 4){ echo("selected=selected");} ?>>AP AB</option>
                            <option value="3" <?php if ($this->user->calc == 3){ echo("selected=selected");} ?>>Honors</option>
                            <option value="2" <?php if ($this->user->calc == 2){ echo("selected=selected");} ?>>Level 1</option>
                            <option value="1" <?php if ($this->user->calc == 1){ echo("selected=selected");} ?>>Level 2</option>
                        </select>
                    </td>
                </tr>
            </table>
        </fieldset>
        <fieldset>
            <h2>Science Tutoring:</h2>
            <label for="highest_science_name">Highest Completed Science Class:</label>
            <input type="text" name="highest_science_name" id="highest_science_name" size="15" maxlength="40" <?php if (!empty($this->user->highest_science_name)){ echo("value=".'"'.$this->user->highest_science_name.'"');} ?>>
            <br>
            <label for="highest_science_level">What level was it?</label>
            <input type="text" name="highest_science_level" id="highest_science_level" size="15" maxlength="20" <?php if (!empty($this->user->highest_science_level)){ echo("value=".'"'.$this->user->highest_science_level.'"');} else{echo("placeholder=\"Example: Honors\"");} ?>>
            <table class="subject-table">
                <tr>
                    <td colspan="3">
                        <b>Elementary/Middle School:</b>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" name="science[]" id="elementary_science" value="elementary_science" <?php if ($this->user->elementary_science != 0){ echo "checked";} ?>>
                    </td>
                    <td>
                        <label for="elementary_science">Elementary School Science</label>
                    </td>
                    <td>
                        <select class="radio-input" name="elementary_science">
                            <option value="3" <?php if ($this->user->elementary_science == 3){ echo("selected=selected");} ?>>Honors</option>
                            <option value="2" <?php if ($this->user->elementary_science == 2){ echo("selected=selected");} ?>>Standard</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" name="science[]" id="middle_science" value="middle_science" <?php if ($this->user->middle_science != 0){ echo "checked";} ?>>
                   </td>
                    <td>
                        <label for="middle_science">Middle School Science</label>
                    </td>
                    <td>
                        <select class="radio-input" name="middle_science">
                            <option value="3" <?php if ($this->user->middle_science == 3){ echo("selected=selected");} ?>>Honors</option>
                            <option value="2" <?php if ($this->user->middle_science == 2){ echo("selected=selected");} ?>>Standard</option>
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
                        <input type="checkbox" name="science[]" id="earth_science" value="earth_science" <?php if ($this->user->earth_science != 0){ echo "checked";} ?>>
                   </td>
                    <td>
                        <label for="earth_science">Earth Science</label>
                    </td>
                    <td>
                        <select class="radio-input" name="earth_science">
                            <option value="3" <?php if ($this->user->earth_science == 3){ echo("selected=selected");} ?>>Honors</option>
                            <option value="2" <?php if ($this->user->earth_science == 2){ echo("selected=selected");} ?>>Level 1</option>
                            <option value="1" <?php if ($this->user->earth_science == 1){ echo("selected=selected");} ?>>Level 2</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" name="science[]" id="bio" value="bio" <?php if ($this->user->bio != 0){ echo "checked";} ?>>
                  </td>
                    <td>
                        <label for="bio">Biology</label>
                    </td>
                    <td>
                        <select class="radio-input" name="bio">
                            <option value="4" <?php if ($this->user->bio == 4){ echo("selected=selected");} ?>>AP</option>
                            <option value="2" <?php if ($this->user->bio == 2){ echo("selected=selected");} ?>>Level 1</option>
                            <option value="1" <?php if ($this->user->bio == 1){ echo("selected=selected");} ?>>Level 2</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" name="science[]" id="chem" value="chem" <?php if ($this->user->chem != 0){ echo "checked";} ?>>
                   </td>
                    <td>
                        <label for="chem">Chemistry</label>
                    </td>
                    <td>
                        <select class="radio-input" name="chem">
                            <option value="4" <?php if ($this->user->chem == 4){ echo("selected=selected");} ?>>AP</option>
                            <option value="2" <?php if ($this->user->chem == 2){ echo("selected=selected");} ?>>Level 1</option>
                            <option value="1" <?php if ($this->user->chem == 1){ echo("selected=selected");} ?>>Level 2</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" name="science[]" id="phys" value="phys" <?php if ($this->user->phys != 0){ echo "checked";} ?>>
                  </td>
                    <td>
                        <label for="phys">Physics</label>
                    </td>
                    <td>
                        <select class="radio-input" name="phys">
                            <option value="5" <?php if ($this->user->phys == 5){ echo("selected=selected");} ?>>AP C</option>
                            <option value="4" <?php if ($this->user->phys == 4){ echo("selected=selected");} ?>>AP I</option>
                            <option value="2" <?php if ($this->user->phys == 2){ echo("selected=selected");} ?>>Level 1</option>
                            <option value="1" <?php if ($this->user->phys == 1){ echo("selected=selected");} ?>>Level 2</option>
                        </select>
                    </td>
                </tr>
            </table>
        </fieldset>
        <fieldset>
        <h2>Music Tutoring:</h2>
        <label for="instrument" >Instrument:</label>
      
      <select name="instrument" id="instrument" >
      <option value="0" <?php if ($this->user->instrument == "0"){ echo("selected=selected");} ?>>None</option>
        <option value="bass" <?php if ($this->user->instrument == "bass"){ echo("selected=selected");} ?>>Bass</option>
        <option value="clarinet" <?php if ($this->user->instrument == "clarinet"){ echo("selected=selected");} ?>>Clarinet</option>
        <option value="cello" <?php if ($this->user->instrument == "cello"){ echo("selected=selected");} ?>>Cello</option>
        <option value="euphonium" <?php if ($this->user->instrument == "euphonium"){ echo("selected=selected");} ?>>Euphonium</option>
        <option value="flute" <?php if ($this->user->instrument == "flute"){ echo("selected=selected");} ?>>Flute</option>
        <option value="french_horn" <?php if ($this->user->instrument == "french_horn"){ echo("selected=selected");} ?>>French Horn</option>
        <option value="oboe" <?php if ($this->user->instrument == "oboe"){ echo("selected=selected");} ?>>Oboe</option>
        <option value="percussion" <?php if ($this->user->instrument == "percussion"){ echo("selected=selected");} ?>>Percussion</option>
        <option value="saxophone" <?php if ($this->user->instrument == "saxophone"){ echo("selected=selected");} ?>>Saxophone</option>
        <option value="trombone" <?php if ($this->user->instrument == "trombone" ){ echo("selected=selected");} ?>>Trombone</option>
        <option value="trumpet" <?php if ($this->user->instrument == "trumpet"){ echo("selected=selected");} ?>>Trumpet</option>
        <option value="tuba" <?php if ($this->user->instrument == "tuba" ){ echo("selected=selected");} ?>>Tuba</option>
        <option value="viola" <?php if ($this->user->instrument == "viola"){ echo("selected=selected");} ?>>Viola</option>
        <option value="violin" <?php if ($this->user->instrument == "violin"){ echo("selected=selected");} ?>>Violin</option>
        <option value="voice" <?php if ($this->user->instrument == "voice"){ echo("selected=selected");} ?>>Voice</option>
      </select>
      <br>
      <br>
        <label for="student_level">What experiance level can you teach?</label>
      <select name="music_level" id="student_level" style="float:left">
        <option value="1" <?php if ($this->user->music_level == "1"){ echo("selected=selected");} ?>>None</option>
        <option value="2" <?php if ($this->user->music_level == "2"){ echo("selected=selected");} ?>>Beginning (0-3 years)</option>
        <option value="3" <?php if ($this->user->music_level == "3"){ echo("selected=selected");} ?>>Intermediate (3-6 years)</option>
        <option value="4" <?php if ($this->user->music_level == "4"){ echo("selected=selected");} ?>>Advanced (6+ years)</option>
      </select>
      <br>
      <br>
         <label for="tutor_level" >Your years of Experience</label>
            <input type="number" name="music_years" id="tutor_level" size="5" maxlength="3" min="0"  <?php if (!empty($this->user->music_years)){ echo("value=".'"'.$this->user->music_years.'"');} ?>>
            <br>
        </fieldset>
        <br>
        <input type="submit" value="Update">
    </form>
</div>
