<?php
/**
 * The template for displaying all pages
 *
 */

get_header(); ?>


	<?php
		while ( have_posts() ) : the_post();

		//get_template_part('templates');

		endwhile; // End of the loop.
	?>

<?php get_footer();