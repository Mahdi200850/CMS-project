<!-- Slider Section -->
<?php
$formula_main_slider_options  = get_theme_mod( 'formula_main_slider_content' );
$formula_main_slider_disabled = get_theme_mod( 'formula_main_slider_disabled', true );
if ( $formula_main_slider_disabled != false ) {

	// slider option settings.
	$formula_main_slider_autoplay_disable               = get_theme_mod( 'formula_main_slider_autoplay_disable', true );
	$formula_main_slider_animation                      = get_theme_mod( 'formula_main_slider_animation', false );
	$formula_main_slider_animation_speed                = get_theme_mod( 'formula_main_slider_animation_speed', '4000' );
	$formula_main_slider_overlay_disable                = get_theme_mod( 'formula_main_slider_overlay_disable', true );
	$formula_main_slider_overlay_color                  = get_theme_mod( 'formula_main_slider_overlay_color', 'rgba(0, 0, 0, 0.2)' );
	$formula_main_slider_caption_title_color            = get_theme_mod( 'formula_main_slider_caption_title_color', '#fff' );
	$formula_main_slider_caption_subtitle_title_color   = get_theme_mod( 'formula_main_slider_caption_subtitle_title_color', '#fff' );
	$formula_main_slider_caption_descrption_title_color = get_theme_mod( 'formula_main_slider_caption_descrption_title_color', '#fff' );

	?>
<style>
	.slider-caption .title { color: <?php echo $formula_main_slider_caption_title_color; ?>; }
	.slider-caption .subtitle { color: <?php echo $formula_main_slider_caption_subtitle_title_color; ?>;  }
	.slider-caption p { color: <?php echo $formula_main_slider_caption_descrption_title_color; ?>;  }
	<?php if ( $formula_main_slider_overlay_disable == true ) { ?>
		#slider-demo .item::before { 
			background-color: <?php echo $formula_main_slider_overlay_color; ?>; 
		}
	<?php } else { ?>
		#slider-demo .item::before { 
			background-color: transparent; 
		}
	<?php } ?>
</style>

