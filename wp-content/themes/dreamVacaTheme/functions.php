<?php 
//create a menu
register_nav_menu( 'siteNav', 'Primary Navigation' );

//Read More button
function wpdocs_excerpt_more( $more ) {
    return '<a href="'.get_the_permalink().'" rel="nofollow" class="readMore">...READ MORE</a>';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );
?>