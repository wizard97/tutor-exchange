<div class="container">
    <div class="page-header">
  <h1>Change Account Type</h1>
</div>
    <!-- echo out the system feedback (error and success messages) -->
    <?php $this->renderFeedbackMessages(); ?>
<div class="col-md-6">
    <?php 
    if (Session::get('user_account_type') ==2 ) 
    {
    ?>

<h4>Current Account Type: <button type="submit" class="btn btn-lg btn-info" name="user_account_type" value="2" disabled>Student Tutor</button></h4>
       <form action="<?php echo URL; ?>login/changeaccounttype_action" method="post">
<div class="panel panel-default">
<div class="panel-heading">
Other Account Options
</div>

<div class="panel-body">
        <button type="submit" class="btn btn-lg btn-warning" name="user_account_type" value="1">Standard</button>
        <button type="submit" class="btn btn-lg btn-success" name="user_account_type" value="3">Professional Tutor</button>
</div>
        </div>
    </form>
<?php } 

elseif (Session::get('user_account_type') == 1 ) 
{
    ?>
<h4>Current Account Type: <button type="submit" class="btn btn-lg btn-warning" name="user_account_type" value="1" disabled>Standard</button></h4>
       <form action="<?php echo URL; ?>login/changeaccounttype_action" method="post">
<div class="panel panel-default">
<div class="panel-heading">
Other Account Options
</div>

<div class="panel-body">
        <button type="submit" class="btn btn-lg btn-info" name="user_account_type" value="2">Student Tutor</button>
        <button type="submit" class="btn btn-lg btn-success" name="user_account_type" value="3">Professional Tutor</button>
</div>
        </div>
    </form>
<?php } 

else{
    ?>
<h4>Current Account Type: <button type="submit" class="btn btn-lg btn-success" name="user_account_type" value="3" disabled>Professional Tutor</button></h4>
       <form action="<?php echo URL; ?>login/changeaccounttype_action" method="post">
<div class="panel panel-default">
<div class="panel-heading">
Other Account Options
</div>

<div class="panel-body">
        <button type="submit" class="btn btn-lg btn-warning" name="user_account_type" value="1">Standard</button>
        <button type="submit" class="btn btn-lg btn-info" name="user_account_type" value="2">Student Tutor</button>
</div>
        </div>
    </form>

<?php
}
?>

</div>

</div>
