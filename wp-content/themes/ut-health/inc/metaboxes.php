<?php

///
/// Common Meta Options
///

if(class_exists('CSF')){
	$prefix = 'uth_common_section';
	CSF::createMetabox( $prefix, array(
		'title'              => 'Common Meta Options',
		'post_type'          => array('page','post'),
		'data_type'          => 'serialize',
		'context'            => 'normal',
		'priority'           => 'high',
		'theme'				 =>	'light',
		'exclude_post_types' => array(),
		'page_templates'     => '',
		'post_formats'       => '',
		'show_restore'       => false,
	) );
	CSF::createSection($prefix,array(
		'title'=>'Common',
		'icon'=>'fa fa-circle',
		'fields'=>array(
			array(
				'id'            => 'uth_common_banner_enable',
				'type'          => 'switcher',
				'title'         => 'Banner Enable',
			),
			array(
				'id'            => 'uth_common_title',
				'type'          => 'text',
				'title'         => 'Banner Title',
				'dependency' => array( 'uth_common_banner_enable', '==', 'true' ),
			),
			array(
				'id'            => 'uth_common_image',
				'type'          => 'media',
				'title'         => 'Banner Image',
				'dependency' => array( 'uth_common_banner_enable', '==', 'true' ),
			),
		)
	));
}

///
/// Homepage Meta Options
///

if(class_exists('CSF')){
	$prefix = 'homepage_meta';
	CSF::createMetabox( $prefix, array(
		'title'              => 'Home Meta Options',
		'post_type'          => array('page'),
		'data_type'          => 'serialize',
		'context'            => 'normal',
		'priority'           => 'default',
		'theme'				 =>	'light',
		'exclude_post_types' => array(),
		'page_templates'     => 'templates/template-homepage.php',
		'post_formats'       => '',
		'show_restore'       => false,
	));
	CSF::createSection( $prefix, array(
		// 'id'=>'slider_bg_home_options',
		'title'  => 'Sliders',
		'fields' =>
			array(
				array(
					'id'=>'uth_new_slider_home_new',
					'type'=>'repeater',
					'title'=>'slider',
					'fields' => array(
							array(
								'id'=>'top_slider_image_home',
								'type'=>'upload',
								'title'=>'Image for slider',
							),
							array(
								'id'=>'top_slider_header_text_home',
								'type'=>'text',
								'title'=>'Title',
							),
							array(
								'id'=>'top_slider_sub_header_home',
								'type'=>'text',
								'title'=>'Sub title',
							),
							array(
								'id'=>'top_slider_first_btn_text',
								'type'=>'text',
								'title'=>'Btn 1 Text',
							),
							array(
								'id'=>'top_slider_first_btn_url',
								'type'=>'text',
								'title'=>'Btn 1 Link',
							),
							array(
								'id'=>'top_slider_second_btn_text',
								'type'=>'text',
								'title'=>'Btn 2 Text',
							),
							array(
								'id'=>'top_slider_second_btn_url',
								'type'=>'text',
								'title'=>'Btn 2 Link',
							),
					),
				),
			)
	));
	CSF::createSection( $prefix, array(
		// 'id'=>'counter_bg_home_options',
		'title'  => 'Counter',
		'fields' =>

			array(
				array(
				'id'=>'counter_bg_home',
				'type'=>'upload',
				'title'=>'Section Background'
			),
				array(
					'id'=>'uth_new_counter_home_new',
					'type'=>'repeater',
					'title'=>'Counter',
					'fields' => array(
						array(
							'id'    => 'counter_text_home',
							'type'  => 'text',
							'title' => 'Counter'
						),
						array(
							'id'    => 'counter_image_home',
							'type'  => 'upload',
							'title' => 'Counter Image'
						),
						array(
							'id'    => 'counter_subtitle_home',
							'type'  => 'text',
							'title' => 'Counter Subtitle'
						),
					),

				),

			)


	));
	CSF::createSection( $prefix, array(
		'title'  => ucfirst('bottom section'),
		'fields' =>array(
			array(
				'id'            => 'uth_wwd_bottom_section_text',
				'type'          => 'text',
				'title'         => 'Bottom Section Text',
			),
			array(
				'id'            => 'uth_wwd_bottom_section_button_text',
				'type'          => 'text',
				'title'         => 'Button Text',
			),
			array(
				'id'            => 'uth_wwd_bottom_section_button_url',
				'type'          => 'text',
				'title'         => 'Button Link',
			),
		),
	));
	
}

