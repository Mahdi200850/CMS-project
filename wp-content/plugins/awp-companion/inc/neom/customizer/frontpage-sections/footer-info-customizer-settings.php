<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Frontpage info.
 *
 * @package neom
 */

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'neom_Customize_Homepage_Footer_Info_Option' ) ) :

	class neom_Customize_Homepage_Footer_Info_Option extends neom_Customize_Base_Option {

		/**
		 * Arguments for options.
		 *
		 * @return array
		 */
		public function elements() {

			return array(

				'neom_footer_info_heading'        => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'parent_heading',
						'priority' => 1,
						'label'    => esc_html__( 'Footer Info Options', 'neom-blog' ),
						'section'  => 'neom_theme_footer_info',
					),
				),

				// Info Top Enable.
				'neom_footer_info_disabled'       => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 3,
						'label'    => esc_html__( 'Footer Info Enable/Disable', 'neom-blog' ),
						'section'  => 'neom_theme_footer_info',
					),
				),
				// container.
				'neom_footer_info_container_size' => array(
					'setting' => array(
						'default'           => 'container-full',
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_radio' ),
					),
					'control' => array(
						'type'            => 'radio',
						'priority'        => 25,
						'is_default_type' => true,
						'label'           => esc_html__( 'Info Width', 'neom-blog' ),
						'section'         => 'neom_theme_footer_info',
						'choices'         => array(
							'av-container'   => esc_html__( 'Container', 'neom-blog' ),
							'container-full' => esc_html__( 'Container Full', 'neom-blog' ),
						),
						'active_callback' => 'neom_footer_info_container_size',
					),
				),
				// column layout.
				'neom_footer_info_column_layout'  => array(
					'setting' => array(
						'default'           => 'theme-column-4',
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_radio' ),
					),
					'control' => array(
						'type'            => 'radio_image',
						'priority'        => 30,
						'label'           => esc_html__( 'Column Layout', 'neom-blog' ),
						'section'         => 'neom_theme_footer_info',
						'choices'         => array(
							'theme-column-6' => awp_companion_plugin_url . '/inc/neom/img/icons/column-2.png',
							'theme-column-4' => awp_companion_plugin_url . '/inc/neom/img/icons/column-3.png',
							'theme-column-3' => awp_companion_plugin_url . '/inc/neom/img/icons/column-4.png',
						),
						'active_callback' => 'neom_footer_info_column_layout',
					),

				),
			);
		}
	}

	new neom_Customize_Homepage_Footer_Info_Option();

endif;
