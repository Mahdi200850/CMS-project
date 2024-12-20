<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Frontpage Blog.
 *
 * @package neom
 */

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'neom_Customize_Homepage_Template_Option' ) ) :

	class neom_Customize_Homepage_Template_Option extends neom_Customize_Base_Option {

		/**
		 * Arguments for options.
		 *
		 * @return array
		 */
		public function elements() {

			return array(

				'neom_homepage_template_heading'     => array(
					'setting' => array(),
					'control' => array(
						'type'		=> 'heading',
						'priority'	=> 1,
						'label'		=> esc_html__( 'Homepage Template', 'neom-blog' ),
						'section'	=> 'neom_theme_homepage',
					),
				),
				
				'neom_homepage_template_design'		=> array(
					'setting'		=> array(
						'default'	=> 'neom_homepage_template_1',
						'sanitize_callback'	=> array( 'neom_Customizer_Sanitize', 'sanitize_radio' ),
					),
					'control' => array(
						'type'		=> 'radio_image',
						'priority'	=> 35,
						'label'		=> esc_html__( 'Homepage Design', 'neom-blog' ),
						'section'	=> 'neom_theme_homepage',
						'choices'	=> array(
							'neom_homepage_template_1'	=> get_template_directory() . '/assets/img/homepage-template-1.png',
							'neom_homepage_template_2'	=> get_template_directory() . '/assets/img/homepage-template-2.png',
						),
					),
				),
				
			);
		}
	}

	new neom_Customize_Homepage_Template_Option();

endif;
