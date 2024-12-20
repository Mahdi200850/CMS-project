<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Frontpage Main woocommerce.
 *
 * @package neom
 */

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'neom_Customize_Homepage_Woocommerce_Option' ) ) :

	class neom_Customize_Homepage_Woocommerce_Option extends neom_Customize_Base_Option {

		/**
		 * Arguments for options.
		 *
		 * @return array
		 */
		public function elements() {

			return array(

				'neom_woocommerce_heading'          => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'parent_heading',
						'priority' => 1,
						'label'    => esc_html__( 'Woocommerce Options', 'neom-blog' ),
						'section'  => 'neom_theme_woocommerce',
					),
				),

				// Woocommerce Enable.
				'neom_woocommerce_disabled'         => array(
					'setting' => array(
						'default'           => false,
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 2,
						'label'    => esc_html__( 'Woocommerce Enable/Disable', 'neom-blog' ),
						'section'  => 'neom_theme_woocommerce',
					),
				),

				// Woocommerce Extra.
				'neom_woocommerce_details_heading'  => array(
					'setting' => array(),
					'control' => array(
						'type'            => 'heading',
						'priority'        => 14,
						'label'           => esc_html__( 'Woocommerce Carousal Settings', 'neom-blog' ),
						'section'         => 'neom_theme_woocommerce',
						'active_callback' => 'neom_woocommerce_details_heading',
					),
				),

				// Woocommerce Autoplay.
				'neom_woocommerce_autoplay_disable' => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'            => 'toggle',
						'priority'        => 20,
						'label'           => esc_html__( 'AutoPlay Enable/Disable', 'neom-blog' ),
						'section'         => 'neom_theme_woocommerce',
						'active_callback' => 'neom_woocommerce_autoplay_disable',
					),
				),

				// Woocommerce Animation Speed.
				'neom_woocommerce_animation_speed'  => array(
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
						'label'           => esc_html__( 'Woocommerce Animation Speed', 'neom-blog' ),
						'description'     => esc_html__( 'Note: Turn on Autoplay', 'neom-blog' ),
						'section'         => 'neom_theme_woocommerce',
						'input_attrs'     => array(
							'min'  => 2000,
							'max'  => 10000,
							'step' => 500,
						),
						'active_callback' => 'neom_woocommerce_animation_speed',
					),
				),

				// woocommerce loop.
				// 'neom_woocommerce_loop'              => array(
				// 'setting' => array(
				// 'default'           => false,
				// 'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_checkbox' ),
				// ),
				// 'control' => array(
				// 'type'            => 'toggle',
				// 'priority'        => 40,
				// 'label'           => esc_html__( 'woocommerce Loop Enable/Disable', 'neom-blog' ),
				// 'section'         => 'neom_theme_woocommerce',
				// 'active_callback' => 'neom_woocommerce_loop',
				// ),
				// ),

				// woocommerce Dots.
				'neom_woocommerce_dots'             => array(
					'setting' => array(
						'default'           => false,
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'            => 'toggle',
						'priority'        => 60,
						'label'           => esc_html__( 'Woocommerce Dots Enable/Disable', 'neom-blog' ),
						'section'         => 'neom_theme_woocommerce',
						'active_callback' => 'neom_woocommerce_dots',
					),
				),

				// woocommerce Nav.
				'neom_woocommerce_nav'              => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'            => 'toggle',
						'priority'        => 70,
						'label'           => esc_html__( 'Woocommerce Nav Enable/Disable', 'neom-blog' ),
						'section'         => 'neom_theme_woocommerce',
						'active_callback' => 'neom_woocommerce_nav',
					),
				),

				// woocommerce Extra.
				'neom_woocommerce_extra_heading'    => array(
					'setting' => array(),
					'control' => array(
						'type'            => 'heading',
						'priority'        => 80,
						'label'           => esc_html__( 'Woocommerce Extra Settings', 'neom-blog' ),
						'section'         => 'neom_theme_woocommerce',
						'active_callback' => 'neom_woocommerce_extra_heading',
					),
				),

				// container.
				'neom_woocommerce_container_size'   => array(
					'setting' => array(
						'default'           => 'container-full',
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_radio' ),
					),
					'control' => array(
						'type'            => 'radio',
						'priority'        => 120,
						'is_default_type' => true,
						'label'           => esc_html__( 'Woocommerce Width', 'neom-blog' ),
						'section'         => 'neom_theme_woocommerce',
						'choices'         => array(
							'av-container'   => esc_html__( 'Container', 'neom-blog' ),
							'container-full' => esc_html__( 'Container Full', 'neom-blog' ),
						),
						'active_callback' => 'neom_woocommerce_container_size',
					),
				),
				// column layout.
				'neom_woocommerce_column_layout'    => array(
					'setting' => array(
						'default'           => 4,
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_radio' ),
					),
					'control' => array(
						'type'            => 'radio_image',
						'priority'        => 150,
						'label'           => esc_html__( 'Column Layout', 'neom-blog' ),
						'section'         => 'neom_theme_woocommerce',
						'choices'         => array(
							'2' => awp_companion_plugin_url . '/inc/neom/img/icons/column-2.png',
							'3' => awp_companion_plugin_url . '/inc/neom/img/icons/column-3.png',
							'4' => awp_companion_plugin_url . '/inc/neom/img/icons/column-4.png',
						),
						'active_callback' => 'neom_woocommerce_column_layout',
					),
				),
			);
		}
	}

	new neom_Customize_Homepage_Woocommerce_Option();

endif;
