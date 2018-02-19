
<div class="col span_12_of_12 section-6-desktop" style="border-top:1px solid #cfcfcf;height: 520px;">
  <div class="col span_7_of_12 bg-inner" style="background-color: white;background-size: cover;background-position-y: -19px;background-repeat:no-repeat;background-position: center center; ">
    <div class="" style="height: 520px;">
      <div class="business-container-2">

      </div>
    </div>
  </div>
  <div class="col span_5_of_12 bg-contact" style="height: 520px;">
    <div class="contact-container">
      <div style="width: 50%; margin: 0 auto;padding-top: 30px;text-align: center;">
        <img src="<?php bloginfo('template_directory'); ?>/images/home/obsidian-white.png" style="width:66%;"><br/>
      </div>
      <span class="txt-small">2099 Gaither Road Suite 110 Rockville, MD 20850</span>
      <span class="txt-big">301-990-1165</span>
      <br/>
      <div class="mobile-adv" style="width: 50%; margin: 0 auto;padding-top: 15px;margin-top: 0px;position: relative;top:0px;text-align: center;">
        <img src="<?php bloginfo('template_directory'); ?>/images/home/exit-map.png" class="footer-mobile-img"><br/>
      </div>
      <br/><br/>
      <div style="width: 60%;margin:0 auto;">
        <div class="col span_6_of_12 left mobile-button-container">
          <a href="<?php echo get_permalink( get_page_by_path( 'about' ) ); ?>" class="button-contact">REVIEW US</a>
        </div>
        <div class="col span_6_of_12 left mobile-button-container">
          <a href="<?php echo get_permalink( get_page_by_path( 'contact' ) ); ?>" class="button-contact">CONTACT US</a>
        </div>
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
      <div class="mobile-adv" style="width: 50%; margin: 0 auto;padding-top: 20px;position: relative;top:10px;text-align: center;">
        <img class="footer-mobile-img" src="<?php bloginfo('template_directory'); ?>/images/home/exit-map.png"><br/>
      </div>
      <br/><br/>
      <div style="width: 60%;margin:0 auto;">
        <div class="col span_6_of_12 left mobile-button-container">
          <a href="" class="button-contact">REVIEW US</a>
        </div>
        <div class="col span_6_of_12 left mobile-button-container">
          <a href="" class="button-contact">CONTACT US</a>
        </div>
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