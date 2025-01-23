<?php get_header() ?>
<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
<div class="site-content" id="content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <h1><?php wp_title('') ?></h1>
            <div class="container">
                <div class="blog-items">
                    <?php
                    if (have_posts()):
                        while (have_posts()) : the_post();
                    ?>
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
                                                if(!get_categories()) {
                                                    ?> No Categories... <?php
                                                } else {
                                                   ?>  <span><?php the_category(' ')  ?></span> <?php
                                                }
                                            ?>
                                        </P> 
                                        <P>
                                            Tags: <?php
                                                if(!get_tags()) {
                                                    ?> <span style="text-decoration: underline; color: rgb(120, 120, 120); cursor: not-allowed">No Tags...</span> <?php
                                                } else {
                                                   ?>  <span><?php the_tags('', ', ') ?></span> <?php
                                                }
                                            ?>
                                        </P>
                                </div>
                                <?php custom_excerpt(20) ?>
                            </article>
                        <?php
                        endwhile;
                        ?> 
                            <!-- <div class="wpdevs-pagination">
                                <div class="pages new">
                                    <?php previous_posts_link('<< Previous page') ?>
                                </div>
                                <div class="pages old">
                                    <?php next_posts_link('Next page >> ') ?>
                                </div>
                            </div> -->
                        <?php
                            the_posts_pagination();
                    else:
                        ?>
                        <p>No post yet...</p>
                    <?php endif; ?>
                </div>
                <?php get_sidebar() ?>
            </div>
        </main>
    </div>
</div>
<?php get_footer() ?>