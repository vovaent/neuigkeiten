<?php
/**
 * The main template file for displaying the Home page
 * (or any other page if a specific template does not exist for it).
 *
 * This is the Famous WordPress Loop
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package neuigkeiten
 */

?>
<?php get_header(); ?>

<div>

    <h1><?php esc_html_e( 'Blog', 'neuigkeiten' ); ?></h1>

    <?php get_template_part( 'template-parts/content/content' ); ?>

    <p><?php echo wp_kses_post( paginate_links() ); ?></p>

</div>

<?php get_footer(); ?>