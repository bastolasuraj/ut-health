<?php
if ( ! defined('ABSPATH')) {die;}
// Cannot access pages directly.

/**
 * initializing the theme options array
 * @return array
 */
function rws_framework_options()
{
// ==================================================================================
// FRAMEWORK SETTINGS
// ==================================================================================

    $settings           = array(
        'menu_title'      => 'Theme Options',
        //'menu_type'       => 'add_theme_page', old version of codestar
        'menu_type'       => 'theme', // menu, submenu, options, theme, etc.
        'menu_slug'       => 'rws-framework',
        'ajax_save'       => true,
        'show_reset_all'  => false,
        'framework_title' => 'PC Framework <small>by Priemer Consulting</small>',
    );
// ===================================================================================
// FRAMEWORK OPTIONS
// ===================================================================================
    $options = array();

    // ------------------------------
    // a option section with tabs   -
    // ------------------------------
    $options[]      = array(
      'name'        => 'general-options',
      'title'       => 'General',
      'icon'        => 'fa fa-cog',

      // begin: fields
      'fields'      => array(
        array(
            'id'        => 'notice',
            'type'      => 'subheading',
            'content'   => __( 'General Theme Options', 'rws-aep'),

        ),

        array(
            'type'      => 'notice',
            'class'     => 'info',
            'content'   => __( 'Goto Appearance > Customize > Site Identity > Logo for site logo and Site Icon to add the Favicon.' ),

        ),

        array(
          'id'         => 'site_copyright',
          'type'       => 'textarea',
          'title'      => 'Copyright',
          'attributes' => array(
            'style'    => 'width: 100%;'
          ),
          'sanitize'   => 'html',
        ),

      ), // end: fields
    );

    $options[]   = array(
          'name'      => 'site_social_links',
          'title'     => 'Social Links',
          'icon'      => 'fa fa-facebook',
          // begin: fields
          'fields'    => array(
                array(
                    'type'      => 'notice',
                    'class'     => 'info',
                    'content'   => 'Site Social Links.',
                ),
                array(
                  'id'          => 'rws_header_social_links_enable',
                  'type'        => 'switcher',
                  'title'       => 'Header Social Links Enable',
                ),
                array(
                  'id'          => 'rws_footer_social_links_enable',
                  'type'        => 'switcher',
                  'title'       => 'Footer Social Links Enable',
                ),
    
          ), // end: fields
        ); // end: text options


// ------------------------------

    return $options;
}

add_action('cs_framework_options', 'rws_framework_options');