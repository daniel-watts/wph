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
if     (is_front_page() && is_home())   { get_template_part('html_docs/page'); }
elseif (is_front_page())                { get_template_part('html_docs/page'); }
elseif (is_home())                      { get_template_part('html_docs/page'); }
elseif (is_single())                    { get_template_part('html_docs/page'); }
elseif (is_page())                      { get_template_part('html_docs/page'); }
elseif (is_search())                    { get_template_part('html_docs/page'); }
else                                    { get_template_part('html_docs/page_404'); }