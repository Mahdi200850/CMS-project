<?php
$neom_portfolio_disabled = get_theme_mod( 'neom_portfolio_disabled', true );
if ( true === $neom_portfolio_disabled ) {
	$neom_portfolio_area_title     = get_theme_mod( 'neom_portfolio_area_title', 'Our Projects' );
	$neom_portfolio_area_des       = get_theme_mod( 'neom_portfolio_area_des', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.' );
	$neom_portfolio_content        = get_theme_mod( 'neom_portfolio_content', NEOM_PORTFOLIO_DEFAULT_CONTENT );
	$neom_portfolio_container_size = get_theme_mod( 'neom_portfolio_container_size', 'container-full' );
	$neom_portfolio_column_layout  = get_theme_mod( 'neom_portfolio_column_layout', 'theme-column-4' );
	$neom_portfolio_count          = get_theme_mod(
		'neom_portfolio_count',
		array(
			'slider' => 3,
			'suffix' => '',
		)
	);
	?>

	<section id="portfolio-section" class="portfolio-section theme-default project-home shapes-section">
		<div class="container-full">
			<?php if ( ! empty( $neom_portfolio_area_title ) || ! empty( $neom_portfolio_area_des ) ) : ?>
			<div class="theme-columns-area">
				<div class="theme-column-12">
					<div class="heading-default text-center wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
						<?php if ( ! empty( $neom_portfolio_area_title ) ) : ?>
							<h3><?php echo wp_kses_post( $neom_portfolio_area_title ); ?></h3>
							<span class="separator"><span><span></span></span></span>
						<?php endif; ?>
						<?php if ( ! empty( $neom_portfolio_area_des ) ) : ?>
							<p><?php echo wp_kses_post( $neom_portfolio_area_des ); ?></p>
						<?php endif; ?>
					</div>
				</div>
			</div>
			<?php endif; ?>
			<div class="av-filter-wrapper-1">
				<div class="theme-columns-area wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
					<div class="theme-column-12">
						<div id="av-filter-init-1" class="theme-columns-area av-filter-init" style="position: relative; height: 708.718px;">
							<?php
							$item = 0;
							if ( ! empty( $neom_portfolio_content ) ) {
								$neom_portfolio_content = json_decode( $neom_portfolio_content );
								foreach ( $neom_portfolio_content as $portfolio_item ) {
									if ( $item <= 3 - 1 ) {
										$title        = ! empty( $portfolio_item->title ) ? apply_filters( 'neom_translate_single_string', $portfolio_item->title, 'portfolio section' ) : '';
										$subtitle     = ! empty( $portfolio_item->subtitle ) ? apply_filters( 'neom_translate_single_string', $portfolio_item->subtitle, 'portfolio section' ) : '';
										$text         = ! empty( $portfolio_item->text ) ? apply_filters( 'neom_translate_single_string', $portfolio_item->text, 'portfolio section' ) : '';
										$link         = ! empty( $portfolio_item->link ) ? apply_filters( 'neom_translate_single_string', $portfolio_item->link, 'portfolio section' ) : '';
										$image        = ! empty( $portfolio_item->image_url ) ? apply_filters( 'neom_translate_single_string', $portfolio_item->image_url, 'portfolio section' ) : '';
										$icon         = ! empty( $portfolio_item->icon_value ) ? apply_filters( 'neom_translate_single_string', $portfolio_item->icon_value, 'portfolio section' ) : '';
										$open_new_tab = $portfolio_item->open_new_tab;
										?>

										<div class="theme-column-4 av-sm-column-6 av-filter-item year-2005" style="position: absolute; left: 0%; top: 0px;">
											<figure class="portfolio-item mgf-popup">
												<div class="portfolio-inner">
												<?php if ( ! empty( $image ) ) : ?>
														<div class="portfolio-thumb">
															<div class="portfolio-thumb-img">
																<img src="<?php echo esc_url( $image ); ?>"	alt=""	loading="lazy" sizes="(max-width: 560px) 100vw, 560px" />
															</div>
															<div class="portfolio-thumber">
																<div class="portfolio-thumb-content">
																	<a href="<?php echo esc_url( $image ); ?>" class="image" 
																		<?php if ( ! empty( $title ) ) : ?>
																			title="<?php echo esc_html( $title ); ?>" 
																		<?php endif; ?>>
																		<i class="fa fa-search-plus" aria-hidden="true"></i>
																	</a>
																	<?php if ( ! empty( $text ) ) : ?>
																		<p><?php echo esc_html( $text ); ?></p>
																	<?php endif; ?>
																</div>
															</div>
														</div>
													<?php endif; ?>
													<div class="portfolio-caption">
														<div class="caption">
														<?php if ( ! empty( $subtitle ) ) : ?>
																<p><?php echo esc_html( $subtitle ); ?></p>
															<?php endif; ?>
														<?php if ( ! empty( $title ) ) : ?>
																<h6 class="portfolio-title"><?php echo esc_html( $title ); ?></h6>
															<?php endif; ?>
														</div>
													<?php if ( ! empty( $link ) ) : ?>
															<div class="more">
																<a 
																<?php
																if ( $open_new_tab == 'yes' ) {
																	echo 'target="_blank"'; }
																?>
																	href="<?php echo esc_url( $link ); ?>">
																	<i class="fa fa-angle-right" aria-hidden="true"></i>
																</a>
															</div>
														<?php endif; ?>
													</div>
												</div>
											</figure>
										</div>
										<?php
										$item++;
									}
								}
							}
							?>
						</div>
					</div>
				</div>
			</div>
			<?php
				$neom_portfolio_button_disabled = get_theme_mod( 'neom_portfolio_button_disabled', true );
				$neom_portfolio_button_text     = get_theme_mod( 'neom_portfolio_button_text', 'Show More' );
				$neom_portfolio_button_link     = get_theme_mod( 'neom_portfolio_button_link', '#' );
			if ( true === $neom_portfolio_button_disabled ) {
				if ( ! empty( $neom_portfolio_button_text ) ) :
					?>
						<div class="portfolio-button wow fadeInUp" style="visibility: visible; animation-name: fadeInUp; text-align:center; margin-top:50px;">
							<a href="<?php echo esc_url( $neom_portfolio_button_link ); ?>" target='_blank' 
								class="awp-btn awp-btn-primary awp-btn-bubble"><?php echo esc_html( $neom_portfolio_button_text ); ?> 
								<i class="fa fa-arrow-right"></i> 
								<span class="bubble_effect">
									<span class="circle top-left"></span><span class="circle top-left"></span><span class="circle top-left"></span> 
									<span class="button effect-button"></span> 
									<span class="circle bottom-right"></span><span class="circle bottom-right"></span><span class="circle bottom-right"></span>
								</span>
							</a>
						</div>
					<?php endif; ?>
				<?php } ?>
		</div>
	</section>
<?php } ?>
