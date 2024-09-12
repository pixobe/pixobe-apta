<?php

/**
 * Title: Product Grid
 * Slug: apta/product-grid
 * Categories: products, cards
 * Description: Grid of product
 * Viewport width: 1400
 */
?>


<!-- wp:group {"align":"full","layout":{"type":"default","contentSize":"","wideSize":""}} -->
<div class="wp-block-group alignfull">
    <!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0","left":"0"}}}} -->
    <div class="wp-block-columns alignwide">
        <!-- wp:column {"width":"50%"} -->
        <div class="wp-block-column" style="flex-basis:50%">
            <!-- wp:pattern {"slug":"apta/product-card"} /-->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"50%"} -->
        <div class="wp-block-column" style="flex-basis:50%">
            <!-- wp:pattern {"slug":"apta/product-card"} /-->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->