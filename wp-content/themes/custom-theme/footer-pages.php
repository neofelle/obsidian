
<div class="col span_12_of_12 section-6-desktop" style="border-top:1px solid #cfcfcf;height: 520px;">
  <div class="col span_7_of_12 bg-inner" style="background-color: white;background-size: cover;background-position-y: -19px;background-repeat:no-repeat;background-position: center center; ">
    <div class="bg-left" style="height: 520px;">
      <div class="business-container-2">

      </div>
    </div>
  </div>
  <div class="col span_5_of_12 bg-contact" style="height: 520px;">
    <div class="contact-container">
      <div style="width: 50%; margin: 0 auto;padding-top: 30px;">
        <img src="<?php bloginfo('template_directory'); ?>/images/home/obsidian-white.png" style="width:100%;"><br/>
      </div>
      <span class="txt-small">2099 Gaither Road Suite 110 Rockville, MD 20850</span>
      <br/>
      <span class="txt-big">301-990-1165</span>
      <br/>
      <div class="col span_6_of_12">
        <div class="col span_12_of_12 left" style="margin-bottom: 30px;">
          <a href="" class="button-contact">REVIEW US</a>
        </div>
        <div class="col span_12_of_12 left">
          <a href="" class="button-contact">CONTACT US</a>
        </div>
      </div>
      <div class="col cpan_6_of_12" style="padding-left: 20px;padding-right: 20px;">
        <img src="<?php bloginfo('template_directory'); ?>/images/home/exit-map.png" style="width:80%;"><br/>
      </div>

    </div>
  </div>
</div>

<div class="col span_12_of_12 section-6-mobile">
  <div class="col span_12_of_12 bg-inner" style="background-color: white;background-size: cover;">
    <div class="bg-left" style="height: 518px;">
      <div class="business-container-2">

      </div>
    </div>
  </div>
  <div class="col span_12_of_12 bg-contact" style="">
    <div class="contact-container">
      <div style="width: 50%; margin: 0 auto;padding-top: 30px;">
        <img class="footer-mobile-img" src="<?php bloginfo('template_directory'); ?>/images/home/obsidian-white.png"><br/>
      </div>
      <span class="txt-small">2099 Gaither Road Suite 110 <br/> Rockville, MD 20850</span>
      <br/>
      <span class="txt-big">301-990-1165</span>
      <br/><br/>
      <div style="width: 60%;margin:0 auto;">
        <div class="col span_6_of_12 left mobile-button-container">
          <a href="" class="button-contact">REVIEW US</a>
        </div>
        <div class="col span_6_of_12 left mobile-button-container">
          <a href="" class="button-contact">CONTACT US</a>
        </div>
      </div>
      <br/>
      <div class="mobile-adv" style="width: 50%; margin: 0 auto;padding-top: 30px;margin-top: 10px;position: relative;top:20px;left: 30px;">
        <img class="footer-mobile-img" src="<?php bloginfo('template_directory'); ?>/images/home/exit-map.png"><br/>
      </div>
    </div>
  </div>
</div>

  <div class="section group footer-container" style="padding-top:30px;padding-bottom: 30px;">
    <span style="color:white;text-align: center;text-transform: uppercase;font-size: 12px;width: 100%;display: block;">copyright all rights reserved © 2018 obsidian planning solutions</span>
  </div>
<!-- footer-->
</div> <!-- footer-container -->
  <script>
    $(function() {
      var pull    = $('#pull');
        menu    = $('.mobiletop ul');
        menuHeight  = menu.height();

      $(pull).on('click', function(e) {
        e.preventDefault();
        menu.slideToggle();
      });
      $(window).resize(function(){
            var w = $(window).width();
            if(w > 320 && menu.is(':hidden')) {
              menu.removeAttr('style');
            }
        });
    });
  </script>
<?php wp_footer();?>
</body>
</html> 