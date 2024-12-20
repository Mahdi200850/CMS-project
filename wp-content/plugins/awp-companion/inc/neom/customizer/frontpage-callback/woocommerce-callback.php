<?php
	// woocommerce active callback.
function neom_woocommerce_content( $control ) {
	return true === ( $control->manager->get_setting( 'neom_woocommerce_disabled' )->value() == true );
}

function neom_woocommerce_background( $control ) {
	return true === ( $control->manager->get_setting( 'neom_woocommerce_disabled' )->value() == true );
}

// woocommerce Title.
function neom_woocommerce_area_title( $control ) {
	return true === ( $control->manager->get_setting( 'neom_woocommerce_disabled' )->value() == true );
}

	// woocommerce Description.
function neom_woocommerce_area_desc( $control ) {
	return true === ( $control->manager->get_setting( 'neom_woocommerce_disabled' )->value() == true );
}

function neom_woocommerce_details_heading( $control ) {
	return true === ( $control->manager->get_setting( 'neom_woocommerce_disabled' )->value() == true );
}

function neom_woocommerce_autoplay_disable( $control ) {
	return true === ( $control->manager->get_setting( 'neom_woocommerce_disabled' )->value() == true );
}

	// woocommerce Disable + Autoplay Disable.
function neom_woocommerce_animation_speed( $control ) {
	return true === (
		$control->manager->get_setting( 'neom_woocommerce_disabled' )->value() == true &&
		$control->manager->get_setting( 'neom_woocommerce_autoplay_disable' )->value() == true
	);
}

function neom_woocommerce_loop( $control ) {
	return true === ( $control->manager->get_setting( 'neom_woocommerce_disabled' )->value() == true );
}

function neom_woocommerce_dots( $control ) {
	return true === ( $control->manager->get_setting( 'neom_woocommerce_disabled' )->value() == true );
}
function neom_woocommerce_nav( $control ) {
	return true === ( $control->manager->get_setting( 'neom_woocommerce_disabled' )->value() == true );
}

// Extra Settings.
function neom_woocommerce_extra_heading( $control ) {
	return true === ( $control->manager->get_setting( 'neom_woocommerce_disabled' )->value() == true );
}

	// Container.
function neom_woocommerce_container_size( $control ) {
	return true === ( $control->manager->get_setting( 'neom_woocommerce_disabled' )->value() == true );
}

	// Column.
function neom_woocommerce_column_layout( $control ) {
	return true === ( $control->manager->get_setting( 'neom_woocommerce_disabled' )->value() == true );
}

/* Section Color Setting */

function neom_woocommerce_section_color_heading( $control ) {
	return true === ( $control->manager->get_setting( 'neom_woocommerce_area_disabled' )->value() == true );
}
function neom_woocommerce_section_color_disable( $control ) {
	return true === ( $control->manager->get_setting( 'neom_woocommerce_area_disabled' )->value() == true );
}
function neom_woocommerce_section_title_color( $control ) {
	return true === (
		$control->manager->get_setting( 'neom_woocommerce_area_disabled' )->value() == true &&
		$control->manager->get_setting( 'neom_woocommerce_section_color_disable' )->value() == true
	);
}
function neom_woocommerce_section_description_color( $control ) {
	return true === (
		$control->manager->get_setting( 'neom_woocommerce_area_disabled' )->value() == true &&
		$control->manager->get_setting( 'neom_woocommerce_section_color_disable' )->value() == true
	);
}
