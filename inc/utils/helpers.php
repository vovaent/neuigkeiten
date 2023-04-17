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
 *
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