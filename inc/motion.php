<?php
/**
 * Register block motion controls.
 *
 * @package Suede
 */

/**
 * Enqueue motion editor assets.
 */
function suede_enqueue_motion_editor_assets() {
	wp_enqueue_script(
		'suede-motion-sidebar',
		get_theme_file_uri( '/assets/js/motion-sidebar.js' ),
		[ 'wp-blocks', 'wp-element', 'wp-components', 'wp-block-editor', 'wp-hooks', 'wp-compose' ],
		suede_version(),
		true
	);
}
add_action( 'enqueue_block_editor_assets', 'suede_enqueue_motion_editor_assets' );

/**
 * Enqueue motion assets.
 */
function suede_enqueue_motion_assets() {
	wp_enqueue_style(
		'suede-motion',
		get_theme_file_uri( '/assets/css/motion.css' ),
		[],
		suede_version()
	);

	wp_enqueue_script(
		'suede-motion',
		get_theme_file_uri( '/assets/js/motion.js' ),
		[],
		suede_version(),
		true
	);
}
add_action( 'wp_enqueue_scripts', 'suede_enqueue_motion_assets' );
