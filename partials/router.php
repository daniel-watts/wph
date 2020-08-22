<?php

/**
 * Route the request to it's template file
 *
 * WP is not provided any other template files so all requests go here.
 * This is done to control access to everything. Any route we want to block
 * simply becomes a 404 if it is not specifically defined here.
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
                                          get_template_part('wph/wph_view_vars');
    if (is_front_page() && is_home())   { get_template_part('wph/partials/page'); }
elseif (is_front_page())                { get_template_part('wph/partials/page'); }
elseif (is_home())                      { get_template_part('wph/partials/page'); }
elseif (is_single())                    { get_template_part('wph/partials/page'); }
elseif (is_page())                      { get_template_part('wph/partials/page'); }
elseif (is_search())                    { get_template_part('wph/partials/page'); }
  else                                  { get_template_part('wph/partials/page_404'); } // By default everything is a 404 page.
