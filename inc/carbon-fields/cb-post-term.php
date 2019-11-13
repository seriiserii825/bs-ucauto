<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_news_post_options' );
function crb_news_post_options() {
	Container::make( 'post_meta', __( 'Short text for Home' ) )
	         ->where( 'post_term', '=', array(
		         'field'    => 'slug',
		         'value'    => 'services',
		         'taxonomy' => 'category',
	         ) )
	         ->add_fields( array(
		         Field::make( 'textarea', 'cb_services_short_text_ro', __( 'cb_services_short_text_ro' ) )
		              ->set_width( 30 ),
		         Field::make( 'textarea', 'cb_services_short_text_ru', __( 'cb_services_short_text_ru' ) )
		              ->set_width( 30 ),
		         Field::make( 'textarea', 'cb_services_short_text_en', __( 'cb_services_short_text_en' ) )
		              ->set_width( 30 ),
	         ) );
}

