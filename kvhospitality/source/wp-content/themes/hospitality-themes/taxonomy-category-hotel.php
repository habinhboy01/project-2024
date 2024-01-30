<?php get_header(); ?>

	<div class="bg-intro">
		<?php
			$term = get_queried_object();
			$image = get_field('img-category', $term);
		?>

		<?php if( $image ): ?>
			<img class="img-intro" src="<?php echo $image['url']; ?>">
		<?php endif; ?>
	</div>


	<!-- form tìm kiếm -->

	<div class="container">
		<div class="hotel-search">
			<?php echo do_shortcode('[csw_search_form]'); ?>
		</div>
	</div>

	<!-- ------------------------- -->

	<div class="bg-content">
		<div class="container">

			<div class="row">
				<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>

				        <div class="col-lg-4 col-md-6 col-12">
				        	<div class="list-restaurant mr-bottom-2">
				        		<a href="<?php the_permalink(); ?>">
				        			<div class="img-restaurant">
				        				<?php the_post_thumbnail('full'); ?>
				        			</div>

				        			<div class="restaurant-home">
				        				<ul class="list-star">
				        					<li><i class="fas fa-star"></i></li>
				        					<li><i class="fas fa-star"></i></li>
				        					<li><i class="fas fa-star"></i></li>
				        					<li><i class="fas fa-star"></i></li>
				        					<li><i class="fas fa-star"></i></li>
				        				</ul>

				        				<h3><?php the_title(); ?></h3>

				        				<div><?php the_excerpt();?></div>

						        		<p class="price-hotel">
						        			<span>Chỉ từ:</span>

						        			<b><?php echo get_field('price'); ?></b>

						        			<span>/ Đêm</span>
						        		</p>
				        			</div>
				        		</a>
				        		
				        		<ul class="list-read-more">
								    
								    <li>
										<a href="<?php the_permalink(); ?>">
											<span class="read-more">Xem thêm</span>
										</a>
									</li>
									
									<li>
										<a href="<?php the_permalink(); ?>">
											<span class="read-more">Đặt phòng</span>
										</a>
									</li>
								</ul>
				        	</div>
				        </div>

					<?php  endwhile;?>
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
							'prev_text'    => __('<i class="fas fa-chevron-left"></i>'),
							'next_text'    => __('<i class="fas fa-chevron-right"></i>'),
							'current' => max( 1, get_query_var('paged') ),
							'total' => $wp_query->max_num_pages
							) );
					    ?>
					</div>
				<?php } ?>
			</div>

		</div>
	</div>

<?php get_footer(); ?>