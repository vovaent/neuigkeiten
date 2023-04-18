<?php
// Adds SVG to the list of files allowed for uploading.
function neuigkeiten_svg_upload_allow( $mimes ) {
	$mimes['svg'] = 'image/svg+xml';

	return $mimes;
}

add_filter( 'upload_mimes', 'neuigkeiten_svg_upload_allow' );

// Fix MIME type for SVG files.
function neuigkeiten_fix_svg_mime_type( $data, $file, $filename, $mimes, $real_mime = '' ) {

	// WP 5.1 +
	if ( version_compare( $GLOBALS['wp_version'], '5.1.0', '>=' ) ) {
		$dosvg = in_array( $real_mime, array( 'image/svg', 'image/svg+xml' ) );
	} else {
		$dosvg = ( '.svg' === strtolower( substr( $filename, -4 ) ) );
	}

	// mime type has been reset, fix it,
	// and also check the user right
	if ( $dosvg ) {

		// allow
		if ( current_user_can( 'manage_options' ) ) {

			$data['ext']  = 'svg';
			$data['type'] = 'image/svg+xml';
		}
		// disallow
		else {
			$data['ext']  = false;
			$data['type'] = false;
		}
	}

	return $data;
}

add_filter( 'wp_check_filetype_and_ext', 'neuigkeiten_fix_svg_mime_type', 10, 5 );

// Generates data for displaying SVG as an image in the media library.
function neuigkeiten_show_svg_in_media_library( $response ) {

	if ( $response['mime'] === 'image/svg+xml' ) {

		// With file name output
		$response['image'] = array(
			'src' => $response['url'],
		);
	}

	return $response;
}

add_filter( 'wp_prepare_attachment_for_js', 'neuigkeiten_show_svg_in_media_library' );

// Limit the size of uploaded files by type
function neuigkeiten_check_file_upload_size( $file ) {

	// for SVG
	if ( false !== strpos( $file['type'], 'image/svg+xml' ) ) {
		$size_limit = 100; // max size in KB
	}

	if ( isset( $size_limit ) ) {
		$size_limit *= 1024;
		if ( intval( $file['size'] ) > $size_limit ) {
			$file['error'] = __( sprintf( 'FEHLER: Die Größe dieses Dateityps darf %s nicht überschreiten', size_format( $size_limit ) ), 'neuigkeiten' );
		}
	}

	return $file;
}

add_filter( 'wp_handle_sideload' . '_prefilter', 'neuigkeiten_check_file_upload_size' );
add_filter( 'wp_handle_upload' . '_prefilter', 'neuigkeiten_check_file_upload_size' );
