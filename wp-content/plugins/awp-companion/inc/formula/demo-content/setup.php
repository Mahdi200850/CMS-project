<?php
/**
 * @package formula Starter Sites
 * @since 1.0
 */


/**
 * Set import files
 */
if ( ! function_exists( 'formula_starter_sites_import_files' ) ) {

	function formula_starter_sites_import_files() {

		// Demos url
		$demo_url = awp_companion_plugin_url;

		return array(
			array(
				'import_file_name'           => esc_html__( 'Formula Original', 'formula' ),
				'categories'                 => array( 'Free Demos' ),
				'import_file_url'            => $demo_url . '/inc/formula/demo-content/formula/formula-content.xml',
				'import_widget_file_url'     => $demo_url . '/inc/formula/demo-content/formula/formula-widgets.wie',
				'import_customizer_file_url' => $demo_url . '/inc/formula/demo-content/formula/formula-customizer.dat',
				'preview_url'                => 'https://awplife.com/demo/formula/',
				'import_preview_image_url'   => $demo_url . '/inc/formula/demo-content/formula/thumb.png',
			),
			array(
				'import_file_name'           => esc_html__( 'Formula Dark', 'formula' ),
				'categories'                 => array( 'Free Demos' ),
				'import_file_url'            => $demo_url . '/inc/formula/demo-content/formula-dark/formula-dark-content.xml',
				'import_widget_file_url'     => $demo_url . '/inc/formula/demo-content/formula-dark/formula-dark-widgets.wie',
				'import_customizer_file_url' => $demo_url . '/inc/formula/demo-content/formula-dark/formula-dark-customizer.dat',
				'preview_url'                => 'https://awplife.com/demo/formula-dark/',
				'import_preview_image_url'   => $demo_url . '/inc/formula/demo-content/formula-dark/thumb.png',
			),

			array(
				'import_file_name'           => esc_html__( 'Formula Light', 'formula' ),
				'categories'                 => array( 'Free Demos' ),
				'import_file_url'            => $demo_url . '/inc/formula/demo-content/formula-light/formula-light-content.xml',
				'import_widget_file_url'     => $demo_url . '/inc/formula/demo-content/formula-light/formula-light-widgets.wie',
				'import_customizer_file_url' => $demo_url . '/inc/formula/demo-content/formula-light/formula-light-customizer.dat',
				'preview_url'                => 'https://awplife.com/demo/formula-light/',
				'import_preview_image_url'   => $demo_url . '/inc/formula/demo-content/formula-light/thumb.png',
			),

			array(
				'import_file_name'           => esc_html__( 'Nature Formula', 'formula' ),
				'categories'                 => array( 'Free Demos' ),
				'import_file_url'            => $demo_url . '/inc/formula/demo-content/nature/nature-content.xml',
				'import_widget_file_url'     => $demo_url . '/inc/formula/demo-content/nature/nature-widgets.wie',
				'import_customizer_file_url' => $demo_url . '/inc/formula/demo-content/nature/nature-customizer.dat',
				'preview_url'                => 'https://awplife.com/demo/nature-formula/',
				'import_preview_image_url'   => $demo_url . '/inc/formula/demo-content/nature/thumb.png',
			),
			array(
				'import_file_name'           => esc_html__( 'Business Formula', 'formula' ),
				'categories'                 => array( 'Free Demos' ),
				'import_file_url'            => $demo_url . '/inc/formula/demo-content/business/business-content.xml',
				'import_widget_file_url'     => $demo_url . '/inc/formula/demo-content/business/business-widgets.wie',
				'import_customizer_file_url' => $demo_url . '/inc/formula/demo-content/business/business-customizer.dat',
				'preview_url'                => 'https://awplife.com/demo/business-formula/',
				'import_preview_image_url'   => $demo_url . '/inc/formula/demo-content/business/thumb.png',
			),
			array(
				'import_file_name'           => esc_html__( 'Medical Formula', 'formula' ),
				'categories'                 => array( 'Free Demos' ),
				'import_file_url'            => $demo_url . '/inc/formula/demo-content/medical/medical-content.xml',
				'import_widget_file_url'     => $demo_url . '/inc/formula/demo-content/medical/medical-widgets.wie',
				'import_customizer_file_url' => $demo_url . '/inc/formula/demo-content/medical/medical-customizer.dat',
				'preview_url'                => 'https://awplife.com/demo/medical-formula/',
				'import_preview_image_url'   => $demo_url . '/inc/formula/demo-content/medical/thumb.png',
			),
			array(
				'import_file_name'           => esc_html__( 'Education Formula', 'formula' ),
				'categories'                 => array( 'Free Demos' ),
				'import_file_url'            => $demo_url . '/inc/formula/demo-content/education/education-content.xml',
				'import_widget_file_url'     => $demo_url . '/inc/formula/demo-content/education/education-widgets.wie',
				'import_customizer_file_url' => $demo_url . '/inc/formula/demo-content/education/education-customizer.dat',
				'preview_url'                => 'https://awplife.com/demo/education-formula/',
				'import_preview_image_url'   => $demo_url . '/inc/formula/demo-content/education/thumb.png',
			),
			array(
				'import_file_name'         => esc_html__( 'Metaverse Formula Pro', 'formula' ),
				'categories'               => array( 'Premium Demos' ),
				'preview_url'              => 'https://awplife.com/demo/metaverse-formula-pro/',
				'import_preview_image_url' => $demo_url . '/inc/formula/demo-content/premium/metaverse-pro.webp',
			),
			array(
				'import_file_name'         => esc_html__( 'Medical Formula Pro', 'formula' ),
				'categories'               => array( 'Premium Demos' ),
				'preview_url'              => 'https://awplife.com/demo/medical-formula-pro/',
				'import_preview_image_url' => $demo_url . '/inc/formula/demo-content/premium/medical-pro.webp',
			),
			array(
				'import_file_name'         => esc_html__( 'Petcare Formula Pro', 'formula' ),
				'categories'               => array( 'Premium Demos' ),
				'preview_url'              => 'https://awplife.com/demo/petcare-formula-pro/',
				'import_preview_image_url' => $demo_url . '/inc/formula/demo-content/premium/petcare-pro.webp',
			),
			array(
				'import_file_name'         => esc_html__( 'Nature Formula Pro', 'formula' ),
				'categories'               => array( 'Premium Demos' ),
				'preview_url'              => 'https://awplife.com/demo/nature-formula-pro',
				'import_preview_image_url' => $demo_url . '/inc/formula/demo-content/premium/nature-pro.webp',
			),
			array(
				'import_file_name'         => esc_html__( 'Fashion Formula Pro', 'formula' ),
				'categories'               => array( 'Premium Demos' ),
				'preview_url'              => 'https://awplife.com/demo/fashion-formula-pro/',
				'import_preview_image_url' => $demo_url . '/inc/formula/demo-content/premium/fashion-pro.webp',
			),
			array(
				'import_file_name'         => esc_html__( 'Furniture Formula Pro', 'formula' ),
				'categories'               => array( 'Premium Demos' ),
				'preview_url'              => 'https://awplife.com/demo/furniture-formula-pro/',
				'import_preview_image_url' => $demo_url . '/inc/formula/demo-content/premium/furniture-pro.webp',
			),
			array(
				'import_file_name'         => esc_html__( 'Food Formula Pro', 'formula' ),
				'categories'               => array( 'Premium Demos' ),
				'preview_url'              => 'https://awplife.com/demo/food-formula-pro/',
				'import_preview_image_url' => $demo_url . '/inc/formula/demo-content/premium/food-pro.webp',
			),
			array(
				'import_file_name'         => esc_html__( 'NGO Formula Pro', 'formula' ),
				'categories'               => array( 'Premium Demos' ),
				'preview_url'              => 'https://awplife.com/demo/ngo-formula-pro',
				'import_preview_image_url' => $demo_url . '/inc/formula/demo-content/premium/ngo-pro.webp',
			),
			array(
				'import_file_name'         => esc_html__( 'Photography Formula Pro', 'formula' ),
				'categories'               => array( 'Premium Demos' ),
				'preview_url'              => 'https://awplife.com/demo/photography-formula-pro',
				'import_preview_image_url' => $demo_url . '/inc/formula/demo-content/premium/photography-pro.webp',
			),
			array(
				'import_file_name'         => esc_html__( 'Yoga Formula Pro', 'formula' ),
				'categories'               => array( 'Premium Demos' ),
				'preview_url'              => 'https://awplife.com/demo/yoga-formula-pro/',
				'import_preview_image_url' => $demo_url . '/inc/formula/demo-content/premium/yoga-pro.webp',
			),

		);
	}
}
add_filter( 'pt-ocdi/import_files', 'formula_starter_sites_import_files' );

