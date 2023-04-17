<?php
// Register ACF block via block.json
function register_header_acf_block() {
	register_block_type( __DIR__ . '/block.json' );

	/**
	 * Block Header scripts and styles
	 */
	$header_asset = neuigkeiten_get_asset_data( '/build/blocks/header/index.asset.php' );

	wp_register_style(
		'neuigkeiten-block-header-style',
		get_theme_file_uri( '/build/blocks/header/index.css' ),
		array(),
		$header_asset['version']
	);
	wp_register_script(
		'neuigkeiten-block-header-script',
		get_theme_file_uri( '/build/blocks/header/index.js' ),
		$header_asset['deps'],
		$header_asset['version'],
		true
	);
}
add_action( 'init', 'register_header_acf_block', 5 );
