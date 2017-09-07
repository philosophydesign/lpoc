<?php 

/* Template Name: Home Template */ 

get_header();
?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<section class="about_us">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="about_us__wrapper">
						<h2 class="title"><?=get_field('about_us_title')?></h2>
						<div class="copy">
							<p><?=get_field('about_us_text')?></p>
						</div>
						<a href="#" class="btn">Find out how</a>
					</div>
				</div>
			</div>
		</div>
	</section>


	<!-- TWO COLUMNS -->
	<section class="two_columns">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <h3 class="title card__title"></h3>
        </div>
        <div class="col-xs-12 col-sm-6">
          <div class="card__item">
            <a href="google.com"><img src="http://tgrade.mavdig.co.uk/wp-content/uploads/2017/07/two_columns_1.jpg" alt=""></a>
            <div class="card__content">
              <h3 class="title"><a href="#"><?=get_field('two_columns_1_title')?></a></h3>
              <div class="copy">
                <p><?=get_field('two_columns_1_text')?></p>
              </div>
              <a href="google.com" class="btn btn--external">Find out how</a>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6">
          <div class="card__item card__item--last">
            <a href=""><img src="http://tgrade.mavdig.co.uk/wp-content/uploads/2017/07/two_columns_2.jpg" alt=""></a>
            <div class="card__content">
              <h3 class="title"><a href=""><?=get_field('two_columns_2_title')?></a></h3>
              <div class="copy">
                <p><?=get_field('two_columns_2_text')?></p>
              </div>
              <a href="" class="btn btn--external">Find out how</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /TWO COLUMNS -->

  <!-- THREE COLUMNS -->
  <section class="three_columns">
    <div class="container">
    	<div class="row">
    		
        <div class="col-xs-12 col-sm-4">
          <div class="card__item card__item--first">
            <a href="#"><img src="http://tgrade.mavdig.co.uk/wp-content/uploads/2017/07/three_columns_1.jpg" alt=""></a>
            <div class="card__content">
              <h3 class="subtitle_bold"><a href="#"><?=get_field('three_column_1_title')?></a></h3>
            </div>
          </div>
        </div>
        
        <div class="col-xs-12 col-sm-4">
          <div class="card__item">
            <a href="#"><img src="http://tgrade.mavdig.co.uk/wp-content/uploads/2017/07/three_columns_2.jpg" alt=""></a>
            <div class="card__content">
              <h3 class="subtitle_bold"><a href="#"><?=get_field('three_column_2_title')?></a></h3>
            </div>
          </div>
        </div>

        <div class="col-xs-12 col-sm-4">
          <div class="card__item card__item--last">
            <a href="#"><img src="http://tgrade.mavdig.co.uk/wp-content/uploads/2017/07/three_columns_3.jpg" alt=""></a>
            <div class="card__content">
              <h3 class="subtitle_bold"><a href="#"><?=get_field('three_column_3_title')?></a></h3>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- /THREE COLUMNS --> 


  <!-- FOUR COLUMNS -->
  <section class="four_columns">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-3">
          <a href=""><img src="http://tgrade.mavdig.co.uk/wp-content/uploads/2017/07/column_image-img3.jpg" alt="" class="columns_image__image"></a>
          <h3 class="columns_image__title"><a href="">Column 1</a></h3>
          <div class="copy">
            <p>text goes here </p>
          </div>
        </div>
        <div class="col-xs-12 col-sm-3">
          <a href=""><img src="http://tgrade.mavdig.co.uk/wp-content/uploads/2017/07/column_image-img2.jpg" alt="" class="columns_image__image"></a>
          <h3 class="columns_image__title"><a href="">Column 2</a></h3>
          <div class="copy">
            <p>text goes here </p>
          </div>
        </div>
        <div class="col-xs-12 col-sm-3">
          <a href=""><img src="http://tgrade.mavdig.co.uk/wp-content/uploads/2017/07/column_image-img3.jpg" alt="" class="columns_image__image"></a>
          <h3 class="columns_image__title"><a href="">Column 3</a></h3>
          <div class="copy">
            <p>text goes here </p>
          </div>
        </div>
        <div class="col-xs-12 col-sm-3">
          <a href=""><img src="http://tgrade.mavdig.co.uk/wp-content/uploads/2017/07/column_image-img2.jpg" alt="" class="columns_image__image"></a>
          <h3 class="columns_image__title"><a href="">Column 4</a></h3>
          <div class="copy">
            <p>text goes here </p>
          </div>
        </div>
      </div>
    </div>
	</section>
	<!-- /FOUR COLUMNS -->


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



	<?php endwhile; ?>
	<?php endif; ?>

<?php get_footer(); ?>