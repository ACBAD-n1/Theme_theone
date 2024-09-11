<?php 

//** */
//** Live Demo Section */
//** */
$wp_customize->add_section('demo_section', [
    'title'                     =>      __('Customize Live Demo', 'theone'),
    'priority'                  =>      3,
    'capability'                =>      'edit_theme_options',
    'panel'                     =>      'theone_panel',
]);

// Demo Image 
$wp_customize->add_setting('demo_image', [
    'type'                      =>      'theme_mod',
    'default'                   =>      '',
    'sanitize_callback'         =>      'esc_url_raw',
]);
$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'demo_image', 
    [
        'label'                     =>      __('Here You Can Customize The Image', 'theone'),
        'section'                   =>      'demo_section',
        'description'               =>      __('Upload an image for the Demo section', 'theone'),
    ])
);

// Demo title
$wp_customize->add_setting('demo_title', [
    'type'                          =>      'theme_mod',
    'default'                       =>      __('See It in Action', 'theone'),
    'sanitize_callback'             =>      'sanitize_text_field',
]);
$wp_customize->add_control('demo_title', [
    'label'                         =>      __('Demo Title', 'theone'),
    'section'                       =>      'demo_section',
    'type'                          =>      'text'
]);

// Demo Content
$wp_customize->add_setting('demo_content', [
    'type'                          =>      'theme_mod',
    'default'                       =>      __('Preview our theme in real-time and explore its features. Experience the fluid design, fast loading times, and intuitive navigation that will set your online store apart.', 'theone'),
    'sanitize_callback'             =>      'sanitize_text_field',
]);
$wp_customize->add_control('demo_content', [
    'label'                         =>      __('Demo Content', 'theone'),
    'section'                       =>      'demo_section',
    'type'                          =>      'textarea',
]);

// Demo Button
$wp_customize->add_setting('demo_button', [
    'type'                          =>      'theme_mod',
    'default'                       =>      __('View Live Demo', 'theone'),
    'sanitize_callback'             =>      'sanitize_text_field',
]);
$wp_customize->add_control('demo_button', [
    'label'                         =>      __('Demo Button', 'theone'),
    'section'                       =>      'demo_section',
    'type'                          =>      'text',
]);

// Demo Button URL
$wp_customize->add_setting('demo_button_url', [
    'type'                          =>      'theme_mod',
    'default'                       =>      '#',
    'sanitize_callback'             =>      'esc_url_raw',
]);
$wp_customize->add_control('demo_button_url', [
    'label'                         =>      __('Demo Button URL', 'theone'),
    'section'                       =>      'demo_section',
    'type'                          =>      'url',
]);