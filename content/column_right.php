<?php global $wph; ?>
<?php

// Check if the right column should be used based on the WPH setting.
if ($wph->column_right_layout) {

    // Check if the right column should be used based on the layout template.
    if ($GLOBALS['wph_layout_template_type'] == 'three-column-layout') {
    ?>
        <div id="right-column" class="right-column">
        <?php

            // Check if the right-column widgets should be used based on the WPH setting.
            if ($wph->widgets_column_right) {
                dynamic_sidebar('right_column_widgets');
        } ?>
        </div>

    <?php } ?>
<?php } ?>
