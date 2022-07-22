<?php

/**
 * The file that defines the Shortcode of the plugin.
 *
 * @link       https://grandplugin.com
 * @since      1.0.0
 *
 * @package    WPGP_WordPress_Slider
 * @subpackage WPGP_WordPress_Slider/includes
 */

/**
 * The file that defines the Shortcode of the plugin.
 *
 * @since      1.0.0
 * @package    WPGP_WordPress_Slider
 * @subpackage WPGP_WordPress_Slider/includes
 * @author     GrandPlugin <help@grandplugin.com>
 */
class WPGP_WordPress_Slider_Shortcode {

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

		/**
		 * A Custom function to get post meta with sanitization and validation.
		 *
		 * @param [type] $post_id Current post ID.
		 * @param string $option Meta key.
		 * @param [type] $default Default meta value.
		 * @param string $option_two Nested meta key.
		 * @param [type] $default_two Nested meta value.
		 * @return mixed
		 */
		function wpgp_get_post_meta( $post_id, $option = '', $default = null, $option_two = '', $default_two = null ) {

			$options = get_post_meta( $post_id, '_wpgp_page_options', true );
			if ( ! empty( $option_two ) ) {

				return ( isset( $options[ $option ][ $option_two ] ) ) ? $options[ $option ][ $option_two ] : $default_two;
			} else {

				return ( isset( $options[ $option ] ) ) ? $options[ $option ] : $default;
			}
		}

	}

	/**
	 * A shortcode for this plugin.
	 *
	 * @since   1.0.0
	 * @param   string $atts attribute of this shortcode.
	 */
	public function wpgp_shortcode_execute( $atts ) {

		$post_id = intval( $atts['id'] );

		// General Settings.
		$wpgp_slider_full_width_show      = wpgp_get_post_meta( $post_id, 'wpgp_slider_full_width_show' );
		$wpgp_slider_width_desktop        = wpgp_get_post_meta( $post_id, 'wpgp_slider_width', null, 'top' );
		$wpgp_slider_width_laptop         = wpgp_get_post_meta( $post_id, 'wpgp_slider_width', null, 'right' );
		$wpgp_slider_width_tablet         = wpgp_get_post_meta( $post_id, 'wpgp_slider_width', null, 'bottom' );
		$wpgp_slider_width_mobile         = wpgp_get_post_meta( $post_id, 'wpgp_slider_width', null, 'left' );
		$wpgp_slider_height_mode          = wpgp_get_post_meta( $post_id, 'wpgp_slider_height_mode' );
		$wpgp_slider_height_desktop       = wpgp_get_post_meta( $post_id, 'wpgp_slider_height', null, 'top' );
		$wpgp_slider_height_laptop        = wpgp_get_post_meta( $post_id, 'wpgp_slider_height', null, 'right' );
		$wpgp_slider_height_tablet        = wpgp_get_post_meta( $post_id, 'wpgp_slider_height', null, 'bottom' );
		$wpgp_slider_height_mobile        = wpgp_get_post_meta( $post_id, 'wpgp_slider_height', null, 'left' );
		$wpgp_slider_height_set           = wpgp_get_post_meta( $post_id, 'wpgp_slider_height_set' );
		$wpgp_slider_height               = wpgp_get_post_meta( $post_id, 'wpgp_slider_height' );
		$wpgp_section_title_show          = wpgp_get_post_meta( $post_id, 'wpgp_section_title_show' );
		$wpgp_section_title_margin_bottom = wpgp_get_post_meta( $post_id, 'wpgp_section_title_margin_bottom' );
		$wpgp_slider_skin                 = wpgp_get_post_meta( $post_id, 'wpgp_slider_skin' );
		$wpgp_carousel_focus              = wpgp_get_post_meta( $post_id, 'wpgp_carousel_focus' );
		$wpgp_carousel_aspect_ratio       = wpgp_get_post_meta( $post_id, 'wpgp_carousel_aspect_ratio' );
		$wpgp_post_title_show             = wpgp_get_post_meta( $post_id, 'wpgp_post_title_show' );
		$wpgp_slider_title_html_tag       = wpgp_get_post_meta( $post_id, 'wpgp_slider_title_html_tag' );
		$wpgp_post_date                   = wpgp_get_post_meta( $post_id, 'wpgp_post_date' );
		$wpgp_slider_desc_show            = wpgp_get_post_meta( $post_id, 'wpgp_slider_desc_show' );
		$wpgp_slider_desc_mobile_hide     = wpgp_get_post_meta( $post_id, 'wpgp_slider_desc_mobile_hide' ) ? ' hide-small-screen' : '';
		$wpgp_post_thumb_show             = wpgp_get_post_meta( $post_id, 'wpgp_post_thumb_show' );
		$wpgp_slider_bg_color             = wpgp_get_post_meta( $post_id, 'wpgp_slider_bg_color' );

		// Query.
		$wpgp_post_types_select             = wpgp_get_post_meta( $post_id, 'wpgp_post_types_select' );
		$wpgp_post_include_exclude_set      = wpgp_get_post_meta( $post_id, 'wpgp_post_include_exclude_set' );
		$wpgp_post_include_exclude_by       = wpgp_get_post_meta( $post_id, 'wpgp_post_include_exclude_by' );
		$wpgp_post_include_exclude_category = wpgp_get_post_meta( $post_id, 'wpgp_post_include_exclude_category' );
		$wpgp_post_include_exclude_tag      = wpgp_get_post_meta( $post_id, 'wpgp_post_include_exclude_tag' );
		$wpgp_specific_post_select          = wpgp_get_post_meta( $post_id, 'wpgp_specific_post_select' );
		$wpgp_post_order                    = wpgp_get_post_meta( $post_id, 'wpgp_post_order' );
		$wpgp_post_order_by                 = wpgp_get_post_meta( $post_id, 'wpgp_post_order_by' );
		$wpgp_sticky_post_ignore            = wpgp_get_post_meta( $post_id, 'wpgp_sticky_post_ignore' );
		$wpgp_post_max_number               = wpgp_get_post_meta( $post_id, 'wpgp_post_max_number' );

		// Controls.
		$wpgp_slider_orientation        = wpgp_get_post_meta( $post_id, 'wpgp_slider_orientation' );
		$wpgp_slider_autoplay           = wpgp_get_post_meta( $post_id, 'wpgp_slider_autoplay' );
		$wpgp_slider_autoplay_delay     = wpgp_get_post_meta( $post_id, 'wpgp_slider_autoplay_delay' );
		$wpgp_slider_autoplay_on_hover  = wpgp_get_post_meta( $post_id, 'wpgp_slider_autoplay_on_hover' );
		$wpgp_slider_autoplay_direction = wpgp_get_post_meta( $post_id, 'wpgp_slider_autoplay_direction' );
		$wpgp_slider_loop               = wpgp_get_post_meta( $post_id, 'wpgp_slider_loop' );
		$wpgp_slider_nav_show           = wpgp_get_post_meta( $post_id, 'wpgp_slider_nav_show' );
		$wpgp_slider_arrow_size         = wpgp_get_post_meta( $post_id, 'wpgp_slider_arrow_size' );
		$wpgp_slider_arrow_color        = wpgp_get_post_meta( $post_id, 'wpgp_slider_arrow_color' );
		$wpgp_slider_nav_visibility     = wpgp_get_post_meta( $post_id, 'wpgp_slider_nav_visibility' );
		$wpgp_slider_pagination         = wpgp_get_post_meta( $post_id, 'wpgp_slider_pagination' );
		$wpgp_pagination_color          = wpgp_get_post_meta( $post_id, 'wpgp_pagination_color' );

		// Typography.
		$wpgp_section_title_font_load = wpgp_get_post_meta( $post_id, 'wpgp_section_title_font_load' );
		$wpgp_section_title_typo      = wpgp_get_post_meta( $post_id, 'wpgp_section_title_typo' );
		$wpgp_post_title_font_load    = wpgp_get_post_meta( $post_id, 'wpgp_post_title_font_load' );
		$wpgp_post_title_typo         = wpgp_get_post_meta( $post_id, 'wpgp_post_title_typo' );
		$wpgp_desc_font_load          = wpgp_get_post_meta( $post_id, 'wpgp_desc_font_load' );
		$wpgp_desc_typo               = wpgp_get_post_meta( $post_id, 'wpgp_desc_typo' );
		$wpgp_meta_font_load          = wpgp_get_post_meta( $post_id, 'wpgp_meta_font_load' );
		$wpgp_meta_typo               = wpgp_get_post_meta( $post_id, 'wpgp_meta_typo' );

		/**
		 * Load Google font.
		 *
		 * @package shortcode
		 */
		if ( get_option( 'wpps_dequeue_google_font', true ) ) {
			$wpgp_unique_id     = uniqid();
			$wpgp_enqueue_fonts = array();
			$wpgp_typography    = array();

			// Typography.
			$wpgp_typography[] = $wpgp_section_title_typo;
			$wpgp_typography[] = $wpgp_post_title_typo;
			$wpgp_typography[] = $wpgp_desc_typo;
			$wpgp_typography[] = $wpgp_meta_typo;

			if ( ! empty( $wpgp_typography ) ) {

				foreach ( $wpgp_typography as $wpgp_font ) {

					if ( isset( $wpgp_font['type'] ) && 'google' === $wpgp_font['type'] ) {

						$wpgp_variant         = ( isset( $wpgp_font['font-weight'] ) ) ? ':' . $wpgp_font['font-weight'] : '';
						$wpgp_subset          = isset( $wpgp_font['subset'] ) ? ':' . $wpgp_font['subset'] : '';
						$wpgp_enqueue_fonts[] = $wpgp_font['font-family'] . $wpgp_variant . $wpgp_subset;
					}
				}
			}

			if ( ! empty( $wpgp_enqueue_fonts ) ) {

				wp_enqueue_style( 'wpgp--google-fonts' . $wpgp_unique_id, esc_url( add_query_arg( 'family', rawurlencode( implode( '|', $wpgp_enqueue_fonts ) ), '//fonts.googleapis.com/css' ) ), array(), $this->version );
			}
		} // Google font enqueue dequeue.

		ob_start();

		wp_enqueue_style( $this->plugin_name . 'slider-css' );

		include WPGP_WORDPRESS_SLIDER_DIR_PATH_FILE . 'public/partials/wpgp-wordpress-slider-public-display.php';

		wp_enqueue_script( $this->plugin_name . 'slider-js' );

		return ob_get_clean();
	}

}
