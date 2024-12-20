<?php
// Client section
/*
 if ( ! function_exists( 'neom_client_default_customize_register' ) ) :
add_action( 'customize_register', 'neom_client_default_customize_register' );
function neom_client_default_customize_register( $wp_customize ){
	//neom default client data.
	$neom_client_data = $wp_customize->get_setting( 'neom_client_content' );
	if ( ! empty( $neom_client_data ) ) {
		$neom_client_data->default =  */
		define(
			'NEOM_CLIENT_DEFAULT_CONTENT',
			wp_json_encode(
				array(
					array(
						'image_url' => awp_companion_plugin_url . '/inc/neom/img/client/client01.png',
						'title'     => esc_html__( 'Creative', 'neom-blog' ),
						'subtitle'  => esc_html__( 'Business', 'neom-blog' ),
						'link'      => '#',
						'id'        => 'customizer_repeater_client_001',
					),
					array(
						'image_url' => awp_companion_plugin_url . '/inc/neom/img/client/client02.png',
						'title'     => esc_html__( 'Creative', 'neom-blog' ),
						'subtitle'  => esc_html__( 'Logo', 'neom-blog' ),
						'link'      => '#',
						'id'        => 'customizer_repeater_client_002',
					),
					array(
						'image_url' => awp_companion_plugin_url . '/inc/neom/img/client/client03.png',
						'title'     => esc_html__( 'Website', 'neom-blog' ),
						'subtitle'  => esc_html__( 'Hosting', 'neom-blog' ),
						'link'      => '#',
						'id'        => 'customizer_repeater_client_003',
					),
					array(
						'image_url' => awp_companion_plugin_url . '/inc/neom/img/client/client04.png',
						'title'     => esc_html__( 'Digital', 'neom-blog' ),
						'subtitle'  => esc_html__( 'Marketing', 'neom-blog' ),
						'link'      => '#',
						'id'        => 'customizer_repeater_client_004',
					),
					array(
						'image_url' => awp_companion_plugin_url . '/inc/neom/img/client/client05.png',
						'title'     => esc_html__( 'Business', 'neom-blog' ),
						'subtitle'  => esc_html__( 'Group', 'neom-blog' ),
						'link'      => '#',
						'id'        => 'customizer_repeater_client_005',
					),

				)
			)
		);
			/*
			  }
			}
			endif; */
