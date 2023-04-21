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

			<?php
			while ( $news_query->have_posts() ) :
				$news_query->the_post();

				get_template_part( 'template-parts/content/content', null, array( 'new_class' => 'news-output__new' ) );
			endwhile;
			?>

			<?php wp_reset_postdata(); ?>

		</ul>
		<!-- /.news-output__news -->

		<?php endif; ?>

	</div>
	<!-- /.masthead__container container -->
</section>
<!-- /.masthead -->
