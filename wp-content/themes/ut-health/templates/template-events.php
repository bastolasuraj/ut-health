<!--
Template Name: Event Template
-->
<?php
get_header();
$options = get_post_meta(get_the_ID(),'uth_common_section',true);
// print_r($options);
$uth_common_banner_enable=$options['uth_common_banner_enable'];
$uth_common_title=$options['uth_common_title'];
$uth_common_image=$options['uth_common_image']['url'];
if(1==$uth_common_banner_enable):
?>
<section class="events-banner-section" style="background-image: url(<?php echo $uth_common_image ?>)">
        <div class="container">
            <div class="banner-content">
                <h3 class="banner-title"><?php echo $uth_common_title ?></h3>
            </div> <!-- .banner-content -->
        </div> <!-- .container -->
    </section> <!-- .events-banner-section -->
<?php endif; ?>
</header> <!-- .site-header -->
        <div id="uth_Events_sec">
		<div id="content" class="site-content">
            <div class="container">
                <div id="events-page-wrapper" class="d-flex">
                    <div id="primary" class="site-primary">
                        <main id="main" class="site-main">
                            <div class="events-wrapper">
                                <div class="section-header">
                                    <figure class="mini-logo">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/mini-logo.png" alt="mini-logo">
                                    </figure> <!-- .mini-logo -->
                                    <h3>Events</h3>
                                </div> <!-- .section-header -->
                               
                                <?php
                                $terms = get_terms( 'event_categories' );
                                ?>
                                <div class="filtering">
                                    <div class="form-control-wrapper">
                                    <?php $showhide = get_post_meta(get_the_ID(),'uth_events_show_hide',true);?>
                                    <?php $showall = $showhide['show_hide_showall'];?>
                                    <?php if(1== $showall):?>
                                    <select class="filter-events form-control">
                                            <option value="cat-all">Show all</option>
                                            <?php
                                            foreach ($terms as $term) {
                                                ?>
                                                <option value="<?php echo $term->slug; ?>"><?php echo $term->name; ?></option>
                                                <?php
                                            }
                                            ?>
                                        </select> <!-- .form-control -->
                                        <?php endif; ?>
                                    
                                    </div> <!-- .form-control-wrapper -->
                            
                                    <div class="filter-cat-results">
                                        <?php

                                        foreach( $terms as $term ) : 
                                            $slug = $term->slug;
                                            ?>
                                            <div class="f-cat" data-cat="<?php echo esc_attr( $slug ); ?>">
                                            <?php
                                                $args = array(
                                                    'post_type' => 'event',
                                                    'tax_query'=> array(
                                                        // 'relation' => 'AND',
                                                        array(
                                                            'taxonomy'=>'event_categories',
                                                            'field' => 'slug',
                                                            'terms' => array( $slug ),
                                                        ),
                                                    )
                                                );
                                                $query = new WP_Query($args);
                                                if($query->have_posts()) {
                                                    while ( $query->have_posts() ) {
                                                        $query->the_post();
                                                        $events = get_post_meta( get_the_ID(), 'uth_events_sect', true );
                                                        // $uth_events_custom_enable = $events['uth_events_custom_enable'];
                                                        // $uth_events_title = $events['uth_events_title'];
                                                        $uth_events_image = $events['uth_events_image']['url'];
                                                        $uth_events_date_from = $events['uth_events_date_from'];
                                                        $uth_events_date_to = $events['uth_events_date_to'];
                                                        // $uth_events_detail = $events['uth_events_detail'];
                                                        // $uth_events_button_url = $events['uth_events_button_url'];
                                                ?>
                                                <div class="news-item-wrapper">
                                                    <article class="news-post-item d-flex">
                                                        <figure class="featured-image">
                                                            <img src="<?php echo  $uth_events_image; ?>" alt="">
                                                        </figure> <!-- .featured-image -->

                                                        <div class="post-content">
                                                            <header class="entry-header">
                                                                <h3 class="entry-title"><?php the_title(); ?></h3>
                                                            </header> <!-- .entry-header -->

                                                            <div class="date-section">
                                                                <span class="starting-date"><?php echo  $uth_events_date_from; ?></span> - 
                                                                <span class="ending-date"><?php echo  $uth_events_date_to; ?></span>
                                                            </div> <!-- .date-section -->

                                                            <div class="news-content">
                                                                <p><?php the_excerpt(); ?></p>
                                                            </div> <!-- .news-content -->
                                                            <!-- <input type="hidden" name="<?php //the_permalink(); ?>"> -->
                                                            <a href="<?php the_permalink(); ?>" class="custom-btn">Learn More</a>
                                                        </div> <!-- .post-content -->
                                                    </article> <!-- .news-post-item -->
                                                </div> <!-- .news-item-wrapper -->
                                                <?php
                                                    }
                                                }
                                            ?>
                                            </div> <!-- .f-cat -->
                                            <?php
                                        endforeach;
                                        ?>

                                        <!-- php } ?> -->
                                        
                                    </div>
                                </div> <!-- .filtering -->
                                <!-- <a href="#" class="custom-btn">More Events</a> -->
                            </div> <!-- .events-wrapper -->
                        </main> <!-- #main -->
                    </div> <!-- #primary -->

                    <div id="secondary" class="site-secondary">
                        <!--<div class="search-widget widget">
                            <div class="section-header">
                                <h3>Search</h3>
                            </div>--> <!-- .section-header -->

                            <!-- <div class="widget-content">
                                <span>Search Available Technologies</span>
                                <form class="search-form">
                                    <input type="search" placeholder="Enter Keywords">
                                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </form>
                            </div> 
                        </div>-->
                        
                        <?php
                            dynamic_sidebar('search-widget');
                        ?>
                        <?php
                            dynamic_sidebar('event-widget');
                        ?>
                    </div> <!-- #secondary -->
                </div> <!-- #events-page-wrapper -->
            </div> <!-- .container -->
		</div> <!-- .site-content -->
        </div>
<?php get_footer();