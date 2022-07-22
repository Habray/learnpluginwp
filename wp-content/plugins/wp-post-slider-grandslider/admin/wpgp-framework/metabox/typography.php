<?php if ( ! defined( 'ABSPATH' ) ) {
	die; } // Cannot access directly.

//
// Create a section
//
WPGP::createSection(
	$wpgp_page_opts,
	array(
		'title'  => 'Typography',
		'icon'   => 'fa fa-font',
		'fields' => array(

			array(
				'type'    => 'content',
				'content' => '<div class="wpgp--menu-detail">
									<strong>Typography</strong>
									<a href="https://grandplugin.com/support-forum/" class="">Need Help?</a>
									<br>
									<p>Arranging the content of the slider to make it more legible, readable, and appealing when displayed. You can prevent to load google font individually. If you leave any style field empty, the particular style will be inherited to its parent element of your theme.</p>
								</div>',
			),

			array(
				'id'         => 'wpgp_section_title_font_load',
				'type'       => 'switcher',
				'title'      => __( 'Load Section Title Font', 'wpgp-wordpress-slider' ),
				'subtitle'   => __( 'On/Off google font for the section title.', 'wpgp-wordpress-slider' ),
				'text_on'    => __( 'On', 'wpgp-wordpress-slider' ),
				'text_off'   => __( 'Off', 'wpgp-wordpress-slider' ),
				'text_width' => 70,
				'default'    => true,
			),
			array(
				'id'           => 'wpgp_section_title_typo',
				'type'         => 'typography',
				'title'        => __( 'Section Title Font', 'wpgp-wordpress-slider' ),
				'subtitle'     => __( 'Set section title font properties.', 'wpgp-wordpress-slider' ),
				'preview'      => 'always',
				'preview_text' => __( 'Grand Slider Section Title', 'wpgp-wordpress-slider' ),
			),
			array(
				'id'         => 'wpgp_post_title_font_load',
				'type'       => 'switcher',
				'title'      => __( 'Load Post Title Font', 'wpgp-wordpress-slider' ),
				'subtitle'   => __( 'On/Off google font for the post title.', 'wpgp-wordpress-slider' ),
				'text_on'    => __( 'On', 'wpgp-wordpress-slider' ),
				'text_off'   => __( 'Off', 'wpgp-wordpress-slider' ),
				'text_width' => 70,
				'default'    => true,
			),
			array(
				'id'           => 'wpgp_post_title_typo',
				'type'         => 'typography',
				'title'        => __( 'Post Title Font', 'wpgp-wordpress-slider' ),
				'subtitle'     => __( 'Set post title font properties.', 'wpgp-wordpress-slider' ),
				'preview'      => 'always',
				'preview_text' => __( 'Grand Slider Post Title', 'wpgp-wordpress-slider' ),
			),
			array(
				'id'         => 'wpgp_desc_font_load',
				'type'       => 'switcher',
				'title'      => __( 'Load Description Font', 'wpgp-wordpress-slider' ),
				'subtitle'   => __( 'On/Off google font for the post description.', 'wpgp-wordpress-slider' ),
				'text_on'    => __( 'On', 'wpgp-wordpress-slider' ),
				'text_off'   => __( 'Off', 'wpgp-wordpress-slider' ),
				'text_width' => 70,
				'default'    => true,
			),
			array(
				'id'           => 'wpgp_desc_typo',
				'type'         => 'typography',
				'title'        => __( 'Description Font', 'wpgp-wordpress-slider' ),
				'subtitle'     => __( 'Set post description font properties.', 'wpgp-wordpress-slider' ),
				'preview'      => 'always',
				'preview_text' => __( 'Grand Slider Post Description', 'wpgp-wordpress-slider' ),
			),
			array(
				'id'         => 'wpgp_meta_font_load',
				'type'       => 'switcher',
				'title'      => __( 'Load Post Meta Font', 'wpgp-wordpress-slider' ),
				'subtitle'   => __( 'On/Off google font for the post meta.', 'wpgp-wordpress-slider' ),
				'text_on'    => __( 'On', 'wpgp-wordpress-slider' ),
				'text_off'   => __( 'Off', 'wpgp-wordpress-slider' ),
				'text_width' => 70,
				'default'    => true,
			),
			array(
				'id'           => 'wpgp_meta_typo',
				'type'         => 'typography',
				'title'        => __( 'Post Meta Font', 'wpgp-wordpress-slider' ),
				'subtitle'     => __( 'Set post meta font properties.', 'wpgp-wordpress-slider' ),
				'preview'      => 'always',
				'preview_text' => __( 'Grand Slider Post Meta', 'wpgp-wordpress-slider' ),
			),

		),
	)
);
