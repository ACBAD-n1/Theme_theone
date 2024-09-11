<?php 

get_header(); 

$path = get_template_directory_uri();

?>


   <!-- Hero section: Main call-to-action area of the landing page -->
    <div class="hero">

        <!-- Hero content: Text section including the heading, description, and CTA button -->
        <div class="hero__content" data-aos="fade-right" data-aos-duration="2000">
            
            <!-- Main heading: Introduces the product with a focus on boosting sales -->
            <h1>
                <span><?php echo esc_html(get_theme_mod('hero_title_span', __('Boost Your Online Sales', 'theone'))); ?></span><br>
                <?php echo esc_html(get_theme_mod('hero_title', __('With the Ultimate WordPress Theme!', 'theone'))); ?>
            </h1>


            <!-- Description: Provides more details about the theme's performance and conversion benefits -->
            <p>
                <?Php 
                    echo esc_html(
                        get_theme_mod('hero_content',
                         'Crafted for Performance, Built for Conversions – Sell 
                          Products Effortlessly with Our Customizable and 
                          Responsive Theme.')
                    );
                ?>
                
            </p>

            <!-- Call-to-action button: Prompts users to get started with the product -->
            <button class="btn__black animate__animated animate__backInUp animate__delay-2s">
                <a href="<?php echo get_theme_mod('hero_button_url', '#') ?>"><?php echo esc_html(get_theme_mod('hero_button', 'Get Started Now')) ?></a>
            </button>
        </div>

        <!-- Hero image: Visual representation or branding element to accompany the text -->
        <div class="hero__image">
            <?php 
            $hero_image_url = get_theme_mod('hero_image');  // Get the URL of the uploaded image
            if ($hero_image_url) {
                // If the user uploaded an image, display it
                echo '<img src="' . esc_url($hero_image_url) . '" alt="Hero Image">';
            } else {
                // Default image if no image is uploaded
                echo '<img src="' . esc_url($path . '/assets/img/hero.png') . '" alt="Hero Image">';
            }
            ?>
        </div>

    </div>


<!-- Benefits section: Showcases the advantages of using the WordPress theme -->
<div class="benefits">

    <!-- Section heading: Introduces the benefits of the WordPress theme -->
    <h2 data-aos="fade-right" data-aos-duration="1500">
        <?php echo esc_html(get_theme_mod('about_title', 'Why Choose Our WordPress Theme?')); ?>
    </h2>

    <!-- Benefits List 1: Highlights key features of the theme -->
    <div class="benefits__list-1">
        
        <!-- Card 1: Optimized for sales conversion, with clean layouts and fast performance -->
        <div class="benefits__list-1--card" data-aos="fade-up">
            <h3><?php echo esc_html(get_theme_mod('card_1_title', 'Optimized for Sales')); ?></h3>
            <p>
                <?php echo esc_html(get_theme_mod('card_1_content', '
                                                    Our theme is designed to help you convert visitors 
                                                    into customers with high-speed performance, 
                                                    clean layouts, and optimized user journeys.
                ')); 
                ?>   
            </p>
        </div>

        <!-- Card 2: Fully customizable, no coding required to adjust the design and functionality -->
        <div class="benefits__list-1--card" data-aos="fade-up">
            <h3><?php echo esc_html(get_theme_mod('card_2_title', 'Fully Customizable')); ?></h3>
            <p>
                <?php echo esc_html(get_theme_mod('card_2_content', '
                                            With easy-to-use options, tweak the design, layout, 
                                            and functionality to perfectly suit your brand without 
                                            touching a single line of code.
                ')); 
                ?>
            </p>
        </div>

        <!-- Card 3: Mobile-responsive, ensuring an optimized shopping experience on all devices -->
        <div class="benefits__list-1--card" data-aos="fade-up">
            <h3><?php echo esc_html(get_theme_mod('card_3_title', 'Mobile-Responsive')); ?></h3>
            <p>
                <?php echo esc_html(get_theme_mod('card_3_content', '
                                                    Deliver a flawless shopping experience on all devices, 
                                                    from desktops to smartphones, ensuring maximum engagement 
                                                    wherever your customers are.
                ')); 
                ?>
            </p>
        </div>
    </div> <!-- End of Benefits List 1 -->

    <!-- Benefits Image: Adds a visual element to the section -->
    <div class="benefits__image">
        <?php 
          
        $about_image_url = get_theme_mod('about_image');

        if($about_image_url) {
            echo '<img src="' . esc_url($about_image_url) . '" alt="" >';
        } else { ?>
            <img src="<?php echo esc_url( $path . '/assets/img/benefites.png') ?>" alt="">
        <?php } 

        ?>
    </div>

    <!-- Benefits List 2: Additional features that enhance the theme's value -->
    <div class="benefits__list-2">

        <!-- Card 4: SEO-friendly design, helping users rank higher on search engines -->
        <div class="benefits__list-2--card" data-aos="fade-up" data-aos-duration="2000">
            <h3><?php echo esc_html(get_theme_mod('card_4_title', 'SEO-Friendly')); ?></h3>
            <p>
                <?php echo esc_html(get_theme_mod('card_3_content', '
                                                    Built with SEO best practices in mind, get better rankings 
                                                    and attract organic traffic with a theme that Google loves.
                ')); 
                ?>
            </p>
        </div>

        <!-- Card 5: WooCommerce-ready, allowing users to easily set up an eCommerce store -->
        <div class="benefits__list-2--card" data-aos="fade-up" data-aos-duration="2000">
            <h3><?php echo esc_html(get_theme_mod('card_5_title', 'WooCommerce Ready')); ?></h3>
            <p>
                <?php echo esc_html(get_theme_mod('card_3_content', '
                                                    Seamlessly integrated with WooCommerce, giving you full control 
                                                    to create your ideal eCommerce store.
                ')); 
                ?>
            </p>
        </div>
        
    </div> <!-- End of Benefits List 2 -->

</div> <!-- End of Benefits section -->

   
<!-- Demo Section: Allows users to preview the theme in real-time -->
<div class="demo">

    <!-- Demo Image: Displays a visual representation of the theme -->
    <div class="demo__image">
        <?php 
        $demo_image_url = get_theme_mod('demo_image');

        if($demo_image_url) {
            echo '<img src="' . esc_url($demo_image_url) . '" alt="" >';
        } else { ?>
                <img src="<?php echo esc_url($path . '/assets/img/Demo-section.png'); ?>" alt="">
        <?php } ?>

    </div>

    <!-- Demo Content: Provides information and call-to-action for viewing the live demo -->
    <div class="demo__content" data-aos="fade-left" data-aos-duration="3000">
        <!-- Section Heading: Encourages users to explore the theme's functionality -->
        <h2><?php echo esc_html(get_theme_mod('demo_title', 'See It in Action')); ?></h2>

        <!-- Description: Highlights the key benefits of the live demo, such as fluid design, fast loading, and easy navigation -->
        <p>
            <?php 
                echo esc_html(get_theme_mod('demo_content', 'Preview our theme in real-time and explore its features. 
                                                             Experience the fluid design, fast loading times, and intuitive navigation 
                                                             that will set your online store apart.'
                ));
            ?>
        </p>

        <!-- Button: Leads users to the live demo of the theme -->
         <?php 
            $demo_button = get_theme_mod('demo_button', 'View Live Demo');

            if($demo_button) { ?>

                <button class="btn__black animate__animated animate__backInUp animate__delay-3s">
                    <a href="<?php echo esc_url(get_theme_mod('demo_button_url', '#')); ?>"><?php echo esc_html(get_theme_mod('demo_button', 'View Live Demo')); ?></a>
                </button>

            <?php } else{ ?>
                    <button class="btn__black animate__animated animate__backInUp animate__delay-3s">
                        <a href="#">View Live Demo</a>
                    </button>
            <?php } ?>
    </div>
    
</div> <!-- End of Demo Section -->

    

    <!-- Testimonials Section: Showcasing customer feedback to build trust with potential buyers -->
<div class="testimonials">
    
    <!-- Section Heading: Highlights the trust and reliability of the theme based on user feedback -->
    <h2><?php echo esc_html(get_theme_mod('testimonial_title_top', 'Trusted by Online')) ?> <br><?php echo esc_html(get_theme_mod('testimonial_title_bottom', 'Sellers Everywhere')) ?></h2>

    <div class="testimonials__content">
        
        <!-- Testimonial Card 1: Displays feedback from a satisfied customer (Jane, TheFashionSpot.com) -->
        <div class="testimonials__content-card" data-aos="fade-right" data-aos-duration="2500">
            <!-- Quotation Mark Icon: Visually emphasizes the testimonial -->
            <span class="testimonials__content-card--quote"><i class="bi bi-quote"></i></span>

            <!-- Testimonial Text: Customer feedback about the theme's impact on sales and customization -->
            <p>
                <?php 
                    echo esc_html(get_theme_mod('testimonial_1_content', '"This theme completely transformed
                                                my online store. The customization
                                                options allowed me to tailor it
                                                exactly to my brand, and my sales
                                                have doubled!"'));

                ?>
            </p>

            <!-- Customer Name and Website: Adds authenticity to the testimonial -->
            <h4><?php echo esc_html(get_theme_mod('testimonial_1_name', 'Jane, Owner of')) ?>  <br><?php echo esc_html(get_theme_mod('testimonial_1_link', 'TheFashionSpot.com')) ?> </h4>

            <!-- Star Rating: Visual representation of the customer's satisfaction -->
             <?php 
                $testimonial_1_stars = get_theme_mod('testimonial_1_stars', 5);
             ?>
            <span class="testimonials__content-card--stars">
                <?php  
                    for($i = 0; $i < $testimonial_1_stars; $i++ ) {
                        ?>
                            <i class="bi bi-star-fill"></i>
                        <?php
                    }
                ?>
            </span>
        </div>

        <!-- Testimonial Card 2: Displays feedback from a different customer (Mike, TechGadgetsStore) -->
        <div class="testimonials__content-card" data-aos="fade-up" data-aos-duration="3500">
            <!-- Quotation Mark Icon: Visually emphasizes the testimonial -->
            <span class="testimonials__content-card--quote"><i class="bi bi-quote"></i></span>

            <!-- Testimonial Text: Customer feedback about ease of use and SEO benefits -->
            <p>
                <?php 
                    echo esc_html(get_theme_mod('testimonial_2_content', '"I have never used a theme so easy to set up. 
                                                Within hours, my store was live, and the 
                                                built-in SEO features helped 
                                                me rank higher in search engines."'));

                ?>
            </p>

            <!-- Customer Name and Website: Adds authenticity to the testimonial -->
            <h4><?php echo esc_html(get_theme_mod('testimonial_2_name', 'Mike, Founder of')); ?> <br><?php echo esc_html(get_theme_mod('testimonial_2_link', 'TechGadgetsStore')); ?></h4>

            <!-- Star Rating: Visual representation of the customer's satisfaction -->
            <?php 
                $testimonial_2_stars = get_theme_mod('testimonial_2_stars', 5);
             ?>
            <span class="testimonials__content-card--stars">
                <?php  
                    for($i = 0; $i < $testimonial_2_stars; $i++ ) {
                        ?>
                            <i class="bi bi-star-fill"></i>
                        <?php
                    }
                ?>
            </span>
        </div>

        <!-- Testimonial Card 3: Repeats the feedback from Jane for symmetry and layout purposes -->
        <div class="testimonials__content-card" data-aos="fade-left" data-aos-duration="2500">
            <!-- Quotation Mark Icon: Visually emphasizes the testimonial -->
            <span class="testimonials__content-card--quote"><i class="bi bi-quote"></i></span>

            <!-- Testimonial Text: Customer feedback about theme's impact on sales and customization -->
            <p>
                <?php 
                    echo esc_html(get_theme_mod('testimonial_3_content', '"This theme completely transformed
                                                my online store. The customization
                                                options allowed me to tailor it
                                                exactly to my brand, and my sales
                                                have doubled!"'));

                ?> 
            </p>

            <!-- Customer Name and Website: Adds authenticity to the testimonial -->
            <h4><?php echo esc_html(get_theme_mod('testimonial_3_name', 'Jane, Owner of')) ?> <br><?php echo esc_html(get_theme_mod('testimonial_3_link', 'TheFashionSpot.com')) ?> </h4>

            <!-- Star Rating: Visual representation of the customer's satisfaction -->
            <?php 
                $testimonial_3_stars = get_theme_mod('testimonial_3_stars', 5);
             ?>
            <span class="testimonials__content-card--stars">
                <?php  
                    for($i = 0; $i < $testimonial_3_stars; $i++ ) {
                        ?>
                            <i class="bi bi-star-fill"></i>
                        <?php
                    }
                ?>
            </span>
        </div>

    </div>
</div> <!-- End of Testimonials Section -->


<!-- Call-to-Action Section: Encourages users to take immediate action (purchase the theme) -->
<div class="cta">

    <!-- CTA Content Wrapper: Groups the image and text for the call-to-action -->
    <div class="cta__content">

        <!-- CTA Image: Visual element to support the call-to-action message -->
        <div class="cta__content-image">
            <?php 
            $cta_image_url = get_theme_mod('cta_image');

            if($cta_image_url) {
                echo '<img src="' . esc_url($cta_image_url) . '" alt="" >';
            } else { ?>
                    <img src="<?php echo esc_url($path . '/assets/img/call-to-action.png'); ?>" alt="">
          <?php  }
            ?>
        </div>

        <!-- CTA Text: Compelling message to encourage users to make a purchase -->
        <div class="cta__content-text" data-aos="fade-left" data-aos-duration="2500">
            
            <!-- Headline: Strong and persuasive heading to draw attention -->
            <h2><?php echo esc_html(get_theme_mod('cta_title', 'Ready to Skyrocket Your Sales?')) ?></php></h2>
            
            <!-- Description: Brief text explaining the benefits and encouraging users to act -->
            <p>
                <?php  
                    echo esc_html(get_theme_mod('cta_content', ' Get the perfect solution for your ecommerce store today. 
                                                Enjoy seamless functionality, fast performance, and top-tier support.'));

                ?>
            </p>

            <!-- CTA Button: Directs the user to make a purchase -->
            <button class="btn__black"><a href="<?php echo esc_url( add_query_arg( 'add-to-cart', 23, home_url() ) ); ?>"><?php echo esc_html(get_theme_mod('cta_button', 'Buy Now')) ?></php> </a></button>
        </div> <!-- End of CTA Text -->
    </div> <!-- End of CTA Content -->
</div> <!-- End of Call-to-Action Section -->


<?php get_footer(); ?>
