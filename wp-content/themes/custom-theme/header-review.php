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
<body class="page-template page-template-onecolumn-page page-template-onecolumn-page-php page page-id-15 desktop chrome" style="background-color: #112057;">
