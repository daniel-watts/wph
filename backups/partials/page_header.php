<?php $wph = get_wph(); ?>
<?php if ($wph->use_page_header) { ?>
<header class="page-header">
    <div class="page-header-liner">

        <?php if ($wph->use_page_header_title) { ?>
        <div class="page-title">
            <a href="<?php echo site_url(); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>">
                <span class="anim-text-flow"><?php bloginfo('name'); ?></span>
            </a>
        </div>
        <?php } ?>

        <?php if ($wph->use_page_header_search) { get_search_form(); } ?>

        <?php if ($wph->use_main_menu) { ?>
        <div class="main-menu-nav">
            <div class="main-menu-nav-liner">
                <div id="main-menu-toggle" class="main-menu-toggle"><span></span></div>
                <nav id="main-menu" class="main-menu">
                    <?php wp_nav_menu(array('theme_location' => 'main-menu')); ?>
                </nav>
            </div>
        </div>
        <?php } ?>

    </div>
</header>
<?php } ?>