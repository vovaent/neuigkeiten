<?php
/**
 * The Famous WordPress Loop.
 *
 * @package neuigkeiten
 */
?>
<li class="<?php echo $args['new_class']; ?> new">
	<div class="new__img-wrap">

		<?php if ( get_the_tag_list() ) : ?>

		<ul class="new__tags">
			<?php echo get_the_tag_list( '<li class="new__tag">', '</li><li class="new__tag">', '</li>' ); ?>
		</ul>
		<!-- /.new__tags -->

		<?php endif; ?>

		<?php neuigkeiten_post_thumbnail( 'neuigkeiten_medium', array(), 'new__thumbnail' ); ?>

	</div>
	<!-- /.new__img-wrap -->

	<div class="new__info">
		<time datetime="<?php the_time( 'Y-m-d' ); ?>" class="new__date">
			<?php the_time( 'd.m.Y' ); ?>
		</time>

		<div class="new__author">
			<?php the_author_posts_link(); ?>
		</div>
		<!-- /.new__author -->
	</div>
	<!-- /.new__info -->

	<a href="<?php esc_url( the_permalink() ); ?>" class="new__title">
		<?php the_title(); ?>
	</a>
	<!-- /.new__title -->

	<?php
		$the_content = apply_filters( 'the_content', get_the_content() );
		$excerpt     = has_excerpt() ? get_the_excerpt() : $the_content;
	?>

	<div class="new__excerpt">
		<?php echo wp_trim_words( $excerpt, 13 ); ?>
	</div>
	<!-- /.new__excerpt -->

	<a href="<?php esc_url( the_permalink() ); ?>" class="new__link">
		<?php esc_html_e( 'Ansehen', 'neuigkeiten' ); ?>
	</a>
	<!-- /.new__link -->
</li>
<!-- /.<?php echo $args['new_class']; ?> new -->
