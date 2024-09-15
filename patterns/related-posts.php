<?php

/**
 * Title: Related Posts
 * Slug: apta/related-posts
 * Categories: Posts
 * Viewport width: 1400
 * Description: Related posts
 */
?>

<?php
$tags = wp_get_post_tags(get_the_ID());
$tag_ids = array();
foreach ($tags as $tag) {
    $tag_ids[] = $tag->term_id;
}
$tag_ids_csv = implode(',', $tag_ids);
?>

<!-- wp:group {"layout":{"type":"constrained"} -->
<div class="wp-block-group">
    <!-- wp:heading {"level":2,"fontSize":"large","style":{"typography":{"textDecoration":"underline"}}} -->
    <h2 class="wp-block-heading has-large-font-size underline">
        <?php esc_html_e("Related Posts", "pixobe-apta"); ?>
    </h2>
    <!-- /wp:heading -->

    <!-- wp:query {"query":{"perPage":5,"pages":0,"offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false,"taxQuery":{"post_tag":[<?php echo $tag_ids_csv; ?>],"category":[]}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-query"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|50","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
        <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--10);padding-right:0;padding-bottom:var(--wp--preset--spacing--50);padding-left:0"><!-- wp:post-template {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default","columnCount":1}} -->
            <!-- wp:group {"style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
            <div class="wp-block-group"><!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"bottom":"0"}}},"fontSize":"medium"} /--></div>
            <!-- /wp:group -->
            <!-- /wp:post-template -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:query -->

</div>
<!-- /wp:group -->