<?php get_header(); ?>

	<div class="container">
		<h1 class="title-page-category"><?php single_cat_title(); ?></h1>

		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>

				<div class="row border-perspective">
					<ul class="title-category title-perspective2">
						<li><?php single_cat_title(); ?></li>

						<li><?php echo get_the_date(); ?></li>
					</ul>

					<div class="col-lg-5 col-md-5 col-5">
						<a class="img-page-category" href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail('full'); ?>
						</a>
					</div>

					<div class="col-lg-7 col-md-7 col-7">
						<h1 class="text-market title-perspective3">
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</h1>

						<p class="text-market2 title-perspective2"><?php the_author(); ?></p>

						<div class="title-market4 text-page-category"><?php the_excerpt(); ?></div>
					</div>
				</div>

			<?php endwhile;?>
		<?php endif; ?>


		<!-- phân trang -->

		<?php if(paginate_links()!='') {?>
			<div class="pagination">
				<?php
				global $wp_query;
				$big = 999999999;
				echo paginate_links( array(
					'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
					'format' => '?paged=%#%',
					'prev_text'    => __('<'),
					'next_text'    => __('>'),
					'current' => max( 1, get_query_var('paged') ),
					'total' => $wp_query->max_num_pages
					) );
			    ?>
			</div>
		<?php } ?>
	</div>

<?php get_footer(); ?>