<?php 

function wpdevs_customizer( $wp_customize ){

    // Footer copyright section

    $wp_customize->add_section(
        'sec_copyright',
        [
            'title' => __('Copyright Settings', 'tema-aula'),
            'description' => __('Copyright Settings', 'tema-aula')
        ]
    );

        // Footer copyright text

        $wp_customize->add_setting(
            'set_copyright',
            [
                'type' => 'theme_mod',
                'default' => __('Cool copyright footer text', 'tema-aula'),
                'sanitize_callback' => 'sanitize_text_field'
            ]
        );

        $wp_customize->add_control(
            'set_copyright',
            [
                'label' => __('Copyright information', 'tema-aula'),
                'description' => __('Please, type your copyright here', 'tema-aula'),
                'section' => 'sec_copyright',
                'type' => 'text'
            ]
        );
    
    // Hero section

    $wp_customize->add_section(
        'sec_hero',
        [
            'title' => 'Hero Section',
        ]
    );
        
        // Hero title customizations

        $wp_customize->add_setting(
            'set_hero_title',
            [
                'type' => 'theme_mod',
                'default' => __('Please add a title', 'tema-aula'),
                'sanitize_callback' => 'sanitize_text_field'
            ]
        );

        $wp_customize->add_control(
            'set_hero_title',
            [
                'label' => __('Hero title', 'tema-aula'),
                'description' => __('Type your title here', 'tema-aula'),
                'section' => 'sec_hero',
                'type' => 'text'
            ]
        );

        // Hero subtitle customizations

        $wp_customize->add_setting(
            'set_hero_subtitle',
            [
                'type' => 'theme_mod',
                'default' => __('Add your custom subtitle', 'tema-aula'),
                'sanitize_callback' => 'sanitize_textarea_field'
            ]
        );

        $wp_customize->add_control(
            'set_hero_subtitle',
            [
                'label' => __('Hero subtitle', 'tema-aula'),
                'description' => __('Type your subtitle here', 'tema-aula'),
                'section' => 'sec_hero',
                'type' => 'textarea'
            ]
        );

        // Hero button text customizations

        $wp_customize->add_setting(
            'set_hero_button_text',
            [
                'type' => 'theme_mod',
                'default' => __('Button text', 'tema-aula'),
                'sanitize_callback' => 'sanitize_text_field'
            ]
        );

        $wp_customize->add_control(
            'set_hero_button_text',
            [
                'label' => __('Hero button text', 'tema-aula'),
                'description' => __('Type your subtitle here', 'tema-aula'),
                'section' => 'sec_hero',
                'type' => 'text'
            ]
        );

        // Hero button link customizations

        $wp_customize->add_setting(
            'set_hero_button_link',
            [
                'type' => 'theme_mod',
                'default' => __('Button link', 'tema-aula'),
                'sanitize_callback' => 'esc_url_raw'
            ]
        );

        $wp_customize->add_control(
            'set_hero_button_link',
            [
                'label' => __('Hero button link', 'tema-aula'),
                'description' => __('Type your hero button link here', 'tema-aula'),
                'section' => 'sec_hero',
                'type' => 'text'
            ]
        );

        // Hero height

        $wp_customize->add_setting(
            'set_hero_height',
            [
                'type' => 'theme_mod',
                'default' => 800,
                'sanitize_callback' => 'absint'
            ]
        );

        $wp_customize->add_control(
            'set_hero_height',
            [
                'label' => __('Hero button link', 'tema-aula'),
                'description' => __('Hero height', 'tema-aula'),
                'section' => 'sec_hero',
                'type' => 'number'
            ]
        );

        // Hero background image

        $wp_customize->add_setting(
            'set_hero_background',
            [
                'type' => 'theme_mod',
                'sanitize_callback' => 'absint'
            ]
        );

        $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize,
            'set_hero_background',
            [
                'label' => __('Hero background image', 'tema-aula'),
                'section' => 'sec_hero',
                'mime_image' => 'image'
            ]
        )
        );

    // Blog section

	$wp_customize->add_section( 
        'sec_blog', 
        [
		    'title' => __('Blog Section', 'tema-aula')
        ] 
    );
    
            // Posts per page
            $wp_customize->add_setting( 
                'set_per_page', 
                [
                    'type' => 'theme_mod',
                    'sanitize_callback' => 'absint'
                ]
            );

            $wp_customize->add_control( 
                'set_per_page', 
                [
                    'label' => __('Posts per page', 'tema-aula'),
                    'description' => __('How many items to display in the post list?', 'tema-aula'),			
                    'section' => 'sec_blog',
                    'type' => 'number'
                ] 
            );

            // Post categories to include
            $wp_customize->add_setting( 
                'set_category_include', 
                [
                    'type' => 'theme_mod',
                    'sanitize_callback' => 'sanitize_text_field'
                ] 
            );

            $wp_customize->add_control( 
                'set_category_include', 
                [
                    'label' => __('Post categories to include', 'tema-aula'),
                    'description' => __('Comma separated values or single category ID', 'tema-aula'),
                    'section' => 'sec_blog',
                    'type' => 'text'
                ] 
            );	

            // Post categories to exclude
            $wp_customize->add_setting( 
                'set_category_exclude', 
                [
                    'type' => 'theme_mod',
                    'sanitize_callback' => 'sanitize_text_field'
                ] 
            );

            $wp_customize->add_control( 
                'set_category_exclude', 
                [
                    'label' => __('Post categories to exclude', 'tema-aula'),
                    'description' => __('Comma separated values or single category ID', 'tema-aula'),			
                    'section' => 'sec_blog',
                    'type' => 'text'
                ] 
            );
}

add_action('customize_register', 'wpdevs_customizer');