<section id="slider-selector-scroll" class="hero-slider">
	<div id="slider-demo" class="owl-carousel owl-theme">
		<?php
		$formula_main_slider_options = json_decode( $formula_main_slider_options );
		if ( $formula_main_slider_options != '' ) {
			foreach ( $formula_main_slider_options as $slide_item ) {
				?>
				<div id="post-<?php the_ID(); ?>" class="item home-section home-full-height" 
					<?php
						$slider_image = ! empty( $slide_item->image_url ) ? apply_filters( 'formula_translate_single_string', $slide_item->image_url, 'Slider section' ) : '';
						if ( $slider_image != '' ) {

					?>
						style="background-image:url(<?php echo $slider_image; ?>); 	<?php } ?>">
						<?php
							$title           = ! empty( $slide_item->title ) ? apply_filters( 'formula_translate_single_string', $slide_item->title, 'Slider section' ) : '';
							$subtitle        = ! empty( $slide_item->subtitle ) ? apply_filters( 'formula_translate_single_string', $slide_item->subtitle, 'Slider section' ) : '';
							$img_description = ! empty( $slide_item->text ) ? apply_filters( 'formula_translate_single_string', $slide_item->text, 'Slider section' ) : '';
							$readmorelink    = ! empty( $slide_item->link ) ? apply_filters( 'formula_translate_single_string', $slide_item->link, 'Slider section' ) : '';
							$readmore_button = ! empty( $slide_item->button_text ) ? apply_filters( 'formula_translate_single_string', $slide_item->button_text, 'Slider section' ) : '';
							// slide format.
							$slide_format   = ! empty( $slide_item->slide_format ) ? apply_filters( 'formula_translate_single_string', $slide_item->slide_format, 'Slider section' ) : '';
							$content_format = ! empty( $slide_item->content_format ) ? apply_filters( 'formula_translate_single_string', $slide_item->content_format, 'Slider section' ) : '';
							$sub_format     = 'center';
							switch ( $content_format ) {
								case 'left':
									$sub_format = 'baseline';
									break;
								case 'center':
									$sub_format = 'center';
									break;
								case 'right':
									$sub_format = 'end';
									break;
							}

							if ( $slide_format == 'customizer_repeater_slide_format_video' ) :
								$video_url = ! empty( $slide_item->video_url ) ? apply_filters( 'formula_translate_single_string', $slide_item->video_url, 'Slider section' ) : 'https://www.youtube.com/watch?v=kUl4xAwvm7s&list=PLXR1UeeO9dcfx8Wx_4Z-T-1NCw8ovnPQ8';
								endif;
								$open_new_tab = ! empty( $slide_item->open_new_tab ) ? apply_filters( 'formula_translate_single_string', $slide_item->open_new_tab, 'Slider section' ) : '';

						?>
						<div class="container slider-caption">
							<div class="caption-content">
								<figcaption class="caption-content " style="text-align: <?php echo $content_format; ?>;align-items: <?php echo $sub_format; ?>">
									<?php if ( ( $title != '' ) || ( $img_description != '' ) ) { ?>
										<?php if ( ! empty( $subtitle ) ) { ?>
											<span class="subtitle " ><?php echo $subtitle; ?></span>
										<?php } ?>
										<h2 class="title slider-selector"><?php echo $title; ?></h2>
										<p class="description"><?php echo $img_description; ?></p>
									<?php } if ( $readmore_button != '' ) { ?>
										<div class="m-top-40">
											<a href="<?php echo $readmorelink; ?>" class="thm-btn"
												<?php
												if ( $open_new_tab == 'yes' || $open_new_tab == '1' ) {
													echo "target='_blank'"; }
												?>
												>
												<?php echo $readmore_button; ?>
											</a>
										</div>
									<?php } ?>
								</figcaption>
							</div>
						</div>
				</div>
				<?php
			}
		} else {
					$activate_theme_data = wp_get_theme(); // getting current theme data.
					$activate_theme      = $activate_theme_data->name;
					if ( 'Formula' == $activate_theme || 'Formula Light' == $activate_theme ) {

						$slide_img      = 'slide.png';
						$slide_title    = 'Give Wings To Your Imaginations';
						$slide_subtitle = 'Explore Your Creativity';
						$slide_desc     = 'Take your dreams and imagination to the next level of your expectations';
						$slide_button   = 'Build Something Creative';
					}

					if ( 'Formula Dark' == $activate_theme ) {

						$slide_img      = 'slide-dark.jpg';
						$slide_title    = 'The Reality Is Everthing You Can Imagine';
						$slide_subtitle = 'Think Beyond Imaginations';
						$slide_desc     = 'Hustle in silence and let your success make the noise';
						$slide_button   = 'Join The Venture';
					}

					if ( 'Metaverse' == $activate_theme ) {

						$slide_img      = 'metaverse.jpg';
						$slide_title    = 'Metaverse Ecosystem For Growing New Projects';
						$slide_subtitle = 'Building The Metaverse';
						$slide_desc     = 'The Metaverse Is The Next Generation Of The Internet. As One Of Its Earliest Explorers, You Will Help Fuel Its Expansion And Share In The Benefits Of This Growth';
						$slide_button   = 'Open App';
					}

					if ( 'Medical Formula' == $activate_theme ) {

						$slide_img      = 'medical-formula.jpg';
						$slide_title    = 'Health Haven Hospital: Your Pathway to Wellness';
						$slide_subtitle = 'Healing with Heart: Your Health, Our Priority';
						$slide_desc     = 'Where healing begins: Our hospital provides compassionate care and state-of-the-art treatments to help you feel your best.';
						$slide_button   = 'Book Appointment Now';
					}

					if ( 'Education Formula' == $activate_theme ) {
						$slide_img      = 'education-formula.jpg';
						$slide_title    = 'Give Wings To Your Imaginations';
						$slide_subtitle = 'Explore Your Creativity';
						$slide_desc     = 'Take your dreams and imagination to the next level of your expectations';
						$slide_button   = 'Build Something Creative';
					}
					
				?>
				<div class="item home-section home-full-height" style="background-image:url(<?php echo awp_companion_plugin_url; ?>inc/formula/img/slider/<?php echo $slide_img; ?>);">
					<div class="container slider-caption">
						<figcaption class="caption-content" style="text-align: left;align-items: baseline;">
							<span class="subtitle"><?php echo esc_html( $slide_subtitle ); ?></span>
							<h2 class="title"><?php echo esc_html( $slide_title ); ?></h2>
							<p><?php echo esc_html( $slide_desc ); ?></p>
							<div class="m-top-40">
								<a href="#" class="thm-btn"><?php echo esc_html( $slide_button ); ?></a>
							</div>
						</figcaption>
					</div>
				</div>
				<?php
			}
		?>
	</div>
</section>
<?php } ?>
<script>
	jQuery(window).load(function(){
		jQuery("#slider-demo").owlCarousel({
			navigation: true, // Show next and prev buttons
			<?php if ( $formula_main_slider_autoplay_disable != false ) { ?>
				autoplay:  true,  // autoplay
			<?php } if ( $formula_main_slider_animation == true ) { ?>
				animateOut:  'fadeOut', // fadeout	
			<?php } ?>	
			autoplayTimeout: <?php echo $formula_main_slider_animation_speed; ?>, //autoplay speed
			autoplayHoverPause: true,
			smartSpeed: 800,
			singleItem:true,
			autoHeight:true,
			loop:true, // loop is true up to 1199px screen.
			nav:true, // is true across all sizes
			margin:0, // margin 10px till 960 breakpoint
			responsiveClass:true, // Optional helper class. Add 'owl-reponsive-' + 'breakpoint' class to main element.
			items: 1,
			dots: false,
			navText: ["PREV", "NEXT"]
		});
	});
</script>
<!-- /Slider Section -->
<div class="clearfix"></div>
