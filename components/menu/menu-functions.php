<?php
/**
 * @file
 * http://foundation.zurb.com/forum/posts/19838-creating-dropdown-menu-with-wordpress
 */

/**
 * Embassy_Walker_Nav_Menu class.
 *
 * @extends Walker_Nav_Menu
 */
class Zippo_Walker_Nav_Menu extends Walker_Nav_Menu {

    function start_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul class=\"dropdown\">\n";
    }
}

add_filter( 'wp_nav_menu_objects', 'zippo_menu_parent_class' );

/**
 * embassy_menu_parent_class function.
 *
 * @access public
 * @param mixed $items
 * @return void
 */
function zippo_menu_parent_class( $items ) {

    $parents = array();
    foreach ( $items as $item ) {
        if ( $item->menu_item_parent && $item->menu_item_parent > 0 ) {
            $parents[] = $item->menu_item_parent;
        }
    }

    foreach ( $items as $item ) {
        if ( in_array( $item->ID, $parents ) ) {
            $item->classes[] = 'has-dropdown';
        }
    }

    return $items;
}


function zippo_menu() {
    wp_nav_menu( array( 'theme_location' => 'main_nav', 'menu_class' => 'nav-menu left', 'container' => '', 'walker' => new Zippo_Walker_Nav_Menu ) );
}