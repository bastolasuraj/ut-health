<?php

function custom_excerpt_length( $length ) {
	// return 20;
	if (is_home()) {
		return 70;
		} else {
		return 20;
		}
		
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
function uth_theme_supports(){
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails',array('post', 'page','what-to-do','top-slider') );
	add_theme_support('menus');
	add_theme_support( 'custom-logo' );
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );
}
///
/// Enqueuing Scripts and styles
///
function uth_scripts_and_styles(){

	global $rws_options;

	//adding google fonts
	/*$query_args = array(
		'family' => 'Montserrat:200,300,400,500,600,700,800,900|Oswald:300,400,500,600,700',
		);
	wp_register_style( 'rws-google_fonts', add_query_arg( $query_args, "//fonts.googleapis.com/css" ), array() , null );*/

	//enqueing styles
	wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/assets/css/bootstrap.css',array(), '1.0.0', 'all' );
	wp_enqueue_style( 'google', 'https://fonts.googleapis.com/css?family=David+Libre:400,500,700|Open+Sans:400,700',array(), '1.0.0', 'all' );
	wp_enqueue_style( 'owl.carousel.css', get_template_directory_uri().'/assets/css/owl.carousel.css',array(), '1.0.0', 'all' );
	wp_enqueue_style( 'owl.theme.css', get_template_directory_uri().'/assets/css/owl.theme.default.css',array(), '1.0.0', 'all' );
	wp_enqueue_style( 'meanmenu.css', get_template_directory_uri().'/assets/css/meanmenu.css',array(), '1.0.0', 'all' );

	//wp_enqueue_style( 'rws-style-css', get_stylesheet_uri(), array('rws-google_fonts'), '1.0.0', 'all' );
	wp_enqueue_style( 'rws-style-css', get_stylesheet_uri(), '', '1.0.0', 'all' );
//	wp_enqueue_style( 'responsive.css', get_template_directory_uri().'/assets/css/responsive.css',array(), '1.0.0', 'all' );
	wp_enqueue_style( 'font-awesome.min.css', get_template_directory_uri().'/assets/css/font-awesome.min.css',array(), '1.0.0', 'all' );

	//enqueing scripts
	wp_enqueue_script( 'bootstrap.min.js', get_template_directory_uri().'/assets/js/bootstrap.js', array( 'jquery' ), '1.0.0', true );
	wp_enqueue_script( 'owl.carousel.js', get_template_directory_uri().'/assets/js/owl.carousel.js', array( 'jquery' ), '1.0.0', true );
//	wp_enqueue_script( 'jquery.js', get_template_directory_uri().'/assets/js/jquery.js', array( 'jquery' ), '1.0.0', true );
	wp_enqueue_script( 'meanmenu.js', get_template_directory_uri().'/assets/js/jquery.meanmenu.js', array( 'jquery' ), '1.0.0', true );
	wp_enqueue_script( 'popper.min.js', get_template_directory_uri().'/assets/js/popper.min.js', array( 'jquery' ), '1.0.0', true );
	//wp_enqueue_script( 'jquery-ui.js', '//code.jquery.com/ui/1.11.4/jquery-ui.js', array( 'jquery' ), '1.0.0', true );
	wp_enqueue_script( 'rws-custom-js', get_template_directory_uri().'/assets/js/custom.js', array( 'jquery', 'owl.carousel.js', 'meanmenu.js' ), '1.0.0', true );
	wp_enqueue_script( 'sticky-js', get_template_directory_uri().'/assets/js/theia-sticky-sidebar.js', array(), '1.0.0', true );
}
add_action('wp_enqueue_scripts','uth_scripts_and_styles');
///
/// registering Menus
///
function uth_custom_new_menu() {
	register_nav_menus(
		array(
			'primary-menu' => __( 'Primary Menu Spot' ),
			'footer-menu' => __( 'Footer Menu Spot' ),
			'end-menu' => __( 'Footnote Menu Spot' ),
		)
	);
}
add_action( 'init', 'uth_custom_new_menu' );
///
/// Custom Post Types Section
///
require_once get_theme_file_path().'/cpts.php';
///
/// Codestar Framework
///
require_once get_theme_file_path().'/inc/init.php';
// add_filter( 'csf_welcome_page', '__return_false' );
///
/// Admin Section
///
function uth_admin_custom_scripts() {
	// wp_enqueue_script( 'metabox-switch', get_template_directory_uri() . '/assets/js/metaswitch.js',  array( 'jquery' ), '1.1.1', true );
//	wp_enqueue_script( 'metabox-old-switch', get_template_directory_uri() . '/assets/js/metaswitch-classic.js',  array( 'jquery' ), '1.1.1', true );
}
add_action( 'admin_enqueue_scripts', 'uth_admin_custom_scripts' );
///
/// Widgets Section
///
add_action( 'widgets_init', 'uth_register_sidebars' );
function uth_register_sidebars() {
	//widget support for a footer
	for ($i=1; $i < 6; $i++) {
		register_sidebar(array(
			'name' => 'Footer Widget '.$i,
			'id' => 'footer-widget-'.$i,
			'description' => 'Widgets in this area will be shown on the Footer.',
			'before_widget' => '<aside id="%1$s" class="widget">',
			'after_widget'  => '</aside>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>'
		));
	}

	register_sidebar(array(
		'name' => 'Event Widget ',
		'id' => 'event-widget',
		'description' => 'This Widget is used for events.',
		'before_widget' => '<aside id="%1$s" class="widget">',
		'after_widget'  => '</aside>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>'
	));
	// register_sidebar(array(
	// 	'name' => 'Search Widget ',
	// 	'id' => 'search-widget',
	// 	'description' => 'This Widget is used for events Search Field.',
	// 	'before_widget' => '<aside id="%1$s" class="widget">',
	// 	'after_widget'  => '</aside>',
	// 	'before_title' => '<h2 class="widget-title">',
	// 	'after_title' => '</h2>'
	// ));

}
///
/// Removing [...] or more from Excerpt
///
function new_excerpt_more( $more ) {
	return '';
}
add_filter('excerpt_more', 'new_excerpt_more');
///
/// Custom Meta Box For What-we-do
///
function uth_add_custom_box()
{
	add_meta_box(
		'wporg_box_id',           // Unique ID
		'Custom Meta Box Title',  // Box title
		'wporg_custom_box_html',  // Content callback, must be of type callable
		'what-we-do'
	);
}
add_action('add_meta_boxes', 'uth_add_custom_box');
function wporg_custom_box_html($post)
{
	?>
	<label for="uth_logo">Description for this field</label>
	<?php
}
/// commented for a reason
///
//
//add_action('init', 'wpse70000_add_excerpt', 100);
//function wpse70000_add_excerpt()
//{
//	add_post_type_support('post', 'page-attributes');
//}
///
/// Shortcodes
///
require_once get_theme_file_path().'/shortcodes.php';
