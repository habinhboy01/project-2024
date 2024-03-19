<?php
/*
	Template Name: Contatc Us
*/
get_header(); ?>

	<div class="container">
		<h1 class="title-contact"><?php echo get_field('title'); ?></h1>

		<div class="contact-map">
			<?php echo get_field('map'); ?>
		</div>

		<div class="row bg-contact">
			<div class="col-lg-6 col-md-6 col-12">
				<ul class="list-contact">
					<li>
						<?php if( have_rows('phone') ): ?>
						    <?php while( have_rows('phone') ): the_row(); ?>

					        <a href="tel:+0123456789">
					        	<?php echo get_sub_field('icon'); ?>

					        	<?php echo get_sub_field('text'); ?>
					        </a>

						    <?php endwhile; ?>
						<?php endif; ?>
					</li>


					<li>
						<?php if( have_rows('address') ): ?>
						    <?php while( have_rows('address') ): the_row(); ?>

					        <a href="https://goo.gl/maps/8Xvvef7ybMoSQJez5">
					        	<?php echo get_sub_field('icon'); ?>

					        	<?php echo get_sub_field('text'); ?>
					        </a>

						    <?php endwhile; ?>
						<?php endif; ?>
					</li>


					<li>
						<?php if( have_rows('email') ): ?>
						    <?php while( have_rows('email') ): the_row(); ?>

					        <a href="mailto:artrepublik@123.com">
					        	<?php echo get_sub_field('icon'); ?>

					        	<?php echo get_sub_field('text'); ?>
					        </a>

						    <?php endwhile; ?>
						<?php endif; ?>
					</li>
				</ul>
			</div>

			<div class="col-lg-6 col-md-6 col-12">
				<?php echo do_shortcode( '[contact-form-7 id="a8d50dc" title="Contact"]' ); ?>
			</div>
		</div>
	</div>

<?php get_footer(); ?>