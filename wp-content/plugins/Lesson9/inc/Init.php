<?php

/**
 * @package  AlecadddPlugin
 */

namespace Inc;


// final because we don't need to extend this class by other 
final class Init{

    /**
     * Store all the classes inside an array
     * @return array Full list of classes
     */
    public static function get_services(){
        return [
            Pages\Admin::class,
            Base\Enqueue::class,
            Base\SettingsLink::class
        ];
    }

    /**
     * Loop through the classes, initialize them,
     * and call the register() method if it exists
     * @return 
     */
    public static function register_services()
    {
        foreach(self::get_services() as $class){
            $services = self::instantiate( $class);
            if(method_exists($services, 'register')){
                $services->register();
            }
        }
    }

    /**
     * Initialize the class
     * @param class $class class from the services array
     * @return class instance new instance of the class
     */
    private static function instantiate($class){
        $service = new $class();
        return $service;
    }
}

// use Inc\Base\Activate;
// use Inc\Base\Deactivate;

// if ( !class_exists( 'AlecadddPlugin' ) ) {

// 	class AlecadddPlugin
// 	{

// 		public $plugin;

// 		function __construct() {
// 			$this->plugin = plugin_basename( __FILE__ );
// 		}

// 		function register() {
// 			add_action( 'admin_enqueue_scripts', array( $this, 'enqueue' ) );

// 			add_action( 'admin_menu', array( $this, 'add_admin_pages' ) );

// 			add_filter( "plugin_action_links_$this->plugin", array( $this, 'settings_link' ) );
// 		}

// 		public function settings_link( $links ) {
// 			$settings_link = '<a href="admin.php?page=alecaddd_plugin">Settings</a>';
// 			array_push( $links, $settings_link );
// 			return $links;
// 		}

// 		public function add_admin_pages() {
// 			add_menu_page( 'Alecaddd Plugin', 'Alecaddd', 'manage_options', 'alecaddd_plugin', array( $this, 'admin_index' ), 'dashicons-store', 110 );
// 		}

// 		public function admin_index() {
// 			require_once plugin_dir_path( __FILE__ ) . 'templates/admin.php';
// 		}

// 		protected function create_post_type() {
// 			add_action( 'init', array( $this, 'custom_post_type' ) );
// 		}

// 		function custom_post_type() {
// 			register_post_type( 'book', ['public' => true, 'label' => 'Books'] );
// 		}

// 		function enqueue() {
// 			// enqueue all our scripts
// 			wp_enqueue_style( 'mypluginstyle', plugins_url( '/assets/mystyle.css', __FILE__ ) );
// 			wp_enqueue_script( 'mypluginscript', plugins_url( '/assets/myscript.js', __FILE__ ) );
// 		}

// 		function activate() {
// 			// require_once plugin_dir_path( __FILE__ ) . 'inc/alecaddd-plugin-activate.php';
// 			Activate::activate();
// 		}

// 		function deactivate(){
// 			Deactivate::deactivate();
// 		}
// 	}

// 	$alecadddPlugin = new AlecadddPlugin();
// 	$alecadddPlugin->register();

// 	// activation
// 	register_activation_hook( __FILE__, array( $alecadddPlugin, 'activate' ) );

// 	// deactivation
// 	// require_once plugin_dir_path( __FILE__ ) . 'inc/Deactivate.php';
// 	register_deactivation_hook( __FILE__, array( $alecadddPlugin, 'deactivate' ) );

// }