<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Frontpage contact.
 *
 * @package neom
 */

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'neom_Customize_Homepage_Contact_Option' ) ) :

	class neom_Customize_Homepage_Contact_Option extends neom_Customize_Base_Option {

		/**
		 * Arguments for options.
		 *
		 * @return array
		 */
		public function elements() {

			return array(

				'neom_main_contact_heading'              => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'parent_heading',
						'priority' => 1,
						'label'    => esc_html__( 'contact Options', 'neom-blog' ),
						'section'  => 'neom_theme_contact',
					),
				),

				'neom_contact_area_disabled'             => array(
					'setting' => array(
						'default'           => false,
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 2,
						'label'    => esc_html__( 'Contact Enable/Disable', 'neom-blog' ),
						'section'  => 'neom_theme_contact',
					),
				),

				'neom_contact_settings_heading'          => array(
					'setting' => array(),
					'control' => array(
						'type'            => 'heading',
						'priority'        => 24,
						'label'           => esc_html__( 'Feature Extra Settings', 'neom-blog' ),
						'section'         => 'neom_theme_contact',
						'active_callback' => 'neom_contact_settings_heading',
					),
				),

				// container.
				'neom_contact_container_size'            => array(
					'setting' => array(
						'default'           => 'container-full',
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_radio' ),
					),
					'control' => array(
						'type'            => 'radio',
						'priority'        => 25,
						'is_default_type' => true,
						'label'           => esc_html__( 'Contact Width (Pro*)', 'neom-blog' ),
						'section'         => 'neom_theme_contact',
						'choices'         => array(
							'av-container'   => esc_html__( 'Container', 'neom-blog' ),
							'container-full' => esc_html__( 'Container Full', 'neom-blog' ),
						),
						'active_callback' => 'neom_contact_container_size',
					),
				),

				// Section Color Settings Heading.
				'neom_contact_section_color_heading'     => array(
					'setting' => array(),
					'control' => array(
						'type'            => 'heading',
						'priority'        => 1500,
						'label'           => esc_html__( 'Section Color Settings', 'neom-blog' ),
						'section'         => 'neom_theme_contact',
						'active_callback' => 'neom_contact_section_color_heading',
					),
				),

				// Section Color Settings Enable Disable.
				'neom_contact_section_color_disable'     => array(
					'setting' => array(
						'default'           => false,
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'            => 'toggle',
						'priority'        => 1550,
						'label'           => esc_html__( 'Section Color Enable/Disable', 'neom-blog' ),
						'section'         => 'neom_theme_contact',
						'active_callback' => 'neom_contact_section_color_disable',
					),
				),

				// Title Color.
				'neom_contact_section_title_color'       => array(
					'setting' => array(
						'default'           => '#252525',
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_alpha_color' ),
					),
					'control' => array(
						'type'            => 'color',
						'priority'        => 1580,
						'label'           => esc_html__( 'Title Color', 'neom-blog' ),
						'description'     => esc_html__( 'Set The Color For Section Title.', 'neom-blog' ),
						'section'         => 'neom_theme_contact',
						'choices'         => array(
							'alpha' => true,
						),
						'active_callback' => 'neom_contact_section_title_color',
					),
				),

				// Description Color.
				'neom_contact_section_description_color' => array(
					'setting' => array(
						'default'           => '#252525',
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_alpha_color' ),
					),
					'control' => array(
						'type'            => 'color',
						'priority'        => 1600,
						'label'           => esc_html__( 'Description Color', 'neom-blog' ),
						'description'     => esc_html__( 'Set The Color For Section Description.', 'neom-blog' ),
						'section'         => 'neom_theme_contact',
						'choices'         => array(
							'alpha' => true,
						),
						'active_callback' => 'neom_contact_section_description_color',
					),
				),

			);

		}

	}

	new neom_Customize_Homepage_Contact_Option();

endif;
