<?php
/**
 * Title: Pricing table with 3 columns
 * Slug: suede/pricing-3-columns
 * Categories: suede-component
 */
?>
<!-- wp:group {"metadata":{"name":"Pricing"},"align":"full","style":{"spacing":{"margin":{"top":"0"},"blockGap":"var:preset|spacing|60","padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
	<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:heading {"style":{"typography":{"textAlign":"center"}},"fontSize":"xxx-large"} -->
		<h2 class="wp-block-heading has-text-align-center has-xxx-large-font-size"><?php echo esc_html__( 'Three tiers.', 'suede' ); ?><br><?php echo esc_html__( 'Zero compromises.', 'suede' ); ?></h2>
		<!-- /wp:heading -->
		<!-- wp:group {"layout":{"type":"default"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"className":"is-style-balanced","style":{"typography":{"textAlign":"center"},"elements":{"link":{"color":{"text":"var:preset|color|black-60"}}}},"textColor":"black-60"} -->
			<p class="has-text-align-center is-style-balanced has-black-60-color has-text-color has-link-color"><?php echo esc_html__( 'Choose the investment that’s right for you.', 'suede' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"width":""} -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60"}},"border":{"width":"1px"}},"borderColor":"black","layout":{"type":"constrained"}} -->
			<div class="wp-block-group has-border-color has-black-border-color" style="border-width:1px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)">
				<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
					<p class="is-style-eyebrow"><?php echo esc_html__( 'Basic', 'suede' ); ?></p>
					<!-- /wp:paragraph -->
					<!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left","verticalAlignment":"bottom"}} -->
					<div class="wp-block-group">
						<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1","textAlign":"center"}},"fontSize":"x-large"} -->
						<p class="has-text-align-center has-x-large-font-size" style="line-height:1">$95</p>
						<!-- /wp:paragraph -->
						<!-- wp:paragraph {"fontSize":"x-small"} -->
						<p class="has-x-small-font-size">/ <?php echo esc_html__( 'year', 'suede' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
				<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}},"typography":{"lineHeight":"1.5"}},"fontSize":"x-small"} -->
				<p class="has-x-small-font-size" style="margin-top:var(--wp--preset--spacing--20);line-height:1.5"><?php echo esc_html__( 'An annual investment in a theme which builds authority and presence.', 'suede' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"default"}} -->
				<div class="wp-block-group">
					<!-- wp:group {"style":{"spacing":{"blockGap":"5px","padding":{"bottom":"10px"}},"typography":{"lineHeight":"1"},"border":{"bottom":{"color":"var:preset|color|black-10","width":"1px"},"top":{},"right":{},"left":{}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
					<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--black-10);border-bottom-width:1px;padding-bottom:10px;line-height:1">
						<!-- wp:icon {"icon":"core/check","align":"center","style":{"border":{"radius":{"topLeft":"0","topRight":"0","bottomLeft":"0","bottomRight":"0"}},"dimensions":{"width":"30px"},"elements":{"link":{"color":{"text":"var:preset|color|accent"}}}},"textColor":"accent","ariaLabel":"Check icon"} /-->
						<!-- wp:paragraph -->
						<p><?php echo esc_html__( 'Suede theme', 'suede' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
					<!-- wp:group {"style":{"spacing":{"blockGap":"5px","padding":{"bottom":"10px"}},"typography":{"lineHeight":"1"},"border":{"bottom":{"color":"var:preset|color|black-10","width":"1px"},"top":{},"right":{},"left":{}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
					<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--black-10);border-bottom-width:1px;padding-bottom:10px;line-height:1">
						<!-- wp:icon {"icon":"core/check","align":"center","style":{"border":{"radius":{"topLeft":"0","topRight":"0","bottomLeft":"0","bottomRight":"0"}},"dimensions":{"width":"30px"},"elements":{"link":{"color":{"text":"var:preset|color|accent"}}}},"textColor":"accent","ariaLabel":"Check icon"} /-->
						<!-- wp:paragraph -->
						<p><?php echo esc_html__( 'Annual updates', 'suede' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
					<!-- wp:group {"style":{"spacing":{"blockGap":"5px","padding":{"bottom":"10px"}},"typography":{"lineHeight":"1"},"border":{"bottom":{"color":"var:preset|color|black-10","width":"1px"},"top":{},"right":{},"left":{}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
					<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--black-10);border-bottom-width:1px;padding-bottom:10px;line-height:1">
						<!-- wp:icon {"icon":"core/check","align":"center","style":{"border":{"radius":{"topLeft":"0","topRight":"0","bottomLeft":"0","bottomRight":"0"}},"dimensions":{"width":"30px"},"elements":{"link":{"color":{"text":"var:preset|color|accent"}}}},"textColor":"accent","ariaLabel":"Check icon"} /-->
						<!-- wp:paragraph -->
						<p><?php echo esc_html__( 'Basic support', 'suede' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
					<!-- wp:group {"style":{"spacing":{"blockGap":"5px","padding":{"bottom":"10px"}},"typography":{"lineHeight":"1"},"border":{"bottom":{"color":"var:preset|color|black-10","width":"1px"},"top":{},"right":{},"left":{}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
					<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--black-10);border-bottom-width:1px;padding-bottom:10px;line-height:1">
						<!-- wp:icon {"icon":"core/check","align":"center","style":{"border":{"radius":{"topLeft":"0","topRight":"0","bottomLeft":"0","bottomRight":"0"}},"dimensions":{"width":"30px"},"elements":{"link":{"color":{"text":"var:preset|color|accent"}}}},"textColor":"accent","ariaLabel":"Check icon"} /-->
						<!-- wp:paragraph -->
						<p><?php echo esc_html__( 'Unlimited sites', 'suede' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
				<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
				<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40)">
					<!-- wp:button {"width":100} -->
					<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link wp-element-button" href="#"><?php echo esc_html__( 'Get Basic →', 'suede' ); ?></a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"width":""} -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60"}},"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"border":{"width":"1px"}},"backgroundColor":"black","textColor":"white","borderColor":"black","layout":{"type":"constrained"}} -->
			<div class="wp-block-group has-border-color has-black-border-color has-white-color has-black-background-color has-text-color has-background has-link-color" style="border-width:1px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)">
				<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
					<p class="is-style-eyebrow"><?php echo esc_html__( 'Lifetime', 'suede' ); ?></p>
					<!-- /wp:paragraph -->
					<!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left","verticalAlignment":"bottom"}} -->
					<div class="wp-block-group">
						<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1","textAlign":"center"}},"fontSize":"x-large"} -->
						<p class="has-text-align-center has-x-large-font-size" style="line-height:1">$295</p>
						<!-- /wp:paragraph -->
						<!-- wp:paragraph {"fontSize":"x-small"} -->
						<p class="has-x-small-font-size">/ <?php echo esc_html__( 'once', 'suede' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
				<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5"},"spacing":{"margin":{"top":"var:preset|spacing|20"}}},"fontSize":"x-small"} -->
				<p class="has-x-small-font-size" style="margin-top:var(--wp--preset--spacing--20);line-height:1.5"><?php echo esc_html__( 'A one-time investment in a theme which builds authority and presence.', 'suede' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"default"}} -->
				<div class="wp-block-group">
					<!-- wp:group {"style":{"spacing":{"blockGap":"5px","padding":{"bottom":"10px"}},"typography":{"lineHeight":"1"},"border":{"bottom":{"color":"var:preset|color|white-15","width":"1px"},"top":{},"right":{},"left":{}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
					<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--white-15);border-bottom-width:1px;padding-bottom:10px;line-height:1">
						<!-- wp:icon {"icon":"core/check","align":"center","style":{"border":{"radius":{"topLeft":"0","topRight":"0","bottomLeft":"0","bottomRight":"0"}},"dimensions":{"width":"30px"},"elements":{"link":{"color":{"text":"var:preset|color|accent"}}}},"textColor":"accent","ariaLabel":"Check icon"} /-->
						<!-- wp:paragraph -->
						<p><?php echo esc_html__( 'Suede theme', 'suede' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
					<!-- wp:group {"style":{"spacing":{"blockGap":"5px","padding":{"bottom":"10px"}},"typography":{"lineHeight":"1"},"border":{"bottom":{"color":"var:preset|color|white-15","width":"1px"},"top":{},"right":{},"left":{}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
					<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--white-15);border-bottom-width:1px;padding-bottom:10px;line-height:1">
						<!-- wp:icon {"icon":"core/check","align":"center","style":{"border":{"radius":{"topLeft":"0","topRight":"0","bottomLeft":"0","bottomRight":"0"}},"dimensions":{"width":"30px"},"elements":{"link":{"color":{"text":"var:preset|color|accent"}}}},"textColor":"accent","ariaLabel":"Check icon"} /-->
						<!-- wp:paragraph -->
						<p><?php echo esc_html__( 'Lifetime updates', 'suede' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
					<!-- wp:group {"style":{"spacing":{"blockGap":"5px","padding":{"bottom":"10px"}},"typography":{"lineHeight":"1"},"border":{"bottom":{"color":"var:preset|color|white-15","width":"1px"},"top":{},"right":{},"left":{}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
					<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--white-15);border-bottom-width:1px;padding-bottom:10px;line-height:1">
						<!-- wp:icon {"icon":"core/check","align":"center","style":{"border":{"radius":{"topLeft":"0","topRight":"0","bottomLeft":"0","bottomRight":"0"}},"dimensions":{"width":"30px"},"elements":{"link":{"color":{"text":"var:preset|color|accent"}}}},"textColor":"accent","ariaLabel":"Check icon"} /-->
						<!-- wp:paragraph -->
						<p><?php echo esc_html__( 'Premium support', 'suede' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
					<!-- wp:group {"style":{"spacing":{"blockGap":"5px","padding":{"bottom":"10px"}},"typography":{"lineHeight":"1"},"border":{"bottom":{"color":"var:preset|color|white-15","width":"1px"},"top":{},"right":{},"left":{}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
					<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--white-15);border-bottom-width:1px;padding-bottom:10px;line-height:1">
						<!-- wp:icon {"icon":"core/check","align":"center","style":{"border":{"radius":{"topLeft":"0","topRight":"0","bottomLeft":"0","bottomRight":"0"}},"dimensions":{"width":"30px"},"elements":{"link":{"color":{"text":"var:preset|color|accent"}}}},"textColor":"accent","ariaLabel":"Check icon"} /-->
						<!-- wp:paragraph -->
						<p><?php echo esc_html__( 'Unlimited sites', 'suede' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
				<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
				<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40)">
					<!-- wp:button {"style":{"dimensions":{"width":"100%"},":hover":{"color":{"text":"var:preset|color|white"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}}}} -->
					<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#"><?php echo esc_html__( 'Get Lifetime →', 'suede' ); ?></a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"width":""} -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60"}},"border":{"width":"1px"}},"borderColor":"black","layout":{"type":"constrained"}} -->
			<div class="wp-block-group has-border-color has-black-border-color" style="border-width:1px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)">
				<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
					<p class="is-style-eyebrow"><?php echo esc_html__( 'Premier', 'suede' ); ?></p>
					<!-- /wp:paragraph -->
					<!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left","verticalAlignment":"bottom"}} -->
					<div class="wp-block-group">
						<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1","textAlign":"center"}},"fontSize":"x-large"} -->
						<p class="has-text-align-center has-x-large-font-size" style="line-height:1">$195</p>
						<!-- /wp:paragraph -->
						<!-- wp:paragraph {"fontSize":"x-small"} -->
						<p class="has-x-small-font-size">/ <?php echo esc_html__( 'year', 'suede' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
				<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}},"typography":{"lineHeight":"1.5"}},"fontSize":"x-small"} -->
				<p class="has-x-small-font-size" style="margin-top:var(--wp--preset--spacing--20);line-height:1.5"><?php echo esc_html__( 'An annual investment in a theme which builds authority and presence.', 'suede' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"default"}} -->
				<div class="wp-block-group">
					<!-- wp:group {"style":{"spacing":{"blockGap":"5px","padding":{"bottom":"10px"}},"typography":{"lineHeight":"1"},"border":{"bottom":{"color":"var:preset|color|black-10","width":"1px"},"top":{},"right":{},"left":{}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
					<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--black-10);border-bottom-width:1px;padding-bottom:10px;line-height:1">
						<!-- wp:icon {"icon":"core/check","align":"center","style":{"border":{"radius":{"topLeft":"0","topRight":"0","bottomLeft":"0","bottomRight":"0"}},"dimensions":{"width":"30px"},"elements":{"link":{"color":{"text":"var:preset|color|accent"}}}},"textColor":"accent","ariaLabel":"Check icon"} /-->
						<!-- wp:paragraph -->
						<p><?php echo esc_html__( 'Suede theme', 'suede' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
					<!-- wp:group {"style":{"spacing":{"blockGap":"5px","padding":{"bottom":"10px"}},"typography":{"lineHeight":"1"},"border":{"bottom":{"color":"var:preset|color|black-10","width":"1px"},"top":{},"right":{},"left":{}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
					<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--black-10);border-bottom-width:1px;padding-bottom:10px;line-height:1">
						<!-- wp:icon {"icon":"core/check","align":"center","style":{"border":{"radius":{"topLeft":"0","topRight":"0","bottomLeft":"0","bottomRight":"0"}},"dimensions":{"width":"30px"},"elements":{"link":{"color":{"text":"var:preset|color|accent"}}}},"textColor":"accent","ariaLabel":"Check icon"} /-->
						<!-- wp:paragraph -->
						<p><?php echo esc_html__( 'Annual updates', 'suede' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
					<!-- wp:group {"style":{"spacing":{"blockGap":"5px","padding":{"bottom":"10px"}},"typography":{"lineHeight":"1"},"border":{"bottom":{"color":"var:preset|color|black-10","width":"1px"},"top":{},"right":{},"left":{}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
					<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--black-10);border-bottom-width:1px;padding-bottom:10px;line-height:1">
						<!-- wp:icon {"icon":"core/check","align":"center","style":{"border":{"radius":{"topLeft":"0","topRight":"0","bottomLeft":"0","bottomRight":"0"}},"dimensions":{"width":"30px"},"elements":{"link":{"color":{"text":"var:preset|color|accent"}}}},"textColor":"accent","ariaLabel":"Check icon"} /-->
						<!-- wp:paragraph -->
						<p><?php echo esc_html__( 'Premium support', 'suede' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
					<!-- wp:group {"style":{"spacing":{"blockGap":"5px","padding":{"bottom":"10px"}},"typography":{"lineHeight":"1"},"border":{"bottom":{"color":"var:preset|color|black-10","width":"1px"},"top":{},"right":{},"left":{}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
					<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--black-10);border-bottom-width:1px;padding-bottom:10px;line-height:1">
						<!-- wp:icon {"icon":"core/check","align":"center","style":{"border":{"radius":{"topLeft":"0","topRight":"0","bottomLeft":"0","bottomRight":"0"}},"dimensions":{"width":"30px"},"elements":{"link":{"color":{"text":"var:preset|color|accent"}}}},"textColor":"accent","ariaLabel":"Check icon"} /-->
						<!-- wp:paragraph -->
						<p><?php echo esc_html__( 'Unlimited sites', 'suede' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
				<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
				<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40)">
					<!-- wp:button {"width":100} -->
					<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link wp-element-button" href="#"><?php echo esc_html__( 'Get Premier →', 'suede' ); ?></a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
	<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500","textAlign":"center","lineHeight":"1.25"}},"fontSize":"x-large"} -->
		<p class="has-text-align-center has-x-large-font-size" style="font-style:normal;font-weight:500;line-height:1.25"><?php echo esc_html__( 'Buy with confidence.', 'suede' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:paragraph {"style":{"typography":{"textAlign":"center"}},"fontSize":"x-small"} -->
		<p class="has-text-align-center has-x-small-font-size"><?php echo esc_html__( '7-day money-back guarantee. If it’s not right, we’ll refund you.', 'suede' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
