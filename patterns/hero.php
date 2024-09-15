<?php

/**
 * Title: Hero
 * Slug: apta/hero
 * Categories: banner, call-to-action, featured
 * Viewport width: 1400
 * Description: A hero section with a title, a paragraph, a CTA button, and an image.
 */
?>
<!-- wp:group {"metadata":{"categories":["Heros"],"patternName":"apta/hero","name":"Hero"},"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-2-background-color has-background">
	<!-- wp:group -->
	<div class="wp-block-group">

		<!-- wp:spacer {"height":"50px"} -->
		<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->

		<!-- wp:site-tagline {"tagName":"main","level":1,"textAlign":"center", "fontFamily":"heading","fontSize":"x-large","style":{"typography":{"fontStyle":"normal","fontWeight":"400"}}} /-->

		<!-- wp:spacer {"height":"25px"} -->
		<div style="height:25px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->

		<!-- wp:heading {"level":2,"textAlign":"center","fontSize":"large" ,"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}}} -->
		<h2 class="wp-block-heading has-text-align-center has-large-font-size" style="font-style:normal;font-weight:400;line-height:1.2">
			<?php echo esc_html(get_post_meta(get_the_ID(), "tagline", true)); ?>
		</h2>
		<!-- /wp:heading -->

		<!-- wp:spacer {"height":"25px"} -->
		<div style="height:25px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->

		<!-- wp:group {"layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-group">
			<!-- wp:site-logo {"width":240 } /-->
		</div>
		<!-- /wp:group -->

		<!-- wp:spacer {"height":"25px"} -->
		<div style="height:25px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->

		<!-- wp:group {"layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-group">
			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button -->
				<div class="wp-block-button">
					<a class="wp-block-button__link wp-element-button">
						Explore
					</a>
				</div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->


	</div>
	<!-- /wp:group -->

	<!-- wp:spacer {"height":"100px","style":{"layout":[]}} -->
	<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
</div>
<!-- /wp:group -->