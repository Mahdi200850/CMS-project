<?php

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// BEGIN ENQUEUE PARENT ACTION.
// AUTO GENERATED - Do not modify or remove comment markers above or below.
if ( ! function_exists( 'metaverse_chld_thm_locale_css' ) ) :
	function metaverse_chld_thm_locale_css( $uri ) {
		if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) ) {
			$uri = get_template_directory_uri() . '/rtl.css';
		}
		return $uri;
	}
endif;
add_filter( 'locale_stylesheet_uri', 'metaverse_chld_thm_locale_css' );


if ( ! function_exists( 'metaverse_chld_thm_parent_css' ) ) :
	function metaverse_chld_thm_parent_css() {
		wp_enqueue_style( 'metaverse_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array( 'bootstrap-min', 'animate-min', 'fontawesome-min', 'carousel-min', 'odometer-min', 'bootstrap-smartmenus-css', 'menu-css', 'responsive' ) );
		$metaverse_custom_color = get_theme_mod( 'formula_custom_color', false );
		if ( $metaverse_custom_color == false ) {
			wp_enqueue_style( 'metaverse-gradient', get_stylesheet_directory_uri() . '/assets/css/metaverse-gradient.css' );
		}
	}
endif;
add_action( 'wp_enqueue_scripts', 'metaverse_chld_thm_parent_css', 10 );


/**
 * Import Options From Parent Theme
 */
function metaverse_parent_theme_options() {
	$metaverse_mods = get_option( 'theme_mods_formula' );
	if ( ! empty( $metaverse_mods ) ) {
		foreach ( $metaverse_mods as $metaverse_mod_k => $metaverse_mod_v ) {
			set_theme_mod( $metaverse_mod_k, $metaverse_mod_v );
		}
	}
}
add_action( 'after_switch_theme', 'metaverse_parent_theme_options' );

/**
 * Fresh site activate
 */
$metaverse_fresh_site_activate = get_option( 'metaverse_fresh_site_activate' );
if ( (bool) $metaverse_fresh_site_activate == false ) {
	set_theme_mod( 'formula_custom_color', false );
	set_theme_mod( 'formula_dark_theme_mode', true );
	set_theme_mod( 'link_color', '#086bd8' );
	update_option( 'metaverse_fresh_site_activate', true );
}
