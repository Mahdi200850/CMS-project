<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/**
 * Frontpage portfolio.
 *
 * @package neom
 */

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'neom_Customize_Homepage_Portfolio_Option' ) ) :

	class neom_Customize_Homepage_Portfolio_Option extends neom_Customize_Base_Option {

		/**
		 * Arguments for options.
		 *
		 * @return array
		 */
		public function elements() {

			return array(

				'neom_portfolio_heading'               => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'parent_heading',
						'priority' => 1,
						'label'    => esc_html__( 'Portfolio Options', 'neom-blog' ),
						'section'  => 'neom_theme_portfolio',
					),
				),

				'neom_portfolio_disabled'              => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 2,
						'label'    => esc_html__( 'Portfolio Enable/Disable', 'neom-blog' ),
						'section'  => 'neom_theme_portfolio',
					),
				),

				'neom_portfolio_settings_heading'      => array(
					'setting' => array(),
					'control' => array(
						'type'            => 'heading',
						'priority'        => 50,
						'label'           => esc_html__( 'Portfolio Extra Settings', 'neom-blog' ),
						'section'         => 'neom_theme_portfolio',
						'active_callback' => 'neom_portfolio_settings_heading',
					),
				),

				// container.
				'neom_portfolio_container_size'        => array(
					'setting' => array(
						'default'           => 'container-full',
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_radio' ),
					),
					'control' => array(
						'type'            => 'radio',
						'priority'        => 65,
						'is_default_type' => true,
						'label'           => esc_html__( 'Portfolio Width (Pro*)', 'neom-blog' ),
						'section'         => 'neom_theme_portfolio',
						'choices'         => array(
							'av-container'   => esc_html__( 'Container', 'neom-blog' ),
							'container-full' => esc_html__( 'Container Full', 'neom-blog' ),
						),
						'active_callback' => 'neom_portfolio_container_size',
					),
				),

				// column layout.
				'neom_portfolio_column_layout'         => array(
					'setting' => array(
						'default'           => 'theme-column-4',
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_radio' ),
					),
					'control' => array(
						'type'            => 'radio_image',
						'priority'        => 80,
						'label'           => esc_html__( 'Column Layout (Pro*)', 'neom-blog' ),
						'section'         => 'neom_theme_portfolio',
						'choices'         => array(
							'theme-column-6' => awp_companion_plugin_url . '/inc/neom/img/icons/column-2.png',
							'theme-column-4' => awp_companion_plugin_url . '/inc/neom/img/icons/column-3.png',
							'theme-column-3' => awp_companion_plugin_url . '/inc/neom/img/icons/column-4.png',
						),
						'active_callback' => 'neom_portfolio_column_layout',
					),

				),

				// Portfolio Count For Homepage.
				'neom_portfolio_count'                 => array(
					'setting' => array(
						'default'           => array(
							'slider' => 3,
							'suffix' => '',
						),
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_slider' ),
					),
					'control' => array(
						'type'            => 'slider',
						'priority'        => 105,
						'label'           => esc_html__( 'HomePage Portfolio Count (Pro*)', 'neom-blog' ),
						'section'         => 'neom_theme_portfolio',
						'input_attrs'     => array(
							'min'  => 2,
							'max'  => 20,
							'step' => 1,
						),
						'active_callback' => 'neom_portfolio_count',
					),
				),

				// Portfolio Button Text.
				'neom_portfolio_button_text'           => array(
					'setting' => array(
						'default'           => 'Show More',
						'sanitize_callback' => 'sanitize_text_field',
					),
					'control' => array(
						'type'            => 'text',
						'priority'        => 125,
						'is_default_type' => true,
						'label'           => esc_html__( 'Button Text', 'neom-blog' ),
						'section'         => 'neom_theme_portfolio',
						'active_callback' => 'neom_portfolio_button_text',
					),
				),

				// Portfolio Button Link.
				'neom_portfolio_button_link'           => array(
					'setting' => array(
						'default'           => '#',
						'sanitize_callback' => 'sanitize_text_field',
					),
					'control' => array(
						'type'            => 'url',
						'priority'        => 150,
						'is_default_type' => true,
						'label'           => esc_html__( 'Button Link', 'neom-blog' ),
						'section'         => 'neom_theme_portfolio',
						'active_callback' => 'neom_portfolio_button_link',
					),
				),

				// Section Color Settings Heading.
				'neom_portfolio_section_color_heading' => array(
					'setting' => array(),
					'control' => array(
						'type'            => 'heading',
						'priority'        => 1500,
						'label'           => esc_html__( 'Section Color Settings (Pro*)', 'neom-blog' ),
						'section'         => 'neom_theme_portfolio',
						'active_callback' => 'neom_portfolio_section_color_heading',
					),
				),

				// Section Color Settings Enable Disable.
				'neom_portfolio_section_color_disable' => array(
					'setting' => array(
						'default'           => false,
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'            => 'toggle',
						'priority'        => 1550,
						'label'           => esc_html__( 'Section Color Enable/Disable (Pro*)', 'neom-blog' ),
						'section'         => 'neom_theme_portfolio',
						'active_callback' => 'neom_portfolio_section_color_disable',
					),
				),

				// Title Color.
				'neom_portfolio_section_title_color'   => array(
					'setting' => array(
						'default'           => '#252525',
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_alpha_color' ),
					),
					'control' => array(
						'type'            => 'color',
						'priority'        => 1580,
						'label'           => esc_html__( 'Title Color (Pro*)', 'neom-blog' ),
						'description'     => esc_html__( 'Set The Color For Section Title.', 'neom-blog' ),
						'section'         => 'neom_theme_portfolio',
						'choices'         => array(
							'alpha' => true,
						),
						'active_callback' => 'neom_portfolio_section_title_color',
					),
				),

				// Description Color.
				'neom_portfolio_section_description_color' => array(
					'setting' => array(
						'default'           => '#252525',
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_alpha_color' ),
					),
					'control' => array(
						'type'            => 'color',
						'priority'        => 1600,
						'label'           => esc_html__( 'Description Color (Pro*)', 'neom-blog' ),
						'description'     => esc_html__( 'Set The Color For Section Description.', 'neom-blog' ),
						'section'         => 'neom_theme_portfolio',
						'choices'         => array(
							'alpha' => true,
						),
						'active_callback' => 'neom_portfolio_section_description_color',
					),
				),

				'neom_portfolio_upgrade'               => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'upgrade',
						'priority' => 11,
						'label'    => esc_html__( 'Portfolio', 'neom-blog' ),
						'section'  => 'neom_theme_portfolio',
					),
				),

			);
		}
	}

	new neom_Customize_Homepage_Portfolio_Option();

endif;
