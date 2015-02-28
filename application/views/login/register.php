<div class="container">

    <!-- echo out the system feedback (error and success messages) -->
    <?php $this->renderFeedbackMessages(); ?>

    <div class="register-default-box">
        <h1>Register</h1>
        <!-- register form -->
        <form method="post" action="<?php echo URL; ?>login/register_action" name="registerform">
            <!-- the first name input field uses a HTML5 pattern check -->
            <label for="login_input_fname">
                First Name
                <span style="display: block; font-size: 14px; color: #999;">(only letters and numbers, 2 to 64 characters)</span>
            </label>
            <input id="login_input_fname" class="login_input" type="text" pattern="[a-zA-Z0-9]{2,64}" name="fname" required />
            <!-- the last name input field uses a HTML5 pattern check -->
            <label for="login_input_lname">
                Last Name
                <span style="display: block; font-size: 14px; color: #999;">(only letters and numbers, 2 to 64 characters)</span>
            </label>
            <input id="login_input_lname" class="login_input" type="text" pattern="[a-zA-Z0-9]{2,64}" name="lname" required />

            <!-- the email input field uses a HTML5 email type check -->
            <label for="login_input_email">
                User's email
                <span style="display: block; font-size: 14px; color: #999;">
                    (please provide a <span style="text-decoration: underline; color: mediumvioletred;">real email address</span>,
                    you'll get a verification mail with an activation link)
                </span>
            </label>
            <input id="login_input_email" class="login_input" type="email" name="user_email" required />
            <label for="login_input_password_new">
                Password (min. 6 characters!)
     
            </label>
            <input id="login_input_password_new" class="login_input" type="password" name="user_password_new" pattern=".{6,}" required autocomplete="off" />
            <label for="login_input_password_repeat">Repeat password</label>
            <input id="login_input_password_repeat" class="login_input" type="password" name="user_password_repeat" pattern=".{6,}" required autocomplete="off" />

             <label for="login_input_account_type">
                Account Type
                <span style="display: block; font-size: 12px; color: #999;">
                    Select "Standard" if all you want to do is search for tutors. Select "Tutor" if you are looking to tutor. If you are a professional tutor, select "Tutor", and you can upgrade your account later.
                </span>
            </label>
           <select name="account_type" id="login_input_account_type" class="login_input" required>
                <option value="1">Standard</option>
                <option value="2">Tutor</option>
           </select>
           <br><br>
            <!-- show the captcha by calling the login/showCaptcha-method in the src attribute of the img tag -->
            <!-- to avoid weird with-slash-without-slash issues: simply always use the URL constant here -->
            <img id="captcha" src="<?php echo URL; ?>login/showCaptcha" />
            <span style="display: block; font-size: 11px; color: #999; margin-bottom: 10px">
                <!-- quick & dirty captcha reloader -->
                <a href="#" onclick="document.getElementById('captcha').src = '<?php echo URL; ?>login/showCaptcha?' + Math.random(); return false">[ Reload Captcha ]</a>
            </span>
            <label>
                Please enter these characters
                <span style="display: block; font-size: 14px; color: #999;">
                    We don't like Captchas either, but we do it to protect the personal information of our users.
                </span>
            </label>
            <input type="text" name="captcha" required />
            <input type="submit"  name="register" value="Register" />

        </form>
    </div>

</div>
