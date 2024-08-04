<?php

class wp_helpers {

    /**
     * Display HTML5 markup in search forms.
     */
    public $add_html5_search_form = false;

    /*
     * Remove the WordPress version mata head tag.
     *
     * Removes:
     * `<meta name="generator" content="WordPress 5.x.x" />`
     */
    public $remove_wp_version_number = false;

    /*
     * Remove RSD (Real Simple Discovery)
     *
     * This is the discovery mechanism used by XML-RPC clients.
     * If you don't use services like Flickr and Quora with your WordPress site, it's a good idea to remove it.
     * 
     * Removes:
     * `<link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://mysite.com/xmlrpc.php?rsd" />`
     */
    public $remove_rsd = false;

    /*
     * Remove RSS link head tag.
     *
     * Removes:
     * `<link rel="alternate" type="application/rss+xml" title="blog title" href="http://mysite.com/?feed=rss2&page_id=5" />`
     */
    public $remove_rss_feed = false;

    /*
     * Remove the WordPress Shortlink link head tag.
     *
     * At best it's just another unneeded line of text, at worse it may lead to duplicate URL indexing
     * (unlikely but not impossible).
     *
     * Removes:
     * `<link rel='shortlink' href='http://mysitek.com/?p=5' />`
     */
    public $remove_wp_shortlink = false;

    /**
     * Remove the WordPress emoji detection.
     *
     * Removes:
     * `<script type="text/javascript">window._wpemojiSettings...`
     * `<style type="text/css">img.wp-smiley...` 
     */
    public $remove_emoji = false;

    /**
     * Remove DNS prefetch for the WordPress CDN.
     *
     * This will also remove any links added with `wp_resource_hints`.
     *
     * Removes:
     * `<link rel='dns-prefetch' href='//s.w.org' />`
     */
    public $remove_resource_hints = false;

    /**
     * Remove the WordPress REST API links.
     *
     * Removes:
     * `<link rel='https://api.w.org/' href='https://mysite.com/wp-json/' />`
     * `<link rel="alternate" type="application/json+oembed" href="https://mysite.com/wp-json/oembed/1.0/embed?url=...`
     * `<link rel="alternate" type="text/xml+oembed" href="https://mysite.com/wp-json/oembed/1.0/embed?url=...`
     */
    public $remove_rest_api = false;

    /**
     * Remove the WordPress Embeds Feature.
     *
     * See: https://make.wordpress.org/core/2015/10/28/new-embeds-feature-in-wordpress-4-4/ 
     * Removes: <script type='text/javascript' src='https://mysite.com/wp-includes/js/wp-embed.min.js?ver=5.x.x'></script>
     */
    public $remove_oembed = false;

    /**
     * Remove the XML-RPC trackbacks and pingbacks support.
     *
     * XML-RPC allows a page to receive trackbacks and pingbacks from other
     * sites. It also allows for remote-posting to a blog using the metaWeblog
     * API, Blogger API, Pingback API, Movable Type API and other similar
     * clients using Thunderbird, Eudora, Windows Live Writer and other email
     * applications.
     * 
     * Removes:
     * `<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://mysite.com/wp-includes/wlwmanifest.xml" />`
     */
    public $remove_wlwmanifest = false;

    /**
     * Remove the "Next" and "Prev" link head tags.
     *
     * Removes:
     * `<link rel='next' title='My Post Title' href='https://mysite.com/my-post-title/' />`
     */
    public $remove_adjacent_posts = false;

    /**
     * Remove the `canonical` tag.
     *
     * Removes:
     * `<link rel="canonical" href="https://mysite.com/my-post-or-page/" />`
     */
    public $remove_canonical = false;

    /**
     * Add theme support for menus.
     * Adds the 'Edit Menus' admin page under 'Appearance > Menus'.
     */
    public $add_menus_support = false;

    /**
     *
     */
    public $register_main_menu = false;


    public $remove_block_library = false;



    public function apply_settings()
    {
        add_action('init',              [$this, 'init']);
        add_action('after_setup_theme', [$this, 'after_setup_theme']);
        add_action('save_post',         [$this, 'save_post']);
        add_action('add_meta_boxes',    [$this, 'add_meta_boxes']);
        add_action('wp_print_styles',   [$this, 'wp_print_styles']);
        add_action('wp_footer',         [$this, 'wp_footer']);

        $this->remove_action();
    }

    public function init()
    {
        if ($this->register_main_menu) {            register_nav_menu('main-menu', __('Theme Main Menu', 'wph')); }
    }

    public function add_filter()
    {
        if ($this->remove_oembed) {                 add_filter('embed_oembed_discover', '__return_false'); }
    }

    public function remove_action()
    {
        if ($this->remove_wp_version_number) {      remove_action('wp_head', 'wp_generator'); }
        if ($this->remove_rsd) {                    remove_action('wp_head', 'rsd_link'); }
        if ($this->remove_rss_feed) {               remove_action('wp_head', 'feed_links', 2);
                                                    remove_action('wp_head', 'feed_links_extra', 3); }
        if ($this->remove_wp_shortlink) {           remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0); }
        if ($this->remove_emoji) {                  remove_action('wp_head', 'print_emoji_detection_script', 7);
                                                    remove_action('admin_print_scripts', 'print_emoji_detection_script');
                                                    remove_action('wp_print_styles', 'print_emoji_styles');}
        if ($this->remove_resource_hints) {         remove_action('wp_head', 'wp_resource_hints', 2); }
        if ($this->remove_oembed) {                 remove_action('wp_head', 'wp_oembed_add_discovery_links', 10);
                                                    remove_action('wp_head', 'wp_oembed_add_host_js');
                                                    remove_filter('oembed_dataparse', 'wp_filter_oembed_result', 10);
                                                    remove_filter('pre_oembed_result', 'wp_filter_pre_oembed_result', 10); }
        if ($this->remove_rest_api) {               remove_action('wp_head', 'rest_output_link_wp_head', 10);
                                                    remove_action('template_redirect', 'rest_output_link_header', 11, 0); }
                                                    remove_action('rest_api_init', 'wp_oembed_register_route');
        if ($this->remove_wlwmanifest) {            remove_action('wp_head', 'wlwmanifest_link'); }
        if ($this->remove_adjacent_posts) {         remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);
                                                    remove_action('wp_head', 'adjacent_posts_rel_link_wp_head'); }
        if ($this->remove_canonical) {              remove_action('wp_head', 'rel_canonical'); }
    }

    public function after_setup_theme()
    {
        if ($this->add_html5_search_form) {         add_theme_support('html5', array('search-form')); }
        if ($this->add_menus_support) {             add_theme_support('menus'); }
    }

    public function save_post()
    {

    }

    public function add_meta_boxes()
    {

    }

    public function wp_print_styles()
    {
        if ($this->remove_block_library) {          wp_dequeue_style('wp-block-library'); }
    }

    public function wp_footer()
    {
        if ($this->remove_oembed) {                 wp_deregister_script('wp-embed'); }
    }

}