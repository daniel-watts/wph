<title><?php

    $ww_titleSeporator = '-';
    wp_title($ww_titleSeporator, true, 'right');
    bloginfo('name');
    
    $ww_site_description = get_bloginfo('description', 'display');
    
    if ($ww_site_description != '' && (is_home() || is_front_page())) {
        echo ' ' . $ww_titleSeporator . ' ' . $ww_site_description;
    }
    
    if ($paged >= 2 || $page >= 2) {
        echo ' ' . $ww_titleSeporator . ' ' . sprintf(__('Page %s'), max($paged, $page));
    }

?></title>