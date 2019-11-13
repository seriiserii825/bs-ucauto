<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options() {
	$basic_options_container = Container::make( 'theme_options', __( 'Carbon Fields' ) )
	                                    ->add_tab( __( 'Titles' ), array(
		                                    Field::make( 'text', 'crb_single_resize_ro', __( 'single_resize ro' ) )
		                                         ->set_width( 30 ),
		                                    Field::make( 'text', 'crb_single_resize_ru', __( 'single_resize ru' ) )
		                                         ->set_width( 30 ),
		                                    Field::make( 'text', 'crb_single_resize_en', __( 'single_resize en' ) )
		                                         ->set_width( 30 ),
	                                    ) )
	                                    ->add_tab( __( 'Address' ), array(
		                                    Field::make( 'text', 'crb_address_ro', __( 'address ro' ) )
		                                         ->set_width( 30 ),
		                                    Field::make( 'text', 'crb_address_ru', __( 'address ru' ) )
		                                         ->set_width( 30 ),
		                                    Field::make( 'text', 'crb_address_en', __( 'address en' ) )
		                                         ->set_width( 30 ),
	                                    ) )
	                                    ->add_tab( __( 'Phones' ), array(
		                                    Field::make( 'text', 'crb_phone_1', __( 'crb_phone_1' ) )
		                                         ->set_width( 30 ),
		                                    Field::make( 'text', 'crb_phone_2', __( 'crb_phone_2' ) )
		                                         ->set_width( 30 ),
		                                    Field::make( 'text', 'crb_phone_3', __( 'crb_phone_3' ) )
		                                         ->set_width( 30 ),
		                                    Field::make( 'text', 'crb_phone_4', __( 'crb_phone_4' ) )
		                                         ->set_width( 30 ),
		                                    Field::make( 'text', 'crb_phone_5', __( 'crb_phone_5' ) )
		                                         ->set_width( 30 ),
	                                    ) )
	                                    ->add_tab( __( 'Socials' ), array(
		                                    Field::make( 'text', 'crb_facebook', __( 'crb_facebook' ) )
		                                         ->set_width( 30 ),
		                                    Field::make( 'text', 'crb_twitter', __( 'crb_twitter' ) )
		                                         ->set_width( 30 ),
		                                    Field::make( 'text', 'crb_pinterest', __( 'crb_pinterest' ) )
		                                         ->set_width( 30 ),
	                                    ) )
	                                    ->add_tab( __( 'Email' ), array(
		                                    Field::make( 'text', 'crb_mail', __( 'crb_mail' ) )
		                                         ->set_width( 30 ),
	                                    ) );
	
	// Add second options page under 'Basic Options'
	Container::make( 'theme_options', 'Blocks' )
	         ->set_page_parent( $basic_options_container )// reference to a top level container
	         ->add_tab( __( 'Our offers' ), array(
			
			Field::make( 'complex', 'crb_main_banner', __( 'Main banner slider' ) )
			     ->add_fields( array(
				     Field::make( 'text', 'title_ro', __( 'title_ro' ) )
				          ->set_width( 30 ),
				     Field::make( 'text', 'title_ru', __( 'title_ru' ) )
				          ->set_width( 30 ),
				     Field::make( 'text', 'title_en', __( 'title_en' ) )
				          ->set_width( 30 ),
				
				     Field::make( 'image', 'crb_image', __( 'image' ) )
				          ->set_value_type( 'url' )
			     ) )
			     ->set_layout( 'tabbed-horizontal' ),
			Field::make( 'complex', 'crb_slider', __( 'Slider' ) )
			     ->add_fields( array(
				     Field::make( 'text', 'crb_our_offers_title_ro', __( 'crb_our_offers_title_ro' ) )
				          ->set_width( 30 ),
				     Field::make( 'text', 'crb_our_offers_title_ru', __( 'crb_our_offers_title_ru' ) )
				          ->set_width( 30 ),
				     Field::make( 'text', 'crb_our_offers_title_en', __( 'crb_our_offers_title_en' ) )
				          ->set_width( 30 ),
				
				     Field::make( 'text', 'crb_our_offers_text_ro', __( 'crb_our_offers_text_ro' ) )
				          ->set_width( 30 ),
				     Field::make( 'text', 'crb_our_offers_text_ru', __( 'crb_our_offers_text_ru' ) )
				          ->set_width( 30 ),
				     Field::make( 'text', 'crb_our_offers_text_en', __( 'crb_our_offers_text_en' ) )
				          ->set_width( 30 ),
				
				     Field::make( 'textarea', 'crb_our_offers_svg_icon', __( 'crb_our_offers_image' ) )
			     ) )
			     ->set_layout( 'tabbed-horizontal' )
		) )
	         ->add_tab( __( 'Auto categories' ), array(
		         Field::make( 'text', 'crb_categories_title_ro', __( 'crb_categories_title_ro' ) )
		              ->set_width( 30 ),
		         Field::make( 'text', 'crb_categories_title_ru', __( 'crb_categories_title_ru' ) )
		              ->set_width( 30 ),
		         Field::make( 'text', 'crb_categories_title_en', __( 'crb_categories_title_en' ) )
		              ->set_width( 30 ),
		
		         Field::make( 'text', 'crb_categories_text_ro', __( 'crb_categories_text_ro' ) )
		              ->set_width( 30 ),
		         Field::make( 'text', 'crb_categories_text_ru', __( 'crb_categories_text_ru' ) )
		              ->set_width( 30 ),
		         Field::make( 'text', 'crb_categories_text_en', __( 'crb_categories_text_en' ) )
		              ->set_width( 30 ),
		
		         Field::make( 'complex', 'crb_categories_slider', __( 'Categories slider' ) )
		              ->add_fields( array(
			              Field::make( 'text', 'crb_sub_cat_name_ro', __( 'crb_sub_cat_name_ro' ) )
			                   ->set_width( 30 ),
			              Field::make( 'text', 'crb_sub_cat_name_ru', __( 'crb_sub_cat_name_ru' ) )
			                   ->set_width( 30 ),
			              Field::make( 'text', 'crb_sub_cat_name_en', __( 'crb_sub_cat_name_en' ) )
			                   ->set_width( 30 ),
			
			              Field::make( 'text', 'crb_sub_cat_description_ro', __( 'crb_sub_cat_description_ro' ) )
			                   ->set_width( 30 ),
			              Field::make( 'text', 'crb_sub_cat_description_ru', __( 'crb_sub_cat_description_ru' ) )
			                   ->set_width( 30 ),
			              Field::make( 'text', 'crb_sub_cat_description_en', __( 'crb_sub_cat_description_en' ) )
			                   ->set_width( 30 ),
			
			
			              Field::make( 'textarea', 'crb_svg_image', __( 'crb_svg_image' ) ),
			              Field::make( 'image', 'crb_img_real', __( 'crb_img_real' ) )
			                   ->set_value_type( 'url' ),
		              ) )
		              ->set_layout( 'tabbed-horizontal' )
	         ) )
	         ->add_tab( __( 'Our services' ), array(
		         Field::make( 'text', 'crb_our_services_title_ro', __( 'crb_our_services_title_ro' ) )
		              ->set_width( 30 ),
		         Field::make( 'text', 'crb_our_services_title_ru', __( 'crb_our_services_title_ru' ) )
		              ->set_width( 30 ),
		         Field::make( 'text', 'crb_our_services_title_en', __( 'crb_our_services_title_en' ) )
		              ->set_width( 30 ),
		
		         Field::make( 'text', 'crb_our_services_btn_ro', __( 'crb_our_services_btn_ro' ) )
		              ->set_width( 30 ),
		         Field::make( 'text', 'crb_our_services_btn_ru', __( 'crb_our_services_btn_ru' ) )
		              ->set_width( 30 ),
		         Field::make( 'text', 'crb_our_services_btn_en', __( 'crb_our_services_btn_en' ) )
		              ->set_width( 30 ),
	         ) )
	         ->add_tab( __( 'Cities' ), array(
		         Field::make( 'text', 'crb_cities_title_ro', __( 'crb_cities_title_ro' ) )
		              ->set_width( 30 ),
		         Field::make( 'text', 'crb_cities_title_ru', __( 'crb_cities_title_ru' ) )
		              ->set_width( 30 ),
		         Field::make( 'text', 'crb_cities_title_en', __( 'crb_cities_title_en' ) )
		              ->set_width( 30 ),
	         ) )
	         ->add_tab( __( 'Footer' ), array(
		         Field::make( 'text', 'crb_footer_menu_title_ro', __( 'crb_footer_menu_title_ro' ) )
		              ->set_width( 30 ),
		         Field::make( 'text', 'crb_footer_menu_title_ru', __( 'crb_footer_menu_title_ru' ) )
		              ->set_width( 30 ),
		         Field::make( 'text', 'crb_footer_menu_title_en', __( 'crb_footer_menu_title_en' ) )
		              ->set_width( 30 ),
		
		         Field::make( 'text', 'crb_footer_contacts_title_ro', __( 'crb_footer_contacts_title_ro' ) )
		              ->set_width( 30 ),
		         Field::make( 'text', 'crb_footer_contacts_title_ru', __( 'crb_footer_contacts_title_ru' ) )
		              ->set_width( 30 ),
		         Field::make( 'text', 'crb_footer_contacts_title_en', __( 'crb_footer_contacts_title_en' ) )
		              ->set_width( 30 ),
		
		         Field::make( 'text', 'crb_footer_map_title_ro', __( 'crb_footer_map_title_ro' ) )
		              ->set_width( 30 ),
		         Field::make( 'text', 'crb_footer_map_title_ru', __( 'crb_footer_map_title_ru' ) )
		              ->set_width( 30 ),
		         Field::make( 'text', 'crb_footer_map_title_en', __( 'crb_footer_map_title_en' ) )
		              ->set_width( 30 ),
	         ) )
	         ->add_tab( __( 'History' ), array(
		         Field::make( 'complex', 'crb_history', __( 'History fields' ) )
		              ->add_fields( array(
			              Field::make( 'text', 'title_ro', __( 'title_ro' ) )
			                   ->set_width( 30 ),
			              Field::make( 'text', 'title_ru', __( 'title_ru' ) )
			                   ->set_width( 30 ),
			              Field::make( 'text', 'title_en', __( 'title_en' ) )
			                   ->set_width( 30 ),
			
			              Field::make( 'rich_text', 'text_ro', __( 'text_ro' ) ),
			              Field::make( 'rich_text', 'text_ru', __( 'text_ru' ) ),
			              Field::make( 'rich_text', 'text_en', __( 'text_en' ) ),
			
			              Field::make( 'image', 'crb_image', __( 'image' ) )
			                   ->set_value_type( 'url' )
		              ) )
		              ->set_layout( 'tabbed-horizontal' ),
	         ) );
	
}

add_action( 'after_setup_theme', 'crb_load' );
function crb_load() {
	require_once( __DIR__ . '/../../vendor/autoload.php' );
	\Carbon_Fields\Carbon_Fields::boot();
}
