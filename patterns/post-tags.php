<?php

/**
 * Title: Post Tags
 * Slug: apta/post-tags
 * Categories: Headers
 * Viewport width: 1400
 * Description: Single post content
 */
?>


<!-- wp:group {"layout":{"type":"flex"}} -->
<div class="wp-block-group">
    <?php
    $tags = wp_get_post_tags(get_the_ID());
    $tag_ids = array();
    foreach ($tags as $key => $tag) {
    ?>
        <!-- wp:group {"layout":{"type":"flex"}, "style":{"spacing":{"padding":var(--wp--preset--spacing--5)}}, "className":"is-tag-list"} -->
        <div class="wp-block-group  has-background is-tag-list has-small-font-size"
            style="padding-top: var(--wp--preset--spacing--2); padding-bottom: var(--wp--preset--spacing--2); padding-left: var(--wp--preset--spacing--10); padding-right: var(--wp--preset--spacing--10);border-radius:24px;background:var(--wp--preset--color--tag-<?php echo $key + 1; ?>);">
            <a href="<?php esc_attr_e(get_tag_link($tag->term_id)); ?>"><?php esc_html_e($tag->name); ?></a>
        </div>
        <!-- /wp:group -->
    <?php } ?>

</div>
<!-- /wp:group -->