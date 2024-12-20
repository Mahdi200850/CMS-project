<?php
	// Funfact active callback.
function neom_funfact_content( $control ) {
	return true === ( $control->manager->get_setting( 'neom_funfact_disabled' )->value() == true );
}
	// Funfact left image.
function neom_funfact_left_img( $control ) {
	return true === ( $control->manager->get_setting( 'neom_funfact_disabled' )->value() == true );
}

// Funfact bg image.
function neom_funfact_background( $control ) {
	return true === ( $control->manager->get_setting( 'neom_funfact_disabled' )->value() == true );
}

	// Funfact title.
function neom_funfact_area_title( $control ) {
	return true === ( $control->manager->get_setting( 'neom_funfact_disabled' )->value() == true );
}
	// Funfact des.
function neom_funfact_area_des( $control ) {
	return true === ( $control->manager->get_setting( 'neom_funfact_disabled' )->value() == true );
}

	// settings heading.
function neom_funfact_settings_heading( $control ) {
	return true === ( $control->manager->get_setting( 'neom_funfact_disabled' )->value() == true );
}
	// container.
function neom_funfact_container_size( $control ) {
	return true === ( $control->manager->get_setting( 'neom_funfact_disabled' )->value() == true );
}
	// Column.
function neom_funfact_column_layout( $control ) {
	return true === ( $control->manager->get_setting( 'neom_funfact_disabled' )->value() == true );
}

	// Column.
function neom_funfact_count( $control ) {
	return true === ( $control->manager->get_setting( 'neom_funfact_disabled' )->value() == true );
}

/* Section Color Setting */

function neom_funfact_section_color_heading( $control ) {
	return true === ( $control->manager->get_setting( 'neom_funfact_disabled' )->value() == true );
}
function neom_funfact_section_color_disable( $control ) {
	return true === ( $control->manager->get_setting( 'neom_funfact_disabled' )->value() == true );
}
function neom_funfact_section_title_color( $control ) {
	return true === (
		$control->manager->get_setting( 'neom_funfact_disabled' )->value() == true &&
		$control->manager->get_setting( 'neom_funfact_section_color_disable' )->value() == true
	);
}
function neom_funfact_section_description_color( $control ) {
	return true === (
		$control->manager->get_setting( 'neom_funfact_disabled' )->value() == true &&
		$control->manager->get_setting( 'neom_funfact_section_color_disable' )->value() == true
	);
}
