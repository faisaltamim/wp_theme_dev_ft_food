<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              www.kalathiya.me
 * @since             1.0.0
 * @package           Post_Comment_Validation
 *
 * @wordpress-plugin
 * Plugin Name:       Post Comment Validation
 * Plugin URI:        www.kalathiya.me/post-comment-validation
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Hardik Kalathiya
 * Author URI:        www.kalathiya.me
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       post-comment-validation
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

define( 'PLUGIN_NAME_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-post-comment-validation-activator.php
 */
function activate_post_comment_validation() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-post-comment-validation-activator.php';
	Post_Comment_Validation_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-post-comment-validation-deactivator.php
 */
function deactivate_post_comment_validation() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-post-comment-validation-deactivator.php';
	Post_Comment_Validation_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_post_comment_validation' );
register_deactivation_hook( __FILE__, 'deactivate_post_comment_validation' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-post-comment-validation.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_post_comment_validation() {

	$plugin = new Post_Comment_Validation();
	$plugin->run();

}
run_post_comment_validation();
