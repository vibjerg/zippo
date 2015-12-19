<?php

function get_category_name(){
    switch (ICL_LANGUAGE_CODE){
        case 'en':
            return 'news';
            break;
        case 'de':
            return 'nachrichten';
            break;
        default :
            return 'nyhed';
            break;
    }
}
function get_all_posts_link(){
    $name = get_category_name();

    return "<p style='font-weight: bold; text-transform: uppercase;'><i class='icon-play'></i> <a class='load-news' data-first='11' data-cat='$name' href='category/$name/'>".__("Læs alle nyheder her")."</a></p>";
}

function get_recent_posts($numberpost = 10, $offset = 0)
{
    $args = array(
        'post_type' => 'post',
        'numberpost' => $numberpost,
        'posts_per_page'  => $numberpost,
        'offset'  => $offset,
        'order_post' => 'DESC',
        'post_status' => 'publish',
        'category_name' => get_category_name(),
    );

    return get_posts( $args );
}