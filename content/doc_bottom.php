<?php global $wph; ?>
            </main>
            <?php $wph->column_right(); ?>
        </div>
    </div>

    <?php $wph->pagination_links(); ?>
    <?php $wph->pagination_bar(); ?>

    <footer id="footer" class="site-footer">
        <?php $wph->footer_widgets(); ?>
        <?php $wph->copyright(); ?>
    </footer>

    <?php wp_footer(); // Required for WP hooks. ?>

    <script>
    <?php
        // Included JavaScripts.
        include(get_template_directory() . '/js/wph.js'); // wph javascripts.

        // Should we use the table of contents?
        if (is_single() || is_page()) { // Not on search.
            $usetoc = get_post_meta($post->ID, 'use_toc', true );
            if ($usetoc == 'yes') {
                echo 'wph.table_of_contents_widget(\'page-content\', \'toc-widget\');';
            }
        } 
    ?>
    </script>

</body>

</html>