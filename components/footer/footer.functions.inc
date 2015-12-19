<?php
add_action('widgets_init', 'zippo_register_footer_sidebar');

function zippo_register_footer_sidebar() {
    register_sidebar(array(
        'id' => 'footer',
        'name' => 'Main Footer',
        'before_widget' => '<div id="%1$s" class="widget columns %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
    ));
}

function zippo_footer() {
    include 'footer.template.inc';
}