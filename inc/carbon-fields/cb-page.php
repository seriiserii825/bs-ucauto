<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_page_finance_options' );
function crb_attach_page_finance_options() {
	Container::make( 'post_meta', __( 'Illustration' ) )
	 ->where( 'post_id', '=', 82 )
	 ->add_tab( __( 'Table' ), array(
		 Field::make( 'complex', 'crb_main_banner', __( 'Main banner slider' ) )
			  ->add_fields( array(
				  Field::make( 'text', 'title_ro', __( 'title_ro' ) )
					   ->set_width( 30 ),
				  Field::make( 'text', 'title_ru', __( 'title_ru' ) )
					   ->set_width( 30 ),
				  Field::make( 'text', 'title_en', __( 'title_en' ) )
					   ->set_width( 30 ),
	
				  Field::make( 'text', 'text_ro', __( 'text_ro' ) )
					   ->set_width( 30 ),
				  Field::make( 'text', 'text_ru', __( 'text_ru' ) )
					   ->set_width( 30 ),
				  Field::make( 'text', 'text_en', __( 'text_en' ) )
					   ->set_width( 30 ),
	
				  Field::make( 'image', 'crb_image', __( 'image' ) )
					   ->set_value_type( 'url' )
			  ) )
			  ->set_layout( 'tabbed-horizontal' ),
	 ) );
	
}


add_action( 'carbon_fields_register_fields', 'crb_attach_page_video_options' );
function crb_attach_page_video_options() {
	Container::make( 'post_meta', __( 'Video' ) )
	         ->where( 'post_id', '=', 285 )
	         ->add_tab( __( 'Video' ), array(
		         Field::make( 'complex', 'crb_video', __( 'Video gallery' ) )
		              ->add_fields( array(
			              Field::make( 'text', 'title_ro', __( 'title_ro' ) )
			                   ->set_width( 30 ),
			              Field::make( 'text', 'title_ru', __( 'title_ru' ) )
			                   ->set_width( 30 ),
			              Field::make( 'text', 'title_en', __( 'title_en' ) )
			                   ->set_width( 30 ),
			
			              Field::make( 'image', 'crb_image', __( 'Image' ) )
			                   ->set_type( array( 'video' ) )
				              ->set_value_type( 'url' )
		              ) )
		              ->set_layout( 'tabbed-horizontal' ),
	         ) );
	
}
