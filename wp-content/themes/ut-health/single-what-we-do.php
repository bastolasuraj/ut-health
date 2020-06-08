<?php
get_header();
$event = get_post_meta(get_the_ID(),'uth_wwd_section',true);
echo '<pre>';
print_r($event);
echo '</pre>';
    
?>
<div class="container">
<?php
if(have_posts()):while(have_posts()):the_post();
?>
<div class="page-wrapper">
<!-- <h1><?php echo $uth_events_title.'<br>';?></h1>
<img src="<?php echo $uth_events_image ?>"><br>
from <b><?php echo $uth_events_date_from.'</b> to <b>'.$uth_events_date_to.'</b><br>';?>
<p><?php echo $uth_events_detail.'<br>';?></p> -->
</div>
<?php
endwhile;endif;
?>
</div>
<?php
get_footer();
