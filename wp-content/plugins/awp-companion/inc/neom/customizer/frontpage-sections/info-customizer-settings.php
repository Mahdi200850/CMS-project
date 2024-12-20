<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/**
 * Frontpage info.
 *
 * @package neom
 */

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'neom_Customize_Homepage_Info_Option' ) ) :

	class neom_Customize_Homepage_Info_Option extends neom_Customize_Base_Option {

		/**
		 * Arguments for options.
		 *
		 * @return array
		 */
		public function elements() {

			return array(

				'neom_info_heading'         => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'heading',
						'priority' => 1,
						'label'    => esc_html__( 'Info Options', 'neom-blog' ),
						'section'  => 'neom_theme_info',
					),
				),

				// Info Top Enable
				'neom_info_top_disabled'    => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 3,
						'label'    => esc_html__( 'Top Info Enable/Disable', 'neom-blog' ),
						'section'  => 'neom_theme_info',
					),
				),

				// Info Footer Enable.
				'neom_info_bottom_disabled' => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 3,
						'label'    => esc_html__( 'Bottom Info Enable/Disable', 'neom-blog' ),
						'section'  => 'neom_theme_info',
					),
				),

				'neom_top_info_upgrade'         => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'upgrade',
						'priority' => 12,
						'label'    => esc_html__( 'Info', 'neom-blog' ),
						'section'  => 'neom_theme_info',
					),
				),
			);
		}
	}

	new neom_Customize_Homepage_Info_Option();

endif;
