<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Curso</title>

    <?php wp_head() ?>
</head>

<body <?php body_class() ?>>
    <div class="site" id="page">
        <header>
            <section class="top-bar">
                <div class="container">
                    <div class="logo">
                        <?php
                        if (has_custom_logo()) {
                            the_custom_logo();
                        } else {
                        ?>
                            <a href=" <?php echo home_url('/'); ?> "> <span><?php bloginfo('name'); ?> </span></a>
                        <?php
                        } ?>
                    </div>
                    <div class="searchbox">
                        Search
                    </div>
                </div>
            </section>
            <section class="menu-area">
                <nav class="main-menu">
                    <button class="check-button">
                        <div class="menu-icon">
                            <div class="bar1"></div>
                            <div class="bar2"></div>
                            <div class="bar3"></div>
                        </div>
                    </button>
                    <?php wp_nav_menu([
                        'theme_location' => 'class_main_menu',
                        'depth' => 2
                    ]) ?>
                </nav>
            </section>
        </header>