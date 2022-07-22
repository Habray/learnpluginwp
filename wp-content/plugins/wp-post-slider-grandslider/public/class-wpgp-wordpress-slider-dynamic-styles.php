<?php
/**
 * The file that defines the dynamic styles of the plugin.
 *
 * @link       https://grandplugin.com
 * @since      1.0.0
 *
 * @package    WPGP_WordPress_Slider
 * @subpackage WPGP_WordPress_Slider/public
 */

// Post Title Typography.
$wpgp_post_title_font_family    = wpgp_get_post_meta( $post_id, 'wpgp_post_title_typo', null, 'font-family' );
$wpgp_post_title_font_weight    = wpgp_get_post_meta( $post_id, 'wpgp_post_title_typo', null, 'font-weight' );
$wpgp_post_title_font_style     = wpgp_get_post_meta( $post_id, 'wpgp_post_title_typo', null, 'font-style' );
$wpgp_post_title_text_align     = wpgp_get_post_meta( $post_id, 'wpgp_post_title_typo', null, 'text-align' );
$wpgp_post_title_text_transform = wpgp_get_post_meta( $post_id, 'wpgp_post_title_typo', null, 'text-transform' );
$wpgp_post_title_font_size      = wpgp_get_post_meta( $post_id, 'wpgp_post_title_typo', null, 'font-size' );
$wpgp_post_title_line_height    = wpgp_get_post_meta( $post_id, 'wpgp_post_title_typo', null, 'line-height' );
$wpgp_post_title_letter_spacing = wpgp_get_post_meta( $post_id, 'wpgp_post_title_typo', null, 'letter-spacing' );
$wpgp_post_title_color          = wpgp_get_post_meta( $post_id, 'wpgp_post_title_typo', null, 'color' );
$wpgp_post_title_unit           = wpgp_get_post_meta( $post_id, 'wpgp_post_title_typo', null, 'unit' );

// Post Description Typography.
$wpgp_post_desc_font_family    = wpgp_get_post_meta( $post_id, 'wpgp_desc_typo', null, 'font-family' );
$wpgp_post_desc_font_weight    = wpgp_get_post_meta( $post_id, 'wpgp_desc_typo', null, 'font-weight' );
$wpgp_post_desc_font_style     = wpgp_get_post_meta( $post_id, 'wpgp_desc_typo', null, 'font-style' );
$wpgp_post_desc_text_align     = wpgp_get_post_meta( $post_id, 'wpgp_desc_typo', null, 'text-align' );
$wpgp_post_desc_text_transform = wpgp_get_post_meta( $post_id, 'wpgp_desc_typo', null, 'text-transform' );
$wpgp_post_desc_font_size      = wpgp_get_post_meta( $post_id, 'wpgp_desc_typo', null, 'font-size' );
$wpgp_post_desc_line_height    = wpgp_get_post_meta( $post_id, 'wpgp_desc_typo', null, 'line-height' );
$wpgp_post_desc_letter_spacing = wpgp_get_post_meta( $post_id, 'wpgp_desc_typo', null, 'letter-spacing' );
$wpgp_post_desc_color          = wpgp_get_post_meta( $post_id, 'wpgp_desc_typo', null, 'color' );
$wpgp_post_desc_unit           = wpgp_get_post_meta( $post_id, 'wpgp_desc_typo', null, 'unit' );

// Post Meta Data Typography.
$wpgp_post_meta_font_family    = wpgp_get_post_meta( $post_id, 'wpgp_meta_typo', null, 'font-family' );
$wpgp_post_meta_font_weight    = wpgp_get_post_meta( $post_id, 'wpgp_meta_typo', null, 'font-weight' );
$wpgp_post_meta_font_style     = wpgp_get_post_meta( $post_id, 'wpgp_meta_typo', null, 'font-style' );
$wpgp_post_meta_text_align     = wpgp_get_post_meta( $post_id, 'wpgp_meta_typo', null, 'text-align' );
$wpgp_post_meta_text_transform = wpgp_get_post_meta( $post_id, 'wpgp_meta_typo', null, 'text-transform' );
$wpgp_post_meta_font_size      = wpgp_get_post_meta( $post_id, 'wpgp_meta_typo', null, 'font-size' );
$wpgp_post_meta_line_height    = wpgp_get_post_meta( $post_id, 'wpgp_meta_typo', null, 'line-height' );
$wpgp_post_meta_letter_spacing = wpgp_get_post_meta( $post_id, 'wpgp_meta_typo', null, 'letter-spacing' );
$wpgp_post_meta_color          = wpgp_get_post_meta( $post_id, 'wpgp_meta_typo', null, 'color' );
$wpgp_post_meta_unit           = wpgp_get_post_meta( $post_id, 'wpgp_meta_typo', null, 'unit' );

$wpps_css = array(

	'#wpgp--section-title-' . $post_id => array(
		'margin-bottom' => $wpgp_section_title_margin_bottom . 'px',
	),

);

// Focus on Middle (Immersive Carousel).
if ( $wpgp_carousel_focus ) {

	$wpps_css[ '#wpgp--slider-' . $post_id . ' .sp-slides .sp-slide:not(.sp-selected)' ] = array(
		'opacity' => '.5',
	);
	$wpps_css[ '#wpgp--slider-' . $post_id . ' .sp-slides-container' ]                   = array(
		'background-color' => 'transparent',
	);
}

// If thumbnails are off.
if ( ! $wpgp_post_thumb_show ) {

	$wpps_css[ '#wpgp--slider-' . $post_id . ' .sp-slide' ]      = array(
		'width'            => '100% !important',
		'background-color' => $wpgp_slider_bg_color,
	);
	$wpps_css[ '#wpgp--slider-' . $post_id . ' .sp-image-text' ] = array(
		'background-color' => 'transparent',
	);
}

