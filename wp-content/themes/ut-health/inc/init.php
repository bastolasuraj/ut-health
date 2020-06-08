<?php
if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
//require cs-framework
//require_once(get_template_directory().'/inc/codestar-framework/codestar-framework.php');
//meta options for codestar v2.0.1
//require_once get_template_directory() .'/inc/1.php';
// theme options controls
//require_once(get_template_directory().'/inc/theme-options.php');
// metaboxes controls
require_once(get_template_directory().'/inc/metaboxes.php');
require_once( get_template_directory() ) . '/inc/uth-custom-heading.php';
// require_once(get_template_directory().'/inc/meta-options.php');
// shortcodes
//require_once(get_template_directory().'/inc/shortcodes.php');

// template functions
//require_once(get_template_directory().'/inc/template-functions.php');
// hooks
//require_once(get_template_directory().'/inc/hook-functions.php');

// rws custom post type


//add_action('cs_customize_options','rws_disable_customizer_cs_defaults');
//used to add customizer fields from cs framework.
//function rws_disable_customizer_cs_defaults(){
//	$options 	= array(); // for removing customizer defaults by cs framework
//	return $options;
//}