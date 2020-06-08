<!--
Template Name: Homepage Template
-->
<?php
get_header();
//global $uth_options;
?>
    <section class="header-slider-section">
        <div class="owl-carousel owl-theme featured-slider">
	        <?php
            // $options = get_post_meta( 'homepage_meta' );
            $options = get_post_meta( get_the_ID(), 'homepage_meta', true );
            $uth_wwd_bottom_section_text = $options['uth_wwd_bottom_section_text'];
            $uth_wwd_bottom_section_button_text = $options['uth_wwd_bottom_section_button_text'];
            $uth_wwd_bottom_section_button_url = $options['uth_wwd_bottom_section_button_url'];
            $sliders = $options['uth_new_slider_home_new'];
            foreach ($sliders as $slider){
                $top_slider_image_home = $slider['top_slider_image_home'];
                $top_slider_header_text_home = $slider['top_slider_header_text_home'];
                $top_slider_sub_header_home = $slider['top_slider_sub_header_home'];
                $top_slider_first_btn_text = $slider['top_slider_first_btn_text'];
                $top_slider_first_btn_url = $slider['top_slider_first_btn_url'];
                $top_slider_second_btn_text = $slider['top_slider_second_btn_text'];
                $top_slider_second_btn_url = $slider['top_slider_second_btn_url'];
                if(empty($top_slider_first_btn_url|$top_slider_second_btn_url))
                    $top_slider_first_btn_url = $top_slider_second_btn_url="#";
           
                 ?>
                    <div class="featured-slider-item">
                    <div class="featured-slider-item-wrap">
                        <div class="image-container">
                            <img src="<?php echo $top_slider_image_home; ?>" alt="">
                        </div> <!-- .image-container -->
                        <div class="slider-desc">
                            <div class="container">
                                <div class="slider-desc-wrapper">
                                    <header class="entry-header">
                                        <h3><?php echo $top_slider_header_text_home; ?>
                                        </h3>
                                    </header> <!-- .entry-header -->

                                    <div class="slider-desc-content">
                                        <p>
	                                        <?php echo $top_slider_sub_header_home; ?>
                                        </p>
                                        <div class="slider-link">
                                        <?php if(!empty($top_slider_first_btn_text)){ ?>
                                            <a href="<?php echo $top_slider_first_btn_url ?>">
                                                <?php echo $top_slider_first_btn_text ?>
                                            </a>
                                        <?php }else{} ?>
                                            <?php if(!empty($top_slider_second_btn_text)){ ?>
                                            <a href="<?php echo $top_slider_second_btn_text ?>">
                                                <?php echo $top_slider_second_btn_text ?>
                                            </a>
                                        <?php }else{} ?>
                                        </div> <!-- .slider-link -->
                                    </div> <!-- .slider-desc-content -->
                                </div> <!-- .slider-desc-wrapper -->
                            </div> <!-- .container -->
                        </div> <!-- .slider-desc -->
                    </div> <!-- .featured-slider-item-wrap -->
                </div> <!-- .featured-slider-item -->
                <?php 
                }
                ?>
        </div> <!-- .featured-slider -->
    </section>
    <div id="content" class="site-content">
        <main id="main" class="site-main">
            <section class="what-we-do-section">
                <div class="container">
                    <div class="section-header">
                        <figure class="mini-logo">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/mini-logo.png" alt="mini-logo">
                        </figure> <!-- .mini-logo -->
                        <h3>What We Do</h3>
                    </div> <!-- .section-header -->

                    <div class="section-content">
                        <div class="row">
							<?php
							$args = array(
								'post_type' => array('what-we-do'),
                                'order'=>'ASC'
							);
							$query = new WP_Query($args);
							if($query->have_posts()) {
								while ( $query->have_posts() ) {
									$query->the_post();
                                    $wwd = get_post_meta( get_the_ID(), 'uth_wwd_sec', true );
                                    // echo '<pre>';
                                    // print_r($wwd);
                                    // echo '</pre>';
                                    if(1==$wwd['uth_wwd_custom_enable']){
									?>
                                    <div class="col-4">
                                        <div class="objective-item-wrapper">
                                            <figure class="image-container">
                                                <img src="<?php echo $wwd['uth_wwd_image']['url'] ?>"
                                                     alt="female-scientist">
                                            </figure> <!-- .image-container -->

                                            <div class="objective-item-title">
                                                <figure class="icon-container">
                                                    <img src="<?php echo $wwd['uth_wwd_logo']['url'] ?>"
                                                         alt="icon">
                                                </figure> <!-- .icon-container -->

                                                <div class="objective-title">
                                                    <h5><?php the_title() ?></h5>
                                                </div> <!-- .objective-title -->
                                            </div> <!-- .objective-item-title -->

                                            <div class="overlay-wrap">
                                                <div class="overlay-wrap-inner">
                                                    <div class="overlay-header">
                                                        <figure class="mini-logo">
                                                            <img src="<?php echo $wwd['uth_wwd_logo_overlay']['url'] ?>"
                                                                 alt="icon">
                                                        </figure>
                                                        <h5><?php the_title() ?></h5>
                                                    </div> <!-- .overlay-header -->

                                                    <div class="overlay-content">
                                                        <p>
    														<?php echo the_content(); ?>
                                                        </p>
                                                        <?php if((isset($wwd['uth_wwd_readmore_switch']))&&(1 == $wwd['uth_wwd_readmore_switch'])){
                                                            ?>
                                                            <div class="overlay-link">
                                                                <?php $readmore = $wwd['uth_wwd_readmore_link']; ?>
                                                                <?php if(empty($readmore))
                                                                        if(empty($readmore))
                                                                        $readmore = "http://dev.priemerconsulting.com/demo/UTHealth/what-wedo/";
                                                                ?> 
                                                                <a href="<?php echo $readmore; ?>">Learn More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                                            </div> <!-- .overlay-link -->
                                                            <?php
                                                        }
                                                        ?>
                                                    </div> <!-- .overlay-content -->
                                                </div> <!-- .overlay-wrap-inner -->
                                            </div> <!-- .overlay-wrap -->
                                        </div> <!-- .objective-item-wrapper -->
                                    </div> <!-- .col-4 -->
									<?php
                                    }
								}
								wp_reset_postdata();
							}
							?>
                        </div> <!-- .row -->
                    </div> <!-- .section-content -->
                </div> <!-- .container -->
            </section> <!-- .what-we-do-section -->
			<?php
			 $options = get_post_meta( get_the_ID(), 'homepage_meta', true );
             $calls = $options['uth_new_counter_home_new'];
            //  echo count($calls);
			?>
            <section class="finances-section" style="background-image: url(<?php echo $options['counter_bg_home'];?>)">
                <div class="container">
                    <div class="finances-slider-wrapper">
                        <div class="owl-theme owl-carousel finances-slider">
    						<?php
    						foreach($calls as $call){
    							?>
                                <div class="finances-item">
                                    <figure class="icon-container">
                                        <img src="<?php echo $call['counter_image_home'] ?>" alt="icon"><br>
                                    </figure> <!-- .icon-container -->
                                    <div class="item-desc">
                                        <h2><?php echo $call['counter_text_home'] ?></h2>
                                        <h6><?php echo $call['counter_subtitle_home'] ?></h6>

                                    </div> <!-- .item-desc -->
                                </div> <!-- .finances-item -->
    						<?php }?>

                        </div> <!-- .finances-slider -->
                    </div> <!-- .finances-slider-wrapper -->
                </div> <!-- .container -->
            </section> <!-- .finances-section -->


            <section class="available-technologies" style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/images/technology-bg.jpg)">
                <div class="container">
                    <div class="section-header">

                        <figure class="mini-logo">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/mini-logo.png" alt="mini-logo">
                        </figure> <!-- .mini-logo -->
                        <h3><?php echo $uth_wwd_bottom_section_text; ?></h3>
                    </div> <!-- .section-header -->
                    <div class="section-content">
                        <a href="<?php echo $uth_wwd_bottom_section_button_url; ?>" class="custom-btn"><?php echo $uth_wwd_bottom_section_button_text; ?></a>
                    </div>
                </div>
            </section>
        </main> <!-- .site-main -->
    </div> <!-- .site-content -->
<?php
get_footer();
?>