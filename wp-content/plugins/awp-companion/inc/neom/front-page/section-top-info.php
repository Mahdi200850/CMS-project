<!-- Info Top -->
<?php
// top info.
	$neom_top_info_disabled = get_theme_mod( 'neom_top_info_disabled', true );
if ( $neom_top_info_disabled == true ) :
	$neom_top_info_container_size = get_theme_mod( 'neom_top_info_container_size', 'container-full' );
	$neom_top_info_column_layout  = get_theme_mod( 'neom_top_info_column_layout', 'theme-column-3' );
	$neom_top_info_content        = get_theme_mod( 'neom_top_info_content', NEOM_TOP_INFO_DEFAULT_CONTENT );
	?>
		<section id="info-section" class="top-contact-info">
			<div class="<?php echo esc_attr( $neom_top_info_container_size ); ?>">
				<div class="theme-columns-area info-section info-section-one wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
					<?php
					if ( ! empty( $neom_top_info_content ) ) {
						$allowed_html           = array(
							'br'     => array(),
							'em'     => array(),
							'strong' => array(),
							'b'      => array(),
							'i'      => array(),
						);
						$neom_top_info_content = json_decode( $neom_top_info_content );
						foreach ( $neom_top_info_content as $features_item ) {
							$icon  = ! empty( $features_item->icon_value ) ? apply_filters( 'neom_translate_single_string', $features_item->icon_value, 'Features section' ) : '';
							$title = ! empty( $features_item->title ) ? apply_filters( 'neom_translate_single_string', $features_item->title, 'Features section' ) : '';
							$text  = ! empty( $features_item->text ) ? apply_filters( 'neom_translate_single_string', $features_item->text, 'Features section' ) : '';
							$link  = ! empty( $features_item->link ) ? apply_filters( 'neom_translate_single_string', $features_item->link, 'Features section' ) : '';
							// $button_text = ! empty( $features_item->button_text ) ? apply_filters( 'neom_translate_single_string', $features_item->button_text, 'Features section' ) : '';
							$image        = ! empty( $features_item->image_url ) ? apply_filters( 'neom_translate_single_string', $features_item->image_url, 'Features section' ) : '';
							$open_new_tab = ! empty( $features_item->open_new_tab ) ? apply_filters( 'neom_translate_single_string', $features_item->open_new_tab, 'Features section' ) : '';
							?>
							<div class="<?php echo esc_attr( $neom_top_info_column_layout ); ?> info-wrapper">
								<aside class="widget widget-contact">
									<div class="contact-area">
										<?php if ( ! empty( $icon ) ) : ?>
											<?php
											// If Icon Link Is NOT Empty.
											if ( ! empty( $link ) ) :
												?>
												<a class="contact-icon" href="<?php echo esc_url( $link ); ?>" 
													<?php
													if ( $open_new_tab == 'yes' || $open_new_tab == 'on' ) {
														echo "target='_blank'"; }
													?>
													>
													<i class="fa <?php echo esc_html( $icon ); ?>" aria-hidden="true"></i>
												</a>
											<?php endif; ?>
											<?php
											// If Icon Link Is Empty.
											if ( empty( $link ) ) :
												?>
											<div class="contact-icon">
												<i class="fa <?php echo esc_html( $icon ); ?> " aria-hidden="true"></i>
											</div>
											<?php endif; ?>
										<?php endif; ?>

										<?php if ( ! empty( $title ) ) : // title. ?>
											<span class="title"><?php echo wp_kses( html_entity_decode( $title ), $allowed_html ); ?></span>
										<?php endif; ?>

										<?php if ( ! empty( $text ) ) : // text. ?>
											<span class="description text"><?php echo wp_kses( html_entity_decode( $text ), $allowed_html ); ?></span>
										<?php endif; ?>

									</div>
								</aside>
							</div>
							<?php
						}
					}
					?>
				</div>
			</div>
		</section>			
<?php endif; ?>		
<!-- End of Top Contact Info Callout -->

<div class="clearfix"></div>
