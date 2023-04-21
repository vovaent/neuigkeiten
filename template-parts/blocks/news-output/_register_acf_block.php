<?php
// Register ACF block via block.json
function register_news_output_acf_block() {
	register_block_type( __DIR__ . '/block.json' );

	/**
	 * Block Masthead scripts and styles
	 */
	$news_output_asset = neuigkeiten_get_asset_data( '/build/blocks/news-output/index.asset.php' );

	wp_register_style(
		'neuigkeiten-block-news-output-style',
		get_theme_file_uri( '/build/blocks/news-output/index.css' ),
		array(),
		$news_output_asset['version']
	);
	wp_register_script(
		'neuigkeiten-block-news-output-script',
		get_theme_file_uri( '/build/blocks/news-output/index.js' ),
		$news_output_asset['deps'],
		$news_output_asset['version'],
		true
	);
}
add_action( 'init', 'register_news_output_acf_block', 5 );
