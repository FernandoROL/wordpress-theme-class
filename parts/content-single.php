<artticle id="post-<?php the_ID() ?>" <?php post_class() ?>>
    <header>
        <h1><?php the_title() ?></h1>
        <div class="meta-info">
            <p>Posted in <?php echo get_the_date() ?> by <?php the_author_posts_link() ?></p>
            <p>
                Categories: <?php
                    if(!get_categories()) {
                        ?> No Categories... <?php
                    } else {
                        ?>  <span><?php the_category(', ')  ?></span> <?php
                    }
                ?>
            </p>
            <p>
                Tags: <?php
                    if(!get_tags()) {
                        ?> <span class="no-tags">No Tags...</span> <?php
                    } else {
                        ?>  <span><?php the_tags('', ', ') ?></span> <?php
                    }
                ?>
            </p>
        </div>
    </header>
    <div>
        <?php the_content() ?>
        <?php wp_link_pages() ?>
    </div>
</artticle>