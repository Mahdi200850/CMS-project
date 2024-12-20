<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Frontpage Call to action
 *
 * @package neom
 */

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'neom_Customize_Homepage_Cta_Option' ) ) :

	class neom_Customize_Homepage_Cta_Option extends neom_Customize_Base_Option {

		/**
		 * Arguments for options.
		 *
		 * @return array
		 */
		public function elements() {

			return array(

				'neom_main_cta_heading'   => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'parent_heading',
						'priority' => 1,
						'label'    => esc_html__( 'CallOut Options', 'neom-blog' ),
						'section'  => 'neom_theme_cta',
					),
				),

				'neom_cta_disabled'       => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 2,
						'label'    => esc_html__( 'Enable/Disable', 'neom-blog' ),
						'section'  => 'neom_theme_cta',
					),
				),

				'neom_cta_effect_enable'  => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'            => 'toggle',
						'priority'        => 3,
						'label'           => esc_html__( 'Water Effect Enable/Disable', 'neom-blog' ),
						'section'         => 'neom_theme_cta',
						'active_callback' => 'neom_cta_effect_enable',
					),
				),

				// left side content setting.
				'neom_cta_left_heading'   => array(
					'setting' => array(),
					'control' => array(
						'type'            => 'heading',
						'priority'        => 120,
						'label'           => esc_html__( 'Left Content', 'neom-blog' ),
						'section'         => 'neom_theme_cta',
						'active_callback' => 'neom_cta_left_heading',
					),
				),

				'neom_cta_area_title2'    => array(
					'setting' => array(
						'default'           => 'Call Us',
						'sanitize_callback' => 'sanitize_text_field',
					),
					'control' => array(
						'type'            => 'text',
						'priority'        => 150,
						'is_default_type' => true,
						'label'           => esc_html__( 'Title', 'neom-blog' ),
						'section'         => 'neom_theme_cta',
						'active_callback' => 'neom_cta_area_title2',
					),
				),

				'neom_cta_area_des2'      => array(
					'setting' => array(
						'default'           => '+(01) 335 2565',
						'sanitize_callback' => 'sanitize_text_field',
					),
					'control' => array(
						'type'            => 'textarea',
						'priority'        => 160,
						'is_default_type' => true,
						'label'           => esc_html__( 'Description', 'neom-blog' ),
						'section'         => 'neom_theme_cta',
						'active_callback' => 'neom_cta_area_des2',
					),
				),

				// right content setting.
				'neom_cta_right_heading'  => array(
					'setting' => array(),
					'control' => array(
						'type'            => 'heading',
						'priority'        => 220,
						'label'           => esc_html__( 'Right Content', 'neom-blog' ),
						'section'         => 'neom_theme_cta',
						'active_callback' => 'neom_cta_right_heading',
					),
				),

				'neom_cta_area_title'     => array(
					'setting' => array(
						'default'           => 'We Design With Aesthetic Sense. Reach us here.',
						'sanitize_callback' => 'sanitize_text_field',
					),
					'control' => array(
						'type'            => 'text',
						'priority'        => 250,
						'is_default_type' => true,
						'label'           => esc_html__( 'Title', 'neom-blog' ),
						'section'         => 'neom_theme_cta',
						'active_callback' => 'neom_cta_area_title',
					),
				),

				'neom_cta_area_des'       => array(
					'setting' => array(
						'default'           => 'How Can We Help You?',
						'sanitize_callback' => 'sanitize_text_field',
					),
					'control' => array(
						'type'            => 'textarea',
						'priority'        => 260,
						'is_default_type' => true,
						'label'           => esc_html__( 'Description', 'neom-blog' ),
						'section'         => 'neom_theme_cta',
						'active_callback' => 'neom_cta_area_des',
					),
				),

				// Button heading setting.
				'neom_cta_button_heading' => array(
					'setting' => array(),
					'control' => array(
						'type'            => 'heading',
						'priority'        => 320,
						'label'           => esc_html__( 'Button Setting', 'neom-blog' ),
						'section'         => 'neom_theme_cta',
						'active_callback' => 'neom_cta_button_heading',
					),
				),

				// Button content setting.
				'neom_cta_button_text'    => array(
					'setting' => array(
						'default'           => 'Contact Us',
						'sanitize_callback' => 'sanitize_text_field',
					),
					'control' => array(
						'type'            => 'text',
						'priority'        => 350,
						'is_default_type' => true,
						'label'           => esc_html__( 'Button Text', 'neom-blog' ),
						'section'         => 'neom_theme_cta',
						'active_callback' => 'neom_cta_button_text',
					),
				),

				'neom_cta_button_link'    => array(
					'setting' => array(
						'default'           => '#',
						'sanitize_callback' => 'sanitize_text_field',
					),
					'control' => array(
						'type'            => 'url',
						'priority'        => 380,
						'is_default_type' => true,
						'label'           => esc_html__( 'Button Link', 'neom-blog' ),
						'section'         => 'neom_theme_cta',
						'active_callback' => 'neom_cta_button_link',
					),
				),

				// Extra settings.
				'neom_cta_extra_heading'  => array(
					'setting' => array(),
					'control' => array(
						'type'            => 'heading',
						'priority'        => 905,
						'label'           => esc_html__( 'Cta Extra Settings', 'neom-blog' ),
						'section'         => 'neom_theme_cta',
						'active_callback' => 'neom_cta_extra_heading',
					),
				),

				// container.
				'neom_cta_container_size' => array(
					'setting' => array(
						'default'           => 'container-full',
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_radio' ),
					),
					'control' => array(
						'type'            => 'radio',
						'priority'        => 1000,
						'is_default_type' => true,
						'label'           => esc_html__( 'Cta Width', 'neom-blog' ),
						'section'         => 'neom_theme_cta',
						'choices'         => array(
							'av-container'   => esc_html__( 'Container', 'neom-blog' ),
							'container-full' => esc_html__( 'Container Full', 'neom-blog' ),
						),
						'active_callback' => 'neom_cta_container_size',
					),
				),

			);

		}

	}

	new neom_Customize_Homepage_Cta_Option();

endif;
