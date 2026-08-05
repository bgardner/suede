<?php
/**
 * Title: Section with image, buttons, social icons
 * Slug: suede/content-links
 * Categories: suede-component
 */
?>
<!-- wp:group {"metadata":{"name":"Links"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}},"dimensions":{"minHeight":"100vh"},"border":{"width":"1px"}},"backgroundColor":"white","borderColor":"black-10","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group alignfull has-border-color has-black-10-border-color has-white-background-color has-background" style="border-width:1px;min-height:100vh;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
	<!-- wp:group {"style":{"spacing":{"padding":{"right":"30px","left":"30px"}}},"layout":{"type":"constrained","wideSize":"600px"}} -->
	<div class="wp-block-group" style="padding-right:30px;padding-left:30px">
		<!-- wp:image {"align":"center","width":100,"height":100,"scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
		<figure class="wp-block-image aligncenter size-full is-resized is-style-rounded"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/sample-avatar.svg'; ?>" alt="Sample avatar" style="object-fit:cover;width:100px;height:100px" width="100" height="100"/></figure>
		<!-- /wp:image -->
		<!-- wp:group {"style":{"spacing":{"blockGap":"5px","margin":{"top":"var:preset|spacing|20"}}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--20)">
			<!-- wp:heading {"textAlign":"center","level":1,"className":"wp-block-heading","fontSize":"large"} -->
			<h1 class="wp-block-heading has-text-align-center has-large-font-size"><?php echo esc_html__( 'Your Name', 'suede' ); ?></h1>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"typography":{"textAlign":"center"},"elements":{"link":{"color":{"text":"var:preset|color|black-60"}}}},"textColor":"black-60"} -->
			<p class="has-text-align-center has-black-60-color has-text-color has-link-color"><?php echo esc_html__( 'A little something about yourself.', 'suede' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"}} -->
		<div class="wp-block-buttons">
			<!-- wp:button {"width":100} -->
			<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link wp-element-button" href="#"><?php echo esc_html__( 'Visit My Website', 'suede' ); ?></a></div>
			<!-- /wp:button -->
			<!-- wp:button {"width":100} -->
			<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link wp-element-button" href="#"><?php echo esc_html__( 'Shop My Store', 'suede' ); ?></a></div>
			<!-- /wp:button -->
			<!-- wp:button {"width":100} -->
			<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link wp-element-button" href="#"><?php echo esc_html__( 'View My Services', 'suede' ); ?></a></div>
			<!-- /wp:button -->
			<!-- wp:button {"width":100} -->
			<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link wp-element-button" href="#"><?php echo esc_html__( 'Read My Journal', 'suede' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
		<!-- wp:social-links {"openInNewTab":true,"size":"has-small-icon-size","align":"center","className":"is-style-outline","layout":{"type":"flex","justifyContent":"center"}} -->
		<ul class="wp-block-social-links aligncenter has-small-icon-size is-style-outline">
			<!-- wp:social-link {"url":"https://www.linkedin.com/","service":"linkedin"} /-->
			<!-- wp:social-link {"url":"https://x.com/","service":"x"} /-->
			<!-- wp:social-link {"url":"https://www.youtube.com/","service":"youtube"} /-->
			<!-- wp:social-link {"url":"https://instagram.com/","service":"instagram"} /-->
			<!-- wp:social-link {"url":"https://www.facebook.com/","service":"facebook"} /-->
		</ul>
		<!-- /wp:social-links -->
		<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}},"fontSize":"x-small"} -->
		<p class="has-text-align-center has-x-small-font-size" style="margin-top:var(--wp--preset--spacing--60)"><a href="https://briangardner.com/suede/"><?php echo esc_html__( 'Designed with Suede', 'suede' ); ?></a></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
