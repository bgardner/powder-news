<?php

/**
 * Enqueue editor styles.
 *
 * @since 0.5.0
 */
function powder_news_setup() {

	add_editor_style( get_stylesheet_directory_uri() . '/style.css' );

}
add_action( 'after_setup_theme', 'powder_news_setup' );

/**
 * Enqueue frontend styles.
 *
 * @since 0.5.0
 */
function powder_news_enqueue_style_sheet() {

	wp_enqueue_style(
		'powder-news',
		get_stylesheet_directory_uri() . '/style.css',
		array(),
		wp_get_theme()->get( 'Version' )
	);

}
add_action( 'wp_enqueue_scripts', 'powder_news_enqueue_style_sheet', 15 );


/**
 * Register block styles.
 *
 * @since 0.5.0
 */
function powder_news_register_block_styles() {

	$block_styles = array(
		'core/navigation-link' => array(
			'fill' => __( 'Fill', 'powder-news' ),
		),
		'core/social-links' => array(
			'outline' => __( 'Outline', 'powder-news' ),
		),
	);

	foreach ( $block_styles as $block => $styles ) {
		foreach ( $styles as $style_name => $style_label ) {
			register_block_style(
				$block,
				array(
					'name'  => $style_name,
					'label' => $style_label,
				)
			);
		}
	}

}
add_action( 'init', 'powder_news_register_block_styles' );
