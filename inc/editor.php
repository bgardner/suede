<?php
/**
 * Register block styles.
 *
 * @package Suede
 */

function suede_register_block_styles() {
	$block_styles = [
		'core/columns'             => [
			'column-reverse' => __( 'Reverse', 'suede' ),
		],
		'core/cover'               => [
			'zoom' => __( 'Zoom', 'suede' ),
		],
		'core/heading'             => [
			'balanced'    => __( 'Balanced', 'suede' ),
			'eyebrow'     => __( 'Eyebrow', 'suede' ),
		],
		'core/image'               => [
			'zoom' => __( 'Zoom', 'suede' ),
		],
		'core/list'                => [
			'no-style' => __( 'No Style', 'suede' ),
		],
		'core/paragraph'           => [
			'balanced' => __( 'Balanced', 'suede' ),
			'eyebrow'  => __( 'Eyebrow', 'suede' ),
			'indent'   => __( 'Indent', 'suede' ),
		],
		'core/post-excerpt'        => [
			'balanced' => __( 'Balanced', 'suede' ),
		],
		'core/post-featured-image' => [
			'zoom' => __( 'Zoom', 'suede' ),
		],
		'core/post-title'          => [
			'balanced' => __( 'Balanced', 'suede' ),
		],
		'core/separator'           => [
			'extended' => __( 'Extended', 'suede' ),
			'short'    => __( 'Short', 'suede' ),
		],
		'core/site-title'          => [
			'eyebrow' => __( 'Eyebrow', 'suede' ),
		],
		'core/social-links'        => [
			'outline' => __( 'Outline', 'suede' ),
			'square'  => __( 'Square', 'suede' ),
		],
	];

	foreach ( $block_styles as $block => $styles ) {
		foreach ( $styles as $name => $label ) {
			register_block_style(
				$block,
				[
					'name'  => $name,
					'label' => $label,
				]
			);
		}
	}
}

add_action( 'init', 'suede_register_block_styles' );
