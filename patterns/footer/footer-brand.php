<?php
/**
 * Title: Footer - site title, links
 * Slug: suede/footer-brand
 * Categories: suede-footer
 * Block Types: core/template-part/footer
 * Template Types: footer
 */
?>
<!-- wp:group {"metadata":{"name":"Footer"},"align":"full","style":{"spacing":{"margin":{"top":"0"},"blockGap":"0","padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|100"}},"elements":{"link":{"color":{"text":"var:preset|color|white-50"},":hover":{"color":{"text":"var:preset|color|white"}}}}},"backgroundColor":"black","textColor":"white-50","fontSize":"xx-small","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-white-50-color has-black-background-color has-text-color has-background has-link-color has-xx-small-font-size" style="margin-top:0;padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--100)">
	<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:site-title {"level":0,"isLink":false,"className":"is-style-eyebrow","textColor":"white","fontSize":"small"} /-->
		<!-- wp:group {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.05em"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group" style="letter-spacing:0.05em;text-transform:uppercase">
			<!-- wp:paragraph -->
			<p><a href="#" class="no-underline"><?php echo esc_html__( 'About', 'suede' ); ?></a></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph -->
			<p><a href="#" class="no-underline"><?php echo esc_html__( 'Work', 'suede' ); ?></a></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph -->
			<p><a href="#" class="no-underline"><?php echo esc_html__( 'Journal', 'suede' ); ?></a></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph -->
			<p><a href="#" class="no-underline"><?php echo esc_html__( 'Contact', 'suede' ); ?></a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
