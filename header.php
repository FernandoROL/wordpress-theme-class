<!DOCTYPE html>
    <html <?php language_attributes() ?>>
        <?php wp_head() ?>
        <?php get_template_part('parts/head') ?>

    <body <?php body_class() ?>>
        <div class="site" id="page">
            <header>
                <?php get_template_part('parts/header/bar', 'top') ?>
                <?php get_template_part('parts/header/bar', 'nav') ?>
            </header>