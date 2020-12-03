<?php

function f_form_function($one,$two){

	$formadata = shortcode_atts( array(

		// 'name'			=>	null,
		'email'			=>	null,
		// 'subject'		=>	null,
		// 'dateofbirth'	=>	null,
		// 'timeofbirth'	=>	null,
		// 'msg'			=>	null,

	), $one, 'r_form' );

ob_start(); ?>
<!-- content will be here -->




<div class="wrap-col">
	<div class="contact">
		<div id="contact_form">
			<form name="contact" id="contact" method="post" action="">
				<label class="row">
					<div class="col-1-2">
						<div class="wrap-col">
							<input type="text" name="name" id="name" placeholder="Enter name" required="required" />
						</div>
					</div>
					<div class="col-1-2">
						<div class="wrap-col">
							<input type="email" name="email" id="email" placeholder="Enter email" required="required" />
							<input type="hidden" name="adminEmail" value="<?php $formadata['email']; ?>">
						</div>
					</div>
				</label>
				<label class="row">
					<div class="col-2-4">
						<div class="wrap-col">
						<input type="text" name="subject" id="subject" placeholder="Subject" required="required" />
						</div>
					</div>
					<div class="col-1-4">
						<div class="wrap-col">
						<input type="date"  name="date" id="date" placeholder="Date"/>
						</div>
					</div>
					<div class="col-1-4">
						<div class="wrap-col">
						<input type="time"  name="time" id="time" placeholder="Time"/>
						</div>
					</div>											
				</label>
				<label class="row">
					<div class="wrap-col">
						<textarea name="message" id="message" class="form-control" rows="4" cols="25" required="required"
						placeholder="Message"></textarea>
					</div>
				</label>
				<center><input class="sendButton" type="submit" name="submit" value="Submit"></center>
			</form>
		</div>
	</div>
</div>









<!-- content will be here -->
<?php 
	return ob_get_clean();
}

add_shortcode( 'r_form', 'f_form_function' );


vc_map([

	'base'			=>		'r_form',
	'category'		=>		'FTFood',
	'name'			=>		'Reservation Form',
	'icon'			=>		get_theme_file_uri().'/images/r_form.png',
	'params'		=>		array(
				// [
				// 	'param_name'	=>	'name',
				// 	'heading'		=>	'Your Name',
				// 	'type'			=>	'textfield',
				// ],
				[
					'param_name'	=>	'email',
					'heading'		=>	'Your Email',
					'type'			=>	'textfield',
				],
				// [
				// 	'param_name'	=>	'subject',
				// 	'heading'		=>	'Subject',
				// 	'type'			=>	'textfield',
				// ],
				// [
				// 	'param_name'	=>	'dateofbirth',
				// 	'heading'		=>	'Date of birth',
				// 	'type'			=>	'textfield',
				// ],
				// [
				// 	'param_name'	=>	'timeofbirth',
				// 	'heading'		=>	'Your birth time',
				// 	'type'			=>	'textfield',
				// ],
				// [
				// 	'param_name'	=>	'msg',
				// 	'heading'		=>	'Your Message',
				// 	'type'			=>	'textfield',
				// ],

	),

]);

?>