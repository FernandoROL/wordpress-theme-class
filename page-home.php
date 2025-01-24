<?php get_header() ?>
<div class="site-content" id="content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <section class="hero">

            </section>
            <section class="services">
                <h2>Our Services</h2>
                <div class="container">
                    <?php get_template_part('parts/home/widget', 'services') ?>
                </div>
            </section>
            <section class="home-blog">
                <h2>Latest News</h2>
                <div class="container">
                    <?php

                    $args = [
                        'post_type' => 'post',
                        'posts_per_page' => 3,
                        'category__in' => [7, 6, 5, 8, 9, 10, 11, 12, 13, 14],
                        'category__not_in' => [1],
                    ];

                    $postlist = new WP_Query($args);

                    if ($postlist->have_posts()):
                        while ($postlist->have_posts()) : $postlist->the_post();
                            get_template_part('parts/content', 'home');
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