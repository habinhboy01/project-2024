<?php

/**
 * template name: Contact
 */

get_header()?>

	<div class="bg-services">
		<?php the_post_thumbnail('full', ['class' => 'img-service']); ?>

		<h1><?php the_title(); ?></h1>
	</div>
	
	<!-- ----------------------- -->

	<div class="bg-services-2">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 col-12">
					<div class="bg-form">
						<p class="title-service title-wellcome text-center"><?php the_title(''); ?></p>

						<?php echo do_shortcode('[contact-form-7 id="4703edd" title="Liên hệ"]'); ?>
					</div>
				</div>


				<div class="col-lg-5 col-12">

					<div class="contact-home">
	                    <p class="title-service title-wellcome"><?php echo get_field('title-contact'); ?></p>

	                    <ul class="list-address active-tab">
	                        <li><i class="fa-regular fa-car-building"></i></li>

	                        <li><?php the_field('address'); ?></li>
	                    </ul>

	                    <ul class="list-address">
	                        <li><i class="fa-regular fa-car-building"></i></li>

	                        <li><?php the_field('address-2'); ?></li>
	                    </ul>
	                </div>

				</div>
			</div>
		</div>
	</div>

	<!-- --------------- -->

	<div class="contact-map">
        <p class="map-address active-map"><?php echo get_field('address-map'); ?></p>

        <p class="map-address"><?php echo get_field('address-map-2'); ?></p>
    </div>


<?php get_footer(); ?>