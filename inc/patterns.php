<?php
/**
 * Register pattern categories.
 *
 * @package Suede
 */

/**
 * Register block pattern categories.
 */
function suede_register_pattern_categories() {
	$categories = [
		'call-to-action' => __( 'Call to Action', 'suede' ),
		'content'        => __( 'Content', 'suede' ),
		'editorial'      => __( 'Editorial', 'suede' ),
		'footer'         => __( 'Footer', 'suede' ),
		'gallery'        => __( 'Gallery', 'suede' ),
		'header'         => __( 'Header', 'suede' ),
		'hero'           => __( 'Hero', 'suede' ),
		'pricing'        => __( 'Pricing', 'suede' ),
		'testimonial'    => __( 'Testimonial', 'suede' ),
		'theme'          => __( 'Theme', 'suede' ),
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
