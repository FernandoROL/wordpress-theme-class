<?php

require get_template_directory() . '/inc/customizer.php';

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

    $textdomain = 'tema-aula';
    load_theme_textdomain( $textdomain, get_template_directory() . '/languages/');

    register_nav_menus([
        'class_main_menu' => __('Main Menu', 'tema-aula'),
        'class_footer_menu' => __('Footer Menu', 'tema-aula')
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
    add_theme_support( 'title-tag' );
}

add_action('after_setup_theme', 'main_config', 0);

add_action('widgets_init', 'class_sidebars');

function class_sidebars()
{
    register_sidebar(
        [
            'name' => __('Blog Sidebar', 'tema-aula'),
            'id' => 'blog-sidebar',
            'description' => __('This is the Blog page sidebar. You can add your widgets here.', 'tema-aula'),
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
            'description'   => __('First Service Area', 'tema-aula'),
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
            'description'   => __('Second Service Area', 'tema-aula'),
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
            'description'   => __('Third Service Area', 'tema-aula'),
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>'
        ]
    );
    register_sidebar(
        [
            'name'  => 'Service 4',
            'id'    => 'services-4',
            'description'   => __('Fourth Service Area', 'tema-aula'),
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>'
        ]
    );
}

// Custom function to limit the lenght of the "the_excerpt" and "get_the_excerpt" functions 

function custom_excerpt($lenght) {
    add_filter('excerpt_length', fn() => $lenght);
    return the_excerpt();
}

function custom_get_excerpt($lenght) {
    return wp_trim_words(get_the_content(), $lenght, '[...] <a href='. get_the_permalink() .'>'. __('read more', 'tema-aula') .'</a>');
}