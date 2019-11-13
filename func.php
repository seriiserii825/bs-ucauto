<?php

if (!defined('ABSPATH')) exit;

function getThePostThumbSrc($width, $height){
	$id = get_the_ID();
	return kama_thumb_src('w='.$width.' &h='.$height.' &post_id='.$id.'');
}

function clear_phone($phone)
{
	return str_replace(['(', ')', '-', '+', ' '], '', $phone);
}

## Удаляет "Рубрика: ", "Метка: " и т.д. из заголовка архива
add_filter( 'get_the_archive_title', function( $title ){
	return preg_replace('~^[^:]+: ~', '', $title );
});

function vardump($var)
{
	echo '<pre>';
	var_dump($var);
	echo '</pre>';
}

function carbon_lang()
{
	$suffix = '';
	if (!defined('ICL_LANGUAGE_CODE')) {
		return $suffix;
	}
	$suffix = '_' . ICL_LANGUAGE_CODE;
	return $suffix;
}

function trim_content($content, $count)
{
	$trimmed_content = wp_trim_words($content, $count, '<a href="' . get_permalink() . '"></a>');
	return $trimmed_content;
}

function get_lang()
{
	$suffix = '';
	
	if (get_locale() == 'en_US') {
		$suffix = '_en';
	}
	if (get_locale() == 'ru_RU') {
		$suffix = '_ru';
	}
	if (get_locale() == 'ro_RO') {
		$suffix = '_ro';
	}
	
	return strtolower($suffix);
}

function my_revisions_to_keep($revisions)
{
	return 2;
}

add_filter('wp_revisions_to_keep', 'my_revisions_to_keep');


//function webp_upload_mimes( $existing_mimes ) {
//	// add webp to the list of mime types
//	$existing_mimes['webp'] = 'image/webp';
//
//	// return the array back to the function with our added mime type
//	return $existing_mimes;
//}
//add_filter( 'mime_types', 'webp_upload_mimes' );
