<?php
	// features active callback.
function neom_features_content( $control ) {
	return true === ( $control->manager->get_setting( 'neom_features_area_disabled' )->value() == true );
}

function neom_features_area_title( $control ) {
	return true === ( $control->manager->get_setting( 'neom_features_area_disabled' )->value() == true );
}

function neom_features_area_des( $control ) {
	return true === ( $control->manager->get_setting( 'neom_features_area_disabled' )->value() == true );
}

function neom_features_background( $control ) {
	return true === ( $control->manager->get_setting( 'neom_features_area_disabled' )->value() == true );
}

function neom_features_right_img( $control ) {
	return true === ( $control->manager->get_setting( 'neom_features_area_disabled' )->value() == true );
}

	// Container.
function neom_features_container_size( $control ) {
	return true === ( $control->manager->get_setting( 'neom_features_area_disabled' )->value() == true );
}
	// features Settings Heading.
function neom_features_settings_heading( $control ) {
	return true === ( $control->manager->get_setting( 'neom_features_area_disabled' )->value() == true );
}
	// Column.
function neom_features_column_layout( $control ) {
	return true === ( $control->manager->get_setting( 'neom_features_area_disabled' )->value() == true );
}
	// features Count.
function neom_features_count( $control ) {
	return true === ( $control->manager->get_setting( 'neom_features_area_disabled' )->value() == true );
}

/* Section Color Setting */

function neom_features_section_color_heading( $control ) {
	return true === ( $control->manager->get_setting( 'neom_features_area_disabled' )->value() == true );
}
function neom_features_section_color_disable( $control ) {
	return true === ( $control->manager->get_setting( 'neom_features_area_disabled' )->value() == true );
}
function neom_features_section_title_color( $control ) {
	return true === (
		$control->manager->get_setting( 'neom_features_area_disabled' )->value() == true &&
		$control->manager->get_setting( 'neom_features_section_color_disable' )->value() == true
	);
}
function neom_features_section_description_color( $control ) {
	return true === (
		$control->manager->get_setting( 'neom_features_area_disabled' )->value() == true &&
		$control->manager->get_setting( 'neom_features_section_color_disable' )->value() == true
	);
}

