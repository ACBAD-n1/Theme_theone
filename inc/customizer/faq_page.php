<?php 
/**
 * TheOne Theme Full Faq Customizer
 *
 * @package TheOne
 */

//** */
//** Faq up Section */
//** */
$wp_customize->add_section('theone_faq_page', [
    'title'                 =>      __('TheOne Faq Page', 'theone'),
    'priority'              =>      3,
    'capability'            =>      'edit_theme_options',
]);

// Faq Title
$wp_customize->add_setting('faq_title', [
    'type'                  =>      'theme_mod',
    'default'               =>      __('Frequently asked questions', 'theone'),
    'sanitize_callback'     =>      'sanitize_text_field',
]);
$wp_customize->add_control('faq_title', [
    'label'                 =>      __('Faq Title', 'theone'),
    'section'               =>      'theone_faq_page',
    'type'                  =>      'text',
]);

// Faq Tab 1 Title
$wp_customize->add_setting('faq_tab_1_title', [
    'type'                  =>      'theme_mod',
    'default'               =>      __('Do I need coding knowledge to use this theme?', 'theone'),
    'sanitize_callback'     =>      'sanitize_text_field',
]);
$wp_customize->add_control('faq_tab_1_title', [
    'label'                 =>      __('Faq Tab 1 Title', 'theone'),
    'section'               =>      'theone_faq_page',
    'type'                  =>      'text',
]);

//Faq TAb 1 Content
$wp_customize->add_setting('faq_tab_1_content', [
    'type'                  =>      'theme_mod',
    'default'               =>      __('No, our theme is 100% beginner-friendly with an intuitive interface and built-in customization options.', 'theone'),
    'sanitize_callback'     =>      'sanitize_text_field',
]);
$wp_customize->add_control('faq_tab_1_content', [
    'label'                 =>      __('Faq Tab 1 Content', 'theone'),
    'section'               =>      'theone_faq_page',
    'type'                  =>      'textarea',
]);

// Faq Tab 2 Title
$wp_customize->add_setting('faq_tab_2_title', [
    'type'                  =>      'theme_mod',
    'default'               =>      __('Is this theme compatible with WooCommerce?', 'theone'),
    'sanitize_callback'     =>      'sanitize_text_field',
]);
$wp_customize->add_control('faq_tab_2_title', [
    'label'                 =>      __('Faq Tab 2 Title', 'theone'),
    'section'               =>      'theone_faq_page',
    'type'                  =>      'text',
]);

//Faq TAb 2 Content
$wp_customize->add_setting('faq_tab_2_content', [
    'type'                  =>      'theme_mod',
    'default'               =>      __('Yes! It’s fully WooCommerce-ready, so you can set up your online store effortlessly.', 'theone'),
    'sanitize_callback'     =>      'sanitize_text_field',
]);
$wp_customize->add_control('faq_tab_2_content', [
    'label'                 =>      __('Faq Tab 2 Content', 'theone'),
    'section'               =>      'theone_faq_page',
    'type'                  =>      'textarea',
]);

// Faq Tab 3 Title
$wp_customize->add_setting('faq_tab_3_title', [
    'type'                  =>      'theme_mod',
    'default'               =>      __('Will I receive updates?', 'theone'),
    'sanitize_callback'     =>      'sanitize_text_field',
]);
$wp_customize->add_control('faq_tab_3_title', [
    'label'                 =>      __('Faq Tab 3 Title', 'theone'),
    'section'               =>      'theone_faq_page',
    'type'                  =>      'text',
]);

//Faq TAb 3 Content
$wp_customize->add_setting('faq_tab_3_content', [
    'type'                  =>      'theme_mod',
    'default'               =>      __('Absolutely! You’ll get regular updates to ensure the theme stays secure and compatible with the latest WordPress versions.', 'theone'),
    'sanitize_callback'     =>      'sanitize_text_field',
]);
$wp_customize->add_control('faq_tab_3_content', [
    'label'                 =>      __('Faq Tab 3 Content', 'theone'),
    'section'               =>      'theone_faq_page',
    'type'                  =>      'textarea',
]);