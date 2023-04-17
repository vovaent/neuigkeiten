<?php
// Register ACF block via block.json
function register_acf_block() {
	register_block_type( __DIR__ . '/block.json' );

	/**
	 * Block Example scripts and styles
	 */
	$example_asset = neuigkeiten_get_asset_data( '/build/blocks/example/index.asset.php' );

	wp_register_style(
		'neuigkeiten-block-example-style',
		get_theme_file_uri( '/build/blocks/example/index.css' ),
		array(),
		$example_asset['version']
	);
	wp_register_script(
		'neuigkeiten-block-example-script',
		get_theme_file_uri( '/build/blocks/example/index.js' ),
		$example_asset['deps'],
		$example_asset['version'],
		true
	);
}
add_action( 'init', 'register_acf_block', 5 );
