<?php if ( ! defined( 'ABSPATH' ) ) {
	die; } // Cannot access directly.

//
// Create a section
//
WPGP::createSection(
	$wpgp_page_opts,
	array(
		'title'  => __( 'Controls', 'wpgp-wordpress-slider' ),
		'icon'   => 'fa fa-cog',
		'fields' => array(

			array(
				'type'    => 'content',
				'content' => '<div class="wpgp--menu-detail">
									<strong>Controls</strong>
									<a href="https://grandplugin.com/support-forum/" class="">Need Help?</a>
									<br>
									<p>Our best controlling system helps you to create elegant and professionally looking sliders. Slider orientation and a few animation effects are available here.Captions will be displayed one at a time, below the slides with the content. Slider navigation and pagination preserve layout and style while allowing content to stay easily accessible.</p>
								</div>',
			),

			array(
				'id'       => 'wpgp_slider_orientation',
				'type'     => 'button_set',
				'title'    => __( 'Slider Orientation', 'wpgp-wordpress-slider' ),
				'subtitle' => __( 'Choose a slider orientation whether left to right or bottom to top.', 'wpgp-wordpress-slider' ),
				'options'  => array(
					'horizontal' => __( 'Horizontal', 'wpgp-wordpress-slider' ),
					'vertical'   => __( 'Vertical', 'wpgp-wordpress-slider' ),
				),
				'default'  => 'horizontal',
			),
			array(
				'id'         => 'wpgp_slider_autoplay',
				'type'       => 'switcher',
				'title'      => __( 'Autoplay', 'wpgp-wordpress-slider' ),
				'subtitle'   => __( 'The slider switches between slides after a period of time.', 'wpgp-wordpress-slider' ),
				'text_on'    => __( 'On', 'wpgp-wordpress-slider' ),
				'text_off'   => __( 'Off', 'wpgp-wordpress-slider' ),
				'text_width' => 70,
				'default'    => true,
			),
			array(
				'id'       => 'wpgp_slider_autoplay_delay',
				'type'     => 'number',
				'title'    => __( 'Autoplay Delay', 'wpgp-wordpress-slider' ),
				'subtitle' => __( 'Default value is 5000 milliseconds.', 'wpgp-wordpress-slider' ),
				'unit'     => 'ms',
				'default'  => 5000,
			),
			array(
				'id'          => 'wpgp_slider_autoplay_on_hover',
				'type'        => 'select',
				'title'       => __( 'Autoplay on Hover', 'wpgp-wordpress-slider' ),
				'subtitle'    => __( 'When you mouse over the slider.', 'wpgp-wordpress-slider' ),
				'placeholder' => 'Select an option',
				'options'     => array(
					'pause' => __( 'Pause', 'wpgp-wordpress-slider' ),
					'stop'  => __( 'Stop', 'wpgp-wordpress-slider' ),
					'none'  => __( 'None', 'wpgp-wordpress-slider' ),
				),
				'default'     => 'pause',
			),
			array(
				'id'       => 'wpgp_slider_autoplay_direction',
				'type'     => 'button_set',
				'title'    => __( 'Autoplay Direction', 'wpgp-wordpress-slider' ),
				'subtitle' => __( 'Choose a slider orientation whether left to right or bottom to top.', 'wpgp-wordpress-slider' ),
				'options'  => array(
					'normal'    => __( 'Normal', 'wpgp-wordpress-slider' ),
					'backwards' => __( 'Backwards', 'wpgp-wordpress-slider' ),
				),
				'default'  => 'normal',
			),
			array(
				'id'         => 'wpgp_slider_loop',
				'type'       => 'switcher',
				'title'      => __( 'Loop', 'wpgp-wordpress-slider' ),
				'subtitle'   => __( 'On/Off infinite iteration for the slider.', 'wpgp-wordpress-slider' ),
				'text_on'    => __( 'On', 'wpgp-wordpress-slider' ),
				'text_off'   => __( 'Off', 'wpgp-wordpress-slider' ),
				'text_width' => 70,
				'default'    => true,
			),
			array(
				'type'    => 'heading',
				'content' => __( 'Caption', 'wpgp-wordpress-slider' ),
			),
			array(
				'id'         => 'wpgp_caption_bg_full',
				'type'       => 'switcher',
				'title'      => __( 'Fullwidth Caption', 'wpgp-wordpress-slider' ),
				'subtitle'   => __( 'On/Off fullwidth caption as slider overlay.', 'wpgp-wordpress-slider' ),
				'text_on'    => __( 'On', 'wpgp-wordpress-slider' ),
				'text_off'   => __( 'Off', 'wpgp-wordpress-slider' ),
				'text_width' => 70,
				'default'    => true,
			),
			array(
				'id'       => 'wpgp_caption_color_group',
				'type'     => 'color_group',
				'title'    => __( 'Colors', 'wpgp-wordpress-slider' ),
				'subtitle' => __( 'Set the caption color and the background color.', 'wpgp-wordpress-slider' ),
				'options'  => array(
					'color'    => 'Color',
					'color-bg' => 'Background Color',
				),
				'default'  => array(
					'color'    => '#fff',
					'color-bg' => 'rgba(80, 80, 80, 0.5)',
				),
			),
			array(
				'id'       => 'wpgp_caption_padding',
				'type'     => 'spacing',
				'title'    => __( 'Padding', 'wpgp-wordpress-slider' ),
				'subtitle' => __( 'Set the caption padding of the content.', 'wpgp-wordpress-slider' ),
				'default'  => array(
					'top'    => '20',
					'right'  => '20',
					'bottom' => '20',
					'left'   => '20',
					'unit'   => 'px',
				),
			),
			array(
				'id'       => 'wpgp_caption_border',
				'type'     => 'border',
				'title'    => __( 'Border', 'wpgp-wordpress-slider' ),
				'subtitle' => __( 'Set a border on any sides of the caption.', 'wpgp-wordpress-slider' ),
				'default'  => array(
					'top'    => '0',
					'right'  => '0',
					'bottom' => '0',
					'left'   => '0',
					'style'  => 'dashed',
					'color'  => '#fff',
					'unit'   => 'px',
				),
			),
			array(
				'id'       => 'wpgp_caption_border_radius',
				'type'     => 'spacing',
				'title'    => __( 'Border Radius', 'wpgp-wordpress-slider' ),
				'subtitle' => __( 'Set a border radius on any sides of the corner or the caption.', 'wpgp-wordpress-slider' ),
				'default'  => array(
					'top'    => '3',
					'right'  => '3',
					'bottom' => '3',
					'left'   => '3',
					'unit'   => 'px',
				),
			),
			array(
				'type'    => 'heading',
				'content' => __( 'Navigation', 'wpgp-wordpress-slider' ),
			),
			array(
				'id'         => 'wpgp_slider_nav_show',
				'type'       => 'switcher',
				'title'      => __( 'Slider Navigation Arrows', 'wpgp-wordpress-slider' ),
				'subtitle'   => __( 'Show/Hide the slider navigation arrows.', 'wpgp-wordpress-slider' ),
				'text_on'    => __( 'Show', 'wpgp-wordpress-slider' ),
				'text_off'   => __( 'Hide', 'wpgp-wordpress-slider' ),
				'text_width' => 75,
				'default'    => true,
			),
			array(
				'id'         => 'wpgp_slider_arrow_size',
				'type'       => 'number',
				'title'      => __( 'Navigation Arrow size', 'wpgp-wordpress-slider' ),
				'subtitle'   => __( 'Set arrow size.', 'wpgp-wordpress-slider' ),
				'unit'       => 'px',
				'default'    => 20,
				'dependency' => array( 'wpgp_slider_nav_show', '==', 'true' ),
			),
			array(
				'id'         => 'wpgp_slider_arrow_color',
				'type'       => 'color_group',
				'title'      => __( 'Navigation Color', 'wpgp-wordpress-slider' ),
				'subtitle'   => __( 'Set color of the slider navigation.', 'wpgp-wordpress-slider' ),
				'options'    => array(
					'color'       => __( 'Color', 'wpgp-wordpress-slider' ),
					'color-hover' => __( 'Hover Color', 'wpgp-wordpress-slider' ),
				),
				'dependency' => array( 'wpgp_slider_nav_show', '==', 'true' ),
			),
			array(
				'id'         => 'wpgp_slider_nav_visibility',
				'type'       => 'button_set',
				'title'      => __( 'Navigation Visibility', 'wpgp-wordpress-slider' ),
				'subtitle'   => __( 'Arrow show on hover or always.', 'wpgp-wordpress-slider' ),
				'options'    => array(
					'hover'  => __( 'On Hover', 'wpgp-wordpress-slider' ),
					'always' => __( 'Always', 'wpgp-wordpress-slider' ),
				),
				'default'    => 'hover',
				'dependency' => array( 'wpgp_slider_nav_show', '==', 'true' ),
			),
			array(
				'type'    => 'heading',
				'content' => __( 'Pagination', 'wpgp-wordpress-slider' ),
			),
			array(
				'id'         => 'wpgp_slider_pagination',
				'type'       => 'switcher',
				'title'      => __( 'Slider Pagination', 'wpgp-wordpress-slider' ),
				'subtitle'   => __( 'Show/Hide pagination buttons.', 'wpgp-wordpress-slider' ),
				'text_on'    => __( 'Show', 'wpgp-wordpress-slider' ),
				'text_off'   => __( 'Hide', 'wpgp-wordpress-slider' ),
				'text_width' => 75,
				'default'    => false,
			),
			array(
				'id'       => 'wpgp_pagination_color',
				'type'     => 'color_group',
				'title'    => __( 'Pagination Color', 'wpgp-wordpress-slider' ),
				'subtitle' => __( 'Set color of the slider pagination.', 'wpgp-wordpress-slider' ),
				'options'  => array(
					'color'        => __( 'Color', 'wpgp-wordpress-slider' ),
					'color-active' => __( 'Active Color', 'wpgp-wordpress-slider' ),
				),
			),

		),
	)
);
