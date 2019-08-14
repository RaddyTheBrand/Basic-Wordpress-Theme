<?php

/* Theme Customizer Settings */
/* ------------------------- */
/* Theme Customizer Settings */

/* Author */ 
function basic_author_callout($wp_customize) {
    $wp_customize->add_section('basic-author-callout-section', array(
        'title' => 'Author',
        'priority' => 2,
    ));

    $wp_customize->add_setting('basic-author-callout-display', array(
        'default' => 'No'
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'basic-author-callout-display-control', array(
        'label' => 'Display this section?',
        'section' => 'basic-author-callout-section',
        'settings' => 'basic-author-callout-display',
        'type' => 'select',
        'choices' => array('No' => 'No', 'Yes' => 'Yes')
    )));


    $wp_customize->add_setting('basic-author-callout-text', array(
        'default' => 'Example Slogan Text!'
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'basic-author-callout-control', array(
        'label' => 'About Author',
        'section' => 'basic-author-callout-section',
        'settings' => 'basic-author-callout-text',
        'type' => 'textarea'
    )));


    $wp_customize->add_setting('basic-author-callout-image', array(
        'default' => 'Example Slogan Text!'
    ));

    $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'basic-author-callout-image-control', array(
        'label' => 'Image',
        'section' => 'basic-author-callout-section',
        'settings' => 'basic-author-callout-image',
        'width' => 264,
        'height' => 176
    )));

}

add_action('customize_register', 'basic_author_callout');

