<?php

/* Theme Customizer Settings */
/* ------------------------- */
/* Theme Customizer Settings */

/* Author */ 

function basic_author_callout($wp_customize) {
    $wp_customize->add_section('basic-author-callout-section', array(
        'title' => 'Author',
        'priority' => 2,
        'description' => __('The Author section is only displayed on the Blog page.', 'theminimalist'),
    ));

    $wp_customize->add_setting('basic-author-callout-display', array(
        'default' => 'No',
    
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'basic-author-callout-display-control', array(
        'label' => 'Display this section?',
        'section' => 'basic-author-callout-section',
        'settings' => 'basic-author-callout-display',
        'type' => 'select',
        'choices' => array('No' => 'No', 'Yes' => 'Yes')
    )));


    $wp_customize->add_setting('basic-author-callout-text', array(
        'default' => ''
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'basic-author-callout-control', array(
        'label' => 'About Author',
        'section' => 'basic-author-callout-section',
        'settings' => 'basic-author-callout-text',
        'type' => 'textarea'
    )));
 

    $wp_customize->add_setting('basic-author-callout-image', array(
        'default' => '',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
    ));

    $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'basic-author-callout-image-control', array(
        'label' => 'Image',
        'section' => 'basic-author-callout-section',
        'settings' => 'basic-author-callout-image',
        'width' => 442,
        'height' => 310
    )));

}

add_action('customize_register', 'basic_author_callout');

 
/* Social */
function basic_social_callout($wp_customize) {
  $wp_customize->add_section('basic-social-callout-section', array(
      'title' => 'Social',
      'priority' => 3,
      'description' => __('Leave blank if you dont want a social network to be displayed.', 'theminimalist'),
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
      'default' => '',
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
      ', 'theminimalist'),
  )));


  /* Facebook */
  $wp_customize->add_setting('basic-social-callout-facebook', array(
      'default' => ''
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'basic-social-callout-control-facebook', array(
      'label' => 'Facebook URL',
      'section' => 'basic-social-callout-section',
      'settings' => 'basic-social-callout-facebook',
      'type' => 'url',
  )));

  /* Instagram */
  $wp_customize->add_setting('basic-social-callout-instagram', array(
      'default' => ''
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'basic-social-callout-control-instagram', array(
      'label' => 'Instagram URL',
      'section' => 'basic-social-callout-section',
      'settings' => 'basic-social-callout-instagram',
      'type' => 'url',
  )));


  /* Pinterest */
  $wp_customize->add_setting('basic-social-callout-pinterest', array(
      'default' => ''
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'basic-social-callout-control-pinterest', array(
      'label' => 'Pinterest',
      'section' => 'basic-social-callout-section',
      'settings' => 'basic-social-callout-pinterest',
  )));


  /* RSS */
  $wp_customize->add_setting('basic-social-callout-rss', array(
      'default' => ''
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'basic-social-callout-control-rss', array(
      'label' => 'RSS URL',
      'section' => 'basic-social-callout-section',
      'settings' => 'basic-social-callout-rss',
      'type' => 'url',
  )));

  /* Skype */
  $wp_customize->add_setting('basic-social-callout-skype', array(
      'default' => ''
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'basic-social-callout-control-skype', array(
      'label' => 'Skype',
      'section' => 'basic-social-callout-section',
      'settings' => 'basic-social-callout-skype',
      'type' => 'url',
  )));

  /* Snapchat */
  $wp_customize->add_setting('basic-social-callout-snapchat', array(
      'default' => ''
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'basic-social-callout-control-snapchat', array(
      'label' => 'Snapchat',
      'section' => 'basic-social-callout-section',
      'settings' => 'basic-social-callout-snapchat',
  )));


  /* Twitter */
  $wp_customize->add_setting('basic-social-callout-twitter', array(
      'default' => ''
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'basic-social-callout-control-twitter', array(
      'label' => 'Twitter URL',
      'section' => 'basic-social-callout-section',
      'settings' => 'basic-social-callout-twitter',
      'type' => 'url',
  )));

  /* WeChat */
  $wp_customize->add_setting('basic-social-callout-wechat', array(
      'default' => ''
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'basic-social-callout-control-wechat', array(
      'label' => 'WeChat',
      'section' => 'basic-social-callout-section',
      'settings' => 'basic-social-callout-wechat',
      'type' => 'url',
  )));

  /* WhatsApp */
  $wp_customize->add_setting('basic-social-callout-whatsapp', array(
      'default' => ''
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'basic-social-callout-control-whatsapp', array(
      'label' => 'WhatsApp Phone Number',
      'section' => 'basic-social-callout-section',
      'settings' => 'basic-social-callout-whatsapp',
      'type' => 'url',
  )));


  /* YouTube */
  $wp_customize->add_setting('basic-social-callout-youtube', array(
      'default' => ''
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'basic-social-callout-control-youtube', array(
      'label' => 'YouTube URL',
      'section' => 'basic-social-callout-section',
      'settings' => 'basic-social-callout-youtube',
      'type' => 'url',
  )));

  /* Email */
  $wp_customize->add_setting('basic-social-callout-email', array(
      'default' => ''
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'basic-social-callout-control-email', array(
      'label' => 'Email Address',
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
      'default' => ''
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'basic-footer-callout-control', array(
      'label' => 'Copyright',
      'section' => 'basic-footer-callout-section',
      'settings' => 'basic-footer-callout-copyright',
      'type' => 'textarea'
  )));
}

