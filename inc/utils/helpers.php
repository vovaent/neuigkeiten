<?php
/**
 * Getting the template name in camel case
 *
 * @return string
 */
function neuigkeiten_get_temlate_name_camel_case() {
	global $post;

	if ( ! $post ) {
		return false;
	}

	$template_name = get_page_template_slug( $post->ID );

	if ( ! $template_name ) {
		return;
	}

	$template_name = explode( '/', $template_name );
	$template_name = explode( '.', $template_name[1] );
	$template_name = explode( '-', $template_name[0] );

	foreach ( $template_name as $key => $part_name ) {
		if ( $key == 0 ) {
			$template_name[ $key ] = $part_name;
			continue;
		}

		$part_name_ucfirst = ucfirst( $part_name );

		$template_name[ $key ] = $part_name_ucfirst;
	}

	return implode( $template_name );
}

/**
 * Retrievs asset data
 */
function neuigkeiten_get_asset_data( $path_to_file ) {

	// Set default fallback to dependencies array
	$deps    = array();
	$version = '';

	// Check to see if the file exists.
	$full_path_to_file = get_theme_file_path( $path_to_file );

	// If the file can be found, use it to set the dependencies array.
	if ( file_exists( $full_path_to_file ) ) {
		$file    = require $full_path_to_file;
		$deps    = $file['dependencies'];
		$version = $file['version'];
	}

	return array(
		'deps'    => $deps,
		'version' => $version,
	);
}

/**
 * Determines if post thumbnail can be displayed.
 *
 * @return bool
 */
function neuigkeiten_can_show_post_thumbnail() {
	/**
	 * Filters whether post thumbnail can be displayed.
	 *
	 * @param bool $show_post_thumbnail Whether to show post thumbnail.
	 */
	return apply_filters(
		'neuigkeiten_can_show_post_thumbnail',
		! post_password_required() && ! is_attachment() && has_post_thumbnail()
	);
}

if ( ! function_exists( 'neuigkeiten_post_thumbnail' ) ) {
	/**
	 * Displays an optional post thumbnail.
	 *
	 * Wraps the post thumbnail in an anchor element on index views, or a div
	 * element when on single views.
	 *
	 * @param string $thumbnail_size Post thumbnail size
	 * @param array  $attr Post thumbnail attributes
	 * @param string $figure_class Figure additional class
	 *
	 * @return void
	 */
	function neuigkeiten_post_thumbnail( $thumbnail_size, $thumbnail_attr = array(), $figure_class = '' ) {
		if ( ! neuigkeiten_can_show_post_thumbnail() ) {
			return;
		}
		?>

		<?php if ( is_singular() && ! in_the_loop() ) : ?>

<figure class="new-thumbnail <?php echo $figure_class; ?>">
			<?php
				// Lazy-loading attributes should be skipped for thumbnails since they are immediately in the viewport.
				the_post_thumbnail(
					$thumbnail_size,
					array_merge(
						array(
							'class'   => 'new-thumbnail__img',
							'loading' => false,
						),
						$thumbnail_attr
					)
				);
			?>

			<?php if ( wp_get_attachment_caption( get_post_thumbnail_id() ) ) : ?>
	<figcaption class="new-thumbnail__wp-caption-text">
				<?php echo wp_kses_post( wp_get_attachment_caption( get_post_thumbnail_id() ) ); ?></figcaption>
	<?php endif; ?>
</figure>
<!-- .new-thumbnail <?php echo $figure_class; ?> -->

		<?php else : ?>

<figure figure class="new-thumbnail <?php echo $figure_class; ?>">
	<a class="new-thumbnail__link" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
				<?php
				the_post_thumbnail(
					$thumbnail_size,
					array_merge(
						array(
							'class' => 'new-thumbnail__img',
						),
						$thumbnail_attr
					)
				);
				?>
	</a>
</figure>
<!-- .new-thumbnail -->

		<?php endif; ?>

		<?php
	}
}
