<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://grandplugin.com
 * @since      1.0.0
 *
 * @package    WPGP_WordPress_Slider
 * @subpackage WPGP_WordPress_Slider/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    WPGP_WordPress_Slider
 * @subpackage WPGP_WordPress_Slider/public
 * @author     GrandPlugin <help@grandplugin.com>
 */
class WPGP_WordPress_Slider_Public {

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
	public function __construct( $plugin_name, $version ) {

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
		 * defined in WPGP_WordPress_Slider_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The WPGP_WordPress_Slider_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_register_style( $this->plugin_name . 'slider-css', WPGP_WORDPRESS_SLIDER_DIR_URL_FILE . 'public/css/slider-pro.css', array(), $this->version, 'all' );
		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/wpgp-wordpress-slider-public.css', array(), $this->version, 'all' );

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
		 * defined in WPGP_WordPress_Slider_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The WPGP_WordPress_Slider_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		// wp_enqueue_script( 'slider-public-aaaajs', WPGP_WORDPRESS_SLIDER_DIR_URL_FILE . 'public/js/jquery.sliderPro.js', array( 'jquery' ), $this->version, false );
		// wp_enqueue_script( 'aaaaaaaaaaaaaaaaaaaaa', plugin_dir_url( __FILE__ ) . 'js/wpgp-wordpress-slider-public.js', array( 'jquery' ), $this->version, false );
		wp_register_script( $this->plugin_name . 'slider-js', WPGP_WORDPRESS_SLIDER_DIR_URL_FILE . 'public/js/jquery.sliderPro.js', array( 'jquery' ), $this->version, false );
		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/wpgp-wordpress-slider-public.js', array( 'jquery' ), $this->version, false );

	}

}
