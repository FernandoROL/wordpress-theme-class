<?php get_header() ?>

<div id="primary">
    <div id="main">
        <div class="container">

            <h1><?php printf(__('Search results for: %s', 'tema-aula'), '<span>"' . get_search_query() . '"</span>'); ?></h1>
            <?php

            get_search_form();

            while (have_posts()):
                the_post(); ?>
                <artticle id="post-<?php the_ID() ?>" <?php post_class() ?>>
                    <header>
                        <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
                        <div class="meta-info">
                            <?php
                            ?> <p><?php printf(__('Posted in %s by %s', 'tema-aula'), get_the_date(), get_the_author_posts_link()); ?></p>
                            <p><?php _e('Categories:', 'tema-aula'); ?> <span <?php if (!has_category()) echo 'class="no-tags"' ?>><?php the_category(', '); if (!has_category()) _e('No categories...', 'tema-aula'); ?></span></p>
                            <p><?php _e('Tags:', 'tema-aula'); ?> <span <?php if (!has_tag()) echo 'class="no-tags"' ?>><?php the_tags('', ', '); if (!has_tag()) _e('No tags...', 'tema-aula'); ?></span></p>
                        </div>
                    </header>
                    <div>
                        <p><?php echo custom_get_excerpt(20); ?></p>
                    </div>
                </artticle>
            <?php
            endwhile;
            ?>
        </div>
    </div>
</div>

<?php get_footer() ?>