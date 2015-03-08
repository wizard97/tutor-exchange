<div class="container">
<div class="page-header">
  <h1>Login</h1>
</div>

<?php $this->renderFeedbackMessages(); ?>

    <div class="col-md-12">
      <div class="panel panel-default">
          <div class="panel-heading">
              <div class="panel-heading"><h3 class="panel-title">Login to Lexington Tutor Exchange</h3></div>
          </div>

          <div class="panel-body">
              
              <div class="row">
                  
                  <div class="col-md-6">
                      <div class="well">
                          
                          <form action="<?php echo URL; ?>login/login" method="post">
                              
                              <div class="form-group">
                                  <label for="username" class="control-label">Email</label>
                                  <input type="text" class="form-control" id="user_email" name="user_email" required title="Please enter you username" placeholder="example@example.com">
                                  <span class="help-block"></span>
                              </div>
                              
                              <div class="form-group">
                                  <label for="password" class="control-label">Password</label>
                                  <input type="password" class="form-control" id="user_password" name="user_password" required= title="Please enter your password">
                                  <span class="help-block"></span>
                              </div>
                              
                              <div class="checkbox">
                                  <label>
                                      <input type="checkbox" name="user_rememberme" id="remember"> Remember me
                                  </label>
                                  <p class="help-block">Keep me logged in (for two weeks)</p>
                              </div>
                              
                              <button type="submit" name="login" class="btn btn-success btn-block">Login</button>
                              <a href="<?php echo URL; ?>login/requestpasswordreset" class="btn btn-default btn-block">Forgot Password</a>
                          </form>
                      
                      </div>
                  </div>
                  
                  <div class="col-md-6">
                      <p class="lead">Why register?</p>
                      <ul class="list-unstyled" style="line-height: 2">
                          <li><span class="fa fa-check text-success"></span> Website created and run by Lexington High School students</li>
                          <li><span class="fa fa-check text-success"></span> Find student & professional tutor matches based on search criteria</li>
                          <li><span class="fa fa-check text-success"></span> View tutor's personal profiles and message them</li>
                          <li><span class="fa fa-check text-success"></span> Register as a tutor yourself (both professional & student tutors are welcome)</li>
                          <li><span class="fa fa-check text-success"></span> It's <span class="text-success">FREE</span> <small>(except for professional tutors)</small></li>
                          <li><a href="<?php echo URL; ?>about/index"><u>About us</u></a></li>
                      </ul>
                      <p><a href="<?php echo URL; ?>login/register" class="btn btn-info btn-block">Register now!</a></p>
                  </div>
              </div>
          
          </div>
      </div>
  </div>
  </div>