<?php
include_once realpath( dirname(__FILE__) . '/../menu/menu-functions.php');

function zippo_header() {
    include 'header.inc';
}


/**
 * WIDGETS
 */
add_action('widgets_init', 'zippo_header_sidebars');

function zippo_header_sidebars()
{


}
