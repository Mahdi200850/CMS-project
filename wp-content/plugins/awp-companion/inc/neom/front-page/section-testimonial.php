<?php
	$neom_testimonial_disabled   = get_theme_mod( 'neom_testimonial_disabled', true );
	$neom_testimonial_area_title = get_theme_mod( 'neom_testimonial_area_title', 'Happy <span class="primary-color">Customers</span>' );
	$neom_testimonial_area_des   = get_theme_mod( 'neom_testimonial_area_des', 'Our Customer Feedbacks About Our Works' );
	$neom_testimonial_content    = get_theme_mod( 'neom_testimonial_content', NEOM_TESTIMONIAL_DEFAULT_CONTENT );
if ( true === $neom_testimonial_disabled ) :
	?>
<section id="testimonial-section" class="testimonial-section theme-default testimonial-home" data-roller="start:0.5">
	<div class="av-container">
	<?php if ( ! empty( $neom_testimonial_area_title ) || ! empty( $neom_testimonial_area_des ) ) : ?>
			<div class="theme-columns-area">
				<div class="theme-column-12">
					<div class="heading-default heading-white text-center wow fadeInUp">
						<?php if ( ! empty( $neom_testimonial_area_title ) ) : ?>
							<h3><?php echo wp_kses_post( $neom_testimonial_area_title ); ?></h3>
							<span class="separator"><span><span></span></span></span>
						<?php endif; ?>
						<?php if ( ! empty( $neom_testimonial_area_des ) ) : ?>
							<p><?php echo wp_kses_post( $neom_testimonial_area_des ); ?></p>
						<?php endif; ?>	
					</div>
				</div>
			</div>
		<?php endif; ?>
		<div class="theme-columns-area">
			<div class="av-md-column-10 av-xs-column-12 mx-auto">
				<div class="testimonial-carousel owl-carousel owl-theme">
				<?php
				if ( ! empty( $neom_testimonial_content ) ) {
					$neom_testimonial_content = json_decode( $neom_testimonial_content );
					foreach ( $neom_testimonial_content as $testimonial_item ) {
						$title       = ! empty( $testimonial_item->title ) ? apply_filters( 'neom_translate_single_string', $testimonial_item->title, 'testimonial section' ) : '';
						$subtitle    = ! empty( $testimonial_item->subtitle ) ? apply_filters( 'neom_translate_single_string', $testimonial_item->subtitle, 'testimonial section' ) : '';
						$text        = ! empty( $testimonial_item->text ) ? apply_filters( 'neom_translate_single_string', $testimonial_item->text, 'testimonial section' ) : '';
						$link        = ! empty( $testimonial_item->link ) ? apply_filters( 'neom_translate_single_string', $testimonial_item->link, 'testimonial section' ) : '';
						$image       = ! empty( $testimonial_item->image_url ) ? apply_filters( 'neom_translate_single_string', $testimonial_item->image_url, 'testimonial section' ) : '';
						$designation = ! empty( $testimonial_item->designation ) ? apply_filters( 'neom_translate_single_string', $testimonial_item->designation, 'testimonial section' ) : '';
						// $open_new_tab   = $testimonial_item->open_new_tab;
						// $rating_control = $testimonial_item->rating_control;
						?>
						<div class="testimonials-item">
							<div class="testimonials-client-thumb">
								<div class="img-fluid">
									<img src="<?php echo esc_url( $image ); ?>" data-img-url="<?php echo esc_url( $image ); ?>">
								</div>
							</div>
							<div class="testimonials-content">
								<div class="testimonials-icon"><i class="fa fa-quote-right" aria-hidden="true"></i></div>
								<div class="rating">
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
								</div>
								<?php if ( ! empty( $title ) ) : ?>
									<h4><?php echo esc_html( $title ); ?></h4>
								<?php endif; ?>
								<?php if ( ! empty( $text ) ) : ?>
									<p><?php echo esc_html( $text ); ?></p>
								<?php endif; ?>

								<div class="testimonials-title">
									<?php if ( ! empty( $subtitle ) ) : ?>
										<h5><?php echo esc_html( $subtitle ); ?></h5>
									<?php endif; ?>
									<?php if ( ! empty( $designation ) ) : ?>
										<p><?php echo esc_html( $designation ); ?></p>
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
		</div>
	</div>
</section>

<script>
	jQuery( document ).ready(function() {
		jQuery(".testimonial-carousel").owlCarousel({
			rtl: jQuery("html").attr("dir") == 'rtl' ? true : false,
			nav: true,
			navText: ['<i class="fa fa-arrow-left"></i>', '<i class="fa fa-arrow-right"></i>'],
			thumbs: true,
			thumbImage: true,
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
					items: 1
				},
				768: {
					items: 1
				},
				992: {
					items: 1,
				}
			}
		});
	});
</script>
<?php endif; ?>
