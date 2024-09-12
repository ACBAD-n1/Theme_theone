<?php 
/**
 * All Home Faq and others customizer function, for readability matter they are include from a separate files
 *
 * @package TheOne
 */

function theone_customize_register_add($wp_customize) {

    //
    //
    //
    // The Customize panal to customize the Landing page Home
    //
    //
    //
    $wp_customize->add_panel('theone_panel', [
        'title'         =>      __('TheOne Home Page'),
        'priority'      =>      10,
        'capability'    =>      'edit_theme_options'
    ]);


//** */
//** Nav Section */
//** */
include (get_template_directory() . '/inc/customizer/nav.php');

//** */
//** Hero Section */
//** */
include(get_template_directory() . '/inc/customizer/hero.php');

//** */
//** About Section */
//** */
include(get_template_directory() . '/inc/customizer/about.php');


//** */
//** Live Demo Section */
//** */
include(get_template_directory() . '/inc/customizer/demo.php');

//** */
//** Testimonials Section */
//** */
include(get_template_directory() . '/inc/customizer/testimonial.php');


//** */
//** CTA Section */
//** */
include(get_template_directory() . '/inc/customizer/cta.php');


//** */
//** Footer up Section */
//** */
include(get_template_directory() . '/inc/customizer/footer.php');


//** */
//** Faq up Section */
//** */
include(get_template_directory() . '/inc/customizer/faq_page.php');


}

