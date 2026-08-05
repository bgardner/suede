<?php
/**
 * Title: Page with full-width cover
 * Slug: suede/template-page-cover
 * Template Types: page
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header","className":"site-header"} /-->
<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"0"}}}} -->
<main class="wp-block-group" style="margin-top:0">
	<!-- wp:group {"tagName":"article","layout":{"type":"default"}} -->
	<article class="wp-block-group">
		<!-- wp:group {"tagName":"header","style":{"spacing":{"blockGap":"10px"}},"className":"entry-header","layout":{"type":"constrained"}} -->
		<header class="wp-block-group entry-header">
			<!-- wp:cover {"useFeaturedImage":true,"isUserOverlayColor":true,"minHeight":480,"gradient":"fade-down","contentPosition":"bottom center","align":"full","style":{"spacing":{"margin":{"top":"0"},"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|20"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","layout":{"type":"constrained"}} -->
			<div class="wp-block-cover alignfull has-custom-content-position is-position-bottom-center has-white-color has-text-color has-link-color" style="margin-top:0;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);min-height:480px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim has-background-gradient has-fade-down-gradient-background"></span><div class="wp-block-cover__inner-container">
				<!-- wp:group {"align":"wide","layout":{"type":"constrained","wideSize":"960px","justifyContent":"left"}} -->
				<div class="wp-block-group alignwide"><!-- wp:post-title {"align":"wide","className":"is-style-balanced","style":{"typography":{"fontSize":"72px"}}} /--></div>
				<!-- /wp:group -->
				<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
				<div class="wp-block-group alignwide">
					<!-- wp:group {"align":"wide","layout":{"type":"constrained","justifyContent":"left","contentSize":"400px"}} -->
					<div class="wp-block-group alignwide">
						<!-- wp:post-excerpt {"excerptLength":20,"style":{"typography":{"fontStyle":"italic","fontWeight":"400"},"elements":{"link":{"color":{"text":"var:preset|color|white-60"}}}},"textColor":"white-60","fontSize":"x-small"} /-->
					</div>
					<!-- /wp:group -->
					<!-- wp:group {"metadata":{"name":"Post meta"},"align":"wide","style":{"spacing":{"blockGap":"5px"},"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"500"}},"fontSize":"xxx-small","fontFamily":"google-sans","layout":{"type":"flex"}} -->
					<div class="wp-block-group alignwide has-google-sans-font-family has-xxx-small-font-size" style="font-style:normal;font-weight:500;text-transform:uppercase">
						<!-- wp:paragraph -->
						<p><?php echo esc_html__( 'Last updated:', 'suede' ); ?></p>
						<!-- /wp:paragraph -->
						<!-- wp:post-date {"metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"modified"}}}}} /-->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div></div>
			<!-- /wp:cover -->
		</header>
		<!-- /wp:group -->
		<!-- wp:group {"style":{"spacing":{"margin":{"top":"0"},"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"default"}} -->
		<div class="wp-block-group" style="margin-top:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
			<!-- wp:post-content {"layout":{"type":"constrained"}} /-->
		</div>
		<!-- /wp:group -->
	</article>
	<!-- /wp:group -->
</main>
<!-- /wp:group -->
<!-- wp:template-part {"slug":"footer","tagName":"footer","className":"site-footer"} /-->
