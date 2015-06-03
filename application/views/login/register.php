<div class="container">
    <div class="page-header">
  <h1>Register</h1>
</div>
    <!-- echo out the system feedback (error and success messages) -->
    <?php $this->renderFeedbackMessages(); ?>

    <div class="col-md-6 well">

        <!-- register form -->
        <form method="post" action="<?php echo URL; ?>login/register_action" name="registerform">


        <div class="form-group">
        <label for="login_input_fname">First name</label>
        <input id="login_input_fname" class="form-control" type="text" pattern="[a-zA-Z0-9]{2,64}" name="fname" required/>
        </div>

        <div class="form-group">
        <label for="login_input_lname">Last name</label>
        <input id="login_input_lname" class="form-control" type="text" pattern="[a-zA-Z0-9]{2,64}" name="lname" required/>
        </div>


        <div class="form-group">
        <label for="login_input_email">Email</label>
        <input id="login_input_email" class="form-control" type="email" name="user_email" required />
        <p class="help-block">Please use a real email, you'll recieve an email with an activation link</p>
        </div>

        <div class="form-group">
        <label for="login_input_password_new">Password</label>
        <input id="login_input_password_new" class="form-control" type="password" name="user_password_new" pattern=".{6,}" required autocomplete="off"/>
        <p class="help-block">Minimum 6 characters</p>
        </div>


        <div class="form-group">
        <label for="login_input_password_repeat">Repeat Password</label>
        <input id="login_input_password_repeat" class="form-control" type="password" name="user_password_repeat" pattern=".{6,}" required autocomplete="off"/>
        </div>


        <div class="form-group">
        <label for="login_input_account_type">Account type</label>
                <select name="account_type" id="login_input_account_type" class="form-control" required>
                <option value="1">Standard</option>
                <option value="2">Tutor</option>
                <option value="3">Professional Tutor</option>
                </select>
        <p class="help-block">Select "Standard" if you are looking for a tutor, "Tutor" if you are a standard tutor, and "Professional Tutor" if tutoring is a legitimate job for you and you consider yourself to be a professional.</p>
        </div>

<div class="form-group">
<label>Captcha</label>
<img class="img-responsive" id="captcha" src="<?php echo URL; ?>login/showCaptcha" />
<p class="help-block"><a href="#" onclick="document.getElementById('captcha').src = '<?php echo URL; ?>login/showCaptcha?' + Math.random(); return false">[ Reload Captcha ]</a></p>
</div>

<div class="form-group">
<label for="captcha_box">Please enter these characters</label>
<input class="form-control" type="text" id="captcha_box" name="captcha" required />
<p class="help-block">We don't like Captchas either, but we do it to protect the personal information of our users.</p>
</div>

            <button type="submit" class="btn btn-lg btn-success">
<span class="glyphicon glyphicon-user" aria-hidden="true"></span> Register
</button>

</form>
</div>

</div>

