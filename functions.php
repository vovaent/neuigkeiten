<?php
/**
 * Theme functions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package neuigkeiten
 */

/**
 * Helpers
 */
require get_template_directory() . '/inc/utils/helpers.php';


/**
 * Load CSS, JS , web fonts etc
 */
function neuigkeiten_load_front_end_assets() {

	/**
	 * Main scripts and styles
	 */
	$main_asset = neuigkeiten_get_asset_data( '/build/main.asset.php' );

	wp_enqueue_style(
		'neuigkeiten-main-style',
		get_theme_file_uri( '/build/main.css' ),
		array(),
		$main_asset['version']
	);
	wp_enqueue_script(
		'neuigkeiten-main-script',
		get_theme_file_uri( '/build/main.js' ),
		$main_asset['deps'],
		$main_asset['version'],
		true
	);
}

add_action( 'wp_enqueue_scripts', 'neuigkeiten_load_front_end_assets' );

/**
 * Set various theme properties
 */
function neuigkeiten_set_theme_properties() {
	add_theme_support(
		'custom-logo',
		array(
			'width'                => 180,
			'height'               => 55,
			'flex-width'           => false,
			'flex-height'          => false,
			'header-text'          => '',
			'unlink-homepage-logo' => false,
		)
	);
	register_nav_menu( 'header_menu_location', __( 'Header Menu Location', 'neuigkeiten' ) );
	register_nav_menu( 'mobile_menu_location', __( 'Mobile Menu Location', 'neuigkeiten' ) );
	register_nav_menu( 'footer_menu_location', __( 'Footer Menu Location', 'neuigkeiten' ) );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'automatic-feed-links' ); // required by theme-check plugin.
	load_theme_textdomain( 'neuigkeiten', get_template_directory() . '/languages' );

	add_image_size( 'neuigkeiten_medium', 400, 400 );

	if ( function_exists( 'register_sidebar' ) ) {
		register_sidebar(
			array(
				'name'          => __( 'Footer 1', 'neuigkeiten' ),
				'id'            => 'footer-1',
				'before_widget' => '',
				'after_widget'  => '',
				'before_title'  => '<h4>',
				'after_title'   => '</h4>',
			)
		);
		register_sidebar(
			array(
				'name'          => __( 'Footer 2', 'neuigkeiten' ),
				'id'            => 'footer-2',
				'before_widget' => '',
				'after_widget'  => '',
				'before_title'  => '<h4>',
				'after_title'   => '</h4>',
			)
		);
		register_sidebar(
			array(
				'name'          => __( 'Footer 3', 'neuigkeiten' ),
				'id'            => 'footer-3',
				'before_widget' => '',
				'after_widget'  => '',
				'before_title'  => '<h4>',
				'after_title'   => '</h4>',
			)
		);
		register_sidebar(
			array(
				'name'          => __( 'Footer 4', 'neuigkeiten' ),
				'id'            => 'footer-4',
				'before_widget' => '',
				'after_widget'  => '',
				'before_title'  => '<h4>',
				'after_title'   => '</h4>',
			)
		);
	}
}

add_action( 'after_setup_theme', 'neuigkeiten_set_theme_properties' );

/**
 * Register ACF Blocks
 */
require get_template_directory() . '/template-parts/blocks/register_acf_blocks.php';

/**
 * SVG upload allow
 */
require get_template_directory() . '/inc/options/svg_upload_allow.php';
