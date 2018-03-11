<?php
/**
Template Name: Review
 */
?>
<?php get_header('review'); ?>

  <div class="col span_12_of_12">
    <br/>
    <div class="r-container">

      <?php
          while ( have_posts() ) : the_post();

              get_template_part( 'template-parts/page/content', 'page' );
              // If comments are open or we have at least one comment, load up the comment template.
              if ( comments_open() || get_comments_number() ) :
                  comments_template();
              endif;

          endwhile; // End of the loop.


      ?>
      <br style="clear:both;"><br style="clear:both;">
  </div>