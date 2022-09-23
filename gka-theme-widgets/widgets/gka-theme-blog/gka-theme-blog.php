<?php
/*
* Widget Name: (GKA)+ Blog
* Description: A Widget allows you to add latest blog list layout.
* Author: GKA Creative Agency
* Author URI: https://gkaadvertising.com/
*/

class GKA_Theme_Blog extends SiteOrigin_Widget {

    function __construct() {

		parent::__construct(
			'gka-theme-blog',
			__('(GKA)+ Blog', 'gka-theme-widgets'),
			array(
				'description' => __('A Widget allows you to add latest blog list layout.', 'gka-theme-widgets')
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
            'category' => array(
				'type'    => 'select',
                'label'   => __( 'Category', 'gka-bundle-widgets' ),
                'default' => 'default',
				'options' => $categories,
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
			// Blog
			'total_post' => $instance['total_post'],
			'category' => $instance['category'],
		);
	}

}

siteorigin_widget_register( 'gka-theme-blog', __FILE__, 'GKA_Theme_Blog' );