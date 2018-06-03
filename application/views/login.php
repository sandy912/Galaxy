<?php $this->load->view('header'); ?>

<header class="masthead mobile-panel">
      <div class="container">
        <div class="row">
          <div class="register-panel">
              <div class="panel-heading">
                  <h3 class="panel-title"><center>Login</center></h3>
              </div>
              <?php
            $success_msg= $this->session->flashdata('success_msg');
            $error_msg= $this->session->flashdata('error_msg');

                if($success_msg){
                  ?>
                  <div class="alert alert-success">
                    <?php echo $success_msg; ?>
                  </div>
                <?php
                }
                if($error_msg){
                  ?>
                  <div class="alert alert-danger">
                    <?php echo $error_msg; ?>
                  </div>
                  <?php
                }
                ?>

              <div class="panel-body">
                  <form role="form" method="post" action="<?php echo base_url('user/login_user'); ?>">
                    <label class="has-float-label">
                      <input id="user_email" name="user_email" type="email" placeholder="email@example.com" required/>
                      <span>Email Address</span>
                    </label>
                    <label class="has-float-label">
                      <input type="password"  id="user_password" name="user_password" placeholder="••••••••" pattern=".{8,30}" required/>
                      <span>Password</span>
                    </label>
                    <script src='https://www.google.com/recaptcha/api.js'></script>
                    <div class="g-recaptcha" data-sitekey="6LfKu1oUAAAAABAXHMF5GKqpmSGe_fxYiH-RuPr7"></div>
                    <br>
                    <input class="btn btn-outline btn-xl text-center" type="submit" value="login" name="login" >
                  </form>
                  <center>Not registered?<br><a href="<?php echo base_url('user/register'); ?>">Register here</a></center>
              </div>
          </div>
        </div>
      </div>
    </header>
<?php $this->load->view('footer'); ?>
