<div class="container">
    <h1>Update your name</h1>

    <!-- echo out the system feedback (error and success messages) -->
    <?php $this->renderFeedbackMessages(); ?>

    <form action="<?php echo URL; ?>login/editusername_action" method="post">
        <label>Updated first name</label>
        <input type="text" name="fname" required />
        <br>
        <label>Updated last name</label>
        <input type="text" name="lname" required />
        <input type="submit" value="Submit" />
    </form>
</div>
