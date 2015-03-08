<div class="container">
    <h1>Update your name</h1>

    <!-- echo out the system feedback (error and success messages) -->
    <?php $this->renderFeedbackMessages(); ?>
	<div class="col-md-5">
    <form action="<?php echo URL; ?>login/editusername_action" method="post">
    	<div class="form-group">
        	<label>Updated first name</label>
        	<input type="text" class="form-control" name="fname" required />
        </div>
        <div class="form-group">
        	<label>Updated last name</label>
        	<input type="text" class="form-control" name="lname" required />
        </div>
        	<input type="submit" class="btn btn-default" value="Submit" />
    </form>
    </div>
</div>
