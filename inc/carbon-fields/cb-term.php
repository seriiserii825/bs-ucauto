<?php

if (!defined('ABSPATH')) exit;

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', 'crb_term_options');
function crb_term_options()
{
	Container::make('term_meta', __('Short text for Home'))
		->where( 'term_taxonomy', '=', 'category' )
		 ->add_fields(array(
			 Field::make( 'image', 'cb_term_image', __( 'cb_term_image' ) )
			 ->set_value_type('url')
			 ->set_help_text('1920x340')
		 ));
}

