<?php

/**
 * Title: Hero
 * Slug: apta/banner-hero
 * Categories: banner, call-to-action, featured
 * Viewport width: 1400
 * Description: A hero section with a title, a paragraph, a CTA button, and an image.
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"","wideSize":""}} -->
<div
	class="wp-block-group alignfull has-base-background-color has-background"
	style="
    padding-top: var(--wp--preset--spacing--50);
    padding-right: var(--wp--preset--spacing--50);
    padding-bottom: var(--wp--preset--spacing--50);
    padding-left: var(--wp--preset--spacing--50);
  ">
	<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"constrained","contentSize":"565px"}} -->
	<div class="wp-block-group">
		<!-- wp:heading {"textAlign":"center","level":1,"fontSize":"x-large"} -->
		<h1 class="wp-block-heading has-text-align-center has-x-large-font-size">
			<!-- wp:site-title /-->
		</h1>
		<!-- /wp:heading -->

		<!-- wp:spacer {"height":"1.25rem"} -->
		<div
			style="height: 1.25rem"
			aria-hidden="true"
			class="wp-block-spacer"></div>
		<!-- /wp:spacer -->

		<!-- wp:paragraph {"align":"center"} -->
		<p class="has-text-align-center">
			<!-- wp:site-tagline /-->
		</p>
		<!-- /wp:paragraph -->

		<!-- wp:spacer {"height":"1.25rem"} -->
		<div
			style="height: 1.25rem"
			aria-hidden="true"
			class="wp-block-spacer"></div>
		<!-- /wp:spacer -->

		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-buttons">
			<!-- wp:button -->
			<div class="wp-block-button">
				<a class="wp-block-button__link wp-element-button">Explore</a>
			</div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->

	<!-- wp:spacer {"height":"var:preset|spacing|30","style":{"layout":[]}} -->
	<div
		style="height: var(--wp--preset--spacing--30)"
		aria-hidden="true"
		class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
</div>
<!-- /wp:group -->