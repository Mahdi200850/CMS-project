<?php
	$neom_contact_area_disabled = get_theme_mod( 'neom_contact_area_disabled', false );
if ( true === $neom_contact_area_disabled ) {
	$neom_contact_area_title     = get_theme_mod( 'neom_contact_area_title', 'Have A Question?' );
	$neom_contact_area_des       = get_theme_mod( 'neom_contact_area_des', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.' );
	$neom_contact_container_size = get_theme_mod( 'neom_contact_container_size', 'container-full' );
	$neom_contact_shortcode      = get_theme_mod( 'neom_contact_shortcode' );
	?>	
	<section id="contactform-section" class="contactform-section theme-default shapes-section">
		<div class="container-full" style="padding: 0 0px;">
			<div class="theme-columns-area wow fadeInUp">
				<div class="theme-column-12">
					<?php if ( ! empty( $neom_contact_area_title ) || ! empty( $neom_contact_area_des ) ) : ?>
						<div class="theme-columns-area">
							<div class="theme-column-12">
								<div class="heading-default text-center wow fadeInUp">
									<?php if ( ! empty( $neom_contact_area_title ) ) : ?>
										<h3><?php echo wp_kses_post( $neom_contact_area_title ); ?></h3>
										<span class="separator"><span><span></span></span></span>
									<?php endif; ?>
									<?php if ( ! empty( $neom_contact_area_des ) ) : ?>
										<p><?php echo wp_kses_post( $neom_contact_area_des ); ?></p>
									<?php endif; ?>	
								</div>
							</div>
						</div>
					<?php endif; ?>
					<div class="contactform-content">
						<div class="av-container">
							<div class="theme-columns-area wow fadeIn">
								<div class="theme-column-12">
									<div class="contactform">
										<?php
										echo do_shortcode( $neom_contact_shortcode );
										?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php } ?>
