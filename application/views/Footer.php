
<footer>
      <div class="container">
        <p style="position: relative; top: 15px;">FireflyCoin.ml &copy; 2018. All Rights Reserved.</p>
        <ul class="list-inline" style="visibility:hidden">
          <li class="list-inline-item">
            <a href="#">Privacy</a>
          </li>
          <li class="list-inline-item">
            <a href="#">Terms</a>
          </li>
          <li class="list-inline-item">
            <a href="#">FAQ</a>
          </li>
        </ul>
      </div>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<script src = "<?php echo base_url();?>js/script.js"></script>
<script  src ="<?php echo base_url();?>js/new-age.js"></script>
<script src="<?php echo base_url();?>js/inc/TimeCircles.js"></script>
<script>
//$( '.js-float-label-wrapper' ).FloatLabel();
$("#DateCountdown").TimeCircles({
    "animation": "smooth",
    "bg_width": 0.1,
    "fg_width": 0.024,
    "circle_bg_color": "#dbd6d9",
    "time": {
        "Days": {
            "text": "Days",
            "color": "#ff8c12",
            "show": true
        },
        "Hours": {
            "text": "Hours",
            "color": "#ef3b4a",
            "show": true
        },
        "Minutes": {
            "text": "Minutes",
            "color": "#ef43a4",
            "show": true
        },
        "Seconds": {
            "text": "Seconds",
            "color": "#9b99ff",
            "show": true
        }
    }
});
$(document).ready( function(){
   $( "li.dropdown" ).click(function() {
      $( this ).toggleClass( 'open' );
    });
});
</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119531091-1"></script>
  <script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-119531091-1');
</script>

</body>
</html>
