<?php
/**
 * Title: Header - site title, separator, navigation
 * Slug: suede/header-simple
 * Categories: suede-header
 * Block Types: core/template-part/header
 * Template Types: header
 */
?>
<!-- wp:group {"metadata":{"name":"Header"},"align":"full","style":{"spacing":{"margin":{"top":"0px"},"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"backgroundColor":"black","textColor":"white","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull has-white-color has-black-background-color has-text-color has-background" style="margin-top:0px;padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)">
	<!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:site-title {"level":0} /-->
		<!-- wp:navigation {"overlay":"navigation-overlay","layout":{"type":"flex","setCascadingProperties":true}} /-->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
