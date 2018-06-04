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
          <?php } ?>

            <form role="form" method="post" action="<?php echo base_url('user/register_user'); ?>" >

              <label class="has-float-label">
                <input id="user_email" name="user_email" type="email" placeholder="email@example.com" required/>
                <span>Email Address</span>
              </label>

              <label class="has-float-label">
                <input id="user_erc20" name="user_erc20" type="text" placeholder="0x.....86" required/>
                <span>ERC-20 Wallet Address</span>
              </label>

              <label class="has-float-label">
                <input type="text"  id="user_country" name="user_country" placeholder="xxxxx" required/>
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
