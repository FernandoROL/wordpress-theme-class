<article class='latest-news''>
    <a href="<?php the_permalink() ?>">
        <?php the_post_thumbnail('large') ?>
    </a>
    <h3><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
    <div class="meta-info">
        <p>
            by <span><?php the_author_posts_link() ?></span>
            Categories: <?php 
                if(!get_categories()) {
                    ?> No Categories... <?php
                } else {
                    ?>  <span><?php the_category(', ')  ?></span> <?php
                }
            ?> 
            Tags: <?php 
                if(!get_tags()) {
                    ?> <span class="no-tags">No Tags...</span> <?php
                } else {
                    ?>  <span><?php the_tags('', ', ') ?></span> <?php
                }
            ?> 
        </p>
        <p><span><?php echo get_the_date() ?></span></p>
    </div>
    <p><?php echo custom_get_excerpt(25) ?></p>
</article>