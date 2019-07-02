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
    register_setting('basicSettingsGroup', 'slogan');
    register_setting('basicSettingsGroup', 'author');
    register_setting('basicSettingsGroup', 'footer');
    register_setting('basicSettingsGroup', 'pp'); 
    register_setting('basicSettingsGroup', 'fb');
    register_setting('basicSettingsGroup', 'twitter');
    register_setting('basicSettingsGroup', 'insta');
}

function basic_theme_settings_page() {
    if(!current_user_can('manage_options')) {
        wp_die('No sufficient premissions to access this page.');
    }
    echo '<h1>Basic Theme Settings</h1>';

    /*Group Options*/
    $optionSlogan = esc_attr(get_option('slogan'));
    $optionAuthor = esc_attr(get_option('author'));
    $optionFooter = esc_attr(get_option('footer'));
    $optionPP = esc_attr(get_option('pp'));
    $optionFb = esc_attr(get_option('fb'));
    $optionTwitter = esc_attr(get_option('twitter'));
    $optionInsta = esc_attr(get_option('insta'));
    
    if ($optionFooter == "" || $optionFooter == null) {
        $optionFooter = "Created by <a href='https://www.raddy.co.uk'>Raddy</a>";
    }
    ?>

    <div class="wrap">
    <h1>Theme Settings</h1>
    <form method="post" action="options.php">
        <?php settings_fields('basicSettingsGroup');?>

        <table class="form-table">
            <tbody>
 
            <tr>
                <th scope="row">
                    <label>Slogan</label>
                </th>
                <td> 
                    <input placeholder="Example: Everything a writer needs." class="regular-text" type="text" id="slogan" name="slogan" value="<?php echo $optionSlogan; ?>"/>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label>Author</label>
                </th>
                <td>
                    <textarea rows="10" cols="60" placeholder="Write a simple introduction about yourself..." class="regular-text" type="text" id="author" name="author"><?php echo $optionAuthor; ?></textarea>
                </td>
            </tr>


            <tr>
                <th scope="row">
                    <label>Social (Add full URL)</label>
                </th>
                <td>
                    <input placeholder="Facebook" class="regular-text" type="text" id="fb" name="fb" value="<?php echo $optionFb; ?>"/><br>
                    <input placeholder="Twitter" class="regular-text" type="text" id="twitter" name="twitter" value="<?php echo $optionTwitter; ?>"/><br>
                    <input placeholder="Instagram" class="regular-text" type="text" id="insta" name="insta" value="<?php echo $optionInsta; ?>"/><br>
                </td>
                
            </tr> 

            <tr>
                <th scope="row">
                    <label>Privacy Policy</label>
                </th>
                <td>
                    <textarea rows="10" cols="60" placeholder="Add links to privacy policy documents" class="regular-text" type="text" id="author" name="pp"><?php echo $optionPP; ?></textarea>
                </td>
            </tr>

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