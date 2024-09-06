<?php

function print_post_meta_shortcode($atts)
{
    $atts = shortcode_atts(
        array(
            'meta_key' => '',
        ),
        $atts
    );
    $post_id = get_the_ID();

    if ($atts['meta_key'] && $post_id) {
        $meta_value = get_post_meta($post_id, $atts['meta_key'], true);

        if (!empty($meta_value)) {
            return esc_html($meta_value);
        } else {
            return 'Meta key not found or empty for this post.';
        }
    } else {
        return 'Please provide a valid meta key.';
    }
}

// Register the shortcode [print_meta meta_key="your_meta_key"]
add_shortcode('print_meta', 'print_post_meta_shortcode');
