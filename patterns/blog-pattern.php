<?php

/**
 * Title: Blog Pattern
 * Slug: apta/blog-pattern
 * Categories: Headers
 * Viewport width: 1400
 * Block Types: pixobe/header
 * Description: Category Post Header
 */
?>


<?php
$category = get_queried_object(); // Get current category
$child_categories = get_term_children($category->term_id, 'category');

if (!empty($child_categories)) {
    $child_category_ids = implode(',', $child_categories);
} else {
    $child_category_ids = '';
}

?>


<!-- wp:group {"layout":{"type":"constrained"} -->
<div class="wp-block-group">
    <!-- wp:query {"query":{"perPage":5,"pages":0,"offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false,"taxQuery":{"category":[<?php echo $child_category_ids; ?>]}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-query"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|50","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
        <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--10);padding-right:0;padding-bottom:var(--wp--preset--spacing--50);padding-left:0">
            <!-- wp:post-template {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default","columnCount":1}} -->
            <!-- wp:group {"style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
            <div class="wp-block-group">
                <!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"bottom":"0"}}},"fontSize":"medium"} /-->
            </div>
            <!-- /wp:group -->
            <!-- /wp:post-template -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:query -->

</div>
<!-- /wp:group -->