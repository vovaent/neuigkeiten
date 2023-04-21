<?php
/**
 * Block "News Output" Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Get ACF fields
$fields = get_fields();

// WP
$args = array(
	'post_type'     => 'post',
	'post_status'   => 'publish',
	'post_per_page' => $fields['number_posts'],
);

$news_query = new WP_Query( $args );
?>
<section class="news-output">
	<div class="container news-output__container">
		<h2 class="news-output__title">
			<?php echo $fields['title']; ?>
		</h2>
		<!-- /.news-output__title -->

		<?php if ( $news_query->have_posts() ) : ?>

		<ul class="news-output__news">

			<?php while ( $news_query->have_posts() ) : ?>
				<?php $news_query->the_post(); ?>

			<li class="news-output__new new">
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
			<!-- /.news-output__new new -->

			<?php endwhile; ?>

			<?php wp_reset_postdata(); ?>

		</ul>
		<!-- /.news-output__news -->

		<?php endif; ?>

	</div>
	<!-- /.masthead__container container -->
</section>
<!-- /.masthead -->
