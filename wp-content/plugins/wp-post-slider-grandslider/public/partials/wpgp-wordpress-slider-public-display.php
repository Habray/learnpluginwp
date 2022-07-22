<?php

/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       https://grandplugin.com
 * @since      1.0.0
 *
 * @package    WPGP_WordPress_Slider
 * @subpackage WPGP_WordPress_Slider/public/partials
 */

// Arguments.
$wpgp_args = array(
	'post_type'           => $wpgp_post_types_select,
	'post_status'         => 'publish',
	'order'               => $wpgp_post_order,
	'orderby'             => $wpgp_post_order_by,
	'ignore_sticky_posts' => $wpgp_sticky_post_ignore,
	'posts_per_page'      => $wpgp_post_max_number,
	'post__not_in'        => array( get_the_ID() ), // The ID of the post which is containing the shortcode.
);

if ( ! empty( $wpgp_post_include_exclude_by ) ) {

	if ( 'include' === $wpgp_post_include_exclude_set ) {

		if ( 'categories' === $wpgp_post_include_exclude_by ) {

			$wpgp_args = array(
				'category__in' => $wpgp_post_include_exclude_category,
			);
		}

		if ( 'tags' === $wpgp_post_include_exclude_by ) {

			$wpgp_args = array(
				'tag__in' => $wpgp_post_include_exclude_category,
			);
		}

		if ( 'specific' === $wpgp_post_include_exclude_by ) {

			$wpgp_args = array(
				'post__in' => $wpgp_specific_post_select,
			);
		}
	} else {

		if ( 'categories' === $wpgp_post_include_exclude_by ) {

			$wpgp_args = array(
				'tag__not_in' => $wpgp_post_include_exclude_tag,
			);
		}

		if ( 'tags' === $wpgp_post_include_exclude_by ) {

			$wpgp_args = array(
				'tag__not_in' => $wpgp_post_include_exclude_tag,
			);
		}

		if ( 'specific' === $wpgp_post_include_exclude_by ) {

			$wpgp_args = array(
				'post__not_in' => $wpgp_post_include_exclude_tag,
			);
		}
	}
}
$wpgp_post_query = new WP_Query( $wpgp_args );

if ( ! empty( get_the_title( $post_id ) ) && $wpgp_section_title_show ) {

	echo '<h2 id="wpgp--section-title-' . esc_attr( $post_id ) . '">' . esc_html( get_the_title( $post_id ) ) . '</h2>';
}

require WPGP_WORDPRESS_SLIDER_DIR_PATH_FILE . 'public/class-wpgp-wordpress-slider-dynamic-styles.php';

$wpgp_immersive_carousel = (object) array(
	'aspectRatio'   => $wpgp_carousel_aspect_ratio,
	'visibleSize'   => '100%',
	'autoSlideSize' => true,
);

// Breakpoints Object.
$wpgp_slider_breakpoints = (object) array(
	'breakpoints' => array(
		1280 => array(
			'width' => $wpgp_slider_width_desktop,
		),
		1024 => array(
			'width' => $wpgp_slider_width_laptop,
		),
		767  => array(
			'width' => $wpgp_slider_width_tablet,
		),
		480  => array(
			'width'              => $wpgp_slider_width_mobile,
			'arrows'             => false,
			'buttons'            => false,
			'orientation'        => 'vertical',
			'thumbnailWidth'     => 270,
			'thumbnailHeight'    => 100,
			'thumbnailsPosition' => 'bottom',
		),
	),
);
?>

<div class="wpgp--post-slider">
	<div id="wpgp--slider-<?php echo esc_attr( $post_id ); ?>" class="slider-pro"
		data-width="<?php echo esc_attr( $wpgp_slider_full_width_show ? '100%' : $wpgp_slider_width_desktop ); ?>"
		data-height="<?php echo esc_attr( $wpgp_slider_height_desktop ); ?>"
		data-orientation="<?php echo esc_attr( $wpgp_slider_orientation ); ?>"
		data-autoplay="<?php echo esc_attr( $wpgp_slider_autoplay ? 'true' : 'pause' ); ?>"
		data-autoplayDelay="<?php echo esc_attr( $wpgp_slider_autoplay_delay ); ?>"
		data-autoplayOnHover="<?php echo esc_attr( $wpgp_slider_autoplay_on_hover ); ?>"
		data-autoplayDirection="<?php echo esc_attr( $wpgp_slider_autoplay_direction ); ?>"
		data-loop="<?php echo esc_attr( $wpgp_slider_loop ? 'true' : 'false' ); ?>"
		data-arrows="<?php echo esc_attr( $wpgp_slider_nav_show ? 'true' : 'false' ); ?>"
		data-buttons="<?php echo esc_attr( $wpgp_slider_pagination ? 'true' : 'false' ); ?>"
		data-breakpoints=<?php echo wp_json_encode( $wpps_slider_breakpoints ); ?>
		data-immersiveCarousel=<?php echo ( 'skin-2' === $wpgp_slider_skin ) ? wp_json_encode( $wpgp_immersive_carousel ) : ''; ?>>
		<div class="sp-slides">

		<?php
		if ( $wpgp_post_query->have_posts() ) :

			while ( $wpgp_post_query->have_posts() ) :

				$wpgp_post_query->the_post();
				if ( has_post_thumbnail( $wpgp_post_query->post->ID ) ) {

					$image_id            = get_post_thumbnail_id();
					$image_src_retina    = wp_get_attachment_image_src( $image_id, 'full' );
					$image_src_thumbnail = wp_get_attachment_image_src( $image_id, 'thumbnail' );

				}
				?>
				<div class="sp-slide">
					<?php if ( $wpgp_post_thumb_show ) : ?>
					<img class="sp-image" src="../src/css/images/blank.gif" data-src="<?php echo esc_url( $image_src_retina[0] ); ?>">
					<?php endif; ?>

					<div class="sp-layer sp-static sp-image-text sp-padding" data-horizontal="30" data-vertical="30" data-width="580">
						<?php if ( $wpgp_post_title_show ) : ?>
						<<?php echo esc_html( $wpgp_slider_title_html_tag ); ?> class="sp-post-title"><?php echo esc_html( get_the_title() ); ?></<?php echo esc_html( $wpgp_slider_title_html_tag ); ?>>
							<?php
						endif;
						if ( $wpgp_post_date ) :
							?>
						<p><time class="sp-post-time" datetime="<?php echo esc_attr( get_the_date( DATE_W3C ) ); ?>">
							<?php echo esc_html( get_the_date() ); ?>
						</time></p>
							<?php
						endif;
						if ( $wpgp_slider_desc_show ) :
							?>
						<p class="sp-post-desc<?php echo esc_attr( $wpgp_slider_desc_mobile_hide ); ?>"><?php echo get_the_excerpt(); ?></p>
						<?php endif; ?>
					</div>
				</div>
				<?php
			endwhile;
			wp_reset_postdata();
		endif;
		?>

		</div>

	</div>
</div>