// Section Title Typography.
if ( $wpgp_section_title_show && $wpgp_section_title_font_load ) {

	$wpps_css[ '#wpgp--section-title-' . $post_id ] = array(
		'font-family'    => $wpgp_post_title_font_family ? $wpgp_post_title_font_family : 'inherit',
		'font-weight'    => $wpgp_post_title_font_weight ? $wpgp_post_title_font_weight : 'inherit',
		'font-style'     => $wpgp_post_title_font_style ? $wpgp_post_title_font_style : 'inherit',
		'text-align'     => $wpgp_post_title_text_align ? $wpgp_post_title_text_align : 'inherit',
		'text-transform' => $wpgp_post_title_text_transform ? $wpgp_post_title_text_transform : 'inherit',
		'font-size'      => $wpgp_post_title_font_size ? $wpgp_post_title_font_size . 'px' : 'inherit',
		'line-height'    => $wpgp_post_title_line_height ? $wpgp_post_title_line_height . 'px' : 'inherit',
		'letter-spacing' => $wpgp_post_title_letter_spacing ? $wpgp_post_title_letter_spacing . 'px' : 'inherit',
		'color'          => $wpgp_post_title_color ? $wpgp_post_title_color : 'inherit',
	);
}

// Post Title Typography.
if ( $wpgp_post_title_show && $wpgp_post_title_font_load ) {

	$wpps_css[ '#wpgp--slider-' . $post_id . ' .sp-post-title' ] = array(
		'font-family'    => $wpgp_post_title_font_family ? $wpgp_post_title_font_family : 'inherit',
		'font-weight'    => $wpgp_post_title_font_weight ? $wpgp_post_title_font_weight : 'inherit',
		'font-style'     => $wpgp_post_title_font_style ? $wpgp_post_title_font_style : 'inherit',
		'text-align'     => $wpgp_post_title_text_align ? $wpgp_post_title_text_align : 'inherit',
		'text-transform' => $wpgp_post_title_text_transform ? $wpgp_post_title_text_transform : 'inherit',
		'font-size'      => $wpgp_post_title_font_size ? $wpgp_post_title_font_size . 'px' : 'inherit',
		'line-height'    => $wpgp_post_title_line_height ? $wpgp_post_title_line_height . 'px' : 'inherit',
		'letter-spacing' => $wpgp_post_title_letter_spacing ? $wpgp_post_title_letter_spacing . 'px' : 'inherit',
		'color'          => $wpgp_post_title_color ? $wpgp_post_title_color : 'inherit',
	);
}

// Post Description Typography.
if ( $wpgp_slider_desc_show && $wpgp_desc_font_load ) {

	$wpps_css[ '#wpgp--slider-' . $post_id . ' .sp-post-desc' ] = array(
		'font-family'    => $wpgp_post_desc_font_family ? $wpgp_post_desc_font_family : 'inherit',
		'font-weight'    => $wpgp_post_desc_font_weight ? $wpgp_post_desc_font_weight : 'inherit',
		'font-style'     => $wpgp_post_desc_font_style ? $wpgp_post_desc_font_style : 'inherit',
		'text-align'     => $wpgp_post_desc_text_align ? $wpgp_post_desc_text_align : 'inherit',
		'text-transform' => $wpgp_post_desc_text_transform ? $wpgp_post_desc_text_transform : 'inherit',
		'font-size'      => $wpgp_post_desc_font_size ? $wpgp_post_desc_font_size . 'px' : 'inherit',
		'line-height'    => $wpgp_post_desc_line_height ? $wpgp_post_desc_line_height . 'px' : 'inherit',
		'letter-spacing' => $wpgp_post_desc_letter_spacing ? $wpgp_post_desc_letter_spacing . 'px' : 'inherit',
		'color'          => $wpgp_post_desc_color ? $wpgp_post_desc_color : 'inherit',
	);
}

// Post Meta Data Typography.
if ( $wpgp_post_date && $wpgp_meta_font_load ) {

	$wpps_css[ '#wpgp--slider-' . $post_id . ' .sp-post-time' ] = array(
		'font-family'    => $wpgp_post_meta_font_family ? $wpgp_post_meta_font_family : 'inherit',
		'font-weight'    => $wpgp_post_meta_font_weight ? $wpgp_post_meta_font_weight : 'inherit',
		'font-style'     => $wpgp_post_meta_font_style ? $wpgp_post_meta_font_style : 'inherit',
		'text-align'     => $wpgp_post_meta_text_align ? $wpgp_post_meta_text_align : 'inherit',
		'text-transform' => $wpgp_post_meta_text_transform ? $wpgp_post_meta_text_transform : 'inherit',
		'font-size'      => $wpgp_post_meta_font_size ? $wpgp_post_meta_font_size . 'px' : 'inherit',
		'line-height'    => $wpgp_post_meta_line_height ? $wpgp_post_meta_line_height . 'px' : 'inherit',
		'letter-spacing' => $wpgp_post_meta_letter_spacing ? $wpgp_post_meta_letter_spacing . 'px' : 'inherit',
		'color'          => $wpgp_post_meta_color ? $wpgp_post_meta_color : 'inherit',
	);
}

/***********************
 * CSS Rendering Engine.
 */
$wpps_output_css = '';

foreach ( $wpps_css as $style => $style_array ) {

	$wpps_output_css .= $style . '{';

	foreach ( $style_array as $property => $value ) {

		$wpps_output_css .= $property . ':' . $value . ';';
	}
	$wpps_output_css .= '}';
}

echo '<style>';

// Computed style.
echo esc_html( $wpps_output_css );

echo '</style>';
