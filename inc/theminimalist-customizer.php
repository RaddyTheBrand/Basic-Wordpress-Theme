<?php

class TheMinimalist_Customizer {

	public function __construct() {
		add_action( 'customize_register', array( $this, 'register_customize_sections' ) );
	}

	public function register_customize_sections( $wp_customize ) {

        /*
        * Add settings to sections.
        */
        $this->author_callout_section( $wp_customize );
        $this->social_callout_section( $wp_customize );
        $this->footer_callout_section( $wp_customize );
        $this->colours_callout_section( $wp_customize );
    }
    
    /* Sanitize Inputs */
    public function sanitize_custom_option($input) {
        return ( $input === "No" ) ? "No" : "Yes";
    }

    public function sanitize_custom_text($input) {
        return filter_var($input, FILTER_SANITIZE_STRING);
    }

    public function sanitize_about_text($input) {
        return $input;
    }

    public function sanitize_custom_url($input) {
        return filter_var($input, FILTER_SANITIZE_URL);
    }

    public function sanitize_custom_email($input) {
        return filter_var($input, FILTER_SANITIZE_EMAIL);
    }

    public function sanitize_hex_color( $color ) {
        if ( '' === $color ) {
            return '';
        }
     
        // 3 or 6 hex digits, or the empty string.
        if ( preg_match( '|^#([A-Fa-f0-9]{3}){1,2}$|', $color ) ) {
            return $color;
        }
    }
  
