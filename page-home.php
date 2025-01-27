<?php get_header() ?>
<div class="site-content" id="content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <?php get_template_part('parts/home/widget', 'hero') ?>
            <section class="services">
                <h2><?php _e('Our Services', 'tema-aula') ?></h2>
                <div class="container">
                    <?php get_template_part('parts/home/widget', 'services') ?>
                </div>
            </section>
            <section class="home-blog">
                <?php get_template_part('parts/content', 'home'); ?>   
            </section>
        </main>
    </div>
</div>
<?php get_footer() ?>