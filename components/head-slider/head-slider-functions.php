<?php
function zippo_header_slider($config = array())
{
    $defaults = array(
        'show_tabs' => true,
        'show_text_overlay' => true
    );
    $config = array_merge($defaults, $config);
    include 'head-slider.inc';
}

function zippo_shorten_text($text, $chars = 25)
{
    if (strlen($text) <= $chars) {
        return $text;
    }

    $text = $text . " ";
    $text = substr($text, 0, $chars);
    $text = substr($text, 0, strrpos($text, ' '));

    $text = $text . "...";
    return $text;
}

function zippo_thumbnail_url($post_id = null, $size = 'post-thumbnail', $attr = '')
{
    $url = array();
    $post_id = (null === $post_id) ? get_the_ID() : $post_id;
    $post_thumbnail_id = get_post_thumbnail_id($post_id);

    /**
     * Filter the post thumbnail size.
     *
     * @since 2.9.0
     *
     * @param string $size The post thumbnail size.
     */
    $size = apply_filters('post_thumbnail_size', $size);

    if ($post_thumbnail_id) {

        /**
         * Fires before fetching the post thumbnail HTML.
         *
         * Provides "just in time" filtering of all filters in wp_get_attachment_image().
         *
         * @since 2.9.0
         *
         * @param string $post_id The post ID.
         * @param string $post_thumbnail_id The post thumbnail ID.
         * @param string $size The post thumbnail size.
         */
        do_action('begin_fetch_post_thumbnail_html', $post_id, $post_thumbnail_id, $size);
        if (in_the_loop())
            update_post_thumbnail_cache();
        $url = wp_get_attachment_image_src($post_thumbnail_id, $size, false, $attr);

    }

    return reset($url);
}
