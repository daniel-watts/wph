<?php

// Get the WordPress Helper object.
$wph = get_wph();

// Left col.
$wph->view_use_left_column = false;
if ($wph->use_left_column) { $wph->view_use_left_column = true; }

// Table of contents widget.
$wph->view_use_toc_widget = false;
if ($wph->use_toc_widget) {
    $usetoc = get_post_meta($post->ID, 'use_toc', true);
    if ($usetoc == 'yes') {
        $wph->view_use_toc_widget = true;
        $wph->view_use_left_column = true;
    }
}

?>