<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Extend customizer section.
 *
 * @package neom
 *
 * @see     WP_Customize_Section
 * @access  public
 */

function neom_frontpage_sections_settings( $wp_customize ) {

	$active_callback   = isset( $array['active_callback'] ) ? $array['active_callback'] : null;
	$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';

	/* Frontpage panel */
	$wp_customize->add_panel(
		'neom_frontpage_settings',
		array(
			'priority'   => 8,
			'capability' => 'edit_theme_options',
			'title'      => __( 'Frontpage Sections', 'neom-blog' ),
		)
	);

	/* Slider Settings */
	$wp_customize->add_section(
		'neom_main_theme_slider',
		array(
			'title'    => __( 'Slider Settings', 'neom-blog' ),
			'panel'    => 'neom_frontpage_settings',
			'priority' => 2,
		)
	);

	if ( class_exists( 'neom_Repeater' ) ) {
		$wp_customize->add_setting(
			'neom_main_slider_content',
			array(
				'default' => NEOM_SLIDER_DEFAULT_CONTENT,
			)
		);
		$wp_customize->add_control(
			new neom_Repeater(
				$wp_customize,
				'neom_main_slider_content',
				array(
					'label'                                => esc_html__( 'Slider Items Content', 'neom-blog' ),
					'section'                              => 'neom_main_theme_slider',
					'add_field_label'                      => esc_html__( 'Add new slide', 'neom-blog' ),
					'item_name'                            => esc_html__( 'Slide Item', 'neom-blog' ),
					'priority'                             => 5,
					'customizer_repeater_title_control'    => true,
					'customizer_repeater_subtitle_control' => true,
					'customizer_repeater_subtitle2_control' => true,
					'customizer_repeater_text_control'     => true,
					'customizer_repeater_text2_control'    => true,
					'customizer_repeater_link_control'     => true,
					'customizer_repeater_slide_align'      => true,
					'customizer_repeater_checkbox_control' => true,
					'customizer_repeater_image_control'    => true,
					// 'customizer_repeater_image2_control'   => true,
					'customizer_repeater_slide_content_format_type' => true,
					// 'customizer_repeater_slide_format' => true,
					// 'customizer_repeater_video_url_control' => true,
					'active_callback'                      => 'neom_main_slider_content',
				)
			)
		);
	}
		// Slider Active Callback.
		include 'frontpage-callback/slider-callback.php';

	/* Top Info Settings  */
	$wp_customize->add_section(
		'neom_theme_top_info',
		array(
			'title'    => __( 'Top Info Settings', 'neom-blog' ),
			'panel'    => 'neom_frontpage_settings',
			'priority' => 200,
		)
	);

	if ( class_exists( 'neom_Repeater' ) ) {
		$wp_customize->add_setting(
			'neom_top_info_content',
			array(
				'default' => NEOM_TOP_INFO_DEFAULT_CONTENT,
			)
		);
		$wp_customize->add_control(
			new neom_Repeater(
				$wp_customize,
				'neom_top_info_content',
				array(
					'label'                                => esc_html__( 'Info Items Content', 'neom-blog' ),
					'section'                              => 'neom_theme_top_info',
					'priority'                             => 8,
					'add_field_label'                      => esc_html__( 'Add New Info', 'neom-blog' ),
					'item_name'                            => esc_html__( 'Info Item', 'neom-blog' ),
					'customizer_repeater_icon_control'     => true,
					'customizer_repeater_title_control'    => true,
					'customizer_repeater_text_control'     => true,
					'customizer_repeater_link_control'     => true,
					'customizer_repeater_checkbox_control' => true,
					'active_callback'                      => 'neom_top_info_content',
				)
			)
		);
	}

	// Top Info Active Callback.
	include 'frontpage-callback/top-info-callback.php';

	/* About Settings */
	$wp_customize->add_section(
		'neom_theme_about',
		array(
			'title'    => __( 'About Settings', 'neom-blog' ),
			'panel'    => 'neom_frontpage_settings',
			'priority' => 300,
		)
	);

	if ( class_exists( 'neom_Repeater' ) ) {
		$wp_customize->add_setting(
			'neom_about_content',
			array(
				'default' => NEOM_ABOUT_DEFAULT_CONTENT,
			)
		);

		$wp_customize->add_control(
			new neom_Repeater(
				$wp_customize,
				'neom_about_content',
				array(
					'label'                              => esc_html__( 'About Items Content', 'neom-blog' ),
					'section'                            => 'neom_theme_about',
					'priority'                           => 8,
					'add_field_label'                    => esc_html__( 'Add new About', 'neom-blog' ),
					'item_name'                          => esc_html__( 'About Item', 'neom-blog' ),
					'customizer_repeater_title_control'  => true,
					'customizer_repeater_number_control' => true,
					'active_callback'                    => 'neom_about_content',
				)
			)
		);
	}

	$wp_customize->add_setting(
		'neom_about_editor_content',
		array(
			'default'           => '',
			'sanitize_callback' => 'wp_kses_post',
		)
	);
	$wp_customize->add_control(
		new Skyrocket_TinyMCE_Custom_control(
			$wp_customize,
			'neom_about_editor_content',
			array(
				'label'           => __( 'About Content' ),
				'description'     => __( 'This is a TinyMCE Editor Custom Control' ),
				'section'         => 'neom_theme_about',
				'priority'        => 15,
				'input_attrs'     => array(
					'toolbar1'     => 'bold italic bullist numlist alignleft aligncenter alignright link',
					'toolbar2'     => 'formatselect outdent indent | blockquote charmap',
					'mediaButtons' => true,
				),
				'active_callback' => 'neom_about_editor_content',
			)
		)
	);

		// About Section Image.
			$wp_customize->add_setting(
				'neom_about_img',
				array(
					'default'           => awp_companion_plugin_url . '/inc/neom/img/about.webp',
					'sanitize_callback' => 'esc_url_raw',
				)
			);

			$wp_customize->add_control(
				new WP_Customize_Image_Control(
					$wp_customize,
					'neom_about_img',
					array(
						'label'           => __( 'About Section Image', 'neom-blog' ),
						'priority'        => 16,
						'section'         => 'neom_theme_about',
						'settings'        => 'neom_about_img',
						'active_callback' => 'neom_about_img',
					)
				)
			);
		// About Section Image.

		// About background Image.
		$wp_customize->add_setting(
			'neom_about_background',
			array(
				'default'           => '',
				'sanitize_callback' => 'esc_url_raw',
			)
		);

		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'neom_about_background',
				array(
					'label'           => __( 'About Section Background Image', 'neom-blog' ),
					'priority'        => 50,
					'section'         => 'neom_theme_about',
					'settings'        => 'neom_about_background',
					'active_callback' => 'neom_about_background',
				)
			)
		);
		// About background Image End.

		// About Active Callback.
		include 'frontpage-callback/about-callback.php';

	/* Cta Settings  */
	$wp_customize->add_section(
		'neom_theme_cta',
		array(
			'title'    => __( 'CallOut Settings', 'neom-blog' ),
			'panel'    => 'neom_frontpage_settings',
			'priority' => 400,
		)
	);

		// Cta Background Image.
		$wp_customize->add_setting(
			'neom_cta_background_image',
			array(
				'sanitize_callback' => 'esc_url_raw',
				'default'           => '',
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'neom_cta_background_image',
				array(
					'label'           => esc_html__( 'Background Image', 'neom-blog' ),
					'section'         => 'neom_theme_cta',
					'settings'        => 'neom_cta_background_image',
					'priority'        => 1005,
					'active_callback' => 'neom_cta_background_image',
				)
			)
		);

		// Cta Active Callback.
		include 'frontpage-callback/cta-callback.php';

	/* Service Settings */
	$wp_customize->add_section(
		'neom_theme_service',
		array(
			'title'    => __( 'Service Settings', 'neom-blog' ),
			'panel'    => 'neom_frontpage_settings',
			'priority' => 500,
		)
	);

	if ( class_exists( 'neom_Repeater' ) ) {
		$wp_customize->add_setting(
			'neom_service_content',
			array(
				'default' => NEOM_SERVICE_DEFAULT_CONTENT,
			)
		);

		$wp_customize->add_control(
			new neom_Repeater(
				$wp_customize,
				'neom_service_content',
				array(
					'label'                                => esc_html__( 'Service Items Content', 'neom-blog' ),
					'section'                              => 'neom_theme_service',
					'priority'                             => 8,
					'add_field_label'                      => esc_html__( 'Add new service', 'neom-blog' ),
					'item_name'                            => esc_html__( 'Service Item', 'neom-blog' ),
					'customizer_repeater_image_control'    => true,
					'customizer_repeater_icon_control'     => true,
					'customizer_repeater_title_control'    => true,
					'customizer_repeater_subtitle_control' => true,
					'customizer_repeater_subtitle2_control' => true,
					'customizer_repeater_subtitle3_control' => true,
					'customizer_repeater_subtitle4_control' => true,
					'customizer_repeater_subtitle5_control' => true,
					'customizer_repeater_text2_control'    => true,
					'customizer_repeater_link_control'     => true,
					'active_callback'                      => 'neom_service_content',
				)
			)
		);
	}

		// Service background Image Start.
			// Service Background Image.
			$wp_customize->add_setting(
				'neom_service_background',
				array(
					'default'           => '',
					'sanitize_callback' => 'esc_url_raw',
				)
			);

			$wp_customize->add_control(
				new WP_Customize_Image_Control(
					$wp_customize,
					'neom_service_background',
					array(
						'label'           => __( 'Background Image', 'neom-blog' ),
						'priority'        => 50,
						'section'         => 'neom_theme_service',
						'settings'        => 'neom_service_background',
						'active_callback' => 'neom_service_background',
					)
				)
			);
		// Service background Image End.

		// Service Active Callback.
		include 'frontpage-callback/service-callback.php';

	/*
	 features Settings */
	// $wp_customize->add_section(
	// 'neom_theme_features',
	// array(
	// 'title'    => __( 'Features Settings', 'neom-blog' ),
	// 'panel'    => 'neom_frontpage_settings',
	// 'priority' => 600,
	// )
	// );

	// if ( class_exists( 'neom_Repeater' ) ) {
	// $wp_customize->add_setting(
	// 'neom_features_content',
	// array(
	// 'default' => NEOM_FEATURES_DEFAULT_CONTENT,
	// )
	// );

	// $wp_customize->add_control(
	// new neom_Repeater(
	// $wp_customize,
	// 'neom_features_content',
	// array(
	// 'label'                             => esc_html__( 'features Items Content', 'neom-blog' ),
	// 'section'                           => 'neom_theme_features',
	// 'priority'                          => 10,
	// 'add_field_label'                   => esc_html__( 'Add new features', 'neom-blog' ),
	// 'item_name'                         => esc_html__( 'features Item', 'neom-blog' ),
	// 'customizer_repeater_image_control' => true,
	// 'customizer_repeater_icon_control'  => true,
	// 'customizer_repeater_title_control' => true,
	// 'customizer_repeater_text_control'  => true,
	// 'customizer_repeater_link_control'  => true,
	// 'active_callback'                   => 'neom_features_content',
	// )
	// )
	// );
	// }

	// features Image Start.
	// features Image.
	// $wp_customize->add_setting(
	// 'neom_features_right_img',
	// array(
	// 'default'           => awp_companion_plugin_url . '/inc/neom/img/features.webp',
	// 'sanitize_callback' => 'esc_url_raw',
	// )
	// );

	// $wp_customize->add_control(
	// new WP_Customize_Image_Control(
	// $wp_customize,
	// 'neom_features_right_img',
	// array(
	// 'label'           => __( 'features Section Image', 'neom-blog' ),
	// 'priority'        => 50,
	// 'section'         => 'neom_theme_features',
	// 'settings'        => 'neom_features_right_img',
	// 'active_callback' => 'neom_features_right_img',
	// )
	// )
	// );
	// features background Image End.

	// Features Active Callback.
		include 'frontpage-callback/features-callback.php';

	/* Portfolio Settings */
	$wp_customize->add_section(
		'neom_theme_portfolio',
		array(
			'title'    => __( 'Portfolio Settings', 'neom-blog' ),
			'panel'    => 'neom_frontpage_settings',
			'priority' => 700,
		)
	);

	if ( class_exists( 'neom_Repeater' ) ) {
		$wp_customize->add_setting(
			'neom_portfolio_content',
			array(
				'default' => NEOM_PORTFOLIO_DEFAULT_CONTENT,
			)
		);
		$wp_customize->add_control(
			new neom_Repeater(
				$wp_customize,
				'neom_portfolio_content',
				array(
					'label'                                => esc_html__( 'Portfolio Items Content', 'neom-blog' ),
					'section'                              => 'neom_theme_portfolio',
					'add_field_label'                      => esc_html__( 'Add New Portfolio', 'neom-blog' ),
					'item_name'                            => esc_html__( 'Portfolio Item', 'neom-blog' ),
					'priority'                             => 8,
					'customizer_repeater_title_control'    => true,
					'customizer_repeater_subtitle_control' => true,
					'customizer_repeater_text_control'     => true,
					'customizer_repeater_link_control'     => true,
					'customizer_repeater_image_control'    => true,
					'customizer_repeater_checkbox_control' => true,
					// 'customizer_repeater_repeater_control' => true,
					'active_callback'                      => 'neom_portfolio_content',
				)
			)
		);
	}

		// Portfolio Background Image.
		$wp_customize->add_setting(
			'neom_portfolio_background',
			array(
				'default'           => '',
				'sanitize_callback' => 'esc_url_raw',
			)
		);

		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'neom_portfolio_background',
				array(
					'label'           => __( 'Background Image', 'neom-blog' ),
					'section'         => 'neom_theme_portfolio',
					'settings'        => 'neom_portfolio_background',
					'priority'        => 1005,
					'active_callback' => 'neom_portfolio_background',
				)
			)
		);

		// Portfolio Active Callback.
		include 'frontpage-callback/portfolio-callback.php';

	/* Funfact Settings */
	$wp_customize->add_section(
		'neom_theme_funfact',
		array(
			'title'    => __( 'Funfact Settings', 'neom-blog' ),
			'panel'    => 'neom_frontpage_settings',
			'priority' => 800,
		)
	);

	if ( class_exists( 'neom_Repeater' ) ) {
		$wp_customize->add_setting(
			'neom_funfact_content',
			array(
				'default' => NEOM_FUNFACT_DEFAULT_CONTENT,
			)
		);
		$wp_customize->add_control(
			new neom_Repeater(
				$wp_customize,
				'neom_funfact_content',
				array(
					'label'                             => esc_html__( 'Funfact Items Content', 'neom-blog' ),
					'section'                           => 'neom_theme_funfact',
					'add_field_label'                   => esc_html__( 'Add new Funfact', 'neom-blog' ),
					'item_name'                         => esc_html__( 'Funfact Item', 'neom-blog' ),
					'customizer_repeater_title_control' => true,
					'customizer_repeater_text_control'  => true,
					'customizer_repeater_image_control' => true,
					'customizer_repeater_icon_control'  => true,
					'active_callback'                   => 'neom_funfact_content',
				)
			)
		);
	}

		// Funfact left Image Start.
			// Funfact left Image.
			$wp_customize->add_setting(
				'neom_funfact_left_img',
				array(
					'default'           => awp_companion_plugin_url . '/inc/neom/img/funfact.webp',
					'sanitize_callback' => 'esc_url_raw',
				)
			);

			$wp_customize->add_control(
				new WP_Customize_Image_Control(
					$wp_customize,
					'neom_funfact_left_img',
					array(
						'label'           => __( 'Funfact Content Image', 'neom-blog' ),
						// 'description'		=> __( 'Note: This setting uses only for homepage template 1', 'neom-blog' ),
						'section'         => 'neom_theme_funfact',
						'settings'        => 'neom_funfact_left_img',
						'active_callback' => 'neom_funfact_left_img',
					)
				)
			);
		// Funfact left Image End.

		// Funfact bg Image Start.
			// Funfact bg Image.
			$wp_customize->add_setting(
				'neom_funfact_background',
				array(
					'default'           => '',
					'sanitize_callback' => 'esc_url_raw',
				)
			);

			$wp_customize->add_control(
				new WP_Customize_Image_Control(
					$wp_customize,
					'neom_funfact_background',
					array(
						'label'           => __( 'Funfact Background Image', 'neom-blog' ),
						// 'description'		=> __( 'Note: This setting uses only for homepage template 1', 'neom-blog' ),
						'section'         => 'neom_theme_funfact',
						'settings'        => 'neom_funfact_background',
						'active_callback' => 'neom_funfact_background',
						'priority'        => 100,
					)
				)
			);
		// Funfact bg Image End.

		// Funfact Active Callback.
		include 'frontpage-callback/funfact-callback.php';

	/* Blog Settings*/
	$wp_customize->add_section(
		'neom_theme_blog',
		array(
			'title'    => __( 'Blog Settings', 'neom-blog' ),
			'panel'    => 'neom_frontpage_settings',
			'priority' => 900,
		)
	);
		// Blog Category.
		$wp_customize->add_setting( 'neom_theme_blog_category', array( 'capability' => 'edit_theme_options' ) );
		$wp_customize->add_control(
			new neom_Customize_Category_Control(
				$wp_customize,
				'neom_theme_blog_category',
				array(
					'label'             => __( 'Choose Blog Category', 'neom-blog' ),
					'section'           => 'neom_theme_blog',
					'settings'          => 'neom_theme_blog_category',
					'sanitize_callback' => 'sanitize_text_field',
					'active_callback'   => 'neom_theme_blog_category',
				)
			)
		);

		// Blog Background Image.
		$wp_customize->add_setting(
			'neom_blog_background',
			array(
				'default'           => '',
				'sanitize_callback' => 'esc_url_raw',
			)
		);

		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'neom_blog_background',
				array(
					'label'           => __( 'Background Image', 'neom-blog' ),
					'section'         => 'neom_theme_blog',
					'priority'        => 300,
					'settings'        => 'neom_blog_background',
					'active_callback' => 'neom_blog_background',
				)
			)
		);

		// Blog Active Callback.
		include 'frontpage-callback/blog-callback.php';

	/* Testimonial Settings */
	$wp_customize->add_section(
		'neom_theme_testimonial',
		array(
			'title'    => __( 'Testimonial Settings', 'neom-blog' ),
			'panel'    => 'neom_frontpage_settings',
			'priority' => 1000,
		)
	);

	if ( class_exists( 'neom_Repeater' ) ) {
		$wp_customize->add_setting(
			'neom_testimonial_content',
			array(
				'default' => NEOM_TESTIMONIAL_DEFAULT_CONTENT,
			)
		);
		$wp_customize->add_control(
			new neom_Repeater(
				$wp_customize,
				'neom_testimonial_content',
				array(
					'label'                                => esc_html__( 'Testimonial Items Content', 'neom-blog' ),
					'section'                              => 'neom_theme_testimonial',
					'add_field_label'                      => esc_html__( 'Add new testimonial item', 'neom-blog' ),
					'item_name'                            => esc_html__( 'Testimonial Item', 'neom-blog' ),
					'customizer_repeater_title_control'    => true,
					'customizer_repeater_subtitle_control' => true,
					'customizer_repeater_text_control'     => true,
					'customizer_repeater_link_control'     => true,
					'customizer_repeater_checkbox_control' => true,
					'customizer_repeater_rating_control'   => true,
					'customizer_repeater_image_control'    => true,
					'customizer_repeater_designation_control' => true,
					'active_callback'                      => 'neom_testimonial_content',
				)
			)
		);
	}

		// Testimonial Background Image.
		$wp_customize->add_setting(
			'neom_testimonial_background',
			array(
				'default'           => '',
				'sanitize_callback' => 'esc_url_raw',
			)
		);

		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'neom_testimonial_background',
				array(
					'label'           => __( 'Background Image', 'neom-blog' ),
					'section'         => 'neom_theme_testimonial',
					'settings'        => 'neom_testimonial_background',
					'active_callback' => 'neom_testimonial_background',
				)
			)
		);

		// Testimonial Active Callback.
		include 'frontpage-callback/testimonial-callback.php';

	/* Team Settings  */
	$wp_customize->add_section(
		'neom_theme_team',
		array(
			'title'    => __( 'Team Settings', 'neom-blog' ),
			'panel'    => 'neom_frontpage_settings',
			'priority' => 1200,
		)
	);

	if ( class_exists( 'neom_Repeater' ) ) {
		$wp_customize->add_setting(
			'neom_team_content',
			array(
				'default' => NEOM_TEAM_DEFAULT_CONTENT,
			)
		);
		$wp_customize->add_control(
			new neom_Repeater(
				$wp_customize,
				'neom_team_content',
				array(
					'label'                                => esc_html__( 'Team Items Content', 'neom-blog' ),
					'section'                              => 'neom_theme_team',
					'add_field_label'                      => esc_html__( 'Add new Team', 'neom-blog' ),
					'item_name'                            => esc_html__( 'Team Item', 'neom-blog' ),
					'customizer_repeater_title_control'    => true,
					'customizer_repeater_subtitle_control' => true,
					'customizer_repeater_text_control'     => true,
					// 'customizer_repeater_button_text_control' => true,
					'customizer_repeater_link_control'     => true,
					'customizer_repeater_image_control'    => true,
					'customizer_repeater_checkbox_control' => true,
					// 'customizer_repeater_designation_control' => true,
					'customizer_repeater_repeater_control' => true,
					'active_callback'                      => 'neom_team_content',
				)
			)
		);
	}

	// Team Background Image.
	$wp_customize->add_setting(
		'neom_team_background',
		array(
			'default'           => '',
			'sanitize_callback' => 'esc_url_raw',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'neom_team_background',
			array(
				'label'           => __( 'Background Image', 'neom-blog' ),
				'section'         => 'neom_theme_team',
				'priority'        => 300,
				'settings'        => 'neom_team_background',
				'active_callback' => 'neom_team_background',
			)
		)
	);

		// Team Active Callback.
		include 'frontpage-callback/team-callback.php';

	/* Client Settings */
	$wp_customize->add_section(
		'neom_theme_client',
		array(
			'title'    => __( 'Client Settings', 'neom-blog' ),
			'panel'    => 'neom_frontpage_settings',
			'priority' => 1700,
		)
	);

	if ( class_exists( 'neom_Repeater' ) ) {
		$wp_customize->add_setting(
			'neom_client_content',
			array(
				'default' => NEOM_CLIENT_DEFAULT_CONTENT,
			)
		);
		$wp_customize->add_control(
			new neom_Repeater(
				$wp_customize,
				'neom_client_content',
				array(
					'label'                                => esc_html__( 'Client Items Content', 'neom-blog' ),
					'section'                              => 'neom_theme_client',
					'add_field_label'                      => esc_html__( 'Add New Client item', 'neom-blog' ),
					'item_name'                            => esc_html__( 'Client Item', 'neom-blog' ),
					'customizer_repeater_link_control'     => true,
					'customizer_repeater_image_control'    => true,
					'customizer_repeater_title_control'    => true,
					'customizer_repeater_subtitle_control' => true,
					'active_callback'                      => 'neom_client_content',
				)
			)
		);
	}

		// Client Active Callback.
		include 'frontpage-callback/client-callback.php';

		// Client Image.
			$wp_customize->add_setting(
				'neom_client_background',
				array(
					'default'           => '',
					'sanitize_callback' => 'esc_url_raw',
				)
			);

			$wp_customize->add_control(
				new WP_Customize_Image_Control(
					$wp_customize,
					'neom_client_background',
					array(
						'label'           => __( 'Client Background Image', 'neom-blog' ),
						'section'         => 'neom_theme_client',
						'priority'        => 500,
						'settings'        => 'neom_client_background',
						'active_callback' => 'neom_client_background',
					)
				)
			);
		// Client bg Image End.

	/* FAQ Settings */
	$wp_customize->add_section(
		'neom_theme_faq',
		array(
			'title'    => __( 'FAQ Settings', 'neom-blog' ),
			'panel'    => 'neom_frontpage_settings',
			'priority' => 2100,
		)
	);

	if ( class_exists( 'neom_Repeater' ) ) {
		$wp_customize->add_setting(
			'neom_faq_content',
			array(
				'default' => NEOM_FAQ_DEFAULT_CONTENT,
			)
		);
		$wp_customize->add_control(
			new neom_Repeater(
				$wp_customize,
				'neom_faq_content',
				array(
					'label'                             => esc_html__( 'FAQ Items Content', 'neom-blog' ),
					'section'                           => 'neom_theme_faq',
					'add_field_label'                   => esc_html__( 'Add new FAQ', 'neom-blog' ),
					'item_name'                         => esc_html__( 'FAQ Item', 'neom-blog' ),
					'customizer_repeater_title_control' => true,
					'customizer_repeater_text_control'  => true,
					'customizer_repeater_icon_control'  => true,
					'active_callback'                   => 'neom_faq_content',
				)
			)
		);
	}

	// Faq Active Callback.
	include 'frontpage-callback/faq-callback.php';

	// Faq Image.
	$wp_customize->add_setting(
		'neom_faq_background',
		array(
			'default'           => awp_companion_plugin_url . '/inc/neom/img/white_dotted.png',
			'sanitize_callback' => 'esc_url_raw',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'neom_faq_background',
			array(
				'label'           => __( 'Faq Background Image', 'neom-blog' ),
				'section'         => 'neom_theme_faq',
				'priority'        => 1800,
				'settings'        => 'neom_faq_background',
				'active_callback' => 'neom_faq_background',
			)
		)
	);
	// Faq bg Image End.

	/* contact Settings */
	$wp_customize->add_section(
		'neom_theme_contact',
		array(
			'title'    => __( 'Contact Settings', 'neom-blog' ),
			'panel'    => 'neom_frontpage_settings',
			'priority' => 2200,
		)
	);

	// Tinymyce Contact Section.
	$wp_customize->add_setting(
		'neom_contact_shortcode',
		array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'neom_contact_shortcode',
		array(
			'label'           => __( 'Add Contact Form Plugin Shortcode' ),
			'type'            => 'text',
			'section'         => 'neom_theme_contact',
			'priority'        => 14,
			'active_callback' => 'neom_contact_shortcode',
		)
	);

	// contact Active Callback.
	include 'frontpage-callback/contact-callback.php';

	// contact Image.
	$wp_customize->add_setting(
		'neom_contact_background',
		array(
			'default'           => awp_companion_plugin_url . '/inc/neom/img/white_dotted.png',
			'sanitize_callback' => 'esc_url_raw',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'neom_contact_background',
			array(
				'label'           => __( 'contact Background Image', 'neom-blog' ),
				'section'         => 'neom_theme_contact',
				'priority'        => 1800,
				'settings'        => 'neom_contact_background',
				'active_callback' => 'neom_contact_background',
			)
		)
	);
	// Faq bg Image End.

	/*
	 Footer Info Settings  */
	// $wp_customize->add_section(
	// 'neom_theme_footer_info',
	// array(
	// 'title'    => __( 'Footer info Settings', 'neom-blog' ),
	// 'panel'    => 'neom_frontpage_settings',
	// 'priority' => 2500,
	// )
	// );

	// if ( class_exists( 'neom_Repeater' ) ) {
	// $wp_customize->add_setting(
	// 'neom_footer_info_content',
	// array(
	// 'default' => NEOM_FOOTER_INFO_DEFAULT_CONTENT,
	// )
	// );
	// $wp_customize->add_control(
	// new neom_Repeater(
	// $wp_customize,
	// 'neom_footer_info_content',
	// array(
	// 'label'                                => esc_html__( 'Info Items Content', 'neom-blog' ),
	// 'section'                              => 'neom_theme_footer_info',
	// 'priority'                             => 10,
	// 'add_field_label'                      => esc_html__( 'Add New Info', 'neom-blog' ),
	// 'item_name'                            => esc_html__( 'Info Item', 'neom-blog' ),
	// 'customizer_repeater_icon_control'     => true,
	// 'customizer_repeater_title_control'    => true,
	// 'customizer_repeater_text_control'     => true,
	// 'customizer_repeater_link_control'     => true,
	// 'customizer_repeater_checkbox_control' => true,
	// 'active_callback'                      => 'neom_footer_info_content',
	// )
	// )
	// );
	// }
	// // Footer Info Active Callback.
	// include 'frontpage-callback/footer-info-callback.php';

	if ( class_exists( 'WooCommerce' ) ) {
		/* Woocommerce Settings  */
		$wp_customize->add_section(
			'neom_theme_woocommerce',
			array(
				'title'    => __( 'Woocoomerce Settings', 'neom-blog' ),
				'panel'    => 'neom_frontpage_settings',
				'priority' => 2200,
			)
		);

		// woocommerce Active Callback.
		include 'frontpage-callback/woocommerce-callback.php';
	}
}
add_action( 'customize_register', 'neom_frontpage_sections_settings' );


