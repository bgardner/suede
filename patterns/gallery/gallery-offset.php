<?php
/**
 * Title: Gallery with offset images
 * Slug: suede/gallery-offset
 * Categories: suede-gallery
 */
?>
<!-- wp:group {"metadata":{"name":"Gallery"},"align":"full","style":{"spacing":{"margin":{"top":"0"},"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|80"}}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"width":"60%","style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
		<div class="wp-block-column" style="flex-basis:60%">
			<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|20"},"@tablet":{"spacing":{"padding":{"right":"0"}}},"@mobile":{"spacing":{"padding":{"right":"0"}}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--80)">
				<!-- wp:image {"lightbox":{"enabled":true},"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
				<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/sample-image.svg'; ?>" alt="Sample image" style="aspect-ratio:4/3;object-fit:cover"/></figure>
				<!-- /wp:image -->
				<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
				<div class="wp-block-group">
					<!-- wp:heading {"level":3} -->
					<h3 class="wp-block-heading"><?php echo esc_html__( 'My Image', 'suede' ); ?></h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
					<p class="is-style-eyebrow"><?php echo esc_html__( 'Location — 2026', 'suede' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"width":"40%","style":{"spacing":{"blockGap":"var:preset|spacing|40","padding":{"top":"var:preset|spacing|80"}},"@tablet":{"spacing":{"padding":{"top":"0"}}},"@mobile":{"spacing":{"padding":{"top":"0"}}}}} -->
		<div class="wp-block-column" style="padding-top:var(--wp--preset--spacing--80);flex-basis:40%">
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|20"},"@tablet":{"spacing":{"padding":{"top":"0"}}},"@mobile":{"spacing":{"padding":{"top":"0"}}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--80)">
				<!-- wp:image {"lightbox":{"enabled":true},"aspectRatio":"3/4","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
				<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/sample-image.svg'; ?>" alt="Sample image" style="aspect-ratio:3/4;object-fit:cover"/></figure>
				<!-- /wp:image -->
				<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
				<div class="wp-block-group">
					<!-- wp:heading {"level":3} -->
					<h3 class="wp-block-heading"><?php echo esc_html__( 'My Image', 'suede' ); ?></h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
					<p class="is-style-eyebrow"><?php echo esc_html__( 'Location — 2026', 'suede' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|80"}},"@tablet":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"@mobile":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"width":"40%","style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
		<div class="wp-block-column" style="flex-basis:40%">
			<!-- wp:group {"style":{"spacing":{"margin":{"top":"-160px"},"blockGap":"var:preset|spacing|20"},"@tablet":{"spacing":{"margin":{"top":"0"}}},"@mobile":{"spacing":{"margin":{"top":"0"}}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group" style="margin-top:-160px">
				<!-- wp:image {"lightbox":{"enabled":true},"aspectRatio":"3/4","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
				<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/sample-image.svg'; ?>" alt="Sample image" style="aspect-ratio:3/4;object-fit:cover"/></figure>
				<!-- /wp:image -->
				<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
				<div class="wp-block-group">
					<!-- wp:heading {"level":3} -->
					<h3 class="wp-block-heading"><?php echo esc_html__( 'My Image', 'suede' ); ?></h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
					<p class="is-style-eyebrow"><?php echo esc_html__( 'Location — 2026', 'suede' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"width":"60%","style":{"spacing":{"blockGap":"var:preset|spacing|40","padding":{"top":"var:preset|spacing|80"}},"@tablet":{"spacing":{"padding":{"top":"0"}}},"@mobile":{"spacing":{"padding":{"top":"0"}}}}} -->
		<div class="wp-block-column" style="padding-top:var(--wp--preset--spacing--80);flex-basis:60%">
			<!-- wp:group {"style":{"spacing":{"padding":{"left":"var:preset|spacing|80","top":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|20"},"@tablet":{"spacing":{"padding":{"left":"0","top":"0"}}},"@mobile":{"spacing":{"padding":{"left":"0","top":"0"}}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--80)">
				<!-- wp:image {"lightbox":{"enabled":true},"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
				<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/sample-image.svg'; ?>" alt="Sample image" style="aspect-ratio:4/3;object-fit:cover"/></figure>
				<!-- /wp:image -->
				<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
				<div class="wp-block-group">
					<!-- wp:heading {"level":3} -->
					<h3 class="wp-block-heading"><?php echo esc_html__( 'My Image', 'suede' ); ?></h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
					<p class="is-style-eyebrow"><?php echo esc_html__( 'Location — 2026', 'suede' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
