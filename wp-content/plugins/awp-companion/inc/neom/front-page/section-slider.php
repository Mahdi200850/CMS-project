 <!--===// Start: Slider
	=================================--> 
<?php
	$neom_main_slider_disabled             = get_theme_mod( 'neom_main_slider_disabled', true );
	$neom_main_slider_content              = get_theme_mod( 'neom_main_slider_content', NEOM_SLIDER_DEFAULT_CONTENT );
	$neom_main_slider_text_overlay_disable = get_theme_mod( 'neom_main_slider_text_overlay_disable', true );

if ( $neom_main_slider_disabled == true ) {
		?>
	<section id="slider-section" class="slider-wrapper">
		<div class="main-slider owl-carousel owl-theme">
			<?php
			if ( ! empty( $neom_main_slider_content ) ) {
				$neom_main_slider_content = json_decode( $neom_main_slider_content );
				foreach ( $neom_main_slider_content as $slide_item ) {
					$title        = ! empty( $slide_item->title ) ? apply_filters( 'neom_translate_single_string', $slide_item->title, 'slider section' ) : '';
					$subtitle     = ! empty( $slide_item->subtitle ) ? apply_filters( 'neom_translate_single_string', $slide_item->subtitle, 'slider section' ) : '';
					$subtitle2    = ! empty( $slide_item->subtitle2 ) ? apply_filters( 'neom_translate_single_string', $slide_item->subtitle2, 'slider section' ) : '';
					$text         = ! empty( $slide_item->text ) ? apply_filters( 'neom_translate_single_string', $slide_item->text, 'slider section' ) : '';
					$button       = ! empty( $slide_item->text2 ) ? apply_filters( 'neom_translate_single_string', $slide_item->text2, 'slider section' ) : '';
					$link         = ! empty( $slide_item->link ) ? apply_filters( 'neom_translate_single_string', $slide_item->link, 'slider section' ) : '';
					$image        = ! empty( $slide_item->image_url ) ? apply_filters( 'neom_translate_single_string', $slide_item->image_url, 'slider section' ) : '';
					$open_new_tab = ! empty( $slide_item->open_new_tab ) ? apply_filters( 'neom_translate_single_string', $slide_item->open_new_tab, 'slider section' ) : '';
					$align        = ! empty( $slide_item->slide_align ) ? apply_filters( 'neom_translate_single_string', $slide_item->slide_align, 'slider section' ) : '';
					if ( $align == 'left' ) :
						$animation_align = 'fadeInLeft';
					elseif ( $align == 'center' ) :
						$animation_align = 'fadeInUp';
					else :
						$animation_align = 'fadeInRight';
					endif;
					?>
					<div class="item">
						<?php if ( ! empty( $image ) ) : ?>
							<img src="<?php echo esc_url( $image ); ?>" data-img-url="<?php echo esc_url( $image ); ?>" alt="">
						<?php endif; ?>	
						<div class="theme-slider">
							<div class="theme-table">
								<div class="theme-table-cell">
									<div class="av-container">                            
										<div class="theme-content 
										<?php
										if ( true === $neom_main_slider_text_overlay_disable ) {
											?>
											text-overlay <?php } ?> text-<?php echo esc_attr( $align ); ?>" data-animation="fadeIn" data-delay="140ms">
											<?php if ( ! empty( $title ) ) : ?>
												<h3 data-animation="fadeInUp" data-delay="150ms"><?php echo esc_html( $title ); ?></h3>
											<?php endif; ?>

											<?php if ( ! empty( $subtitle ) || ! empty( $subtitle2 ) ) : ?>
												<h1 data-animation="<?php echo esc_attr( $animation_align ); ?>" data-delay="200ms"><?php echo esc_html( $subtitle ); ?> <span class="primary-color"><?php echo esc_html( $subtitle2 ); ?></span></h1>   
											<?php endif; ?>

											<?php if ( ! empty( $text ) ) : ?>									
												<p data-animation="<?php echo esc_attr( $animation_align ); ?>" data-delay="500ms"><?php echo esc_html( $text ); ?></p>
											<?php endif; ?>

											<?php if ( ! empty( $button ) ) : ?>
												<a data-animation="fadeInUp" data-delay="800ms" href="<?php echo esc_url( $link ); ?>" 
													<?php
													if ( $open_new_tab == 'yes' || $open_new_tab == '1' ) {
														echo "target='_blank'"; }
													?>
												class="awp-btn awp-btn-primary awp-btn-bubble"><?php echo esc_html( $button ); ?> <i class="fa fa-arrow-right"></i> <span class="bubble_effect"><span class="circle top-left"></span> <span class="circle top-left"></span> <span class="circle top-left"></span> <span class="button effect-button"></span> <span class="circle bottom-right"></span> <span class="circle bottom-right"></span> <span class="circle bottom-right"></span></span></a>
											<?php endif; ?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php
				}
			}
			?>
		</div>
	</section>
	<style>
		.main-slider .owl-dots{
			bottom: 10%;
			display: block;
			position: absolute;
			right: 48%;
			background: var(--sp-gradient1);
			border-radius: 8px;
			padding: 6px;
		}
	</style>

	<script>
		jQuery( document ).ready(function() {
			var owlMainSlider = jQuery('.main-slider');
			owlMainSlider.owlCarousel({
				rtl: jQuery("html").attr("dir") == 'rtl' ? true : false,
				items: 1,
				autoHeight: true,
				autoplay: true,
				autoplayTimeout: 6000,
				loop: false,
				navRewind: false,
				dots: false,
				navText: ['<i class="fa fa-chevron-left"></i> <span>SLIDE</span>', '<span>SLIDE</span> <i class="fa fa-chevron-right"></i>'],
				singleItem: true,
				transitionStyle: "fade",
				touchDrag: true,
				mouseDrag: true,
				responsive: {
					0: {
						nav: false
					},
					768: {
						nav: true
					},
					992: {
						nav: true
					}
				}
			});
		});
	</script>
				<?php
}
	?>
