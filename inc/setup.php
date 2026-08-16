<?php
/**
 * Configure theme assets and defaults.
 *
 * @package Suede
 */

function suede_version() {
	static $version;

	if ( ! $version ) {
		$version = wp_get_theme( get_template() )->get( 'Version' );
	}

	return $version;
}

function suede_setup() {
	add_editor_style( 'style.css' );
	add_post_type_support( 'page', 'excerpt' );
	remove_theme_support( 'core-block-patterns' );
}
add_action( 'after_setup_theme', 'suede_setup' );

function suede_enqueue_styles() {
	wp_enqueue_style(
		'suede',
		get_template_directory_uri() . '/style.css',
		[],
		suede_version()
	);
}
add_action( 'wp_enqueue_scripts', 'suede_enqueue_styles' );

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
