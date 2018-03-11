<?php get_header('single'); ?>
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
        <div class="sidebar-1 cs-2" style="background-color: #986d2f;">
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
                    <!-- <h1 class="uppercase title"><?php the_title();?></h1> -->
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
                            // If comments are open or we have at least one comment, load up the comment template.
                        endwhile; // End of the loop.


                    ?>
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