<artticle id="post-<?php the_ID() ?>" <?php post_class() ?>>
    <header>
        <h1><?php the_title() ?></h1>
        <div class="meta-info">
            <p><?php printf(__('Posted in %s by %s', 'tema-aula'), get_the_date(), get_the_author_posts_link()); ?></p>
            <p><?php _e('Categories:', 'tema-aula'); ?> <span <?php if(!has_category()) echo 'class="no-tags"' ?>><?php the_category(', '); if(!has_category()) _e('No categories...', 'tema-aula'); ?></span></p>
            <p><?php _e('Tags:', 'tema-aula'); ?> <span <?php if(!has_tag()) echo 'class="no-tags"' ?>><?php the_tags('', ', '); if(!has_tag()) _e('No tags...', 'tema-aula'); ?></span></p>
        </div>
    </header>
    <div>
        <?php the_content() ?>
        <?php wp_link_pages() ?>
    </div>
</artticle>