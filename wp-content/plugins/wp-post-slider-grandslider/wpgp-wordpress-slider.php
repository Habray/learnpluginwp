<?php

/**
 * The plugin bootstrap file
 *
 * @link              https://wpqode.com
 * @since             1.0.0
 * @package           WPGP_WordPress_Slider
 *
 * @wordpress-plugin
 * Plugin Name:       WP Post Slider GrandSlider
 * Plugin URI:        https://wpqode.com/plugins/wordpress-slider/
 * Description:       The plugin will add a slider in your WordPress theme.
 * Version:           1.9.0
 * Author:            WPQode
 * Author URI:        https://wpqode.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wpgp-wordpress-slider
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Define global constants.
 */
$wpgp_plugin_data = get_file_data(
	__FILE__,
	array(
		'version' => 'Version',
	)
);
define( 'WPGP_WORDPRESS_SLIDER_VERSION', $wpgp_plugin_data['version'] );
define( 'WPGP_WORDPRESS_SLIDER_DIR_PATH_FILE', plugin_dir_path( __FILE__ ) );
define( 'WPGP_WORDPRESS_SLIDER_DIR_URL_FILE', plugin_dir_url( __FILE__ ) );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-wpgp-wordpress-slider-activator.php
 */
function activate_wpgp_wordpress_slider() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wpgp-wordpress-slider-activator.php';
	WPGP_WordPress_Slider_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wpgp-wordpress-slider-deactivator.php
 */
function deactivate_wpgp_wordpress_slider() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wpgp-wordpress-slider-deactivator.php';
	WPGP_WordPress_Slider_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_wpgp_wordpress_slider' );
register_deactivation_hook( __FILE__, 'deactivate_wpgp_wordpress_slider' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wpgp-wordpress-slider.php';

/**
 * WPGP Framework.
 */
require_once plugin_dir_path( __FILE__ ) . 'admin/wpgp-framework/classes/setup.class.php';
require_once plugin_dir_path( __FILE__ ) . 'admin/wpgp-framework/metabox/init.php';
require_once plugin_dir_path( __FILE__ ) . 'admin/wpgp-framework/metabox/general.php';
require_once plugin_dir_path( __FILE__ ) . 'admin/wpgp-framework/metabox/controls.php';
require_once plugin_dir_path( __FILE__ ) . 'admin/wpgp-framework/metabox/typography.php';
require_once plugin_dir_path( __FILE__ ) . 'admin/wpgp-framework/metabox/shortcode.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_wpgp_wordpress_slider() {

	$plugin = new WPGP_WordPress_Slider();
	$plugin->run();

}
run_wpgp_wordpress_slider();
