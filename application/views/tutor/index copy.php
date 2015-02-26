<div class="content">
<h1>Tutoring Settings</h1>

    <!-- echo out the system feedback (error and success messages) -->
    <?php $this->renderFeedbackMessages(); 

        if(Session::get("user_account_type") == '3')
        {
    ?>
<p style="color: red">You are registered as a professional tutor. Please only select this option if you tutor for a living, otherwise downgrade you account to a standard tutoring account with the <a href="<?php echo(URL . 'login/changeaccounttype');?>">change account type tool</a>.</p>

<p> Your tutoring account is <span style="color: green">active</span>, and you can be searched for by people looking for tutors.</p>

<p>If you wish to stop tutoring (either temporarily or indefinately) so you will no longer show up in tutor searches, downgrade you account with the <a href="<?php echo(URL . 'login/changeaccounttype');?>">change account type tool</a></p>




    <?php
}
else if(Session::get("user_account_type") == '2')
{
	?>

<p style="color: green">You are registered as a standard tutor. This means you do not tutor for a living. If you are in fact a professional tutor, you can upgrade you account to a professional tutoring account with the <a href="<?php echo(URL . 'login/changeaccounttype');?>">change account type tool</a>.</p>

<p> Your tutoring account is <span style="color: green">active</span>, and you can be searched for by people looking for tutors.</p>

<p>If you wish to stop tutoring (either temporarily or indefinately) so you will no longer show up in tutor searches, downgrade you account with the <a href="<?php echo(URL . 'login/changeaccounttype');?>">change account type tool</a></p>




    <?php
}
else
{
	?>

<p>You have a standard account. You can search for tutors, but you are not registered as a tutor. If you wish to upgrade your account to a tutoring account, please start by <a href="<?php echo(URL . 'login/changeaccounttype');?>">
promoting your account</a> to a tutoring account.</p>

<p> Your tutoring account is <span style="color: red">inactive</span>, and you cannot be searched for by people looking for tutors.</p>

	<?php
}
?>


</div>
