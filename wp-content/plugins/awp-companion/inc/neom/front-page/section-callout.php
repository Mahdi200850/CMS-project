<?php
	$neom_cta_disabled       = get_theme_mod( 'neom_cta_disabled', true );
	$neom_cta_effect_enable  = get_theme_mod( 'neom_cta_effect_enable', true );
	$neom_cta_left_icon      = get_theme_mod( 'neom_cta_left_icon', 'fa-user' );
	$neom_cta_area_title2    = get_theme_mod( 'neom_cta_area_title2', 'Call Us:' );
	$neom_cta_area_des2      = get_theme_mod( 'neom_cta_area_des2', '+(01) 335 2565' );
	$neom_cta_right_icon     = get_theme_mod( 'neom_cta_right_icon', 'fa-phone' );
	$neom_cta_area_title     = get_theme_mod( 'neom_cta_area_title', 'We Design With Aesthetic Sense. Reach us here.' );
	$neom_cta_area_des       = get_theme_mod( 'neom_cta_area_des', 'How Can We Help You?' );
	$neom_cta_button_icon    = get_theme_mod( 'neom_cta_button_icon', 'fa-arrow-right' );
	$neom_cta_button_text    = get_theme_mod( 'neom_cta_button_text', 'Contact Us' );
	$neom_cta_button_link    = get_theme_mod( 'neom_cta_button_link' );
	$neom_cta_container_size = get_theme_mod( 'neom_cta_container_size', 'container-full' );


if ( true === $neom_cta_disabled ) {
	?>
<section id="cta-section" class="cta-section home-cta 
	<?php
	if ( true === $neom_cta_effect_enable ) :
		echo esc_attr_e( 'cta-effect-active', 'neom-blog' );
		endif;
	?>
">
	<div class="cta-overlay">
		<div class="<?php echo esc_attr( $neom_cta_container_size ); ?>">
			<div class="theme-columns-area">
				<div class="theme-column-5 my-auto">
					<div class="call-wrapper">
					<?php if ( ! empty( $neom_cta_left_icon ) ) : ?>
							<div class="call-icon-box"><i class="fa <?php echo esc_attr( $neom_cta_left_icon ); ?>"></i></div>
						<?php endif; ?>
					<?php if ( ! empty( $neom_cta_area_title2 ) || ! empty( $neom_cta_area_des2 ) ) : ?>
							<div class="cta-info">
								<div class="call-title"><?php echo wp_kses_post( $neom_cta_area_title2 ); ?></div>
								<div class="call-phone"><?php echo wp_kses_post( $neom_cta_area_des2 ); ?></div>
							</div>
						<?php endif; ?>
					</div>
				</div>
				<div class="theme-column-7 my-auto">
					<div class="cta-content-wrap">
						<div class="cta-content">
						<?php if ( ! empty( $neom_cta_right_icon ) ) : ?>
								<span class="cta-icon-wrap"><i class="fa <?php echo esc_attr( $neom_cta_right_icon ); ?>"></i></span>
							<?php endif; ?>
						<?php if ( ! empty( $neom_cta_area_title ) ) : ?>
								<h4><?php echo wp_kses_post( $neom_cta_area_title ); ?></h4>
							<?php endif; ?>
						<?php if ( ! empty( $neom_cta_area_des ) ) : ?>
								<p><?php echo wp_kses_post( $neom_cta_area_des ); ?></p>
							<?php endif; ?>
						</div>

					<?php if ( ! empty( $neom_cta_button_text ) || ! empty( $neom_cta_button_icon ) ) : ?>
							<div class="cta-btn">
								<a href="<?php echo esc_url( $neom_cta_button_link ); ?>" class="awp-btn awp-btn-primary awp-btn-bubble"><?php echo esc_html( $neom_cta_button_text ); ?> <i class="fa <?php echo esc_attr( $neom_cta_button_icon ); ?>"></i> <span class="bubble_effect"><span class="circle top-left"></span> <span class="circle top-left"></span> <span class="circle top-left"></span> <span class="button effect-button"></span> <span class="circle bottom-right"></span> <span class="circle bottom-right"></span> <span class="circle bottom-right"></span></span></a>
							</div>
						<?php endif; ?>	
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php } ?>
