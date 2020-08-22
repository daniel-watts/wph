<?php

// Get the WordPress Helper object.
$wph = get_wph();

?></main>
            <?php

            // Left column.
            if ($wph->view_use_left_column) {
                ?><aside id="left-col" class="left-page-col">
                <?php if ($wph->view_use_toc_widget) {
                    ?><div id="toc-widget" class="widget_toc"></div>
                <?php } ?>
                <?php dynamic_sidebar('left-sidebar'); // The left-sidebar widgets. ?>
                </aside>
            <?php } ?>
            <?php if ($wph->use_right_column) { ?><aside id="right-col" class="right-page-col">
            </aside><?php } ?>
        </div>
    </div>

    <?php if ($wph->use_page_footer) { ?>
    <footer id="footer" class="site-footer">
        <div id="footer-widgets" class="module">
            <?php // dynamic_sidebar('footer'); // The `Footer` sidebar menu. ?>
        </div>
        <?php echo $wph->page_footer_content; ?>
    </footer>
    <?php } ?>

    <?php wp_footer(); // Required for common WP hooks. ?>

    <script>
    <?php
    if ($wph->use_main_menu) { echo 'wph.init_main_menu();'; }
    if ($wph->use_page_header_search) { echo 'wph.init_header_search();'; }
    if ($wph->use_page_header_slide) { echo 'wph.init_header_slide();'; }

    // Table of contents widget.
    if ($wph->view_use_toc_widget) { echo 'wph.toc.init();'; }
    ?>
    wph.rbtxt.init_rainbow_txt();
    </script>

</body>
</html>