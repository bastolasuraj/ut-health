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
<?php
    if(have_posts()) {
        while ( have_posts() ) {
            the_post(); ?>
            <div class="container">
                <div class="page-wrapper">
            <?php
            the_content();
            ?>
                </div>
            </div>
            <?php
        }
    }
get_footer();
