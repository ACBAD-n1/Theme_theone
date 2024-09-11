<?php 


//** */
//** Hero Section */
//** */

$wp_customize->add_section('home_hero_section', [
    'title'                 =>      __('Home Hero Section', 'theone'),
    'priority'              =>      1,
    'capability'            =>      'edit_theme_options',
    'panel'                 =>      'theone_panel'   
]);


// Setting and Control for Hero Title Span Content
$wp_customize->add_setting('hero_title_span', [
    'type'                  => 'theme_mod',
    'default'               => __('Boost Your Online Sales', 'theone'),
    'sanitize_callback'     => 'sanitize_text_field',
]);
$wp_customize->add_control('hero_title_span', [
    'label'                 => __('Hero Title (Inside Span)', 'theone'),
    'section'               => 'home_hero_section',
    'setting'               => 'hero_title_span',
    'type'                  => 'text',
]);

// Setting and Control for Hero Title
$wp_customize->add_setting('hero_title', [
    'type'                  => 'theme_mod',
    'default'               => __('With the Ultimate WordPress Theme!', 'theone'),
    'sanitize_callback'     => 'sanitize_text_field',
]);
$wp_customize->add_control('hero_title', [
    'label'                 => __('Hero Title (Outside Span)', 'theone'),
    'section'               => 'home_hero_section',
    'setting'               => 'hero_title',
    'type'                  => 'text',
]);


// Seting and Controller for hero paragraphe
$wp_customize->add_setting('hero_content', [
    'type'                  =>      'theme_mod',
    'default'               =>      __('Crafted for Performance, Built for Conversions – 
                                        Sell Products Effortlessly with Our Customizable and Responsive Theme.', 'theone'),
    'sanitize_callback '    =>      'sanitize_text_field',
]);
$wp_customize->add_control('hero_content', [
    'label'                 =>      __('Hero Content', 'theone'),
    'section'               =>      'home_hero_section',
    'setting'               =>      'hero_content',
    'type'                  =>      'text',
]);

// Seting and Controller for hero cta button
$wp_customize->add_setting('hero_button', [
    'type'                  =>      'theme_mod',
    'default'               =>      __('Get Started Now', 'theone'),
    'sanitize_callback '    =>      'sanitize_text_field',
]);
$wp_customize->add_control('hero_button', [
    'label'                 =>      __('Hero CTA Button', 'theone'),
    'section'               =>      'home_hero_section',
    'setting'               =>      'hero_button',
    'type'                  =>      'text',
]);

// Setting and Control for Hero CTA Button URL
$wp_customize->add_setting('hero_button_url', [
    'type'                  =>      'theme_mod',
    'default'               =>      '#', 
    'sanitize_callback'     =>      'esc_url_raw', 
]);
$wp_customize->add_control('hero_button_url', [
    'label'                 =>      __('Hero CTA Button URL', 'theone'),
    'section'               =>      'home_hero_section',
    'setting'               =>      'hero_button_url',
    'type'                  =>      'url',
]);


//** */
//** Hero Section  Image*/
//** */

// Setting and Control for Hero Image
$wp_customize->add_setting('hero_image', [
    'type'              => 'theme_mod',
    'default'           => '',  // Default to no image
    'sanitize_callback' => 'esc_url_raw',  // Sanitize the URL
]);

$wp_customize->add_control(
    new WP_Customize_Image_Control(
        $wp_customize,
        'hero_image',
        [
            'label'      => __('Hero Image', 'theone'),
            'section'    => 'home_hero_section',
            'settings'   => 'hero_image',
            'description'=> __('Upload an image for the hero section', 'theone'),
        ]
    )
);
