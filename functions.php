<?php

/* Add Theme Settings */
add_action("admin_menu", "setup_theme_admin_menus");

function setup_theme_admin_menus() {
    // add_options_page( 'Theme Settings', 'Basic Theme', 'manage_options', 'basic_theme_settings', 'basic_theme_settings_page');
    add_menu_page( 'Theme Settings', 'Basic Theme', 'manage_options', 'basic_theme_settings', 'basic_theme_settings_page', get_stylesheet_directory_uri() . '/images/logo_icon.png', 2);

    add_action('admin_init', 'basicSettingsGroup');
}

/* Register Group Settings */
function basicSettingsGroup() {
    register_setting('basicSettingsGroup', 'footer');
}

/* Bulding the settings page */
function basic_theme_settings_page() {
    if(!current_user_can('manage_options')) {
        wp_die('No sufficient premissions to access this page.');
    }
    echo '<h1>Basic Theme Settings</h1>';
    $optionFooter = esc_attr(get_option('footer'));

    if ($optionFooter == "" || $optionFooter == null) {
        $optionFooter = "Created by RaddyTheBrand";
    }

    ?>

    <div class="wrap">
    <h1>Theme Settings</h1>
    <form method="post" action="options.php">
        <?php settings_fields('basicSettingsGroup'); ?>

        <table class="form-table">
            <tbody>
            <tr>
                <th scope="row">
                    <label>Footer</label>
                </th>
                <td>
                    <input class="regular-text" type="text" id="footer" name="footer" value="<?php echo $optionFooter; ?>"/>
                </td>
            </tr>
            <tr>
                <th>Would you like to save the changes?</th>
                <td><?php submit_button('Save Changes'); ?></td>
            </tr>
            </tbody>
        </table>
    </form>

    </div>

    <?php
}


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