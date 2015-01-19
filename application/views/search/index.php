<div class="content">

    <!-- echo out the system feedback (error and success messages) -->
    <?php $this->renderFeedbackMessages(); ?>

<h1>Select your requirements:</h1>
<form id="form1" name="form1" action="<?php echo URL; ?>search/showresults" method="get">

    <label>
      <input name="elementary" type="checkbox" value="1" />
      Elementary School</label>
    <br />
    <label>
      <input name="middle" type="checkbox" value="1" />
      Middle School</label>
    <br />
    <label>
      <input name="high" type="checkbox" value="1" />
      High School</label>
    <br />
    <label>
      <input name="math" type="checkbox" value="1" />
      Math</label>
    <br />
    <label>
      <input name="science" type="checkbox" value="1" />
      Science</label>
    <br />
    <label>
      <input name="history" type="checkbox" value="1" />
      History</label>
    <br />
    <label>
      <input name="english" type="checkbox" value="1" />
      English</label>
    <br />
    <label>
      <input name="language" type="checkbox" value="1" />
      Foreign Language</label>
    <br />
    <label>
      <input name="music" type="checkbox" value="1"/>
      Music</label>
    <br />

  <input type="submit" name="Submit"/>
</form>


</div>