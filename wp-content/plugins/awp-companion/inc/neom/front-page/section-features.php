<?php
	$neom_features_area_disabled = get_theme_mod( 'neom_features_area_disabled', true );
if ( true === $neom_features_area_disabled ) {
	$neom_features_area_title     = get_theme_mod( 'neom_features_area_title', 'Other Sectors' );
	$neom_features_area_des       = get_theme_mod( 'neom_features_area_des', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.' );
	$neom_features_content        = get_theme_mod( 'neom_features_content', NEOM_FEATURES_DEFAULT_CONTENT );
	$neom_features_container_size = get_theme_mod( 'neom_features_container_size', 'full-container' );
	$neom_features_column_layout  = get_theme_mod( 'neom_features_column_layout', 'theme-column-4' );
	$neom_features_right_img      = get_theme_mod( 'neom_features_right_img', awp_companion_plugin_url . '/inc/neom/img/features.webp' );
	?>	
	<section id="features-section" class="features-section bg-primary theme-default features-home">
		<div class="<?php echo esc_attr( $neom_features_container_size ); ?>">
			<div class="theme-columns-area wow fadeInUp">
			<?php if ( empty( $neom_features_right_img ) ) : ?>
				<div class="theme-column-12">
				<?php else : ?>
				<div class="theme-column-7">
				<?php endif; ?>
				<?php if ( ! empty( $neom_features_area_title ) || ! empty( $neom_features_area_des ) ) : ?>
						<div class="theme-columns-area">
							<div class="theme-column-12">
								<div class="heading-default heading-white text-left wow fadeInUp">
									<?php if ( ! empty( $neom_features_area_title ) ) : ?>
										<h3><?php echo wp_kses_post( $neom_features_area_title ); ?></h3>
										<span class="separator"><span><span></span></span></span>
									<?php endif; ?>
									<?php if ( ! empty( $neom_features_area_des ) ) : ?>
										<p><?php echo wp_kses_post( $neom_features_area_des ); ?></p>
									<?php endif; ?>	
								</div>
							</div>
						</div>
					<?php endif; ?>
					<div class="theme-columns-area features-contents">
						<span class="tilter theme-d-none"></span>
					<?php
					if ( ! empty( $neom_features_content ) ) {
						$neom_features_content = json_decode( $neom_features_content );
						foreach ( $neom_features_content as $features_item ) {
							$title  = ! empty( $features_item->title ) ? apply_filters( 'neom_translate_single_string', $features_item->title, 'features section' ) : '';
							$text   = ! empty( $features_item->text ) ? apply_filters( 'neom_translate_single_string', $features_item->text, 'features section' ) : '';
							$link   = ! empty( $features_item->link ) ? apply_filters( 'neom_translate_single_string', $features_item->link, 'features section' ) : '';
							$image  = ! empty( $features_item->image_url ) ? apply_filters( 'neom_translate_single_string', $features_item->image_url, 'features section' ) : '';
							$icon   = ! empty( $features_item->icon_value ) ? apply_filters( 'neom_translate_single_string', $features_item->icon_value, 'features section' ) : '';
							$choice = ! empty( $features_item->choice ) ? apply_filters( 'neom_translate_single_string', $features_item->choice, 'features section' ) : '';
							?>
							<div class="<?php echo esc_attr( $neom_features_column_layout ); ?> tilter">
								<div class="tilter__figure">
									<div class="features-item">
										<div class="features-inner tilter__caption">
										<?php if ( $choice == 'customizer_repeater_image' ) : ?>
												<div class="features-icon">
													<img src="<?php echo esc_url( $image ); ?>" />
												</div>
											<?php else : ?>
												<div class="features-icon">
													<i class="fa <?php echo esc_attr( $icon ); ?>"></i>
												</div>
											<?php endif; ?>

										<?php if ( ! empty( $title ) || ! empty( $text ) ) : ?>
												<div class="features-content">
													<h6 class="features-title"><a href="<?php echo esc_url( $link ); ?>"><?php echo esc_html( $title ); ?></a></h6>
													<p><?php echo esc_html( $text ); ?></p>
												</div>
											<?php endif; ?>

										<?php if ( $choice == 'customizer_repeater_image' ) : ?>
												<div class="modern-icon"><img src="<?php echo esc_url( $image ); ?>" /></div>
											<?php else : ?>
												<div class="modern-icon"><i class="fa <?php echo esc_attr( $icon ); ?>"></i></div>
											<?php endif; ?>

										</div>
										<div class="tilter__deco--lines"></div>
									</div>
								</div>
							</div>
								<?php
						}
					}
					?>
					</div>
				</div>
				<?php if ( ! empty( $neom_features_right_img ) ) : ?>
					<div class="theme-column-5 featuresbgwrapper">
						<div class="features-image-wrap">
							<div class="features-image">
								<img src="<?php echo esc_url( $neom_features_right_img ); ?>">
							</div>
						</div>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</section>
<?php } ?>
