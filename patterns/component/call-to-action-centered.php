<?php
/**
 * Title: Call to action with text, buttons
 * Slug: suede/call-to-action-centered
 * Categories: suede-component
 */
?>
<!-- wp:group {"metadata":{"name":"Call to Action"},"align":"full","style":{"spacing":{"margin":{"top":"0px"},"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"backgroundColor":"black","textColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-white-color has-black-background-color has-text-color has-background has-link-color" style="margin-top:0px;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
	<!-- wp:heading {"className":"wp-block-heading has-text-align-center","style":{"typography":{"fontSize":"48px"}}} -->
	<h2 class="wp-block-heading has-text-align-center" style="font-size:48px"><?php echo esc_html__( 'Meet Suede.', 'suede' ); ?></h2>
	<!-- /wp:heading -->
	<!-- wp:paragraph {"className":"is-style-balanced","style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}},"typography":{"textAlign":"center"},"elements":{"link":{"color":{"text":"var:preset|color|white-50"}}}},"textColor":"white-50"} -->
	<p class="has-text-align-center is-style-balanced has-white-50-color has-text-color has-link-color" style="margin-top:var(--wp--preset--spacing--20)"><?php echo esc_html__( 'Rooted in simplicity and designed with precision, Suede delivers an unmistakable sense of style, authority, and presence.', 'suede' ); ?></p>
	<!-- /wp:paragraph -->
	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"}} -->
	<div class="wp-block-buttons">
		<!-- wp:button {"style":{":hover":{"color":{"text":"var:preset|color|white"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}}}} -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php echo esc_html__( 'Explore Suede →', 'suede' ); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
