<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Lexington Tutor Exchange</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo URL; ?>public/css/reset.css" />
    <link rel="stylesheet" href="<?php echo URL; ?>public/css/style.css" />
    <!-- in case you wonder: That's the cool-kids-protocol-free way to load jQuery -->
    <script type="text/javascript" src="//code.jquery.com/jquery-2.0.3.min.js"></script>
    <script type="text/javascript" src="<?php echo URL; ?>public/js/application.js"></script>
</head>
<body>

    <div class='title-box'>
        <a href="<?php echo URL; ?>">Lexington Tutor Exchange V1.5 Beta</a>
    </div>

    <div class="header">
        <div class="header_left_box">
        <ul id="menu">
            <li <?php if ($this->checkForActiveController($filename, "index")) { echo ' class="active" '; } ?> >
                <a href="<?php echo URL; ?>index/index">Home</a>
            </li>
            <li <?php if ($this->checkForActiveController($filename, "search")) { echo ' class="active" '; } ?> >
                <a href="<?php echo URL; ?>search/index">Search For Tutors</a>
                        <?php if (Session::get('user_logged_in') == true):?>
                         <ul class="sub-menu">
                        <li <?php if ($this->checkForActiveController($filename, "search") && Session::get('user_logged_in') == true) { echo ' class="active" '; } ?> >
                            <a href="<?php echo URL; ?>search/index">Search Form</a>
                        </li>
                        <li <?php if ($this->checkForActiveController($filename, "search") && Session::get('user_logged_in') == true) { echo ' class="active" '; } ?> >
                            <a href="<?php echo URL; ?>search/saved">My Saved Tutors</a>
                        </li>
                    </ul>
                <?php endif; ?>
            </li>

           <li <?php if ($this->checkForActiveController($filename, "about")) { echo ' class="active" '; } ?> >
                <a href="<?php echo URL; ?>about/index">About Us</a>
            </li>
           
           <li <?php if ($this->checkForActiveController($filename, "contact")) { echo ' class="active" '; } ?> >
                <a href="<?php echo URL; ?>contact/index">Contact Us</a>
            </li>

               <?php if (Session::get('user_logged_in') == true && Session::get('user_account_type') >= 2):?>
              <li <?php if ($this->checkForActiveController($filename, "tutor")) { echo ' class="active" '; } ?> >
                <a href="<?php echo URL; ?>tutor/index">Tutoring Settings</a>
                <ul class="sub-menu">
                    <li <?php if ($this->checkForActiveController($filename, "tutor")) { echo ' class="active" '; } ?> >
                         <a href="<?php echo URL; ?>tutor/index">Overview</a>
                    </li>
                    <li <?php if ($this->checkForActiveController($filename, "tutor")) { echo ' class="active" '; } ?> >
                         <a href="<?php echo URL; ?>tutor/edittutor">Edit tutoring credentials</a>
                    </li>
                </ul>

            </li>
            <?php endif; ?>



            <?php if (Session::get('user_logged_in') == true):?>
                <li <?php if ($this->checkForActiveController($filename, "login")) { echo ' class="active" '; } ?> >
                    <a href="<?php echo URL; ?>login/showprofile">My Account</a>
                    <ul class="sub-menu">
                        <li <?php if ($this->checkForActiveController($filename, "login")) { echo ' class="active" '; } ?> >
                            <a href="<?php echo URL; ?>login/changeaccounttype">Start/Stop Tutoring</a>
                        </li>
                        <li <?php if ($this->checkForActiveController($filename, "login")) { echo ' class="active" '; } ?> >
                            <a href="<?php echo URL; ?>login/uploadavatar">Profile Picture</a>
                        </li>
                        <li <?php if ($this->checkForActiveController($filename, "login")) { echo ' class="active" '; } ?> >
                            <a href="<?php echo URL; ?>login/editusername">Edit my name</a>
                        </li>
                        <li <?php if ($this->checkForActiveController($filename, "login")) { echo ' class="active" '; } ?> >
                            <a href="<?php echo URL; ?>login/edituseremail">Edit my email</a>
                        </li>
                        <li <?php if ($this->checkForActiveController($filename, "login")) { echo ' class="active" '; } ?> >
                            <a href="<?php echo URL; ?>login/logout">Logout</a>
                        </li>
                    </ul>
                </li>
            <?php endif; ?>
 

            <!-- for not logged in users -->
            <?php if (Session::get('user_logged_in') == false):?>
                <li <?php if ($this->checkForActiveControllerAndAction($filename, "login/index")) { echo ' class="active" '; } ?> >
                    <a href="<?php echo URL; ?>login/index">Login</a>
                </li>
                <li <?php if ($this->checkForActiveControllerAndAction($filename, "login/register")) { echo ' class="active" '; } ?> >
                    <a href="<?php echo URL; ?>login/register">Register</a>
                </li>
            <?php endif; ?>

        </ul>
        </div>

        <?php if (Session::get('user_logged_in') == true): ?>
            <div class="header_right_box">
                <div class="namebox">
                    Hello <?php echo Session::get('user_name'); ?> !
                </div>
                <div class="avatar">
                    <?php if (USE_GRAVATAR) { ?>
                        <img src='<?php echo Session::get('user_gravatar_image_url'); ?>'
                             style='width:<?php echo AVATAR_SIZE; ?>px; height:<?php echo AVATAR_SIZE; ?>px;' />
                    <?php } else { ?>
                        <img src='<?php echo Session::get('user_avatar_file'); ?>'
                             style='width:<?php echo AVATAR_SIZE; ?>px; height:<?php echo AVATAR_SIZE; ?>px;' />
                    <?php } ?>
                </div>
            </div>
        <?php endif; ?>

        <div class="clear-both"></div>
    </div>
