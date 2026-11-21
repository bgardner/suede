<?php
/**
 * Title: Post with sidebar
 * Slug: suede/template-post-sidebar
 * Template Types: single
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header","className":"site-header"} /-->
<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"0"}}},"backgroundColor":"black","layout":{"type":"constrained"}} -->
<main class="wp-block-group has-black-background-color has-background" style="margin-top:0">
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|80"}}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"width":"70%"} -->
		<div class="wp-block-column" style="flex-basis:70%">
			<!-- wp:group {"tagName":"article","style":{"spacing":{"blockGap":"0"}},"backgroundColor":"white","layout":{"type":"default"}} -->
			<article class="wp-block-group has-white-background-color has-background">
				<!-- wp:group {"tagName":"header","className":"entry-header","style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"default"}} -->
				<header class="wp-block-group entry-header">
					<!-- wp:cover {"useFeaturedImage":true,"isUserOverlayColor":true,"minHeight":460,"gradient":"fade-up-light","contentPosition":"bottom center","sizeSlug":"full","style":{"spacing":{"blockGap":"var:preset|spacing|20"},"color":{"duotone":"var:preset|duotone|black-and-white"}},"layout":{"type":"constrained"}} -->
					<div class="wp-block-cover has-custom-content-position is-position-bottom-center" style="min-height:460px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim has-background-gradient has-fade-up-light-gradient-background"></span><div class="wp-block-cover__inner-container">
						<!-- wp:group {"style":{"spacing":{"blockGap":"2px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
						<div class="wp-block-group">
							<!-- wp:group {"style":{"spacing":{"padding":{"top":"8px","bottom":"8px","left":"12px","right":"12px"},"blockGap":"5px"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"backgroundColor":"black","textColor":"white","layout":{"type":"flex","flexWrap":"nowrap"}} -->
							<div class="wp-block-group has-white-color has-black-background-color has-text-color has-background has-link-color" style="padding-top:8px;padding-right:12px;padding-bottom:8px;padding-left:12px">
								<!-- wp:paragraph {"className":"is-style-eyebrow","style":{"elements":{"link":{"color":{"text":"var:preset|color|white-50"}}},"typography":{"lineHeight":"1","fontSize":"10px"}},"textColor":"white-50"} -->
								<p class="is-style-eyebrow has-white-50-color has-text-color has-link-color" style="font-size:10px;line-height:1"><?php echo esc_html__( 'Published:', 'suede' ); ?></p>
								<!-- /wp:paragraph -->
								<!-- wp:post-date {"metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}},"className":"wp-block-post-date__modified-date","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"typography":{"textTransform":"uppercase","letterSpacing":"0.05em","fontSize":"10px","lineHeight":"1"}},"textColor":"accent"} /-->
							</div>
							<!-- /wp:group -->
						</div>
						<!-- /wp:group -->
						<!-- wp:post-title {"level":1,"className":"is-style-balanced","fontSize":"xxx-large"} /-->
						<!-- wp:post-excerpt {"className":"is-style-balanced","style":{"elements":{"link":{"color":{"text":"var:preset|color|white-50"}}},"typography":{"lineHeight":"1.5"}},"textColor":"white-50","fontSize":"x-small"} /-->
					</div></div>
					<!-- /wp:cover -->
				</header>
				<!-- /wp:group -->
				<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)">
					<!-- wp:post-content {"layout":{"type":"constrained"}} /-->
					<!-- wp:pattern {"slug":"suede/post-terms"} /-->
					<!-- wp:pattern {"slug":"suede/comments"} /-->
				</div>
				<!-- /wp:group -->
			</article>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"width":"30%"} -->
		<div class="wp-block-column" style="flex-basis:30%">
			<!-- wp:template-part {"slug":"sidebar","area":"sidebar","className":"site-sidebar"} /-->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</main>
<!-- /wp:group -->
<!-- wp:template-part {"slug":"footer","tagName":"footer","className":"site-footer"} /-->
