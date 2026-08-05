<?php
/**
 * Title: Section with image, text, buttons
 * Slug: suede/hero-columns-image-text-black
 * Categories: suede-component
 */
?>
<!-- wp:group {"metadata":{"name":"Hero Section"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}},"border":{"width":"1px"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"backgroundColor":"black","textColor":"white","borderColor":"black-10","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-border-color has-black-10-border-color has-white-color has-black-background-color has-text-color has-background has-link-color" style="border-width:1px;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
	<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|80"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/sample-image-white.svg'; ?>" alt="Sample image"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
				<p class="is-style-eyebrow"><?php echo esc_html__( 'Meet Suede', 'suede' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:separator {"backgroundColor":"white"} -->
				<hr class="wp-block-separator has-text-color has-white-color has-alpha-channel-opacity has-white-background-color has-background"/>
				<!-- /wp:separator -->
			</div>
			<!-- /wp:group -->
			<!-- wp:heading {"style":{"typography":{"fontSize":"48px"}}} -->
			<h2 class="wp-block-heading" style="font-size:48px"><?php echo esc_html__( 'Built for authority, designed with restraint.', 'suede' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"className":"is-style-balanced","style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}},"elements":{"link":{"color":{"text":"var:preset|color|white-50"}}}},"textColor":"white-50"} -->
			<p class="is-style-balanced has-white-50-color has-text-color has-link-color" style="margin-top:var(--wp--preset--spacing--20)"><?php echo esc_html__( 'Rooted in simplicity and crafted with purpose, Suede provides a strong foundation centered on authority and presence.', 'suede' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"style":{":hover":{"color":{"text":"var:preset|color|white"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}}}} -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#"><?php echo esc_html__( 'Explore Suede →', 'suede' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
