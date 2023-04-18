<?php
/**
 * Block Header Template.
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
	<div class="masthead__container container">
		<h1 class="masthead__title">
			<?php $fields['masthead_title']; ?>
		</h1>
		<!-- /.masthead__title -->

		<div class="masthead__slider main-slider">
			<div class="main-slider__item main-slider-item">
				<div class="main-slider-item__img-wrap">
					<?php echo wp_get_attachment_image( $slider['slider_item']['slide_img'] ); ?>
				</div>
				<!-- /.main-slider-item__img-wrap -->

				<div class="main-slider-item__content-wrap main-slider-content-wrap">
					<div class="main-slider-content-wrap__nav main-slider-nav">
						<div class="main-slider-nav__prev"></div>
						<div class="main-slider-nav__next"></div>
					</div>
					<!-- /.main-slider-item__nav main-slider-nav -->
					<div class="main-slider-content">
						<div class="main-slider-content__title">
							<?php echo $slider['slider_item']['content_title']; ?>
						</div>
						<div class="main-slider-content__description">
							<?php echo $slider['slider_item']['content_title']; ?>
							<?php echo apply_filters( 'the_content', $slider['slider_item']['content_description'] ); ?>
						</div>
					</div>
					<!-- /.main-slider-content -->
				</div>
				<!-- /.main-slider-item__content-wrap main-slider-content-wrap -->
			</div>
			<!-- /.main-slider__item main-slider-item -->
		</div>
		<!-- /.masthead__slider main-slider -->
	</div>
	<!-- /.masthead__container container -->
</section>
<!-- /.masthead -->
