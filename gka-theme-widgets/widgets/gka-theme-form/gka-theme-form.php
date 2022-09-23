<?php
/*
* Widget Name: (GKA)+ WPForm
* Description: A widget which allows add WP Form.
* Author: GKA Creative Agency
* Author URI: https://gkaadvertising.com/
*/

class GKA_Theme_Form extends SiteOrigin_Widget {

    function __construct() {

		parent::__construct(
			'gka-theme-form',
			__('(GKA)+ WPForm', 'gka-theme-widgets'),
			array(
				'description' => __('A widget which allows add WP Form.', 'gka-theme-widgets')
			),
			array(),
			false,
			plugin_dir_path(__FILE__)
        );
        
    }
    
    function get_widget_form() {

		// Get available WPForm
		$args = array(  
			'post_type' => 'wpforms',
			'post_status' => 'publish'
		); 
		$posts = wpforms()->form->get();
		$wpforms = wp_list_pluck( $posts, 'post_title', 'ID' );

        return array(
			'title' => array(
				'type' => 'text',
				'label' => __('Title', 'gka-bundle-widgets'),
            ),
			'eye_brow' => array(
				'type' => 'text',
				'label' => __('Eyebrow Text', 'gka-bundle-widgets'),
            ),
			'text' => array(
				'type' => 'textarea',
				'label' => __('Description', 'gka-theme-widgets'),
				'description' => __( 'Only work on Template 1', 'gka-widgets-bundle' ),
				'row' => 4,
				'hidden' => true,
			),
            'wpforms' => array(
				'type'    => 'select',
				'label'   => __( 'WPForms', 'gka-bundle-widgets' ),
				'options' => $wpforms,
			),
            'template' => array(
				'type'    => 'select',
				'label'   => __( 'Template', 'gka-bundle-widgets' ),
                'default' => 'contact-us',
				'options' => array(
					'contact-us'	    => __( 'Contact Us', 'gka-bundle-widgets' ),
					'newsletter'    	=> __( 'Newsletter', 'gka-bundle-widgets' ),
					'template-1'    	=> __( 'Template 1', 'gka-bundle-widgets' ),
				),
			),
			'background_color' => array(
				'type'    => 'select',
				'label'   => __( 'Background Color', 'gka-bundle-widgets' ),
                'default' => 'bg-yellow',
				'options' => array(
					'contact-yellow-bg'	    => __( 'Yellow', 'gka-bundle-widgets' ),
					'contact-green-bg'    	=> __( 'Green', 'gka-bundle-widgets' ),
				),
			),
        );
    }

    public function get_template_variables( $instance, $args ) {
		// Return your instance value here
        return array(
            // Header
			'title' => $instance['title'],
			'eye_brow' => $instance['eye_brow'],
			'text' => $instance['text'],
			// Options
			'background_color' => $instance['background_color'],
            // Form
			'wpforms' => $instance['wpforms'],
		);
	}

    // Return template file name without file extension e.g. return 'hello-world-template';
	function get_template_name($instance) {
        return $instance['template'];
	}

}

siteorigin_widget_register( 'gka-theme-form', __FILE__, 'GKA_Theme_Form' );