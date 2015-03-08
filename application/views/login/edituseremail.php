<div class="container">
    <h1>Change your email address</h1>

    <!-- echo out the system feedback (error and success messages) -->
    <?php $this->renderFeedbackMessages(); ?>
	<div class="col-md-5">
    <form action="<?php echo URL; ?>login/edituseremail_action" method="post">
    <div class="form-group">
        <label>New email address:</label>
        <input type="text" class="form-control" name="user_email" required />
        </div>
        <input type="submit" class="btn btn-default" value="Submit" />
    </form>
    </div>
</div>
