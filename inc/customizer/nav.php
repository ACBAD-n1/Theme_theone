<?php 
/**
 * TheOne Theme Nav Customizer
 *
 * @package TheOne
 */

//** */
//** Nav Section */
//** */

$wp_customize->add_section('theone_nav_section', [
    'title'                 =>      __('Header Nav CTA Button'),
    'priority'              =>      5,
    'capability'            =>      'edit_theme_options',
]);

// MAke the Header Nav Button Fully Customizable
$wp_customize->add_setting('nav_button', [
    'type'                  =>      'theme_mod',
    'default'               =>      __('Buy Now', 'theone'),
    'sanitize_callback'     =>      'sanitize_text_field',
]);
$wp_customize->add_control('nav_button', [
    'label'                 =>      __('Nav CTA Button', 'theone'),
    'section'               =>      'theone_nav_section',
    'setting'              =>      'theone_nav_button',
    'type'                  =>      'text'
]);

// Add URL TO the Nav Button
// $wp_customize->add_setting('nav_button_url', [
//     'type'                  =>      'theme_mod',
//     'default'               =>      '#',
//     'sanitize_callback'     =>      'esc_url_raw'
// ]);
// $wp_customize->add_control('nav_button_url', [
//     'label'                 =>      __('Nav Button URL', 'theone'),
//     'section'               =>      'theone_nav_section',
//     'setting'               =>      'nav_button_url',
//     'type'                  =>      'url'
// ]);
