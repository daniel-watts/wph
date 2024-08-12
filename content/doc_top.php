<?php global $wph; ?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width" name="viewport">

    <?php get_template_part('content/doc_title'); ?>

    <?php wp_head(); // Required for WP hooks. ?>

    <link rel="shortcut icon" href="<?php echo bloginfo('template_directory'); ?>/img/favicon.png">
 
    <style>
    <?php // Included style sheets directly into the page.
        include( get_template_directory() . '/style.css'); // The required wp stylesheet.
        include( get_template_directory() . '/css/reset.css');
        include( get_template_directory() . '/css/elements.css');
        include( get_template_directory() . '/css/design.css');
    ?>
    </style>

    <script>
    <?php // Included JavaScripts directly into the page.
        include(get_template_directory() . '/js/jquery-2.1.4.min.js'); // jQuery.
    ?>
    </script>
</head>

<body <?php body_class([$GLOBALS['wph_layout_template_css']]); ?>>

    <header class="site-header">
        <div class="site-title">
            <a href="<?php echo site_url(); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>">
                <span><?php bloginfo('name'); ?></span>
            </a>
        </div>
        <div class="site-nav">
            <div class="site-nav-liner">
                <?php get_search_form(); ?>
                <div id="main-menu-toggle" class="site-nav-menu-toggle"></div>
                <nav id="main-menu" class="site-nav-menu">
                    <?php wp_nav_menu(array( // `main-menu` main site navigation menu.
                        'theme_location' => 'main-menu',
                    )); ?>
                </nav>
            </div>
        </div>
    </header>

    <div class="page-section">
        <div class="page-content">
            <?php $wph->column_left(); ?>
            <main id="page-content" class="main-page-content text">
                <?php
                get_template_part('content/title'); ?>
