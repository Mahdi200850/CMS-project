<?php
	$neom_blog_disabled       = get_theme_mod( 'neom_blog_disabled', true );
	$neom_blog_area_title     = get_theme_mod( 'neom_blog_area_title', 'Our Blogs' );
	$neom_blog_area_des       = get_theme_mod( 'neom_blog_area_des', 'Stay updated with the latest news by reading our articles written by content writers in the industry.' );
	$neom_blog_count          = get_theme_mod( 'neom_blog_count', array( 'slider' => 3 ) );
	$neom_blog_design         = get_theme_mod( 'neom_blog_design', 'design1' );
	$neom_blog_container_size = get_theme_mod( 'neom_blog_container_size', 'container-full' );
	$neom_theme_blog_category = get_theme_mod( 'neom_theme_blog_category' );
if ( true === $neom_blog_disabled ) {
	?>	
<section id="post-section" class="post-section theme-default blog-home shapes-section">
	<div class="<?php echo esc_attr( $neom_blog_container_size ); ?>">
		<?php if ( ! empty( $neom_blog_area_title ) || ! empty( $neom_blog_area_des ) ) : ?>
			<div class="theme-columns-area">
				<div class="theme-column-12">
					<div class="heading-default text-center wow fadeInUp">
						<?php if ( ! empty( $neom_blog_area_title ) ) : ?>
							<h3><?php echo wp_kses_post( $neom_blog_area_title ); ?></h3>
							<span class="separator"><span><span></span></span></span>
						<?php endif; ?>
						<?php if ( ! empty( $neom_blog_area_des ) ) : ?>
							<p><?php echo wp_kses_post( $neom_blog_area_des ); ?></p>
						<?php endif; ?>	
					</div>
				</div>
			</div>
		<?php endif; ?>
		<div class="theme-columns-area">
			<div class="theme-column-12">
				<div class="post-carousel owl-carousel owl-theme">
					<?php
					$neom_blog_args = array(
						'post_type'      => 'post',
						'posts_per_page' => 3,
						'category__in'   => $neom_theme_blog_category,
						'post__not_in'   => get_option( 'sticky_posts' ),
					);

					$neom_wp_query = new WP_Query( $neom_blog_args );
					if ( $neom_wp_query ) {
						$post_count = 0;
						while ( $neom_wp_query->have_posts() ) :
							$neom_wp_query->the_post();

							?>
								<article class="post-items">
								<?php if ( has_post_thumbnail() ) { ?>
										<figure class="post-image 
											<?php if ( 'design1' === $neom_blog_design ) { ?>
												post-image-absolute 
											<?php } ?>">
											<div class="featured-image">
												<a href="<?php echo esc_url( get_permalink() ); ?>" class="post-hover">
													<?php the_post_thumbnail(); ?>
												</a>
											</div>
										</figure>
									<?php } ?>
									<div class="post-content">
										<span class="post-date"> <a href="<?php echo esc_url( get_month_link( get_post_time( 'Y' ), get_post_time( 'm' ) ) ); ?>"><span><?php echo esc_html( get_the_date( 'j' ) ); ?></span><?php echo esc_html( get_the_date( 'M, Y' ) ); ?></a> </span>
									<?php
									if ( is_single() ) :

										the_title( '<h5 class="post-title">', '</h5>' );

										else :

											the_title( sprintf( '<h5 class="post-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h5>' );

											endif;
										?>

										<div class="post-footer">
											<?php
											$neom_blog_readmore_disabled = get_theme_mod( 'neom_blog_readmore_disabled', true );
											if ( true === $neom_blog_readmore_disabled ) {
												the_excerpt();
											} else {
												the_content(
													sprintf(
														__( 'Read More', 'neom-blog' ),
														'<span class="screen-reader-text">  ' . esc_html( get_the_title() ) . '</span>'
													)
												);
											}
											?>
											<span class="post-count">
											<?php
											if ( $post_count < 9 ) :
												$post_count = $post_count + 1;
												echo sprintf( esc_html( '0 %s', 'neom-blog' ), $post_count );
												else :
													echo esc_html( $post_count + 1 );
													endif;
												?>
											</span>
										</div>
									</div>
								</article>
								<?php
								endwhile;
					}
						wp_reset_postdata();
					?>
				</div>

			</div>
		</div>
		<?php
		$neom_blog_button_disabled = get_theme_mod( 'neom_blog_button_disabled', true );
		$neom_blog_button_text     = get_theme_mod( 'neom_blog_button_text', 'Show More' );
		$neom_blog_button_link     = get_theme_mod( 'neom_blog_button_link', '#' );
		if ( true === $neom_blog_button_disabled ) {
			if ( ! empty( $neom_blog_button_text ) ) :
				?>
				<div class="blog-button" style="text-align:center; margin-top:15px;">
					<a href="<?php echo esc_url( $neom_blog_button_link ); ?>" target='_blank' 
						class="awp-btn awp-btn-primary awp-btn-bubble"><?php echo esc_html( $neom_blog_button_text ); ?> 
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

<script>
	jQuery( document ).ready(function() {
		jQuery(".post-carousel").owlCarousel({
			rtl: jQuery("html").attr("dir") === 'rtl', // Simplified check
			navText: ['<i class="fa fa-arrow-left"></i>', '<i class="fa fa-arrow-right"></i>'],
			margin: 30,
			stagePadding: 15,
			autoplay: true,
			autoplayTimeout: 6000,
			loop: false,
			dots: false,
			animateOut: 'fadeOut',
			animateIn: 'fadeIn',
			responsive: {
				0: {
					items: 1,
					nav: true // Added here to make navigation appear on mobile screens
				},
				601: {
					items: 2,
					nav: true
				},
				768: {
					items: 2,
					nav: true
				},
				992: {
					items: 3,
					nav: false // Navigation hidden for larger screens
				}
			}
		});
	});
</script>
	<?php } ?>
