<h1><?php

# Default value.
$ww_pageTitle = '';

if( is_404() ){
    $ww_pageTitle = '404 Page Not Found';
} elseif( is_search() ){
    if( get_search_query() == '' ){
        $ww_pageTitle = 'Search Results for Everything';
    } else {
        $ww_pageTitle = 'Search Results for: "' . get_search_query() . '"';
    }
} elseif( is_home() ){
    $ww_pageTitle = get_bloginfo( 'name' );
} elseif( is_single() || is_page() ){
    $ww_pageTitle = get_the_title();
} elseif( is_category() ){
    $ww_pageTitle = single_cat_title("", false);
} elseif( is_tag() ){
    $ww_pageTitle = single_tag_title("", false);
} elseif( is_day() ) {
    $ww_pageTitle = '<span>Daily Archive</span> ' . get_the_date();
} elseif( is_month() ){
    $ww_pageTitle = '<span>Monthly Archive</span> ' . get_the_date('F Y');
} elseif( is_year() ){
    $ww_pageTitle = '<span>Yearly Archive</span> ' . get_the_date('Y');
}

echo $ww_pageTitle;

?></h1>