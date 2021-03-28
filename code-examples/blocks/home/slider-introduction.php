<?php

// create id attribute allowing for custom "anchor" value.
$id = 'mio-introduction-slider' . $block['id'];
if ( ! empty( $block['anchor'] ) ) {
	$id = $block['anchor'];
}

// create class attribute allowing for custom "classname" and "align" values.
$class_name = 'mio-introduction-slider pb-lg-4';
if ( ! empty( $block['classname'] ) ) {
	$class_name .= ' ' . $block['classname'];
}

?>

<!-- page Header -->
<section id="<?php echo esc_attr( $id ); ?>" class="<?php echo esc_attr( $class_name ); ?>">
	<!-- top image strip -->
	<div class="image-strip">
		<div class="container-fluid p-0">
			<div class="row g-0 justify-content-lg-end">
				<div class="col-12 col-lg-9">
					<div class="slider-box">

						<div id="carousel-<?php echo esc_attr( $id ); ?>" class="carousel slide" data-bs-ride="carousel">
							<div class="carousel-inner">
								<?php if ( get_field( 'introduction-slider-list-items' ) ) : ?>
									<?php $counter = 0; ?>
									<?php while ( the_repeater_field( 'introduction-slider-list-items' ) ) : ?>
										<div class="carousel-item <?php if ( $counter == 0 ) { echo esc_attr( 'active' ); } ?>">
											<?php
												$slide_image_id  = get_sub_field( 'slide-image' );
												$slide_image_url = wp_get_attachment_image_url( $slide_image_id, 'image-21-9' );
											?>
											<img class="img-fluid" src="<?php echo esc_attr( $slide_image_url ); ?>">
										</div>
										<?php $counter++; ?>
									<?php endwhile; ?>
								<?php endif; ?>
							</div>
							<button class="carousel-control-prev" type="button" data-bs-target="#carousel-<?php echo esc_attr( $id ); ?>" data-bs-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="visually-hidden">Previous</span>
							</button>
							<button class="carousel-control-next" type="button" data-bs-target="#carousel-<?php echo esc_attr( $id ); ?>" data-bs-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="visually-hidden">Next</span>
							</button>
						</div>

						<script charset="utf-8">
							document.addEventListener("DOMContentLoaded", function(event) {
								var myCarousel = document.getElementById('carousel-<?php echo esc_attr( $id ); ?>');

								myCarousel.addEventListener( 'slide.bs.carousel', function(event) {
									var slideLinks = document.querySelectorAll('.slide-link-<?php echo esc_attr( $id ); ?>');

									slideLinks.forEach(function(item) {
										item.classList.remove('active');
									});

									var activeSlideLink = document.getElementById('slide-link-<?php echo esc_attr( $id ); ?>' + '-' + event.to);

									activeSlideLink.classList.add('active');
								});
							});
						</script>

					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- bottom title strip -->
	<div class="title-strip">
		<div class="container-fluid p-0">
			<div class="row g-0">
				<div class="col-12 col-lg-5">
					<div class="title-box rounded-end">
						<!-- transform this into a button -->
						<?php if ( get_field( 'introduction-slider-list-items' ) ) : ?>
							<?php $counter = 0; ?>
							<?php while ( the_repeater_field( 'introduction-slider-list-items' ) ) : ?>
								<a href="<?php the_sub_field( 'slide-url' ); ?>" id="slide-link-<?php echo esc_attr( $id ); ?>-<?php echo esc_attr( $counter ); ?>" class="h1 slide-link slide-link-<?php echo esc_attr( $id ); ?> <?php if ( $counter == 0 ) { echo esc_attr( 'active' ); } ?> text-wrap text-secondary bg-white">
									<?php the_sub_field( 'slide-title' ); ?>
								</a>
								<?php $counter++; ?>
							<?php endwhile; ?>
						<?php endif; ?>
						<div class="design-element rounded-top"></div>
					</div>
				</div>
				<div class="col-12 col-lg-7"></div>
			</div>
		</div>
	</div>
</section>