///
/// Contact Us Meta Options
///

if(class_exists('CSF')){
	$prefix = 'uth_contact_section';
	CSF::createMetabox( $prefix, array(
		'title'              => 'Contact Us Meta Options',
		'post_type'          => array('page'),
		'data_type'          => 'serialize',
		'context'            => 'normal',
		'priority'           => 'default',
		'theme'				 =>	'light',
		'exclude_post_types' => array(),
		'page_templates'     => 'templates/template-contact-us.php',
		'post_formats'       => '',
		'show_restore'       => false,
	));
	CSF::createSection( $prefix, array(
		// 'id'=>'counter_bg_home_options',
		'title'  => 'contact',
		'fields' =>array(
			array(
				'id'	=>	'uth_contact_section_shortcode',
				'type'	=>	'textarea',
				'title'	=>	'cf7 Shortcode'
			),
			array(
				'id'	=>	'uth_contact_section_image',
				'type'	=>	'media',
				'title'	=>	'Detail Section Background'
			),
			array(
				'id'	=>	'uth_contact_section_address',
				'type'	=>	'textarea',
				'title'	=>	'Address Section'
			),array(
				'id'	=>	'uth_contact_section_address_label',
				'type'	=>	'text',
				'title'	=>	'Address Section Label'
			),
			array(
				'id'	=>	'uth_contact_section_phone',
				'type'	=>	'text',
				'title'	=>	'Phone Section'
			),array(
				'id'	=>	'uth_contact_section_phone_label',
				'type'	=>	'text',
				'title'	=>	'Phone Section Label'
			),
			array(
				'id'	=>	'uth_contact_section_email',
				'type'	=>	'text',
				'title'	=>	'Email Section'
			),array(
				'id'	=>	'uth_contact_section_email_label',
				'type'	=>	'text',
				'title'	=>	'Email Section Label'
			),
			
		)
	));
}

///
/// What We Do Meta Options (CPT)
///

if(class_exists('CSF')){
	$prefix = 'uth_wwd_sec';
	CSF::createMetabox( $prefix, array(
		'title'              => 'What We Do Meta Options',
		'post_type'          => array('what-we-do'),
		'data_type'          => 'serialize',
		'context'            => 'normal',
		'priority'           => 'high',
		'theme'				 =>	'light',
		'page_templates'     => '',
		'post_formats'       => '',
		'show_restore'       => true,
	) );
	CSF::createSection( $prefix,
		array(
			'title'  => 'Tagline',
			'icon'   => 'fa fa-tag',
			'fields' =>
				array(

					array(
						'id'            => 'uth_wwd_custom_enable',
						'type'          => 'switcher',
						'title'         => 'Section Enable',
					),
					// array(
					// 	'id'            => 'uth_wwd_title',
					// 	'type'          => 'text',
					// 	'title'         => 'Title',
					// 	'dependency' 	=> array( 'uth_wwd_custom_enable', '==', 'true' ),
					// ),
					array(
						'id'            =>  'uth_wwd_logo',
						'type'          =>  'media',
						'title'         =>  'Logo',
						'dependency' 	=> 	array( 'uth_wwd_custom_enable', '==', 'true' ),
					),
					array(
					 	'id'            =>  'uth_wwd_logo_overlay',
						'type'          =>  'media',
						'title'         =>  'Overlay Logo',
						'dependency' => array( 'uth_wwd_custom_enable', '==', 'true' ),
					),
					array(
						'id'            =>  'uth_wwd_image',
						'type'          =>  'media',
						'title'         =>  'Image',
						'dependency' => array( 'uth_wwd_custom_enable', '==', 'true' ),
					),
					// array(
					// 	'id'            =>  'uth_wwd_content',
					// 	'type'          =>  'wp_editor',
					// 	'title'         =>  'Content',
					// 	'dependency' => array( 'uth_wwd_custom_enable', '==', 'true' ),
					// ),
					array(
						'id'			=>	'uth_wwd_readmore_switch',
						'type'			=>	'switcher',
						'title'			=>	'Read More Link',
						'dependency' => array( 'uth_wwd_custom_enable', '==', 'true' ),
					),
					array(
						'id'            => 'uth_wwd_readmore_link',
						'type'          => 'text',
						'title'         => 'Read More Link',
						'dependency' => array( 'uth_wwd_custom_enable|uth_wwd_readmore_switch', '==|==', 'true|true' ),
					),
				),
		)
	);
}

