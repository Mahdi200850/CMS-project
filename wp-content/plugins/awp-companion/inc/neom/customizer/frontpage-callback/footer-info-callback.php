<?php

function neom_footer_info_content( $control ) {
	return true === ( $control->manager->get_setting( 'neom_footer_info_disabled' )->value() == true );
}
	// Container.
function neom_footer_info_container_size( $control ) {
	return true === ( $control->manager->get_setting( 'neom_footer_info_disabled' )->value() == true );
}

	// Column.
function neom_footer_info_column_layout( $control ) {
	return true === ( $control->manager->get_setting( 'neom_footer_info_disabled' )->value() == true );
}
