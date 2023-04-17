<?php
/**
 * The template for displaying a single post
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package neuigkeiten
 */
?>
<?php get_header(); ?>

<?php get_template_part( 'tempalte-parts/loop', 'single' ); ?>

<?php
get_footer();
