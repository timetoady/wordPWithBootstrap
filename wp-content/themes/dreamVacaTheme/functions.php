<?php 
//create a menu
register_nav_menu( 'siteNav', 'Primary Navigation' );

//Read More button
function wpdocs_excerpt_more( $more ) {
    return '<a href="'.get_the_permalink().'" rel="nofollow" class="readMore">...READ MORE</a>';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

// Prevent WP from adding <p> tags on pages
function disable_wp_auto_p( $content ) {
    if ( is_singular( 'page' ) ) {
      remove_filter( 'the_content', 'wpautop' );
      remove_filter( 'the_excerpt', 'wpautop' );
    }
    return $content;
  }
  add_filter( 'the_content', 'disable_wp_auto_p', 0 );
?>

