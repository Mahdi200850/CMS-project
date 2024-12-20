<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Wp Plugin Customizer Class
 *
 * @package Awp-companion Neom
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'Neom_Companion_Customizer' ) ) :

	// neom Customizer class.
	class Neom_Companion_Customizer {
		public function Neom_Customizer_settings() {
			// Diffrent Themes.
			$activate_theme_data = wp_get_theme(); // getting current theme data.
			$activate_theme      = $activate_theme_data->name;

			require awp_companion_plugin_dir . 'inc/neom/customizer/frontpage-sections/slider-customizer-settings.php';
			require awp_companion_plugin_dir . 'inc/neom/customizer/frontpage-sections/top-info-customizer-settings.php';
			require awp_companion_plugin_dir . 'inc/neom/customizer/frontpage-sections/about-customizer-settings.php';
			require awp_companion_plugin_dir . 'inc/neom/customizer/frontpage-sections/portfolio-customizer-settings.php';
			require awp_companion_plugin_dir . 'inc/neom/customizer/frontpage-sections/service-customizer-settings.php';
			require awp_companion_plugin_dir . 'inc/neom/customizer/frontpage-sections/testimonial-customizer-settings.php';
			require awp_companion_plugin_dir . 'inc/neom/customizer/frontpage-sections/funfact-customizer-settings.php';
			require awp_companion_plugin_dir . 'inc/neom/customizer/frontpage-sections/cta-customizer-settings.php';
			require awp_companion_plugin_dir . 'inc/neom/customizer/frontpage-sections/blog-customizer-settings.php';
			require awp_companion_plugin_dir . 'inc/neom/customizer/frontpage-sections/team-customizer-settings.php';
			require awp_companion_plugin_dir . 'inc/neom/customizer/frontpage-sections/faq-customizer-settings.php';
			require awp_companion_plugin_dir . 'inc/neom/customizer/frontpage-sections/client-customizer-settings.php';
			require awp_companion_plugin_dir . 'inc/neom/customizer/frontpage-sections/contact-customizer-settings.php';
			require awp_companion_plugin_dir . 'inc/neom/customizer/frontpage-sections/woocommerce-customizer-settings.php';

		}
	}
endif;

$customizer_settings = new Neom_Companion_Customizer();

$customizer_settings->Neom_Customizer_settings();
