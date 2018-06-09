<?php
$signedin = $this->session->userdata('email');
$telegram = $this->session->userdata('telegram');
$twitter = $this->session->userdata('twitter');
$facebook = $this->session->userdata('facebook');
$youtube = $this->session->userdata('youtube');

  $ref_amount = ($this->session->userdata('myrefferals')*30)+20;
  if($telegram) {
    $ref_amount = $ref_amount + 20;
  }
  if($twitter) {
    $ref_amount = $ref_amount + 20;
  }
  if($facebook) {
    $ref_amount = $ref_amount + 20;
  }
  if($youtube) {
    $ref_amount = $ref_amount + 20;
  }

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
        <h5 class="text-center cgt-balance">Your Balance: <span><?php echo $ref_amount; ?>$ CGT </span></h5>
        <p>To get more CGT tokens on Airdrop, please complete the below social media tasks and reffer your friends.</p>
        <fieldset>
          <legend>Social Tasks</legend>
        <form role="form" method="post" action="<?php echo base_url('user/telegram'); ?>">
          <p class="cgt-follow-info">Follow cryto galaxy and galaxy foundation on telegram</p>
          <div class="cgt-form">
            <input class="cgt-input" id="user_telegram" name="user_telegram" type="text" <?php if($telegram) { echo "value =".$telegram; } ?> placeholder="Your Telegram Username" required/>
            <input class="cgt-form-submit <?php if($telegram) { echo "green"; } ?>" type="submit" value="<?php if($telegram) { echo "✓"; } else {echo "Get 20$";} ?>" >
          </div>
        </form>
        <hr>
        <form role="form" method="post" action="<?php echo base_url('user/twitter'); ?>">
          <p class="cgt-follow-info">Follow cryto galaxy and galaxy foundation on twitter</p>
          <div class="cgt-form">
            <input class="cgt-input" id="user_twitter" name="user_twitter" type="url" <?php if($twitter) { echo "value =".$twitter; } ?> placeholder="Your Twitter Username" required/>
            <input class="cgt-form-submit <?php if($twitter) { echo "green"; } ?>" type="submit" value="<?php if($twitter) { echo "✓"; } else {echo "Get 20$";} ?>" >
          </div>
        </form>
        <hr>
        <form role="form" method="post" action="<?php echo base_url('user/facebook'); ?>">
          <p class="cgt-follow-info">Follow cryto galaxy and galaxy foundation on facebook</p>
          <div class="cgt-form">
            <input class="cgt-input" id="user_facebook" name="user_facebook" type="url" <?php if($facebook) { echo "value =".$facebook; } ?> placeholder="Your Facebook Profile link" required/>
            <input class="cgt-form-submit <?php if($facebook) { echo "green"; } ?>" type="submit" value="<?php if($facebook) { echo "✓"; } else {echo "Get 20$";} ?>" >
          </div>
        </form>
        <hr>
        <form role="form" method="post" action="<?php echo base_url('user/youtube'); ?>">
          <p class="cgt-follow-info">Follow cryto galaxy on  youtube</p>
          <div class="cgt-form">
            <input class="cgt-input" id="user_youtube" name="user_youtube" type="text" <?php if($youtube) { echo "value =".$youtube; } ?> placeholder="Youtube Username/Profile link" required/>
            <input class="cgt-form-submit <?php if($youtube) { echo "green"; } ?>" type="submit" value="<?php if($youtube) { echo "✓"; } else {echo "Get 20$";} ?>" >
          </div>
        </form>
        <br>
      </fieldset>
        <!-- <script src="https://apis.google.com/js/platform.js"></script>
        <div class="g-ytsubscribe" data-channelid="UCqpP9lUoDZTxSbjzRp_xn9A" data-layout="full" data-theme="dark" data-count="hidden"></div> -->
        <br>
          <fieldset>
            <legend>Refer your friends</legend>
            <p style="margin-bottom: 10px;">You will get 30$ of CGT per sucessfull refferal</p>
            <div style="position:relative;">
              <p id="reflink" class="cgt-input"><?php echo base_url('user/register/'); echo $this->session->userdata('refferal_id'); ?></p><button class="cgt-form-submit copyToClipboard" onclick="copyToClipboard('#reflink')">Copy</button>
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
            <h4 class="invited-users">Invited Users: <span><?php echo $this->session->userdata('myrefferals'); ?></span></h4>
            </fieldset>
            <blockquote class="twitter-tweet" data-lang="en"><p lang="en" dir="ltr">🌟🌟FFC is excited to announce our first airdrop campaign🌟🌟<br><br>♦ GET $10 worth FFC coins for Free!!!<br>💰Join Now- <a href="https://t.co/aSkQkeYbZL">https://t.co/aSkQkeYbZL</a><br><br>💥FFC is the worlds first blockchain to have <a href="https://twitter.com/hashtag/Machine_learning?src=hash&amp;ref_src=twsrc%5Etfw">#Machine_learning</a> SmartContract features.<a href="https://twitter.com/hashtag/Airdrops?src=hash&amp;ref_src=twsrc%5Etfw">#Airdrops</a> <a href="https://twitter.com/hashtag/airdropalert?src=hash&amp;ref_src=twsrc%5Etfw">#airdropalert</a> <a href="https://twitter.com/hashtag/freeairdrop?src=hash&amp;ref_src=twsrc%5Etfw">#freeairdrop</a> <a href="https://twitter.com/hashtag/cryptocurrency?src=hash&amp;ref_src=twsrc%5Etfw">#cryptocurrency</a> <a href="https://t.co/guI6ZqcmMi">pic.twitter.com/guI6ZqcmMi</a></p>&mdash; FireFly Coin (@CoinFirefly) <a href="https://twitter.com/CoinFirefly/status/997784783278108672?ref_src=twsrc%5Etfw">May 19, 2018</a></blockquote>
            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

          <small><b>Note:</b> All Social tasks and refferals will be checked before airdrop distribution. The tokens shown above is not final.</small>
        </div>
      </div>
    </div>
  </div>
</header>
<?php $this->load->view('footer'); ?>
<!--<a href="?php echo base_url('user/user_logout');?>" >  <button type="button" class="btn-primary">Logout</button></a>-->
