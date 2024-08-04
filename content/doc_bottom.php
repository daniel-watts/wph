            </main>
        </div>
    </div>

    <footer id="footer" class="site-footer">
        <div id="footer-widgets" class="module">
            <?php // dynamic_sidebar('footer'); // The `Footer` sidebar menu. ?>
        </div>
        <p class="copyright">
            <span>&copy; <?php echo date( 'Y' ); ?> Daniel Watts</span>
        </p>
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
                echo 'wattswork.table_of_contents_widget(\'page-content\', \'toc-widget\');';
            }
        } 
    ?>
    </script>

</body>

</html>