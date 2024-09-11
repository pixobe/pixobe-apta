<?php

/**
 * Title: Page Header
 * Slug: apta/page-header
 * Categories: banner
 * Viewport width: 1400
 * Description: Single Page Header
 */

?>

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:spacer {"height":"50px"} -->
    <div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->

    <!-- wp:post-title {"textAlign":"center","level":1} /-->

    <!-- wp:heading {"textAlign":"center","level":"2","style":{"typography":{"fontFamily":"body"}}} -->
    <h2 class="wp-block-heading has-body-font-family has-medium-font-size has-text-align-center">
        <?php echo esc_html(get_post_meta(get_the_ID(), "tagline", true)); ?>
    </h2>
    <!-- /wp:heading -->

    <!-- wp:spacer {"height":"50px"} -->
    <div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
</div>
<!-- /wp:group -->