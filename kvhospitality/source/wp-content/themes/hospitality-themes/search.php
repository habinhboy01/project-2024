<?php get_header(); ?>

<div class="bg-content">
    <div class="container">
        <div class="row">

            <p class="text-result">Kết quả tìm kiếm cho "<?php echo get_search_query() ?>"</p>
            
            <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
            
                <div class="col-lg-4 col-md-6 col-12">
		        	<div class="listPage">
			        	<div class="list-restaurant mr-bottom-2">
			        		<a href="<?php the_permalink(); ?>">
			        			<div class="img-restaurant">
			        				<?php the_post_thumbnail('full'); ?>
			        			</div>

			        			<div class="restaurant-home">
			        				<h3><?php the_title(); ?></h3>

			        				<div><?php the_excerpt();?></div>

			        				<span class="read-more">Xem thêm</span>
			        			</div>
			        		</a>
			        	</div>
			        </div>
		        </div>
            
            <?php endwhile; ?>
            <?php else : ?>
            
            <div class="post">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="post-content">
                            <div class="post-title">Không có kết quả cho "<?php echo esc_html(get_search_query()); ?>"
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <?php endif; ?>

        </div>
    </div>
</div>

<?php get_footer(); ?>