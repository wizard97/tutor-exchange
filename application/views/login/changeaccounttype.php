<div class="container">
    <div class="page-header">
  <h1>Change account type</h1>
</div>
    <!-- echo out the system feedback (error and success messages) -->
    <?php $this->renderFeedbackMessages(); ?>
    

    <?php 
    if (Session::get('user_account_type') >=2 ) 
    {
    ?>

<p style="color: green">You are currently listed as a tutor, thanks!</p>
       <form action="<?php echo URL; ?>login/changeaccounttype_action" method="post">
        <label></label>
        <input type="submit" name="user_account_downgrade" value="Stop Tutoring" />
    </form>
<?php } 

else 
{
    ?>
<p style="color: red">You are currently not signed up as a tutor.</p>

<form action="<?php echo URL; ?>login/changeaccounttype_action" method="post">
        <label></label>
        <input type="submit" name="user_account_upgrade" value="Start Tutoring" />
    </form>

<?php
}
    ?>


</div>
