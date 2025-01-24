<?php 

function wpdevs_customizer( $wp_customize ){

    // Footer copyright section

    $wp_customize->add_section(
        'sec_copyright',
        [
            'title' => 'Copywrite Settings',
            'description' => 'Copywrite Settings'
        ]
    );

        // Footer copyright text

        $wp_customize->add_setting(
            'set_copyright',
            [
                'type' => 'theme_mod',
                'default' => 'Cool copyright footer text',
                'sanitize_callback' => 'sanitize_text_field'
            ]
        );

        $wp_customize->add_control(
            'set_copyright',
            [
                'label' => 'Copyright information',
                'description' => 'Please, type your copyright here',
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
                'default' => 'Please add a title',
                'sanitize_callback' => 'sanitize_text_field'
            ]
        );

        $wp_customize->add_control(
            'set_hero_title',
            [
                'label' => 'Hero title',
                'description' => 'Type your title here',
                'section' => 'sec_hero',
                'type' => 'text'
            ]
        );

        // Hero subtitle customizations

        $wp_customize->add_setting(
            'set_hero_subtitle',
            [
                'type' => 'theme_mod',
                'default' => 'Add your custom subtitle',
                'sanitize_callback' => 'sanitize_textarea_field'
            ]
        );

        $wp_customize->add_control(
            'set_hero_subtitle',
            [
                'label' => 'Hero subtitle',
                'description' => 'Type your subtitle here',
                'section' => 'sec_hero',
                'type' => 'textarea'
            ]
        );

        // Hero button text customizations

        $wp_customize->add_setting(
            'set_hero_button_text',
            [
                'type' => 'theme_mod',
                'default' => 'Button text',
                'sanitize_callback' => 'sanitize_text_field'
            ]
        );

        $wp_customize->add_control(
            'set_hero_button_text',
            [
                'label' => 'Hero button text',
                'description' => 'Type your subtitle here',
                'section' => 'sec_hero',
                'type' => 'text'
            ]
        );

        // Hero button link customizations

        $wp_customize->add_setting(
            'set_hero_button_link',
            [
                'type' => 'theme_mod',
                'default' => 'Button link',
                'sanitize_callback' => 'esc_url_raw'
            ]
        );

        $wp_customize->add_control(
            'set_hero_button_link',
            [
                'label' => 'Hero button link',
                'description' => 'Type your hero button link here',
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
                'label' => 'Hero button link',
                'description' => 'Hero height',
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
                'label' => 'Hero background image',
                'section' => 'sec_hero',
                'mime_image' => 'image'
            ]
        )
        );

    // Blog section

	$wp_customize->add_section( 
        'sec_blog', 
        [
		    'title' => 'Blog Section'
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
                    'label' => 'Posts per page',
                    'description' => 'How many items to display in the post list?',			
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
                    'label' => 'Post categories to include',
                    'description' => 'Comma separated values or single category ID',
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
                    'label' => 'Post categories to exclude',
                    'description' => 'Comma separated values or single category ID',			
                    'section' => 'sec_blog',
                    'type' => 'text'
                ] 
            );
}

add_action('customize_register', 'wpdevs_customizer');