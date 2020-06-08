<!--
    Template Name: Contact Template
-->
<?php
$contact_meta = get_post_meta( get_the_id (), 'uth_contact_section', true );
$uth_contact_section_image = $contact_meta['uth_contact_section_image']['url'];
$uth_contact_section_address = $contact_meta['uth_contact_section_address'];
$uth_contact_section_address_label = $contact_meta['uth_contact_section_address_label'];
$uth_contact_section_phone_label = $contact_meta['uth_contact_section_phone_label'];
$uth_contact_section_phone = $contact_meta['uth_contact_section_phone'];
$uth_contact_section_email_label = $contact_meta['uth_contact_section_email_label'];
$uth_contact_section_email = $contact_meta['uth_contact_section_email'];
$uth_contact_section_shortcode = $contact_meta['uth_contact_section_shortcode'];
// echo "<pre>";
// $contact = $contact_meta['uth_contact_contact'];
// print_r($contact_meta);
// echo "</pre>";
// die;
?>
<?php get_header();?>
       <div id="content" class="site-content">
            <main id="main" class="site-main">
                <section class="contact-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6 col-lg-4">
                                <div class="contact-detail-wrapper" style="background-image: url(<?php echo $uth_contact_section_image; ?>)">
                                    <div class="section-header">
                                        <h3>contact detail</h3>
                                    </div>
                                    <div class="contact-detail-item-wrapper">
                                        <div class="contact-detail-item">
                                            <span class="contact-detail-icon">
                                                <i class="fa fa-map-marker"></i>
                                            </span>
                                            <div class="contact-detail-text">
                                                <h5><?php echo $uth_contact_section_address_label; ?>:</h5>
                                                <p><?php echo $uth_contact_section_address; ?></p>
                                            </div>
                                        </div>
                                        <div class="contact-detail-item">
                                            <span class="contact-detail-icon">
                                                <i class="fa fa-phone"></i>
                                            </span>
                                            <div class="contact-detail-text">
                                                <h5><?php echo $uth_contact_section_phone_label; ?>:</h5>
                                                <p><a href="tel:<?php echo $uth_contact_section_phone; ?>"><?php echo $uth_contact_section_phone; ?></a></p>
                                            </div>
                                        </div>
                                        <div class="contact-detail-item">
                                            <span class="contact-detail-icon">
                                                <i class="fa fa-envelope-o"></i>
                                            </span>
                                            <div class="contact-detail-text">
                                                <h5><?php echo $uth_contact_section_email_label; ?>:</h5>
                                                <p><a href="mailto:<?php echo $uth_contact_section_email; ?>"><?php echo $uth_contact_section_email; ?></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-8">
                                <div class="contact-form-wrapper">
                                    <div class="section-header">
                                        <figure class="mini-logo">
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/mini-logo.png"
                                                alt="mini-logo">
                                        </figure> <!-- .mini-logo -->
                                        <h3>stay in touch</h3>
                                    </div>
                                    <div class="wpcf7">
                                        <div class="screen-reader-response"></div>
                                        <form class="wpcf7-form">
                                            <?php echo do_shortcode( $uth_contact_section_shortcode); ?>
                                        </form>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="map-section">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d444570.5890613854!2d-98.79460601724207!3d29.48113701816292!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x865c58af04d00eaf%3A0x856e13b10a016bc!2sSan+Antonio%2C+TX%2C+USA!5e0!3m2!1sen!2snp!4v1550550773639" width="100%" height="485" frameborder="0" style="border:0" allowfullscreen></iframe>
                </section>
            </main> <!-- .site-main -->
        </div> <!-- .site-content -->
       <?php get_footer();