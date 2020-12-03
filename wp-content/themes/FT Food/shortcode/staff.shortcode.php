<?php 

function stuff_shortcode($one,$two){

	$shortCodeValue = shortcode_atts(array(

		'stuff_image'		=>	NULL,
		'stuff_name'		=>	NULL,
		'stuff_fb'			=>	NULL,
		'stuff_tw'			=>	NULL,
		'stuff_lnkdn'		=>	NULL,
		'stuff_ista'		=>	NULL,


	),$one,'stuff' );

	ob_start();
	?>
<!-- content section into function start-->

	<div class="chef">
		<div class="wrap-col">
			<div class="zoom-container">
				<a href="#">
					<img src="<?php echo wp_get_attachment_image_url($shortCodeValue['stuff_image'],'full') ; ?>" />
				</a>
			</div>
			<h3><?php echo $shortCodeValue['stuff_name']; ?></h3>
			<ul class="social t-center">
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
				<li><a href="#"><i class="fa fa-instagram"></i></a></li>
			</ul>
		</div>
	</div>




<!-- content section into function end-->
<?php 
	return ob_get_clean();
} //stuff_shortcode function end

add_shortcode( 'stuff', 'stuff_shortcode' );

// visual composer addons created in as follows
vc_map([

	'base'		=>	'stuff',
	'name'		=>	'Staff Addons',
	'category'	=>	'FTFood',//category wise widget show korar jonno category likha hoise
	'icon'		=>	get_theme_file_uri().'/images/stuff.png',
	'params'	=>	array(

		[
			'param_name'	=>	'stuff_image',//stuff_image value collected from shortcode_atts function
			'heading'		=>	'Upload Stuff Image',//this heading goes to the visual composer in widget
			'type'			=>	'attach_image',
		],
		[
			'param_name'	=>	'stuff_name',
			'heading'		=>	'Stuff Name',
			'type'			=>	'textfield',
		],
		[
			'param_name'	=>	'stuff_fb',
			'heading'		=>	'Facebook',
			'type'			=>	'textfield',
		],
		[
			'param_name'	=>	'stuff_tw',
			'heading'		=>	'Twitter',
			'type'			=>	'textfield',
		],
		[
			'param_name'	=>	'stuff_lnkdn',
			'heading'		=>	'LinkedIn',
			'type'			=>	'textfield',
		],
		[
			'param_name'	=>	'stuff_ista',
			'heading'		=>	'Instagram',
			'type'			=>	'textfield',
		],
),

]);


?>