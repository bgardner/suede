<?php
/**
 * Title: Perspective
 * Slug: suede/editorial-perspective
 * Categories: suede-editorial
 */
?>
<!-- wp:group {"metadata":{"name":"Perspective"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--40)">
	<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"0","left":"0"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"backgroundColor":"accent"} -->
	<div class="wp-block-columns are-vertically-aligned-center has-accent-background-color has-background" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
		<!-- wp:column {"verticalAlignment":"center","width":"120px"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:120px">
			<!-- wp:group {"style":{"dimensions":{"minHeight":"120px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
			<div class="wp-block-group" style="min-height:120px">
				<!-- wp:icon {"icon":"core/chart-bar","style":{"dimensions":{"width":"48px"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","ariaLabel":"Chart bar icon"} /-->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"center","backgroundColor":"black"} -->
		<div class="wp-block-column is-vertically-aligned-center has-black-background-color has-background">
			<!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"dimensions":{"minHeight":"120px"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"center"}} -->
			<div class="wp-block-group" style="min-height:120px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">
				<!-- wp:paragraph {"className":"is-style-eyebrow","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
				<p class="is-style-eyebrow has-white-color has-text-color has-link-color"><?php echo esc_html__( 'Perspective', 'suede' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"textColor":"white-50","fontSize":"x-small"} -->
				<p class="has-white-50-color has-text-color has-x-small-font-size"><?php echo esc_html__( 'Small design decisions often lead to meaningful results.', 'suede' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
