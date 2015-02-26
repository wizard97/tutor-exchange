
<script>
$(':radio').change(
  function(){
    $('.choice').text( this.value + ' stars' );
  } 
)
</script>

<div class="content">
    <h1>Create a Tutor Review</h1>

    <!-- echo out the system feedback (error and success messages) -->
    <?php $this->renderFeedbackMessages(); ?>

    <form  action="<?php echo URL."search/reviewtutor_action/".($this->tutor->user_id)?>" method="POST" enctype="multipart/form-data">

    <label for="to">Tutor name</label>
    <input id="to" type="text" size="30" required disabled value="<?php echo($this->tutor->fname." ".$this->tutor->lname);?>">


    <label for="name">Reviewer name</label>
    <input name="name" id="name" type="text" size="30" required disabled value="<?php echo(SESSION::get('fname')." ".SESSION::get('lname'));?>">


    <label for="anonymous">Make review anonymous</label>
    <input type="checkbox" name="anonymous" value="1">

    <label for="subject">Review title</label>
    <input name="subject" id="subject" type="text" size="30" required>

<label for="reviewer">Student or Parent?</label>
 <select name="reviewer" id="reviewer">
<option value="student">Student</option>
<option value="parent">Parent</option>
</select>

<label for="star-rating">Rating</label>
    <span class="star-rating" id ="star-rating">
  <input type="radio" name="rating" value="1"><i></i>
  <input type="radio" name="rating" value="2"><i></i>
  <input type="radio" name="rating" value="3"><i></i>
  <input type="radio" name="rating" value="4"><i></i>
  <input type="radio" name="rating" value="5"><i></i>
</span>


    <label for="message">Your review</label>
    <textarea name="message" id="message" rows="7" cols="60" maxlength="1500" required placeholder="Your review goes here."></textarea><br>
    <br>
    <input type="submit" value="Leave Review"/>
    </form>


</div>
