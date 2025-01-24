<?php get_header() ?>
<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
<div class="site-content" id="content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
        <?php the_archive_title('<h1 class="archive-title">', '</h1>') ?>
        <?php the_archive_description('<div class="archive-description">', '</div>'); ?>
            <div class="container">
                <div class="archive-items">
                    <?php
                    if (have_posts()):
                        while (have_posts()) : the_post();
                    ?>
                            
                        <?php
                        endwhile;
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