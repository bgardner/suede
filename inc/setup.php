<?php
/**
 * Configure theme assets and defaults.
 *
 * @package Suede
 */

/**
 * Get the current theme version.
 */
function suede_version() {
	static $version;

	if ( ! $version ) {
		$version = wp_get_theme( get_template() )->get( 'Version' );
	}

	return $version;
}

/**
 * Initialize theme setup.
 */
function suede_setup() {
	// Add editor style sheet.
	add_editor_style( 'style.css' );

	// Add excerpt support to pages.
	add_post_type_support( 'page', 'excerpt' );

	// Disable core block patterns.
	remove_theme_support( 'core-block-patterns' );
}
add_action( 'after_setup_theme', 'suede_setup' );

/**
 * Enqueue theme style sheet.
 */
function suede_enqueue_style_sheet() {
	wp_enqueue_style(
		'suede',
		get_template_directory_uri() . '/style.css',
		[],
		suede_version()
	);
}
add_action( 'wp_enqueue_scripts', 'suede_enqueue_style_sheet' );

/**
 * Enqueue scroll reveal script.
 */
function suede_enqueue_scroll_script() {
	wp_enqueue_script(
		'suede-scroll',
		get_template_directory_uri() . '/assets/js/scroll.js',
		[],
		suede_version(),
		true
	);
}
add_action( 'wp_enqueue_scripts', 'suede_enqueue_scroll_script' );
