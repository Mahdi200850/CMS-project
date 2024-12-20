<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Frontpage Blog.
 *
 * @package neom-companion
 */

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'neom_Customize_Homepage_Blog_Option' ) ) :

	class neom_Customize_Homepage_Blog_Option extends neom_Customize_Base_Option {

		/**
		 * Arguments for options.
		 *
		 * @return array
		 */
		public function elements() {

			return array(

				'neom_main_blog_heading'              => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'parent_heading',
						'priority' => 1,
						'label'    => esc_html__( 'Blog Options', 'neom-blog' ),
						'section'  => 'neom_theme_blog',
					),
				),

				'neom_blog_disabled'                  => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 2,
						'label'    => esc_html__( 'Blog Enable/Disable', 'neom-blog' ),
						'section'  => 'neom_theme_blog',
					),
				),

				// Blog Design.
				'neom_blog_design'                    => array(
					'setting' => array(
						'default'           => 'design1',
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_radio' ),
					),
					'control' => array(
						'type'            => 'radio_image',
						'priority'        => 9,
						'label'           => esc_html__( 'Template Design', 'neom-blog' ),
						'section'         => 'neom_theme_blog',
						'choices'         => array(
							'design1' => awp_companion_plugin_url . '/inc/neom/img/icons/column-2.png',
							'design2' => awp_companion_plugin_url . '/inc/neom/img/icons/column-3.png',
						),
						'active_callback' => 'neom_blog_design',
					),
				),

				// Blog Autoplay.
				'neom_blog_details_heading'           => array(
					'setting' => array(),
					'control' => array(
						'type'            => 'heading',
						'priority'        => 10,
						'label'           => esc_html__( 'Blog Carousal/Slide Settings', 'neom-blog' ),
						'section'         => 'neom_theme_blog',
						'active_callback' => 'neom_blog_details_heading',
					),
				),

				// Blog Autoplay.
				'neom_blog_autoplay_disable'          => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'            => 'toggle',
						'priority'        => 20,
						'label'           => esc_html__( 'AutoPlay Enable/Disable', 'neom-blog' ),
						'section'         => 'neom_theme_blog',
						'active_callback' => 'neom_blog_autoplay_disable',
					),
				),

				// Blog Animation Speed.
				'neom_blog_animation_speed'           => array(
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
						'label'           => esc_html__( 'Blog Animation Speed (Pro*)', 'neom-blog' ),
						'description'     => esc_html__( 'Note: Turn on Autoplay', 'neom-blog' ),
						'section'         => 'neom_theme_blog',
						'input_attrs'     => array(
							'min'  => 2000,
							'max'  => 10000,
							'step' => 500,
						),
						'active_callback' => 'neom_blog_animation_speed',
					),
				),

				// Blog loop.
				'neom_blog_loop'                      => array(
					'setting' => array(
						'default'           => false,
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'            => 'toggle',
						'priority'        => 40,
						'label'           => esc_html__( 'Blog Loop Enable/Disable (Pro*)', 'neom-blog' ),
						'section'         => 'neom_theme_blog',
						'active_callback' => 'neom_blog_loop',
					),
				),

				// Blog Button Enable disable.
				'neom_blog_readmore_disabled'         => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'            => 'toggle',
						'priority'        => 50,
						'label'           => esc_html__( 'Read More Button Enable/Disable (Pro*)', 'neom-blog' ),
						'section'         => 'neom_theme_blog',
						'active_callback' => 'neom_blog_readmore_disabled',
					),
				),

				// blog Dots.
				'neom_blog_dots'                      => array(
					'setting' => array(
						'default'           => false,
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'            => 'toggle',
						'priority'        => 60,
						'label'           => esc_html__( 'Blog Dots Enable/Disable (Pro*)', 'neom-blog' ),
						'section'         => 'neom_theme_blog',
						'active_callback' => 'neom_blog_dots',
					),
				),

				// blog Nav.
				'neom_blog_nav'                       => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'            => 'toggle',
						'priority'        => 70,
						'label'           => esc_html__( 'Blog Nav Enable/Disable (Pro*)', 'neom-blog' ),
						'section'         => 'neom_theme_blog',
						'active_callback' => 'neom_blog_nav',
					),
				),

				// Blog Extra.
				'neom_blog_extra_heading'             => array(
					'setting' => array(),
					'control' => array(
						'type'            => 'heading',
						'priority'        => 80,
						'label'           => esc_html__( 'Blog Extra Settings (Pro*)', 'neom-blog' ),
						'section'         => 'neom_theme_blog',
						'active_callback' => 'neom_blog_extra_heading',
					),
				),

				// container.
				'neom_blog_container_size'            => array(
					'setting' => array(
						'default'           => 'container-full',
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_radio' ),
					),
					'control' => array(
						'type'            => 'radio',
						'priority'        => 90,
						'is_default_type' => true,
						'label'           => esc_html__( 'Blog Width', 'neom-blog' ),
						'section'         => 'neom_theme_blog',
						'choices'         => array(
							'av-container'   => esc_html__( 'Container', 'neom-blog' ),
							'container-full' => esc_html__( 'Container Full', 'neom-blog' ),
						),
						'active_callback' => 'neom_blog_container_size',
					),
				),
				// column layout.
				'neom_blog_column_layout'             => array(
					'setting' => array(
						'default'           => '3',
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_radio' ),
					),
					'control' => array(
						'type'            => 'radio_image',
						'priority'        => 100,
						'label'           => esc_html__( 'Column Layout (Pro*)', 'neom-blog' ),
						'section'         => 'neom_theme_blog',
						'choices'         => array(
							'2' => awp_companion_plugin_url . '/inc/neom/img/icons/column-2.png',
							'3' => awp_companion_plugin_url . '/inc/neom/img/icons/column-3.png',
							'4' => awp_companion_plugin_url . '/inc/neom/img/icons/column-4.png',
						),
						'active_callback' => 'neom_blog_column_layout',
					),
				),

				// Blog Count For Homepage.
				'neom_blog_count'                     => array(
					'setting' => array(
						'default'           => array(
							'slider' => 3,
							'suffix' => '',
						),
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_slider' ),
					),
					'control' => array(
						'type'            => 'slider',
						'priority'        => 120,
						'label'           => esc_html__( 'HomePage Blog Post Count (Pro*)', 'neom-blog' ),
						'section'         => 'neom_theme_blog',
						'input_attrs'     => array(
							'min'  => 2,
							'max'  => 10,
							'step' => 1,
						),
						'active_callback' => 'neom_blog_count',
					),
				),

				// Blog Button Enable disable.
				'neom_blog_button_disabled'           => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'            => 'toggle',
						'priority'        => 150,
						'label'           => esc_html__( 'Button Enable/Disable', 'neom-blog' ),
						'section'         => 'neom_theme_blog',
						'active_callback' => 'neom_blog_button_disabled',
					),
				),

				// Button Text.
				'neom_blog_button_text'               => array(
					'setting' => array(
						'default'           => 'Show More',
						'sanitize_callback' => 'sanitize_text_field',
					),
					'control' => array(
						'type'            => 'text',
						'priority'        => 180,
						'is_default_type' => true,
						'label'           => esc_html__( 'Button Text', 'neom-blog' ),
						'section'         => 'neom_theme_blog',
						'active_callback' => 'neom_blog_button_text',
					),
				),

				// Button Link.
				'neom_blog_button_link'               => array(
					'setting' => array(
						'default'           => '#',
						'sanitize_callback' => 'esc_url_raw',
					),
					'control' => array(
						'type'            => 'url',
						'priority'        => 200,
						'is_default_type' => true,
						'label'           => esc_html__( 'Button Link', 'neom-blog' ),
						'section'         => 'neom_theme_blog',
						'active_callback' => 'neom_blog_button_link',
					),
				),

				// Section Color Settings Heading.
				'neom_blog_section_color_heading'     => array(
					'setting' => array(),
					'control' => array(
						'type'            => 'heading',
						'priority'        => 1500,
						'label'           => esc_html__( 'Section Color Settings', 'neom-blog' ),
						'section'         => 'neom_theme_blog',
						'active_callback' => 'neom_blog_section_color_heading',
					),
				),

				// Section Color Settings Enable Disable.
				'neom_blog_section_color_disable'     => array(
					'setting' => array(
						'default'           => false,
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'            => 'toggle',
						'priority'        => 1550,
						'label'           => esc_html__( 'Section Color Enable/Disable', 'neom-blog' ),
						'section'         => 'neom_theme_blog',
						'active_callback' => 'neom_blog_section_color_disable',
					),
				),

				// Title Color.
				'neom_blog_section_title_color'       => array(
					'setting' => array(
						'default'           => '#252525',
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_alpha_color' ),
					),
					'control' => array(
						'type'            => 'color',
						'priority'        => 1580,
						'label'           => esc_html__( 'Title Color', 'neom-blog' ),
						'description'     => esc_html__( 'Set The Color For Section Title.', 'neom-blog' ),
						'section'         => 'neom_theme_blog',
						'choices'         => array(
							'alpha' => true,
						),
						'active_callback' => 'neom_blog_section_title_color',
					),
				),

				// Description Color.
				'neom_blog_section_description_color' => array(
					'setting' => array(
						'default'           => '#252525',
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_alpha_color' ),
					),
					'control' => array(
						'type'            => 'color',
						'priority'        => 1600,
						'label'           => esc_html__( 'Description Color', 'neom-blog' ),
						'description'     => esc_html__( 'Set The Color For Section Description.', 'neom-blog' ),
						'section'         => 'neom_theme_blog',
						'choices'         => array(
							'alpha' => true,
						),
						'active_callback' => 'neom_blog_section_description_color',
					),
				),
			);
		}
	}

	new neom_Customize_Homepage_Blog_Option();

endif;
