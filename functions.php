<?php

/* Adding CSS & JS */
function basic_enqueue_styles_scripts() {
    wp_register_style('styles', get_template_directory_uri() . '/css/styles.css' );
    $dependencies = array('styles');
    wp_enqueue_style( 'basic-style', get_stylesheet_uri(), $dependencies ); 
    add_theme_support('post-thumbnails');
    wp_enqueue_script( 'my-custom-script', get_stylesheet_directory_uri() . '/js/script.js', array( 'jquery' ) );
}
add_action( 'wp_enqueue_scripts', 'basic_enqueue_styles_scripts' );


// Adding Title-Tag
function basic_wp_setup() {
    add_theme_support ( 'title-tag' );
}
add_action ('after_setup_theme', 'basic_wp_setup');

// Creating Custom Menu
function wpb_custom_new_menu() {
    register_nav_menu('my-custom-menu',__('My Custom Menu'));
}
add_action('init', 'wpb_custom_new_menu');


// Post Thumbnails
add_theme_support('post-thumbnails');


// Filter except length to 25 words.
function custom_excerpt_length( $length ) {
    return 25;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );





?>