<?php

// Instantiate the WPH class.
require_once('classes/wp_helpers.php');
$wph = new wp_helpers();

// Define theme settings.

$wph->add_html5_search_form     = true;

// Menus
$wph->add_menus_support         = true;
$wph->register_main_menu        = true;

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
// $wph->remove_canonical          = true;
$wph->remove_block_library      = true;
$wph->apply_settings();
