<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once __DIR__.'/inc/carbon-fields/cb.php';
require_once __DIR__.'/inc/carbon-fields/cb-page.php';
require_once __DIR__.'/inc/carbon-fields/cb-post-term.php';
require_once __DIR__.'/inc/carbon-fields/cb-term.php';
require_once __DIR__.'/inc/carbon-fields/cb-post-meta.php';

require_once __DIR__.'/func.php';
require_once __DIR__.'/inc/bs-styles.php';
require_once __DIR__.'/inc/bs-widgets.php';
require_once __DIR__.'/inc/bs-setup-theme.php';
require_once __DIR__.'/inc/bs-post-type.php';
require_once __DIR__.'/inc/classes/MainMenuWalker.php';

function bs_ucauto_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'bs_ucauto_content_width', 640 );
}
add_action( 'after_setup_theme', 'bs_ucauto_content_width', 0 );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

