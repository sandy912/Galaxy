<?php
$signedin = $this->session->userdata('user_email');
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
        <center>
          <h5><b>Earn upto <h4 style="display: inline-block; font-weight: bold">1500$</h4> by inviting your friends</b></h5>
          Now refer your friends to earn more FFC, each successful refferal will get you <h5 style="display: inline-block; font-weight: bold">10$</h5> worth of FFC.
        </center>
        <br>
        <div style="position:relative;">
        <p id="reflink"><?php echo base_url('user/register/'); echo $this->session->userdata('user_secret'); ?></p><button class="copy-btn" onclick="copyToClipboard('#reflink')">Copy</button>
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
          a2a_config.linkurl = "<?php echo base_url('user/register/'); echo $this->session->userdata('user_secret'); ?>";
          </script>
          <script async src="https://static.addtoany.com/menu/page.js"></script>
          <!-- AddToAny END -->

          <div class="outer-box">
                <div class="box">
                  <p>Invited</p>
                  <span><?php echo $this->session->userdata('myrefferals'); ?></span>
                  <span>Users</span>
                </div>
                <div class="box">
                  <p>Earned</p>
                  <span><?php
                  $amount = (($this->session->userdata('myrefferals')*10)+10);

                    if( $amount > 1500 ) {
                      echo '1500';
                    }
                    else {
                      echo $amount;
                    }

                    ?>$</span>
                  <span>Worth FFC</span>
                </div>
          </div>
          <div class="cursor-banned withdraw-info">
            <label class="has-float-label cursor-banned">
              <input type="text" id="wallet" name="wallet" class="cursor-banned" placeholder="Wallet Address" style="font-size: 10px;" disabled/>
              <span class="cursor-banned" style="font-size: 13px;">Wallet Address</span>
            </label>
            <button class="copy-btn cursor-banned">Withdraw</button>
            <div class="cursor-banned">
              <small class="cursor-banned">On Airdrop ending date or on reaching 40k participants your earned $ will be converted to equivalent FFC based on coin value at distribution time. Then you can Withdraw coins to your wallet.</small>
            </div>
          </div>
          <small><b>Warning:</b> If we find any unwanted activities like multiple accounts, bots, etc.. Your earned $ will not be converted to FFC.</small>
          <br>
          <br>
          <p>In case if you missed to follow Firefly Coin on <a href="https://t.me/CoinFirefly" target="_blank">Telegram</a>, <a href="https://twitter.com/CoinFirefly" target="_blank">Twitter</a> and <a href="https://www.facebook.com/fireflycoin/" target="_blank">Facebook</a> during registration. Here are the links to do it now. Only those who follow our social media channels will be eligible for airdrop.</p>
        </div>
      </div>
    </div>
  </div>
</header>
<?php $this->load->view('footer'); ?>
<!--<a href="?php echo base_url('user/user_logout');?>" >  <button type="button" class="btn-primary">Logout</button></a>-->
