<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Frontpage Testimonial.
 *
 * @package neom
 */

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'neom_Customize_Homepage_Testimonial_Option' ) ) :

	class neom_Customize_Homepage_Testimonial_Option extends neom_Customize_Base_Option {

		/**
		 * Arguments for options.
		 *
		 * @return array
		 */
		public function elements() {

			return array(

				'neom_main_testimonial_heading'          => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'parent_heading',
						'priority' => 1,
						'label'    => esc_html__( 'Testimonial Options', 'neom-blog' ),
						'section'  => 'neom_theme_testimonial',
					),
				),

				// Testimonial Enable.
				'neom_testimonial_disabled'              => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 3,
						'label'    => esc_html__( 'Testimonial Enable/Disable', 'neom-blog' ),
						'section'  => 'neom_theme_testimonial',
					),
				),
				// Testimonial Extra.
				'neom_testimonial_details_heading'       => array(
					'setting' => array(),
					'control' => array(
						'type'            => 'heading',
						'priority'        => 14,
						'label'           => esc_html__( 'Testimonial Carousal Settings (Pro*)', 'neom-blog' ),
						'section'         => 'neom_theme_testimonial',
						'active_callback' => 'neom_testimonial_details_heading',
					),
				),

				// Testimonial Autoplay.
				'neom_testimonial_autoplay_disable'      => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'            => 'toggle',
						'priority'        => 15,
						'label'           => esc_html__( 'Testimonial Autoplay (Pro*)', 'neom-blog' ),
						'section'         => 'neom_theme_testimonial',
						'active_callback' => 'neom_testimonial_autoplay_disable',
					),
				),

				// Testimonial Animation Speed.
				'neom_testimonial_animation_speed'       => array(
					'setting' => array(
						'default'           => array(
							'slider' => 6000,
							'suffix' => 'px',
						),
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_slider' ),
					),
					'control' => array(
						'type'            => 'slider',
						'priority'        => 20,
						'label'           => esc_html__( 'Testimonial Animation Speed (Pro*)', 'neom-blog' ),
						'description'     => esc_html__( 'Note: Turn on Autoplay', 'neom-blog' ),
						'section'         => 'neom_theme_testimonial',
						'input_attrs'     => array(
							'min'  => 2000,
							'max'  => 10000,
							'step' => 500,
						),
						'active_callback' => 'neom_testimonial_animation_speed',
					),
				),

				// Testimonial Dots.
				'neom_testimonial_dots'                  => array(
					'setting' => array(
						'default'           => false,
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'            => 'toggle',
						'priority'        => 60,
						'label'           => esc_html__( 'Testimonial Dots Enable/Disable (Pro*)', 'neom-blog' ),
						'section'         => 'neom_theme_testimonial',
						'active_callback' => 'neom_testimonial_dots',
					),
				),

				// Testimonial Nav.
				'neom_testimonial_nav'                   => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'            => 'toggle',
						'priority'        => 70,
						'label'           => esc_html__( 'Testimonial Nav Enable/Disable (Pro*)', 'neom-blog' ),
						'section'         => 'neom_theme_testimonial',
						'active_callback' => 'neom_testimonial_nav',
					),
				),

				// Section Color Settings Heading.
				'neom_testimonial_section_color_heading' => array(
					'setting' => array(),
					'control' => array(
						'type'            => 'heading',
						'priority'        => 1500,
						'label'           => esc_html__( 'Section Color Settings (Pro*)', 'neom-blog' ),
						'section'         => 'neom_theme_testimonial',
						'active_callback' => 'neom_testimonial_section_color_heading',
					),
				),

				// Section Color Settings Enable Disable.
				'neom_testimonial_section_color_disable' => array(
					'setting' => array(
						'default'           => false,
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'            => 'toggle',
						'priority'        => 1550,
						'label'           => esc_html__( 'Section Color Enable/Disable (Pro*)', 'neom-blog' ),
						'section'         => 'neom_theme_testimonial',
						'active_callback' => 'neom_testimonial_section_color_disable',
					),
				),

				// Title Color.
				'neom_testimonial_section_title_color'   => array(
					'setting' => array(
						'default'           => '#fff',
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_alpha_color' ),
					),
					'control' => array(
						'type'            => 'color',
						'priority'        => 1580,
						'label'           => esc_html__( 'Title Color (Pro*)', 'neom-blog' ),
						'description'     => esc_html__( 'Set The Color For Section Title.', 'neom-blog' ),
						'section'         => 'neom_theme_testimonial',
						'choices'         => array(
							'alpha' => true,
						),
						'active_callback' => 'neom_testimonial_section_title_color',
					),
				),

				// Description Color.
				'neom_testimonial_section_description_color' => array(
					'setting' => array(
						'default'           => '#fff',
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_alpha_color' ),
					),
					'control' => array(
						'type'            => 'color',
						'priority'        => 1600,
						'label'           => esc_html__( 'Description Color (Pro*)', 'neom-blog' ),
						'description'     => esc_html__( 'Set The Color For Section Description.', 'neom-blog' ),
						'section'         => 'neom_theme_testimonial',
						'choices'         => array(
							'alpha' => true,
						),
						'active_callback' => 'neom_testimonial_section_description_color',
					),
				),

				'neom_testimonial_upgrade'               => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'upgrade',
						'priority' => 11,
						'label'    => esc_html__( 'Testimonial', 'neom-blog' ),
						'section'  => 'neom_theme_testimonial',
					),
				),

			);
		}
	}

	new neom_Customize_Homepage_Testimonial_Option();

endif;
