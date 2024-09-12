<?php

/**
 * Title: Product Tile
 * Slug: apta/product-tile
 * Categories: products, cards
 * Description: A Small product tile
 */
?>

<!-- wp:group {"metadata":{"categories":["products","cards"],"patternName":"apta/product-tile","name":"Product Tile"},"className":"has-background has-base-background-color alignwide size-full is-style-rounded","style":{"spacing":{"padding":{"right":"var:preset|spacing|10","left":"var:preset|spacing|10","top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background has-base-background-color alignwide size-full is-style-rounded" style="padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--10)"><!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group"><!-- wp:image {"width":"48px","sizeSlug":"full","linkDestination":"none"} -->
        <figure class="wp-block-image size-full is-resized"><img src="http://apta.local/wp-content/uploads/2024/09/cropped-Logo-Dark.png" alt="" style="width:48px" /></figure>
        <!-- /wp:image -->

        <!-- wp:heading {"level":3} -->
        <h3 class="wp-block-heading">Product Heading</h3>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"fontSize":"small"} -->
        <p class="has-small-font-size">This is short description about the product.</p>
        <!-- /wp:paragraph -->

        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-2"}}}},"textColor":"accent-2","fontSize":"small"} -->
        <p class="has-accent-2-color has-text-color has-link-color has-small-font-size"><a href="http://apta.local/" data-type="page" data-id="8">Learn More</a></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->