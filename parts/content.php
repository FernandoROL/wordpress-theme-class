<article>
    <a href="<?php the_permalink() ?>">
        <h2><?php the_title() ?></h2>
    </a>
    <a href="<?php the_permalink() ?>">
        <?php the_post_thumbnail([320, 180]) ?>
    </a>
    <div class="meta-info">
        <p><?php printf(__('Posted in %s by %s', 'tema-aula'), get_the_date(), get_the_author_posts_link()); ?></p>
        <p><?php _e('Categories:', 'tema-aula'); ?> <span <?php if(!has_category()) echo esc_attr('class="no-tags"') ?>><?php the_category(', '); if(!has_category()) _e('No categories...', 'tema-aula'); ?></span></p>
        <p><?php _e('Tags:', 'tema-aula'); ?> <span <?php if(!has_tag()) echo esc_attr('class="no-tags"') ?>><?php the_tags('', ', '); if(!has_tag()) _e('No tags...', 'tema-aula'); ?></span></p>
    </div>
    <p><?php echo custom_get_excerpt(20) ?></p>
</article>