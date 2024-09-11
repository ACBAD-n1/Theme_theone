<?php 

//** */
//**  cta Section */
//** */
$wp_customize->add_section('cta_section', [
    'title'                     =>      __('Customize cta', 'theone'),
    'priority'                  =>      5,
    'capability'                =>      'edit_theme_options',
    'panel'                     =>      'theone_panel',
]);

// cta Image 
$wp_customize->add_setting('cta_image', [
    'type'                      =>      'theme_mod',
    'default'                   =>      '',
    'sanitize_callback'         =>      'esc_url_raw',
]);
$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'cta_image', 
    [
        'label'                     =>      __('Here You Can Customize The Image', 'theone'),
        'section'                   =>      'cta_section',
        'description'               =>      __('Upload an image for the cta section', 'theone'),
    ])
);

// cta title
$wp_customize->add_setting('cta_title', [
    'type'                          =>      'theme_mod',
    'default'                       =>      __('Ready to Skyrocket Your Sales?', 'theone'),
    'sanitize_callback'             =>      'sanitize_text_field',
]);
$wp_customize->add_control('cta_title', [
    'label'                         =>      __('Cta Title', 'theone'),
    'section'                       =>      'cta_section',
    'type'                          =>      'text'
]);

// cta Content
$wp_customize->add_setting('cta_content', [
    'type'                          =>      'theme_mod',
    'default'                       =>      __('Get the perfect solution for your ecommerce store today. Enjoy seamless functionality, fast performance, and top-tier support.', 'theone'),
    'sanitize_callback'             =>      'sanitize_text_field',
]);
$wp_customize->add_control('cta_content', [
    'label'                         =>      __('Cta Content', 'theone'),
    'section'                       =>      'cta_section',
    'type'                          =>      'textarea',
]);

// cta Button
$wp_customize->add_setting('cta_button', [
    'type'                          =>      'theme_mod',
    'default'                       =>      __('Buy Now', 'theone'),
    'sanitize_callback'             =>      'sanitize_text_field',
]);
$wp_customize->add_control('cta_button', [
    'label'                         =>      __('Cta Button', 'theone'),
    'section'                       =>      'cta_section',
    'type'                          =>      'text',
]);

