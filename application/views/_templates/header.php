<!doctype html>
<html>
<head>
<meta name="google-site-verification" content="x91WvPNaAdw3bjXe9VZONNcImZP-iuspmgaPee1oqpM" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Lexington Tutor Exchange</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">


<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

<link rel="stylesheet" href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

<script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>

<script src="https://cdn.datatables.net/plug-ins/f2c75b7247b/integration/bootstrap/3/dataTables.bootstrap.js"></script>

<style type="text/css">
.table tbody>tr>td.vert-align{
    vertical-align: middle;
}
body { padding-bottom: 70px; }
</style>

<script>
$(document).ready(function(){
    $('#resultsTable').dataTable();
});
</script>

</head>

<body>

<nav class="navbar navbar-inverse">
<div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="<?php echo URL; ?>index/index">Lexington Tutor Exchange</a>
    </div>

    <div>
      <ul class="nav navbar-nav">
        <li <?php if ($this->checkForActiveControllerAndAction($filename, "index/index")) { echo ' class="active" '; } ?>><a href="<?php echo URL; ?>index/index">Home</a></li>

            <?php if (Session::get('user_logged_in') == true):?>
          <li class="dropdown <?php if ($this->checkForActiveController($filename, "search")) { echo 'active'; } ?>">
          <a class="dropdown-toggle" data-toggle="dropdown" href="<?php echo URL; ?>search/index">Search for Tutors
          <span class="caret"></span></a>
          <ul class="dropdown-menu">

            <li <?php if ($this->checkForActiveControllerAndAction($filename, "search/index")) { echo ' class="active" '; } ?>><a href="<?php echo URL; ?>search/index">Search Form</a></li>
            <li <?php if ($this->checkForActiveControllerAndAction($filename, "search/saved") && Session::get('user_logged_in') == true) { echo ' class="active" '; } ?> ><a href="<?php echo URL; ?>search/saved">My Saved Tutors</a></li>
            </ul>
            </li>
            <?php else: ?>
              <li <?php if ($this->checkForActiveController($filename, "search")) { echo ' class="active" '; } ?>><a href="<?php echo URL; ?>search/index">Search For Tutors</a></li>
            <?php endif; ?>
          

        <li <?php if ($this->checkForActiveControllerAndAction($filename, "about/index")) { echo ' class="active" '; } ?>><a href="<?php echo URL; ?>about/index">About Us</a></li> 
        <li <?php if ($this->checkForActiveControllerAndAction($filename, "contact/index")) { echo ' class="active" '; } ?>><a href="<?php echo URL; ?>contact/index">Contact Us</a></li> 

        <?php if (Session::get('user_logged_in') == true && Session::get('user_account_type') >= 2):?>
        <li class="dropdown <?php if ($this->checkForActiveController($filename, "tutor")) { echo 'active'; } ?>"><a class="dropdown-toggle" data-toggle="dropdown" href="<?php echo URL; ?>tutor/index">Tutoring Settings
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
        <li <?php if ($this->checkForActiveControllerAndAction($filename, "tutor/index")) { echo ' class="active" '; } ?>><a href="<?php echo URL; ?>tutor/index">Dashboard</a></li>
        <li <?php if ($this->checkForActiveControllerAndAction($filename, "tutor/edittutor")) { echo ' class="active" '; } ?>><a href="<?php echo URL; ?>tutor/edittutor">Edit Profile</a></li>
        </ul>
        </li>
        <?php endif; ?>

        <?php if (Session::get('user_logged_in') == true):?>
        <li class="dropdown <?php if ($this->checkForActiveController($filename, "login")) { echo 'active'; } ?>"><a class="dropdown-toggle" data-toggle="dropdown" href="<?php echo URL; ?>login/showprofile">Account
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
        <li <?php if ($this->checkForActiveControllerAndAction($filename, "login/showprofile")) { echo ' class="active" '; } ?>><a href="<?php echo URL; ?>login/showprofile">My Account</a></li>
        <li <?php if ($this->checkForActiveControllerAndAction($filename, "login/changeaccounttype")) { echo ' class="active" '; } ?>><a href="<?php echo URL; ?>login/changeaccounttype">Start/Stop Tutoring</a></li>
        <li <?php if ($this->checkForActiveControllerAndAction($filename, "login/uploadavatar")) { echo ' class="active" '; } ?>><a href="<?php echo URL; ?>login/uploadavatar">Profile Picture</a></li>
        <li <?php if ($this->checkForActiveControllerAndAction($filename, "login/editusername")) { echo ' class="active" '; } ?>><a href="<?php echo URL; ?>login/editusername">Edit Name</a></li>
        <li <?php if ($this->checkForActiveControllerAndAction($filename, "login/edituseremail")) { echo ' class="active" '; } ?>><a href="<?php echo URL; ?>login/edituseremail">Edit Email</a></li>
        <li <?php if ($this->checkForActiveControllerAndAction($filename, "login/logout")) { echo ' class="active" '; } ?>><a href="<?php echo URL; ?>login/logout">Logout</a></li>
        </ul>
        </li>
        <?php endif; ?>


        <!-- for not logged in users -->
            <?php if (Session::get('user_logged_in') == false):?>
                 <li <?php if ($this->checkForActiveControllerAndAction($filename, "login/index")) { echo ' class="active" '; } ?>><a href="<?php echo URL; ?>login/index">Login</a></li>
                  <li <?php if ($this->checkForActiveControllerAndAction($filename, "login/register")) { echo ' class="active" '; } ?>><a href="<?php echo URL; ?>login/register">Register</a></li>
            <?php endif; ?>

      </ul>
    </div>
  </div>

</nav>

