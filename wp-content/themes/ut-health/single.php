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
                <h3 class="banner-title"><?php the_title() ?></h3>
            </div> <!-- .banner-content -->
        </div> <!-- .container -->
    </section> <!-- .events-banner-section -->
<?php endif; ?>

<div class="container">
<?php
if(have_posts()):while(have_posts()):the_post();
?>
<div class="news-post-wrapper">
    <article class="news-post-item">
        <header class="entry-header">
            <h2 class="entry-title"> 
<!--                <a href="--><?php //the_permalink(); ?><!--">--><?php //the_title(); ?><!--</a>-->
            </h2>
        </header>
        <div class="post-content-wrapper d-flex">
        <?php
                $src = wp_get_attachment_image_src( get_post_thumbnail_id($post), 'thumbnail_size' );
                $url = $src[0]; 
                if(!empty($src)):
            ?>
            <figure class="featured-image">
                <img src="<?php echo $url; ?>">
            </figure> <!-- .featured-image -->
            <?php endif; ?>
            <div class="post-content">
                <?php
                    the_content();
                ?>
            </div> <!-- .post-content -->
        </div>
        
    </article>  <!-- .news-post-item -->
</div>
<?php endwhile;endif; ?>

</div> <!-- .container -->
<?php
get_footer();
