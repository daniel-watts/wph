<article id="post-<?php the_ID(); ?>" class="module archive-article">

    <?php the_post_thumbnail(array(105,105));?>
    <header>
        <a href="<?php the_permalink(); ?>">
            <h2><span><?php the_title(); ?></span></h2>
        </a>
    </header>
    
    <?php the_excerpt(); ?>

</article>