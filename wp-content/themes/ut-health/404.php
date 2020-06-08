<?php
get_header();?>

<div class="container">
<?php 
$options = get_option('my_framework');
$input = $options['loop_message'];
 global $current_user;
      wp_get_current_user();
?>
<section>
<div>
<center>
      <div class="page-404">
<h2>404 Page</h2>
<h3 style="text-transform:uppercase"><?php echo ucwords($input); ?></h3>
<br>
<a href="<?php echo bloginfo('url') ?>"><button class="button-404">Go Home</button></a>

</div>
</center>
</div>
</div>
</section>
<?php
get_footer();