function neom_Customizer_selective_refresh_settings( $wp_customize ) {

	$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';

	// Service Title.
	$wp_customize->add_setting(
		'neom_service_area_title',
		array(
			'default'           => __( 'Our Services', 'neom-blog' ),
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => $selective_refresh,
		)
	);
	$wp_customize->add_control(
		'neom_service_area_title',
		array(
			'label'           => esc_html__( 'Section Title', 'neom-blog' ),
			'section'         => 'neom_theme_service',
			'priority'        => 4,
			'type'            => 'text',
			'active_callback' => 'neom_service_area_title',
		)
	);
	// Service Desc.
	$wp_customize->add_setting(
		'neom_service_area_des',
		array(
			'default'           => __( 'We provide the worlds best consulting related services to growth your business.', 'neom-blog' ),
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => $selective_refresh,
		)
	);
	$wp_customize->add_control(
		'neom_service_area_des',
		array(
			'label'           => esc_html__( 'Section Description', 'neom-blog' ),
			'section'         => 'neom_theme_service',
			'priority'        => 5,
			'type'            => 'textarea',
			'active_callback' => 'neom_service_area_des',
		)
	);

	// features Title.
	$wp_customize->add_setting(
		'neom_features_area_title',
		array(
			'default'           => __( 'Other Sectors', 'neom-blog' ),
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => $selective_refresh,
		)
	);
	$wp_customize->add_control(
		'neom_features_area_title',
		array(
			'label'           => esc_html__( 'Section Title', 'neom-blog' ),
			'section'         => 'neom_theme_features',
			'priority'        => 4,
			'type'            => 'text',
			'active_callback' => 'neom_features_area_title',
		)
	);
	// features Desc.
	$wp_customize->add_setting(
		'neom_features_area_des',
		array(
			'default'           => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.	', 'neom-blog' ),
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => $selective_refresh,
		)
	);
	$wp_customize->add_control(
		'neom_features_area_des',
		array(
			'label'           => esc_html__( 'Section Description', 'neom-blog' ),
			'section'         => 'neom_theme_features',
			'priority'        => 5,
			'type'            => 'textarea',
			'active_callback' => 'neom_features_area_des',
		)
	);

	// About Title.
	$wp_customize->add_setting(
		'neom_about_area_title',
		array(
			'default'           => __( 'We Are Professional', 'neom-blog' ),
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => $selective_refresh,
		)
	);
	$wp_customize->add_control(
		'neom_about_area_title',
		array(
			'label'           => esc_html__( 'Section Title', 'neom-blog' ),
			'section'         => 'neom_theme_about',
			'priority'        => 4,
			'type'            => 'text',
			'active_callback' => 'neom_about_area_title',
		)
	);

	// About Desc.
	$wp_customize->add_setting(
		'neom_about_area_des',
		array(
			'default'           => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'neom-blog' ),
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => $selective_refresh,
		)
	);
	$wp_customize->add_control(
		'neom_about_area_des',
		array(
			'label'           => esc_html__( 'Section Description', 'neom-blog' ),
			'section'         => 'neom_theme_about',
			'priority'        => 5,
			'type'            => 'textarea',
			'active_callback' => 'neom_about_area_des',
		)
	);

	// Portflio Title.
	$wp_customize->add_setting(
		'neom_portfolio_area_title',
		array(
			'default'           => __( 'Our Portfolios', 'neom-blog' ),
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => $selective_refresh,
		)
	);
	$wp_customize->add_control(
		'neom_portfolio_area_title',
		array(
			'label'           => esc_html__( 'Section Title', 'neom-blog' ),
			'section'         => 'neom_theme_portfolio',
			'priority'        => 4,
			'type'            => 'text',
			'active_callback' => 'neom_portfolio_area_title',
		)
	);
	// Portflio Desc.
	$wp_customize->add_setting(
		'neom_portfolio_area_des',
		array(
			'default'           => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'neom-blog' ),
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => $selective_refresh,
		)
	);
	$wp_customize->add_control(
		'neom_portfolio_area_des',
		array(
			'label'           => esc_html__( 'Section Description', 'neom-blog' ),
			'section'         => 'neom_theme_portfolio',
			'priority'        => 5,
			'type'            => 'textarea',
			'active_callback' => 'neom_portfolio_area_des',
		)
	);

	// Funfact Title.
	$wp_customize->add_setting(
		'neom_funfact_area_title',
		array(
			'default'           => __( 'Why Choose Us?', 'neom-blog' ),
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => $selective_refresh,
		)
	);
	$wp_customize->add_control(
		'neom_funfact_area_title',
		array(
			'label'           => esc_html__( 'Section Title', 'neom-blog' ),
			'section'         => 'neom_theme_funfact',
			'priority'        => 4,
			'type'            => 'text',
			'active_callback' => 'neom_funfact_area_title',
		)
	);
	// Funfact Desc.
	$wp_customize->add_setting(
		'neom_funfact_area_des',
		array(
			'default'           => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'neom-blog' ),
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => $selective_refresh,
		)
	);
	$wp_customize->add_control(
		'neom_funfact_area_des',
		array(
			'label'           => esc_html__( 'Section Description', 'neom-blog' ),
			'section'         => 'neom_theme_funfact',
			'priority'        => 5,
			'type'            => 'textarea',
			'active_callback' => 'neom_funfact_area_des',
		)
	);

	// Testimonial Title.
	$wp_customize->add_setting(
		'neom_testimonial_area_title',
		array(
			'default'           => __( 'Happy Customers!', 'neom-blog' ),
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => $selective_refresh,
		)
	);
	$wp_customize->add_control(
		'neom_testimonial_area_title',
		array(
			'label'           => esc_html__( 'Section Title', 'neom-blog' ),
			'section'         => 'neom_theme_testimonial',
			'priority'        => 4,
			'type'            => 'text',
			'active_callback' => 'neom_testimonial_area_title',
		)
	);
	// Testimonial Desc.
	$wp_customize->add_setting(
		'neom_testimonial_area_des',
		array(
			'default'           => __( 'Customer Feedback About Our Works', 'neom-blog' ),
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => $selective_refresh,
		)
	);
	$wp_customize->add_control(
		'neom_testimonial_area_des',
		array(
			'label'           => esc_html__( 'Section Description', 'neom-blog' ),
			'section'         => 'neom_theme_testimonial',
			'priority'        => 5,
			'type'            => 'textarea',
			'active_callback' => 'neom_testimonial_area_des',
		)
	);

	// Blog Title.
	$wp_customize->add_setting(
		'neom_blog_area_title',
		array(
			'default'           => __( 'Latest News', 'neom-blog' ),
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => $selective_refresh,
		)
	);
	$wp_customize->add_control(
		'neom_blog_area_title',
		array(
			'label'           => esc_html__( 'Section Title', 'neom-blog' ),
			'section'         => 'neom_theme_blog',
			'priority'        => 4,
			'type'            => 'text',
			'active_callback' => 'neom_blog_area_title',
		)
	);
	// Blog Description.
	$wp_customize->add_setting(
		'neom_blog_area_des',
		array(
			'default'           => __( 'Stay updated with the latest news by reading our articles written by content writers in the industry.', 'neom-blog' ),
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => $selective_refresh,
		)
	);
	$wp_customize->add_control(
		'neom_blog_area_des',
		array(
			'label'           => esc_html__( 'Section Description', 'neom-blog' ),
			'section'         => 'neom_theme_blog',
			'priority'        => 5,
			'type'            => 'textarea',
			'active_callback' => 'neom_blog_area_des',
		)
	);

	// Team Title.
	$wp_customize->add_setting(
		'neom_team_area_title',
		array(
			'default'           => 'MEET THE TEAM',
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => $selective_refresh,
		)
	);
	$wp_customize->add_control(
		'neom_team_area_title',
		array(
			'label'           => esc_html__( 'Title', 'neom-blog' ),
			'section'         => 'neom_theme_team',
			'priority'        => 5,
			'type'            => 'text',
			'active_callback' => 'neom_team_area_title',
		)
	);
	// Team Description.
	$wp_customize->add_setting(
		'neom_team_area_des',
		array(
			'default'           => 'The Best Team Available',
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => $selective_refresh,
		)
	);
	$wp_customize->add_control(
		'neom_team_area_des',
		array(
			'label'           => esc_html__( 'Description', 'neom-blog' ),
			'section'         => 'neom_theme_team',
			'priority'        => 6,
			'type'            => 'textarea',
			'active_callback' => 'neom_team_area_des',
		)
	);

	// Client Title.
	$wp_customize->add_setting(
		'neom_client_area_title',
		array(
			'default'           => 'MEET THE PARTNERS',
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => $selective_refresh,
		)
	);
	$wp_customize->add_control(
		'neom_client_area_title',
		array(
			'label'           => esc_html__( 'Title', 'neom-blog' ),
			'section'         => 'neom_theme_client',
			'priority'        => 5,
			'type'            => 'text',
			'active_callback' => 'neom_client_area_title',
		)
	);
	// Client Description.
	$wp_customize->add_setting(
		'neom_client_area_des',
		array(
			'default'           => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => $selective_refresh,
		)
	);
	$wp_customize->add_control(
		'neom_client_area_des',
		array(
			'label'           => esc_html__( 'Description', 'neom-blog' ),
			'section'         => 'neom_theme_client',
			'priority'        => 6,
			'type'            => 'textarea',
			'active_callback' => 'neom_client_area_des',
		)
	);

	// callout title 1.
	$wp_customize->add_setting(
		'top_bottom_info_title_1',
		array(
			'default'   => __( 'Head Office', 'neom-blog' ),
			'transport' => $selective_refresh,
		)
	);
	$wp_customize->add_control(
		'top_bottom_info_title_1',
		array(
			'label'           => __( 'Title', 'neom-blog' ),
			'section'         => 'neom_theme_info',
			'type'            => 'text',
			'active_callback' => 'top_bottom_info_title_1',
		)
	);

	// callout Description 1.
	$wp_customize->add_setting(
		'top_bottom_info_desc_1',
		array(
			'default'   => __( '1026 Park Avenue, San Diago, US', 'neom-blog' ),
			'transport' => $selective_refresh,
		)
	);
	$wp_customize->add_control(
		'top_bottom_info_desc_1',
		array(
			'label'           => __( 'Description', 'neom-blog' ),
			'section'         => 'neom_theme_info',
			'type'            => 'textarea',
			'active_callback' => 'top_bottom_info_desc_1',
		)
	);

	/*
	  //callout Icon 1
	$wp_customize->add_setting('top_bottom_info_icon_1',array(
		'default'	=> __('fa-map-marker','neom-blog'),
		'transport'	=> $selective_refresh,
	));
	$wp_customize->add_control('top_bottom_info_icon_1',array(
		'label'		=> __('Title','neom-blog'),
		'section'	=> 'neom_theme_info',
		'type'		=> 'text',
	)); */

	// callout title 2.
	$wp_customize->add_setting(
		'top_bottom_info_title_2',
		array(
			'default'   => __( 'Call Us', 'neom-blog' ),
			'transport' => $selective_refresh,
		)
	);
	$wp_customize->add_control(
		'top_bottom_info_title_2',
		array(
			'label'           => __( 'Title', 'neom-blog' ),
			'section'         => 'neom_theme_info',
			'type'            => 'text',
			'active_callback' => 'top_bottom_info_title_2',
		)
	);

	// callout Description 2.
	$wp_customize->add_setting(
		'top_bottom_info_desc_2',
		array(
			'default'   => __( '(+97) 750-290-3353', 'neom-blog' ),
			'transport' => $selective_refresh,
		)
	);
	$wp_customize->add_control(
		'top_bottom_info_desc_2',
		array(
			'label'           => __( 'Description', 'neom-blog' ),
			'section'         => 'neom_theme_info',
			'type'            => 'textarea',
			'active_callback' => 'top_bottom_info_desc_2',
		)
	);

	// callout title 3.
	$wp_customize->add_setting(
		'top_bottom_info_title_3',
		array(
			'default'   => __( 'Email Us:', 'neom-blog' ),
			'transport' => $selective_refresh,
		)
	);
	$wp_customize->add_control(
		'top_bottom_info_title_3',
		array(
			'label'           => __( 'Title', 'neom-blog' ),
			'section'         => 'neom_theme_info',
			'type'            => 'text',
			'active_callback' => 'top_bottom_info_title_3',
		)
	);

	// callout Description 3.
	$wp_customize->add_setting(
		'top_bottom_info_desc_3',
		array(
			'default'   => __( 'info@awordpress.com', 'neom-blog' ),
			'transport' => $selective_refresh,
		)
	);
	$wp_customize->add_control(
		'top_bottom_info_desc_3',
		array(
			'label'           => __( 'Description', 'neom-blog' ),
			'section'         => 'neom_theme_info',
			'type'            => 'textarea',
			'active_callback' => 'top_bottom_info_desc_3',
		)
	);

	// step Title.
	$wp_customize->add_setting(
		'neom_step_area_title',
		array(
			'default'           => 'Our Simple Working Steps',
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => $selective_refresh,
		)
	);
	$wp_customize->add_control(
		'neom_step_area_title',
		array(
			'label'           => esc_html__( 'Title', 'neom-blog' ),
			'section'         => 'neom_theme_step',
			'priority'        => 5,
			'type'            => 'text',
			'active_callback' => 'neom_step_area_title',
		)
	);
	// step Description.
	$wp_customize->add_setting(
		'neom_step_area_des',
		array(
			'default'           => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => $selective_refresh,
		)
	);
	$wp_customize->add_control(
		'neom_step_area_des',
		array(
			'label'           => esc_html__( 'Description', 'neom-blog' ),
			'section'         => 'neom_theme_step',
			'priority'        => 6,
			'type'            => 'textarea',
			'active_callback' => 'neom_step_area_des',
		)
	);

	// timeline Title.
	$wp_customize->add_setting(
		'neom_timeline_area_title',
		array(
			'default'           => 'Story Of Journey',
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => $selective_refresh,
		)
	);
	$wp_customize->add_control(
		'neom_timeline_area_title',
		array(
			'label'           => esc_html__( 'Title', 'neom-blog' ),
			'section'         => 'neom_theme_timeline',
			'priority'        => 5,
			'type'            => 'text',
			'active_callback' => 'neom_timeline_area_title',
		)
	);
	// timeline Description.
	$wp_customize->add_setting(
		'neom_timeline_area_des',
		array(
			'default'           => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => $selective_refresh,
		)
	);
	$wp_customize->add_control(
		'neom_timeline_area_des',
		array(
			'label'           => esc_html__( 'Description', 'neom-blog' ),
			'section'         => 'neom_theme_timeline',
			'priority'        => 6,
			'type'            => 'textarea',
			'active_callback' => 'neom_timeline_area_des',
		)
	);

	// faq Title.
	$wp_customize->add_setting(
		'neom_faq_area_title',
		array(
			'default'           => 'Frequently Asked Question?',
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => $selective_refresh,
		)
	);
	$wp_customize->add_control(
		'neom_faq_area_title',
		array(
			'label'           => esc_html__( 'Title', 'neom-blog' ),
			'section'         => 'neom_theme_faq',
			'priority'        => 5,
			'type'            => 'text',
			'active_callback' => 'neom_faq_area_title',
		)
	);
	// faq Description.
	$wp_customize->add_setting(
		'neom_faq_area_des',
		array(
			'default'           => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => $selective_refresh,
		)
	);
	$wp_customize->add_control(
		'neom_faq_area_des',
		array(
			'label'           => esc_html__( 'Description', 'neom-blog' ),
			'section'         => 'neom_theme_faq',
			'priority'        => 6,
			'type'            => 'textarea',
			'active_callback' => 'neom_faq_area_des',
		)
	);

	// contact Title.
	$wp_customize->add_setting(
		'neom_contact_area_title',
		array(
			'default'           => 'Have A Question?',
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => $selective_refresh,
		)
	);
	$wp_customize->add_control(
		'neom_contact_area_title',
		array(
			'label'           => esc_html__( 'Title', 'neom-blog' ),
			'section'         => 'neom_theme_contact',
			'priority'        => 5,
			'type'            => 'text',
			'active_callback' => 'neom_contact_area_title',
		)
	);
	// contact Description.
	$wp_customize->add_setting(
		'neom_contact_area_des',
		array(
			'default'           => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => $selective_refresh,
		)
	);
	$wp_customize->add_control(
		'neom_contact_area_des',
		array(
			'label'           => esc_html__( 'Description', 'neom-blog' ),
			'section'         => 'neom_theme_contact',
			'priority'        => 6,
			'type'            => 'textarea',
			'active_callback' => 'neom_contact_area_des',
		)
	);

	// Woocommerce Title.
	$wp_customize->add_setting(
		'neom_woocommerce_area_title',
		array(
			'default'           => 'FEATURED PRODUCTS',
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => $selective_refresh,
		)
	);
	$wp_customize->add_control(
		'neom_woocommerce_area_title',
		array(
			'label'           => esc_html__( 'Title', 'neom-blog' ),
			'section'         => 'neom_theme_woocommerce',
			'priority'        => 6,
			'type'            => 'text',
			'active_callback' => 'neom_woocommerce_area_title',
		)
	);

	// Woocommerce Description.
	$wp_customize->add_setting(
		'neom_woocommerce_area_desc',
		array(
			'default'           => 'Showcase your products in this beautiful shop section',
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => $selective_refresh,
		)
	);
	$wp_customize->add_control(
		'neom_woocommerce_area_desc',
		array(
			'label'           => esc_html__( 'Description', 'neom-blog' ),
			'section'         => 'neom_theme_woocommerce',
			'priority'        => 6,
			'type'            => 'textarea',
			'active_callback' => 'neom_woocommerce_area_desc',
		)
	);
}
add_action( 'customize_register', 'neom_Customizer_selective_refresh_settings' );
