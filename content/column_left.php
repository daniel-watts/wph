<?php global $wph; ?>

<?php

// Check if the left column should be used based on the WPH setting.
if ($wph->column_left_layout) {

    // Check if the left column should be used based on the layout template.
    if (
        $GLOBALS['wph_layout_template_css'] == 'two-column-layout'
        || $GLOBALS['wph_layout_template_css'] == 'three-column-layout'
    ) {
    ?>
        <div id="left-column" class="left-column">

        <?php
            // Check if the left-column widgets should be used based on the WPH setting.
            if ($wph->widgets_column_left && $GLOBALS['wph_layout_template_type'] != 'single-column-layout') {
            dynamic_sidebar('left_column_widgets');
            }
        ?>

        <?php
            // Check if the Table of Contents should be used based on the WPH setting.
            if (is_single() || is_page()) { // Not on search.
                $usetoc = get_post_meta($post->ID, 'use_toc', true );
                if ($usetoc == 'yes') { ?>
            <aside id="toc-widget" class="widget_toc"></aside>
                <?php }
            } 
        ?>

        </div>
    <?php } ?>
<?php } ?>