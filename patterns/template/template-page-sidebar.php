<?php
/**
 * Title: Page with sidebar
 * Slug: suede/template-page-sidebar
 * Template Types: page
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
