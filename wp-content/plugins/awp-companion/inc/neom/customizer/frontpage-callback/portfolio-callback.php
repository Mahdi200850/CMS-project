<?php
	// Portfolio active callback.
	// Title.
function neom_portfolio_area_title( $control ) {
	return true === ( $control->manager->get_setting( 'neom_portfolio_disabled' )->value() == true );
}

	// Description.
function neom_portfolio_area_des( $control ) {
	return true === ( $control->manager->get_setting( 'neom_portfolio_disabled' )->value() == true );
}

	// Portfolio content.
function neom_portfolio_content( $control ) {
	return true === ( $control->manager->get_setting( 'neom_portfolio_disabled' )->value() == true );
}

	// Portfolio bg image.
function neom_portfolio_background( $control ) {
	return true === ( $control->manager->get_setting( 'neom_portfolio_disabled' )->value() == true );
}
	// Portfolio Settings Heading.
function neom_portfolio_settings_heading( $control ) {
	return true === ( $control->manager->get_setting( 'neom_portfolio_disabled' )->value() == true );
}

	// Container.
function neom_portfolio_container_size( $control ) {
	return true === ( $control->manager->get_setting( 'neom_portfolio_disabled' )->value() == true );
}

	// Portfolio Column Layout.
function neom_portfolio_column_layout( $control ) {
	return true === ( $control->manager->get_setting( 'neom_portfolio_disabled' )->value() == true );
}
	// Homepage Count.
function neom_portfolio_count( $control ) {
	return true === ( $control->manager->get_setting( 'neom_portfolio_disabled' )->value() == true );
}
	// Button Text.
function neom_portfolio_button_text( $control ) {
	return true === ( $control->manager->get_setting( 'neom_portfolio_disabled' )->value() == true );
}
	// Button Link.
function neom_portfolio_button_link( $control ) {
	return true === ( $control->manager->get_setting( 'neom_portfolio_disabled' )->value() == true );
}

/* Section Color Setting */

function neom_portfolio_section_color_heading( $control ) {
	return true === ( $control->manager->get_setting( 'neom_portfolio_disabled' )->value() == true );
}
function neom_portfolio_section_color_disable( $control ) {
	return true === ( $control->manager->get_setting( 'neom_portfolio_disabled' )->value() == true );
}
function neom_portfolio_section_title_color( $control ) {
	return true === (
		$control->manager->get_setting( 'neom_portfolio_disabled' )->value() == true &&
		$control->manager->get_setting( 'neom_portfolio_section_color_disable' )->value() == true
	);
}
function neom_portfolio_section_description_color( $control ) {
	return true === (
		$control->manager->get_setting( 'neom_portfolio_disabled' )->value() == true &&
		$control->manager->get_setting( 'neom_portfolio_section_color_disable' )->value() == true
	);
}
