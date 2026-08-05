<?php
/**
 * Title: Statistic
 * Slug: suede/editorial-statistic
 * Categories: suede-editorial
 */
?>
<!-- wp:group {"metadata":{"name":"Statistic"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"0","margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"backgroundColor":"black-10","layout":{"type":"default"}} -->
<div class="wp-block-group has-black-10-background-color has-background" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--40);padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
	<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph {"className":"no-wrap","style":{"typography":{"lineHeight":"1.25","textAlign":"right"},"spacing":{"padding":{"right":"var:preset|spacing|30"}},"border":{"right":{"color":"var:preset|color|accent","width":"1px"},"top":{},"bottom":{},"left":{}}},"fontSize":"xx-large"} -->
		<p class="has-text-align-right no-wrap has-xx-large-font-size" style="border-right-color:var(--wp--preset--color--accent);border-right-width:1px;padding-right:var(--wp--preset--spacing--30);line-height:1.25"><?php echo esc_html__( '75%', 'suede' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:paragraph {"fontSize":"x-small"} -->
		<p class="has-x-small-font-size"><?php echo esc_html__( 'Readers engage more with well-structured content.', 'suede' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
