<?php
	// Top Info.
function neom_top_info_content( $control ) {
	return true === ( $control->manager->get_setting( 'neom_top_info_disabled' )->value() == true );
}
	// Container.
function neom_top_info_container_size( $control ) {
	return true === ( $control->manager->get_setting( 'neom_top_info_disabled' )->value() == true );
}

	// Details heading.
function neom_top_info_settings_heading( $control ) {
	return true === ( $control->manager->get_setting( 'neom_top_info_disabled' )->value() == true );
}
	// Column.
function neom_top_info_column_layout( $control ) {
	return true === ( $control->manager->get_setting( 'neom_top_info_disabled' )->value() == true );
}
