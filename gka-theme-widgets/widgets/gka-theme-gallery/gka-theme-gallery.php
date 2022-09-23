<?php
/*
* Widget Name: (GKA)+ Gallery
* Description: Development Library for Widgets
* Author: GKA Creative Agency
* Author URI: https://gkaadvertising.com/
*/

class GKA_Theme_Gallery_Widget extends SiteOrigin_Widget {

    function __construct() {

		parent::__construct(
			'gka-theme-gallery',
			__('(GKA)+ Gallery', 'gka-theme-widgets'),
			array(
				'description' => __('Development Library for Widgets.', 'gka-theme-widgets')
			),
			array(),
			false,
			plugin_dir_path(__FILE__)
        );
        
    }
    
    function get_widget_form() {

		// Gets taxonomy objects and extracts the 'label' field from each one.
		$categories = wp_list_pluck( get_categories( array('orderby' => 'term_id', 'order'   => 'ASC') ), 'name', 'term_id' );

        $result = gka_theme_get_gallery_list();
		$options = array();
		foreach ($result as $key => $val) {
			$options += [$val->gid => __($val->title, 'gka-bundle-widgets')];
		}	

        return array(
			'title' => array(
				'type' => 'text',
				'label' => __('Title', 'gka-bundle-widgets'),
            ),
            'slider' => array(
				'type'    => 'select',
				'label'   => __( 'Slider', 'gka-bundle-widgets' ),
				'options' => $options,
			),
            'template' => array(
				'type'    => 'select',
				'label'   => __( 'Template', 'gka-bundle-widgets' ),
                'default' => 'template-1',
				'options' => array(
					'template-1'	    => __( 'Template 1', 'gka-bundle-widgets' ),
					'template-2'    	=> __( 'Template 2', 'gka-bundle-widgets' ),
				),
			),
        );
    }

    public function get_template_variables( $instance, $args ) {
		// Return your instance value here
        return array(
			// Header
			'title' => $instance['title'],
            // Options
            'slider_id' => $instance['slider'],
		);
	}
	
	// Return template file name without file extension e.g. return 'hello-world-template';
	function get_template_name($instance) {
        return $instance['template'];
	}
	
	function get_style_name($instance) {
		// Return template file name without file extension e.g. return 'style';
        return false;
	}
	
}

siteorigin_widget_register( 'gka-theme-gallery', __FILE__, 'GKA_Theme_Gallery_Widget' );