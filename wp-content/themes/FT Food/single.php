
<?php get_header() ?>
<!--////////////////////////////////////Container-->
<section id="container" class="sub-page">
	<div class="wrap-container zerogrid">
		<div class="crumbs">
			<ul>
				<li><a href="index.html">Home</a></li>
				<li><a href="archive.html">Blog</a></li>
			</ul>
		</div>
		<div id="main-content" class="col-2-3">
			<div class="wrap-content">

				<article>
					<div class="art-header">
						<a href=""><h3><?php the_title(); ?></h3></a>
						<span><?php the_field('pstitle')?></span>
						<div class="info">Posted on <?php the_time( 'd/M/Y' ) ?> in: <a href=""><?php the_tags(','); ?></a> || Category: <span class="myCustomCat"><?php echo the_category()?></span></div>
					</div>
					<div class="art-content">
						<?php the_post_thumbnail();?>
						<p><?php  the_content(); ?></p>
					</div>
					<!-- <a class="button button02" href="">Read More</a> -->
				</article>
				<div class="myCustomCmnt">
					<?php
						comments_template();
					?>
				</div>
			</div>
		</div>
		<? get_sidebar();?>
	</div>
</section>
<?php get_footer() ?>
