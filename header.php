<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="utf-8">

    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no"/>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!--<div class="load">-->
<!--    <img src="--><?php //echo get_template_directory_uri(); ?><!--/assets/img/loading.GIF" alt="loading">-->
<!--</div>-->

<!-- ============HEADER============= -->
<header>
    <div class="full-width header">
        <div class="container">
            <div class="navigation">
                <div class="menu-mobile-icon menu-hide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mobile.png" alt="mobile">
                </div>
                <div class="logo-block">
                    <div class="logo-wrapper">
						<?php the_custom_logo(); ?>
                    </div>
                </div>
                <nav class="main-menu__nav">
					<?php wp_nav_menu( [
						'theme_location'  => 'menu-top',
						'menu'            => '',
						'container'       => 'nav',
						'container_class' => '',
						'container_id'    => '',
						'menu_class'      => '',
						'menu_id'         => '',
						'echo'            => true,
						'fallback_cb'     => 'wp_page_menu',
						'before'          => '',
						'after'           => '',
						'link_before'     => '',
						'link_after'      => '',
						'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						'depth'           => 0,
						'walker'          => '',
					] ); ?>
                </nav>
                <div class="languages">
					<?php the_widget( 'WPGlobusWidget' ); ?>
                </div>
                <span class="fa fa-times close-menu"></span>
            </div>
        </div>
    </div>
</header>
