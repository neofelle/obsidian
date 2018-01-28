<?php
/**
Template Name: Homepage
 */
?>
<?php get_header('pages'); ?>
 <br class="clear" /><br/> 
<section class="page-section">
    <div class="container" style="padding-left:20px;">
        <div class="col-md-8 left page-content">
			<h1 class="uppercase page-title"><?php the_title();?></h1>
			<?php $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1; 			 		
			 	   $wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'order'=>'DESC', 'posts_per_page'=>4, 'paged' => $paged)); ?>
		    	<?php if ( $wpb_all_query->have_posts() ) : ?>
    				<?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>

						<div class="col span_12_of_12 blog-container">  
							<div class="col span_3_of_12 blog-img">
							<?php if(has_post_thumbnail()){ ?>
								<?php the_post_thumbnail(); ?>
							<?php }else{ ?>
								<img class="img-frame img-center" src="<?php bloginfo('template_directory'); ?>/images/blog-img.jpg">
							<?php } ?>
							</div>
							<div class="col span_9_of_12 blog-text">
								<h1><?php the_title(); ?></h1>
								<p><?php echo get_post_meta( get_the_ID(), 'short_desc', true); ?></p>
								<p style="float:left;margin-top: 1px;margin-right: 10px;">Category: <?php the_category(); ?></p>
								<br style="clear: both;" /><br/>
								<a href="<?php the_permalink(); ?>" class="blog-button">Read More</a>
							</div>
						</div>



		     <?php endwhile; ?>
		<?php endif; ?>
		<br style="clear:both;">
		<div style="margin-top: 20px;text-align: center;padding-bottom: 40px;">
			<div>	
			    <?php
			    	$big = 999999999; // need an unlikely integer
			    	echo paginate_links(array(
					    'base' => str_replace($big,'%#%', get_pagenum_link($big)),
					    'format' => '?paged=%#%',
					    'current' => max( 1, get_query_var('paged') ),
					    'total' => $wpb_all_query->max_num_pages
					));
			    ?>
			    <?php  wp_reset_postdata(); ?>	
		    </div>
		</div>

        </div>
    </div>
 </section>
 </div></div>

<?php get_footer(); ?>