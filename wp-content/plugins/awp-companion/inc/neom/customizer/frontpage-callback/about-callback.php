<?php
	// about active callback.
function neom_about_content( $control ) {
	return true === ( $control->manager->get_setting( 'neom_about_area_disabled' )->value() == true );
}

function neom_about_area_title( $control ) {
	return true === ( $control->manager->get_setting( 'neom_about_area_disabled' )->value() == true );
}

function neom_about_area_des( $control ) {
	return true === ( $control->manager->get_setting( 'neom_about_area_disabled' )->value() == true );
}

function neom_about_editor_content( $control ) {
	return true === ( $control->manager->get_setting( 'neom_about_area_disabled' )->value() == true );
}

function neom_about_background( $control ) {
	return true === ( $control->manager->get_setting( 'neom_about_area_disabled' )->value() == true );
}

function neom_about_img( $control ) {
	return true === ( $control->manager->get_setting( 'neom_about_area_disabled' )->value() == true );
}

// About Image Text.
function neom_about_img_text( $control ) {
	return true === (
		$control->manager->get_setting( 'neom_about_area_disabled' )->value() == true &&
		$control->manager->get_setting( 'neom_about_img' )->value() == true
	);
}

	// Container.
function neom_about_container_size( $control ) {
	return true === ( $control->manager->get_setting( 'neom_about_area_disabled' )->value() == true );
}
	// about Meta Heading.
function neom_about_meta_heading( $control ) {
	return true === ( $control->manager->get_setting( 'neom_about_area_disabled' )->value() == true );
}
	// about Settings Heading.
function neom_about_settings_heading( $control ) {
	return true === ( $control->manager->get_setting( 'neom_about_area_disabled' )->value() == true );
}
	// Column.
function neom_about_column_layout( $control ) {
	return true === ( $control->manager->get_setting( 'neom_about_area_disabled' )->value() == true );
}
	// about Count.
function neom_about_count( $control ) {
	return true === ( $control->manager->get_setting( 'neom_about_area_disabled' )->value() == true );
}

/* Section Color Setting */

function neom_about_section_color_heading( $control ) {
	return true === ( $control->manager->get_setting( 'neom_about_area_disabled' )->value() == true );
}
function neom_about_section_color_disable( $control ) {
	return true === ( $control->manager->get_setting( 'neom_about_area_disabled' )->value() == true );
}
function neom_about_section_title_color( $control ) {
	return true === (
		$control->manager->get_setting( 'neom_about_area_disabled' )->value() == true &&
		$control->manager->get_setting( 'neom_about_section_color_disable' )->value() == true
	);
}
function neom_about_section_description_color( $control ) {
	return true === (
		$control->manager->get_setting( 'neom_about_area_disabled' )->value() == true &&
		$control->manager->get_setting( 'neom_about_section_color_disable' )->value() == true
	);
}

