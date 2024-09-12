<?php
/**
 * The template for displaying page cart
 *
 * This is the template that displays page cart
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TheOne
 */

get_header('page');
?>

	<main id="primary" class="site-main">
		<div>
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

		endwhile; // End of the loop.
		?>
		</div>
	</main><!-- #main -->

	<!-- <div class="faq__space"></div> -->

<?php
get_footer();
