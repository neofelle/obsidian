<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage custom-theme
 * @since custom-theme 1.0
 */
?>
<?php
	$currCat = get_category(get_query_var('cat'));
	$cat_name = $currCat->name;
	$cat_id   = get_cat_ID( $cat_name );
	$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1; 	
	$query = new WP_Query( array( 
		'category_name' => $cat_name,
		'order' => 'asc',
		'post_type' => 'post',
		'post_status' => 'publish',
		'posts_per_page'=>4,
		'paged' => $paged
	));
?>

  <h1 class="uppercase page-title" style="margin-left: 35px;margin-top: 65px;"><?php echo ucwords($cat_name); ?></h1>
<?php 
	if ($query->have_posts()) {
   		while ($query->have_posts()) : $query->the_post(); 
 ?>
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
<?php } ?>
<br style="clear:both;">
	<div style="margin-top: 20px;text-align: center;padding-bottom: 40px;">
			<div>	
			    <?php
			    	$big = 999999999; // need an unlikely integer
			    	echo paginate_links(array(
					    'base' => str_replace($big,'%#%', get_pagenum_link($big)),
					    'format' => '?paged=%#%',
					    'current' => max( 1, get_query_var('paged') ),
					    'total' => $query->max_num_pages
					));
			    ?>
			    <?php  wp_reset_postdata(); ?>	
		    </div>
		</div>
</div>
</div>




