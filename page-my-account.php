<?php
/**
 * The template for displaying The Account 
 *
 * This is the template that displays my account page.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TheOne
 */

get_header();
?>

	<main id="primary" class="site-main account">
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

		endwhile; // End of the loop.
		?>
	</main><!-- #main -->

	<!-- <div class="faq__space"></div> -->
<?php
get_footer();
