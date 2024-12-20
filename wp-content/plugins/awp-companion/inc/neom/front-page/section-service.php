<?php
	$neom_service_area_disabled = get_theme_mod( 'neom_service_area_disabled', true );

if ( $neom_service_area_disabled == true ) {
	$neom_service_container_size = get_theme_mod( 'neom_service_container_size', 'container-full' );
	$neom_service_column_layout  = get_theme_mod( 'neom_service_column_layout', 'theme-column-4' );
	$neom_service_area_title     = get_theme_mod( 'neom_service_area_title', 'Our <span class="primary-color">Expertise</span>' );
	$neom_service_area_des       = get_theme_mod( 'neom_service_area_des', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.' );
	$neom_service_content        = get_theme_mod( 'neom_service_content', NEOM_SERVICE_DEFAULT_CONTENT );
	?>
	<section id="service-section" class="service-section theme-default service-home shapes-section">
		<div class="<?php echo esc_attr( $neom_service_container_size ); ?>">
			<?php if ( ! empty( $neom_service_area_title ) || ! empty( $neom_service_area_des ) ) : ?>
			<div class="theme-columns-area">
				<div class="theme-column-12">
					<div class="heading-default text-center wow fadeInUp">
						<?php if ( ! empty( $neom_service_area_title ) ) : ?>
							<h3><?php echo wp_kses_post( $neom_service_area_title ); ?></h3>
							<span class="separator"><span><span></span></span></span>
						<?php endif; ?>
						<?php if ( ! empty( $neom_service_area_des ) ) : ?>
							<p><?php echo wp_kses_post( $neom_service_area_des ); ?></p>
						<?php endif; ?>
					</div>
				</div>
			</div>
			<?php endif; ?>
			<div class="theme-columns-area wow fadeInUp service-contents">
				<?php
				if ( ! empty( $neom_service_content ) ) {
					$neom_service_content = json_decode( $neom_service_content );
					foreach ( $neom_service_content as $service_item ) {
						$title     = ! empty( $service_item->title ) ? apply_filters( 'neom_translate_single_string', $service_item->title, 'Service section' ) : '';
						$subtitle  = ! empty( $service_item->subtitle ) ? apply_filters( 'neom_translate_single_string', $service_item->subtitle, 'Service section' ) : '';
						$subtitle2 = ! empty( $service_item->subtitle2 ) ? apply_filters( 'neom_translate_single_string', $service_item->subtitle2, 'Service section' ) : '';
						$subtitle3 = ! empty( $service_item->subtitle3 ) ? apply_filters( 'neom_translate_single_string', $service_item->subtitle3, 'Service section' ) : '';
						$subtitle4 = ! empty( $service_item->subtitle4 ) ? apply_filters( 'neom_translate_single_string', $service_item->subtitle4, 'Service section' ) : '';
						$subtitle5 = ! empty( $service_item->subtitle5 ) ? apply_filters( 'neom_translate_single_string', $service_item->subtitle5, 'Service section' ) : '';
						$text      = ! empty( $service_item->text ) ? apply_filters( 'neom_translate_single_string', $service_item->text, 'Service section' ) : '';
						$button    = ! empty( $service_item->text2 ) ? apply_filters( 'neom_translate_single_string', $service_item->text2, 'Service section' ) : '';
						$link      = ! empty( $service_item->link ) ? apply_filters( 'neom_translate_single_string', $service_item->link, 'Service section' ) : '';
						$image     = ! empty( $service_item->image_url ) ? apply_filters( 'neom_translate_single_string', $service_item->image_url, 'Service section' ) : '';
						$icon      = ! empty( $service_item->icon_value ) ? apply_filters( 'neom_translate_single_string', $service_item->icon_value, 'Service section' ) : '';
						?>
						<div class="theme-column-4 av-sm-column-6 tilter">
							<div class="tilter__figure">
								<div class="service-item">
									<?php if ( ! empty( $image ) ) : ?>
										<div class="service-overlay">
											<img src="<?php echo esc_url( $image ); ?>">
										</div>
									<?php endif; ?>

									<div class="service-content tilter__caption">
										<?php if ( ! empty( $icon ) ) : ?>
											<div class="service-icon">
												<i class="fa <?php echo esc_attr( $icon ); ?>"></i>
											</div>
										<?php endif; ?>

										<?php if ( ! empty( $title ) ) : ?>
											<h5 class="service-title"><a href="<?php echo esc_url( $link ); ?>"><?php echo esc_html( $title ); ?></a></h5>
										<?php endif; ?>

										<ul>
											<?php if ( ! empty( $subtitle ) ) : ?>
												<li><?php echo esc_html( $subtitle ); ?></li>
											<?php endif; ?>

											<?php if ( ! empty( $subtitle2 ) ) : ?>
												<li><?php echo esc_html( $subtitle2 ); ?></li>
											<?php endif; ?>

											<?php if ( ! empty( $subtitle3 ) ) : ?>
												<li><?php echo esc_html( $subtitle3 ); ?></li>
											<?php endif; ?>

											<?php if ( ! empty( $subtitle4 ) ) : ?>
												<li><?php echo esc_html( $subtitle4 ); ?></li>
											<?php endif; ?>

											<?php if ( ! empty( $subtitle5 ) ) : ?>
												<li><?php echo esc_html( $subtitle5 ); ?></li>
											<?php endif; ?>
										</ul>

										<?php if ( ! empty( $button ) ) : ?>
											<a href="<?php echo esc_url( $link ); ?>" class="awp-btn awp-btn-secondary awp-btn-bubble"><?php echo esc_html( $button ); ?> <i class="fa fa-arrow-right"></i> <span class="bubble_effect"><span class="circle top-left"></span> <span class="circle top-left"></span> <span class="circle top-left"></span> <span class="button effect-button"></span> <span class="circle bottom-right"></span> <span class="circle bottom-right"></span> <span class="circle bottom-right"></span></span></a>
										<?php endif; ?>
									</div>
									<?php if ( ! empty( $icon ) ) : ?>
										<div class="modern-icon"><i class="fa <?php echo esc_attr( $icon ); ?>"></i></div>
									<?php endif; ?>
								</div>
							</div>
						</div>
						<?php
					}
				}
				?>
			</div>
		</div>
	</section>
<?php } ?>
