<?php
	$neom_client_disabled       = get_theme_mod( 'neom_client_disabled', true );
	$neom_client_area_title     = get_theme_mod( 'neom_client_area_title', 'We are <span class="primary-color">Working With</span>' );
	$neom_client_area_des       = get_theme_mod( 'neom_client_area_des', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.' );
	$neom_client_container_size = get_theme_mod( 'neom_client_container_size', 'av-container' );
	$neom_client_content        = get_theme_mod( 'neom_client_content', NEOM_CLIENT_DEFAULT_CONTENT );
if ( true === $neom_client_disabled ) :
	?>
<section id="client-section" class="client-section theme-default client-home" data-roller="start:0.5">
	<div class="av-container">
	<?php if ( ! empty( $neom_client_area_title ) || ! empty( $neom_client_area_des ) ) : ?>
			<div class="theme-columns-area">
				<div class="theme-column-12">
					<div class="heading-default heading-white text-center wow fadeInUp">
						<?php if ( ! empty( $neom_client_area_title ) ) : ?>
							<h3><?php echo wp_kses_post( $neom_client_area_title ); ?></h3>
							<span class="separator"><span><span></span></span></span>
						<?php endif; ?>
						<?php if ( ! empty( $neom_client_area_des ) ) : ?>
							<p><?php echo wp_kses_post( $neom_client_area_des ); ?></p>
						<?php endif; ?>	
					</div>
				</div>
			</div>
		<?php endif; ?>
		<div class="theme-columns-area">
			<div class="theme-column-12">
				<div class="partner-carousel owl-carousel owl-theme">
				<?php
				if ( ! empty( $neom_client_content ) ) {
					$neom_client_content = json_decode( $neom_client_content );
					foreach ( $neom_client_content as $client_item ) {
						$title    = ! empty( $client_item->title ) ? apply_filters( 'neom_translate_single_string', $client_item->title, 'Client section' ) : '';
						$subtitle = ! empty( $client_item->subtitle ) ? apply_filters( 'neom_translate_single_string', $client_item->subtitle, 'Client section' ) : '';
						$link     = ! empty( $client_item->link ) ? apply_filters( 'neom_translate_single_string', $client_item->link, 'Client section' ) : '';
						$image    = ! empty( $client_item->image_url ) ? apply_filters( 'neom_translate_single_string', $client_item->image_url, 'Client section' ) : '';
						?>
						<div class="single-partner">
							<div class="inner-partner">
								<a href="<?php echo esc_url( $link ); ?>">
								<?php if ( ! empty( $image ) ) : ?>
										<img src="<?php echo esc_url( $image ); ?>">
									<?php endif; ?>
								<?php if ( ! empty( $title ) || ! empty( $subtitle ) ) : ?>
										<span class="client-name"><?php echo esc_html( $title ); ?> <strong><?php echo esc_html( $subtitle ); ?></strong></span>
									<?php endif; ?>
								</a>
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

<script>
	jQuery( document ).ready(function() {
		jQuery(".partner-carousel").owlCarousel({
			rtl: jQuery("html").attr("dir") == 'rtl' ? true : false,
			nav: true,
			navText: ['<i class="fa fa-arrow-left"></i>', '<i class="fa fa-arrow-right"></i>'],
			margin: 30,
			stagePadding: 15,
			autoplay: true,
			autoplayTimeout: 6000,
			loop: true,
			dots: false,
			center: true,
			animateOut: 'fadeOut',
			animateIn: 'fadeIn',
			responsive: {
				0: {
					items: 2
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
