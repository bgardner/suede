<?php
/**
 * Title: Header - site title, separator, navigation
 * Slug: suede/header-white
 * Categories: suede-header
 * Block Types: core/template-part/header
 * Template Types: header
 */
?>
<!-- wp:group {"metadata":{"name":"Header"},"align":"full","style":{"spacing":{"margin":{"top":"0px"},"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"backgroundColor":"white","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull has-white-background-color has-background" style="margin-top:0px;padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)">
	<!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group">
			<!-- wp:site-title {"level":0} /-->
			<!-- wp:separator {"className":"has-text-color has-contrast-color has-alpha-channel-opacity has-accent-background-color has-background","backgroundColor":"accent"} -->
			<hr class="wp-block-separator has-text-color has-accent-color has-alpha-channel-opacity has-accent-background-color has-background has-contrast-color"/>
			<!-- /wp:separator -->
		</div>
		<!-- /wp:group -->
		<!-- wp:navigation {"overlay":"navigation-overlay","layout":{"type":"flex","setCascadingProperties":true}} /-->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
