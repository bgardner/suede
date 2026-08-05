<?php
/**
 * Title: Footer - text
 * Slug: suede/footer-simple
 * Categories: suede-footer
 * Block Types: core/template-part/footer
 * Template Types: footer
 */
?>
<!-- wp:group {"metadata":{"name":"Footer"},"align":"full","style":{"spacing":{"margin":{"top":"0"},"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"elements":{"link":{"color":{"text":"var:preset|color|white-50"},":hover":{"color":{"text":"var:preset|color|white"}}}}},"backgroundColor":"black","textColor":"white-50","fontSize":"x-small","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-white-50-color has-black-background-color has-text-color has-background has-link-color has-x-small-font-size" style="margin-top:0;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)">
	<!-- wp:group {"align":"wide","layout":{"type":"flex","allowOrientation":false,"justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group">
			<!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph -->
				<p>© 2026</p>
				<!-- /wp:paragraph -->
				<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
				<div class="wp-block-group">
					<!-- wp:site-title {"level":0,"isLink":false,"style":{"typography":{"fontStyle":"normal","lineHeight":"1.75","fontWeight":"400"}}} /-->
					<!-- wp:paragraph -->
					<p>.</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
			<!-- wp:paragraph -->
			<p><?php echo esc_html__( 'All rights reserved.', 'suede' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<!-- wp:paragraph -->
		<p><a href="https://briangardner.com/suede/" target="_blank" rel="noreferrer noopener" class="no-underline"><?php echo esc_html__( 'Designed with Suede.', 'suede' ); ?></a></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
