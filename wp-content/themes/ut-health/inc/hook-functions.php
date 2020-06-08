<?php
function rws_banner_section(){
    global $rws_options;
    $meta               = get_post_meta( get_the_id (), 'common_heading', true );
    /*echo "<pre>";
    print_r($meta);
    echo "</pre>";*/
    $banner_image_enable    = $meta['banner_image_enable'];
    $banner_image_id        = $meta['banner_image'];
    $banner_heading_enable  = $meta['banner_heading_enable'];
    $page_title             = $meta['rws_page_title'];
    $page_subtitle          = $meta['rws_page_subtitle'];
    $rws_banner_btn_enable  = $meta['rws_banner_btn_enable'];
    $rws_banner_btn_label   = $meta['rws_banner_btn_label'];
    $rws_banner_btn_url     = $meta['rws_banner_btn_url'];


    if ( 1 == $banner_image_enable ):
      if( !empty( $banner_image_id )) {
        $banner_image_url   = rws_image_src ( array ( 'id' => $banner_image_id, 'size' => 'full' ) );        
      } else {
        $banner_image_url   = get_stylesheet_directory_uri().'/assets/images/slider-image.jpg';
      }
    ?>
      <section class="featured-slider"  style="background-image: url('<?php echo esc_url( $banner_image_url );?>');">
        <div class="container">
            <div class="slider-content">
              <div class="slider-text">
                <?php if( 1 == $banner_heading_enable ): ?>
                  <?php echo ( $page_title ) ? '<h3 class="slider-subtitle">'.$page_title.'</h3>' : '';?>
                  <?php echo ( $page_subtitle ) ? '<h2 class="slider-title">'.$page_subtitle.'</h2>' : '';?>
                  <?php if( 1== $rws_banner_btn_enable ): ?>
                    <a href="<?php echo $rws_banner_btn_url; ?>" class="box-button">
                      <?php echo ( $rws_banner_btn_label ) ? $rws_banner_btn_label : 'Explore'; ?>
                    </a>
                  <?php endif;
                endif;
                ?>
              </div>
            </div>
        </div>
        <!-- .main-slider-->
      </section>
    <!-- .featured-slider -->
    <?php endif ; /* ends for banner image */

    /* added for archieve */
    /*if( is_archive() ):
    ?>
    <div class="banner-section">
      <figure class="banner-img">
        <?php if( ( category_image_src( array('size' =>  'full' )  , false ) ) != null ): 
          $category_image = category_image_src( array('size' =>  'full' ) );
        else :
          $category_image = get_template_directory_uri().'/images/about-bg.png';
        endif; ?>
            <img src="<?php echo $category_image; ?>" alt="Yeah!" class="img-responsive">
      </figure>
      <div class="container v-center">
          <div class="banner-content">
              <header class="entry-header">
                  <?php the_archive_title( '<h2 class="entry-title">', '</h2>' ); ?>
              </header>
          </div>
      </div>
    </div>
    <?php
    endif;*/
}
add_action ( 'rws_banner', 'rws_banner_section' ) ;

