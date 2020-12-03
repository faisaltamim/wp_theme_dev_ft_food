
<?php get_header() ?>
<!--////////////////////////////////////Container-->
<section id="container" class="sub-page">
	<div class="wrap-container zerogrid">
		<div class="crumbs">
			<ul>
				<li><a href="<?php echo site_url()?>">Home</a></li>
				<li><a href=""><?php 

				$secondUrl = explode('/',$_SERVER['REQUEST_URI']); 
				echo ucfirst($secondUrl[4]);

				?></a></li>
			</ul>
		</div>
		<div id="main-content" class="col-2-3">
			<div class="wrap-content">
				<?php 
					while(have_posts()):
						the_post();
				?>

					<article>
						<?php the_content();?>
					</article>

				<?php endwhile;?>
			</div>
		</div>
		<?php get_sidebar()?>
	</div>
</section>
<?php get_footer() ?>
