<?php

$per_page = get_theme_mod('set_per_page', 3);
$category_include = get_theme_mod('set_category_include');
$category_exclude = get_theme_mod('set_category_exclude');

?>

<h2>Latest News</h2>
<div class="container">
    <?php

    $args = [
        'post_type' => 'post',
        'posts_per_page' => $per_page,
        'category__in' => explode(',', $category_include),
        'category__not_in' => explode(',', $category_exclude),
    ];

    $postlist = new WP_Query($args);
    if ($postlist->have_posts()):
        while ($postlist->have_posts()) : $postlist->the_post(); ?>
            <article class='latest-news''>
    <a href="<?php the_permalink() ?>">
        <?php the_post_thumbnail('large') ?>
    </a>
    <h3><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
    <div class="meta-info">
        <p>
            by <span><?php the_author_posts_link() ?></span>
            Categories: <span <?php if (!has_category()) echo 'class="no-tags"' ?> ><?php the_category(', ');
                                                                                    if (!has_category()) echo "No categories..." ?></span>
            Tags: <span <?php if (!has_tag()) echo 'class="no-tags"' ?> ><?php the_tags('', ', ');
                                                                            if (!has_tag()) echo "No tags..." ?></span>
        </p>
        <p><span><?php echo get_the_date() ?></span></p>
    </div>
    <p><?php echo custom_get_excerpt(25) ?></p>
</article> 
<?php
        endwhile;
        wp_reset_postdata();
    else: ?>
        <p>Nothing to display yet...</p>
    <?php endif; ?>
</div>