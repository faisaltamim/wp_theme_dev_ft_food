<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       www.kalathiya.me
 * @since      1.0.0
 *
 * @package    Post_Comment_Validation
 * @subpackage Post_Comment_Validation/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Post_Comment_Validation
 * @subpackage Post_Comment_Validation/public
 * @author     Hardik Kalathiya <hardikkalathiya93@gmail.com>
 */
class Post_Comment_Validation_Public {

    /**
     * The ID of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string    $plugin_name    The ID of this plugin.
     */
    private $plugin_name;

    /**
     * The version of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string    $version    The current version of this plugin.
     */
    private $version;

    /**
     * Initialize the class and set its properties.
     *
     * @since    1.0.0
     * @param      string    $plugin_name       The name of the plugin.
     * @param      string    $version    The version of this plugin.
     */
    public function __construct($plugin_name, $version) {

        $this->plugin_name = $plugin_name;
        $this->version = $version;
    }

    /**
     * Register the stylesheets for the public-facing side of the site.
     *
     * @since    1.0.0
     */
    public function enqueue_styles() {

        /**
         * This function is provided for demonstration purposes only.
         *
         * An instance of this class should be passed to the run() function
         * defined in Post_Comment_Validation_Loader as all of the hooks are defined
         * in that particular class.
         *
         * The Post_Comment_Validation_Loader will then create the relationship
         * between the defined hooks and the functions defined in this
         * class.
         */
        wp_enqueue_style($this->plugin_name, plugin_dir_url(__FILE__) . 'css/post-comment-validation-public.css', array(), $this->version, 'all');
        if (is_singular() && comments_open()) {
            wp_enqueue_style('wpcommentvalidation_css', plugin_dir_url(__FILE__) . 'css/wp-comment-validation.css', '', time());
        }
    }

    /**
     * Register the JavaScript for the public-facing side of the site.
     *
     * @since    1.0.0
     */
    public function enqueue_scripts() {

        /**
         * This function is provided for demonstration purposes only.
         *
         * An instance of this class should be passed to the run() function
         * defined in Post_Comment_Validation_Loader as all of the hooks are defined
         * in that particular class.
         *
         * The Post_Comment_Validation_Loader will then create the relationship
         * between the defined hooks and the functions defined in this
         * class.
         */
        wp_enqueue_script($this->plugin_name, plugin_dir_url(__FILE__) . 'js/post-comment-validation-public.js', array('jquery'), $this->version, false);
        if (is_singular() && comments_open()) {
            wp_enqueue_script('wpjqueryvalidate_js', plugin_dir_url(__FILE__) . 'js/jquery.validate.min.js', '', time());
            wp_enqueue_script('wpcommentvalidation_js', plugin_dir_url(__FILE__) . 'js/wp-comment-validation.js', '', time());
        }
    }

}
