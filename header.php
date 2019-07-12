<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>
<body>
 
<div class="wrapper">

    <div class="header">
        <?php 
            if ( function_exists( 'the_custom_logo') !== '' ) {
                the_custom_logo();
            }
            else {
                /*Link to homepage */ 
            ?>
                <h1><a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a></h1>
            <?php
            } 
        ?>
        <div class="mobile-menu">
            <span class="open__burger"><img src="<?php echo get_template_directory_uri(); ?>/images/menu.svg" alt="Menu"/>Menu</span>
            <span class="close__burger"><img src="<?php echo get_template_directory_uri(); ?>/images/menu_close.svg" alt="Close"/>Close</span>
        </div>
    </div>
    
    <nav id="toggleMyMenu" style="display: none;">
        <?php
            wp_nav_menu( array ('theme_location' =>
            'my-custom-menu', 'container_class' =>
            'custom-menu-class'));
        ?>
    </nav>
  
    <div class="slogan">
    <?php
        $optionSlogan = get_option('slogan'); 
        if ($optionSlogan == "" || $optionSlogan == null) {
            $optionSlogan = "Edit this by going to your Dashboard -> Theme Options -> Slogan";
        }
        echo $optionSlogan;
    ?>
    
    </div>
