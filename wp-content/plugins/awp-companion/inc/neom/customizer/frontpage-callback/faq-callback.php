<?php
	// faq active callback.
function neom_faq_content( $control ) {
	return true === ( $control->manager->get_setting( 'neom_faq_disabled' )->value() == true );
}
	// faq left image.
function neom_faq_left_img( $control ) {
	return true === ( $control->manager->get_setting( 'neom_faq_disabled' )->value() == true );
}

// faq bg image.
function neom_faq_background( $control ) {
	return true === ( $control->manager->get_setting( 'neom_faq_disabled' )->value() == true );
}

	// faq title.
function neom_faq_area_title( $control ) {
	return true === ( $control->manager->get_setting( 'neom_faq_disabled' )->value() == true );
}
	// faq des.
function neom_faq_area_des( $control ) {
	return true === ( $control->manager->get_setting( 'neom_faq_disabled' )->value() == true );
}

	// settings heading.
function neom_faq_settings_heading( $control ) {
	return true === ( $control->manager->get_setting( 'neom_faq_disabled' )->value() == true );
}
	// container.
function neom_faq_container_size( $control ) {
	return true === ( $control->manager->get_setting( 'neom_faq_disabled' )->value() == true );
}
	// Column.
function neom_faq_column_layout( $control ) {
	return true === ( $control->manager->get_setting( 'neom_faq_disabled' )->value() == true );
}

	// Column.
function neom_faq_count( $control ) {
	return true === ( $control->manager->get_setting( 'neom_faq_disabled' )->value() == true );
}

/* Section Color Setting */

function neom_faq_section_color_heading( $control ) {
	return true === ( $control->manager->get_setting( 'neom_faq_disabled' )->value() == true );
}
function neom_faq_section_color_disable( $control ) {
	return true === ( $control->manager->get_setting( 'neom_faq_disabled' )->value() == true );
}
function neom_faq_section_title_color( $control ) {
	return true === (
		$control->manager->get_setting( 'neom_faq_disabled' )->value() == true &&
		$control->manager->get_setting( 'neom_faq_section_color_disable' )->value() == true
	);
}
function neom_faq_section_description_color( $control ) {
	return true === (
		$control->manager->get_setting( 'neom_faq_disabled' )->value() == true &&
		$control->manager->get_setting( 'neom_faq_section_color_disable' )->value() == true
	);
}
