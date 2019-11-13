<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function bs_ucauto_scripts() {
	wp_enqueue_style( 'bs-ucauto-style', get_stylesheet_uri() );
	wp_enqueue_style( 'bs-bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
	wp_enqueue_style( 'bs-helper-css', get_template_directory_uri() . '/assets/css/helper.css' );
	wp_enqueue_style( 'bs-font-awesome.min-css', get_template_directory_uri() . '/assets/css/font-awesome.min.css' );
	wp_enqueue_style( 'bs-jquery-ui.min-css', get_template_directory_uri() . '/assets/css/jquery-ui.min.css' );
	wp_enqueue_style( 'bs-jquery-ui.theme.min-css', get_template_directory_uri() . '/assets/css/jquery-ui.theme.min.css' );
	wp_enqueue_style( 'bs-jquery-ui.theme.min-css', get_template_directory_uri() . '/assets/css/jquery-ui.theme.min.css' );
	wp_enqueue_style( 'bs-slick-style', get_template_directory_uri() . '/assets/libs/slick/slick.css' );
	wp_enqueue_style( 'bs-magninfic_popup.min-style', get_template_directory_uri() . '/assets/libs/magnificPopup/magnific_popup.css' );
	wp_enqueue_style( 'bs-style-style', get_template_directory_uri() . '/assets/css/my.css' );
	wp_enqueue_style( 'bs-media-style', get_template_directory_uri() . '/assets/css/bs-media.css' );

	
	wp_enqueue_script( 'bs-ucauto-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'bs-ucauto-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	
	
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js' );
	wp_enqueue_script( 'jquery' );
	
	wp_enqueue_script( 'bs-mixitup.min-js', get_template_directory_uri() . '/assets/js/jquery.mixitup.min.js', array('jquery'), null, true );
	wp_enqueue_script( 'bs-jquery-ui.min-js', get_template_directory_uri() . '/assets/js/jquery-ui.min.js', array('jquery'), null, true );
	wp_enqueue_script( 'bs-bootstrap.min-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), null, true );
	wp_enqueue_script( 'bs-idangerous.swiper.min-js', get_template_directory_uri() . '/assets/js/idangerous.swiper.min.js', array('jquery'), null, true );
	wp_enqueue_script( 'bs-idangerous.swiper.min-js', get_template_directory_uri() . '/assets/js/idangerous.swiper.min.js', array('jquery'), null, true );
	wp_enqueue_script( 'bs-slick.min-js', get_template_directory_uri() . '/assets/libs/slick/slick.min.js', array('jquery'), null, true );
	wp_enqueue_script( 'bs-magninfic_popup.min-js', get_template_directory_uri() . '/assets/libs/magnificPopup/magnific_popup.min.js', array('jquery'), null, true );
	wp_enqueue_script( 'bs-all-js', get_template_directory_uri() . '/assets/js/all.js', array('jquery'), null, true );
	wp_enqueue_script( 'bs-my-js', get_template_directory_uri() . '/assets/js/my.js', array('jquery'), null, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'bs_ucauto_scripts' );
