<?php
	$neom_faq_disabled = get_theme_mod( 'neom_faq_disabled', true );
if ( true === $neom_faq_disabled ) {
	$neom_faq_area_title     = get_theme_mod( 'neom_faq_area_title', 'Frequently Asked Question?' );
	$neom_faq_area_des       = get_theme_mod( 'neom_faq_area_des', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.' );
	$neom_faq_content        = get_theme_mod( 'neom_faq_content', NEOM_FAQ_DEFAULT_CONTENT );
	$neom_faq_container_size = get_theme_mod( 'neom_faq_container_size', 'container-full' );
	$neom_faq_column_layout  = get_theme_mod( 'neom_faq_column_layout', 'theme-column-3' );
	?>	
	<section id="faq-section" class="faq-section theme-default shapes-section roller rollerstart" data-roller="start:0.5">
		<div class="container-full">
			<div class="theme-columns-area wow fadeInUp">
				<div class="theme-column-12">
					<?php if ( ! empty( $neom_faq_area_title ) || ! empty( $neom_faq_area_des ) ) : ?>
						<div class="theme-columns-area">
							<div class="theme-column-12">
								<div class="heading-default text-center wow fadeInUp">
									<?php if ( ! empty( $neom_faq_area_title ) ) : ?>
										<h3><?php echo wp_kses_post( $neom_faq_area_title ); ?></h3>
										<span class="separator"><span><span></span></span></span>
									<?php endif; ?>
									<?php if ( ! empty( $neom_faq_area_des ) ) : ?>
										<p><?php echo wp_kses_post( $neom_faq_area_des ); ?></p>
									<?php endif; ?>	
								</div>
							</div>
						</div>
					<?php endif; ?>
					<div class="theme-columns-area contactinfo-row">
						<?php
						if ( ! empty( $neom_faq_content ) ) {
							$neom_faq_content = json_decode( $neom_faq_content );
							foreach ( $neom_faq_content as $faq_item ) {
								$title = ! empty( $faq_item->title ) ? apply_filters( 'neom_translate_single_string', $faq_item->title, 'faq section' ) : '';
								$text  = ! empty( $faq_item->text ) ? apply_filters( 'neom_translate_single_string', $faq_item->text, 'faq section' ) : '';
								$link  = ! empty( $faq_item->link ) ? apply_filters( 'neom_translate_single_string', $faq_item->link, 'faq section' ) : '';
								// $image  = ! empty( $faq_item->image_url ) ? apply_filters( 'neom_translate_single_string', $faq_item->image_url, 'faq section' ) : '';
								$icon = ! empty( $faq_item->icon_value ) ? apply_filters( 'neom_translate_single_string', $faq_item->icon_value, 'faq section' ) : '';
								// $choice = ! empty( $faq_item->choice ) ? apply_filters( 'neom_translate_single_string', $faq_item->choice, 'faq section' ) : '';
								?>
								<div class="theme-column-3 container-full px-2">
									<div class="contactinfo-item">
										<?php if ( ! empty( $icon ) ) : ?>
											<i class="fa <?php echo esc_attr( $icon ); ?>" aria-hidden="true"></i>
										<?php endif; ?>

										<?php if ( ! empty( $title ) || ! empty( $text ) ) : ?>
											<h5 class=""><a href="<?php echo esc_url( $link ); ?>"><?php echo esc_html( $title ); ?></a></h5>
											<p><?php echo esc_html( $text ); ?></p>
										<?php endif; ?>
									</div>
								</div>
								<?php
							}
						}
						?>
					</div>
				</div>

			</div>
		</div>
	</section>
<?php } ?>
