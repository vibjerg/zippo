<?php

function languages_list_footer()
{
    $languages = icl_get_languages('skip_missing=0&orderby=code');
    if (!empty($languages)) {
        echo '<ul>';
        foreach ($languages as $l) {
            if (!$l['active']) {
                echo '<li>';
                if ($l['country_flag_url']) {
                    if (!$l['active']) {
                        echo '<a href="' . $l['url'] . '">';
                    }
                    echo '<img src="' . $l['country_flag_url'] . '" height="12" alt="' . $l['language_code'] . '" width="18" />';
                    if (!$l['active']) {
                        echo '</a>';
                    }
                }
                if (!$l['active']) {
                    echo '<a href="' . $l['url'] . '">';
                }
                //echo icl_disp_language($l['native_name'], '');
                if (!$l['active']) {
                    echo '</a>';
                }
                echo '</li>';
            }
        }
        echo '</ul>';
    }
}