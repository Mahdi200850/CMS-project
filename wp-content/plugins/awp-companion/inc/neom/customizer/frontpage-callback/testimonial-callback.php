<?php
	// testimonial active callback.
function neom_testimonial_content( $control ) {
	return true === ( $control->manager->get_setting( 'neom_testimonial_disabled' )->value() == true );
}

	// testimonial BG Image.
function neom_testimonial_background( $control ) {
	return true === ( $control->manager->get_setting( 'neom_testimonial_disabled' )->value() == true );
}

	// testimonial Title.
function neom_testimonial_area_title( $control ) {
	return true === ( $control->manager->get_setting( 'neom_testimonial_disabled' )->value() == true );
}

	// testimonial Description.
function neom_testimonial_area_des( $control ) {
	return true === ( $control->manager->get_setting( 'neom_testimonial_disabled' )->value() == true );
}

function neom_testimonial_details_heading( $control ) {
	return true === ( $control->manager->get_setting( 'neom_testimonial_disabled' )->value() == true );
}

function neom_testimonial_autoplay_disable( $control ) {
	return true === ( $control->manager->get_setting( 'neom_testimonial_disabled' )->value() == true );
}

	// testimonial Disable + Autoplay Disable.
function neom_testimonial_animation_speed( $control ) {
	return true === (
		$control->manager->get_setting( 'neom_testimonial_disabled' )->value() == true &&
		$control->manager->get_setting( 'neom_testimonial_autoplay_disable' )->value() == true
	);
}


function neom_testimonial_loop( $control ) {
	return true === ( $control->manager->get_setting( 'neom_testimonial_disabled' )->value() == true );
}

function neom_testimonial_dots( $control ) {
	return true === ( $control->manager->get_setting( 'neom_testimonial_disabled' )->value() == true );
}
function neom_testimonial_nav( $control ) {
	return true === ( $control->manager->get_setting( 'neom_testimonial_disabled' )->value() == true );
}

// Extra Settings.
function neom_testimonial_extra_heading( $control ) {
	return true === ( $control->manager->get_setting( 'neom_testimonial_disabled' )->value() == true );
}

	// Container.
function neom_testimonial_container_size( $control ) {
	return true === ( $control->manager->get_setting( 'neom_testimonial_disabled' )->value() == true );
}

	// Column.
function neom_testimonial_column_layout( $control ) {
	return true === ( $control->manager->get_setting( 'neom_testimonial_disabled' )->value() == true );
}

/* Section Color Setting */

function neom_testimonial_section_color_heading( $control ) {
	return true === ( $control->manager->get_setting( 'neom_testimonial_disabled' )->value() == true );
}
function neom_testimonial_section_color_disable( $control ) {
	return true === ( $control->manager->get_setting( 'neom_testimonial_disabled' )->value() == true );
}
function neom_testimonial_section_title_color( $control ) {
	return true === (
		$control->manager->get_setting( 'neom_testimonial_disabled' )->value() == true &&
		$control->manager->get_setting( 'neom_testimonial_section_color_disable' )->value() == true
	);
}
function neom_testimonial_section_description_color( $control ) {
	return true === (
		$control->manager->get_setting( 'neom_testimonial_disabled' )->value() == true &&
		$control->manager->get_setting( 'neom_testimonial_section_color_disable' )->value() == true
	);
}
