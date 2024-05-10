<?php get_header(); ?>

	<div class="bg-services">
		<?php 
			$term = get_queried_object();
			$image = get_field('image', $term);
		?>

		<img class="img-service" src="<?php echo $image['url']; ?>">

		<h1><?php single_cat_title(); ?></h1>
	</div>


	<!-- -------------------------------- -->

	<div class="bg-cate">
		<div class="container">

			<!-- bài nổi bật -->

			<div class="row">
				<?php
				  $args = array(
				  		'post_status' => 'publish',
						'post_type' => 'post',
				        'posts_per_page' => 2, //Số lượng bài viết muốn lấy 
				        'meta_key' => 'meta-checkbox',
				        'meta_value' => 'yes'
				    );

				    $featured = new WP_Query($args);
				?>

				<?php
				if ($featured->have_posts()): while($featured->have_posts()): $featured->the_post(); ?>
					<?php if ( has_post_thumbnail()) : ?>

						<div class="col-lg-6 col-12">
							<div class="child-cate">
								<a class="img-category img-category-2" href="<?php the_permalink(); ?>">
									<?php the_post_thumbnail('full'); ?>		
								</a>

								<?php
									$categories = get_the_category();
									if ($categories) {
										echo '<p class="cate-news">';
										foreach ($categories as $category) {
											echo esc_html($category->name);
										}
										echo '</p>';
									}
								?>
								
								<a href="<?php the_permalink(); ?>">
									<h3 class="title-category"><?php the_title(); ?></h3>
								</a>

								<div class="text-category"><?php the_excerpt();?></div>
							</div>
						</div>

					<?php endif; ?>
				<?php
				endwhile;
				endif;
				?>
			</div>

			<!-- ------------------------ -->

			<div class="row">
				<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>

						<div class="col-lg-4 col-md-6 col-12">
							<div class="child-cate">
								<a class="img-category" href="<?php the_permalink(); ?>">
									<?php the_post_thumbnail('full'); ?>		
								</a>

								<?php
									$categories = get_the_category();
									if ($categories) {
										echo '<p class="cate-news">';
										foreach ($categories as $category) {
											echo esc_html($category->name);
										}
										echo '</p>';
									}
								?>
								
								<a href="<?php the_permalink(); ?>">
									<h3 class="title-category"><?php the_title(); ?></h3>
								</a>

								<div class="text-category"><?php the_excerpt();?></div>
							</div>
						</div>

					<?php endwhile;?>
				<?php endif; ?>
			</div>

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

<?php get_footer(); ?>