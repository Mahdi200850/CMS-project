<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/**
 * Frontpage info.
 *
 * @package neom
 */

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'neom_Customize_Homepage_Info_Option' ) ) :

	class neom_Customize_Homepage_Info_Option extends neom_Customize_Base_Option {

		/**
		 * Arguments for options.
		 *
		 * @return array
		 */
		public function elements() {

			return array(

				'neom_top_info_heading'          => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'parent_heading',
						'priority' => 1,
						'label'    => esc_html__( 'Top Info Options', 'neom-blog' ),
						'section'  => 'neom_theme_top_info',
					),
				),

				// Info Top Enable.
				'neom_top_info_disabled'         => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 3,
						'label'    => esc_html__( 'Top Info Enable/Disable', 'neom-blog' ),
						'section'  => 'neom_theme_top_info',
					),
				),

				'neom_top_info_settings_heading' => array(
					'setting' => array(),
					'control' => array(
						'type'            => 'heading',
						'priority'        => 24,
						'label'           => esc_html__( 'Top Info Settings', 'neom-blog' ),
						'section'         => 'neom_theme_top_info',
						'active_callback' => 'neom_top_info_settings_heading',
					),
				),

				// container.
				'neom_top_info_container_size'   => array(
					'setting' => array(
						'default'           => 'container-full',
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_radio' ),
					),
					'control' => array(
						'type'            => 'radio',
						'priority'        => 25,
						'is_default_type' => true,
						'label'           => esc_html__( 'Info Width', 'neom-blog' ),
						'section'         => 'neom_theme_top_info',
						'choices'         => array(
							'av-container'   => esc_html__( 'Container', 'neom-blog' ),
							'container-full' => esc_html__( 'Container Full', 'neom-blog' ),
						),
						'active_callback' => 'neom_top_info_container_size',
					),
				),
				// column layout.
				'neom_top_info_column_layout'    => array(
					'setting' => array(
						'default'           => 'theme-column-3',
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_radio' ),
					),
					'control' => array(
						'type'            => 'radio_image',
						'priority'        => 30,
						'label'           => esc_html__( 'Column Layout', 'neom-blog' ),
						'section'         => 'neom_theme_top_info',
						'choices'         => array(
							'theme-column-6' => awp_companion_plugin_url . '/inc/neom/img/icons/column-2.png',
							'theme-column-4' => awp_companion_plugin_url . '/inc/neom/img/icons/column-3.png',
							'theme-column-3' => awp_companion_plugin_url . '/inc/neom/img/icons/column-4.png',
							'theme-column-2' => awp_companion_plugin_url . '/inc/neom/img/icons/column-6.png',
						),
						'active_callback' => 'neom_top_info_column_layout',
					),
				),

				'neom_top_info_upgrade'                   => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'upgrade',
						'priority' => 10,
						'label'    => esc_html__( 'Top Info', 'neom-blog' ),
						'section'  => 'neom_theme_top_info',
					),
				),
			);
		}
	}

	new neom_Customize_Homepage_Info_Option();

endif;
