<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
 
<div class="wrapper"> 

    <header>
        <div class="row">
            <div class="col-6 col-s-6 logo-flex">
                <?php 
                if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) {
                    the_custom_logo();
                } else { /*Link to homepage */  ?>
                <h1><a href="/" title="<?php bloginfo('name'); ?>"><?php echo bloginfo('name'); ?></a></h1>
                <?php } ?> 
            </div>
            <div class="col-6 col-s-6 menu-flex">
                <div class="mobile-menu">
                    <span class="open__burger"><img src="<?php echo get_template_directory_uri(); ?>/images/menu.svg" alt="Menu"/>Menu</span>
                    <span class="close__burger"><img src="<?php echo get_template_directory_uri(); ?>/images/menu_close.svg" alt="Close"/>Close</span>
                </div>
            </div>
        </div> 
        <nav id="toggleMyMenu" style="display: none;">
            <?php
            wp_nav_menu( array (
            'theme_location' =>
            'my-custom-menu', 'container_class' =>
            'custom-menu-class'));
            ?>
        </nav>
    </header>
    
    <div class="row slogan">
        <div class="col-12">
        <p>
        <?php $slogan = get_bloginfo('description'); ?>
        <?php 
            if ( $slogan!='' ) { 
                bloginfo('description'); 
            } else {
                echo "Edit this by going to your Dashboard -> Appearance -> Custinuse -> Site Identity";
            }
        ?>
        </p>
        </div>
    </div>
