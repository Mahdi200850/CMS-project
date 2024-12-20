<?php
	$neom_team_disabled       = get_theme_mod( 'neom_team_disabled', true );
	$neom_team_area_title     = get_theme_mod( 'neom_team_area_title', 'Meet The <span class="primary-color">Team</span>' );
	$neom_team_area_des       = get_theme_mod( 'neom_team_area_des', '' );
	$neom_team_container_size = get_theme_mod( 'neom_team_container_size', 'container-full' );
	$neom_team_content        = get_theme_mod( 'neom_team_content', NEOM_TEAM_DEFAULT_CONTENT );
if ( true === $neom_team_disabled ) :
	?>
<section id="team-section" class="team-section theme-default team-home">
	<div class="container-full">
	<?php if ( ! empty( $neom_team_area_title ) || ! empty( $neom_team_area_des ) ) : ?>
			<div class="theme-columns-area">
				<div class="theme-column-12">
					<div class="heading-default text-center wow fadeInUp">
						<?php if ( ! empty( $neom_team_area_title ) ) : ?>
							<h3><?php echo wp_kses_post( $neom_team_area_title ); ?></h3>
							<span class="separator"><span><span></span></span></span>
						<?php endif; ?>
						<?php if ( ! empty( $neom_team_area_des ) ) : ?>
							<p><?php echo wp_kses_post( $neom_team_area_des ); ?></p>
						<?php endif; ?>	
					</div>
				</div>
			</div>
		<?php endif; ?>
		<div class="theme-columns-area">
			<div class="theme-column-12">
				<div class="team-carousel owl-carousel owl-theme">
				<?php
				if ( ! empty( $neom_team_content ) ) {
					$neom_team_content = json_decode( $neom_team_content );
					foreach ( $neom_team_content as $team_item ) {
						$title        = ! empty( $team_item->title ) ? apply_filters( 'neom_translate_single_string', $team_item->title, 'team section' ) : '';
						$subtitle     = ! empty( $team_item->subtitle ) ? apply_filters( 'neom_translate_single_string', $team_item->subtitle, 'team section' ) : '';
						$text         = ! empty( $team_item->text ) ? apply_filters( 'neom_translate_single_string', $team_item->text, 'team section' ) : '';
						$link         = ! empty( $team_item->link ) ? apply_filters( 'neom_translate_single_string', $team_item->link, 'team section' ) : '';
						$image        = ! empty( $team_item->image_url ) ? apply_filters( 'neom_translate_single_string', $team_item->image_url, 'team section' ) : '';
						$open_new_tab = $team_item->open_new_tab;
						// $open_new_tab = ! empty( $team_item->open_new_tab ) ? apply_filters( 'neom_translate_single_string', $team_item->open_new_tab, 'team section' ) : '';
						?>
						<div class="team-member">
							<div class="team-thumb">
								<?php if ( ! empty( $image ) ) : ?>
									<img src="<?php echo esc_url( $image ); ?>">
								<?php endif; ?>
								<div class="team-view">
									<a href="<?php echo esc_url( $link ); ?>">
										<i class="fa fa-eye" aria-hidden="true"></i>
									</a>
								</div>
								<div class="team-thumber">
									<aside class="widget widget_social_widget">
										<ul>
											<li>
												<?php
												if ( ! empty( $team_item->social_repeater ) ) :
													$icons         = html_entity_decode( $team_item->social_repeater );
													$icons_decoded = json_decode( $icons, true );
													if ( ! empty( $icons_decoded ) ) :
														foreach ( $icons_decoded as $value ) {
															$social_icon = ! empty( $value['icon'] ) ? apply_filters( 'neom_translate_single_string', $value['icon'], 'Team section' ) : '';
															$social_link = ! empty( $value['link'] ) ? apply_filters( 'neom_translate_single_string', $value['link'], 'Team section' ) : '';
															if ( ! empty( $social_icon ) ) {
																?>
																<a
																	<?php
																	if ( $open_new_tab == 'yes' ) {
																		echo 'target="_blank"'; }
																	?>
																	href="<?php echo esc_url( $social_link ); ?>">
																	<i class="fa <?php echo esc_attr( $social_icon ); ?> "></i>
																</a>							
																<?php
															}
														}
													endif;
												endif;
												?>
											</li>
										</ul>
									</aside>
								</div>
							</div>

							<?php if ( ! empty( $title ) || ! empty( $subtitle ) || ! empty( $text ) ) : ?>
								<div class="team-info">
									<h5>
										<a href="<?php echo esc_url( $link ); ?>">
											<?php echo esc_html( $title ); ?>
										</a>
									</h5>
									<p><?php echo esc_html( $subtitle ); ?></p>
									<p><?php echo esc_html( $text ); ?></p>
								</div>
							<?php endif; ?>
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
	<?php
		$neom_team_autoplay_disable = get_theme_mod( 'neom_team_autoplay_disable', true );
		$neom_team_dots             = get_theme_mod( 'neom_team_dots', false );
		$neom_team_nav              = get_theme_mod( 'neom_team_nav', true );
		$neom_team_column_layout    = get_theme_mod( 'neom_team_column_layout', '4' );
		$neom_team_animation_speed  = get_theme_mod(
			'neom_team_animation_speed',
			array(
				'slider' => 6000,
				'suffix' => 'px',
			)
		);
	?>
<script>
	jQuery( document ).ready(function() {
		jQuery(".team-carousel").owlCarousel({
			rtl: jQuery("html").attr("dir") == 'rtl' ? true : false,
			nav: true,
			navText: ['<i class="fa fa-arrow-left"></i>', '<i class="fa fa-arrow-right"></i>'],
			margin: 30,
			stagePadding: 0,
			autoplay: true,
			autoplayTimeout: 6000,
			loop: true,
			dots: false,
			//center: true,
			animateOut: 'fadeOut',
			animateIn: 'fadeIn',
			responsive: {
				0: {
					items: 1
				},
				601: {
					items: 2,
				},
				768: {
					items: 3
				},
				992: {
					items: 4,
				}
			}
		});
	});
</script>
<?php endif; ?>
