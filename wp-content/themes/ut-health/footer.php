
<footer id="colophon" class="site-footer">
    <div class="container">
        <div class="widget-wrapper">
            <div class="row">
                <?php
                $footer_counter = 1;
                while ($footer_counter<4){
                ?>
                <div class="col-3">
                    <?php
                    dynamic_sidebar('footer-widget-'.$footer_counter);
                    ?>
                </div>
                <?php $footer_counter++; } ?>
                <!-- <div class="col-3">
                    <h2 class="widget-title">Subscribe Newsletter</h2>
                        <div class="mc4wp-form-wrapper">
                    
                            <p>
                            Lorem ipsum dolor sit amet consectetur elitsa adipsicing elit...!
                            </p>
                            <?php
                            // dynamic_sidebar('footer-widget-4');
                            ?> 
                        </div> 
                </div> -->
            </div>
        </div>
                </div>
        <div class="footer-information">
            <div class="container">
                <p>
    	            <?php
    	            dynamic_sidebar('footer-widget-5');
    	            ?>
                </p>
            </div>
        </div>


        <div class="site-generator">
            <div class="container">
            <?php $options = get_option('my_framework') ?>
                        <span class="copy-right">
                            <?php echo $options['copyright_text'] ?>
                        </span>
                <div class="footer-menu">
                    <ul>
                        <?php

if( has_nav_menu( 'end-menu' )):
    $args = array(
        'theme_location' => 'end-menu',
        'menu' => '',
        'container' => 'div',
        'container_class' => '',
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
            </div>
        </div>
</footer> <!-- .site-footer -->
</div> <!-- .site -->
<?php
//get_sidebar();
wp_footer();
?>
