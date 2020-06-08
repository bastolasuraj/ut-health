<?php
function uth_create_post_type() {

register_post_type( 'what-we-do',
    array(
        'labels' => array(
            'name' => __( 'What We Do' ),
            'singular_name' => __( 'What We Do' )
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'what-we-do'),
    )
);
register_post_type( 'top-slider',
    array(
        'labels' => array(
            'name' => __( 'Top Sliders' ),
            'singular_name' => __( 'Top Slider' )
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'top-slider'),
    )
);
register_post_type( 'event',
    array(
        'labels' => array(
            'name' => __( 'Events' ),
            'singular_name' => __( 'Event' )
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'event'),
    )
);
}
add_action( 'init', 'uth_create_post_type' );

add_action( 'init', 'create_custom_event_taxonomy', 0 );
 
//create a custom taxonomy name it categories for your posts
 
function create_custom_event_taxonomy() {
 
// Add new taxonomy, make it hierarchical like categories
//first do the translations part for GUI
 
  $labels = array(
    'name' => esc_html_x( 'Categories', 'taxonomy general name' ),
    'singular_name' => esc_html_x( 'Category', 'taxonomy singular name' ),
    'search_items' =>  esc_html__( 'Search Categories' ),
    'all_items' => esc_html__( 'All Categories' ),
    'parent_item' => esc_html__( 'Parent Category' ),
    'parent_item_colon' => esc_html__( 'Parent Category:' ),
    'edit_item' => esc_html__( 'Edit Category' ), 
    'update_item' => esc_html__( 'Update Category' ),
    'add_new_item' => esc_html__( 'Add New Category' ),
    'new_item_name' => esc_html__( 'New Category Name' ),
    'menu_name' => esc_html__( 'Categories' ),
  );    
 
// Now register the taxonomy
 
  register_taxonomy('event_categories',array('event'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'category' ),
  ));
 
}