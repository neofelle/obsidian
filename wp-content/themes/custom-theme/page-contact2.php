<?php get_header('pages'); ?>
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
    <br class="clear" /><br/> 
    <section class="page-section">
        <div class="container-pages" style="width: 100%;">
            <div class="col-md-12 page-content">
                <div class="col-md-12 page-obsidian" style="width: 100%;padding-right: 10px;padding-left: 10px;margin: 0 auto;display: block;">
                 

	<div class="col span_6_of_12" style="padding-left:10px;padding-right: 25px;">
		<h4 style="font-size: 28px; margin-top: 0px;">OBSIDIAN BUSINESS PLANNING SOLUTIONS</h4>
		Address: 2099 Gaither Road Suite 110 Rockville, MD 20850

		Phone: 301-990-1165

		Email: info@obsidianbusinesssolutions.com

		<img style="width: 80%;" src="http://localhost/tim/wordpress/obsidian/wp-content/uploads/2018/02/map.jpg" />
		<br style="clear: both;" /><a href="#">CLICK HERE TO SEE LARGER MAP</a>

	</div>
	<div class="col span_6_of_12" style="padding-left:25px;padding-right: 10px;">
		<div class="contact-form-cs" style="background-color: #102157; font-size: 31px; padding: 30px;">

			<span style="color: white; text-align: center; display: block; margin-bottom: 10px;">HOW CAN WE HELP</span>
			<div style="border-top: 1px solid white;">[contact-form-7 id="84" title="Contact-us"]</div>
		</div>
	</div>





                </div>
            </div>
        </div>
     </section>
     </div></div>
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
<?php get_footer('pages'); ?>