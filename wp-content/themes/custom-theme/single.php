<?php get_header('pages'); ?>
<br class="clear" /><br/> 
<section class="page-section">
    <div class="container">
        <div class="col-md-12 left page-content" style="width: 100%;">
            <h1 class="uppercase title"><?php the_title();?></h1>
            <div class="featured-img">
                <?php 
                    if ( has_post_thumbnail() ) {
                        the_post_thumbnail();
                    }  
                ?>
            </div>
            <br>
            <?php
                while ( have_posts() ) : the_post();

                    get_template_part( 'template-parts/page/content', 'page' );
                    the_content();
                    // If comments are open or we have at least one comment, load up the comment template.
                    if ( comments_open() || get_comments_number() ) :
                        comments_template();
                    endif;

                endwhile; // End of the loop.


            ?>
        </div>
    </div>
 </section>
 </div></div>
<?php get_footer(); ?>