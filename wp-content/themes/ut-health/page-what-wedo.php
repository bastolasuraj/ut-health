<?php
get_header();
$common = get_post_meta( get_the_ID(), 'uth_common_section', true );
// echo '<pre>';
// print_r($common);
// echo '</pre>';
$uth_common_banner_enable=$common['uth_common_banner_enable'];
$uth_common_title=$common['uth_common_title'];
$uth_common_image=$common['uth_common_image']['url']; ?>
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
                                    if(1==$wwd['uth_wwd_custom_enable']){ ?>
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
																<?php
																$readmore = $wwd['uth_wwd_readmore_link'];
																if(empty($readmore))
																	$readmore = "http://dev.priemerconsulting.com/demo/UTHealth/what-we-do/";
																?>
                                                                <a href="<?php echo $wwd['uth_wwd_readmore_link']; ?>">Learn More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
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
</div>
<?php
get_footer();
