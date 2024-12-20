<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Fetch theme parts.
 *
 * @package neom-companion.
 */

// Customizer Sections.
require awp_companion_plugin_dir . 'inc/neom/customizer/neom-companion-customizer.php';

require awp_companion_plugin_dir . 'inc/neom/customizer/frontpage-customizer-options.php';

require awp_companion_plugin_dir . 'inc/neom/customizer/neom-customizer-default.php';

// Frontpage Sections.
if ( ! function_exists( 'neom_frontpage_sections' ) ) :
	/** Fetch Frontpage sections. */
	function neom_frontpage_sections() {
		// Diffrent Themes.
		$activate_theme_data = wp_get_theme(); // getting current theme data.
		$activate_theme      = $activate_theme_data->name;

		require awp_companion_plugin_dir . 'inc/neom/front-page/section-slider.php';

		require awp_companion_plugin_dir . 'inc/neom/front-page/section-top-info.php';

		require awp_companion_plugin_dir . 'inc/neom/front-page/section-about.php';

		require awp_companion_plugin_dir . 'inc/neom/front-page/section-callout.php';

		require awp_companion_plugin_dir . 'inc/neom/front-page/section-service.php';

		require awp_companion_plugin_dir . 'inc/neom/front-page/section-funfact.php';

		require awp_companion_plugin_dir . 'inc/neom/front-page/section-portfolio.php';

		require awp_companion_plugin_dir . 'inc/neom/front-page/section-testimonial.php';

		require awp_companion_plugin_dir . 'inc/neom/front-page/section-blog.php';

		require awp_companion_plugin_dir . 'inc/neom/front-page/section-faq.php';

		require awp_companion_plugin_dir . 'inc/neom/front-page/section-team.php';

		require awp_companion_plugin_dir . 'inc/neom/front-page/section-contact.php';

		require awp_companion_plugin_dir . 'inc/neom/front-page/section-client.php';

	}
	add_action( 'neom_frontpage', 'neom_frontpage_sections' );
endif;
