<?php

/**
 * The file that defines the Custom Post Type of the plugin.
 *
 * @link       https://grandplugin.com
 * @since      1.0.0
 *
 * @package    WPGP_WordPress_Slider
 * @subpackage WPGP_WordPress_Slider/includes
 */

/**
 * The file that defines the Custom Post Type of the plugin.
 *
 * @since      1.0.0
 * @package    WPGP_WordPress_Slider
 * @subpackage WPGP_WordPress_Slider/includes
 * @author     GrandPlugin <help@grandplugin.com>
 */
class WPGP_WordPress_Slider_CPT {

	/**
	 * The unique identifier of this plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      string    $plugin_name    The string used to uniquely identify this plugin.
	 */
	protected $plugin_name;

	/**
	 * The current version of the plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      string    $version    The current version of the plugin.
	 */
	protected $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version     = $version;

	}

	/**
	 * Custom Post Type of the Plugin.
	 *
	 * @since    1.0.0
	 */
	public function wpgp_custom_post_type() {

		$labels = apply_filters(
			'wpgp_wordpress_slide_post_type_labels',
			array(
				'name'               => esc_html_x( 'Manage Sliders', 'wpgp-wordpress-slider' ),
				'singular_name'      => esc_html_x( 'Sliders', 'wpgp-wordpress-slider' ),
				'add_new'            => esc_html__( 'Add New', 'wpgp-wordpress-slider' ),
				'add_new_item'       => esc_html__( 'Add New Slider', 'wpgp-wordpress-slider' ),
				'edit_item'          => esc_html__( 'Edit Sliders', 'wpgp-wordpress-slider' ),
				'new_item'           => esc_html__( 'New Sliders', 'wpgp-wordpress-slider' ),
				'view_item'          => esc_html__( 'View  Sliders', 'wpgp-wordpress-slider' ),
				'search_items'       => esc_html__( 'Search Sliders', 'wpgp-wordpress-slider' ),
				'not_found'          => esc_html__( 'No Slider found.', 'wpgp-wordpress-slider' ),
				'not_found_in_trash' => esc_html__( 'No Slider found in trash.', 'wpgp-wordpress-slider' ),
				'parent_item_colon'  => esc_html__( 'Parent Item:', 'wpgp-wordpress-slider' ),
				'menu_name'          => esc_html__( 'WordPress Slider', 'wpgp-wordpress-slider' ),
				'all_items'          => esc_html__( 'Manage Sliders', 'wpgp-wordpress-slider' ),
			)
		);

		$args = apply_filters(
			'wpgp_wordpress_slide_post_type_args',
			array(
				'labels'              => $labels,
				'public'              => false,
				'hierarchical'        => false,
				'exclude_from_search' => true,
				'show_ui'             => true,
				'show_in_admin_bar'   => false,
				'menu_position'       => apply_filters( 'wpgp_wordpress_slide_menu_position', 115 ),
				'menu_icon'           => 'dashicons-slides',
				'rewrite'             => false,
				'query_var'           => false,
				'imported'            => true,
				'supports'            => array( 'title' ),
			)
		);
		register_post_type( 'wpgp_wordpress_slide', $args );

	}

	/**
	 * Change Sliders updated messages.
	 *
	 * @param string $messages The Update messages.
	 * @return statement
	 */
	public function wpps_updated_messages( $messages ) {
		global $post, $post_ID;
		$messages['wpgp_wordpress_slide'] = array(
			0  => '', // Unused. Messages start at index 1.
			1  => sprintf( __( 'Sliders updated.', 'wpgp-wordpress-slider' ) ),
			2  => '',
			3  => '',
			4  => __( ' updated.', 'wpgp-wordpress-slider' ),
			5  => isset( $_GET['revision'] ) ? sprintf( __( 'Sliders restored to revision from %s', 'wpgp-wordpress-slider' ), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
			6  => sprintf( __( 'Sliders published.', 'wpgp-wordpress-slider' ) ),
			7  => __( 'Sliders saved.', 'wpgp-wordpress-slider' ),
			8  => sprintf( __( 'Sliders submitted.', 'wpgp-wordpress-slider' ) ),
			9  => sprintf( __( 'Sliders scheduled for: <strong>%1$s</strong>.', 'wpgp-wordpress-slider' ), date_i18n( __( 'M j, Y @ G:i', 'wpgp-wordpress-slider' ), strtotime( $post->post_date ) ) ),
			10 => sprintf( __( 'Sliders draft updated.', 'wpgp-wordpress-slider' ) ),
		);
		return $messages;
	}

}
