<?php
/*
* Widget Name: (GKA)+ Page List
* Description: A widget which allows add multiple page or highlight as list.
* Author: GKA Creative Agency
* Author URI: https://gkaadvertising.com/
*/

class GKA_Theme_Page_List_Widget extends SiteOrigin_Widget {

    function __construct() {

		parent::__construct(
			'gka-theme-page-list',
			__('(GKA)+ Page List', 'gka-theme-widgets'),
			array(
				'description' => __('A widget which allows add multiple page or highlight as list.', 'gka-theme-widgets')
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
				'label' => __('Title', 'gka-theme-widgets'),
            ),
			'show_title' => array(
				'type' => 'checkbox',
				'label' => __('Show Title', 'gka-theme-widgets'),
				'default' => true,
			),
			'section_id' => array(
				'type' => 'text',
				'label' => __('Section ID', 'gka-theme-widgets'),
            ),
            'template' => array(
				'type'    => 'select',
				'label'   => __( 'Template', 'gka-bundle-widgets' ),
                'default' => 'template-1',
				'options' => array(
					'template-1'	    => __( 'Template 1', 'gka-bundle-widgets' ),
					'template-2'    	=> __( 'Template 2', 'gka-bundle-widgets' ),
					'template-3'    	=> __( 'Template 3', 'gka-bundle-widgets' ),
					'template-4'    	=> __( 'Template 4', 'gka-bundle-widgets' ),
					'template-5'    	=> __( 'Template 5', 'gka-bundle-widgets' ),
				),
			),
            'pages' => array(
				'type' => 'repeater',
				'label' => __( 'Pages', 'gka-bundle-widgets' ),
				'item_name' => __('Page', 'gka-bundle-widgets'),
				'item_label' => array(
					'selector' => "[id*='header']",
					'update_event' => 'change',
					'value_method' => 'val'
				),
				'fields' => array(
					'header' => array(
						'type' => 'text',
						'label' => __('Header', 'gka-bundle-widgets'),
                    ),
					'description' => array(
						'type' => 'textarea',
						'label' => __('Description', 'gka-bundle-widgets'),
						'row' => 2,
						'hidden' => true,
					),
                    'image' => array(
                        'type' => 'media',
                        'label' => __('Image', 'gka-bundle-widgets'),
                    ),
                    'link' => array(
                        'type' => 'link',
                        'label' => __('Link', 'gka-bundle-widgets'),
                    ),
				),
			),
			'design_layout' => array(
				'type' => 'section',
				'label' => __('Design & Layout', 'gka-bundle-widgets'),
				'hide' => true,
				'fields' => array(
					'container_color' => array(
						'type' => 'color',
						'label' => __('Container Background Color', 'gka-bundle-widgets'),
					),
				),
			),
        );
    }

	// Return your instance value here
    public function get_template_variables( $instance, $args ) {
        return array(
            // Header
			'title' => $instance['title'],
			'show_title' => $instance['show_title'],
			'section_id' => $instance['section_id'],
            // Pages
			'pages' => $instance['pages'],
			// Design
			'container_color' => $instance['design_layout']['container_color'],
		);
	}
	
	// Return template file name without file extension e.g. return 'hello-world-template';
	function get_template_name($instance) {
        return $instance['template'];
	}
	
	// Return template file name without file extension e.g. return 'style';
	function get_style_name($instance) {
        return false;
	}

}

siteorigin_widget_register( 'gka-theme-page-list', __FILE__, 'GKA_Theme_Page_List_Widget' );