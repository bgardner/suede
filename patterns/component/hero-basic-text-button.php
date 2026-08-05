<?php
/**
 * Title: Section with text, button
 * Slug: suede/hero-basic-text-button
 * Categories: suede-component
 */
?>
<!-- wp:group {"metadata":{"name":"Hero Section"},"align":"full","style":{"spacing":{"margin":{"top":"0"},"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|100"}}},"layout":{"type":"constrained","contentSize":"1280px"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--100)">
	<!-- wp:group {"style":{"spacing":{"blockGap":"15px"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
	<div class="wp-block-group">
		<!-- wp:separator {"className":"is-style-short","backgroundColor":"accent"} -->
		<hr class="wp-block-separator has-text-color has-accent-color has-alpha-channel-opacity has-accent-background-color has-background is-style-short"/>
		<!-- /wp:separator -->
		<!-- wp:paragraph {"className":"is-style-eyebrow","style":{"typography":{"textAlign":"center"},"elements":{"link":{"color":{"text":"var:preset|color|accent"}}}},"textColor":"accent"} -->
		<p class="has-text-align-center is-style-eyebrow has-accent-color has-text-color has-link-color"><?php echo esc_html__( 'Available everywhere', 'suede' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:separator {"className":"is-style-short","backgroundColor":"accent"} -->
		<hr class="wp-block-separator has-text-color has-accent-color has-alpha-channel-opacity has-accent-background-color has-background is-style-short"/>
		<!-- /wp:separator -->
	</div>
	<!-- /wp:group -->
	<!-- wp:heading {"level":1,"className":"is-style-balanced","style":{"typography":{"textAlign":"center","fontSize":"72px"},"spacing":{"margin":{"top":"var:preset|spacing|20"}}}} -->
	<h1 class="wp-block-heading has-text-align-center is-style-balanced" style="margin-top:var(--wp--preset--spacing--20);font-size:72px"><?php echo esc_html__( 'Design and launch your WordPress website in minutes.', 'suede' ); ?></h1>
	<!-- /wp:heading -->
	<!-- wp:paragraph {"style":{"typography":{"textAlign":"center"},"elements":{"link":{"color":{"text":"var:preset|color|black-60"}}},"spacing":{"margin":{"top":"10px"}}},"textColor":"black-60"} -->
	<p class="has-text-align-center has-black-60-color has-text-color has-link-color" style="margin-top:10px"><?php echo esc_html__( 'Everything you need to build authority and presence.', 'suede' ); ?></p>
	<!-- /wp:paragraph -->
	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons">
		<!-- wp:button {"style":{"spacing":{"padding":{"left":"var:preset|spacing|x-large","right":"var:preset|spacing|x-large","top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium"}}},"fontSize":"xx-small"} -->
		<div class="wp-block-button"><a class="wp-block-button__link has-xx-small-font-size has-custom-font-size wp-element-button" href="#" style="padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--x-large)"><?php echo esc_html__( 'Explore Suede →', 'suede' ); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
