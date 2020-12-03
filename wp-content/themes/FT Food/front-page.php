<?php 
/*
Template Name: Home Page
*/
get_header();

?>

<div class="zerogrid">
	<div class="callbacks_container">
		<ul class="rslides" id="slider4">
			<?php 
			$homeSlider = new WP_Query([
				'post_type'	=> 'home_slider',
			]);
			while($homeSlider->have_posts()):
				$homeSlider->the_post();
				?>
				<li>
					<?php the_post_thumbnail(); ?>
					<div class="caption">
						<h2><?php the_title(); ?></h2></br>
						<p><?php the_content();?></p>
					</div>
				</li>
			<?php endwhile;?>

		</ul>
	</div>
</div>

<!--////////////////////////////////////Container-->
<section id="container" class="index-page">
	<div class="wrap-container zerogrid">
		<!-----------------content-box-1-------------------->
		<section class="content-box box-1">
			<div class="zerogrid">
				<div class="row box-item"><!--Start Box-->
					<h2>“Your awesome company slogan goes here, we have the best food around”</h2>
					<span>Unc elementum lacus in gravida pellentesque urna dolor eleifend felis eleifend</span>
				</div>
			</div>
		</section>
		<!-----------------content-box-2-------------------->
			<section class="content-box box-2">
				<div class="zerogrid">
					<div class="row wrap-box"><!--Start Box-->
						<div class="header">
							<h2>Welcome</h2>
							<hr class="line">
							<span>text text text text text</span>
						</div>
						<div class="row">
							<?php 

							$featureFood = new WP_Query([
								'post_type' => "feature_food",
							]);

							while($featureFood->have_posts()):
								$featureFood->the_post();
								?>
								<div class="col-1-3">
									<div class="wrap-col">
										<div class="box-item">
											<span class="ribbon"><?php the_title();?><b></b></span>
											<?php the_post_thumbnail();?>
											<p><?php echo wp_trim_words( get_the_content(), 20,"....." ) ?></p>
											<a href="<?php the_permalink();?>" class="button button-1">Detail</a>
										</div>
									</div>
								</div>
							<?php endwhile;?>
						</div>
					</div>
				</div>
			</section>
	</div>
</section>

<?php

get_footer();
?>
<script>
	$(function () {
	  // Slideshow 4
	  $("#slider4").responsiveSlides({
	  	auto: true,
	  	pager: false,
	  	nav: false,
	  	speed: 500,
	  	namespace: "callbacks",
	  	before: function () {
	  		$('.events').append("<li>before event fired.</li>");
	  	},
	  	after: function () {
	  		$('.events').append("<li>after event fired.</li>");
	  	}
	  });
	});
</script>