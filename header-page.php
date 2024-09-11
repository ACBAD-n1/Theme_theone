<?php
/**
 * The header for our Page
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TheOne
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta <?php bloginfo('charset') ?>>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>
<body <?php body_class() ?>>


    <header class="header">
        
        <!-- Navigation Bar -->
        <nav>
            <div class="nav-container">
                <!-- Brand/Logo -->
                <div class="nav-logo">
                    <?php 
                        if ( function_exists( 'the_custom_logo' ) && has_custom_logo()) {
                            the_custom_logo();
                        } else {
                    ?>
                        <a href="<?php echo home_url(); ?>">
                            <img src="<?php echo get_template_directory_uri() . '/assets/img/logo.png' ?>" alt="">
                        </a>

                    <?php } ?>
                </div>

                <!-- Mobile Menu Icon -->
                <div class="mobile-menu-icon" onclick="toggleMenu()">
                    &#9776; <!-- Hamburger icon -->
                </div>

                <!-- Navigation Menu -->

                <div class="all-navigation-items">

                <?php 
                    wp_nav_menu([
                        'theme_location'    =>  'primary',
                        'container'         =>  'div', // Change container to 'ul' to match your HTML structure
                        'container_class'   =>  'nav-container', // Add the 'nav-menu' class to the <ul>
                        'menu_class'        =>  'nav-menu', // Add the 'nav-menu' class to the menu items
                    ]);
                ?>
                
                <button id="bay__btn" class="btn__black"><a href="<?php echo esc_url( add_query_arg( 'add-to-cart', 23, home_url() ) ); ?>"><i class="bi bi-bag-fill"></i><?php echo esc_html(get_theme_mod('nav_button', 'Bay Now')); ?> </a></button>
                </div>
            </div>
        </nav>

    </header>