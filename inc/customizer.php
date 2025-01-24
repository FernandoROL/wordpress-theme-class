<?php 

function wpdevs_customizer( $wp_customize ){
    $wp_customize->add_section(
        'sec_copyright',
        [
            'title' => 'Copywrite Settings',
            'description' => 'Copywrite Settings'
        ]
    );

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
}

add_action('customize_register', 'wpdevs_customizer');