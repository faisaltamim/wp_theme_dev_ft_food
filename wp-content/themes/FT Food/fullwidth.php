<?php 
/*
Template Name:100% Width
*/
get_header() ?>
<!--////////////////////////////////////Container-->
<section id="container" class="sub-page">
	<div class="wrap-container zerogrid">
		<div class="crumbs">
			<ul>
				<li><a href="<?php site_url()?>">Home</a></li>
				<!-- <li><a href="archive.html">Blog</a></li> -->
			</ul>
		</div>
		<div id="main-content" class="col-3-3">
			<div class="wrap-content">
				<?php 
					while(have_posts()):
						the_post();
				?>

					<article>
						<?php the_content(); ?>
					</article>

				<?php endwhile;?>
			</div>
		</div>
		
	</div>
</section>
<?php get_footer() ?>
