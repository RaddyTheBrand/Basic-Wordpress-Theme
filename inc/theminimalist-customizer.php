<?php

class TheMinimalist_Customizer {

	public function __construct() {
		add_action( 'customize_register', array( $this, 'register_customize_sections' ) );
	}

	public function register_customize_sections( $wp_customize ) {

        /*
        * Add Panels
        */

		// New panel for "Layout".
        $wp_customize->add_section('basic-author-callout-section', array(
            'title' => 'Author',
            'priority' => 2,
            'description' => __('The Author section is only displayed on the Blog page.', 'theminimalist'),
        ));
        $wp_customize->add_setting('basic-author-callout-text', array(
            'default' => ''
        ));
    
        /*
        * Add settings to sections.
        */
        $this->author_callout_section( $wp_customize );

    }

    /*
    * Author Section
    */
    private function author_callout_section( $wp_customize ) {
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

        // $wp_customize->add_setting('basic-author-callout-text', array(
        //     'default' => ''
        // ));
    
        // $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'basic-author-callout-control', array(
        //     'label' => 'About Author',
        //     'section' => 'basic-author-callout-section',
        //     'settings' => 'basic-author-callout-text',
        //     'type' => 'textarea'
        // )));
    }


    /*
    * Sanitize
    */
 

    public function sanitize_select( $input ) {
        return sanitize_text_field( $input );
    } 


}