<script>
    (function(e){var t,o={className:"autosizejs",append:"",callback:!1,resizeDelay:10},i='<textarea tabindex="-1" style="position:absolute; top:-999px; left:0; right:auto; bottom:auto; border:0; padding: 0; -moz-box-sizing:content-box; -webkit-box-sizing:content-box; box-sizing:content-box; word-wrap:break-word; height:0 !important; min-height:0 !important; overflow:hidden; transition:none; -webkit-transition:none; -moz-transition:none;"/>',n=["fontFamily","fontSize","fontWeight","fontStyle","letterSpacing","textTransform","wordSpacing","textIndent"],s=e(i).data("autosize",!0)[0];s.style.lineHeight="99px","99px"===e(s).css("lineHeight")&&n.push("lineHeight"),s.style.lineHeight="",e.fn.autosize=function(i){return this.length?(i=e.extend({},o,i||{}),s.parentNode!==document.body&&e(document.body).append(s),this.each(function(){function o(){var t,o;"getComputedStyle"in window?(t=window.getComputedStyle(u,null),o=u.getBoundingClientRect().width,e.each(["paddingLeft","paddingRight","borderLeftWidth","borderRightWidth"],function(e,i){o-=parseInt(t[i],10)}),s.style.width=o+"px"):s.style.width=Math.max(p.width(),0)+"px"}function a(){var a={};if(t=u,s.className=i.className,d=parseInt(p.css("maxHeight"),10),e.each(n,function(e,t){a[t]=p.css(t)}),e(s).css(a),o(),window.chrome){var r=u.style.width;u.style.width="0px",u.offsetWidth,u.style.width=r}}function r(){var e,n;t!==u?a():o(),s.value=u.value+i.append,s.style.overflowY=u.style.overflowY,n=parseInt(u.style.height,10),s.scrollTop=0,s.scrollTop=9e4,e=s.scrollTop,d&&e>d?(u.style.overflowY="scroll",e=d):(u.style.overflowY="hidden",c>e&&(e=c)),e+=w,n!==e&&(u.style.height=e+"px",f&&i.callback.call(u,u))}function l(){clearTimeout(h),h=setTimeout(function(){var e=p.width();e!==g&&(g=e,r())},parseInt(i.resizeDelay,10))}var d,c,h,u=this,p=e(u),w=0,f=e.isFunction(i.callback),z={height:u.style.height,overflow:u.style.overflow,overflowY:u.style.overflowY,wordWrap:u.style.wordWrap,resize:u.style.resize},g=p.width();p.data("autosize")||(p.data("autosize",!0),("border-box"===p.css("box-sizing")||"border-box"===p.css("-moz-box-sizing")||"border-box"===p.css("-webkit-box-sizing"))&&(w=p.outerHeight()-p.height()),c=Math.max(parseInt(p.css("minHeight"),10)-w||0,p.height()),p.css({overflow:"hidden",overflowY:"hidden",wordWrap:"break-word",resize:"none"===p.css("resize")||"vertical"===p.css("resize")?"none":"horizontal"}),"onpropertychange"in u?"oninput"in u?p.on("input.autosize keyup.autosize",r):p.on("propertychange.autosize",function(){"value"===event.propertyName&&r()}):p.on("input.autosize",r),i.resizeDelay!==!1&&e(window).on("resize.autosize",l),p.on("autosize.resize",r),p.on("autosize.resizeIncludeStyle",function(){t=null,r()}),p.on("autosize.destroy",function(){t=null,clearTimeout(h),e(window).off("resize",l),p.off("autosize").off(".autosize").css(z).removeData("autosize")}),r())})):this}})(window.jQuery||window.$);

    var __slice=[].slice;(function(e,t){var n;n=function(){function t(t,n){var r,i,s,o=this;this.options=e.extend({},this.defaults,n);this.$el=t;s=this.defaults;for(r in s){i=s[r];if(this.$el.data(r)!=null){this.options[r]=this.$el.data(r)}}this.createStars();this.syncRating();this.$el.on("mouseover.starrr","span",function(e){return o.syncRating(o.$el.find("span").index(e.currentTarget)+1)});this.$el.on("mouseout.starrr",function(){return o.syncRating()});this.$el.on("click.starrr","span",function(e){return o.setRating(o.$el.find("span").index(e.currentTarget)+1)});this.$el.on("starrr:change",this.options.change)}t.prototype.defaults={rating:void 0,numStars:5,change:function(e,t){}};t.prototype.createStars=function(){var e,t,n;n=[];for(e=1,t=this.options.numStars;1<=t?e<=t:e>=t;1<=t?e++:e--){n.push(this.$el.append("<span class='glyphicon .glyphicon-star-empty'></span>"))}return n};t.prototype.setRating=function(e){if(this.options.rating===e){e=void 0}this.options.rating=e;this.syncRating();return this.$el.trigger("starrr:change",e)};t.prototype.syncRating=function(e){var t,n,r,i;e||(e=this.options.rating);if(e){for(t=n=0,i=e-1;0<=i?n<=i:n>=i;t=0<=i?++n:--n){this.$el.find("span").eq(t).removeClass("glyphicon-star-empty").addClass("glyphicon-star")}}if(e&&e<5){for(t=r=e;e<=4?r<=4:r>=4;t=e<=4?++r:--r){this.$el.find("span").eq(t).removeClass("glyphicon-star").addClass("glyphicon-star-empty")}}if(!e){return this.$el.find("span").removeClass("glyphicon-star").addClass("glyphicon-star-empty")}};return t}();return e.fn.extend({starrr:function(){var t,r;r=arguments[0],t=2<=arguments.length?__slice.call(arguments,1):[];return this.each(function(){var i;i=e(this).data("star-rating");if(!i){e(this).data("star-rating",i=new n(e(this),r))}if(typeof r==="string"){return i[r].apply(i,t)}})}})})(window.jQuery,window);$(function(){return $(".starrr").starrr()})

    $(function(){

      $('#new-review').autosize({append: "\n"});

      var reviewBox = $('#post-review-box');
      var newReview = $('#new-review');
      var openReviewBtn = $('#open-review-box');
      var closeReviewBtn = $('#close-review-box');
      var ratingsField = $('#ratings-hidden');

      openReviewBtn.click(function(e)
      {
        reviewBox.slideDown(400, function()
        {
            $('#new-review').trigger('autosize.resize');
            newReview.focus();
        });
        openReviewBtn.fadeOut(100);
        closeReviewBtn.show();
    });

      closeReviewBtn.click(function(e)
      {
        e.preventDefault();
        reviewBox.slideUp(300, function()
        {
            newReview.focus();
            openReviewBtn.fadeIn(200);
        });
        closeReviewBtn.hide();

    });

      $('.starrr').on('starrr:change', function(e, value){
        ratingsField.val(value);
    });
  });
