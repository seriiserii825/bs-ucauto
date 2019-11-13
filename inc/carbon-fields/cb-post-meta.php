<?php

if (!defined('ABSPATH')) exit;

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', 'crb_single_post_options');
function crb_single_post_options()
{
	Container::make('post_meta', __('Gallery'))
	 ->add_fields(array(
		 Field::make( 'media_gallery', 'crb_media_gallery', __( 'Media Gallery' ) )
		      ->set_duplicates_allowed( false )
	 ));
}