/* Social */
function basic_social_callout($wp_customize) {
    $wp_customize->add_section('basic-social-callout-section', array(
        'title' => 'Social',
        'priority' => 3,
        'description' => __('Leave blank if you dont want a social network to be displayed.'),
    ));

    $wp_customize->add_setting('basic-social-callout-display', array(
        'default' => 'No'
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'basic-social-callout-display-control', array(
        'label' => 'Display this section?',
        'section' => 'basic-social-callout-section',
        'settings' => 'basic-social-callout-display',
        'type' => 'select',
        'choices' => array('No' => 'No', 'Yes' => 'Yes'),
    ))); 


    /* MailChimp */
    $wp_customize->add_setting('basic-social-callout-mailchimp', array(
        'default' => 'MailChimp Username',
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'basic-social-callout-control-mailchimp', array(
        'label' => 'MailChimp URL',
        'section' => 'basic-social-callout-section',
        'settings' => 'basic-social-callout-mailchimp',
        'description' => __('
        Adding MailChimp Username will create the Subscribe functionality for you.
        How to get your MailChimp Form ID: Login to Mailchimp. Naviage to Audience and then click on "Add a pop-up form". Create a "Embedded form" and untick everything except Show only required fields.
        At this point the link that you need to copy will appear in the Copy/paste section. Find the html tag that starts with <form action= and then copy the link in the quotes.
        Paste the link in the input below.
        '),
    )));


    /* Facebook */
    $wp_customize->add_setting('basic-social-callout-facebook', array(
        'default' => 'https://www.facebook.com/Username'
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'basic-social-callout-control-facebook', array(
        'label' => 'Facebook URL',
        'section' => 'basic-social-callout-section',
        'settings' => 'basic-social-callout-facebook',
        'type' => 'url',
    )));

    /* Instagram */
    $wp_customize->add_setting('basic-social-callout-instagram', array(
        'default' => 'https://www.instagram.com/Username'
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'basic-social-callout-control-instagram', array(
        'label' => 'Instagram URL',
        'section' => 'basic-social-callout-section',
        'settings' => 'basic-social-callout-instagram',
        'type' => 'url',
    )));


    /* Pinterest */
    $wp_customize->add_setting('basic-social-callout-pinterest', array(
        'default' => 'Pinterest Username'
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'basic-social-callout-control-pinterest', array(
        'label' => 'Pinterest',
        'section' => 'basic-social-callout-section',
        'settings' => 'basic-social-callout-pinterest',
    )));


    /* RSS */
    $wp_customize->add_setting('basic-social-callout-rss', array(
        'default' => 'RSS'
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'basic-social-callout-control-rss', array(
        'label' => 'RSS URL',
        'section' => 'basic-social-callout-section',
        'settings' => 'basic-social-callout-rss',
        'type' => 'url',
    )));

    /* Skype */
    $wp_customize->add_setting('basic-social-callout-skype', array(
        'default' => 'Username'
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'basic-social-callout-control-skype', array(
        'label' => 'Skype',
        'section' => 'basic-social-callout-section',
        'settings' => 'basic-social-callout-skype',
        'type' => 'url',
    )));

    /* Snapchat */
    $wp_customize->add_setting('basic-social-callout-snapchat', array(
        'default' => 'Snapchat Username'
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'basic-social-callout-control-snapchat', array(
        'label' => 'Snapchat',
        'section' => 'basic-social-callout-section',
        'settings' => 'basic-social-callout-snapchat',
    )));


    /* Twitter */
    $wp_customize->add_setting('basic-social-callout-twitter', array(
        'default' => 'https://twitter.com/Username'
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'basic-social-callout-control-twitter', array(
        'label' => 'Twitter URL',
        'section' => 'basic-social-callout-section',
        'settings' => 'basic-social-callout-twitter',
        'type' => 'url',
    )));

    /* WeChat */
    $wp_customize->add_setting('basic-social-callout-wechat', array(
        'default' => 'WeChat Username'
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'basic-social-callout-control-wechat', array(
        'label' => 'WeChat',
        'section' => 'basic-social-callout-section',
        'settings' => 'basic-social-callout-wechat',
        'type' => 'url',
    )));

    /* WhatsApp */
    $wp_customize->add_setting('basic-social-callout-whatsapp', array(
        'default' => 'Phone Number'
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'basic-social-callout-control-whatsapp', array(
        'label' => 'WhatsApp Phone Number',
        'section' => 'basic-social-callout-section',
        'settings' => 'basic-social-callout-whatsapp',
        'type' => 'url',
    )));


    /* YouTube */
    $wp_customize->add_setting('basic-social-callout-youtube', array(
        'default' => 'https://www.youtube.com/Username'
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'basic-social-callout-control-youtube', array(
        'label' => 'YouTube URL',
        'section' => 'basic-social-callout-section',
        'settings' => 'basic-social-callout-youtube',
        'type' => 'url',
    )));

    /* Email */
    $wp_customize->add_setting('basic-social-callout-email', array(
        'default' => 'youremail@email.com'
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'basic-social-callout-control-email', array(
        'label' => 'Facebook URL',
        'section' => 'basic-social-callout-section',
        'settings' => 'basic-social-callout-email',
        'type' => 'url',
    )));


}

add_action('customize_register', 'basic_social_callout');



/* Footer */ 
function basic_footer_callout($wp_customize) {
    $wp_customize->add_section('basic-footer-callout-section', array(
        'title' => 'Footer',
        'priority' => 4,
    ));


    $wp_customize->add_setting('basic-footer-callout-display', array(
        'default' => 'No'
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'basic-footer-callout-display-control', array(
        'label' => 'Display Policy section?',
        'section' => 'basic-footer-callout-section',
        'settings' => 'basic-footer-callout-display',
        'type' => 'select',
        'choices' => array('No' => 'No', 'Yes' => 'Yes'),
    ))); 


    $wp_customize->add_setting('basic-footer-callout-privacy-policy', array(
        'default' => '/privacy'
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'basic-footer-callout-privacy-control', array(
        'label' => 'Privacy Policy URL',
        'section' => 'basic-footer-callout-section',
        'settings' => 'basic-footer-callout-privacy-policy',
        'description' => 'You can add custom URL for your Privacy page. Default is set to /privacy',
    )));

    $wp_customize->add_setting('basic-footer-callout-cookie-policy', array(
        'default' => '/cookie-policy'
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'basic-footer-callout-cookie-control', array(
        'label' => 'Privacy Policy URL',
        'section' => 'basic-footer-callout-section',
        'settings' => 'basic-footer-callout-cookie-policy',
        'description' => 'You can add custom URL for your Cookie Policy page. Default is set to /cookie-policy',
    )));

    $wp_customize->add_setting('basic-footer-callout-copyright', array(
        'default' => '&copy; 2019'
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'basic-footer-callout-control', array(
        'label' => 'Copyright',
        'section' => 'basic-footer-callout-section',
        'settings' => 'basic-footer-callout-copyright',
        'type' => 'textarea'
    )));


}

add_action('customize_register', 'basic_footer_callout');