</script>
<style>
 .animated {
    -webkit-transition: height 0.2s;
    -moz-transition: height 0.2s;
    transition: height 0.2s;
}

.stars
{
    margin: 20px 0;
    font-size: 24px;
    color: #d17581;
}
</style>

<div class="container">
    <div class="page-header">
      <h1><?php echo $this->tutor->fname.' '.$this->tutor->lname;?></h1>
  </div>

  <?php $this->renderFeedbackMessages(); ?>

  <div class="row">
    <form action="<?php echo(URL . 'tutor/index_action');?>" method="POST">

        <div class="col-md-7">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <i class="fa fa-dashboard"></i> Tutoring Dashboard
                </div>

                <div class="panel-body">

                    <div class="btn-group btn-group-justified" role="group">
                        <div class="btn-group" role="group">
                          <button type="submit" name="actions[]" value="resume_pause" class="btn btn-danger col-sm-3">
                              <?php if($this->tutor->tutor_active != 0) echo '<i class="fa fa-pause"></i><br>Pause Tutoring'; else echo '<i class="fa fa-play"></i><br>Resume Tutoring';?>
                          </button>
                      </div>
                      <div class="btn-group" role="group">
                          <button type="submit" name="actions[]" value="refresh" class="btn btn-warning col-sm-3">
                            <i class="fa fa-refresh"></i><br>
                            Renew Listing
                        </button>
                    </div>
                    <div class="btn-group" role="group">
                        <a href="<?php echo(URL . 'tutor/edittutor');?>" class="btn btn-success col-sm-3">
                            <i class="fa fa-edit"></i><br>
                            Edit Profile
                        </a>
                    </div>
                    <div class="btn-group" role="group">
                        <a href="<?php echo(URL . 'login/uploadavatar');?>" class="btn btn-primary col-sm-3">
                            <i class="fa fa-picture-o"></i><br>
                            Upload Picture
                        </a>
                    </div>
                </div>
                <br>
                <ul class="list-group">
                    <li class="list-group-item"><i class="fa fa-flash"></i> Currently Tutoring:<span class="pull-right text-muted"><?php if($this->tutor->tutor_active != 0) echo 'Yes'; else echo 'No';?></span></li>
                    <li class="list-group-item"><i class="fa fa-clock-o"></i> Listing Expiration:<span class="pull-right text-muted"><?php if(empty($this->tutor->profile_expiration)){echo "N/A";} else {echo date("m/d/y", $this->tutor->profile_expiration); if($this->tutor->profile_expiration < time() && $this->tutor->tutor_active == 0) {echo " (expired)";}}?></span></li>
                    <li class="list-group-item"><i class="fa fa-eye"></i> Profile Views:<span class="pull-right text-muted"><?php echo $this->tutor->profile_views;?></span></li>
                    <li class="list-group-item"><i class="fa fa-envelope"></i> Contacted:<span class="pull-right text-muted"><?php echo $this->tutor->contact_num;?> time(s)</span></li>
                </ul>

            </div>

        </div>

    </div>

