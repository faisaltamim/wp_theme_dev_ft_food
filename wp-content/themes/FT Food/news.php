<?php 
/*
	Template Name: News Page

*/
	get_header();

?>
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
					$newsQuery =new WP_Query([
						'post'				=> 'post',
						'category_name' 	=> 'news',
						'posts_per_page' 	=> 1,
					]);
					while($newsQuery->have_posts()):
						$newsQuery->the_post();
				?>
				<article>
					<div class="art-header">
						<div class="entry-title"> 
							<h2><?php the_title(); ?></h2>
						</div>
						<div class="info">By <a href="#">Danny</a> on <?php the_time('d-m-Y');?></div>
					</div>
					<div class="art-content">
						<?php the_content();?>
					</div>
				</article>
				<?php 
					endwhile;
				?>
				<div class="widget wid-related">
					<div class="wrap-col">
						<div class="wid-header">
							<h5>Related Post</h5>
						</div>
						<div class="wid-content">
							<div class="row">
								<?php
								$suggestPost = new WP_Query([
									'post'			=> 'post',
									'category_name'	=> 'news',
									'posts_per_page'=> 3,
									'offset'		=> 1,

								]);

								while($suggestPost->have_posts()):
										$suggestPost ->the_post();
									?>

									<div class="col-1-3">
										<div class="wrap-col">
											<a href="<?php the_permalink();?>"><?php the_post_thumbnail()?></a>
											<h4><a href="<?php the_permalink();?>"><?php the_title()?></a></h4>
										</div>
									</div>

								<?php endwhile;?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php 
			get_sidebar();
		?>
	</div>	
</section>

<?php 

get_footer();

?>