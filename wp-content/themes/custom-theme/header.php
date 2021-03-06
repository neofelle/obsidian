<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage custom-theme
 * @since custom-theme 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="utf-8"/>
	<title><?php bloginfo('title');?></title>
	
    <link href="<?php bloginfo('template_directory'); ?>/favicon.png" rel="shortcut icon">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/responsive.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/normalize.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/mobile.css">

	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.min.js"></script>


	<link rel='stylesheet' id='contact-form-7-css'  href='<?php bloginfo('template_directory'); ?>/includes/css/styles.css' media='all' />
	<link rel='stylesheet' id='extended_toc-css'  href='<?php bloginfo('template_directory'); ?>/includes/css/extended-tables/styles.css' media='all' />
	<link rel='stylesheet' id='side-sidebar-css'  href='<?php bloginfo('template_directory'); ?>/includes/css/sidebar.css' media='all' />
	<link rel='stylesheet' id='main style-css'  href='<?php bloginfo('template_directory'); ?>/style.css' media='all' />


	<link rel='stylesheet' id='my_custom_css-css'  href='<?php bloginfo('template_directory'); ?>/css/768.css' media='all' />

	<script type='text/javascript' src='<?php bloginfo('template_directory'); ?>/includes/js/jquery.min.js'></script>
	<script type='text/javascript' src='<?php bloginfo('template_directory'); ?>/includes/js/jquery.migrate.min.js'></script>


	<script type='text/javascript' src='<?php bloginfo('template_directory'); ?>/includes/js/jquery.mousewheel.js'></script>
	<script type='text/javascript' src='<?php bloginfo('template_directory'); ?>/includes/js/jquery.requestAnimationFrame.js'></script>
	<script type='text/javascript' src='<?php bloginfo('template_directory'); ?>/includes/js/ilightbox.packed.js'></script>

	<!-- Easy Columns 2.1.1 by Pat Friedl http://www.patrickfriedl.com -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/includes/css/easycolumns.css" type="text/css" media="screen, projection" />
	
	<!-- My Custom CSS -->
	<link rel='stylesheet' id='mccss_stylesheet' href='<?php bloginfo('template_directory'); ?>/includes/css/my_style.css' type='text/css' media='all' />

	<style>
    
	    /*ul, p, h1, h2, h3, h4, h5 { color: #ffffff !important; }*/
	        
	    
	    .link-color { color: #ffb900 !important; }

	    .col-10 ul li { color: #ffb900 !important; }

	    .top-nav-holder { background-color: #ffffff; }

	   
	    .sidebar-1 ul li,
	    .sidebar-2 ul li { border-color:#af9063; }
	    
	    .blogpost h2 a { color:#05374f !important; }
	    .blogpost a { color: #ffb900 !important; }
	    .blogpost .link { 
	        border-color: #ffb900; 
	        color: #ffb900 !important;
	    }
	    .blogpost .link:hover {background-color: #ffb900; color:#000;}

	    .button-border { border:2px solid #ffb900 !important; }
	    .button { background-color: #ffb900 !important; }
	    .sidebar-1 { background-color: #986d2f ; }
	    .sidebar-2 { background-color: #5f1b1a ; }
	    .sidebar-3 { background-color: #cbcbcb ; }

	    .sidebar-2 h3, .sidebar-3 h3 { background-color: black ; }
	    
	    .main-content h1, .main-content h2,  .main-content h3,  .main-content h4,  .main-content h5,
	    .post-title { color:#05374f !important; }
	    .main-content ul li a, .main-content ol li a { color:#ffb900; }
	    .main-content a { color: #ffb900; }
	    .main-content a:hover { color: #05374f; }
	        
	    .contact-form-container input[type=submit] {
	        border-color: #ffb900 !important;
	        color: #ffb900 !important;
	    }
	    .contact-form-container input[type=submit]:hover {
	        background: #ffb900 !important;
	    }
	    .contact-form-container { background:#05374f; }
	    .contact-form-container h2 { background:#1b6e96; color:#fff !important; }


	    /*Column Background*/
	     .bg-right { background:url("<?php bloginfo('template_directory'); ?>/images/home/bg-logo-brown.png") no-repeat;background-position: right 10px top;background-position-y: 8px; }
	   	 .bg-left { background:url("<?php bloginfo('template_directory'); ?>/images/home/bg-logo-brown-left.png") no-repeat;background-position: left -40px top;background-position-y: 8px; }
	   	 .bg-contact { background:url("<?php bloginfo('template_directory'); ?>/images/home/footer-bg-rev.jpg") no-repeat;background-size: cover;padding-bottom: 40px; }
	     .col-2 { background:url("<?php bloginfo('template_directory'); ?>/images/tile-2.jpg") no-repeat; }
	     .col-3 { background:url("<?php bloginfo('template_directory'); ?>/images/tile-3.png") no-repeat; }
	     .col-4 { background:url("<?php bloginfo('template_directory'); ?>/images/tile-4.png") no-repeat; }
	     .col-5 { background:url("<?php bloginfo('template_directory'); ?>/images/tile-5.png") no-repeat; }
	     .col-6 { background:url("<?php bloginfo('template_directory'); ?>/images/tile-6.png") no-repeat; }
	     .col-7 { background:url("<?php bloginfo('template_directory'); ?>/images/tile-7.png") no-repeat; }

	     .banner-1 { background:url("<?php bloginfo('template_directory'); ?>/images/home/banner-1-rev.jpg") no-repeat;background-size: 105%; }

	    /*Icons*/     
	    
	    .top-contact .icon-phone { background:url("<?php bloginfo('template_directory'); ?>/images/home/phone.png") no-repeat; }
	    .icon-phone-white { background:url("<?php bloginfo('template_directory'); ?>/images/home/phone-white.jpg") no-repeat; }
	    .icon-column-1 { background:url("<?php bloginfo('template_directory'); ?>/images/icon-1.png") no-repeat; }
	    .icon-column-2 { background:url("<?php bloginfo('template_directory'); ?>/images/icon-2.png") no-repeat; }
	    .icon-column-3 { background:url("<?php bloginfo('template_directory'); ?>/images/icon-3.png") no-repeat; }
	    .icon-column-8 { background:url("<?php bloginfo('template_directory'); ?>/images/icon-4.png") no-repeat; }
	    .icon-column-9 { background:url("<?php bloginfo('template_directory'); ?>/images/icon-5.png") no-repeat; }
	    .icon-column-10 { background:url("<?php bloginfo('template_directory'); ?>/images/icon-6.png") no-repeat; }


	</style>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<?php wp_head(); ?>
</head>
<body class="page-template page-template-onecolumn-page page-template-onecolumn-page-php page page-id-15 desktop chrome">

<?php 
	$v = 0;
	$menuargs = array(
		"theme_location" => "primary",
		"menu_class" => "s-menu",
		"menu_id" => "MAIN-MENU",
	);
	$items = wp_get_nav_menu_items( 'MAIN-MENU', $menuargs); 
?> 
<nav class="clearfix mobiletop">   
	<ul id="menu-footer-menu" class="menu">
		<?php foreach( $items as $item ){ ?>
			<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-4"><a class="text-caps" href="<?php echo $item->url; ?>"><?php echo $item->title; ?></a></li>
		<?php } ?>
	</ul>	
</nav>
<!-- container -->
<div class="section group container" style="width: 100%;">
	<div class="desktop-nav-1 vd-menu">
		<div class="col sp-6" style="margin: 0 auto;">
			<header id="masthead" class="site-header" role="banner">
				<?php if ( has_nav_menu( 'top' ) ) : ?>
					<div class="navigation-top">
						<div class="wrap">
							<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
						</div><!-- .wrap -->
					</div><!-- .navigation-top -->
				<?php endif; ?>
			</header><!-- #masthead -->
		</div>
	</div>
	<div class="col span_12_of_12 nav_main desktop-nav-1">
	    <div class="top-nav-holder desktop-nav-1">
	      	<div class="col span_4_of_12 top-nav n1">
				<div class="logo">
					<a href="<?php echo get_option('home'); ?>">
						<?php the_custom_logo(); ?>
					</a>
				</div>
	      	</div>
	        <div class="col span_6_of_12 top-nav n2">



	        </div> <!-- /top-nav -->
	        <div class="col span_2_of_12 top-contact n3" style="padding-top: 0px;margin-top: 20px;height: 45px;border-left: 1px solid #112057;">
	          <!-- <img src="https://www.customwinecellarssandiego.com/wp-content/themes/customwinecellars_template/images/Custom Wine Cellars San Diego Phone.png" alt="Custom Wine Cellars San Diego Phone"> -->
	          <div class="icon-phone"></div>
	          <p><a class="no-link-color" href="tel:3019901165">301-990-1165</strong></a></p>
	        </div> <!-- /top-nav -->
	    </div> <!-- /top-nav-holder -->
	</div>

	<div class="col span_12_of_12 nav_main tablet-nav-1">
	    <div class="top-nav-holder desktop-nav-1">
	      	<div class="col span_5_of_12 top-nav">
				<div class="logo">
					<a href="<?php echo get_option('home'); ?>">
						<?php the_custom_logo(); ?>
					</a>
				</div>
	      	</div>
	        <div class="col span_1_of_12 top-nav n2">

	        </div> <!-- /top-nav -->
	        <div class="col span_6_of_12 top-contact n3" style="padding-top: 0px;margin-top: 20px;height: 45px;border-left: 1px solid #112057;">
	          <!-- <img src="https://www.customwinecellarssandiego.com/wp-content/themes/customwinecellars_template/images/Custom Wine Cellars San Diego Phone.png" alt="Custom Wine Cellars San Diego Phone"> -->
	          <div class="icon-phone"></div>
	          <p><a class="no-link-color" href="tel:3019901165">301-990-1165</strong></a></p>
	        </div> <!-- /top-nav -->
	    </div> <!-- /top-nav-holder -->
		<!-- Mobile -->
		<div class="top-nav-holder-768" style="position: relative;">
			<!-- call-us-container -->
			<div class="col span_8_of_12 menu-left-480">
				<div  style="padding-left: 25px !important;position: relative !important;top: 10px !important;">
					<a href="<?php echo get_option('home'); ?>">
						<?php the_custom_logo(); ?>
					</a>
				</div>
			</div>
			<div class="col span_4_of_12 menu-icon menu-right-480">
			   <a href="#" id="pull"><img src="<?php bloginfo('template_directory'); ?>/images/menu.jpg" alt="Menu"> </a>
			</div>
		</div>



	</div>
   	<Br style="clear:both;"/>
    <div class="col span_12_of_12 top-nav tablet-navigation" style="background-color: #102157;">
        <ul id="menu-main-menu" class="menu">
		 <?php foreach( $items as $item ){ ?>
          	<li class="tablet-nav menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-4 current_page_item"><a class="nav-home text-caps" style="color:white;" href="<?php echo $item->url; ?>"><?php echo $item->title; ?></a></li>
       	<?php } ?> 
        </ul>	    	
    </div>



	



    <div class="span_12_of_12 top-contact contact-mobile" style="background-color: #102157;padding-top: 13px;padding-bottom: 13px;text-align: center;">
          <div class="icon-phone-white" style="height: 35px;width: 46px;"></div>
          <p><a class="no-link-color" href="tel:3019901165" style="color:white !important;font-size: 7vw;position: relative;top: 2px;">301-990-1165</strong></a></p>
    </div>





	 <div class="col span_12_of_12 banner-1 banner-main section-banner banner-desktop">
     	<div style="display: flex;justify-content: center;width: 100%;">
	      	<div style="display: block;padding-left: 45px;padding-bottom: 45px;" class="banner-content">
		      	<h2 class="header">Do you want to understand</h2>
		      	<h2 class="header">The real value of your business?</h2>
		      	<br/>
		      	<h2 class="default">Is your goal to exit your business at some point?</h2>
		      	<h3 class="default">Do you just need to understand the process and steps that will optimize your exit?</h3>
		      	<br style="clear: both;"><br/>
		      	<div style="width: 100%;text-align: center;">
		      		<a class="button-white" href="<?php echo get_permalink( get_page_by_path( 'contact' ) ); ?>">Learn More</a>
		      	</div>
	      	</div>
    	</div>
    </div>

	 <div class="col span_12_of_12 banner-1 banner-main section-banner banner-mobile">
     	<div style="padding-left:20px;padding-right:20px;display: block;justify-content: center;width: 100%;">
	      	<div class="banner-content">
		      	<h2 class="header">Do you want to understand The real value of your business?</h2>
		      	<h2 class="default">Is your goal to exit your business at some point?</h2>
		      	<h3 class="default">Do you just need to understand the process and steps that will optimize your exit?</h3>
		      	<br style="clear: both;">
		      	<div style="width: 100%;text-align: center;">
		      		<a class="button-white" href="#">Learn More</a>
		      	</div>
		      	<br style="clear: both;" />
	      	</div>
    	</div>
    </div>

	<div class="col span_12_of_12 video-mobile">
		<div class="sidebar-1">
			 <iframe style="width: 100%;height: 350px;background-color: black;" src="https://www.youtube.com/embed/4yfBZqvgxC4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
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
	<!-- Left Column -->
	<div class="col span_3_of_12 main-col-1">
	  	<div class="sidebar-1">
	  		 <iframe class="youtube-cover" src="https://www.youtube.com/embed/4yfBZqvgxC4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
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
