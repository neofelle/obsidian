<?php
/**
Template Name: Homepage
 */
?>
<?php get_header('blogs'); ?>
	 <div class="col span_12_of_12 banner-pages banner-pages-container section-banner banner-desktop">
     	<div style="display: flex;justify-content: center;width: 100%;">
	      	<div style="display: block;" class="banner-content">
		      	<h2 class="header"><?php the_title();?></h2>
	      	</div>
    	</div>
    </div>

	 <div class="col span_12_of_12 banner-pages-mobile banner-pages-container-mobile section-banner banner-mobile">
     	<div style="display: flex;justify-content: center;width: 100%;">
	      	<div style="display: block;" class="banner-content">
		      	<h2 class="header"><?php the_title();?></h2>
	      	</div>
    	</div>
    </div>

	<!-- Left Column -->
	<div class="col span_3_of_12 main-col-1">
	  	<div class="sidebar-1">
	  		<img class="video-cover" src="<?php echo get_template_directory_uri() . "/images/home/video.jpg"; ?>">
		</div>
		<!-- logo -->
 		<?php 
        	$v = 0;
        	$menuargs = array(
        		"theme_location" => "primary",
        		"menu_class" => "s-menu",
        		"menu_id" => "NAV-LEFT",
        	);
        	$items_left = wp_get_nav_menu_items( 'NAV-LEFT', $menuargs); 
        ?>  	
  		<div class="sidebar-1">
		  <ul id="menu-sidebar-1" class="menu">
		    <?php foreach( $items_left as $item ){ ?>
		      	<li id="menu-item" class="menu-item menu-item-type-custom menu-item-object-custom menu-item"><a href="<?php echo $item->url; ?>"><?php echo $item->title; ?></a></li>
		    <?php } ?>
		  </ul>
		</div>
		<!-- Sidebar 1 -->
		
	</div>

	<!-- /col-1 -->	
		
    <!-- Right Column  -->
    <div class="col span_9_of_12 main-col-2">     

<!-- First Column -->
<div class="section group column-1-container">
	<br class="clear" /><br/> 
	<section class="page-section">
	    <div class="container-pages" style="width: 100%;">
	        <div class="col-md-12 page-content" style="width: 100%;padding-right: 20px;padding-left: 30px;margin: 0 auto;display: block;">
				 <?php $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1; 			 		
				 	   $wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'order'=>'DESC', 'posts_per_page'=>4, 'paged' => $paged)); ?>
			    	<?php if ( $wpb_all_query->have_posts() ) : ?>
	    				<?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>

							<div class="col span_12_of_12 blog-container mobile-divider">  
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
									<br style="clear: both;" />
									<a href="<?php the_permalink(); ?>" class="button-read">Read More</a>
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
	<div class="col span_12_of_12 video-mobile">
		<div class="sidebar-1">
		  	<img style="width: 100%;max-height: 280px;" src="<?php echo get_template_directory_uri() . "/images/home/video.jpg"; ?>">
		</div>
	</div>
	<?php 
    	$v = 0;
    	$menuargs = array(
    		"theme_location" => "primary",
    		"menu_class" => "s-menu",
    		"menu_id" => "NAV-LEFT",
    	);
    	$items_left_mobile = wp_get_nav_menu_items( 'NAV-LEFT', $menuargs); 
    ?>  
	<div class="col span_12_of_12 sidebar-mobile">
  		<div class="sidebar-1">
		  <ul id="menu-sidebar-1" class="menu">
		    <?php foreach( $items_left_mobile as $item ){ ?>
		      	<li id="menu-item" class="menu-item menu-item-type-custom menu-item-object-custom menu-item"><a href="<?php echo $item->url; ?>"><?php echo $item->title; ?></a></li>
		    <?php } ?>
		  </ul>
		</div>
	</div>
<?php get_footer('pages'); ?>