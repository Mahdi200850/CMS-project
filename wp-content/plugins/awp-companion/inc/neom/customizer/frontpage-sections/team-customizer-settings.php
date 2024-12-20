<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/**
 * Frontpage Main Team.
 *
 * @package neom
 */

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'neom_Customize_Homepage_Team_Option' ) ) :

	class neom_Customize_Homepage_Team_Option extends neom_Customize_Base_Option {

		/**
		 * Arguments for options.
		 *
		 * @return array
		 */
		public function elements() {

			return array(

				'neom_team_heading'                   => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'parent_heading',
						'priority' => 1,
						'label'    => esc_html__( 'Team Options', 'neom-blog' ),
						'section'  => 'neom_theme_team',
					),
				),

				// Team Enable.
				'neom_team_disabled'                  => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 2,
						'label'    => esc_html__( 'Team Enable/Disable', 'neom-blog' ),
						'section'  => 'neom_theme_team',
					),
				),

				// Team Extra.
				'neom_team_details_heading'           => array(
					'setting' => array(),
					'control' => array(
						'type'            => 'heading',
						'priority'        => 14,
						'label'           => esc_html__( 'Team Carousal Settings (Pro*)', 'neom-blog' ),
						'section'         => 'neom_theme_team',
						'active_callback' => 'neom_team_details_heading',
					),
				),

				// Team Autoplay.
				'neom_team_autoplay_disable'          => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'            => 'toggle',
						'priority'        => 20,
						'label'           => esc_html__( 'AutoPlay Enable/Disable (Pro*)', 'neom-blog' ),
						'section'         => 'neom_theme_team',
						'active_callback' => 'neom_team_autoplay_disable',
					),
				),

				// team Animation Speed.
				'neom_team_animation_speed'           => array(
					'setting' => array(
						'default'           => array(
							'slider' => 6000,
							'suffix' => 'px',
						),
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_slider' ),
					),
					'control' => array(
						'type'            => 'slider',
						'priority'        => 30,
						'label'           => esc_html__( 'Team Animation Speed (Pro*)', 'neom-blog' ),
						'section'         => 'neom_theme_team',
						'input_attrs'     => array(
							'min'  => 2000,
							'max'  => 10000,
							'step' => 500,
						),
						'active_callback' => 'neom_team_animation_speed',
					),
				),

				// team Dots.
				'neom_team_dots'                      => array(
					'setting' => array(
						'default'           => false,
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'            => 'toggle',
						'priority'        => 60,
						'label'           => esc_html__( 'Team Dots Enable/Disable (Pro*)', 'neom-blog' ),
						'section'         => 'neom_theme_team',
						'active_callback' => 'neom_team_dots',
					),
				),

				// team Nav.
				'neom_team_nav'                       => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'            => 'toggle',
						'priority'        => 70,
						'label'           => esc_html__( 'Team Nav Enable/Disable (Pro*)', 'neom-blog' ),
						'section'         => 'neom_theme_team',
						'active_callback' => 'neom_team_nav',
					),
				),

				// Team Extra.
				'neom_team_extra_heading'             => array(
					'setting' => array(),
					'control' => array(
						'type'            => 'heading',
						'priority'        => 80,
						'label'           => esc_html__( 'Team Extra Settings (Pro*)', 'neom-blog' ),
						'section'         => 'neom_theme_team',
						'active_callback' => 'neom_team_extra_heading',
					),
				),

				// container.
				'neom_team_container_size'            => array(
					'setting' => array(
						'default'           => 'container-full',
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_radio' ),
					),
					'control' => array(
						'type'            => 'radio',
						'priority'        => 120,
						'is_default_type' => true,
						'label'           => esc_html__( 'Team Width (Pro*)', 'neom-blog' ),
						'section'         => 'neom_theme_team',
						'choices'         => array(
							'av-container'   => esc_html__( 'Container', 'neom-blog' ),
							'container-full' => esc_html__( 'Container Full', 'neom-blog' ),
						),
						'active_callback' => 'neom_team_container_size',
					),
				),
				// column layout.
				'neom_team_column_layout'             => array(
					'setting' => array(
						'default'           => 4,
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_radio' ),
					),
					'control' => array(
						'type'            => 'radio_image',
						'priority'        => 150,
						'label'           => esc_html__( 'Column Layout (Pro*)', 'neom-blog' ),
						'section'         => 'neom_theme_team',
						'choices'         => array(
							'2' => awp_companion_plugin_url . '/inc/neom/img/icons/column-2.png',
							'3' => awp_companion_plugin_url . '/inc/neom/img/icons/column-3.png',
							'4' => awp_companion_plugin_url . '/inc/neom/img/icons/column-4.png',
							'5' => awp_companion_plugin_url . '/inc/neom/img/icons/column-5.png',
							'6' => awp_companion_plugin_url . '/inc/neom/img/icons/column-6.png',
						),
						'active_callback' => 'neom_team_column_layout',
					),
				),

				// Section Color Settings Heading.
				'neom_team_section_color_heading'     => array(
					'setting' => array(),
					'control' => array(
						'type'            => 'heading',
						'priority'        => 1500,
						'label'           => esc_html__( 'Section Color Settings (Pro*)', 'neom-blog' ),
						'section'         => 'neom_theme_team',
						'active_callback' => 'neom_team_section_color_heading',
					),
				),

				// Section Color Settings Enable Disable.
				'neom_team_section_color_disable'     => array(
					'setting' => array(
						'default'           => false,
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'            => 'toggle',
						'priority'        => 1550,
						'label'           => esc_html__( 'Section Color Enable/Disable (Pro*)', 'neom-blog' ),
						'section'         => 'neom_theme_team',
						'active_callback' => 'neom_team_section_color_disable',
					),
				),

				// Title Color.
				'neom_team_section_title_color'       => array(
					'setting' => array(
						'default'           => '#252525',
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_alpha_color' ),
					),
					'control' => array(
						'type'            => 'color',
						'priority'        => 1580,
						'label'           => esc_html__( 'Title Color (Pro*)', 'neom-blog' ),
						'description'     => esc_html__( 'Set The Color For Section Title.', 'neom-blog' ),
						'section'         => 'neom_theme_team',
						'choices'         => array(
							'alpha' => true,
						),
						'active_callback' => 'neom_team_section_title_color',
					),
				),

				// Description Color.
				'neom_team_section_description_color' => array(
					'setting' => array(
						'default'           => '#252525',
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_alpha_color' ),
					),
					'control' => array(
						'type'            => 'color',
						'priority'        => 1600,
						'label'           => esc_html__( 'Description Color (Pro*)', 'neom-blog' ),
						'description'     => esc_html__( 'Set The Color For Section Description.', 'neom-blog' ),
						'section'         => 'neom_theme_team',
						'choices'         => array(
							'alpha' => true,
						),
						'active_callback' => 'neom_team_section_description_color',
					),
				),

				'neom_team_upgrade'                   => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'upgrade',
						'priority' => 11,
						'label'    => esc_html__( 'Team', 'neom-blog' ),
						'section'  => 'neom_theme_team',
					),
				),

			);
		}
	}

	new neom_Customize_Homepage_Team_Option();

endif;
