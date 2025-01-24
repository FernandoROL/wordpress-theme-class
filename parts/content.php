<article>
    <a href="<?php the_permalink() ?>">
        <h2><?php the_title() ?></h2>
    </a>
    <a href="<?php the_permalink() ?>">
        <?php the_post_thumbnail([320, 180]) ?>
    </a>
    <div class="meta-info">
        <p>Posted in <?php echo get_the_date() ?> by <?php the_author_posts_link() ?></p>
        <p>Categories: <span <?php if(!has_category()) echo 'class="no-tags"' ?> ><?php the_category(', '); if(!has_category()) echo "No categories..." ?></span></p>
        <p>Tags: <span <?php if(!has_tag()) echo 'class="no-tags"' ?> ><?php the_tags('', ', '); if(!has_tag()) echo "No tags..." ?></span></p>
    </div>
    <p><?php echo custom_get_excerpt(20) ?></p>
</article>