
<div class="container">
    <h1>Upload a profile picture</h1>

    <!-- echo out the system feedback (error and success messages) -->
    <?php $this->renderFeedbackMessages(); ?>

    <form action="<?php echo URL; ?>login/uploadavatar_action" method="post" enctype="multipart/form-data">
    	<div class="form-group">
        	<label for="avatar_file">Select a profile picture from your computer (will be scaled to 720x720 px):</label>
        	<input type="file" name="avatar_file" required />
        </div>
        <!-- max size 5 MB (as many people directly upload high res pictures from their digital cameras) -->
        <input type="hidden" name="MAX_FILE_SIZE" value="5000000" />
        <input name="submit" class="btn btn-default" type="submit" value="Upload image" />
        
    </form>
</div>
