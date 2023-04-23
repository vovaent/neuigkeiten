<?php
/**
 * The template for displaying a Front Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package neuigkeiten
 */
get_header();

while ( have_posts() ) :

	the_post();
	the_content();

endwhile;

get_footer();
