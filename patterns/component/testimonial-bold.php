<?php
/**
 * Title: Single testimonial with text
 * Slug: suede/testimonial-bold
 * Categories: suede-component
 */
?>
<!-- wp:group {"metadata":{"name":"Testimonial"},"align":"full","style":{"spacing":{"margin":{"top":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"backgroundColor":"black","textColor":"white","layout":{"type":"constrained","wideSize":"1280px"}} -->
<div class="wp-block-group alignfull has-white-color has-black-background-color has-text-color has-background has-link-color" style="margin-top:0">
	<!-- wp:image {"width":"60px","sizeSlug":"full","linkDestination":"none","align":"center","style":{"color":{"duotone":["#ffffff","#ffffff"]}}} -->
	<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/quote-top.svg'; ?>" alt="Quote top icon" style="width:60px"/></figure>
	<!-- /wp:image -->
	<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
	<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--80);margin-bottom:var(--wp--preset--spacing--80)">
		<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1","textAlign":"center","fontStyle":"normal","fontWeight":"300"}},"fontSize":"xxx-large"} -->
		<p class="has-text-align-center has-xxx-large-font-size" style="font-style:normal;font-weight:300;line-height:1"><?php echo esc_html__( 'Rooted in simplicity and designed with precision, Suede delivers an unmistakable sense of style, authority, and presence.', 'suede' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:paragraph {"align":"center"} -->
		<p class="has-text-align-center"><?php echo esc_html__( 'Jennifer Kayne, Designer', 'suede' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
	<!-- wp:image {"width":"60px","sizeSlug":"full","linkDestination":"none","align":"center","style":{"color":{"duotone":["#ffffff","#ffffff"]}}} -->
	<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/quote-bottom.svg'; ?>" alt="Quote bottom icon" style="width:60px"/></figure>
	<!-- /wp:image -->
</div>
<!-- /wp:group -->
