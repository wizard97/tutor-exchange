<div class="content">
<p style="color: red">This functionality is currently under construction, please ignore below and check back later.</p>
	<div id="column1">
    <?php echo '<h2>' ?>
		<h2>Matan Silver</h2>
		<?php if(isset($this->tutor->user_avatar_link)){echo '<img src="'.$this->tutor->user_avatar_link.'" />';}?>
    	<input type="submit" name="contact" id="contact" value="Contact">
	</div>
	<div id="column2">
    	<br>
    	<br>
    	<br>
    	<br>
        <?php echo '<p>'.$this->tutor->fname.' '.$this->tutor->lname.'</p>'; ?>
        <?php echo '<p>'.$this->tutor->grade.'</p>'; ?>
		<?php echo '<p>'.$this->tutor->age.'</p>'; ?>
		<?php echo '<p>'.$this->tutor->rate.' $/hour</p>'; ?>
	</div>
	<div id="column3">
    	<br>
        <br>
        <br>
        <br>
        <br>
		<label for="classestaught">Qualified to teach:</label>
    	<ul id=classestaught>
    		<li>AP Chem</li>
       		<li>AP Physics I</li>
            <li>French IV</li>
    	</ul>
	</div>  
</div>


