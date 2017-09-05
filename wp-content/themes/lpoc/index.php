<?php get_header(); ?>

<div class="container">

	<?php while ( have_posts() ) : the_post();?>

		<?php echo get_template('templates/'); ?>

	<?php endwhile; ?>

</div>
<?php get_footer(); ?>