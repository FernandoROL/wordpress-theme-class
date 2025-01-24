<article>
    <a href="<?php the_permalink() ?>">
        <h2><?php the_title() ?></h2>
    </a>
    <a href="<?php the_permalink() ?>">
        <?php the_post_thumbnail([320, 180]) ?>
    </a>
    <div class="meta-info">
        <p>Posted in <?php echo get_the_date() ?> by <?php the_author_posts_link() ?></p>
        <P>
            Categories: <?php
                if (!get_categories()) {
                    ?> No Categories... <?php
                } else {
                    ?> <span><?php the_category(', ')  ?></span> <?php
                }?>
        </P>
        <P>
            Tags: <?php
                if (!get_tags()) {
                    ?> <span class="no-tags">No Tags...</span> <?php
                } else {
                    ?> <span><?php the_tags('', ', ') ?></span> <?php
                }?>
        </P>
    </div>
    <p><?php echo custom_get_excerpt(20) ?></p>
</article>