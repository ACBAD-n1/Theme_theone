<?php
/**
 * The template for the Faq page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TheOne
 */

get_header('page');
?>

<main id="primary" class="site-main">

<!-- FAQ Section: Displays common questions and answers regarding the theme -->
<div class="faq">

    <!-- FAQ Section Heading -->
    <h1><?php echo esc_html(get_theme_mod('faq_title', 'Frequently asked questions')) ?></h2>

    <!-- FAQ Item 1: Coding knowledge requirement -->
    <div class="faq__tab" data-aos="fade-up" data-aos-duration="1500">
        <!-- Accordion Radio Button for toggling the answer -->
        <input type="radio" name="acc" id="acc1">
        <!-- Question Label: Displays the question -->
        <label for="acc1">
            <span>01</span>
            <h3><?php echo esc_html(get_theme_mod('faq_tab_1_title', 'Do I need coding knowledge to use this theme?')) ?></h3>
        </label>
        <!-- Answer Content: Provides the answer when toggled -->
        <div class="content">
            <p>
                <?php 
                    echo esc_html(get_theme_mod('faq_tab_1_content', 'No, our theme is 100% beginner-friendly with 
                                  an intuitive interface and built-in customization options.'));
                
                ?>
            </p>
        </div>
    </div>

    <!-- FAQ Item 2: WooCommerce compatibility -->
    <div class="faq__tab" data-aos="fade-up" data-aos-duration="2000">
        <!-- Accordion Radio Button for toggling the answer -->
        <input type="radio" name="acc" id="acc2">
        <!-- Question Label: Displays the question -->
        <label for="acc2">
            <span>02</span>
            <h3><?php echo esc_html(get_theme_mod('faq_tab_2_title', 'Is this theme compatible with WooCommerce?')); ?></h3>
        </label>
        <!-- Answer Content: Provides the answer when toggled -->
        <div class="content">
            <p>
                <?php 
                    echo esc_html(get_theme_mod('faq_tab_2_content', 'Yes! It\'s fully WooCommerce-ready, so you can set up your online store effortlessly.'));
                ?>
            </p>
        </div>
    </div>

    <!-- FAQ Item 3: Theme updates -->
    <div class="faq__tab" data-aos="fade-up" data-aos-duration="2500">
        <!-- Accordion Radio Button for toggling the answer -->
        <input type="radio" name="acc" id="acc3">
        <!-- Question Label: Displays the question -->
        <label for="acc3">
            <span>03</span>
            <h3><?php echo esc_html(get_theme_mod('faq_tab_3_title', 'Will I receive updates?')) ?></h3>
        </label>
        <!-- Answer Content: Provides the answer when toggled -->
        <div class="content">
            <p>
                <?php  
                    echo esc_html(get_theme_mod('faq_tab_3_content', ' Absolutely! You’ll get regular updates to ensure 
                                the theme stays secure and compatible with the latest WordPress versions.'));
                ?>
            </p>
        </div>
    </div>

</div>

</main>

<!-- FAQ Spacer: Provides additional space below the FAQ section -->
<!-- <div class="faq__space"></div> -->

<?php
get_footer();
?>