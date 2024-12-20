<?php
	$neom_about_area_disabled = get_theme_mod( 'neom_about_area_disabled', true );
if ( true === $neom_about_area_disabled ) {
	$neom_about_area_title     = get_theme_mod( 'neom_about_area_title', 'We Are Professional' );
	$neom_about_area_des       = get_theme_mod( 'neom_about_area_des', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.' );
	$neom_about_container_size = get_theme_mod( 'neom_about_container_size', 'av-container' );
	$neom_about_column_layout  = get_theme_mod( 'neom_about_column_layout', 'theme-column-6' );
	$neom_about_img            = get_theme_mod( 'neom_about_img', awp_companion_plugin_url . '/inc/neom/img/about.webp' );
	$neom_about_img_text       = get_theme_mod( 'neom_about_img_text', 'Call Us : +987 654 321' );
	$neom_about_editor_content = get_theme_mod( 'neom_about_editor_content' );
	$neom_about_content        = get_theme_mod( 'neom_about_content', NEOM_ABOUT_DEFAULT_CONTENT );
	?>	
	<section id="about-section" class="about-section theme-default about-home shapes-section">
		<div class="av-container">
			<div class="theme-columns-area">
				<?php if ( ! empty( $neom_about_img ) ) : ?>
					<div class="theme-column-6 mb-4 mb-av-0">
						<div class="about-content">
							<img src="<?php echo esc_url( $neom_about_img ); ?>">

							<?php if ( ! empty( $neom_about_img_text ) ) : ?>
								<div class="about-content-summery">
									<div class="about-summery"><?php echo esc_html( $neom_about_img_text ); ?><i></i><i></i><i></i><i></i></div>
								</div>
							<?php endif; ?>
						</div>
					</div>
				<?php endif; ?>

				<!-- About Section -->
				<?php if ( empty( $neom_about_img ) ) : ?>
					<div class="theme-column-12">
				<?php else : ?>
					<div class="theme-column-6">
				<?php endif; ?>
					<div class="about-panel">
						<?php if ( ! empty( $neom_about_area_title ) ) : ?>
							<div class="heading-title">
								<div class="heading-default text-center wow fadeInUp">
									<?php if ( ! empty( $neom_about_area_title ) ) : ?>
										<h3><?php echo wp_kses_post( $neom_about_area_title ); ?></h3>
									<?php endif; ?>
									<span class="separator"><span><span></span></span></span>
								</div>
							</div>
						<?php endif; ?>
						<?php if ( ! empty( $neom_about_area_des ) ) : ?>
							<p clsss="about-description"><?php echo wp_kses_post( $neom_about_area_des ); ?></p>
						<?php endif; ?>
						<div class="about-wrapper">
							<?php
							if ( ! empty( $neom_about_content ) ) {
								$neom_about_content = json_decode( $neom_about_content );
								foreach ( $neom_about_content as $about_item ) {
									$title  = ! empty( $about_item->title ) ? apply_filters( 'neom_translate_single_string', $about_item->title, 'about section' ) : '';
									$number = ! empty( $about_item->number ) ? apply_filters( 'neom_translate_single_string', $about_item->number, 'about section' ) : '';
									?>
									<div class="skills-wrapper">
										<div class="skill-panel">
											<?php if ( ! empty( $title ) ) : ?>
												<div class="skill-heading"><?php echo esc_html( $title ); ?></div>
											<?php endif; ?>
											<?php if ( ! empty( $number ) ) : ?>
												<div class="skillbar" data-percent="<?php echo esc_html( $number ); ?>%">
													<div class="skill-bar-percent" style="left: 50%;"><span class="count-bar"><?php echo esc_html( $number ); ?></span>%</div>
													<div class="skillbar-bar" style="width: 50%;"></div>
												</div>
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
		</div>
	</section>
<?php } ?>
