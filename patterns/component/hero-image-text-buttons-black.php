<?php
/**
 * Title: Section with image, text, buttons
 * Slug: suede/hero-image-text-buttons-black
 * Categories: suede-component
 */
?>
<!-- wp:group {"metadata":{"name":"Hero Section"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}},"border":{"width":"1px"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"backgroundColor":"black","textColor":"white","borderColor":"black-10","layout":{"type":"constrained","wideSize":"960px"}} -->
<div class="wp-block-group alignfull has-border-color has-black-10-border-color has-white-color has-black-background-color has-text-color has-background has-link-color" style="border-width:1px;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
	<!-- wp:image {"aspectRatio":"16/9","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
	<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/sample-image-white.svg'; ?>" alt="Sample image" style="aspect-ratio:16/9;object-fit:cover"/></figure>
	<!-- /wp:image -->
	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"top":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
	<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--60)">
		<!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"48px"}}} -->
		<h1 class="wp-block-heading has-text-align-center" style="font-size:48px"><?php echo esc_html__( 'Meet Suede.', 'suede' ); ?></h1>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"className":"is-style-balanced","style":{"typography":{"textAlign":"center"},"elements":{"link":{"color":{"text":"var:preset|color|white-50"}}}},"textColor":"white-50"} -->
		<p class="has-text-align-center is-style-balanced has-black-60-color has-text-color has-link-color"><?php echo esc_html__( 'Rooted in simplicity and crafted with purpose, Suede provides a strong foundation centered on authority and presence.', 'suede' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons">
		<!-- wp:button {"style":{":hover":{"color":{"text":"var:preset|color|white"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}}}} -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#"><?php echo esc_html__( 'Explore Suede →', 'suede' ); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
