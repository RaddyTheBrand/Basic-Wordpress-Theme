<?php

/* Adding CSS & JS */
function basic_enqueue_styles_scripts() {
    wp_register_style('styles', get_template_directory_uri() . '/css/styles.css' );
    $dependencies = array('styles');
    wp_enqueue_style( 'basic-style', get_stylesheet_uri(), $dependencies ); 
    add_theme_support('post-thumbnails');
    wp_register_script('gsap-tweenmax', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js', false, '2.1.3');
    wp_enqueue_script('gsap-tweenmax');
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
    register_nav_menu('my-custom-menu',__('TheMinimalist Custom Menu', 'theminimalist'));
}
add_action('init', 'wpb_custom_new_menu');

// Post Thumbnails
add_theme_support('post-thumbnails');
add_theme_support('automatic-feed-links');


// Support for custom Logo
add_theme_support( 'custom-logo' );
function themename_custom_logo_setup() {
$defaults = array(
'height'      => 100,
'width'       => 400,
'flex-height' => true,
'flex-width'  => true,
'header-text' => array( 'site-title', 'site-description' ),
);
add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );
 
// Customizer Settings
require get_stylesheet_directory() . '/inc/theminimalist-customizer.php';
new TheMinimalist_Customizer();
 

if ( ! isset( $content_width ) ) {
	$content_width = 600;
} 

add_theme_support( 'post-thumbnails', array( 'post' ) );          // Posts only


