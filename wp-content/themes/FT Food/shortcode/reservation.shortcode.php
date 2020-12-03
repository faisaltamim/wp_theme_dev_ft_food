<?php 

function ReserveContactBoxFunction($one,$two){

	$reserveContactValue = shortcode_atts( array(

		'sidepera'			=>		Null,
		'mobile'			=>		Null,
		'phone'				=>		Null,
		'email'				=>		Null,

	), $one, 'reserve_contact_box' );

ob_start(); ?>
<!-- content will be here start -->
	<div class="wrap-col">
		<h3>Complete the Submission Form</h3>
		<p><?php echo $reserveContactValue['sidepera']; ?> </p><br/>
		<h3>Or Just Make a Call</h3>
		<p><?php echo $reserveContactValue['mobile']; ?> <br>
			<?php echo $reserveContactValue['phone']; ?> </p>
		<p><?php echo $reserveContactValue['email']; ?> </p>
	</div>

<!-- content will be here end  -->
<?php
	return ob_get_clean();
}//function end

//short code hook as follows
add_shortcode( 'reserve_contact_box', 'ReserveContactBoxFunction' );

//visual composer widget added to below
vc_map([
		'base'			=>		'reserve_contact_box',
		'name'			=>		'Reservasion Side Contact Box',
		'category'		=>		'FTFood',
		'icon'			=>		get_theme_file_uri().'/images/contact2.png',
		'params'		=>		array(

			[
				'param_name'	=>	'sidepera',
				'heading'		=>	'Your Side Info',
				'type'			=>	'textfield',
			],
			[
				'param_name'	=>	'mobile',
				'heading'		=>	'Your Mobile Number',
				'type'			=>	'textfield',
			],
			[
				'param_name'	=>	'phone',
				'heading'		=>	'Your Phone Number',
				'type'			=>	'textfield',
			],
			[
				'param_name'	=>	'email',
				'heading'		=>	'Your Email',
				'type'			=>	'textfield',
			],
		),
	]);
?>