<?php
// Register ACF block via block.json
function register_masthead_acf_block() {
	register_block_type( __DIR__ . '/block.json' );

	/**
	 * Block Masthead scripts and styles
	 */
	$masthead_asset = neuigkeiten_get_asset_data( '/build/blocks/masthead/index.asset.php' );

	wp_register_style(
		'neuigkeiten-block-masthead-style',
		get_theme_file_uri( '/build/blocks/masthead/index.css' ),
		array(),
		$masthead_asset['version']
	);
	wp_register_script(
		'neuigkeiten-block-masthead-script',
		get_theme_file_uri( '/build/blocks/masthead/index.js' ),
		$masthead_asset['deps'],
		$masthead_asset['version'],
		true
	);
}
add_action( 'init', 'register_masthead_acf_block', 5 );
