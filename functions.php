<?php
/**
 * Undocumented function
 *
 * @return void
 */
function mgm_lp_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'custom-units', 'rem', 'em' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'custom-spacing' );
	add_theme_support( 'appearance-tools' );
	add_theme_support( 'border' );
	add_theme_support( 'link-color' );

	add_theme_support(
		'editor-color-palette',
		array(
			array(
				'name'  => esc_attr__( 'strong magenta', 'mgm-lp' ),
				'slug'  => 'strong-magenta',
				'color' => '#a156b4',
			),
			array(
				'name'  => esc_attr__( 'light grayish magenta', 'mgm-lp' ),
				'slug'  => 'light-grayish-magenta',
				'color' => '#d0a5db',
			),
			array(
				'name'  => esc_attr__( 'very light gray', 'mgm-lp' ),
				'slug'  => 'very-light-gray',
				'color' => '#eee',
			),
			array(
				'name'  => esc_attr__( 'very dark gray', 'mgm-lp' ),
				'slug'  => 'very-dark-gray',
				'color' => '#444',
			),
		)
	);

}

add_action( 'after_setup_theme', 'theme_mgm_setup' );




function theme_slug_enqueue_styles() {
	wp_enqueue_style( 
		'theme-slug-style', 
		get_stylesheet_uri()
	);

	wp_enqueue_style( 
		'theme-slug-primary',
		get_parent_theme_file_uri( 'assets/css/primary.css' )
	);

	add_editor_style( get_stylesheet_uri() );
}

add_action( 'wp_enqueue_scripts', 'theme_slug_enqueue_styles' );