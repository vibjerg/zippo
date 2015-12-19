<?php
add_action('init', 'sparta_theme_run_pages');

function sparta_theme_run_pages() {

    $name = "Run Page";
    $app_name = "run_page";
    $labels = array(
        'name' => _x($name, 'post type general name'),
        'singular_name' => _x($name, 'post type singular name'),
        'edit_item' => __('Edit ' . $name),
        'all_items' => __('All ' . $name . "s"),
        'view_item' => __('View ' . $name . 's'),
        'search_items' => __('Search ' . $name . 's'),
        'not_found' => __('No ' . $name . 's found'),
        'not_found_in_trash' => __('No ' . $name . 's found in Trash'),
        'parent_item_colon' => '',
        'menu_name' => $name
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array('slug' => $app_name),
        'capability_type' => 'page',
        'has_archive' => true,
        'hierarchical' => true,
        'menu_position' => 20,
        'supports' => array('title', 'thumbnail'),
        //'taxonomies' => array('category', 'post_tag'), // this is IMPORTANT
    );

    register_post_type($app_name, $args);
}
