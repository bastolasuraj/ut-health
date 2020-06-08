<!DOCTYPE html>
<html lang="<?php echo bloginfo('language') ?>">
<head>
	<meta charset="<?php echo bloginfo('charset') ?>">
	<meta name="UT-Health" content="New" />
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo bloginfo('name'); ?></title>
<?php wp_head(); ?>

</head>
<body>
<?php 
$option = get_option('my_framework');
// print_r($option);
$header_image = $option['homepage_image']['url'];
$brand_image = $option['index_image']['url'];
// print_r($header_image);
?>
<div id="page" class="site">
<header id="masthead" class="site-header">
        <div class="top-header-bar-wrap">
            <div class="container">
                <div class="top-header-bar">
                    <div class="site-branding">
                        <h1 class="site-title">
                            <a href="<?php bloginfo('url') ?>">
                                <img src="<?php echo $brand_image; ?>" alt="site-logo">
                            </a>
                        </h1>
                    </div>

                    <div class="branding-right">
						<img src="<?php echo $header_image; ?>" alt="second-logo">
					</div>
                </div>
            </div>
        </div>
        <div class="hgroup-wrap">
            <div id="navbar" class="navbar">
            	<div class="container">

                    <nav id="site-navigation" class="main-navigation">
                        <div class="menu-container">
                            <ul>
								<?php
								/**
								 * Displays a navigation menu
								 * @param array $args Arguments
								 */
								if( has_nav_menu( 'primary-menu' )):
									$args = array(
										'theme_location' => 'primary-menu',
										'menu' => '',
										'container' => 'div',
										'container_class' => 'menu-top-menu-container',
										'container_id' => '',
										'menu_class' => '',
										'menu_id' => '',
										'echo' => true,
										'fallback_cb' => '',
										'before' => '',
										'after' => '',
										//'link_before' => '<div>',
										//'link_after' => '</div>',
										'items_wrap' => '%3$s',
										'depth' => 0,
										'walker' => ''
									);
									wp_nav_menu( $args );
								endif;
								?>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header> <!-- .site-header -->
