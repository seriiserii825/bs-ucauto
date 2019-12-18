<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}


if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function get_short_text_clear( $content, $count ) {
	$short_text = $content;

	return mb_substr( $short_text, 0, $count );
}

//	if ( function_exists( ‘wp_ulike’ ) ) {
//		wp_ulike( ‘get’ );
//	}

function get_short_text( $content, $count ) {
	$short_text    = $content;
	$text_ro       = '{:ro}';
	$text_ru       = '{:ru}';
	$text_en       = '{:en}';
	$pos_ro        = strpos( $short_text, $text_ro ) + 5;
	$pos_ru        = strpos( $short_text, $text_ru ) + 5;
	$pos_en        = strpos( $short_text, $text_en ) + 5;
	$short_text_ro = mb_substr( $short_text, $pos_ro, $count );
	$short_text_ru = mb_substr( $short_text, $pos_ru, $count );
	$short_text_en = mb_substr( $short_text, $pos_en, $count );
	if ( get_lang() === '_ro' ) {
		$short_text = $short_text_ro;
	} elseif ( get_lang() === '_ru' ) {
		$short_text = $short_text_ru;
	} else {
		$short_text = $short_text_en;
	}

	$short_text = str_replace( [ '<strong>', '</strong>' ], '', $short_text );

	return $short_text;
}


function getThePostThumbSrc( $width, $height ) {
	$id = get_the_ID();

	return kama_thumb_src( 'w=' . $width . ' &h=' . $height . ' &post_id=' . $id . '' );
}

function clear_phone( $phone ) {
	return str_replace( [ '(', ')', '-', '+', ' ' ], '', $phone );
}

function vardump( $var ) {
	echo '<pre>';
	var_dump( $var );
	echo '</pre>';
}

function carbon_lang() {
	$suffix = '';
	if ( ! defined( 'ICL_LANGUAGE_CODE' ) ) {
		return $suffix;
	}
	$suffix = '_' . ICL_LANGUAGE_CODE;

	return $suffix;
}

function trim_content( $content, $count ) {
	$trimmed_content = wp_trim_words( $content, $count, '<a href="' . get_permalink() . '"></a>' );

	return $trimmed_content;
}

function get_lang() {
	$suffix = '';

	if ( get_locale() == 'en_US' ) {
		$suffix = '_en';
	}
	if ( get_locale() == 'ru_RU' ) {
		$suffix = '_ru';
	}
	if ( get_locale() == 'ro_RO' ) {
		$suffix = '_ro';
	}

	return strtolower( $suffix );
}

function my_revisions_to_keep( $revisions ) {
	return 2;
}

add_filter( 'wp_revisions_to_keep', 'my_revisions_to_keep' );


// allow SVG uploads
add_filter( 'upload_mimes', 'custom_upload_mimes' );
function custom_upload_mimes( $existing_mimes = array() ) {
	$existing_mimes['svg'] = 'image/svg+xml';

	return $existing_mimes;
}

add_action( 'wp_ajax_feedback_action', 'ajax_action_callback' );
add_action( 'wp_ajax_nopriv_feedback_action', 'ajax_action_callback' );
/**
 * Обработка скрипта
 *
 * @see https://wpruse.ru/?p=3224
 */
function ajax_action_callback() {

	// Массив ошибок
	$err_message = array();

	// Проверяем nonce. Если проверкане прошла, то блокируем отправку
	if ( ! wp_verify_nonce( $_POST['nonce'], 'feedback-nonce' ) ) {
		wp_die( 'Данные отправлены с левого адреса' );
	}

	// Проверяем на спам. Если скрытое поле заполнено или снят чек, то блокируем отправку
	if ( false === $_POST['art_anticheck'] || ! empty( $_POST['art_submitted'] ) ) {
		wp_die( 'Пошел нахрен, мальчик!(c)' );
	}

	// Проверяем полей имени, если пустое, то пишем сообщение в массив ошибок
	if ( empty( $_POST['art_name'] ) || ! isset( $_POST['art_name'] ) ) {
		$err_message['name'] = 'Пожалуйста, введите ваше имя.';
	} else {
		$art_name = sanitize_text_field( $_POST['art_name'] );
	}

	// Проверяем полей емайла, если пустое, то пишем сообщение в массив ошибок
	if ( empty( $_POST['art_email'] ) || ! isset( $_POST['art_email'] ) ) {
		$err_message['email'] = 'Пожалуйста, введите адрес вашей электронной почты.';
	} elseif ( ! preg_match( '/^[[:alnum:]][a-z0-9_.-]*@[a-z0-9.-]+\.[a-z]{2,4}$/i', $_POST['art_email'] ) ) {
		$err_message['email'] = 'Адрес электронной почты некорректный.';
	} else {
		$art_email = sanitize_email( $_POST['art_email'] );

	}
	// Проверяем полей темы письма, если пустое, то пишем сообщение по умолчанию
	if ( empty( $_POST['art_subject'] ) || ! isset( $_POST['art_subject'] ) ) {
		$art_subject = 'Сообщение с сайта';
	} else {
		$art_subject = sanitize_text_field( $_POST['art_subject'] );
	}

	// Проверяем полей сообщения, если пустое, то пишем сообщение в массив ошибок
	if ( empty( $_POST['art_comments'] ) || ! isset( $_POST['art_comments'] ) ) {
		$err_message['comments'] = 'Пожалуйста, введите ваше сообщение.';
	} else {
		$art_comments = sanitize_textarea_field( $_POST['art_comments'] );
	}

	// Проверяем массив ошибок, если не пустой, то передаем сообщение. Иначе отправляем письмо
	if ( $err_message ) {

		wp_send_json_error( $err_message );

	} else {

		// Указываем адресата
		$email_to = '';

		// Если адресат не указан, то берем данные из настроек сайта
		if ( ! $email_to ) {
			$email_to = get_option( 'admin_email' );
		}

		$body    = "Имя: $art_name \nEmail: $art_email \n\nСообщение: $art_comments";
		$headers = 'From: ' . $art_name . ' <' . $email_to . '>' . "\r\n" . 'Reply-To: ' . $email_to;

		// Отправляем письмо
		wp_mail( $email_to, $art_subject, $body, $headers );

		// Отправляем сообщение об успешной отправке
		$message_success = 'Собщение отправлено. В ближайшее время я свяжусь с вами.';
		wp_send_json_success( $message_success );
	}

	// На всякий случай убиваем еще раз процесс ajax
	wp_die();

}
