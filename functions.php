<?php
if (function_exists('acf_add_options_page')) {
    acf_add_options_page();
}

function theme_slug_enqueue_styles() {
	wp_enqueue_style(
		'theme-slug-style', 
		get_stylesheet_uri()
	);
    
	wp_enqueue_style( 
		'theme-slug-primary',
		get_parent_theme_file_uri( 'assets/css/main.css' )
	);

	// New styles added
	wp_enqueue_style(
		'theme-slug-bootstrap',
		get_parent_theme_file_uri( 'assets/css/bootstrap/bootstrap.min.css' )
	);

	wp_enqueue_style(
		'theme-slug-fonts',
		'https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap'
	);
}
add_action( 'wp_enqueue_scripts', 'theme_slug_enqueue_styles' );


function enable_featured_images() {
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'enable_featured_images');
