<?php get_header() ?>
<div class="site-content" id="content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <section class="hero">

            </section>
            <section class="services">
                <h2>Our Services</h2>
                <div class="container">
                    <div class="services-item">
                        <?php
                        if (is_active_sidebar('services-1')) {
                            dynamic_sidebar('services-1');
                        }
                        ?>
                    </div>
                    <div class="services-item">
                        <?php
                        if (is_active_sidebar('services-2')) {
                            dynamic_sidebar('services-2');
                        }
                        ?>
                    </div>
                    <div class="services-item">
                        <?php
                        if (is_active_sidebar('services-3')) {
                            dynamic_sidebar('services-3');
                        }
                        ?>
                    </div>
                </div>
            </section>
            <section class="home-blog">
                <h2>Latest News</h2>
                <div class="container">
                    <?php

                    $args = [
                        'post_type' => 'post',
                        'posts_per_page' => 3,
                        'category__in' => [7, 6, 5, 8],
                        'category__not_in' => [1],
                    ];

                    $postlist = new WP_Query($args);

                    if ($postlist->have_posts()):
                        while ($postlist->have_posts()) : $postlist->the_post();
                        ?>
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
                                               ?>  <span><?php the_category(' ')  ?></span> <?php
                                            }
                                        ?> 
                                        Tags: <?php 
                                            if(!get_tags()) {
                                                ?> <span>No Tags...</span> <?php
                                            } else {
                                               ?>  <span><?php the_tags('', ', ') ?></span> <?php
                                            }
                                        ?> 
                                    </p>
                                    <p><span><?php echo get_the_date() ?></span></p>
                                </div>
                                <?php custom_excerpt(25) ?>
                            </article>
                            <?php
                        endwhile;
                        wp_reset_postdata();
                    else: ?>
                        <p>No post yet...</p>
                        <?php endif; ?>
                    </div>

            </section>
        </main>
    </div>
</div>
<?php get_footer() ?>