<?php
/**
 * Topic meta.
 *
 * @package neuigkeiten
 */

$allow_html = array(
	'a' => array(
		'href' => true,
		'rel'  => array(),
	),
);

if ( 'post' === get_post_type() ) : ?>
<div class="neuigkeiten-post-meta-container">
	<?php the_author_posts_link(); ?> | <?php the_time( 'j-n-Y' ); ?> | <?php echo wp_kses( get_the_category_list( ', ' ), $allow_html ); ?>
</div>
	<?php
endif;
