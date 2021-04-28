<?php get_header(); ?>

<?php
// Start the main loop
if ( have_posts() ) : 
    while ( have_posts() ) : the_post();
        the_title('<h1>', '</h1>');
		the_content();
    endwhile;
endif;
?>

<?php get_footer(); ?>