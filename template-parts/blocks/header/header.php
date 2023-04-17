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
$logo = ! empty( get_field( 'logo' ) ) ? get_field( 'logo' ) : '';
?>
<header class="header">
	<div class="header__logo-wrapper">
		<?php echo wp_get_attachment_image( $logo ); ?>
	</div>
	<!-- /.header__logo-wrapper -->

	<div class="header__menu"></div>
	<!-- /.header__menu -->

	<div class="header__mobile-menu"></div>
	<!-- /.header__mobile-menu -->
</header>
<!-- /.header -->
