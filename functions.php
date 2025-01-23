<?php

function wpdevs_load_scripts()
{
    wp_enqueue_style('font-loader', get_template_directory_uri() . '/assets/css/font-loader.css', [], rand(111,9999));
    wp_enqueue_style('base-style-sheet', get_template_directory_uri() . '/assets/css/base.css', [], rand(111,9999));
    wp_enqueue_style('main_style', get_template_directory_uri() . '/assets/css/main.css', [], rand(111,9999), 'all');
    wp_enqueue_script('dropdown-script', get_template_directory_uri() . '/assets/scripts/dropdown.js', [], rand(111,9999), true);
}

add_action('wp_enqueue_scripts', 'wpdevs_load_scripts');

function main_config()
{
    register_nav_menus([
        'class_main_menu' => 'Main Menu',
        'class_footer_menu' => 'Footer Menu'
    ]);

    $args = [
        'height'    => 225,
        'width'     => 1920
    ];

    add_theme_support('custom-header', $args);
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', [
        'width' => 125,
        'height' => 90,
        // 'flex-height' => true,
        // 'flex-width' => true
    ]);
}

add_action('after_setup_theme', 'main_config', 0);

add_action('widgets_init', 'class_sidebars');

function class_sidebars()
{
    register_sidebar(
        [
            'name' => 'Blog Sidebar',
            'id' => 'blog-sidebar',
            'description' => 'This is the Blog page sidebar. You can add your widgets here.',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="widget-title">',
            'after-title' => '</h4>'
        ]
    );
    register_sidebar(
        [
            'name'  => 'Service 1',
            'id'    => 'services-1',
            'description'   => 'First Service Area',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>'
        ]
    );
    register_sidebar(
        [
            'name'  => 'Service 2',
            'id'    => 'services-2',
            'description'   => 'Second Service Area',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>'
        ]
    );
    register_sidebar(
        [
            'name'  => 'Service 3',
            'id'    => 'services-3',
            'description'   => 'Third Service Area',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>'
        ]
    );
}

function custom_excerpt($lenght) {
    add_filter('excerpt_length', fn() => $lenght);
    return the_excerpt();
}

function custom_get_excerpt($lenght) {
    return wp_trim_words(get_the_content(), $lenght, '[...] <a href='. get_the_permalink() .'>read more</a>');
}