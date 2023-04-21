<?php
/**
 * The Famous WordPress Loop.
 *
 * @package neuigkeiten
 */
?>
<div <?php post_class(); ?>>

    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

    <?php get_template_part( 'template-parts/topic-meta' ); ?>

    <?php the_excerpt(); ?>

    <small><a href="<?php the_permalink(); ?>">More &raquo; </a></small>

</div>

<hr>