    /* Author Section */
    private function author_callout_section( $wp_customize ) {

		// New panel for "Layout".
        $wp_customize->add_section('basic-author-callout-section', array(
            'title' => 'Author',
            'priority' => 2,
            'description' => __('The Author section is only displayed on the Blog page.', 'theminimalist'),
        ));
    
        $wp_customize->add_setting('basic-author-callout-display', array(
            'default' => 'No',
            'sanitize_callback' => array( $this, 'sanitize_custom_option' )
        ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'basic-author-callout-display-control', array(
            'label' => 'Display this section?',
            'section' => 'basic-author-callout-section',
            'settings' => 'basic-author-callout-display',
            'type' => 'select',
            'choices' => array('No' => 'No', 'Yes' => 'Yes')
        )));

        $wp_customize->add_setting('basic-author-callout-text', array(
            'default' => '',
            'sanitize_callback' => array( $this, 'sanitize_about_text' )
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
            'sanitize_callback' => array( $this, 'sanitize_custom_url' )
        ));
    
        $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'basic-author-callout-image-control', array(
            'label' => 'Image',
            'section' => 'basic-author-callout-section',
            'settings' => 'basic-author-callout-image',
            'width' => 542,
            'height' => 310
        )));

    }


    /* Social Section */
    private function social_callout_section( $wp_customize ) {

        $wp_customize->add_section('basic-social-callout-section', array(
            'title' => 'Social',
            'priority' => 3,
            'description' => __('Leave blank if you dont want a social network to be displayed.', 'theminimalist'),
        ));
      
        $wp_customize->add_setting('basic-social-callout-display', array(
            'default' => 'No',
            'sanitize_callback' => array( $this, 'sanitize_custom_option' )
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
            'sanitize_callback' => array( $this, 'sanitize_custom_url' )
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
            'default' => '',
            'sanitize_callback' => array( $this, 'sanitize_custom_url' )
        ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'basic-social-callout-control-facebook', array(
            'label' => 'Facebook URL',
            'section' => 'basic-social-callout-section',
            'settings' => 'basic-social-callout-facebook',
            'type' => 'url',
        )));

        /* Instagram */
        $wp_customize->add_setting('basic-social-callout-instagram', array(
            'default' => '',
            'sanitize_callback' => array( $this, 'sanitize_custom_url' )
        ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'basic-social-callout-control-instagram', array(
            'label' => 'Instagram URL',
            'section' => 'basic-social-callout-section',
            'settings' => 'basic-social-callout-instagram',
            'type' => 'url',
        )));


        /* Pinterest */
        $wp_customize->add_setting('basic-social-callout-pinterest', array(
            'default' => '',
            'sanitize_callback' => array( $this, 'sanitize_custom_url' )
        ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'basic-social-callout-control-pinterest', array(
            'label' => 'Pinterest',
            'section' => 'basic-social-callout-section',
            'settings' => 'basic-social-callout-pinterest',
        )));


        /* RSS */
        $wp_customize->add_setting('basic-social-callout-rss', array(
            'default' => '',
            'sanitize_callback' => array( $this, 'sanitize_custom_url' )
        ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'basic-social-callout-control-rss', array(
            'label' => 'RSS URL',
            'section' => 'basic-social-callout-section',
            'settings' => 'basic-social-callout-rss',
            'type' => 'url',
        )));

        /* Skype */
        $wp_customize->add_setting('basic-social-callout-skype', array(
            'default' => '',
            'sanitize_callback' => array( $this, 'sanitize_custom_url' )
        ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'basic-social-callout-control-skype', array(
            'label' => 'Skype',
            'section' => 'basic-social-callout-section',
            'settings' => 'basic-social-callout-skype',
            'type' => 'url',
        )));

        /* Snapchat */
        $wp_customize->add_setting('basic-social-callout-snapchat', array(
            'default' => '',
            'sanitize_callback' => array( $this, 'sanitize_custom_url' )
        ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'basic-social-callout-control-snapchat', array(
            'label' => 'Snapchat',
            'section' => 'basic-social-callout-section',
            'settings' => 'basic-social-callout-snapchat',
        )));


        /* Twitter */
        $wp_customize->add_setting('basic-social-callout-twitter', array(
            'default' => '',
            'sanitize_callback' => array( $this, 'sanitize_custom_url' )
        ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'basic-social-callout-control-twitter', array(
            'label' => 'Twitter URL',
            'section' => 'basic-social-callout-section',
            'settings' => 'basic-social-callout-twitter',
            'type' => 'url',
        )));

        /* WeChat */
        $wp_customize->add_setting('basic-social-callout-wechat', array(
            'default' => '',
            'sanitize_callback' => array( $this, 'sanitize_custom_url' )
        ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'basic-social-callout-control-wechat', array(
            'label' => 'WeChat',
            'section' => 'basic-social-callout-section',
            'settings' => 'basic-social-callout-wechat',
            'type' => 'url',
        )));

        /* WhatsApp */
        $wp_customize->add_setting('basic-social-callout-whatsapp', array(
            'default' => '',
            'sanitize_callback' => array( $this, 'sanitize_custom_url' )
        ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'basic-social-callout-control-whatsapp', array(
            'label' => 'WhatsApp Phone Number',
            'section' => 'basic-social-callout-section',
            'settings' => 'basic-social-callout-whatsapp',
            'type' => 'url',
        )));


        /* YouTube */
        $wp_customize->add_setting('basic-social-callout-youtube', array(
            'default' => '',
            'sanitize_callback' => array( $this, 'sanitize_custom_url' )
        ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'basic-social-callout-control-youtube', array(
            'label' => 'YouTube URL',
            'section' => 'basic-social-callout-section',
            'settings' => 'basic-social-callout-youtube',
            'type' => 'url',
        )));

        /* Email */
        $wp_customize->add_setting('basic-social-callout-email', array(
            'default' => '',
            'sanitize_callback' => array( $this, 'sanitize_custom_email' )
        ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'basic-social-callout-control-email', array(
            'label' => 'Email Address',
            'section' => 'basic-social-callout-section',
            'settings' => 'basic-social-callout-email',
            'type' => 'url',
        )));
      

    }

    /* Footer Section */
    private function footer_callout_section( $wp_customize ) {

        $wp_customize->add_section('basic-footer-callout-section', array(
            'title' => 'Footer',
            'priority' => 4,
        ));
      
        $wp_customize->add_setting('basic-footer-callout-display', array(
            'default' => 'No',
            'sanitize_callback' => array( $this, 'sanitize_custom_option' )
        ));
      
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'basic-footer-callout-display-control', array(
            'label' => 'Display Policy section?',
            'section' => 'basic-footer-callout-section',
            'settings' => 'basic-footer-callout-display',
            'type' => 'select',
            'choices' => array('No' => 'No', 'Yes' => 'Yes'),
        ))); 
      
      
        $wp_customize->add_setting('basic-footer-callout-privacy-policy', array(
            'default' => '/privacy',
            'sanitize_callback' => array( $this, 'sanitize_custom_url' )
        ));
      
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'basic-footer-callout-privacy-control', array(
            'label' => 'Privacy Policy URL',
            'section' => 'basic-footer-callout-section',
            'settings' => 'basic-footer-callout-privacy-policy',
            'description' => 'You can add custom URL for your Privacy page. Default is set to /privacy',
        )));
      
        $wp_customize->add_setting('basic-footer-callout-cookie-policy', array(
            'default' => '/cookie-policy',
            'sanitize_callback' => array( $this, 'sanitize_custom_url' )
        ));
      
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'basic-footer-callout-cookie-control', array(
            'label' => 'Privacy Policy URL',
            'section' => 'basic-footer-callout-section',
            'settings' => 'basic-footer-callout-cookie-policy',
            'description' => 'You can add custom URL for your Cookie Policy page. Default is set to /cookie-policy',
        )));
      
        $wp_customize->add_setting('basic-footer-callout-copyright', array(
            'default' => '',
            'sanitize_callback' => array( $this, 'sanitize_custom_text' )
        ));
      
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'basic-footer-callout-control', array(
            'label' => 'Copyright',
            'section' => 'basic-footer-callout-section',
            'settings' => 'basic-footer-callout-copyright',
            'type' => 'textarea'
        )));

    }

    /* Colours */
    private function colours_callout_section( $wp_customize ) {
        
        // Text color
        $wp_customize->add_setting( 'text_color', array(
            'default'   => '',
            'transport' => 'refresh',
            'sanitize_callback' => array( $this, 'sanitize_hex_color' )
        ));

        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'text_color', array(
            'section' => 'colors',
            'label'   => esc_html__( 'Text color', 'theminimalist' ),
        )));

        // Link color
        $wp_customize->add_setting( 'link_color', array(
            'default'   => '',
            'transport' => 'refresh',
            'sanitize_callback' => array( $this, 'sanitize_hex_color' )
        ));

        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_color', array(
            'section' => 'colors',
            'label'   => esc_html__( 'Link color', 'theminimalist' ),
        )));

        // Accent color
        $wp_customize->add_setting( 'accent_color', array(
            'default'   => '',
            'transport' => 'refresh',
            'sanitize_callback' => array( $this, 'sanitize_hex_color' )
        ));

        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'accent_color', array(
            'section' => 'colors',
            'label'   => esc_html__( 'Accent color', 'theminimalist' ),
        )));

        // Background color
        $wp_customize->add_setting( 'custom_background_color', array(
            'default'   => '',
            'transport' => 'refresh',
            'sanitize_callback' => array( $this, 'sanitize_hex_color' )
        ));

            $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'custom_background_color', array(
            'section' => 'colors',
            'label'   => esc_html__( 'Background color', 'theminimalist' ),
        )));

        // Wrapper color
        $wp_customize->add_setting( 'wrapper_background_color', array(
            'default'   => '',
            'transport' => 'refresh',
            'sanitize_callback' => array( $this, 'sanitize_hex_color' )
        ));

            $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wrapper_background_color', array(
            'section' => 'colors',
            'label'   => esc_html__( 'Wrapper color', 'theminimalist' ),
        )));

        // Social Icon color
        $wp_customize->add_setting( 'social_icon_color', array(
            'default'   => '',
            'transport' => 'refresh',
            'sanitize_callback' => array( $this, 'sanitize_hex_color' )
        ));

        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'social_icon_color', array(
            'section' => 'colors',
            'label'   => esc_html__( 'Social Icons color', 'theminimalist' ),
        )));
    }

}




