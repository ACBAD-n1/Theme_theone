<?php 

//** */
//** Footer up Section */
//** */
$wp_customize->add_section('footer_section', [
    'title'                 =>      __('Customizer the Footer Up'),
    'priority'              =>      6,
    'capability'            =>      'edit_theme_options',
    'panel'                 =>      'theone_panel',
]);

// Footer About theme Title
$wp_customize->add_setting('footer_about_title', [
    'type'                  =>      'theme_mod',
    'default'               =>      __('About the Theme', 'theone'),
    'sanitize_callback'     =>      'sanitize_text_field',
]);
$wp_customize->add_control('footer_about_title', [
    'label'                 =>      __('Footer About Title', 'theone'),
    'section'               =>      'footer_section',
    'type'                  =>      'text',
]);

// Footer About theme Content
$wp_customize->add_setting('footer_about_content', [
    'type'                  =>      'theme_mod',
    'default'               =>      __('Our custom WordPress theme is designed to help online sellers create beautiful, high-converting stores. Built from scratch, it\'s optimized for performance, customization, and seamless integration with WooCommerce.', 'theone'),
    'sanitize_callback'     =>      'sanitize_text_field',
]);
$wp_customize->add_control('footer_about_content', [
    'label'                 =>      __('Footer About Content', 'theone'),
    'section'               =>      'footer_section',
    'type'                  =>      'textarea',
]);

// Footer Support theme Title
$wp_customize->add_setting('footer_support_title', [
    'type'                  =>      'theme_mod',
    'default'               =>      __('Support', 'theone'),
    'sanitize_callback'     =>      'sanitize_text_field',
]);
$wp_customize->add_control('footer_support_title', [
    'label'                 =>      __('Footer Support Title', 'theone'),
    'section'               =>      'footer_section',
    'type'                  =>      'text',
]);

// Footer Support theme Content
$wp_customize->add_setting('footer_support_content', [
    'type'                  =>      'theme_mod',
    'default'               =>      __('Have questions or need help? Contact our support team at support@adamboureima.com or visit our Support Center.', 'theone'),
    'sanitize_callback'     =>      'sanitize_text_field',
]);
$wp_customize->add_control('footer_support_content', [
    'label'                 =>      __('Footer Support Content', 'theone'),
    'section'               =>      'footer_section',
    'type'                  =>      'textarea',
]);
