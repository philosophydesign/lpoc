<?php 

/* Template Name: About Template */ 

get_header();

$args = array( 'post_type' => 'experts', 'posts_per_page' => 10 );
$loop = new WP_Query( $args );


?>
	
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
	<h1><?php the_title() ?></h1>

	<!-- FULL TEXT -->
	<section class="full_text">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <h3 class="title"><?=get_field('summary')?></h3>
        </div>
        <div class="col-xs-12 col-sm-6">
          <div class="copy">
            <?=get_field('column_1_text')?>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 full_text--second_column">
          <div class="copy">
            <?=get_field('column_2_text')?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /FULL TEXT -->

  <!-- FEATURED IMAGE -->
  <section class="featured_image">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <img src="http://tgrade.mavdig.co.uk/wp-content/themes/tgrade/assets/img/image.jpg" alt="">
        </div>
      </div>
    </div>
  </section>
  <!-- /FEATURED IMAGE -->


  <!-- THREE COLUMNS CAROUSEL-->
  <section class="three_columns_carousel">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <h3 class="title card__title">Meet the experts</h3>
          <div class="copy">
            <p>Meet our team dedicated to help members get the most from their homes by providing details advice, information and support for just about every conceivable issue associated with ownership.</p>
          </div>
        </div>


        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>



        <div class="col-xs-12 col-sm-4">
          <div class="card__item card__item--first">
            <a href="#"><img src="http://tgrade.mavdig.co.uk/wp-content/themes/tgrade/assets/img/three_columns_1.jpg" alt=""></a>
            <div class="card__content">
              <h3 class="subtitle_bold"><a href="#"><?=the_title()?></a></h3>
              <div class="copy">
                <p><?=get_field('expert_description')?></p>
              </div>
            </div>
          </div>
        </div>


      	<?php endwhile; ?>

      </div>
    </div>
  </section>
  <!-- /THREE COLUMNS CAROUSEL-->


	

	<?php endwhile; ?>
	<?php endif; ?>


<?php get_footer(); ?>

