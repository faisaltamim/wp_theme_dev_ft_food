<?php 

function food_menu_shortcode_fucntion($one,$two){

	$shortCodeValue = shortcode_atts(array(

		'food_category'			=>	NULL,
		'food_menu_package'		=>	NULL,//food menu package er vitore nicher item gula thakbe
			'food_image'			=>	NULL,
			'food_title'			=>	NULL,
			'min_price'				=>	NULL,
			'max_price'				=>	NULL,
		


	),$one,'food_menu' );

	ob_start();
	?>
<!-- content section into function start-->



<div class="wrap-col">
	<h3><?php echo $shortCodeValue['food_category']; ?></h3>


	<!-- group wise param data show korte hole nicher ei method ta mukhosto korte hobe -->

	<?php $grpParamValue = vc_param_group_parse_atts($shortCodeValue['food_menu_package']);


	foreach($grpParamValue as $singleParam):

	?><!-- eta mone rakhte hobe group param data er tular jonno wp_get_attachment_image-->
	
	<div class="post">
		<a href=""> <img src="<?php echo wp_get_attachment_image_url($singleParam['food_image']); ?>" alt=""> </a>
		<div class="wrapper">
		  <h5><a href="#"><?php echo $singleParam['food_title']; ?></a></h5>
		   <span>$<?php echo $singleParam['min_price']; ?> - $<?php echo $singleParam['max_price']; ?></span>
		</div>
	</div>

<?php endforeach ?>
</div>






<!-- content section into function end-->
<?php 
	return ob_get_clean();
} //stuff_shortcode function end

add_shortcode( 'food_menu', 'food_menu_shortcode_fucntion' );

// visual composer addons created in as follows
vc_map([

	'base'		=>	'food_menu',
	'name'		=>	'Food Menu',
	'category'	=>	'FTFood',
	'icon'		=>	get_theme_file_uri().'/images/15.jpg',
	'params'	=>	array(

		[
			'param_name'	=>	'food_category',
			'heading'		=>	'Food Categories',
			'type'			=>	'textfield',
		],
		[
			'param_name'	=>	'food_menu_package',
			'heading'		=>	'Add new item',
			'type'			=>	'param_group',
			'params'		=>	array(

				[
					'param_name'	=>	'food_image',
					'heading'		=>	'Food item image',
					'type'			=>	'attach_image',
				],
				[
					'param_name'	=>	'food_title',
					'heading'		=>	'Food item title',
					'type'			=>	'textfield',
				],
				[
					'param_name'	=>	'min_price',
					'heading'		=>	'Food minimum price',
					'type'			=>	'textfield',
				],
				[
					'param_name'	=>	'max_price',
					'heading'		=>	'Food maximum price',
					'type'			=>	'textfield',
				],

			),
		],
),

]);


?>