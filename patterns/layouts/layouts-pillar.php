<?php
/**
 * Title: Editorial layout
 * Slug: suede/content-pillar
 * Categories: suede-content
 * Inserter: no
 */
?>
<!-- wp:cover {"useFeaturedImage":true,"isUserOverlayColor":true,"minHeight":600,"gradient":"fade-down","contentPosition":"bottom center","align":"full","style":{"spacing":{"margin":{"top":"0"},"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull has-custom-content-position is-position-bottom-center has-white-color has-text-color has-link-color" style="margin-top:0;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);min-height:600px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim has-background-gradient has-fade-down-gradient-background"></span><div class="wp-block-cover__inner-container">
	<!-- wp:post-title {"align":"wide","className":"is-style-balanced","style":{"typography":{"fontSize":"108px","letterSpacing":"-0.02em","lineHeight":"0.9"}}} /-->
	<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:group {"align":"wide","layout":{"type":"constrained","justifyContent":"left","contentSize":"400px"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:post-excerpt {"style":{"typography":{"fontStyle":"italic","fontWeight":"300"},"elements":{"link":{"color":{"text":"var:preset|color|white-60"}}}},"textColor":"white-60","fontSize":"x-small"} /-->
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
<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"0"},"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="margin-top:0;padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)">
	<!-- wp:columns {"align":"wide","style":{"spacing":{"margin":{"top":"0"},"blockGap":{"left":"var:preset|spacing|40"}}}} -->
	<div class="wp-block-columns alignwide" style="margin-top:0">
		<!-- wp:column {"width":"20%","style":{"spacing":{"padding":{"top":"10px"}}}} -->
		<div class="wp-block-column" style="padding-top:10px;flex-basis:20%">
			<!-- wp:group {"style":{"position":{"type":"sticky","top":"0px"},"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"blockGap":"10px"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
				<!-- wp:heading {"fontSize":"xx-small"} -->
				<h2 class="wp-block-heading has-xx-small-font-size"><?php echo esc_html__( 'Reading Guide', 'suede' ); ?></h2>
				<!-- /wp:heading -->
				<!-- wp:list {"ordered":true,"type":"lower-roman","className":"is-style-no-underline","fontSize":"x-small"} -->
				<ol style="list-style-type:lower-roman" class="wp-block-list is-style-no-underline has-x-small-font-size">
					<!-- wp:list-item -->
					<li><a href="#introduction"><?php echo esc_html__( 'Introduction', 'suede' ); ?></a></li>
					<!-- /wp:list-item -->
					<!-- wp:list-item -->
					<li><a href="#section-1"><?php echo esc_html__( 'Section #1', 'suede' ); ?></a></li>
					<!-- /wp:list-item -->
					<!-- wp:list-item -->
					<li><a href="#section-2"><?php echo esc_html__( 'Section #2', 'suede' ); ?></a></li>
					<!-- /wp:list-item -->
					<!-- wp:list-item -->
					<li><a href="#section-3"><?php echo esc_html__( 'Section #3', 'suede' ); ?></a></li>
					<!-- /wp:list-item -->
					<!-- wp:list-item -->
					<li><a href="#conclusion"><?php echo esc_html__( 'Conclusion', 'suede' ); ?></a></li>
					<!-- /wp:list-item -->
				</ol>
				<!-- /wp:list -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"width":"60%"} -->
		<div class="wp-block-column" style="flex-basis:60%">
			<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--60)">
				<!-- wp:heading {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60"}}},"anchor":"introduction"} -->
				<h2 id="introduction" class="wp-block-heading" style="padding-top:var(--wp--preset--spacing--60)"><?php echo esc_html__( 'Introduction', 'suede' ); ?></h2>
				<!-- /wp:heading -->
				<!-- wp:paragraph  -->
				<p><?php echo esc_html__( 'Let’s get started...', 'suede' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60"}}},"anchor":"section-1"} -->
				<h2 id="section-1" class="wp-block-heading" style="padding-top:var(--wp--preset--spacing--60)"><?php echo esc_html__( 'Section #1', 'suede' ); ?></h2>
				<!-- /wp:heading -->
				<!-- wp:paragraph  -->
				<p><?php echo esc_html__( 'Let’s get started...', 'suede' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60"}}},"anchor":"section-2"} -->
				<h2 id="section-2" class="wp-block-heading" style="padding-top:var(--wp--preset--spacing--60)"><?php echo esc_html__( 'Section #2', 'suede' ); ?></h2>
				<!-- /wp:heading -->
				<!-- wp:paragraph  -->
				<p><?php echo esc_html__( 'Let’s get started...', 'suede' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60"}}},"anchor":"section-3"} -->
				<h2 id="section-3" class="wp-block-heading" style="padding-top:var(--wp--preset--spacing--60)"><?php echo esc_html__( 'Section #3', 'suede' ); ?></h2>
				<!-- /wp:heading -->
				<!-- wp:paragraph  -->
				<p><?php echo esc_html__( 'Let’s get started...', 'suede' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60"}}},"anchor":"conclusion"} -->
				<h2 id="conclusion" class="wp-block-heading" style="padding-top:var(--wp--preset--spacing--60)"><?php echo esc_html__( 'Conclusion', 'suede' ); ?></h2>
				<!-- /wp:heading -->
				<!-- wp:paragraph  -->
				<p><?php echo esc_html__( 'Let’s get started...', 'suede' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"width":"20%"} -->
		<div class="wp-block-column" style="flex-basis:20%"></div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
