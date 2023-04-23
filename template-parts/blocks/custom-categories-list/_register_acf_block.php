<?php
// Register ACF block via block.json
function register_custom_categories_list_acf_block() {
	register_block_type( __DIR__ . '/block.json' );

	/**
	 * Block Masthead scripts and styles
	 */
	$custom_categories_list_asset = neuigkeiten_get_asset_data( '/build/blocks/custom-categories-list/index.asset.php' );

	wp_register_style(
		'neuigkeiten-block-custom-categories-list-style',
		get_theme_file_uri( '/build/blocks/custom-categories-list/index.css' ),
		array(),
		$custom_categories_list_asset['version']
	);
	wp_register_script(
		'neuigkeiten-block-custom-categories-list-script',
		get_theme_file_uri( '/build/blocks/custom-categories-list/index.js' ),
		$custom_categories_list_asset['deps'],
		$custom_categories_list_asset['version'],
		true
	);
}
add_action( 'init', 'register_custom_categories_list_acf_block', 5 );
