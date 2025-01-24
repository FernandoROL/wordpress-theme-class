<article class='latest-news''>
    <a href="<?php the_permalink() ?>">
        <?php the_post_thumbnail('large') ?>
    </a>
    <h3><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
    <div class="meta-info">
        <p>
            by <span><?php the_author_posts_link() ?></span>
            Categories: <span <?php if(!has_category()) echo 'class="no-tags"' ?> ><?php the_category(', '); if(!has_category()) echo "No categories..." ?></span>
            Tags: <span <?php if(!has_tag()) echo 'class="no-tags"' ?> ><?php the_tags('', ', '); if(!has_tag()) echo "No tags..." ?></span>
        </p>
        <p><span><?php echo get_the_date() ?></span></p>
    </div>
    <p><?php echo custom_get_excerpt(25) ?></p>
</article>