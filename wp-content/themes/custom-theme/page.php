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
            <div class="col-md-12 page-content" style="width: 100%;padding-right: 40px;padding-left: 30px;margin: 0 auto;display: block;">
                <div class="col-md-12 page-obsidian" style="width: 100%;padding-right: 10px;padding-left: 10px;margin: 0 auto;display: block;">
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