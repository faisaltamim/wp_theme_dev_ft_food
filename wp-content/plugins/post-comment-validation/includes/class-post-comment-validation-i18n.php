<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       www.kalathiya.me
 * @since      1.0.0
 *
 * @package    Post_Comment_Validation
 * @subpackage Post_Comment_Validation/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Post_Comment_Validation
 * @subpackage Post_Comment_Validation/includes
 * @author     Hardik Kalathiya <hardikkalathiya93@gmail.com>
 */
class Post_Comment_Validation_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'post-comment-validation',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
