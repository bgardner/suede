<?php
/**
 * Title: Post with boxed content
 * Slug: suede/template-post-boxed
 * Template Types: single
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header","className":"site-header"} /-->
<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"0"}}}} -->
<main class="wp-block-group" style="margin-top:0">
	<!-- wp:group {"tagName":"article","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
	<article class="wp-block-group">
		<!-- wp:cover {"useFeaturedImage":true,"isUserOverlayColor":true,"minHeight":400,"gradient":"fade-down","sizeSlug":"full","className":"is-style-gradient","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|100","top":"0"},"blockGap":"0"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","layout":{"type":"default"}} -->
		<div class="wp-block-cover is-style-gradient has-white-color has-text-color has-link-color" style="padding-top:0;padding-bottom:var(--wp--preset--spacing--100);min-height:400px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim has-background-gradient has-fade-down-gradient-background"></span><div class="wp-block-cover__inner-container">
			<!-- wp:group {"tagName":"header","align":"wide","className":"entry-header","style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"constrained","contentSize":"800px"}} -->
			<header class="wp-block-group alignwide entry-header">
				<!-- wp:post-title {"textAlign":"center","level":1,"className":"is-style-balanced","fontSize":"xx-large"} /-->
				<!-- wp:group {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":"5px"}},"fontSize":"x-small"} -->
				<div class="wp-block-group has-x-small-font-size">
					<!-- wp:post-date /-->
					<!-- wp:paragraph -->
					<p>·</p>
					<!-- /wp:paragraph -->
					<!-- wp:post-author-name {"isLink":true} /-->
				</div>
				<!-- /wp:group -->
			</header>
			<!-- /wp:group -->
		</div></div>
		<!-- /wp:cover -->
		<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px"}}},"layout":{"type":"constrained","wideSize":"960px","contentSize":"960px"}} -->
		<div class="wp-block-group" style="margin-top:0px">
			<!-- wp:group {"className":"position-relative z-index-positive","style":{"spacing":{"margin":{"top":"-100px"},"blockGap":"0"},"shadow":"var:preset|shadow|light"},"backgroundColor":"white","layout":{"type":"default"}} -->
			<div class="wp-block-group position-relative z-index-positive has-white-background-color has-background" style="margin-top:-100px;box-shadow:var(--wp--preset--shadow--light)">
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"backgroundColor":"white","layout":{"type":"constrained"}} -->
				<div class="wp-block-group has-white-background-color has-background" style="padding-top:var(--wp--preset--spacing--100);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60)">
					<!-- wp:post-content {"layout":{"type":"constrained"}} /-->
					<!-- wp:pattern {"slug":"suede/post-terms"} /-->
					<!-- wp:pattern {"slug":"suede/comments"} /-->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"align":"full","style":{"dimensions":{"minHeight":"100px"},"spacing":{"margin":{"top":"-100px"}}},"backgroundColor":"black","layout":{"type":"default"}} -->
		<div class="wp-block-group alignfull has-black-background-color has-background" style="min-height:100px;margin-top:-100px"></div>
		<!-- /wp:group -->
	</article>
	<!-- /wp:group -->
</main>
<!-- /wp:group -->
<!-- wp:template-part {"slug":"footer","tagName":"footer","className":"site-footer"} /-->
