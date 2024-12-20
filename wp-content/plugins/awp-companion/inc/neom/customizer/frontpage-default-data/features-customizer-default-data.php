<?php
// if ( ! function_exists( 'NEOM_FEATURES_DEFAULT_CONTENT' ) ) :
// function NEOM_FEATURES_DEFAULT_CONTENT( $wp_customize ) {

// $neom_features_data = $wp_customize->get_setting( 'neom_features_content' );
// if ( ! empty( $neom_features_data ) ) {
// $neom_features_data->default =
define(
	'NEOM_FEATURES_DEFAULT_CONTENT',
	wp_json_encode(
		array(
			array(
				'icon_value' => 'fa-delicious',
				'title'      => esc_html__( 'SEO Marketing', 'neom-blog' ),
				'text'       => esc_html__( 'Lorem ipsum is simple dummy', 'neom-blog' ),
				'link'       => '#',
				'id'         => 'customizer_repeater_features_001',
			),
			array(
				'icon_value' => 'fa-paint-brush',
				'title'      => esc_html__( 'Web Design', 'neom-blog' ),
				'text'       => esc_html__( 'Lorem ipsum is simple dummy', 'neom-blog' ),
				'link'       => '#',
				'id'         => 'customizer_repeater_features_002',
			),
			array(
				'icon_value' => 'fa-plug',
				'title'      => esc_html__( 'Features Addons', 'neom-blog' ),
				'text'       => esc_html__( 'Lorem ipsum is simple dummy', 'neom-blog' ),
				'link'       => '#',
				'id'         => 'customizer_repeater_features_003',
			),
			array(
				'icon_value' => 'fa-mixcloud',
				'title'      => esc_html__( 'Cloud Host', 'neom-blog' ),
				'text'       => esc_html__( 'Lorem ipsum is simple dummy', 'neom-blog' ),
				'link'       => '#',
				'id'         => 'customizer_repeater_features_004',
			),
		)
	)
);
	// }
	// }
	// add_action( 'customize_register', 'NEOM_FEATURES_DEFAULT_CONTENT' );
	// endif;

