<?php
	// Service active callback.
function neom_service_content( $control ) {
	return true === ( $control->manager->get_setting( 'neom_service_area_disabled' )->value() == true );
}

function neom_service_area_title( $control ) {
	return true === ( $control->manager->get_setting( 'neom_service_area_disabled' )->value() == true );
}

function neom_service_area_des( $control ) {
	return true === ( $control->manager->get_setting( 'neom_service_area_disabled' )->value() == true );
}

function neom_service_background( $control ) {
	return true === ( $control->manager->get_setting( 'neom_service_area_disabled' )->value() == true );
}

	// Container.
function neom_service_container_size( $control ) {
	return true === ( $control->manager->get_setting( 'neom_service_area_disabled' )->value() == true );
}
	// Service Settings Heading.
function neom_service_settings_heading( $control ) {
	return true === ( $control->manager->get_setting( 'neom_service_area_disabled' )->value() == true );
}
	// Column.
function neom_service_column_layout( $control ) {
	return true === ( $control->manager->get_setting( 'neom_service_area_disabled' )->value() == true );
}
	// Service Count.
function neom_service_count( $control ) {
	return true === ( $control->manager->get_setting( 'neom_service_area_disabled' )->value() == true );
}


/* Section Color Setting */

function neom_service_section_color_heading( $control ) {
	return true === ( $control->manager->get_setting( 'neom_service_area_disabled' )->value() == true );
}
function neom_service_section_color_disable( $control ) {
	return true === ( $control->manager->get_setting( 'neom_service_area_disabled' )->value() == true );
}
function neom_service_section_title_color( $control ) {
	return true === (
		$control->manager->get_setting( 'neom_service_area_disabled' )->value() == true &&
		$control->manager->get_setting( 'neom_service_section_color_disable' )->value() == true
	);
}
function neom_service_section_description_color( $control ) {
	return true === (
		$control->manager->get_setting( 'neom_service_area_disabled' )->value() == true &&
		$control->manager->get_setting( 'neom_service_section_color_disable' )->value() == true
	);
}
