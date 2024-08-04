<?php $wph = get_wph(); ?><article id="post-<?php the_ID(); ?>">

    <header>
        <h1><?php the_title(); ?></h1>
        <?php get_template_part('wph/partials/article_head_data'); ?>
    </header>

    <div class="article-content">
        <?php the_content(); ?>
    </div>

    <footer>
        <?php $wph->print_categories(get_the_category()); ?>
    </footer>
    
</article>