  <div class="section group footer-container" style="padding-top:30px;padding-bottom: 30px;">
    <span style="color:white;text-align: center;text-transform: uppercase;font-size: 12px;width: 100%;display: block;">copyright all rights reserved © 2018 obsidian business planning solutions</span>
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