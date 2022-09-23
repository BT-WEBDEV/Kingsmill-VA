<?php
/*
* Widget Name: (GKA)+ Testimonials
* Description: A widget which allows add latest Testimonials layout.
* Author: GKA Creative Agency
* Author URI: https://gkaadvertising.com/
*/

class GKA_Theme_Testimonials extends SiteOrigin_Widget {

    function __construct() {

		parent::__construct(
			'gka-theme-testimonials',
			__('(GKA)+ Testimonials', 'gka-theme-widgets'),
			array(
				'description' => __('A widget which allows add latest Testimonials layout.', 'gka-theme-widgets')
			),
			array(),
			false,
			plugin_dir_path(__FILE__)
        );
        
    }
    
    function get_widget_form() {

		// Gets taxonomy objects and extracts the 'label' field from each one.
		$categories = wp_list_pluck( get_categories( array('orderby' => 'term_id', 'order'   => 'ASC') ), 'name', 'term_id' );

        return array(
			'title' => array(
				'type' => 'text',
				'label' => __('Title', 'gka-bundle-widgets'),
            ),
            'total_post' => array(
				'type' => 'number',
				'label' => __('Total Posts', 'gka-bundle-widgets'),
			),
        );
    }

    public function get_template_variables( $instance, $args ) {
		// Return your instance value here
        return array(
            // Header
			'title' => $instance['title'],
		);
	}

}

siteorigin_widget_register( 'gka-theme-testimonials', __FILE__, 'GKA_Theme_Testimonials' );