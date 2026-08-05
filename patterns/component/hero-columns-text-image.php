<?php
/**
 * Title: Section with text, image, buttons
 * Slug: suede/hero-columns-text-image
 * Categories: suede-component
 */
?>
<!-- wp:group {"metadata":{"name":"Hero Section"},"align":"full","style":{"spacing":{"margin":{"top":"0"},"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
	<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|80"}}},"className":"is-style-column-reverse"} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center is-style-column-reverse">
		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
				<p class="is-style-eyebrow"><?php echo esc_html__( 'Meet Suede', 'suede' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:separator {"backgroundColor":"black"} -->
				<hr class="wp-block-separator has-text-color has-black-color has-alpha-channel-opacity has-black-background-color has-background"/>
				<!-- /wp:separator -->
			</div>
			<!-- /wp:group -->
			<!-- wp:heading {"style":{"typography":{"fontSize":"48px"}}} -->
			<h2 class="wp-block-heading" style="font-size:48px"><?php echo esc_html__( 'Built for authority, designed with restraint.', 'suede' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"className":"is-style-balanced","style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}},"elements":{"link":{"color":{"text":"var:preset|color|black-60"}}}},"textColor":"black-60"} -->
			<p class="is-style-balanced has-black-60-color has-text-color has-link-color" style="margin-top:var(--wp--preset--spacing--20)"><?php echo esc_html__( 'Rooted in simplicity and crafted with purpose, Suede provides a strong foundation centered on authority and presence.', 'suede' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#"><?php echo esc_html__( 'Explore Suede →', 'suede' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/sample-image.svg'; ?>" alt="Sample image"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
