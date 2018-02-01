<?php get_header('pages'); ?>
<br class="clear" /><br/> 
<section class="page-section">
    <div class="container-pages" style="width: 100% !important;">
        <div class="col-md-12 page-content" style="width: 50%;padding-right: 10px;padding-left: 10px;margin: 0 auto;display: block;">
            <h1 class="uppercase page-title"><?php the_title();?></h1>
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