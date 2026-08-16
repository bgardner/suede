<?php
/**
 * Register pattern categories.
 *
 * @package Suede
 */

function suede_register_pattern_categories() {
	$categories = [
		'component' => __( 'Component', 'suede' ),
		'editorial' => __( 'Editorial', 'suede' ),
		'footer'    => __( 'Footer', 'suede' ),
		'header'    => __( 'Header', 'suede' ),
		'hero'      => __( 'Hero', 'suede' ),
		'theme'     => __( 'Theme', 'suede' ),
	];

	foreach ( $categories as $slug => $label ) {
		register_block_pattern_category(
			"suede-{$slug}",
			[
				'label' => $label,
			]
		);
	}
}
add_action( 'init', 'suede_register_pattern_categories' );
