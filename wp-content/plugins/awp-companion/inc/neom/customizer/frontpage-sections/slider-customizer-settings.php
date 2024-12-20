<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Frontpage Main Slider.
 *
 * @package neom
 */

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'neom_Customize_Homepage_Slider_Option' ) ) :

	class neom_Customize_Homepage_Slider_Option extends neom_Customize_Base_Option {

		/**
		 * Arguments for options.
		 *
		 * @return array
		 */
		public function elements() {

			return array(

				'neom_main_slider_heading'             => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'parent_heading',
						'priority' => 1,
						'label'    => esc_html__( 'Slider Options', 'neom-blog' ),
						'section'  => 'neom_main_theme_slider',
					),
				),

				// Slider Enable.
				'neom_main_slider_disabled'            => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 2,
						'label'    => esc_html__( 'Slider Enable/Disable', 'neom-blog' ),
						'section'  => 'neom_main_theme_slider',
					),
				),

				// Slider Autoplay.
				'neom_slider_details_heading'          => array(
					'setting' => array(),
					'control' => array(
						'type'            => 'heading',
						'priority'        => 10,
						'label'           => esc_html__( 'Slider Meta Settings (Pro Features)', 'neom-blog' ),
						'section'         => 'neom_main_theme_slider',
						'active_callback' => 'neom_slider_details_heading',
					),
				),

				// Slider Autoplay.
				'neom_main_slider_autoplay_disable'    => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'            => 'toggle',
						'priority'        => 11,
						'label'           => esc_html__( 'AutoPlay Enable/Disable', 'neom-blog' ),
						'section'         => 'neom_main_theme_slider',
						'active_callback' => 'neom_main_slider_autoplay_disable',
					),
				),

				// Slider Animation Speed.
				'neom_main_slider_animation_speed'     => array(
					'setting' => array(
						'default'           => array(
							'slider' => 6000,
							'suffix' => '',
						),
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_slider' ),
					),
					'control' => array(
						'type'            => 'slider',
						'priority'        => 12,
						'label'           => esc_html__( 'Slider Animation Speed (Pro*)', 'neom-blog' ),
						'description'     => esc_html__( 'Note: Turn on Autoplay', 'neom-blog' ),
						'section'         => 'neom_main_theme_slider',
						'input_attrs'     => array(
							'min'  => 2000,
							'max'  => 10000,
							'step' => 500,
						),
						'active_callback' => 'neom_main_slider_animation_speed',
					),
				),

				// Slider loop.
				'neom_main_slider_loop'                => array(
					'setting' => array(
						'default'           => false,
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'            => 'toggle',
						'priority'        => 20,
						'label'           => esc_html__( 'Slide Loop Enable/Disable (Pro*)', 'neom-blog' ),
						'section'         => 'neom_main_theme_slider',
						'active_callback' => 'neom_main_slider_loop',
					),
				),

				// Slider Dots.
				'neom_main_slider_dots'                => array(
					'setting' => array(
						'default'           => false,
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'            => 'toggle',
						'priority'        => 25,
						'label'           => esc_html__( 'Slide Dots Enable/Disable (Pro*)', 'neom-blog' ),
						'section'         => 'neom_main_theme_slider',
						'active_callback' => 'neom_main_slider_dots',
					),
				),

				// Slider Nav.
				'neom_main_slider_nav'                 => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'            => 'toggle',
						'priority'        => 30,
						'label'           => esc_html__( 'Slide Nav Enable/Disable (Pro*)', 'neom-blog' ),
						'section'         => 'neom_main_theme_slider',
						'active_callback' => 'neom_main_slider_nav',
					),
				),

				// Slider Overlay.
				'neom_main_slider_overlay_disable'     => array(
					'setting' => array(
						'default'           => false,
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'            => 'toggle',
						'priority'        => 40,
						'label'           => esc_html__( 'Overlay Enable/Disable', 'neom-blog' ),
						'section'         => 'neom_main_theme_slider',
						'active_callback' => 'neom_main_slider_overlay_disable',
					),
				),

				// Slider Overlay color.
				'neom_main_slider_overlay_color'       => array(
					'setting' => array(
						'default'           => 'rgba(0,0,0,0.6)',
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_alpha_color' ),
					),
					'control' => array(
						'type'            => 'color',
						'priority'        => 50,
						'label'           => esc_html__( 'Slider Overlay Color (Pro*)', 'neom-blog' ),
						'section'         => 'neom_main_theme_slider',
						'choices'         => array(
							'alpha' => true,
						),
						'active_callback' => 'neom_main_slider_overlay_color',
					),
				),

				// Slider Color Settings Heading.
				'neom_slider_color_heading'            => array(
					'setting' => array(),
					'control' => array(
						'type'            => 'heading',
						'priority'        => 60,
						'label'           => esc_html__( 'Slider Text Color Settings', 'neom-blog' ),
						'section'         => 'neom_main_theme_slider',
						'active_callback' => 'neom_slider_color_heading',
					),
				),

				// Slide Color Settings Enable Disable.
				'neom_main_slider_text_color_disable'     => array(
					'setting' => array(
						'default'           => false,
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'            => 'toggle',
						'priority'        => 65,
						'label'           => esc_html__( 'Slide Text Color Enable/Disable', 'neom-blog' ),
						'section'         => 'neom_main_theme_slider',
						'active_callback' => 'neom_main_slider_text_color_disable',
					),
				),

				// Slide Title Color.
				'neom_main_slider_caption_title_color' => array(
					'setting' => array(
						'default'           => '#fff',
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_alpha_color' ),
					),
					'control' => array(
						'type'            => 'color',
						'priority'        => 75,
						'label'           => esc_html__( 'Slide Title Color', 'neom-blog' ),
						'description'     => esc_html__( 'Set the color for slide title.', 'neom-blog' ),
						'section'         => 'neom_main_theme_slider',
						'choices'         => array(
							'alpha' => true,
						),
						'active_callback' => 'neom_main_slider_caption_title_color',
					),
				),
				// Slide Title Background Color.
				'neom_main_slider_caption_title_bg_color' => array(
					'setting' => array(
						'default'           => '#11104d',
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_alpha_color' ),
					),
					'control' => array(
						'type'            => 'color',
						'priority'        => 80,
						'label'           => esc_html__( 'Slide Title Background Color', 'neom-blog' ),
						'description'     => esc_html__( 'Set the color for slide title.', 'neom-blog' ),
						'section'         => 'neom_main_theme_slider',
						'choices'         => array(
							'alpha' => true,
						),
						'active_callback' => 'neom_main_slider_caption_title_bg_color',
					),
				),
				// Slide SubTitle Color.
				'neom_main_slider_caption_subtitle_title_color' => array(
					'setting' => array(
						'default'           => '#fff',
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_alpha_color' ),
					),
					'control' => array(
						'type'            => 'color',
						'priority'        => 95,
						'label'           => esc_html__( 'Slide Subtitle Color', 'neom-blog' ),
						'description'     => esc_html__( 'Set the color for slide subtitle.', 'neom-blog' ),
						'section'         => 'neom_main_theme_slider',
						'choices'         => array(
							'alpha' => true,
						),
						'active_callback' => 'neom_main_slider_caption_subtitle_title_color',
					),
				),
				// Slide SubTitle2 Color.
				'neom_main_slider_caption_subtitle2_title_color' => array(
					'setting' => array(
						'default'           => '#d81956',
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_alpha_color' ),
					),
					'control' => array(
						'type'            => 'color',
						'priority'        => 100,
						'label'           => esc_html__( 'Slide Subtitle 2 Color', 'neom-blog' ),
						'description'     => esc_html__( 'Set the color for slide subtitle.', 'neom-blog' ),
						'section'         => 'neom_main_theme_slider',
						'choices'         => array(
							'alpha' => true,
						),
						'active_callback' => 'neom_main_slider_caption_subtitle2_title_color',
					),
				),
				// Slide Description Color.
				'neom_main_slider_caption_descrption_title_color' => array(
					'setting' => array(
						'default'           => '#fff',
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_alpha_color' ),
					),
					'control' => array(
						'type'            => 'color',
						'priority'        => 110,
						'label'           => esc_html__( 'Slide Description Color', 'neom-blog' ),
						'description'     => esc_html__( 'Set the color for slide description.', 'neom-blog' ),
						'section'         => 'neom_main_theme_slider',
						'choices'         => array(
							'alpha' => true,
						),
						'active_callback' => 'neom_main_slider_caption_descrption_title_color',
					),
				),

				// Slide Text Background Overlay.
				'neom_main_slider_text_overlay_disable'     => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'            => 'toggle',
						'priority'        => 150,
						'label'           => esc_html__( 'Text Overlay Enable/Disable', 'neom-blog' ),
						'section'         => 'neom_main_theme_slider',
						'active_callback' => 'neom_main_slider_text_overlay_disable',
					),
				),

				// Slide Text Background Overlay color.
				'neom_main_slider_text_overlay_color'       => array(
					'setting' => array(
						'default'           => 'rgba(0,0,0,0.6)',
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_alpha_color' ),
					),
					'control' => array(
						'type'            => 'color',
						'priority'        => 151,
						'label'           => esc_html__( 'Slider Text Overlay Color (Pro*)', 'neom-blog' ),
						'section'         => 'neom_main_theme_slider',
						'choices'         => array(
							'alpha' => true,
						),
						'active_callback' => 'neom_main_slider_text_overlay_color',
					),
				),

				'neom_slider_upgrade'                     => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'upgrade',
						'priority' => 9,
						'label'    => esc_html__( 'Slider', 'neom-blog' ),
						'section'  => 'neom_main_theme_slider',
					),
				),

			);
		}
	}

	new neom_Customize_Homepage_Slider_Option();

endif;
