<?php
/**
 * Title: Call to action with text, buttons
 * Slug: suede/call-to-action-resource
 * Categories: suede-component
 */
?>
<!-- wp:group {"metadata":{"name":"Call to Action"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"margin":{"top":"0"}}},"layout":{"type":"constrained","contentSize":"1080px"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
	<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|100"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center","width":"380px"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:380px">
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}},"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"shadow":"var:preset|shadow|subtle"},"backgroundColor":"black","textColor":"white","layout":{"type":"constrained"}} -->
			<div class="wp-block-group has-white-color has-black-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20);box-shadow:var(--wp--preset--shadow--subtle)">
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|40"},"border":{"width":"1px"}},"borderColor":"white-15","layout":{"type":"constrained"}} -->
				<div class="wp-block-group has-border-color has-white-15-border-color" style="border-width:1px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--40)">
					<!-- wp:paragraph {"className":"is-style-eyebrow","style":{"typography":{"textAlign":"center"},"elements":{"link":{"color":{"text":"var:preset|color|white-50"}}}},"textColor":"white-50"} -->
					<p class="has-text-align-center is-style-eyebrow has-white-50-color has-text-color has-link-color"><?php echo esc_html__( '2026 Edition', 'suede' ); ?></p>
					<!-- /wp:paragraph -->
					<!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"textAlign":"center"},"spacing":{"margin":{"top":"var:preset|spacing|60"}}},"textColor":"base"} -->
					<h2 class="wp-block-heading has-text-align-center has-base-color has-text-color has-link-color" style="margin-top:var(--wp--preset--spacing--60)"><?php echo esc_html__( 'Place Authority', 'suede' ); ?></h2>
					<!-- /wp:heading -->
					<!-- wp:separator {"backgroundColor":"accent"} -->
					<hr class="wp-block-separator has-text-color has-accent-color has-alpha-channel-opacity has-accent-background-color has-background"/>
					<!-- /wp:separator -->
					<!-- wp:paragraph {"className":"is-style-eyebrow","style":{"typography":{"textAlign":"center"},"elements":{"link":{"color":{"text":"var:preset|color|white-50"}}}},"textColor":"white-50"} -->
					<p class="has-text-align-center is-style-eyebrow has-white-50-color has-text-color has-link-color"><?php echo esc_html__( 'A smarter approach', 'suede' ); ?><br><?php echo esc_html__( 'to real estate discovery', 'suede' ); ?></p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"className":"is-style-eyebrow","style":{"typography":{"textAlign":"center"},"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"spacing":{"margin":{"top":"var:preset|spacing|60"}}},"textColor":"accent"} -->
					<p class="has-text-align-center is-style-eyebrow has-accent-color has-text-color has-link-color" style="margin-top:var(--wp--preset--spacing--60)"><?php echo esc_html__( 'By: Brian Gardner', 'suede' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"center","width":"","layout":{"type":"default"}} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"className":"is-style-eyebrow","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}}},"textColor":"accent"} -->
				<p class="is-style-eyebrow has-accent-color has-text-color has-link-color"><?php echo esc_html__( '2026 Edition', 'suede' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"className":"is-style-balanced","fontSize":"xx-large"} -->
				<h2 class="wp-block-heading is-style-balanced has-xx-large-font-size"><?php echo esc_html__( 'Place Authority:', 'suede' ); ?><br><?php echo esc_html__( 'A smarter approach to', 'suede' ); ?><br><?php echo esc_html__( 'real estate discovery', 'suede' ); ?></h2>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"className":"is-style-balanced","style":{"elements":{"link":{"color":{"text":"var:preset|color|black-60"}}},"typography":{"lineHeight":"1.5"},"spacing":{"margin":{"top":"10px"}}},"textColor":"black-60","fontSize":"x-small"} -->
				<p class="is-style-balanced has-black-60-color has-text-color has-link-color has-x-small-font-size" style="margin-top:10px;line-height:1.5"><?php echo esc_html__( 'A framework for becoming the leading expert on the places you serve. At its core is a simple progression: Discovery → Trust → Influence.', 'suede' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:buttons -->
				<div class="wp-block-buttons">
					<!-- wp:button -->
					<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#"><?php echo esc_html__( 'Read the guide →', 'suede' ); ?></a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
