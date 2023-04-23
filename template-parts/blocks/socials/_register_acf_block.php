<?php
// Register ACF block via block.json
function register_socials_acf_block() {
	register_block_type( __DIR__ . '/block.json' );

	/**
	 * Block Masthead scripts and styles
	 */
	$socials_asset = neuigkeiten_get_asset_data( '/build/blocks/socials/index.asset.php' );

	wp_register_style(
		'neuigkeiten-block-socials-style',
		get_theme_file_uri( '/build/blocks/socials/index.css' ),
		array(),
		$socials_asset['version']
	);
	wp_register_script(
		'neuigkeiten-block-socials-script',
		get_theme_file_uri( '/build/blocks/socials/index.js' ),
		$socials_asset['deps'],
		$socials_asset['version'],
		true
	);
}
add_action( 'init', 'register_socials_acf_block', 5 );