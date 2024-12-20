<?php
	$neom_funfact_disabled = get_theme_mod( 'neom_funfact_disabled', true );
if ( true === $neom_funfact_disabled ) {
	$neom_funfact_area_title     = get_theme_mod( 'neom_funfact_area_title', 'Why Choose Us?' );
	$neom_funfact_area_des       = get_theme_mod( 'neom_funfact_area_des', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.' );
	$neom_funfact_content        = get_theme_mod( 'neom_funfact_content', NEOM_FUNFACT_DEFAULT_CONTENT );
	$neom_funfact_container_size = get_theme_mod( 'neom_funfact_container_size', 'container-full' );
	$neom_funfact_column_layout  = get_theme_mod( 'neom_funfact_column_layout', 'theme-column-4' );
	$neom_funfact_left_img       = get_theme_mod( 'neom_funfact_left_img', awp_companion_plugin_url . '/inc/neom/img/funfact.webp' );
	?>	
	<section id="funfact-section" class="funfact-section theme-default funfact-home shapes-section roller rollerstart" data-roller="start:0.5">
		<div class="<?php echo esc_attr( $neom_funfact_container_size ); ?>">
			<div class="theme-columns-area wow fadeInUp">

			<?php if ( ! empty( $neom_funfact_left_img ) ) : ?>
					<div class="theme-column-5 funfact-person">
						<div class="funfact-person-img">
							<img src="<?php echo esc_url( $neom_funfact_left_img ); ?>">
						</div>
					</div>
				<?php endif; ?>

			<?php if ( empty( $neom_funfact_left_img ) ) : ?>
				<div class="theme-column-12">
				<?php else : ?>
				<div class="theme-column-7">
				<?php endif; ?>
				<?php if ( ! empty( $neom_funfact_area_title ) || ! empty( $neom_funfact_area_des ) ) : ?>
						<div class="theme-columns-area">
							<div class="theme-column-12">
								<div class="heading-default heading-white text-left wow fadeInUp">
									<?php if ( ! empty( $neom_funfact_area_title ) ) : ?>
										<h3><?php echo wp_kses_post( $neom_funfact_area_title ); ?></h3>
										<span class="separator"><span><span></span></span></span>
									<?php endif; ?>
									<?php if ( ! empty( $neom_funfact_area_des ) ) : ?>
										<p><?php echo wp_kses_post( $neom_funfact_area_des ); ?></p>
									<?php endif; ?>	
								</div>
							</div>
						</div>
					<?php endif; ?>
					<div class="theme-columns-area funfact-wrapper">
						<?php
						if ( ! empty( $neom_funfact_content ) ) {
							$neom_funfact_content = json_decode( $neom_funfact_content );
							foreach ( $neom_funfact_content as $funfact_item ) {
								$title  = ! empty( $funfact_item->title ) ? apply_filters( 'neom_translate_single_string', $funfact_item->title, 'funfact section' ) : '';
								$text   = ! empty( $funfact_item->text ) ? apply_filters( 'neom_translate_single_string', $funfact_item->text, 'funfact section' ) : '';
								$link   = ! empty( $funfact_item->link ) ? apply_filters( 'neom_translate_single_string', $funfact_item->link, 'funfact section' ) : '';
								$image  = ! empty( $funfact_item->image_url ) ? apply_filters( 'neom_translate_single_string', $funfact_item->image_url, 'funfact section' ) : '';
								$icon   = ! empty( $funfact_item->icon_value ) ? apply_filters( 'neom_translate_single_string', $funfact_item->icon_value, 'funfact section' ) : '';
								$choice = ! empty( $funfact_item->choice ) ? apply_filters( 'neom_translate_single_string', $funfact_item->choice, 'funfact section' ) : '';
								?>
								<div class="<?php echo esc_attr( $neom_funfact_column_layout ); ?> <?php echo esc_attr( $neom_funfact_container_size ); ?>">
									<div class="funfact-item">
										<?php if ( $choice == 'customizer_repeater_image' ) : ?>
											<div class="funfact-icon">
												<img src="<?php echo esc_url( $image ); ?>" />
											</div>
										<?php else : ?>
											<div class="funfact-icon">
												<i class="fa <?php echo esc_attr( $icon ); ?>" aria-hidden="true"></i>
											</div>
										<?php endif; ?>

										<?php if ( ! empty( $title ) || ! empty( $text ) ) : ?>
											<h3 class="counter"><a href="<?php echo esc_url( $link ); ?>"><?php echo esc_html( $title ); ?></a></h3>
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
