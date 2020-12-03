<?php 

function contactBoxFunction($one,$two){

	$contactValue = shortcode_atts( array(

		'contact_add'			=>		Null,
		'mon_fri'				=>		Null,
		'sat_sun'				=>		Null,
		'email'				=>		Null,
		'phone'				=>		Null,
		'fax'				=>		Null,

	), $one, 'contact_box' );

ob_start(); ?>
<!-- content will be here start -->
	<div class="wrap-col">
		<h3>Address</h3>
		<p><?php echo $contactValue['contact_add']; ?></p><br/>
		<h3>Hours Of Operation</h3>
		<p><span>MONDAY-FRIDAY: </span><?php echo $contactValue['mon_fri']; ?></p>
		<p><span>SATURDAY-SUNDAY: </span><?php echo $contactValue['sat_sun']; ?></p><br/>
		<h3>Contact Info</h3>
		<p><span>EMAIL ADDRESS: </span><?php echo $contactValue['email']; ?></p>
		<p><span>TELEPHONE: </span><?php echo $contactValue['phone']; ?></p>
		<p><span>FAX: </span><?php echo $contactValue['fax']; ?></p>
	</div>

<!-- content will be here end  -->
<?php
	return ob_get_clean();
}//function end

//short code hook as follows
add_shortcode( 'contact_box', 'contactBoxFunction' );

//visual composer widget added to below
vc_map([
		'base'			=>		'contact_box',
		'name'			=>		'Contact Box',
		'category'		=>		'FTFood',
		'icon'			=>		get_theme_file_uri().'/images/contact.png',
		'params'		=>		array(

			[
				'param_name'	=>	'contact_add',
				'heading'		=>	'Your Contact',
				'type'			=>	'textfield',
			],
			[
				'param_name'	=>	'mon_fri',
				'heading'		=>	'Monday to Friday Schedule',
				'type'			=>	'textfield',
			],
			[
				'param_name'	=>	'sat_sun',
				'heading'		=>	'Saturday to Sunday Schedule',
				'type'			=>	'textfield',
			],
			[
				'param_name'	=>	'email',
				'heading'		=>	'Your Email',
				'type'			=>	'textfield',
			],
			[
				'param_name'	=>	'phone',
				'heading'		=>	'Your Phone',
				'type'			=>	'textfield',
			],
			[
				'param_name'	=>	'fax',
				'heading'		=>	'Your Fax',
				'type'			=>	'textfield',
			],

		),
	]);
?>