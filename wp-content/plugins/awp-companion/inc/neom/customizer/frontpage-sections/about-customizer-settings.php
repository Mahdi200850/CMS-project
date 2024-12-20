<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Frontpage about.
 *
 * @package neom
 */

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'neom_Customize_Homepage_About_Option' ) ) :

	class neom_Customize_Homepage_About_Option extends neom_Customize_Base_Option {

		/**
		 * Arguments for options.
		 *
		 * @return array
		 */
		public function elements() {

			return array(

				'neom_main_about_heading'     => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'parent_heading',
						'priority' => 1,
						'label'    => esc_html__( 'About Options', 'neom-blog' ),
						'section'  => 'neom_theme_about',
					),
				),

				'neom_about_area_disabled'    => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 2,
						'label'    => esc_html__( 'About Enable/Disable', 'neom-blog' ),
						'section'  => 'neom_theme_about',
					),
				),

				'neom_about_meta_heading' => array(
					'setting' => array(),
					'control' => array(
						'type'            => 'heading',
						'priority'        => 12,
						'label'           => esc_html__( 'About Meta Settings Pro*', 'neom-blog' ),
						'section'         => 'neom_theme_about',
						'active_callback' => 'neom_about_meta_heading',
					),
				),

				// if about section image found.
				'neom_about_img_text'         => array(
					'setting' => array(
						'default'           => 'Call Us : +987 654 321',
						'sanitize_callback' => 'sanitize_text_field',
					),
					'control' => array(
						'type'            => 'text',
						'priority'        => 18,
						'is_default_type' => true,
						'label'           => esc_html__( 'About Image Text', 'neom-blog' ),
						'section'         => 'neom_theme_about',
						'active_callback' => 'neom_about_img_text',
					),
				),

				// Extra Settings.
				'neom_about_settings_heading' => array(
					'setting' => array(),
					'control' => array(
						'type'            => 'heading',
						'priority'        => 24,
						'label'           => esc_html__( 'About Extra Settings', 'neom-blog' ),
						'section'         => 'neom_theme_about',
						'active_callback' => 'neom_about_settings_heading',
					),
				),

				// container.
				'neom_about_container_size'   => array(
					'setting' => array(
						'default'           => 'container-full',
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_radio' ),
					),
					'control' => array(
						'type'            => 'radio',
						'priority'        => 25,
						'is_default_type' => true,
						'label'           => esc_html__( 'About Width (Pro*)', 'neom-blog' ),
						'section'         => 'neom_theme_about',
						'choices'         => array(
							'av-container'   => esc_html__( 'Container', 'neom-blog' ),
							'container-full' => esc_html__( 'Container Full', 'neom-blog' ),
						),
						'active_callback' => 'neom_about_container_size',
					),
				),

				// Section Color Settings Heading.
				'neom_about_section_color_heading'            => array(
					'setting' => array(),
					'control' => array(
						'type'            => 'heading',
						'priority'        => 1500,
						'label'           => esc_html__( 'Section Color Settings (Pro*)', 'neom-blog' ),
						'section'         => 'neom_theme_about',
						'active_callback' => 'neom_about_section_color_heading',
					),
				),

				// Section Color Settings Enable Disable.
				'neom_about_section_color_disable'     => array(
					'setting' => array(
						'default'           => false,
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'            => 'toggle',
						'priority'        => 1550,
						'label'           => esc_html__( 'Section Color Enable/Disable (Pro*)', 'neom-blog' ),
						'section'         => 'neom_theme_about',
						'active_callback' => 'neom_about_section_color_disable',
					),
				),

				// Title Color.
				'neom_about_section_title_color' => array(
					'setting' => array(
						'default'           => '#252525',
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_alpha_color' ),
					),
					'control' => array(
						'type'            => 'color',
						'priority'        => 1580,
						'label'           => esc_html__( 'Title Color (Pro*)', 'neom-blog' ),
						'description'     => esc_html__( 'Set The Color For Section Title.', 'neom-blog' ),
						'section'         => 'neom_theme_about',
						'choices'         => array(
							'alpha' => true,
						),
						'active_callback' => 'neom_about_section_title_color',
					),
				),

				// Description Color.
				'neom_about_section_description_color' => array(
					'setting' => array(
						'default'           => '#252525',
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_alpha_color' ),
					),
					'control' => array(
						'type'            => 'color',
						'priority'        => 1600,
						'label'           => esc_html__( 'Description Color (Pro*)', 'neom-blog' ),
						'description'     => esc_html__( 'Set The Color For Section Description.', 'neom-blog' ),
						'section'         => 'neom_theme_about',
						'choices'         => array(
							'alpha' => true,
						),
						'active_callback' => 'neom_about_section_description_color',
					),
				),

				'neom_about_upgrade'                   => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'upgrade',
						'priority' => 11,
						'label'    => esc_html__( 'About', 'neom-blog' ),
						'section'  => 'neom_theme_about',
					),
				),

			);

		}

	}

	new neom_Customize_Homepage_About_Option();

endif;
