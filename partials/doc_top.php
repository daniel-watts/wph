<?php $wph = get_wph(); ?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width" name="viewport">
    <?php get_template_part('wph/partials/doc_title'); ?>
    <link rel="shortcut icon" href="<?php echo bloginfo('template_directory'); ?>/favicon.png">
    <?php wp_head(); ?>
</head>

<body <?php
    $body_classes = '';
    if ($wph->use_page_header) { $body_classes .= 'pg-header'; }
    if ($wph->use_page_header_search) { $body_classes .= ' header-search'; }
    if ($wph->view_use_left_column) { $body_classes .= ' left-col'; }
    if ($wph->use_right_column) { $body_classes .= ' right-col'; }
    body_class($body_classes);
?>>

    <?php get_template_part('wph/partials/page_header'); ?>

    <div class="page">
        <div class="page-content">
            <main id="center-col" class="main-page-content text">
