<?php
function uth_footer_menu_short( ) {
	if( has_nav_menu( 'footer-menu' )):
		$args = array(
			'theme_location' => 'footer-menu',
			'menu' => '',
			'container' => 'div',
			'container_class' => 'widget',
			'container_id' => '',
			'menu_class' => '',
			'menu_id' => '',
			'echo' => true,
			'fallback_cb' => '',
			'before' => '',
			'after' => '',
			//'link_before' => '<div>',
			//'link_after' => '</div>',
			'items_wrap' => '<h4 class="widget-title">Quick Links</h4><ul>%3$s</ul>',
			'depth' => 0,
			'walker' => ''
		);
		wp_nav_menu( $args );
	endif;

}
add_shortcode('uth_foot_menu','uth_footer_menu_short');
function uth_social_links(){
    ?>
    <div class="inline-social-icon">
  
  <ul>
      <li>
          <a href="facebook.com">facebook</a>
      </li>
      <li>
          <a href="twitter.com">twitter</a>
      </li>
      <li>
          <a href="instagram.com">instagram</a>
      </li>
      <li>
          <a href="google-plus.com">google-plus</a>
      </li>
      <li>
          <a href="youtube.com">Youtube</a>
      </li>
  </ul>
</div>

    <?php
}
add_shortcode('uth_social','uth_social_links');



function searchbar( $form ) {

	$form = '<form role="search" method="get" id="searchform" action="' . home_url( '/' ) . '" >
	<div><label class="screen-reader-text" for="s">' . __('Search for:') . '</label>
	<input type="search" value="' . get_search_query() . '" name="s" id="s" placeholder="Search for something" />
	<button type="submit" id="searchsubmit" value="'. esc_attr__('Search') .'"><i class="fa fa-search" aria-hidden="true"></i></button>
	</div>
	</form>';
	
	return $form;
	}
	
	add_shortcode('searchbar', 'searchbar');
	
