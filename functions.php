<?php

// Instantiate the WPH class.
require_once('classes/wp_helpers.php');
$wph = new wp_helpers();

// Pagination
$wph->use_pagination_links      = false; // Use pagination links.
$wph->use_pagination_bar        = true; // Use the pagination bar.

// Menus
$wph->add_menus_support         = true; // Use menues.
$wph->main_menu                 = true; // Use the main menu.

// Search Form
$wph->add_html5_search_form     = true; // Use HTML5 search forms.

// Footer.
$wph->footer_widgets_menu       = false; // Use footer widgets.
$wph->footer_copyright          = true; // Use the footer copyright.

// Columns
$wph->column_left_layout        = true; // Use the left-column in page layputs.
$wph->widgets_column_left       = true; // Use widgets in the left column.

$wph->column_right_layout       = true; // Use the right-column in page layputs.
$wph->widgets_column_right      = true; // Use widgets in the right column.

// Post thumbnails.
$wph->post_thumbnails           = true; // Use post thumbnails.

// Remove WP Features.
$wph->remove_wp_version_number  = true;
$wph->remove_rsd                = true;
$wph->remove_rss_feed           = true;
$wph->remove_wp_shortlink       = true;
$wph->remove_emoji              = true;
$wph->remove_resource_hints     = true;
$wph->remove_oembed             = true;
$wph->remove_rest_api           = true;
$wph->remove_wlwmanifest        = true;
$wph->remove_adjacent_posts     = true;
$wph->remove_canonical          = false;
$wph->remove_block_library      = true;

// This must be called here, at the bottom of the functions file to apply the WPH settings.
$wph->apply_settings();



