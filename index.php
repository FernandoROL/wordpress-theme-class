<?php get_header() ?>
<img src="<?php header_image(); ?>" height="<?php echo esc_attr(get_custom_header()->height); ?>" width="<?php echo esc_attr(get_custom_header()->width); ?>" alt="" />
<div class="site-content" id="content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <h1><?php wp_title('') ?></h1>
            <div class="container">
                <div class="blog-items">
                    <?php
                    if (have_posts()):
                        while (have_posts()) : the_post();
                            get_template_part('parts/content');
                        endwhile;
                        the_posts_pagination();
                        else:
                        ?>
                        <p><?php _e('No post yet...', 'tema-aula'); ?></p>
                    <?php endif; ?>
                </div>
                <?php get_sidebar() ?>
            </div>
        </main>
    </div>
</div>
<?php get_footer() ?>