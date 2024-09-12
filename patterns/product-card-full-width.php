<?php

/**
 * Title: Product Full
 * Slug: apta/product-full
 * Categories: products, cards
 * Description:  A wide product display
 */
?>

<!-- wp:group {"metadata":{"categories":["products","cards"],"patternName":"apta/product-full","name":"Product Full"},"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"backgroundColor":"contrast","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-contrast-background-color has-background"><!-- wp:spacer -->
    <div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->

    <!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}}},"textColor":"base-2","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
    <div class="wp-block-group has-base-2-color has-text-color has-link-color"><!-- wp:site-logo {"width":32} /-->

        <!-- wp:site-title {"level":2,"textAlign":"center","fontSize":"x-large"} /-->
    </div>
    <!-- /wp:group -->

    <!-- wp:heading {"textAlign":"center","level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-3"}}}},"textColor":"accent-3"} -->
    <h3 class="wp-block-heading has-text-align-center has-accent-3-color has-text-color has-link-color">Product Name</h3>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}}},"textColor":"base-2"} -->
    <p class="has-text-align-center has-base-2-color has-text-color has-link-color">Write about the product promotion </p>
    <!-- /wp:paragraph -->

    <!-- wp:image {"sizeSlug":"large","align":"center"} -->
    <figure class="wp-block-image aligncenter size-large"><img src="https://res.cloudinary.com/dy18h1ouc/image/upload/v1726134552/sample_goacj9_c_pad_w_360_h_360_rs0k24.webp" alt="" /></figure>
    <!-- /wp:image -->

    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
        <div class="wp-block-buttons"><!-- wp:button -->
            <div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Find out more</a></div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
    </div>
    <!-- /wp:group -->

    <!-- wp:spacer {"height":"50px"} -->
    <div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
</div>
<!-- /wp:group -->