<?php get_header() ?>

<div id="primary">
    <div id="main">
        <div class="container">

            <h1>Search results for: <span>"<?php echo get_search_query() ?>"</span></h1>
            <?php

            get_search_form();

            while (have_posts()):
                the_post();?>
                <artticle id="post-<?php the_ID() ?>" <?php post_class() ?>>
                    <header>
                        <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
                        <div class="meta-info">
                            <?php 
                            if (get_post_type() === "post") {
                                ?> <p>Posted in <?php echo get_the_date() ?> by <?php the_author_posts_link() ?></p>
                                <p>Categories: <?php the_category(', ') ?></p>
                                <p>Tags: <?php 
                                            if(!get_tags()) {
                                                ?> <span>No Tags...</span> <?php
                                            } else {
                                               ?>  <span><?php the_tags('', ', ') ?></span> <?php
                                            }
                                        ?> </p> <?php
                            }
                            ?>
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