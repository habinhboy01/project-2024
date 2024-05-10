<?php get_header(); ?>

	<div class="bg-cart">
		<div class="container">
			<p>Kết quả tìm kiếm:</p>

			<h1 class="title-result"><?php the_search_query(); ?></h1>

			<div class="row">
				<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>

						<div class="col-lg-4 col-md-6 col-12">
							<div class="content-product-woo">
								<a href="<?php the_permalink(); ?>">
									<?php the_post_thumbnail('full'); ?>

									<h3 class="title-checkout"><?php the_title(); ?></h3>
								</a>
							</div>
						</div>

			       <?php endwhile; wp_reset_postdata(); ?>
			    <?php
				else :
					echo '<p>No search results found!</p>';

				endif; ?>
			</div>
		</div>
	</div>


<?php get_footer(); ?>