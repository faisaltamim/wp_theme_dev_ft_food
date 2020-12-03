
<?php get_header() ?>
<!--////////////////////////////////////Container-->
<section id="container" class="sub-page">
	<div class="wrap-container zerogrid">
		<div class="crumbs">
			<ul>
				<li><a href="<?php site_url()?>">Home</a></li>
				<!-- <li><a href="archive.html">Blog</a></li> -->
			</ul>
		</div>
		<div id="main-content" class="col-2-3">
			<div class="wrap-content">
				<?php 
					while(have_posts()):
						the_post();
				?>

					<article>
						<div class="art-header">
							<a href=""><h3><?php the_title(); ?></h3></a>
							<span><?php the_field('pstitle')?></span>
							<div class="info">Posted on<?php the_time( 'd/M/Y' ) ?> in: <a href=""><?php the_tags(','); ?></a></div>
						</div>
						<div class="art-content">
							<?php the_post_thumbnail();?>
							<p><?php echo wp_trim_words( get_the_content(), 30,"....." ) ?></p>
						</div>
						<a class="button button02" href="<?php the_permalink()?>">Read More</a>
					</article>

				<?php endwhile;?>
			</div>
		</div>
		<?php get_sidebar()?>
	</div>
</section>
<?php get_footer() ?>