add_action('customize_register', 'basic_footer_callout');




function theme_customize_register( $wp_customize ) {
  // Text color
  $wp_customize->add_setting( 'text_color', array(
    'default'   => '',
    'transport' => 'refresh',
  ) );

  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'text_color', array(
    'section' => 'colors',
    'label'   => esc_html__( 'Text color', 'theminimalist' ),
  ) ) );

  // Link color
  $wp_customize->add_setting( 'link_color', array(
    'default'   => '',
    'transport' => 'refresh',
    'sanitize_callback' => 'sanitize_hex_color',
  ) );

  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_color', array(
    'section' => 'colors',
    'label'   => esc_html__( 'Link color', 'theminimalist' ),
  ) ) );

  // Accent color
  $wp_customize->add_setting( 'accent_color', array(
    'default'   => '',
    'transport' => 'refresh',
    'sanitize_callback' => 'sanitize_hex_color',
  ) );

  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'accent_color', array(
    'section' => 'colors',
    'label'   => esc_html__( 'Accent color', 'theminimalist' ),
  ) ) );

  // Background color
  $wp_customize->add_setting( 'custom_background_color', array(
      'default'   => '',
      'transport' => 'refresh',
      'sanitize_callback' => 'sanitize_hex_color',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'custom_background_color', array(
      'section' => 'colors',
      'label'   => esc_html__( 'Background color', 'theminimalist' ),
    ) ) );

  // Wrapper color
  $wp_customize->add_setting( 'wrapper_background_color', array(
      'default'   => '',
      'transport' => 'refresh',
      'sanitize_callback' => 'sanitize_hex_color',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wrapper_background_color', array(
      'section' => 'colors',
      'label'   => esc_html__( 'Wrapper color', 'theminimalist' ),
    ) ) );

  // Social Icon color
  $wp_customize->add_setting( 'social_icon_color', array(
      'default'   => '',
      'transport' => 'refresh',
      'sanitize_callback' => 'sanitize_hex_color',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'social_icon_color', array(
      'section' => 'colors',
      'label'   => esc_html__( 'Social Icons color', 'theminimalist' ),
    ) ) );
}

add_action( 'customize_register', 'theme_customize_register' );


function theme_get_customizer_css() {
  ob_start();

  $text_color = get_theme_mod( 'text_color', '' );
  if ( ! empty( $text_color ) ) {
    ?>
    body {
      color: <?php echo $text_color; ?>;
    }
    <?php
  }

  $link_color = get_theme_mod( 'link_color', '' );
  if ( ! empty( $link_color ) ) {
    ?>
    a {
      color: <?php echo $link_color; ?>;
      border-bottom-color: <?php echo $link_color; ?>;
    }
    <?php
  }

  $accent_color = get_theme_mod( 'accent_color', '' );
  if ( ! empty( $accent_color ) ) {
    ?>
    a:hover {
      color: <?php echo $accent_color; ?>;
      border-bottom-color: <?php echo $accent_color; ?>;
    }

    button,
    input[type="submit"] {
      background-color: <?php echo $accent_color; ?>;
    }
    <?php
  }

  $custom_background_color = get_theme_mod( 'custom_background_color', '' );
  if ( ! empty( $custom_background_color ) ) {
    ?>
    body {
      background-color: <?php echo $custom_background_color; ?>;
    }
    <?php
  }

  $wrapper_background_color = get_theme_mod( 'wrapper_background_color', '' );
  if ( ! empty( $wrapper_background_color ) ) {
    ?>
    .wrapper {
      background-color: <?php echo $wrapper_background_color; ?>;
    }
    <?php
  }

  $social_icon_color = get_theme_mod( 'social_icon_color', '' );
  if ( ! empty( $social_icon_color ) ) {
    ?>
    .social-icon {
      fill: <?php echo $social_icon_color; ?>;
    }
    <?php
  }


  $css = ob_get_clean();
  return $css;
}

// Modify our styles registration like so:

function theme_enqueue_styles() {
wp_enqueue_style( 'theme-styles', get_stylesheet_uri() ); // This is where you enqueue your theme's main stylesheet
$custom_css = theme_get_customizer_css();
wp_add_inline_style( 'theme-styles', $custom_css );
}

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

