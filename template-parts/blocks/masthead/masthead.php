<?php
/**
 * Block "Oberer Bildschirm" Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Get ACF fields
$fields = get_fields();
?>
<section class="masthead">
	<div class="container masthead__container">
		<h1 class="masthead__title">
			<?php echo $fields['title']; ?>
		</h1>
		<!-- /.masthead__title -->

		<?php if ( $fields['main_slider'] ) : ?>

		<div class="masthead__slider main-slider">
			<div class="main-slider__glide glide">
				<div class="glide__track" data-glide-el="track">
					<ul class="glide__slides">

						<?php foreach ( $fields['main_slider'] as $slide ) : ?>

						<li class="glide__slide">
							<div class="glide__img-wrap">
								<?php
								echo wp_get_attachment_image(
									$slide['slider_image'],
									'neuigkeiten_medium',
									false,
									array( 'class' => 'glide__mob-img' )
								);
								?>
								<?php
								echo wp_get_attachment_image(
									$slide['slider_image'],
									'full',
									false,
									array( 'class' => 'glide__img' )
								);
								?>
							</div>
							<!-- /.glide__img-wrap -->
						</li>
						<!-- /.glide__slide -->

						<?php endforeach; ?>

					</ul>
					<!-- /.glide__slides -->
				</div>
				<!-- /.glide__track -->
			</div>
			<!-- /. main-slider__glide glide -->

			<div class="main-slider__content-wrap">
				<div class="main-slider__arrows">
					<div class="main-slider__arrow main-slider__arrow--left"></div>
					<div class="main-slider__arrow main-slider__arrow--right"></div>
				</div>
				<!-- /.main-slider__arrows glide-nav -->

				<div class="main-slider__content">
					<div class="main-slider__content-title">
						<?php echo $fields['content_title']; ?>
					</div>
					<div class="main-slider__content-description">
						<?php echo apply_filters( 'the_content', $fields['content_description'] ); ?>
					</div>
				</div>
				<!-- /.main-slider__content -->
			</div>
			<!-- /.main-slider__content-wrap -->
		</div>
		<!-- /.masthead__slider main-slider -->

		<?php endif; ?>

	</div>
	<!-- /.masthead__container container -->
</section>
<!-- /.masthead -->
