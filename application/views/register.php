<?php $this->load->view('header'); ?>

<header class="masthead mobile-panel">
  <div class="container">
    <div class="row">
      <div class="register-panel register">
        <div class="register-banner">

        </div>
        <div class="panel-heading">
          <h3 class="panel-title">
            <center>Register For Airdrop</center>
          </h3>
        </div>
        <div class="panel-body">

          <?php
                  $error_msg=$this->session->flashdata('error_msg');
                  if($error_msg){
                    ?>
                    <div class="alert alert-danger">
                      <?php echo $error_msg; ?>
                    </div>
                  <?php
                  }
                   ?>

            <form role="form" method="post" action="<?php echo base_url('user/register_user'); ?>" >
              <label class="has-float-label">
                <input id="user_name" name="user_name" type="text" placeholder="John Doe" pattern="^[a-zA-Z][a-zA-Z0-9 ]{1,20}$" title="Enter your name" required/>
                <span>Full Name</span>
              </label>

              <label class="has-float-label">
                <input id="user_email" name="user_email" type="email" placeholder="email@example.com" required/>
                <span>Email Address</span>
              </label>

            <label class="has-float-label">
              <input id="user_id" name="user_id" type="text" placeholder="@johndoe" required/>
              <span>Telegram username</span>
            </label>
            <div>
              You must follow <a href="https://t.me/CoinFirefly" target="_blank">Firefly Coin</a> on Telegram and stay untill airdrop to receive coins.<br />
            </div>
            <label class="has-float-label">
              <input id="user_twitter" name="user_twitter" type="text" placeholder="@johndoe" pattern="^[A-Za-z0-9_\.@]{1,25}$" title="Enter twitter username. eg: @xxxxxx" required/>
              <span>Twitter username</span>
            </label>
            <div>
              You must follow <a href="https://twitter.com/CoinFirefly" target="_blank">Firefly Coin</a> on Twitter and retweet pinned post to receive 4$ worth of coins.<br />
            </div>
            <label class="has-float-label">
              <input id="user_facebook" name="user_facebook" type="url" placeholder="https://www.facebook.com/john.doe.106" required/>
              <span>Facebook profile url</span>
            </label>
            <div>
              You must Like <a href="https://www.facebook.com/fireflycoin/" target="_blank">Firefly Coin</a> Page on Facebook and share latest post to receive 4$ worth of coins.<br />
            </div>

            <label class="has-float-label">
              <input type="password"  id="user_password" name="user_password" placeholder="••••••••" pattern=".{8,30}" required/>
              <span>Password</span>
            </label>
            <p>I hereby acknowledge that I followed Firefly Coin on <a href="https://t.me/CoinFirefly" target="_blank">Telegram</a>, <a href="https://twitter.com/CoinFirefly" target="_blank">Twitter</a> and <a href="https://www.facebook.com/fireflycoin/" target="_blank">Facebook</a>.</p>
            <script src='https://www.google.com/recaptcha/api.js'></script>
            <div class="capchaenclose">
            <div class="g-recaptcha" data-sitekey="6LfKu1oUAAAAABAXHMF5GKqpmSGe_fxYiH-RuPr7"></div></div><br>
            <input class="btn btn-outline btn-xl text-center" type="submit" value="Register" name="register" />

            </form>
            <center>Already registered?<br><a href="<?php echo base_url('user/login'); ?>">Login here</a></center>
            <style>
            @media (min-width:360px ) {
              .capchaenclose {
                padding-left: 35px;
              }
            }
            </style>
        </div>
      </div>
    </div>
  </div>
  </div>
</header>
<?php $this->load->view('footer'); ?>
