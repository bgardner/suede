<?php
/**
 * Title: Call to action with text, button
 * Slug: suede/call-to-action-button-contrast
 * Categories: suede-component
 */
?>
<!-- wp:group {"metadata":{"name":"Call to Action"},"align":"full","className":"has-white-color","style":{"spacing":{"margin":{"top":"0px"},"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"backgroundColor":"black","textColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-white-color has-base-color has-black-background-color has-text-color has-background has-link-color" style="margin-top:0px;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
	<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:paragraph {"className":"is-style-balanced","style":{"typography":{"lineHeight":"1.25"},"layout":{"selfStretch":"fixed","flexSize":"960px"}},"fontSize":"xx-large"} -->
		<p class="is-style-balanced has-xx-large-font-size" style="line-height:1.25"><?php echo esc_html__( 'Rooted in simplicity and designed with precision, Suede delivers an unmistakable sense of style, authority, and presence.', 'suede' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:buttons -->
		<div class="wp-block-buttons">
			<!-- wp:button {"style":{":hover":{"color":{"text":"var:preset|color|white"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}}}} -->
			<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php echo esc_html__( 'Explore Suede →', 'suede' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
