<?php 
if(class_exists('CSF')){
	$prefix = 'homepage_meta';
	CSF::createMetabox( $prefix, array(
		'title'              => 'Home Meta Options',
		'post_type'          => array('page'),
		'data_type'          => 'serialize',
		'context'            => 'normal',
		'priority'           => 'default',
		'exclude_post_types' => array(),
		'page_templates'     => 'templates/template-homepage.php',
		'post_formats'       => '',
		'show_restore'       => false,
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
		'title'  => ucfirst('top slider'),
		'fields' =>
				array(
					array(
						'id'=>'top_slider_home',
						'type'=>'repeater',
						// 'title'=>'Slider',
						'fields'=>
							array(
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
							)
					)
				)
	));
	
}