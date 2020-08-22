<?php $wph = get_wph(); ?><article id="post-<?php the_ID(); ?>" class="module archive-article">

    <?php the_post_thumbnail(array(105,105));?>
    <header>
        <h2>
            <a href="<?php the_permalink(); ?>">
                <span><?php the_title(); ?></span>
            </a>
        </h2>
        <?php get_template_part('wph/partials/article_head_data'); ?>
    </header>
    <div class="article-content">
        <?php the_content(); ?>
    </div>
    <footer>
        <?php $wph->print_categories(get_the_category()); ?>
    </footer>

</article>