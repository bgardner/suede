<?php
/**
 * Register Suede icons.
 *
 * @package Suede
 */

/**
 * Register Suede icons.
 */
function suede_register_icons() {

	if (
		! function_exists( 'wp_register_icon_collection' ) ||
		! function_exists( 'wp_register_icon' )
	) {
		return;
	}

	wp_register_icon_collection(
		'suede-icons',
		array(
			'label'       => __( 'Suede', 'suede' ),
			'description' => __( 'Icons provided for Suede.', 'suede' ),
		)
	);

	$icons_dir = trailingslashit( get_theme_file_path( 'assets/icons' ) );
	$icons     = glob( $icons_dir . '*.svg' );

	if ( empty( $icons ) ) {
		return;
	}

	foreach ( $icons as $icon ) {

		if ( ! is_readable( $icon ) ) {
			continue;
		}

		$slug = sanitize_key( basename( $icon, '.svg' ) );

		if ( empty( $slug ) ) {
			continue;
		}

		$label = ucwords(
			str_replace(
				array( '-', '_' ),
				' ',
				$slug
			)
		);

		wp_register_icon(
			"suede-icons/{$slug}",
			array(
				'label'     => $label,
				'file_path' => $icon,
			)
		);
	}
}

add_action( 'init', 'suede_register_icons' );
