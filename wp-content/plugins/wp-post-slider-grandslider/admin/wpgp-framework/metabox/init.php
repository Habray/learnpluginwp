<?php if ( ! defined( 'ABSPATH' ) ) {
	die; } // Cannot access directly.

//
// Metabox of the PAGE
// Set a unique slug-like ID
//
$wpgp_page_opts = '_wpgp_page_options';

//
// Create a metabox
//
WPGP::createMetabox(
	$wpgp_page_opts,
	array(
		'title'        => 'WordPress Slider',
		'post_type'    => 'wpgp_wordpress_slide',
		'show_restore' => true,
		'theme'        => 'light',
		'class'        => 'wpgp--metabox-options',
	)
);
