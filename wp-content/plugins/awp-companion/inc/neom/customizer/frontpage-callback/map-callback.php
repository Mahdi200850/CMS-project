<?php
	// map editor content.
function neom_map_editor_content( $control ) {
	return true === ( $control->manager->get_setting( 'neom_map_disabled' )->value() == true );
}

	// map left image.
function neom_map_img( $control ) {
	return true === ( $control->manager->get_setting( 'neom_map_disabled' )->value() == true );
}

// map bg image.
function neom_map_background( $control ) {
	return true === ( $control->manager->get_setting( 'neom_map_disabled' )->value() == true );
}

	// map title.
function neom_map_area_title( $control ) {
	return true === ( $control->manager->get_setting( 'neom_map_disabled' )->value() == true );
}
	// map des.
function neom_map_area_des( $control ) {
	return true === ( $control->manager->get_setting( 'neom_map_disabled' )->value() == true );
}

	// meta heading.
function neom_map_meta_heading( $control ) {
	return true === ( $control->manager->get_setting( 'neom_map_disabled' )->value() == true );
}

	// meta settings.
function neom_map_meta_disabled( $control ) {
	return true === ( $control->manager->get_setting( 'neom_map_disabled' )->value() == true );
}
function neom_map_content( $control ) {
	return true === (
		$control->manager->get_setting( 'neom_map_disabled' )->value() == true &&
		$control->manager->get_setting( 'neom_map_meta_disabled' )->value() == true
	);
}

	// settings heading.
function neom_map_settings_heading( $control ) {
	return true === ( $control->manager->get_setting( 'neom_map_disabled' )->value() == true );
}
	// container.
function neom_map_container_size( $control ) {
	return true === ( $control->manager->get_setting( 'neom_map_disabled' )->value() == true );
}
	// Column.
function neom_map_column_layout( $control ) {
	return true === ( $control->manager->get_setting( 'neom_map_disabled' )->value() == true );
}

	// Column.
function neom_map_count( $control ) {
	return true === ( $control->manager->get_setting( 'neom_map_disabled' )->value() == true );
}

/* Section Color Setting */

function neom_map_section_color_heading( $control ) {
	return true === ( $control->manager->get_setting( 'neom_map_area_disabled' )->value() == true );
}
function neom_map_section_color_disable( $control ) {
	return true === ( $control->manager->get_setting( 'neom_map_area_disabled' )->value() == true );
}
function neom_map_section_title_color( $control ) {
	return true === (
		$control->manager->get_setting( 'neom_map_area_disabled' )->value() == true &&
		$control->manager->get_setting( 'neom_map_section_color_disable' )->value() == true
	);
}
function neom_map_section_description_color( $control ) {
	return true === (
		$control->manager->get_setting( 'neom_map_area_disabled' )->value() == true &&
		$control->manager->get_setting( 'neom_map_section_color_disable' )->value() == true
	);
}
