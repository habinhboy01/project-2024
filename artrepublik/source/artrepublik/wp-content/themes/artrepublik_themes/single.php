<?php get_header(); ?>

	<div class="container">
		<div class="bg-single">
			<div class="row">
				<ul class="title-category title-single">
					<li>
						<?php if (have_posts()) : ?>
							<?php while (have_posts()) : the_post(); ?>

								<?php the_author_posts_link(); ?>

							<?php endwhile;?>
						<?php endif; ?>				
					</li>

					<li><?php echo get_the_date(); ?></li>
				</ul>

				<!-- ------------------- -->

				<h1 class="text-single"><?php the_title(); ?></h1>

				<div class="img-single">
					<?php the_post_thumbnail('full'); ?>
				</div>
			</div>

			<!-- nội dung -->

			<div class="content-single"><?php the_content(); ?></div>
		</div>
	</div>


<?php get_footer(); ?>