/**
 * Define actions that happen after import
 */
if ( ! function_exists( 'formula_starter_sites_after_import_mods' ) ) {

	function formula_starter_sites_after_import_mods() {

		// Assign the menu
		/*
		$main_menu = get_term_by( 'name', 'Primary Menu', 'nav_menu' );
		set_theme_mod( 'nav_menu_locations', array(
				'primary' => $main_menu->term_id,
			)
		); */

		// Asign the static front page and the blog page.
		$front_page = get_page_by_title( 'Home' );
		$blog_page  = get_page_by_title( 'Blog' );

		update_option( 'show_on_front', 'page' );
		update_option( 'page_on_front', $front_page->ID );
		update_option( 'page_for_posts', $blog_page->ID );

		// Set the front page template to 'page-templates/frontpage.php'.
		$front_page_template = '/page-templates/frontpage.php';
		update_post_meta( $front_page->ID, '_wp_page_template', $front_page_template );
	}
}
add_action( 'pt-ocdi/after_import', 'formula_starter_sites_after_import_mods' );

function formula_starter_sites_ocdi_css() {
    // Check if the current screen is not the customizer
    $current_screen = get_current_screen();
    if ( isset( $current_screen->id ) && $current_screen->id !== 'customize' ) { ?>
        <style>
            .ocdi__gl-item:nth-child(n+8) .ocdi__gl-item-buttons .button-primary, .ocdi .ocdi__theme-about, .ocdi__intro-text {
                display: none;
            }
            .ocdi__gl-item-image-container::after {
                padding-top: 75% !important;
            }

            @media (min-width: 1120px) {
                .ocdi__gl-item {
                    -webkit-box-flex: 0;
                    -ms-flex: 0 0 calc(24.33% - 30px) !important;
                    flex: 0 0 calc(24.33% - 30px) !important;
                    margin-bottom: 30px;
                    margin-right: 30px;
                }
            }

            /*@media (min-width: 1120px) {
                .ocdi__gl-item:nth-child(n+5) {
                    flex: 0 0 calc(33% - 150px) !important; 
                }
            }

            .ocdi__gl-item:nth-child(n+5) .ocdi__gl-item-image-container {
                height: 365px;
            }*/
        </style>
    <?php }
}
add_action( 'admin_enqueue_scripts', 'formula_starter_sites_ocdi_css' );


