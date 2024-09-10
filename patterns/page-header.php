<?php

/**
 * Title: Page Header
 * Slug: apta/page-header
 * Categories: headers
 * Viewport width: 1400
 * Description: Single Page Header
 */

?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}}} -->
<div
    class="wp-block-group"
    style="
        padding-top: var(--wp--preset--spacing--50);
        padding-right: var(--wp--preset--spacing--50);
        padding-bottom: var(--wp--preset--spacing--50);
        padding-left: var(--wp--preset--spacing--50);
      ">
    <!-- wp:post-title {"textAlign":"center","level":1} /-->
    <?php
    $post_id = get_the_ID();
    $meta_value = get_post_meta($post_id, $atts['meta_key'], true);

    if (!empty($meta_value)) {
        echo esc_html($meta_value);
    }

    ?>
</div>
<!-- /wp:group -->