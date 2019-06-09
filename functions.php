<?php

/* Adding CSS */
function basic_enqueue_styles() {
    wp_register_style('styles', get_template_directory_uri() . '/css/styles.css' );
    $dependencies = array('styles');
    wp_enqueue_style( 'basic-style', get_stylesheet_uri(), $dependencies ); 
}

// function basic_enqueue_scripts() {
//     $dependencies = array('javascript');
//     wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/scripts.js', $dependencies);
// }

add_action( 'wp_enqueue_scripts', 'basic_enqueue_styles' );
// add_action( 'wp_enqueue_scripts', 'basic_enqueue_scripts' );

function basic_wp_setup() {
    add_theme_support ( 'title-tag' );
}
add_action ('after_setup_theme', 'basic_wp_setup');

add_theme_support('post-thumbnails');


function wpb_custom_new_menu() {
    register_nav_menu('my-custom-menu',__('My Custom Menu'));
}
add_action('init', 'wpb_custom_new_menu')



?>