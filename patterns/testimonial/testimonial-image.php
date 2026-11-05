<?php
/**
 * Title: Single testimonial with text, image
 * Slug: suede/testimonial-image
 * Categories: suede-testimonial
 */
?>
<!-- wp:group {"metadata":{"name":"Testimonial"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
	<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|80"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-zoom"} -->
			<figure class="wp-block-image size-full is-style-zoom"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/sample-image.svg'; ?>" alt="Sample image" style="aspect-ratio:1;object-fit:cover"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:group {"layout":{"type":"default"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"className":"is-style-eyebrow","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}}},"textColor":"accent"} -->
				<p class="is-style-eyebrow has-accent-color has-text-color has-link-color"><?php echo esc_html__( 'Testimonial', 'suede' ); ?></p>
				<!-- /wp:paragraph -->
				
				<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.2"},"spacing":{"margin":{"top":"var:preset|spacing|20"}}},"fontSize":"xx-large","fontFamily":"cormorant-garamond"} -->
				<p class="has-cormorant-garamond-font-family has-xx-large-font-size" style="margin-top:var(--wp--preset--spacing--20);line-height:1.2"><em><?php echo esc_html__( 'Rooted in simplicity, Suede delivers an unmistakable sense of refinement, authority, and presence.', 'suede' ); ?></em></p>
				<!-- /wp:paragraph -->
				<!-- wp:group {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"10px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
				<div class="wp-block-group">
					<!-- wp:separator {"className":"is-style-short","backgroundColor":"accent"} -->
					<hr class="wp-block-separator has-text-color has-accent-color has-alpha-channel-opacity has-accent-background-color has-background is-style-short"/>
					<!-- /wp:separator -->
					<!-- wp:paragraph {"className":"is-style-eyebrow","style":{"elements":{"link":{"color":{"text":"var:preset|color|black-60"}}}},"textColor":"black-60","fontSize":"xxx-small"} -->
					<p class="is-style-eyebrow has-black-60-color has-text-color has-link-color has-xxx-small-font-size"><?php echo esc_html__( 'Jennifer Kayne · Designer', 'suede' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
