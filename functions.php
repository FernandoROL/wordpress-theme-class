<?php

function wpdevs_load_scripts()
{
    wp_enqueue_style('font-loader', get_template_directory_uri() . '/assets/css/font-loader.css', [], 1.0);
    wp_enqueue_style('base-style-sheet', get_template_directory_uri() . '/assets/css/base.css', [], 1.0);
    wp_enqueue_style('main_style', get_template_directory_uri() . '/assets/css/main.css', [], the_date(), 'all');
    wp_enqueue_script('dropdown-script', get_template_directory_uri() . '/assets/scripts/dropdown.js', [], 1.0, true);
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
    add_theme_support( 'post-thumbnails' );
    add_theme_support('custom-logo', [
        'width' => 125,
        'height' => 90,
        // 'flex-height' => true,
        // 'flex-width' => true
    ]);
}

add_action('after_setup_theme', 'main_config', 0);

add_action('widgets_init', 'class_sidebars');

function class_sidebars(){
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
}
