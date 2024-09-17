<?php

/**
 * Title: Product Tile
 * Slug: apta/product-tile
 * Categories: products, cards
 * Description: A Small product tile
 * Block Types: pixobe/header
 */
?>

<!-- wp:group {"metadata":{"categories":["products","cards"],"patternName":"apta/product-tile","name":"Product Tile"},"className":"is-rounded has-shadow","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"backgroundColor":"base"} -->
<div class="wp-block-group is-rounded has-shadow has-base-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:image {"width":"48px","height":"auto","sizeSlug":"full","linkDestination":"none"} -->
    <figure class="wp-block-image size-full is-resized"><img src="" alt="" style="width:48px;height:auto" /></figure>
    <!-- /wp:image -->

    <!-- wp:heading {"level":3} -->
    <h3 class="wp-block-heading">Product Heading</h3>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"className":"has-small-font-size","fontSize":"medium"} -->
    <p class="has-small-font-size has-medium-font-size">This is short description about the product.</p>
    <!-- /wp:paragraph -->

    <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-2"}}}},"textColor":"accent-2","fontSize":"small"} -->
    <p class="has-accent-2-color has-text-color has-link-color has-small-font-size"><a href="/" data-type="page" data-id="8">Learn More</a></p>
    <!-- /wp:paragraph -->
</div>
<!-- /wp:group -->