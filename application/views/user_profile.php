<?php
$signedin = $this->session->userdata('email');
$telegram = $this->session->userdata('telegram');
$twitter = $this->session->userdata('twitter');
$facebook = $this->session->userdata('facebook');

// if(!$twitter == ("NULL" || NULL) {$user_twitter = $twitter}
// if(!$facebook == ("NULL" || NULL) {$user_facebook = $facebook}

if(!$signedin){
  redirect('user/login');
}
 ?>
<?php $this->load->view('header'); ?>

<header class="masthead mobile-panel">
  <div class="container">
    <div class="row">
      <div class="register-panel" style="max-width: 550px;">
        <h4 class="text-center"><b>Thank you for signing up for Airdrop!</b></h4>
        <h5 class="text-center cgt-balance">Your Balance: <span><?php
          $amount = (($this->session->userdata('myrefferals')*10)+20);
          if( $amount > 1500 ) { echo '1500';}
          else { echo $amount; }
          ?>$ CGT </span></h5>
        <p>To earn more CGT tokens complete the below social media tasks and reffer your friends.</p>

        <form role="form" method="post" action="<?php echo base_url('user/telegram'); ?>">
          <div class="cgt-form">
            <input class="cgt-input" id="user_telegram" name="user_telegram" type="text" <?php if($telegram) { echo "value =".$telegram; } ?> placeholder="Telegram Username" required/>
            <input class="cgt-form-submit <?php if($telegram) { echo "green"; } ?>" type="submit" value="<?php if($telegram) { echo "✓"; } else {echo "Get 20$";} ?>" >
          </div>
        </form>
        <br>
        <form role="form" method="post" action="<?php echo base_url('user/twitter'); ?>">
          <div class="cgt-form">
            <input class="cgt-input" id="user_twitter" name="user_twitter" type="url" <?php if($twitter) { echo "value =".$twitter; } ?> placeholder="Retweet link" required/>
            <input class="cgt-form-submit <?php if($twitter) { echo "green"; } ?>" type="submit" value="<?php if($twitter) { echo "✓"; } else {echo "Get 20$";} ?>" >
          </div>
        </form>
        <br>
        <form role="form" method="post" action="<?php echo base_url('user/facebook'); ?>">
          <div class="cgt-form">
            <input class="cgt-input" id="user_facebook" name="user_facebook" type="url" <?php if($facebook) { echo "value =".$facebook; } ?> placeholder="Facebook Profile link" required/>
            <input class="cgt-form-submit <?php if($facebook) { echo "green"; } ?>" type="submit" value="<?php if($facebook) { echo "✓"; } else {echo "Get 20$";} ?>" >
          </div>
        </form>
        <br>

        <div style="position:relative;">
        <p id="reflink"><?php echo base_url('user/register/'); echo $this->session->userdata('refferal_id'); ?></p><button class="copy-btn" onclick="copyToClipboard('#reflink')">Copy</button>
        </div>
          <!-- AddToAny BEGIN -->
          <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
            <span>Share on social media:</span>
            <!-- <a class="a2a_dd" href="https://www.addtoany.com/share"></a>-->
            <a class="a2a_button_facebook"></a>
            <a class="a2a_button_twitter"></a>
            <a class="a2a_button_whatsapp"></a>
            <a class="a2a_button_telegram"></a>
          </div>
          <script>
          var a2a_config = a2a_config || {};
          a2a_config.linkname = "🔥Airdrop Firefly Coin🔥 ♦ GET $10 worth FFC coin for Free!! ♦ FFC team decided to relauch the old currency by adding multiple features like Machine Learning(ML) smart contracts, Unique ID, 10,000 TPS😍 #airdrops #airdrop #FFC @CoinFirefly ";
          a2a_config.linkurl = "<?php echo base_url('user/register/'); echo $this->session->userdata('refferal_id'); ?>";
          </script>
          <script async src="https://static.addtoany.com/menu/page.js"></script>
          <!-- AddToAny END -->

          <div class="outer-box">
                <div class="box">
                  <p>Invited</p>
                  <span><?php echo $this->session->userdata('myrefferals'); ?></span>
                  <span>Users</span>
                </div>
          </div>
          <small><b>Warning:</b> If we find any unwanted activities like multiple accounts, bots, etc.. Your earned $ will not be converted to FFC.</small>
          <br>
          <p>In case if you missed to follow Firefly Coin on <a href="https://t.me/CoinFirefly" target="_blank">Telegram</a>, <a href="https://twitter.com/CoinFirefly" target="_blank">Twitter</a> and <a href="https://www.facebook.com/fireflycoin/" target="_blank">Facebook</a> during registration. Here are the links to do it now. Only those who follow our social media channels will be eligible for airdrop.</p>
        </div>
      </div>
    </div>
  </div>
</header>
<?php $this->load->view('footer'); ?>
<!--<a href="?php echo base_url('user/user_logout');?>" >  <button type="button" class="btn-primary">Logout</button></a>-->