// Change the "One Click Demo Import" name from "Starter Sites" in Appearance menu.
function formula_starter_sites_ocdi_plugin_page_setup( $default_settings ) {

	$default_settings['parent_slug'] = 'themes.php';
	$default_settings['page_title']  = esc_html__( 'Formula One Click Demo Import', 'formula' );
	$default_settings['menu_title']  = esc_html__( 'Formula Starter Sites', 'formula' );
	$default_settings['capability']  = 'import';
	$default_settings['menu_slug']   = 'one-click-demo-import';

	return $default_settings;

}
add_filter( 'ocdi/plugin_page_setup', 'formula_starter_sites_ocdi_plugin_page_setup' );

// Register required plugins for the demo's.
function formula_starter_sites_register_plugins( $plugins ) {

	// List of plugins used by all theme demos.
	$theme_plugins = array(
		array(
			'name'     => 'A WP Life Themes Companion',
			'slug'     => 'awp-companion',
			'required' => true,
		),
		array(
			'name'     => 'WPForms',
			'slug'     => 'wpforms-lite',
			'required' => true,
		),
		array(
			'name'     => 'Coming Soon Page',
			'slug'     => 'coming-soon-maintenance-mode',
			'required' => true,
		),
		array(
			'name'     => 'Portfolio Filter Gallery',
			'slug'     => 'portfolio-filter-gallery',
			'required' => true,
		),
		array(
			'name'     => 'Login Page',
			'slug'     => 'customizer-login-page',
			'required' => true,
		),
	);

	return array_merge( $plugins, $theme_plugins );

}
add_filter( 'ocdi/register_plugins', 'formula_starter_sites_register_plugins' );

/**
* Remove branding
*/
// add_filter( 'pt-ocdi/disable_pt_branding', '__return_true' );
