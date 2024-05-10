<?php

/**
 * template name: Services
 */

get_header()?>

	<div class="bg-services">
	    <div class="video-service">
	        <?php
	        $file = get_field('img-service');
	        if( $file ): ?>
	            <video autoplay muted loop playsinline>
	                <source src="<?php echo $file['url']; ?>" type="">
	            </video>
	        <?php endif; ?>
	    </div>

		<h1><?php the_title(); ?></h1>
	</div>

	<!-- -------------- -->

	<div class="bg-services-2">
		<div class="container">

			<!-- Dịch Vụ Chuyển Phát -->

			<div class="bg-partner">
		        <div class="row">
		            <?php if( have_rows('list-service') ): ?>
			            <?php while( have_rows('list-service') ): the_row();
			                $image = get_sub_field('img');
			                $picture = $image['sizes']['thumbnail']; 
			                $link = get_sub_field('link'); ?>

				            <div class="col-lg-3 col-md-6 col-6">
				                <div class="list-service">
				                    <a href="<?php echo $link;?>">
				                        <img src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">

				                        <p><?php echo get_sub_field('title'); ?></p>
				                    </a>
				                </div>
				            </div>

			            <?php endwhile; ?>
		            <?php endif; ?>
		        </div>
		    </div>
		</div>
	</div>


<?php get_footer(); ?>