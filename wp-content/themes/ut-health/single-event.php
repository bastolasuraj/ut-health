<?php
get_header();
$event = get_post_meta(get_the_ID(),'uth_events_sect',true);
// echo '<pre>';
// print_r($event);
// echo '</pre>';
    $uth_events_custom_enable = $event['uth_events_custom_enable'];
    // $uth_events_title = $event['uth_events_title'];
    $uth_events_image = $event['uth_events_image']['url'];
    $uth_events_date_from = $event['uth_events_date_from'];
    $uth_events_date_to = $event['uth_events_date_to'];
    // $uth_events_detail = $event['uth_events_detail'];
    // $uth_events_button_url = $event['uth_events_button_url'];
?>
<div class="container">
<?php
if(have_posts()):while(have_posts()):the_post();
?>
<div class="page-wrapper">

    <div class="event-wrapper">
    <article class="news-post-item d-flex">
        <figure class="featured-image">
            <img src="<?php echo  $uth_events_image; ?>" alt="">
        </figure> <!-- .featured-image -->

        <div class="post-content">
            <header class="entry-header">
                <h3 class="entry-title"><?php the_title() ?></h3>
            </header> <!-- .entry-header -->

            <div class="date-section">
                <span class="starting-date"><?php echo  $uth_events_date_from; ?></span> - 
                <span class="ending-date"><?php echo  $uth_events_date_to; ?></span>
            </div> <!-- .date-section -->

            <div class="news-content">
                <!-- <p><?php //echo  $uth_events_detail; ?></p> -->
                <p><?php the_content().'<br>';?></p>
            </div> <!-- .news-content -->
        </div> <!-- .post-content -->
    </article> <!-- .news-post-item -->
    </div>
    </div>
<?php
endwhile;endif;
?>
</div>
<?php
get_footer();
