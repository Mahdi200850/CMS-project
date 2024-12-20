<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/**
 * Frontpage Call to action
 *
 * @package neom
 */

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'neom_Customize_Homepage_Funfact_Option' ) ) :

	class neom_Customize_Homepage_Funfact_Option extends neom_Customize_Base_Option {

		/**
		 * Arguments for options.
		 *
		 * @return array
		 */
		public function elements() {

			return array(

				'neom_main_funfact_heading'     => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'parent_heading',
						'priority' => 1,
						'label'    => esc_html__( 'Funfact Options', 'neom-blog' ),
						'section'  => 'neom_theme_funfact',
					),
				),

				'neom_funfact_disabled'         => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 2,
						'label'    => esc_html__( 'Enable/Disable', 'neom-blog' ),
						'section'  => 'neom_theme_funfact',
					),
				),

				'neom_funfact_settings_heading' => array(
					'setting' => array(),
					'control' => array(
						'type'            => 'heading',
						'priority'        => 20,
						'label'           => esc_html__( 'Funfact Extra Settings', 'neom-blog' ),
						'section'         => 'neom_theme_funfact',
						'active_callback' => 'neom_funfact_settings_heading',
					),
				),

				// container.
				'neom_funfact_container_size'   => array(
					'setting' => array(
						'default'           => 'container-full',
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_radio' ),
					),
					'control' => array(
						'type'            => 'radio',
						'priority'        => 25,
						'is_default_type' => true,
						'label'           => esc_html__( 'Funfact Width', 'neom-blog' ),
						'section'         => 'neom_theme_funfact',
						'choices'         => array(
							'av-container'   => esc_html__( 'Container', 'neom-blog' ),
							'container-full' => esc_html__( 'Container Full', 'neom-blog' ),
						),
						'active_callback' => 'neom_funfact_container_size',
					),
				),
				// column layout.
				'neom_funfact_column_layout'    => array(
					'setting' => array(
						'default'           => 'theme-column-4',
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_radio' ),
					),
					'control' => array(
						'type'            => 'radio_image',
						'priority'        => 30,
						'label'           => esc_html__( 'Column Layout (Pro*)', 'neom-blog' ),
						'section'         => 'neom_theme_funfact',
						'choices'         => array(
							'theme-column-6' => awp_companion_plugin_url . '/inc/neom/img/icons/column-2.png',
							'theme-column-4' => awp_companion_plugin_url . '/inc/neom/img/icons/column-3.png',
							'theme-column-3' => awp_companion_plugin_url . '/inc/neom/img/icons/column-4.png',
						),
						'active_callback' => 'neom_funfact_column_layout',
					),

				),

				// Section Color Settings Heading.
				'neom_funfact_section_color_heading'            => array(
					'setting' => array(),
					'control' => array(
						'type'            => 'heading',
						'priority'        => 1500,
						'label'           => esc_html__( 'Section Color Settings (Pro*)', 'neom-blog' ),
						'section'         => 'neom_theme_funfact',
						'active_callback' => 'neom_funfact_section_color_heading',
					),
				),

				// Section Color Settings Enable Disable.
				'neom_funfact_section_color_disable'     => array(
					'setting' => array(
						'default'           => false,
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'            => 'toggle',
						'priority'        => 1550,
						'label'           => esc_html__( 'Section Color Enable/Disable (Pro*)', 'neom-blog' ),
						'section'         => 'neom_theme_funfact',
						'active_callback' => 'neom_funfact_section_color_disable',
					),
				),

				// Title Color.
				'neom_funfact_section_title_color' => array(
					'setting' => array(
						'default'           => '#fff',
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_alpha_color' ),
					),
					'control' => array(
						'type'            => 'color',
						'priority'        => 1580,
						'label'           => esc_html__( 'Title Color (Pro*)', 'neom-blog' ),
						'description'     => esc_html__( 'Set The Color For Section Title.', 'neom-blog' ),
						'section'         => 'neom_theme_funfact',
						'choices'         => array(
							'alpha' => true,
						),
						'active_callback' => 'neom_funfact_section_title_color',
					),
				),

				// Description Color.
				'neom_funfact_section_description_color' => array(
					'setting' => array(
						'default'           => '#fff',
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_alpha_color' ),
					),
					'control' => array(
						'type'            => 'color',
						'priority'        => 1600,
						'label'           => esc_html__( 'Description Color (Pro*)', 'neom-blog' ),
						'description'     => esc_html__( 'Set The Color For Section Description.', 'neom-blog' ),
						'section'         => 'neom_theme_funfact',
						'choices'         => array(
							'alpha' => true,
						),
						'active_callback' => 'neom_funfact_section_description_color',
					),
				),

				'neom_funfact_upgrade'                    => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'upgrade',
						'priority' => 11,
						'label'    => esc_html__( 'Funfact', 'neom-blog' ),
						'section'  => 'neom_theme_funfact',
					),
				),

			);
		}

	}

	new neom_Customize_Homepage_Funfact_Option();

endif;
