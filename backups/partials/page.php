<?php

/**
 * Views with posts on them.
 */

get_template_part('wph/partials/doc_top');

// Does "The Loop" have posts?
if (have_posts()) {

    // Get "The Loop".
    while(have_posts()) {
        
        // Get the post data.
        $postData = the_post();

        // Check if we are viewing a single post or many.
        if (is_single() || is_page()) {

            // Get the single post template.
            get_template_part('wph/partials/article_single');

        } else {

            // Get the multi-post template.
            get_template_part('wph/partials/article_list');
        }

    }

// If no posts are found...
} else {
    echo '<p>Sorry, nothing here.</p>';
}

get_template_part('wph/partials/doc_bottom');
