# wph
A _WordPress Helper_ for common tasks.

## Installation

### Upload Files

Upload the `wph` directory and all its content to a WordPress theme:
Example path: `wp-content/themes/my_current_wp_theme/wph`

### Update functions.php

At the top of the theme `functions.php` file, _require_ and instantiate the `wph` class:

```
require_once('wph/wp_helper.php');
$wph = new wp_helper();
```

Then simply enable any setting needed by defining it's value as `true`. Functionality for omitted settings is ignored.

```
$wph->remove_wp_version_number  = true;
$wph->remove_rest_api           = true;
$wph->remove_wlwmanifest        = true;
$wph->remove_adjacent_posts     = true;
```

Then to initialize the settings, run:

```
$wph->apply_settings();
```

Here is an example of a complete implementation of the library with all available settings enabled:

```
/*
 * -----------------------------------------------
 * Install and setup WPH
 * -----------------------------------------------
 */
require_once('wph/wp_helper.php');
$wph = get_wph();

// Head Meta Tags.
$wph->remove_wp_version_number    = true;
$wph->remove_rsd                  = true;
$wph->remove_rss_feed             = true;
$wph->remove_wp_shortlink         = true;
$wph->remove_emoji                = true;
$wph->remove_resource_hints       = true;
$wph->remove_oembed               = true;
$wph->remove_rest_api             = true;
$wph->remove_wlwmanifest          = true;
$wph->remove_adjacent_posts       = true;
$wph->remove_canonical            = true;
$wph->remove_block_library        = true;

// Use HTML5 markup for the search form.
$wph->add_html5_search_form       = true;

// Page Sections
$wph->use_page_header             = true;
$wph->use_page_header_title       = true;
$wph->use_page_header_search      = true;
$wph->use_page_header_slide       = true;

$wph->use_page_footer             = true;
$wph->use_left_column             = true;
$wph->use_right_column            = true;

// Single Posts
$wph->use_single_post_pubdate     = true;
$wph->use_single_post_lastupdate  = true;

// Menus
$wph->add_menus_support           = true;
$wph->register_main_menu          = true;
$wph->use_main_menu               = true;

// CSS
$wph->enqueu_css_reset            = true;
$wph->enqueu_css_elements         = true;
$wph->enqueu_css_wph              = true;

// JS
$wph->enqueu_js_wph               = true;

// Widgets
$wph->use_toc_widget              = true;

/**
 * -----------------------------------------------
 * Apply settings and initialize the WPH library
 * -----------------------------------------------
 */
$wph->apply_settings();
```

### Update index.php

If you want to use the theme building elements (page) of the library you need to let the library take-over the theme routing. This is done by replacing the content of the `index.php` file with:

```
/**
 * -----------------------------------------------
 * Load the WPH router template file
 * -----------------------------------------------
 */
get_template_part('wph/partials/router');
```

## Functionality

### remove_wp_version_number

