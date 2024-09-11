<?php 

//** */
//** Testimonials Section */
//** */
$wp_customize->add_section('testimonial_section', [
    'title'                 =>      __('Customize Testimonial'),
    'priority'              =>      4,
    'capability'            =>      'edit_theme_options',
    'panel'                 =>      'theone_panel',
]);


// Testimonial Title top
$wp_customize->add_setting('testimonial_title_top', [
    'type'                  =>      'theme_mod',
    'default'               =>      __('Trusted by Online', 'theone'),
    'sanitize_callback'     =>      'sanitize_text_field',
]);
$wp_customize->add_control('testimonial_title_top', [
    'label'                 =>      __('The First Part of the Title'),
    'section'               =>      'testimonial_section',
    'type'                  =>      'text'
]);

// Testimonial Title Bottom
$wp_customize->add_setting('testimonial_title_bottom', [
    'type'                  =>      'theme_mod',
    'default'               =>      __('Sellers Everywhere', 'theone'),
    'sanitize_callback'     =>      'sanitize_text_field',
]);
$wp_customize->add_control('testimonial_title_bottom', [
    'label'                 =>      __('The Second Part of the Title'),
    'section'               =>      'testimonial_section',
    'type'                  =>      'text'
]);

//
// Testimonial 1 Content 
$wp_customize->add_setting('testimonial_1_content', [
    'type'                  =>      'theme_mod',
    'default'               =>      __('"This theme completely transformed
                                        my online store. The customization
                                        options allowed me to tailor it
                                        exactly to my brand, and my sales
                                        have doubled!"', 'theone'),
    'sanitize_callback'     =>      'sanitize_text_field',
]);
$wp_customize->add_control('testimonial_1_content', [
    'label'                 =>      __('Testimonial 1 Content', 'theone'),
    'section'               =>      'testimonial_section',
    'type'                  =>      'textarea',
]);

// Testimonial author name
$wp_customize->add_setting('testimonial_1_name', [
    'type'                  =>      'theme_mod',
    'default'               =>      __('Jane, Owner of', 'theone'),
    'sanitize_callback'     =>      'sanitize_text_field',
]);
$wp_customize->add_control('testimonial_1_name', [
    'label'                 =>      __('Author Name', 'theone'),
    'section'               =>      'testimonial_section',
    'type'                  =>      'text',
]);

// Testimonial author Link
$wp_customize->add_setting('testimonial_1_link', [
    'type'                  =>      'theme_mod',
    'default'               =>      __('TheFashionSpot.com', 'theone'),
    'sanitize_callback'     =>      'sanitize_text_field',
]);
$wp_customize->add_control('testimonial_1_link', [
    'label'                 =>      __('Author Link', 'theone'),
    'section'               =>      'testimonial_section',
    'type'                  =>      'text',
]);

//
// Testimonial 2 Content 
$wp_customize->add_setting('testimonial_2_content', [
    'type'                  =>      'theme_mod',
    'default'               =>      __('"This theme completely transformed
                                        my online store. The customization
                                        options allowed me to tailor it
                                        exactly to my brand, and my sales
                                        have doubled!"', 'theone'),
    'sanitize_callback'     =>      'sanitize_text_field',
]);
$wp_customize->add_control('testimonial_2_content', [
    'label'                 =>      __('Testimonial 2 Content', 'theone'),
    'section'               =>      'testimonial_section',
    'type'                  =>      'textarea',
]);

// Testimonial author name
$wp_customize->add_setting('testimonial_2_name', [
    'type'                  =>      'theme_mod',
    'default'               =>      __('Jane, Owner of', 'theone'),
    'sanitize_callback'     =>      'sanitize_text_field',
]);
$wp_customize->add_control('testimonial_2_name', [
    'label'                 =>      __('Author Name', 'theone'),
    'section'               =>      'testimonial_section',
    'type'                  =>      'text',
]);

// Testimonial author Link
$wp_customize->add_setting('testimonial_2_link', [
    'type'                  =>      'theme_mod',
    'default'               =>      __('TheFashionSpot.com', 'theone'),
    'sanitize_callback'     =>      'sanitize_text_field',
]);
$wp_customize->add_control('testimonial_2_link', [
    'label'                 =>      __('Author Link', 'theone'),
    'section'               =>      'testimonial_section',
    'type'                  =>      'text',
]);

//
// Testimonial 3 Content 
$wp_customize->add_setting('testimonial_3_content', [
    'type'                  =>      'theme_mod',
    'default'               =>      __('"This theme completely transformed
                                        my online store. The customization
                                        options allowed me to tailor it
                                        exactly to my brand, and my sales
                                        have doubled!"', 'theone'),
    'sanitize_callback'     =>      'sanitize_text_field',
]);
$wp_customize->add_control('testimonial_3_content', [
    'label'                 =>      __('Testimonial 3 Content', 'theone'),
    'section'               =>      'testimonial_section',
    'type'                  =>      'textarea',
]);

// Testimonial author name
$wp_customize->add_setting('testimonial_3_name', [
    'type'                  =>      'theme_mod',
    'default'               =>      __('Jane, Owner of', 'theone'),
    'sanitize_callback'     =>      'sanitize_text_field',
]);
$wp_customize->add_control('testimonial_3_name', [
    'label'                 =>      __('Author Name', 'theone'),
    'section'               =>      'testimonial_section',
    'type'                  =>      'text',
]);

// Testimonial author Link
$wp_customize->add_setting('testimonial_3_link', [
    'type'                  =>      'theme_mod',
    'default'               =>      __('TheFashionSpot.com', 'theone'),
    'sanitize_callback'     =>      'sanitize_text_field',
]);
$wp_customize->add_control('testimonial_3_link', [
    'label'                 =>      __('Author Link', 'theone'),
    'section'               =>      'testimonial_section',
    'type'                  =>      'text',
]);

//
// Settings and Controls for Star Ratings (out of 5 stars) for each testimonial
$wp_customize->add_setting('testimonial_1_stars', [
    'type'                  => 'theme_mod',
    'default'               => 5, 
    'sanitize_callback'     => 'absint',
]);
$wp_customize->add_control('testimonial_1_stars', [
    'label'                 => __('Testimonial 1 Stars (out of 5)', 'theone'),
    'section'               => 'testimonial_section',
    'type'                  => 'number',
    'input_attrs'           => ['min' => 1, 'max' => 5],
]);

$wp_customize->add_setting('testimonial_2_stars', [
    'type'                  => 'theme_mod',
    'default'               => 5, 
    'sanitize_callback'     => 'absint',
]);
$wp_customize->add_control('testimonial_2_stars', [
    'label'                 => __('Testimonial 2 Stars (out of 5)', 'theone'),
    'section'               => 'testimonial_section',
    'type'                  => 'number',
    'input_attrs'           => ['min' => 1, 'max' => 5],
]);

$wp_customize->add_setting('testimonial_3_stars', [
    'type'                  => 'theme_mod',
    'default'               => 5, 
    'sanitize_callback'     => 'absint',
]);
$wp_customize->add_control('testimonial_3_stars', [
    'label'                 => __('Testimonial 3 Stars (out of 5)', 'theone'),
    'section'               => 'testimonial_section',
    'type'                  => 'number',
    'input_attrs'           => ['min' => 1, 'max' => 5],
]);
