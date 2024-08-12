<?php

/**
 * All WPH requests start here.
 * All theme page handling is done in `html_docs/page.php` file.
 * 
 * Requests either go to the `html_docs/page.php` file or the
 * `html_docs/page_404.php` file. This is done to control access to everything.
 * By default all routes are 404 pages unless they are specifically defined here.
 *
 * NOTE: When you use is_home() and is_front_page(), you have to use them in the
 * right order to avoid bugs and to catch all user configurations.
 *
 * `is_front_page()`
 * Returns `true` if the request is for the front page of the site, whatever the
 * content may be. If it’s a static home page, or a list of blog posts, or
 * something else this will return `true`. Any other page and it will return
 * `false`.
 *
 * `is_home()`
 * Returns `true` if the request is for the default WordPress homepage, it shows
 * the reverse chronological list of blog posts.
 */

/**
 * Columns Layout
 */

// Set the defualt layout type if it has not aleady been set.
if (!isset($GLOBALS['wph_layout_template_type'])) {
	$GLOBALS['wph_layout_template_type'] = 'single-column-layout';
}

// Set the initial layout template CSS.
$GLOBALS['wph_layout_template_css'] = $GLOBALS['wph_layout_template_type'];

// Check for the table of contents option (only for pages and posts).
// If it exists, set the proper CSS.
if (is_single() || is_page()) {
	$usetoc = get_post_meta($post->ID, 'use_toc', true );
	if ($usetoc == 'yes') {
		if ($GLOBALS['wph_layout_template_type'] == 'single-column-layout') {
			$GLOBALS['wph_layout_template_css'] = 'two-column-layout';
		}
	}
}

if     (is_front_page() && is_home())   { get_template_part('html_docs/page'); }
elseif (is_front_page())                { get_template_part('html_docs/page'); }
elseif (is_home())                      { get_template_part('html_docs/page'); }
elseif (is_single())                    { get_template_part('html_docs/page'); }
elseif (is_page())                      { get_template_part('html_docs/page'); }
elseif (is_search())                    { get_template_part('html_docs/page'); }
else                                    { get_template_part('html_docs/page_404'); }
