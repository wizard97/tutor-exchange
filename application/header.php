<!doctype html>
<html>
<head>
<meta name="google-site-verification" content="x91WvPNaAdw3bjXe9VZONNcImZP-iuspmgaPee1oqpM" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Lexington Tutor Exchange, Exclusively For Lexington MA Tutoring</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">


<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="<?php echo(URL.'public/css/bootstrap.min.css');?>">

<!-- Optional theme -->
<link rel="stylesheet" href="<?php echo(URL.'public/css/bootstrap-theme.min.css');?>">

<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

<link rel="stylesheet" href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="<?php echo(URL.'public/js/bootstrap.min.js');?>"></script>

<script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>

<script src="https://cdn.datatables.net/plug-ins/f2c75b7247b/integration/bootstrap/3/dataTables.bootstrap.js"></script>

<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
<style type="text/css">
.table tbody>tr>td.vert-align{
    vertical-align: middle;
}
body { padding-bottom: 100px; }

.btn { white-space: normal; }

.social-title {text-transform: uppercase; letter-spacing: 1px; }
.count { font-size: 37px;margin-top: 10px;margin-bottom: 10px; }
.fa-stat { font-size: 100px;text-align: right;position: absolute;top: 7px;right: 27px;outline: none; }
.social .panel { color:#fff;text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5); }
.social a { text-decoration:none; }
.box-a { background-color:#00acee; }
.box-b { background-color:#dd4b39; }
.box-c { background-color:#3b5998; }
.box-d { background-color:#eb6d20; }
</style>


<script>
$(document).ready(function(){
    $('#resultsTable').dataTable();
	$(".integers").counterUp({delay: 10,time: 1000});

});
!function(e){"use strict";function t(e,t,a){var i;return function(){var n=this,o=arguments,r=function(){i=null,a||e.apply(n,o)},s=a&&!i;clearTimeout(i),i=setTimeout(r,t),s&&e.apply(n,o)}}function a(e){var t=++h;return String(null==e?"rmjs-":e)+t}function i(e){var t=e.clone().css({height:"auto",width:e.width(),maxHeight:"none",overflow:"hidden"}).insertAfter(e),a=t.outerHeight(),i=parseInt(t.css({maxHeight:""}).css("max-height").replace(/[^-\d\.]/g,""),10),n=e.data("defaultHeight");t.remove();var o=i||e.data("collapsedHeight")||n;e.data({expandedHeight:a,maxHeight:i,collapsedHeight:o}).css({maxHeight:"none"})}function n(e){if(!d[e.selector]){var t=" ";e.embedCSS&&""!==e.blockCSS&&(t+=e.selector+" + [data-readmore-toggle], "+e.selector+"[data-readmore]{"+e.blockCSS+"}"),t+=e.selector+"[data-readmore]{transition: height "+e.speed+"ms;overflow: hidden;}",function(e,t){var a=e.createElement("style");a.type="text/css",a.styleSheet?a.styleSheet.cssText=t:a.appendChild(e.createTextNode(t)),e.getElementsByTagName("head")[0].appendChild(a)}(document,t),d[e.selector]=!0}}function o(t,a){this.element=t,this.options=e.extend({},s,a),n(this.options),this._defaults=s,this._name=r,this.init(),window.addEventListener?(window.addEventListener("load",l),window.addEventListener("resize",l)):(window.attachEvent("load",l),window.attachEvent("resize",l))}var r="readmore",s={speed:100,collapsedHeight:200,heightMargin:16,moreLink:'<a href="#">Read More</a>',lessLink:'<a href="#">Close</a>',embedCSS:!0,blockCSS:"display: block; width: 100%;",startOpen:!1,beforeToggle:function(){},afterToggle:function(){}},d={},h=0,l=t(function(){e("[data-readmore]").each(function(){var t=e(this),a="true"===t.attr("aria-expanded");i(t),t.css({height:t.data(a?"expandedHeight":"collapsedHeight")})})},100);o.prototype={init:function(){var t=this,n=e(this.element);n.data({defaultHeight:this.options.collapsedHeight,heightMargin:this.options.heightMargin}),i(n);var o=n.data("collapsedHeight"),r=n.data("heightMargin");if(n.outerHeight(!0)<=o+r)return!0;var s=n.attr("id")||a(),d=t.options.startOpen?t.options.lessLink:t.options.moreLink;n.attr({"data-readmore":"","aria-expanded":!1,id:s}),n.after(e(d).on("click",function(e){t.toggle(this,n[0],e)}).attr({"data-readmore-toggle":"","aria-controls":s})),t.options.startOpen||n.css({height:o})},toggle:function(t,a,i){i&&i.preventDefault(),t||(t=e('[aria-controls="'+this.element.id+'"]')[0]),a||(a=this.element);var n=this,o=e(a),r="",s="",d=!1,h=o.data("collapsedHeight");o.height()<=h?(r=o.data("expandedHeight")+"px",s="lessLink",d=!0):(r=h,s="moreLink"),n.options.beforeToggle(t,a,!d),o.css({height:r}),o.on("transitionend",function(){n.options.afterToggle(t,a,d),e(this).attr({"aria-expanded":d}).off("transitionend")}),e(t).replaceWith(e(n.options[s]).on("click",function(e){n.toggle(this,a,e)}).attr({"data-readmore-toggle":"","aria-controls":o.attr("id")}))},destroy:function(){e(this.element).each(function(){var t=e(this);t.attr({"data-readmore":null,"aria-expanded":null}).css({maxHeight:"",height:""}).next("[data-readmore-toggle]").remove(),t.removeData()})}},e.fn.readmore=function(t){var a=arguments,i=this.selector;return t=t||{},"object"==typeof t?this.each(function(){if(e.data(this,"plugin_"+r)){var a=e.data(this,"plugin_"+r);a.destroy.apply(a)}t.selector=i,e.data(this,"plugin_"+r,new o(this,t))}):"string"==typeof t&&"_"!==t[0]&&"init"!==t?this.each(function(){var i=e.data(this,"plugin_"+r);i instanceof o&&"function"==typeof i[t]&&i[t].apply(i,Array.prototype.slice.call(a,1))}):void 0}}(jQuery);
(function(e){"use strict";e.fn.counterUp=function(t){var n=e.extend({time:400,delay:10},t);return this.each(function(){var t=e(this),r=n,i=function(){var e=[],n=r.time/r.delay,i=t.text(),s=/[0-9]+,[0-9]+/.test(i);i=i.replace(/,/g,"");var o=/^[0-9]+$/.test(i),u=/^[0-9]+\.[0-9]+$/.test(i),a=u?(i.split(".")[1]||[]).length:0;for(var f=n;f>=1;f--){var l=parseInt(i/n*f);u&&(l=parseFloat(i/n*f).toFixed(a));if(s)while(/(\d+)(\d{3})/.test(l.toString()))l=l.toString().replace(/(\d+)(\d{3})/,"$1,$2");e.unshift(l)}t.data("counterup-nums",e);t.text("0");var c=function(){t.text(t.data("counterup-nums").shift());if(t.data("counterup-nums").length)setTimeout(t.data("counterup-func"),r.delay);else{delete t.data("counterup-nums");t.data("counterup-nums",null);t.data("counterup-func",null)}};t.data("counterup-func",c);setTimeout(t.data("counterup-func"),r.delay)};t.waypoint(i,{offset:"100%",triggerOnce:!0})})}})(jQuery);
</script>

</head>

<body>

<nav class="navbar navbar-inverse">
<div class="container-fluid">
    <div class="navbar-header">

<!--
   <a class="navbar-brand" rel="home" href="#" title="Buy Sell Rent Everyting">
        <img style="max-width:100px; margin-top: -7px;"
             src="<?php echo URL.'favicon.ico';?> >
    </a>

      <a class="navbar-brand" href="#">
        <img alt="Brand" src="...">
      </a>
-->

      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>

      <a class="navbar-brand" href="<?php echo URL; ?>index/index"><i class="fa fa-exchange"></i> Lexington Tutor Exchange</a>
    </div>

    <div class="collapse navbar-collapse" id="myNavbar">
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
        <li <?php if ($this->checkForActiveControllerAndAction($filename, "login/changeaccounttype")) { echo ' class="active" '; } ?>><a href="<?php echo URL; ?>login/changeaccounttype">Change Account Type</a></li>
        <li <?php if ($this->checkForActiveControllerAndAction($filename, "login/uploadavatar")) { echo ' class="active" '; } ?>><a href="<?php echo URL; ?>login/uploadavatar">Profile Picture</a></li>
        <li <?php if ($this->checkForActiveControllerAndAction($filename, "login/editusername")) { echo ' class="active" '; } ?>><a href="<?php echo URL; ?>login/editusername">Edit Name</a></li>
        <li <?php if ($this->checkForActiveControllerAndAction($filename, "login/edituseremail")) { echo ' class="active" '; } ?>><a href="<?php echo URL; ?>login/edituseremail">Edit Email</a></li>
        <li <?php if ($this->checkForActiveControllerAndAction($filename, "login/logout")) { echo ' class="active" '; } ?>><a href="<?php echo URL; ?>login/logout">Logout</a></li>
        </ul>
        </li>
        <?php endif; ?>

<!--
        <!-- for not logged in users 
            <?php if (Session::get('user_logged_in') == false):?>
                 <li <?php if ($this->checkForActiveControllerAndAction($filename, "login/index")) { echo ' class="active" '; } ?>><a href="<?php echo URL; ?>login/index">Login</a></li>
                  <li <?php if ($this->checkForActiveControllerAndAction($filename, "login/register")) { echo ' class="active" '; } ?>><a href="<?php echo URL; ?>login/register">Register</a></li>
            <?php endif; ?>
-->
      </ul>

<?php if (Session::get('user_logged_in') == false):?>
      <ul class="nav navbar-nav navbar-right">
	<li><a href="<?php echo URL; ?>login/index"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        <li><a href="<?php echo URL; ?>login/register"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      </ul>
 
<?php else: ?>
<ul class="nav navbar-nav navbar-right">
       <li><a href="<?php echo URL; ?>login/logout"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
 <?php endif; ?>

    </div>
  </div>

</nav>

