<?php
$neom_woocommerce_disabled       = get_theme_mod( 'neom_woocommerce_disabled', false );
$neom_woocommerce_area_title     = get_theme_mod( 'neom_woocommerce_area_title', 'Meet The <span class="primary-color">woocommerce</span>' );
$neom_woocommerce_area_des       = get_theme_mod( 'neom_woocommerce_area_des', '' );
$neom_woocommerce_container_size = get_theme_mod( 'neom_woocommerce_container_size', 'container-full' );
// $neom_woocommerce_content        = get_theme_mod( 'neom_woocommerce_content', NEOM_WOOCOMMERCE_DEFAULT_CONTENT );
if ( true === $neom_woocommerce_disabled ) : ?>
<section id="woocommerce-section" class="woocommerce-section theme-default woocommerce-home shapes-section">
	<div class="<?php echo esc_attr( $neom_woocommerce_container_size ); ?>">
	<?php if ( ! empty( $neom_woocommerce_area_title ) || ! empty( $neom_woocommerce_area_des ) ) : ?>
			<div class="theme-columns-area">
				<div class="theme-column-12">
					<div class="heading-default text-center wow fadeInUp">
						<?php if ( ! empty( $neom_woocommerce_area_title ) ) : ?>
							<h3><?php echo wp_kses_post( $neom_woocommerce_area_title ); ?></h3>
							<span class="separator"><span><span></span></span></span>
						<?php endif; ?>
						<?php if ( ! empty( $neom_woocommerce_area_des ) ) : ?>
							<p><?php echo wp_kses_post( $neom_woocommerce_area_des ); ?></p>
						<?php endif; ?>	
					</div>
				</div>
			</div>
		<?php
		endif;

		$args = array(
			'post_type' => 'product',
		);
		/* Exclude hidden products from the loop */
		$args['tax_query'] = array(
			array(
				'taxonomy' => 'product_visibility',
				'field'    => 'name',
				'terms'    => 'exclude-from-catalog',
				'operator' => 'NOT IN',
			),
		);
		?>
		<div class="theme-columns-area">
			<div class="theme-column-12">
				<div class="woocommerce-carousel owl-carousel owl-theme">
					<?php
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) :
						$loop->the_post();
						global $product;
						?>
					<div class="woocommerce-module">
						<?php if ( $product->is_on_sale() ) : ?>
							<?php echo apply_filters( 'woocommerce_sale_flash', '<span class="onsale">' . esc_html__( 'On Sale!', 'formula' ) . '</span>', $loop->post, $product ); ?>
						<?php endif; ?>
						<figure class="woocommerce-avatar">
							<a href="<?php the_permalink(); ?>">
								<img class="img-responsive" src="<?php echo the_post_thumbnail_url(); ?>" alt="Jane Smith">
							</a>
							<figcaption>
								<div class="woo-overlay">
									<div class="woo-overlay-inner">
										<div class="woo-icons">
											<a href="<?php echo get_permalink(); ?>" class="woo-product-view"><i class="fas fa-eye"></i></a> 
											<?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>
										</div>
									</div>
								</div>
								<p class="price"><?php echo $product->get_price_html(); ?></p>
								<h5 class="entry-title">
									<a  href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a>
								</h5>
							</figcaption>
						</figure>
					</div>
					<?php endwhile; ?>
					<?php
					wp_reset_postdata();
					?>
				</div>
			</div>
		</div>
	</div>
</section>

<script>
	jQuery( document ).ready(function() {
		jQuery(".woocommerce-carousel").owlCarousel({
			rtl: jQuery("html").attr("dir") == 'rtl' ? true : false,
			nav: true,
			navText: ['<i class="fa fa-arrow-left"></i>', '<i class="fa fa-arrow-right"></i>'],
			margin: 30,
			stagePadding: 0,
			autoplay: true,
			autoplayTimeout: 6000,
			loop: false,
			<?php if ( true !== $neom_woocommerce_dots ) { ?>
				dots: false,
			<?php } ?>
			//center: true,
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
					items: 3,
				}
			}
		});
	});
	</script>
<?php endif; ?>
