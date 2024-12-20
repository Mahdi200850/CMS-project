<?php

/**
 *
 * @package awp-companion
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}


$activate_theme_data = wp_get_theme(); // getting current theme data
$activate_theme      = $activate_theme_data->name;
if ( 'Medical Formula' == $activate_theme ) {

	// Slider Default Data.
	if ( ! function_exists( 'formula_main_slider_default_content' ) ) :
		function formula_main_slider_default_content( $wp_customize ) {
			$formula_main_slider_data = $wp_customize->get_setting( 'formula_main_slider_content' );
			if ( ! empty( $formula_main_slider_data ) ) {
				$formula_main_slider_data->default = json_encode(
					array(
						array(
							'title'          => esc_html__( 'Health Haven Hospital: Your Pathway to Wellness', 'formula' ),
							'subtitle'       => esc_html__( 'Healing with Heart: Your Health, Our Priority', 'formula' ),
							'text'           => esc_html__( 'Where healing begins: Our hospital provides compassionate care and state-of-the-art treatments to help you feel your best.', 'formula' ),
							'button_text'    => __( 'Book Appointment Now', 'formula' ),
							'link'           => '#',
							'slide_format'   => 'customizer_repeater_slide_format_standard',
							'content_format' => 'left',
							'image_url'      => awp_companion_plugin_url . 'inc/formula/img/slider/medical-formula.jpg',
							'open_new_tab'   => 'no',
							'id'             => 'customizer_repeater_56d7ea7f40b96',
						),
					)
				);
			}
		}
		add_action( 'customize_register', 'formula_main_slider_default_content' );
	endif;


	// Service content.
	if ( ! function_exists( 'formula_service_default_content' ) ) :
		function formula_service_default_content( $wp_customize ) {
			$formula_service_data = $wp_customize->get_setting( 'formula_service_content' );
			if ( ! empty( $formula_service_data ) ) {
				$formula_service_data->default = json_encode(
					array(
						array(
							'title'        => esc_html__( 'Heart - Cardiology', 'formula' ),
							'text'         => esc_html__( 'Nulla fermentum euismod nibh, eu volutpat leo consequat sit amet. Sed vehicula mollis enim, sed rhoncus arcu hendrerit quis.', 'formula' ),
							'button_text'  => esc_html__( 'Get More Info', 'formula' ),
							'image_url'    => awp_companion_plugin_url . 'inc/formula/img/service/mf1.png',
							'choice'       => 'customizer_repeater_image',
							'link'         => '#',
							'open_new_tab' => 'no',
							'id'           => 'customizer_repeater_56d7ea7f40b15',
						),
						array(
							'title'        => esc_html__( 'Diagnostics & Treatment', 'formula' ),
							'text'         => esc_html__( 'Nulla fermentum euismod nibh, eu volutpat leo consequat sit amet. Sed vehicula mollis enim, sed rhoncus arcu hendrerit quis.', 'formula' ),
							'button_text'  => esc_html__( 'Get More Info', 'formula' ),
							'image_url'    => awp_companion_plugin_url . 'inc/formula/img/service/mf2.png',
							'choice'       => 'customizer_repeater_image',
							'link'         => '#',
							'open_new_tab' => 'no',
							'id'           => 'customizer_repeater_56d7ea7f40b16',
						),
						array(
							'title'        => esc_html__( 'Emergency 24x7', 'formula' ),
							'text'         => esc_html__( 'Nulla fermentum euismod nibh, eu volutpat leo consequat sit amet. Sed vehicula mollis enim, sed rhoncus arcu hendrerit quis.', 'formula' ),
							'button_text'  => esc_html__( 'Get More Info', 'formula' ),
							'image_url'    => awp_companion_plugin_url . 'inc/formula/img/service/mf3.png',
							'choice'       => 'customizer_repeater_image',
							'link'         => '#',
							'open_new_tab' => 'no',
							'id'           => 'customizer_repeater_56d7ea7f40b17',
						),
					)
				);
			}
		}
		add_action( 'customize_register', 'formula_service_default_content' );
	endif;

	// formula portfolio content data.
	if ( ! function_exists( 'formula_portfolio_default_customize_register' ) ) :
		function formula_portfolio_default_customize_register( $wp_customize ) {
			$formula_portfolio_data = $wp_customize->get_setting( 'formula_portfolio_content' );
			if ( ! empty( $formula_portfolio_data ) ) {
				$formula_portfolio_data->default = json_encode(
					array(
						array(
							'image_url'       => awp_companion_plugin_url . 'inc/formula/img/portfolio/mf1.jpg',
							'title'           => esc_html__( '', 'formula' ),
							'subtitle'        => esc_html__( '', 'formula' ),
							'link'            => '#',
							'open_new_tab'    => 'no',
							'id'              => 'customizer_repeater_56d7ea7f40c56',
						),
						array(
							'image_url'       => awp_companion_plugin_url . 'inc/formula/img/portfolio/mf2.jpg',
							'title'           => esc_html__( '', 'formula' ),
							'subtitle'        => esc_html__( '', 'formula' ),
							'link'            => '#',
							'open_new_tab'    => 'no',
							'id'              => 'customizer_repeater_56d7ea7f40c66',
						),
						array(
							'image_url'       => awp_companion_plugin_url . 'inc/formula/img/portfolio/mf3.jpg',
							'title'           => esc_html__( '', 'formula' ),
							'subtitle'        => esc_html__( '', 'formula' ),
							// 'designation'        => esc_html__( 'Director', 'formula' ),
							// 'text'            => 'Pok pok direct trade godard street art, poutine fam typewriter food truck narwhal kombucha wolf cardigan butcher whatever pickled you.',
							'link'            => '#',
							'open_new_tab'    => 'no',
							'id'              => 'customizer_repeater_56d7ea7f40c76',
						),

					)
				);
			}
		}
		add_action( 'customize_register', 'formula_portfolio_default_customize_register' );
	endif;

	// Testimonial content.
	if ( ! function_exists( 'formula_testimonial_default_content' ) ) :
		function formula_testimonial_default_content( $wp_customize ) {
			$formula_testimonial_data = $wp_customize->get_setting( 'formula_testimonial_content' );
			if ( ! empty( $formula_testimonial_data ) ) {
				$formula_testimonial_data->default = json_encode(
					array(
						array(
							'title'          => '"',
							'text'           => 'The healthcare I received was exceptional. The doctors and nurses were knowledgeable and compassionate, and they made me feel comfortable throughout my treatment. Thank you for providing such high-quality care.',
							'subtitle'       => esc_html__( 'Daniel Kim', 'formula' ),
							'designation'    => esc_html__( 'Graphic Designer', 'formula' ),
							'link'           => '#',
							'image_url'      => awp_companion_plugin_url . 'inc/formula/img/testimonial/mf2.jpg',
							'open_new_tab'   => 'no',
							'id'             => 'customizer_repeater_56d7ea7f40b96',
						),
						array(
							'title'          => '"',
							'text'           => 'Words cannot express how grateful I am for the exceptional care I received from the healthcare team. They were professional, compassionate, and attentive to my needs throughout my stay. Thank you for making a difficult time more manageable and providing me with the best possible care.',
							'subtitle'       => esc_html__( 'Emily Johnson', 'formula' ),
							'designation'    => esc_html__( 'Software Engineer', 'formula' ),
							'link'           => '#',
							'image_url'      => awp_companion_plugin_url . 'inc/formula/img/testimonial/mf1.jpg',
							'open_new_tab'   => 'no',
							'id'             => 'customizer_repeater_56d7ea7f40b97',
						),
					)
				);
			}
		}
		add_action( 'customize_register', 'formula_testimonial_default_content' );
	endif;

	// formula funfact content data.
	if ( ! function_exists( 'formula_funfact_default_customize_register' ) ) :
		function formula_funfact_default_customize_register( $wp_customize ) {
			// formula default funfact data.
			$formula_funfact_content_control = $wp_customize->get_setting( 'formula_funfact_content' );
			if ( ! empty( $formula_funfact_content_control ) ) {
				$formula_funfact_content_control->default = json_encode(
					array(
						array(
							'icon_value' => 'fa fa-medkit',
							'title'      => esc_html__( '1256', 'formula' ),
							'text'       => esc_html__( 'Patients Cured', 'formula' ),
						),
						array(
							'icon_value' => 'fa fa-stethoscope',
							'title'      => esc_html__( '29', 'formula' ),
							'text'       => esc_html__( 'Doctors', 'formula' ),
						),
						array(
							'icon_value' => 'fa fa-group',
							'title'      => esc_html__( '84', 'formula' ),
							'text'       => esc_html__( 'Medical Staff', 'formula' ),
						),
						array(
							'icon_value' => 'fa fa-bed',
							'title'      => esc_html__( '852', 'formula' ),
							'text'       => esc_html__( 'Medical Equipments', 'formula' ),
						),
					)
				);

			}
		}
		add_action( 'customize_register', 'formula_funfact_default_customize_register' );
	endif;

	// formula Team content data.
	if ( ! function_exists( 'formula_team_default_customize_register' ) ) :
		add_action( 'customize_register', 'formula_team_default_customize_register' );
		function formula_team_default_customize_register( $wp_customize ) {
			// formula default team data.
			$formula_team_data = $wp_customize->get_setting( 'formula_team_content' );
			if ( ! empty( $formula_team_data ) ) {
				$formula_team_data->default = json_encode(
					array(
						array(
							'image_url'       => awp_companion_plugin_url . 'inc/formula/img/team/mf1.jpg',
							'title'           => esc_html__( 'Dr. Amanda Patel', 'formula' ),
							'designation'     => esc_html__( 'Cardiology', 'formula' ),
							'link'            => '#',
							'open_new_tab'    => 'no',
							'id'              => 'customizer_repeater_56d7ea7f40c56',
							'social_repeater' => json_encode(
								array(
									array(
										'id'   => 'customizer-repeater-social-repeater-57fb908674e06',
										'link' => 'facebook.com',
										'icon' => 'fa-facebook',
									),
									array(
										'id'   => 'customizer-repeater-social-repeater-57fb9148530fc',
										'link' => 'twitter.com',
										'icon' => 'fa-twitter',
									),
									array(
										'id'   => 'customizer-repeater-social-repeater-57fb9150e1e89',
										'link' => 'linkedin.com',
										'icon' => 'fa-linkedin',
									),
								)
							),
						),
						array(
							'image_url'       => awp_companion_plugin_url . 'inc/formula/img/team/mf2.jpg',
							'title'           => esc_html__( 'Dr. David Wong', 'formula' ),
							'designation'     => esc_html__( 'Neurology', 'formula' ),
							'link'            => '#',
							'open_new_tab'    => 'no',
							'id'              => 'customizer_repeater_56d7ea7f40c66',
							'social_repeater' => json_encode(
								array(
									array(
										'id'   => 'customizer-repeater-social-repeater-57fb9155a1072',
										'link' => 'facebook.com',
										'icon' => 'fa-facebook',
									),
									array(
										'id'   => 'customizer-repeater-social-repeater-57fb9160ab683',
										'link' => 'twitter.com',
										'icon' => 'fa-twitter',
									),
									array(
										'id'   => 'customizer-repeater-social-repeater-57fb916ddffc9',
										'link' => 'linkedin.com',
										'icon' => 'fa-linkedin',
									),
								)
							),
						),
						array(
							'image_url'       => awp_companion_plugin_url . 'inc/formula/img/team/mf3.jpg',
							'title'           => esc_html__( 'Dr. Michael Foster', 'formula' ),
							'designation'     => esc_html__( 'Pediatrics', 'formula' ),
							'link'            => '#',
							'open_new_tab'    => 'no',
							'id'              => 'customizer_repeater_56d7ea7f40c76',
							'social_repeater' => json_encode(
								array(
									array(
										'id'   => 'customizer-repeater-social-repeater-57fb917e4c69e',
										'link' => 'facebook.com',
										'icon' => 'fa-facebook',
									),
									array(
										'id'   => 'customizer-repeater-social-repeater-57fb91830825c',
										'link' => 'twitter.com',
										'icon' => 'fa-twitter',
									),
									array(
										'id'   => 'customizer-repeater-social-repeater-57fb918d65f2e',
										'link' => 'linkedin.com',
										'icon' => 'fa-linkedin',
									),
								)
							),
						),
						array(
							'image_url'       => awp_companion_plugin_url . 'inc/formula/img/team/mf4.jpg',
							'title'           => esc_html__( 'Dr. Sarah Khan', 'formula' ),
							'designation'     => esc_html__( 'Obstetrics and Gynecology', 'formula' ),
							'link'            => '#',
							'open_new_tab'    => 'no',
							'id'              => 'customizer_repeater_56d7ea7f40c86',
							'social_repeater' => json_encode(
								array(
									array(
										'id'   => 'customizer-repeater-social-repeater-57fb925cedcb2',
										'link' => 'facebook.com',
										'icon' => 'fa-facebook',
									),
									array(
										'id'   => 'customizer-repeater-social-repeater-57fb92615f030',
										'link' => 'twitter.com',
										'icon' => 'fa-twitter',
									),
									array(
										'id'   => 'customizer-repeater-social-repeater-57fb9266c223a',
										'link' => 'linkedin.com',
										'icon' => 'fa-linkedin',
									),
								)
							),
						),
					)
				);
			}
		}
	endif;

	// Client section.
	if ( ! function_exists( 'formula_client_default_customize_register' ) ) :
		function formula_client_default_customize_register( $wp_customize ) {
			// formula default client data.
			$formula_client_data = $wp_customize->get_setting( 'formula_client_content' );
			if ( ! empty( $formula_client_data ) ) {
				$formula_client_data->default = json_encode(
					array(
						array(
							'link'         => '#',
							'image_url'    => awp_companion_plugin_url . 'inc/formula/img/client/mf1.jpg',
							'open_new_tab' => 'no',
							'id'           => 'customizer_repeater_56d7ea7f40b96',
						),
						array(
							'link'         => '#',
							'image_url'    => awp_companion_plugin_url . 'inc/formula/img/client/mf2.jpg',
							'open_new_tab' => 'no',
							'id'           => 'customizer_repeater_56d7ea7f40b97',
						),
						array(
							'link'         => '#',
							'image_url'    => awp_companion_plugin_url . 'inc/formula/img/client/mf3.jpg',
							'open_new_tab' => 'no',
							'id'           => 'customizer_repeater_56d7ea7f40b98',
						),
					)
				);
			}
		}
		add_action( 'customize_register', 'formula_client_default_customize_register' );
	endif;

}
