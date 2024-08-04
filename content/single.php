<article id="post-<?php the_ID(); ?>">

    <?php if (!is_page()) { ?>
    <p class="entry-meta">
        <strong>Published</strong> <?php
            echo human_time_diff(get_the_time('U'), current_time('timestamp')) . ' ago';
        ?>.<br><strong>Last updated</strong>
        <time datetime="<?php the_modified_time('Y-m-d'); ?>"><?php the_modified_time('F jS, Y'); ?></time>
    </p>
    <?php } ?>

    <?php the_content();
    
?></article>