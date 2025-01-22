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
                                <h2><?php the_title() ?></h2>
                                <?php the_post_thumbnail([320, 180]) ?>
                                <div class="meta-info">
                                    <p>Posted in <?php echo get_the_date() ?> by <?php the_author_posts_link() ?></p>
                                    <p>Categories: <?php the_category(' ') ?></p>
                                    <p>Tags: <?php the_tags('', ', ') ?></p>
                                </div>
                                <?php the_content() ?>
                            </article>
                        <?php
                        endwhile;
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