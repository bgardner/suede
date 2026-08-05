<?php
/**
 * Title: Sequence
 * Slug: suede/editorial-sequence
 * Categories: suede-editorial
 */
?>
<!-- wp:group {"metadata":{"name":"Sequence"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--40)">
	<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"0","left":"0"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"backgroundColor":"black-10"} -->
	<div class="wp-block-columns are-vertically-aligned-center has-black-10-background-color has-background" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
		<!-- wp:column {"verticalAlignment":"center","width":"25%","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"backgroundColor":"black","textColor":"white"} -->
		<div class="wp-block-column is-vertically-aligned-center has-white-color has-black-background-color has-text-color has-background has-link-color" style="flex-basis:25%">
			<!-- wp:group {"style":{"dimensions":{"minHeight":"80px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
			<div class="wp-block-group" style="min-height:80px">
				<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
				<p class="is-style-eyebrow"><?php echo esc_html__( 'Sequence', 'suede' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"center","width":"75%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:75%">
			<!-- wp:group {"style":{"spacing":{"blockGap":"15px"},"dimensions":{"minHeight":"80px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
			<div class="wp-block-group" style="min-height:80px">
				<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
				<p class="is-style-eyebrow"><?php echo esc_html__( 'Discovery', 'suede' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:icon {"icon":"core/arrow-right","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"dimensions":{"width":"20px"}},"textColor":"accent","ariaLabel":"Right arrow icon"} /-->
				<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
				<p class="is-style-eyebrow"><?php echo esc_html__( 'Trust', 'suede' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:icon {"icon":"core/arrow-right","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"dimensions":{"width":"20px"}},"textColor":"accent","ariaLabel":"Right arrow icon"} /-->
				<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
				<p class="is-style-eyebrow"><?php echo esc_html__( 'Influence', 'suede' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
