<?php
	// Client active callback.
function neom_client_content( $control ) {
	return true === ( $control->manager->get_setting( 'neom_client_disabled' )->value() == true );
}

	// Client BG Image.
function neom_client_background( $control ) {
	return true === ( $control->manager->get_setting( 'neom_client_disabled' )->value() == true );
}

	// Client Title.
function neom_client_area_title( $control ) {
	return true === ( $control->manager->get_setting( 'neom_client_disabled' )->value() == true );
}

	// Client Description.
function neom_client_area_des( $control ) {
	return true === ( $control->manager->get_setting( 'neom_client_disabled' )->value() == true );
}

function neom_client_details_heading( $control ) {
	return true === ( $control->manager->get_setting( 'neom_client_disabled' )->value() == true );
}

function neom_client_autoplay_disable( $control ) {
	return true === ( $control->manager->get_setting( 'neom_client_disabled' )->value() == true );
}

	// Client Disable + Autoplay Disable.
function neom_client_animation_speed( $control ) {
	return true === (
		$control->manager->get_setting( 'neom_client_disabled' )->value() == true &&
		$control->manager->get_setting( 'neom_client_autoplay_disable' )->value() == true
	);
}


function neom_client_loop( $control ) {
	return true === ( $control->manager->get_setting( 'neom_client_disabled' )->value() == true );
}

function neom_client_dots( $control ) {
	return true === ( $control->manager->get_setting( 'neom_client_disabled' )->value() == true );
}
function neom_client_nav( $control ) {
	return true === ( $control->manager->get_setting( 'neom_client_disabled' )->value() == true );
}

// Extra Settings.
function neom_client_extra_heading( $control ) {
	return true === ( $control->manager->get_setting( 'neom_client_disabled' )->value() == true );
}

	// Container.
function neom_client_container_size( $control ) {
	return true === ( $control->manager->get_setting( 'neom_client_disabled' )->value() == true );
}

	// Column.
function neom_client_column_layout( $control ) {
	return true === ( $control->manager->get_setting( 'neom_client_disabled' )->value() == true );
}

/* Section Color Setting */

function neom_client_section_color_heading( $control ) {
	return true === ( $control->manager->get_setting( 'neom_client_disabled' )->value() == true );
}
function neom_client_section_color_disable( $control ) {
	return true === ( $control->manager->get_setting( 'neom_client_disabled' )->value() == true );
}
function neom_client_section_title_color( $control ) {
	return true === (
		$control->manager->get_setting( 'neom_client_disabled' )->value() == true &&
		$control->manager->get_setting( 'neom_client_section_color_disable' )->value() == true
	);
}
function neom_client_section_description_color( $control ) {
	return true === (
		$control->manager->get_setting( 'neom_client_disabled' )->value() == true &&
		$control->manager->get_setting( 'neom_client_section_color_disable' )->value() == true
	);
}
