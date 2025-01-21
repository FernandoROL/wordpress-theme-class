<?php

function wpdevs_load_scripts()
{
    wp_enqueue_style('font-loader', get_template_directory_uri() . '/assets/css/font-loader.css', [], 1.0);
    wp_enqueue_style('base-style-sheet', get_template_directory_uri() . '/assets/css/base.css', [], 1.0);
    wp_enqueue_style('wpdevs_style', get_template_directory_uri() . '/assets/css/main.css', [], the_date(), 'all');
    wp_enqueue_script('dropdown-script', get_template_directory_uri() . '/assets/scripts/dropdown.js', [], 1.0, true);
}

add_action('wp_enqueue_scripts', 'wpdevs_load_scripts');

register_nav_menus(
    [
        'class_main_menu' => 'Main Menu',
        'class_footer_menu' => 'Footer Menu'
    ]
    );