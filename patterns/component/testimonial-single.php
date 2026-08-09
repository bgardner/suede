<?php
/**
 * Title: Single testimonial with text, image
 * Slug: suede/testimonial-single
 * Categories: suede-component
 */
?>
<!-- wp:group {"metadata":{"name":"Testimonial"},"align":"full","style":{"spacing":{"margin":{"top":"0"},"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"backgroundColor":"black","textColor":"white","layout":{"type":"constrained","contentSize":"800px"}} -->
<div class="wp-block-group alignfull has-white-color has-black-background-color has-text-color has-background has-link-color" style="margin-top:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
	<!-- wp:paragraph {"style":{"typography":{"textAlign":"center"}}} -->
	<p class="has-text-align-center">★ ★ ★ ★ ★</p>
	<!-- /wp:paragraph -->
	<!-- wp:paragraph {"align":"center","className":"is-style-balanced","style":{"spacing":{"margin":{"top":"10px"}},"typography":{"lineHeight":"1.5"}},"fontSize":"small"} -->
	<p class="has-text-align-center is-style-balanced has-small-font-size" style="margin-top:10px;line-height:1.5"><?php echo esc_html__( '“Rooted in simplicity and designed with precision, Suede delivers an unmistakable sense of style, authority, and presence.”', 'suede' ); ?></p>
	<!-- /wp:paragraph -->
	<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
	<div class="wp-block-group">
		<!-- wp:image {"width":"40px","height":"40px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","className":"is-style-rounded"} -->
		<figure class="wp-block-image aligncenter size-full is-resized is-style-rounded"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/sample-avatar-white.svg'; ?>" alt="Sample avatar" style="object-fit:cover;width:40px;height:40px"/></figure>
		<!-- /wp:image -->
		<!-- wp:paragraph -->
		<p><?php echo esc_html__( 'Jennifer Kayne, Designer', 'suede' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
