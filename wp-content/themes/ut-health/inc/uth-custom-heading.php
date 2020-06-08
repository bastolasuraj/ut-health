<?php
add_action( 'init', 'uth_custom_heading_shortcode_init' );
function uth_custom_heading_shortcode_init() {
    add_shortcode( 'uth_custom_heading', 'uth_custom_heading_shortcode');
}

function uth_custom_heading_shortcode( $args = array(), $content = null ) {
    $defaults = array(
        'title' => '',
        'image' => '',
        'image_position' => 'left',
        'heading_size'=>'h3',
    );

    $atts = shortcode_atts( $defaults, $args );

    $position = $atts['image_position'];
    $heading = $atts['heading_size'];
    // die($heading);

    $class = "uth-custom-position-{$position}";
    $attachment = wp_get_attachment_image_src( $atts['image'] );
    ob_start();
    ?>
    <div class="uth-custom-heading <?php echo esc_attr( $class ); ?>">

        <<?php echo $heading; ?>> 
            <img src="<?php echo $attachment[0]; ?>" alt="<?php echo 'image caption goes here'; ?>"> 
            <?php echo $atts['title']; ?>
        </<?php echo $heading; ?>>
    </div>
    <br>
    <?php
    $output = ob_get_clean();

    return $output;
}

add_action( 'vc_before_init', 'uth_custom_heading_shortcode_vc_map' );
function uth_custom_heading_shortcode_vc_map() {
    $args = array(
        'name' => 'UTH Custom Heading',
        'base' => 'uth_custom_heading',
        'description' => 'Custom heading shortcode',
        'category' => 'UT Health',
        'class' => 'uth-custom-heading',
        'params' => array(
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => __( "Title", "my-text-domain" ),
                "param_name" => "title",
                'admin_label' => false,
            ),

            array(
                "type" => "attach_image",
                "holder" => "div",
                "class" => "",
                "heading" => __( "Image", "my-text-domain" ),
                "param_name" => "image",
                'admin_label' => false,

            ),
            array(
                "type" => "dropdown",
                "holder" => "div",
                "class" => "col-md-6",
                'value' => array(
                    'Left' => 'left',
                    'Top' => 'top', 
                ),
                'default' => 'left',
                "heading" => __( "Image Position", "my-text-domain" ),
                "param_name" => "image_position",
                'admin_label' => false,

            ),
            array(
                "type" => "dropdown",
                "holder" => "div",
                "class" => "",
                'value' => array(
                    'Select One'=>' ',
                    'H1' => 'h1',
                    'H2' => 'h2',
                    'H3' => 'h3',
                    'H4' => 'h4',
                    'H5' => 'h5',
                    'H6' => 'h6',
                ),
                'default' => 'h3',
                "heading" => __( "Heading Size", "my-text-domain" ),
                "param_name" => "heading_size",
                'admin_label' => false,

            ),

        )
    );

    vc_map( $args );
}
