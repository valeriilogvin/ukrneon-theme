<?php

/**
 * Deregister JQery
 */
function jquery_script_method() {
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', false, null, true );
	wp_enqueue_script( 'jquery' );
}
add_action( 'wp_enqueue_scripts', 'jquery_script_method' );

function wood_scripts() {
	wp_enqueue_style(
		'wood-libsCSS',
		get_stylesheet_directory_uri() . '/dist/css/libs.min.css',
		array(),
		'1.0'
	);
	wp_enqueue_style(
		'wood-lightgallery',
		'https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css',
		array(),
		'1.0'
	);

	wp_enqueue_style(
		'wood-style',
		get_stylesheet_directory_uri() . '/dist/css/main.min.css',
		array(),
		'1.0'
	);


	wp_enqueue_script(
		'wood-lg-lightgallery',
		'https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js',
		array(),
		'1.0',
		true
	);
	wp_enqueue_script(
		'wood-lg-lightgallery',
		'//code.jquery.com/jquery-migrate-1.2.1.min.js',
		array(),
		'1.0',
		true
	);
    wp_enqueue_script(
        'wood-libs',
        get_template_directory_uri() . '/dist/js/libs.min.js',
        array(),
        '1.1',
        true
    );
	wp_enqueue_script(
		'wood-mainJs',
		get_template_directory_uri() . '/js/main.js',
		array(),
		'1.0',
		true
	);
}
add_action( 'wp_enqueue_scripts', 'wood_scripts' );


function the_acf_loop(){
	get_template_part('template-parts/loop/acf-blocks','loop');
}


add_filter('wpcf7_autop_or_not', '__return_false');