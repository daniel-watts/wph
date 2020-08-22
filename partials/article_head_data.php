<?php

$wph = get_wph();

// Show post metadata.
if (
    (!is_page() && !is_single() && $wph->use_list_post_pubdate)
    || (!is_page() && is_single() && $wph->use_single_post_pubdate)
    || (is_page() && $wph->use_page_pubdate)
 // || (!is_single() && $wph->use_list_post_pubdate)
 // || (!is_page() && is_single() && $wph->use_single_post_lastupdate)
 // || (!is_single() && $wph->use_list_post_lastupdate)
) { ?>
<div class="entry-meta">
    <?php

    // Published date.
    if (
        (!is_page() && !is_single() && $wph->use_list_post_pubdate)
        || (!is_page() && is_single() && $wph->use_single_post_pubdate)
        || (is_page() && $wph->use_page_pubdate)
    ) {
        ?><div class="pub-date">
        <strong>Published</strong> <?php
        echo human_time_diff(get_the_time('U'), current_time('timestamp')) . ' ago'; ?>
    </div>
    <?php } ?>
    <?php
    
    // Last updated date.
    if ($a == '1'
        // (!is_page() && is_single() && $wph->use_single_post_lastupdate)
        // || (!is_single() && $wph->use_list_post_lastupdate)
    ) {
        ?><div class="last-updated">
        <strong>Last updated</strong> <time datetime="<?php the_modified_time('Y-m-d'); ?>"><?php the_modified_time('F jS, Y'); ?></time>
    </div>
    <?php } ?>

</div>
<?php } ?>
