<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TheOne
 */

?>


<!-- Footer Section: Provides additional information about the theme and support options -->
<footer class="footer">

    <!-- Footer Content: Contains theme description and support information -->
    <div class="footer__content">

        <!-- About the Theme: Brief description of the theme's purpose and features -->
        <div class="footer__content-about" data-aos="fade-right" data-aos-duration="2500">
            <h3><?php echo esc_html(get_theme_mod('footer_about_title', 'About the Theme')); ?></h3>
            <p>
                <?php  
                    echo esc_html(get_theme_mod('footer_about_content', 'Our custom WordPress theme is designed to help online sellers create
                                    beautiful, high-converting stores. Built from scratch, it\'s optimized for
                                    performance, customization, and seamless integration with
                                    WooCommerce.'));

                ?>
            </p>
        </div>

        <!-- Support Information: Contact details and support options for customers -->
        <div class="footer__content-support" data-aos="fade-left" data-aos-duration="3500">
            <h3><?php echo esc_html(get_theme_mod('footer_support_title', 'Support')); ?></h3>
            <p>
                <?php  
                    echo esc_html(get_theme_mod('footer_support_content', ' Have questions or need help? Contact our support team at
                                                support@adamboureima.com or visit our Support Center.'));

                ?>
            </p>
        </div>

    </div> <!-- End of Footer Content -->

    <!-- Footer Bottom Section: Contains copyright notice and accepted payment icons -->
    <div class="footer__foot">

        <!-- Copyright Notice: Displays the ownership and year of the theme -->
        <div class="footer__foot-copy">

			<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://adamboureima.com/', 'theone' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( '© 2024 Adam Boureima. All rights reserved.', 'theone' ) );
				?>
			</a>
		</div><!-- .site-info -->

        </div>

        <!-- Payment Icons: Indicates the types of payment methods accepted -->
        <div class="footer__foot-cards">
            <span>
                <i class="bi bi-card-heading"></i>
                <i class="bi bi-credit-card-fill"></i>
                <i class="bi bi-credit-card"></i>
                <i class="bi bi-credit-card-2-front-fill"></i>
            </span>
        </div>

    </div> <!-- End of Footer Bottom Section -->
</footer> <!-- End of Footer Section -->


<?php wp_footer(); ?>

</body>
</html>