</form>
</div>



<div class="row">

    <div class="col-md-3">

        <div class="row">
            <img src="<?php echo $this->tutor->user_avatar_link;?>" width="300" height="300" class="img-thumbnail img-responsive center-block">
        </div>

        <div class="row">
            <div class="text-center">
                <button type="button" class="btn btn-success">Save me!</button>  <a class="btn btn-primary" href="<?php echo(URL . 'search/emailtutor/'.$this->tutor->user_id);?>" role="button"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Contact Me</a>
            </div>
            <br>
        </div>

    </div>

    <div class="col-md-9">
        <div class="alert alert-info">
            <h3>About Me:</h3>
            <p><?php echo nl2br($this->tutor->about_me);?></p>
        </div>
    </div>

</div>


<div class="row">

    <div class="col-md-3">

        <div class="row">
            <ul class="list-group">
                <li class="list-group-item text-muted list-group-item-success" contenteditable="false"><?php if($this->tutor->user_account_type == 2) echo '<i class="fa fa-user"></i> Student Tutor'; elseif ($this->tutor->user_account_type == 3) echo ('<i class="fa fa-user-plus"></i> Professional Tutor');?></li>
                <li class="list-group-item text-right"><span class="pull-left"><i class="fa fa-birthday-cake"></i> <strong>Age:</strong></span> <?php echo $this->tutor->age;?></li>
                <li class="list-group-item text-right"><span class="pull-left"><i class="fa fa-graduation-cap"></i> <strong>Grade:</strong></span> <?php echo $this->tutor->grade;?></li>
                <li class="list-group-item text-right"><span class="pull-left"><i class="fa fa-money"></i> <strong>Rate:</strong></span> $<?php echo $this->tutor->rate;?></li>
                <li class="list-group-item text-right"><span class="pull-left"><i class="fa fa-clock-o"></i> <strong>Listing Expiration:</strong></span> <?php echo date("m/d/y", $this->tutor->profile_expiration);?></li>
                <li class="list-group-item text-right"><span class="pull-left"><i class="fa fa-sign-in"></i> <strong>Last Login:</strong></span> <?php echo date("m/d/y", $this->tutor->user_last_login_timestamp);?></li>
                <li class="list-group-item text-right"><span class="pull-left"><i class="fa fa-exchange"></i> <strong>Joined:</strong></span> <?php echo date("m/d/y", $this->tutor->user_creation_timestamp);?></li>

            </ul>
        </div>

    </div>


    <div class="col-md-9">

        <div class="panel panel-default">
            <div class="panel-heading">Tutoring Subjects</div>
            <div class="panel-body">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#Math">Math</a></li>
                    <li><a data-toggle="tab" href="#Science">Science</a></li>
                    <li><a data-toggle="tab" href="#SocialStudies">Social Studies</a></li>
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">Language <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a data-toggle="tab" href="#French">French</a></li>
                            <li><a data-toggle="tab" href="#Spanish">Spanish</a></li>
                        </ul>
                    </li>
                    <li><a data-toggle="tab" href="#Music">Music</a></li>
                </ul>


                <div class="tab-content">

                    <div id="Math" class="tab-pane fade in active">
                        <h3>Math Tutoring</h3>

                        <?php if(!empty($this->tutor->highest_math_name)):?>
                            <strong>Highest Completed Math Class: </strong><?php echo($this->tutor->highest_math_name); if(!empty($this->tutor->highest_math_level)) echo(' ('.$this->tutor->highest_math_level.')'); ?>
                        <?php endif;?>
                        <table class="table table-striped">
                            <caption>I can tutor the following classes:</caption>
                            <tr>
                                <th>Classes</th>
                                <th>Highest Level I Can Tutor</th>
                            </tr>

                            <?php foreach ($this->math_classes as $db_name=>$class)
                            if($this->tutor->{$db_name} > 0)
                            {
                                echo '<tr><td>'.$class->name.'</td>';
                                echo '<td>'.$class->levels[(int)$this->tutor->{$db_name}].'</td></tr>';
                            }
                            ?>
                        </table>

                    </div>



                    <div id="SocialStudies" class="tab-pane fade">
                        <h3>Social Studies Tutoring</h3>

                        <?php if(!empty($this->tutor->highest_social_name)):?>
                            <strong>Highest Completed Social Studies Class: </strong><?php echo($this->tutor->highest_social_name); if(!empty($this->tutor->highest_social_level)) echo(' ('.$this->tutor->highest_social_level.')'); ?>
                        <?php endif;?>
                        <table class="table table-striped">
                            <caption>I can tutor the following classes:</caption>
                            <tr>
                                <th>Classes</th>
                                <th>Highest Level I Can Tutor</th>
                            </tr>

                            <?php foreach ($this->social_classes as $db_name=>$class)
                            if($this->tutor->{$db_name} > 0)
                            {
                                echo '<tr><td>'.$class->name.'</td>';
                                echo '<td>'.$class->levels[(int)$this->tutor->{$db_name}].'</td></tr>';
                            }
                            ?>
                        </table>

                    </div>

                    <div id="Science" class="tab-pane fade">
                        <h3>Science Tutoring</h3>

                        <?php if(!empty($this->tutor->highest_science_name)):?>
                            <strong>Highest Completed Science Class: </strong><?php echo($this->tutor->highest_science_name); if(!empty($this->tutor->highest_science_level)) echo(' ('.$this->tutor->highest_science_level.')'); ?>
                        <?php endif;?>
                        <table class="table table-striped">
                            <caption>I can tutor the following classes:</caption>
                            <tr>
                                <th>Classes</th>
                                <th>Highest Level I Can Tutor</th>
                            </tr>

                            <?php foreach ($this->science_classes as $db_name=>$class)
                            if($this->tutor->{$db_name} > 0)
                            {
                                echo '<tr><td>'.$class->name.'</td>';
                                echo '<td>'.$class->levels[(int)$this->tutor->{$db_name}].'</td></tr>';
                            }
                            ?>
                        </table>

                    </div>

                    <div id="French" class="tab-pane fade">
                        <h3>French Tutoring</h3>

                        <?php if(!empty($this->tutor->highest_french_name)):?>
                            <strong>Highest Completed French Class: </strong><?php echo($this->tutor->highest_french_name); if(!empty($this->tutor->highest_french_level)) echo(' ('.$this->tutor->highest_french_level.')'); ?>
                        <?php endif;?>
                        <table class="table table-striped">
                            <caption>I can tutor the following classes:</caption>
                            <tr>
                                <th>Classes</th>
                                <th>Highest Level I Can Tutor</th>
                            </tr>

                            <?php foreach ($this->french_classes as $db_name=>$class)
                            if($this->tutor->{$db_name} > 0)
                            {
                                echo '<tr><td>'.$class->name.'</td>';
                                echo '<td>'.$class->levels[(int)$this->tutor->{$db_name}].'</td></tr>';
                            }
                            ?>
                        </table>
                    </div>

                    <div id="Spanish" class="tab-pane fade">

                        <h3>Spanish Tutoring</h3>

                        <?php if(!empty($this->tutor->highest_spanish_name)):?>
                            <strong>Highest Completed Spanish Class: </strong><?php echo($this->tutor->highest_spanish_name); if(!empty($this->tutor->highest_spanish_level)) echo(' ('.$this->tutor->highest_spanish_level.')'); ?>
                        <?php endif;?>
                        <table class="table table-striped">
                            <caption>I can tutor the following classes:</caption>
                            <tr>
                                <th>Classes</th>
                                <th>Highest Level I Can Tutor</th>
                            </tr>

                            <?php foreach ($this->spanish_classes as $db_name=>$class)
                            if($this->tutor->{$db_name} > 0)
                            {
                                echo '<tr><td>'.$class->name.'</td>';
                                echo '<td>'.$class->levels[(int)$this->tutor->{$db_name}].'</td></tr>';
                            }
                            ?>
                        </table>
                    </div>           



                    <div id="Music" class="tab-pane fade">
                        <h3>Music</h3>
                        <?php if(!empty($this->tutor->instrument)):?>
                            <ul class="list-group">
                                <li class="list-group-item text-right list-group-item-info"><span class="pull-left"><strong class="">I tutor:</strong></span> <?php echo ucfirst($this->tutor->instrument);?></li>
                                <li class="list-group-item text-right"><span class="pull-left"><strong class="">My Experience:</strong></span> <?php echo $this->tutor->music_years.' years';?></li>
                                <li class="list-group-item text-right"><span class="pull-left"><strong class="">Max Student Experience:</strong></span>
                                    <?php 
                                    switch($this->tutor->music_level)
                                    {
                                        case 1:
                                        echo "None";
                                        break;
                                        case 2:
                                        echo "Beginning (0-3 years)";
                                        break;
                                        case 3:
                                        echo "Intermediate (3-6 years)";
                                        break;
                                        case 4:
                                        echo "Advanced (6+ years)";
                                        break;
                                    }
                                    ?>
                                </li>
                            </ul>
                        <?php endif;?>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-md-12">
        <div class="well">
            <h3>Tutor Reviews <small>They now work!</small></h3>
            <span style="font-size: 24px" class="text-nowrap">
                <?php for ($i = 0; $i < $this->reviews['review_stats']->star_count; $i++) echo '<i style="color: #FEC601" class="fa fa-star"></i>';
                if ($this->reviews['review_stats']->half_star)
                {
                    echo '<i style="color: #FEC601" class="fa fa-star-half-o"></i>';
                    for ($i = 0; $i < 4 - $this->reviews['review_stats']->star_count; $i++) echo '<i style="color: #FEC601" class="fa fa-star-o"></i>';
                }
            else for ($i = 0; $i < 5 - $this->reviews['review_stats']->star_count; $i++) echo '<i style="color: #FEC601" class="fa fa-star-o"></i>';
            echo ' (<span class="text-primary">'.$this->reviews['review_stats']->review_number.'</span>)';
            ?>
        </span>
        
        <p class="text-muted"><?php if ($this->reviews['review_stats']->avg_rating) echo $this->reviews['review_stats']->avg_rating.' out of 5 stars'; else echo 'No Reviews';?></p>
        <div class="text-left">
            <a href="#reviews-anchor" id="open-review-box" class="btn btn-success">Leave a Review</a>
        </div>
        <div class="row" id="post-review-box" style="display:none;">
            <div class="col-md-12">
                <hr style="height:1px;border:none;color:#333;background-color:#333;">
                <form accept-charset="UTF-8" action="<?php echo URL.'search/reviewtutor_action/'.$this->tutor->user_id?>" method="post">
                    <div class="row">
                        <div class="col-md-5 form-group">
                            <label for="review_title">Review Title</label>
                            <input type="text" class="form-control" id="review_title" name="review_title" maxlength="100" placeholder="100 characters max" required>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-12">
                            <label>Who are you?</label>
                            <br>
                            <label class="radio-inline"><input type="radio" id="reviewer-type" name="reviewer" value="student" checked>Student</label>
                            
                            <label class="radio-inline"><input type="radio" id="reviewer-type" name="reviewer" value="parent">Parent</label>
                            

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="anonymous" value="1">
                                    Make review anonymous</label>
                                </div>
                                <div class="text-left text-nowrap">
                                    <div class="stars starrr" data-rating="0"></div>
                                </div>

                                <input id="ratings-hidden" name="rating" type="hidden"> 
                                <textarea class="form-control animated" cols="50" id="new-review" name="message" maxlength="5000" placeholder="Enter your review here..." rows="5"></textarea>
                                <br>
                                <div class="text-right">
                                    <a class="btn btn-danger btn-sm" href="#" id="close-review-box" style="display:none; margin-right: 10px;">
                                        <span class="glyphicon glyphicon-remove"></span> Cancel</a>
                                        <button class="btn btn-success btn-lg" type="submit">Save</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <hr style="height:1px;border:none;color:#333;background-color:#333;">


                <?php if ($this->reviews['review_stats']->has_reviews)
                {
                    foreach($this->reviews['all_reviews'] as $review_object)
                    {
                        ?>
                        <div class="row"><div class="col-md-12">
                            <span style="font-size: 20px" class="text-nowrap">
                                <?php for ($i = 0; $i < $review_object->rating; $i++) echo '<i style="color: #FEC601" class="fa fa-star"></i>';
                                for ($i = 0; $i < 5 - $review_object->rating; $i++) echo '<i style="color: #FEC601" class="fa fa-star-o"></i>';
                                    ?>
                            </span>
                            <strong><?php echo $review_object->review_title;?></strong>
                            
                            <p class="text-muted">By <span class="text-primary"><?php echo $review_object->reviewer_name.' ('.ucfirst($review_object->reviewer).')'; ?></span> on <?php echo date("M d, Y", $review_object->time);?></p>
                            <p><?php echo nl2br($review_object->message);?></p>
                        </div></div><hr>
                        <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>


