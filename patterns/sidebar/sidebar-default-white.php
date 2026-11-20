<?php
/**
 * Title: Sidebar with image, text
 * Slug: suede/sidebar-white
 * Categories: suede-sidebar
 * Block Types: core/template-part/sidebar
 * Template Types: sidebar
 */
?>
<!-- wp:group {"tagName":"aside","metadata":{"name":"Sidebar with image, text"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"white","fontSize":"x-small","layout":{"type":"default"}} -->
<aside class="wp-block-group has-white-background-color has-background has-x-small-font-size" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
	<!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|black-10","width":"1px"}},"spacing":{"padding":{"bottom":"var:preset|spacing|30"},"blockGap":"10px"}},"layout":{"type":"default"}} -->
	<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--black-10);border-bottom-width:1px;padding-bottom:var(--wp--preset--spacing--30)">
		<!-- wp:heading {"className":"is-style-eyebrow","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}}},"textColor":"accent","fontSize":"xxx-small"} -->
		<h2 class="wp-block-heading is-style-eyebrow has-accent-color has-text-color has-link-color has-xxx-small-font-size"><?php echo esc_html__( 'About Suede', 'suede' ); ?></h2>
		<!-- /wp:heading -->
		<!-- wp:image {"aspectRatio":"16/9","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}}} -->
		<figure class="wp-block-image size-full" style="margin-bottom:var(--wp--preset--spacing--20)"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/sample-image.svg'; ?>" alt="Sample image" style="aspect-ratio:16/9;object-fit:cover"/></figure>
		<!-- /wp:image -->
		<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"small"} -->
		<p class="has-small-font-size" style="font-style:normal;font-weight:500"><?php echo esc_html__( 'Designed for WordPress.', 'suede' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:paragraph {"className":"is-style-balanced","style":{"elements":{"link":{"color":{"text":"var:preset|color|black-60"}}},"typography":{"lineHeight":"1.5"}},"textColor":"black-60"} -->
		<p class="is-style-balanced has-black-60-color has-text-color has-link-color" style="line-height:1.5"><?php echo esc_html__( 'Rooted in simplicity and designed with precision, Suede delivers an unmistakable sense of style, authority, and presence.', 'suede' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"},":hover":{"color":{"text":"var:preset|color|accent"}}}}}} -->
		<p class="has-link-color"><a href="#"><?php echo esc_html__( 'Learn more about Suede →', 'suede' ); ?></a></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|black-10","width":"1px"}},"spacing":{"padding":{"bottom":"var:preset|spacing|30"},"blockGap":"10px"}},"layout":{"type":"default"}} -->
	<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--black-10);border-bottom-width:1px;padding-bottom:var(--wp--preset--spacing--30)">
		<!-- wp:heading {"className":"is-style-eyebrow","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}}},"textColor":"accent","fontSize":"xxx-small"} -->
		<h2 class="wp-block-heading is-style-eyebrow has-accent-color has-text-color has-link-color has-xxx-small-font-size"><?php echo esc_html__( 'Recent entries', 'suede' ); ?></h2>
		<!-- /wp:heading -->
		<!-- wp:query {"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[],"format":[],"excludeCurrent":null}} -->
		<div class="wp-block-query">
			<!-- wp:post-template {"style":{"spacing":{"blockGap":"0"}}} -->
				<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|20"},"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}}} -->
				<div class="wp-block-columns are-vertically-aligned-center" style="margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--20)">
					<!-- wp:column {"verticalAlignment":"center","width":"72px"} -->
					<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:72px">
						<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"1","style":{"color":{"duotone":"var:preset|duotone|black-and-white"}}} /-->
					</div>
					<!-- /wp:column -->
					<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"8px"}}} -->
					<div class="wp-block-column is-vertically-aligned-center">
						<!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|black"}}},"typography":{"lineHeight":"1.2"}},"fontSize":"x-small"} /-->
						<!-- wp:post-excerpt {"showMoreOnNewLine":false,"className":"is-style-truncate","style":{"elements":{"link":{"color":{"text":"var:preset|color|black-60"}}},"typography":{"lineHeight":"1.2"}},"textColor":"black-60","fontSize":"xx-small"} /-->
					</div>
					<!-- /wp:column -->
				</div>
				<!-- /wp:columns -->
			<!-- /wp:post-template -->
		</div>
		<!-- /wp:query -->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|black-10","width":"1px"}},"spacing":{"padding":{"bottom":"var:preset|spacing|30"},"blockGap":"10px"}},"layout":{"type":"default"}} -->
	<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--black-10);border-bottom-width:1px;padding-bottom:var(--wp--preset--spacing--30)">
		<!-- wp:heading {"className":"is-style-eyebrow","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}}},"textColor":"accent","fontSize":"xxx-small"} -->
		<h2 class="wp-block-heading is-style-eyebrow has-accent-color has-text-color has-link-color has-xxx-small-font-size"><?php echo esc_html__( 'Featured essays', 'suede' ); ?></h2>
		<!-- /wp:heading -->
		<!-- wp:list {"className":"is-style-chevron"} -->
		<ul class="wp-block-list is-style-chevron">
			<!-- wp:list-item -->
			<li><a href="#" class="no-underline"><?php echo esc_html__( 'Style with Purpose', 'suede' ); ?></a></li>
			<!-- /wp:list-item -->
			<!-- wp:list-item -->
			<li><a href="#" class="no-underline"><?php echo esc_html__( 'Authority by Design', 'suede' ); ?></a></li>
			<!-- /wp:list-item -->
			<!-- wp:list-item -->
			<li><a href="#" class="no-underline"><?php echo esc_html__( 'The Power of Presence', 'suede' ); ?></a></li>
			<!-- /wp:list-item -->
		</ul>
		<!-- /wp:list -->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|black-10","width":"1px"}},"spacing":{"padding":{"bottom":"var:preset|spacing|30"},"blockGap":"10px"}},"layout":{"type":"default"}} -->
	<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--black-10);border-bottom-width:1px;padding-bottom:var(--wp--preset--spacing--30)">
		<!-- wp:heading {"className":"is-style-eyebrow","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}}},"textColor":"accent","fontSize":"xxx-small"} -->
		<h2 class="wp-block-heading is-style-eyebrow has-accent-color has-text-color has-link-color has-xxx-small-font-size"><?php echo esc_html__( 'Let’s connect', 'suede' ); ?></h2>
		<!-- /wp:heading -->
		<!-- wp:social-links {"iconColor":"black","iconColorValue":"#000000","iconBackgroundColor":"black-10","iconBackgroundColorValue":"#0000001a","openInNewTab":true,"size":"has-normal-icon-size","className":"is-style-square","style":{"spacing":{"blockGap":{"left":"5px"}}}} -->
		<ul class="wp-block-social-links has-normal-icon-size has-icon-color has-icon-background-color is-style-square">
			<!-- wp:social-link {"url":"https://www.linkedin.com/","service":"linkedin"} /-->
			<!-- wp:social-link {"url":"https://x.com/","service":"x"} /-->
			<!-- wp:social-link {"url":"https://www.youtube.com/","service":"youtube"} /-->
			<!-- wp:social-link {"url":"https://instagram.com/","service":"instagram"} /-->
			<!-- wp:social-link {"url":"https://www.facebook.com/","service":"facebook"} /-->
		</ul>
		<!-- /wp:social-links -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
