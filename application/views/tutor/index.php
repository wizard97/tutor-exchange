<div class="container">
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

<p style="color: green">You are registered as a standard tutor, and you can be searched for by people looking for tutors.</p>



<h2><b>Quick Links:</b></h2>
<ul class="a">
<li><a href="<?php echo(URL . 'login/changeaccounttype');?>">Start/Stop Tutoring (temporarily or indefinately)</a></li>
<li><a href="<?php echo(URL . 'tutor/edittutor');?>">Edit Tutoring Credentials</a></li>
</ul>
    <?php
}
else
{
	?>

<p>You have a standard account. You can search for tutors, but you are not registered as a tutor.</p>


<p>If you wish to upgrade your account to a tutoring account, please start by <a href="<?php echo(URL . 'login/changeaccounttype');?>">
promoting your account</a> to a tutoring account.</p>




	<?php
}
?>


</div>
