
<div class="container">
	<div class="col-md-3">
		<?php echo '<h2>'.$this->tutor->fname.' '.$this->tutor->lname.'</h2>'; ?>
		<?php if(isset($this->tutor->user_avatar_link)){echo '<img src="'.$this->tutor->user_avatar_link.' height="200" width="200" class="img-responsive img-thumbnail" " />';}?>
    	<input type="submit" name="contact" id="contact" value="Contact">
        <br />
        
        	<table class="table">
        		<tr><?php echo '<td><b>Grade:</b></td><td>'.$this->tutor->grade.'</td>'; ?></tr>
				<tr><?php echo '<td><b>Age:</b></td><td>'.$this->tutor->age.'</td>'; ?></tr>
				<tr><?php echo '<td><b>Hourly Rate:</b></td><td>'.$this->tutor->rate.' $/hour</td>'; ?></tr>
        		<tr><td><b>Member since:</b></td><td>2000 BC</td></tr>
        	</table>
        </div>
        <div class="col-md-5">
        <p><b>About Me:</b> <?php echo $this->tutor->about?></p>
	
		
	        <table class="table">
	    		<tr>
	           		<th><b>Classes I can Tutor</b></th>
	           	    <th><b>Up to Level</b></th>
	           	</tr>
	           	<tr>
	           		<td>Math 1</td>
	           	    <td>Honors</td>
	           	</tr>
	           	<tr>
	           		<td>Math 2</td>
           	    	<td>Honors</td>
           		</tr>
    		</table>
        
	<b>Reviews:</b>
    <div id="review">
    	<p>Meh...</p>
        <p>By Mike LongBotton</p>
        <p>Stuff and things... Stuff and things... Stuff and things... Stuff and things...</p>
    </div>
    </div>
</div>