///
/// Events Meta Options (CPT)
///

if(class_exists('CSF')){
	$prefix = 'uth_events_sect';
	CSF::createMetabox( $prefix, array(
		'title'              => 'Events Meta Options',
		'post_type'          => array( 'event' ),
		'data_type'          => 'serialize',
		'context'            => 'normal',
		'priority'           => 'default',
		'theme'				 =>	'light',
		'exclude_post_types' => array(),
		'page_templates'     => '',
		'post_formats'       => '',
		'show_restore'       => false,
	) );
	CSF::createSection( $prefix,
		array(
			'title'  => 'Tagline',
			'icon'   => 'fa fa-tag',
			'fields' =>
				array(

					array(
						'id'            => 'uth_events_custom_enable',
						'type'          => 'switcher',
						'title'         => 'Event Enable',
					),
					// array(
					// 	'id'			=>	'uth_events_title',
					// 	'type'			=>	'text',
					// 	'title'			=>	'Title of Event',
					// 	'dependency'	=>	array('uth_events_custom_enable','==','true')
					// ),
					array(
						'id'			=>	'uth_events_image',
						'type'			=>	'media',
						'title'			=>	'Image for the Event',
						'dependency'	=>	array('uth_events_custom_enable','==','true')
					),
					array(
						'id'			=>	'uth_events_date_from',
						'type'			=>	'date',
						'title'			=>	'starting date',
						'dependency'	=>	array('uth_events_custom_enable','==','true'),
					),
					array(
						'id'			=>	'uth_events_date_to',
						'type'			=>	'date',
						'title'			=>	'Ending date',
						'dependency'	=>	array('uth_events_custom_enable','==','true'),
					),
					// array(
					// 	'id'			=>	'uth_events_detail',
					// 	'type'			=>	'wp_editor',
					// 	'title'			=>	'Details of the Event',
					// 	'dependency'	=>	array('uth_events_custom_enable','==','true'),
					// ),
					// array(
					// 	'id'			=>	'uth_events_button_url',
					// 	'type'			=>	'text',
					// 	'title'			=>	'Button URL',
					// 	'dependency'	=>	array('uth_events_custom_enable','==','true'),
					// ),
				),
		) );
}
if(class_exists('CSF')){
	$prefix = 'uth_events_show_hide';
	CSF::createMetabox( $prefix, array(
		'title'              => 'Events Filter Options',
		'post_type'          => array( 'page' ),
		'data_type'          => 'serialize',
		'context'            => 'normal',
		'priority'           => 'default',
		'theme'				 =>	'light',
		'exclude_post_types' => array(),
		'page_templates'     => 'templates/template-events.php',
		'post_formats'       => '',
		'show_restore'       => false,
	) );
	CSF::createSection( $prefix,
		array(
			'title'  => 'Tagline',
			'icon'   => 'fa fa-tag',
			'fields' =>
				array(

					array(
						'id'	=>	'show_hide_showall',
						'title'	=>	'Show/Hide',
						'type'	=>	'switcher',
					)
				)
					));
				}
///
/// Theme Options
///

if(class_exists('CSF')){
	$prefix = 'my_framework';
	CSF::createOptions( $prefix, array(
		'menu_title'         => 'UTH Options',
		'menu_slug'          => 'uth-options',
		'theme'				 =>	'light',
	) );
	//
	// Create options
	

	//
	// Create a section
	CSF::createSection( $prefix, array(
        'title'  => '404 Messages',
        'fields' => array(
			array(
				'id'=>'loop_message',
				'title'=>'your Message',
				'type'=>'text'
            )
        )
	  ) );
	  CSF::createSection( $prefix, array(
        'title'  => 'Copyright',
        'fields' => array(
            array(
                'id'=>'copyright_text',
                'title'=>'Copyright Text',
                'type'=>'textarea',
			),
        )
	  ) );
	  CSF::createSection( $prefix, array(
        'title'  => 'Header Images',
        'fields' => array(
            array(
                'id'=>'index_image',
                'title'=>'Main Logo',
                'type'=>'media',
			),array(
                'id'=>'homepage_image',
                'title'=>'Brand Image Right',
                'type'=>'media',
			),
        )
	  ) );
	//   CSF::createSection( $prefix, array(
    //     'title'  => 'footmenu',
    //     'fields' => array(
    //         array(
    //             'id'=>'footmenu',
    //             'title'=>'Copyright Text',
    //             'type'=>'repeater',
	// 		),
    //     )
    //   ) );
}