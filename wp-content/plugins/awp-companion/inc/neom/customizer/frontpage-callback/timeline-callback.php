<?php
	// timeline active callback.
function neom_timeline_content( $control ) {
	return true === ( $control->manager->get_setting( 'neom_timeline_disabled' )->value() == true );
}

// timeline bg image.
function neom_timeline_background( $control ) {
	return true === ( $control->manager->get_setting( 'neom_timeline_disabled' )->value() == true );
}

	// timeline title.
function neom_timeline_area_title( $control ) {
	return true === ( $control->manager->get_setting( 'neom_timeline_disabled' )->value() == true );
}
	// timeline des.
function neom_timeline_area_des( $control ) {
	return true === ( $control->manager->get_setting( 'neom_timeline_disabled' )->value() == true );
}

	// settings heading.
function neom_timeline_settings_heading( $control ) {
	return true === ( $control->manager->get_setting( 'neom_timeline_disabled' )->value() == true );
}
	// container.
function neom_timeline_container_size( $control ) {
	return true === ( $control->manager->get_setting( 'neom_timeline_disabled' )->value() == true );
}
	// Column.
function neom_timeline_column_layout( $control ) {
	return true === ( $control->manager->get_setting( 'neom_timeline_disabled' )->value() == true );
}

	// Column.
function neom_timeline_count( $control ) {
	return true === ( $control->manager->get_setting( 'neom_timeline_disabled' )->value() == true );
}

/* Section Color Setting */

function neom_timeline_section_color_heading( $control ) {
	return true === ( $control->manager->get_setting( 'neom_timeline_disabled' )->value() == true );
}
function neom_timeline_section_color_disable( $control ) {
	return true === ( $control->manager->get_setting( 'neom_timeline_disabled' )->value() == true );
}
function neom_timeline_section_title_color( $control ) {
	return true === (
		$control->manager->get_setting( 'neom_timeline_disabled' )->value() == true &&
		$control->manager->get_setting( 'neom_timeline_section_color_disable' )->value() == true
	);
}
function neom_timeline_section_description_color( $control ) {
	return true === (
		$control->manager->get_setting( 'neom_timeline_disabled' )->value() == true &&
		$control->manager->get_setting( 'neom_timeline_section_color_disable' )->value() == true
	);
}
