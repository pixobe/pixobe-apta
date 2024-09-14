<?php

/**
 * Title: Product Card Light
 * Slug: apta/product-card-light
 * Categories: products, cards
 * Description: A Header, tag line and image that blends
 */
?>

<!-- wp:group {"className":"has-background has-base-2-background-color has-text-color has-contrast-color","style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
<div class="wp-block-group has-background has-base-2-background-color has-text-color has-contrast-2-color"><!-- wp:spacer {"height":"50px"} -->
    <div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->

    <!-- wp:group {"layout":{"type":"flex","justifyContent":"center"}} -->
    <div class="wp-block-group">
        <!-- wp:heading {"className":"has-text-color has-contrast-color"} -->
        <h2 class="wp-block-heading has-text-color has-contrast-color">
            Product Title Here
        </h2>
        <!-- /wp:heading -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"layout":{"type":"flex","justifyContent":"center"}} -->
    <div class="wp-block-group">
        <!-- wp:heading {"level":3,"className":" has-text-color has-contrast-color","textColor":"contrast","fontSize":"large"} -->
        <h3 class="wp-block-heading has-text-color has-contrast-color has-large-font-size">
            Product Tag Line
        </h3>
        <!-- /wp:heading -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"layout":{"type":"flex","justifyContent":"center"}} -->
    <div class="wp-block-group"><!-- wp:buttons -->
        <div class="wp-block-buttons"><!-- wp:button -->
            <div class="wp-block-button"><a class="wp-block-button__link wp-element-button">
                    Explore
                </a></div>
            <!-- /wp:button -->

            <!-- wp:button {"className":"is-style-outline"} -->
            <div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">
                    Explore
                </a></div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"layout":{"type":"flex","justifyContent":"center"}} -->
    <div class="wp-block-group"><!-- wp:image {"linkDestination":"none"} -->
        <figure class="wp-block-image"><img src="https://res.cloudinary.com/dy18h1ouc/image/upload/v1726134552/sample_goacj9_c_pad_w_360_h_360_rs0k24.webp" alt="" /></figure>
        <!-- /wp:image -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->