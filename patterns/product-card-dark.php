<?php

/**
 * Title: Product Card
 * Slug: apta/product-card-dark
 * Categories: products, cards
 * Description: A Header, tag line and image that blends
 */
?>

<!-- wp:group {"className":"has-background has-contrast-background-color has-text-color has-base-color is-product-card-dark","style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
<div class="wp-block-group is-product-card-dark has-background has-contrast-background-color has-text-color has-base-color "><!-- wp:spacer {"height":"50px"} -->
    <div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->

    <!-- wp:group {"layout":{"type":"flex","justifyContent":"center"}} -->
    <div class="wp-block-group">
        <!-- wp:heading {"className":"has-text-color has-base-color"} -->
        <h2 class="wp-block-heading has-text-color has-base-color">
            Product Title
        </h2>
        <!-- /wp:heading -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"layout":{"type":"flex","justifyContent":"center"}} -->
    <div class="wp-block-group">
        <!-- wp:heading {"level":3,"className":"has-base-color","textColor":"base-2","fontSize":"large"} -->
        <h3 class="wp-block-heading has-base-color has-base-2-color has-text-color has-large-font-size">
            Product Tag Line
        </h3>
        <!-- /wp:heading -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"layout":{"type":"flex","justifyContent":"center"}} -->
    <div class="wp-block-group"><!-- wp:buttons -->
        <div class="wp-block-buttons">
            <!-- wp:button -->
            <div class="wp-block-button">
                <a class="wp-block-button__link wp-element-button">
                    Explore
                </a>
            </div>
            <!-- /wp:button -->

            <!-- wp:button {"className":"is-style-outline"} -->
            <div class="wp-block-button is-style-outline">
                <a class="wp-block-button__link wp-element-button">
                    Explore
                </a>
            </div>
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