<artticle id="post-<?php the_ID() ?>" <?php post_class() ?>>
    <header>
        <h1><?php the_title() ?></h1>
        <div class="meta-info">
            <p>Posted in <?php echo get_the_date() ?> by <?php the_author_posts_link() ?></p>
            <p>Categories: <span <?php if(!has_category()) echo 'class="no-tags"' ?> ><?php the_category(', '); if(!has_category()) echo "No categories..." ?></span></p>
            <p>Tags: <span <?php if(!has_tag()) echo 'class="no-tags"' ?> ><?php the_tags('', ', '); if(!has_tag()) echo "No tags..." ?></span></p>
        </div>
    </header>
    <div>
        <?php the_content() ?>
        <?php wp_link_pages() ?>
    </div>
</artticle>