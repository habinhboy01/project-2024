<?php get_header(); ?>

	<div class="bg-intro bg-intro-2">
		<?php the_post_thumbnail('full', ['class' => 'img-intro']); ?>

		<h1><?php the_title()?></h1>
	</div>

	<!-- đường dẫn breadcrumb -->

	<div class="breadcrumb-intro">
		<div class="container">	
			<?php

				if ( function_exists('yoast_breadcrumb') ) {

				 yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );

				}

			?>
		</div>
	</div>

	<!-- ------------------------- -->

	
	<div class="bg-content">
		<div class="container" style="font-family: 'DM Sans', sans-serif;">
		    <div class="row">
		        <div class="col-lg-8">
		            <div class="post-thumb">
		                <?php the_post_thumbnail() ?>
		            </div>
		            <?php
				$categories = get_the_category();
				if ($categories) {
					echo '<i class="fas fa-folder-open"></i> <span>  ';
					foreach ($categories as $category) {
						echo '<a style="color: #000;margin: 20px 0;display: inline-block;" href="' . esc_url(get_category_link($category->term_id)) . '">' . esc_html($category->name) . '</a> ';
					}
					echo '</span>';
				}
				?>
		            <br>
		            <div class="post-det">
		                <span style="color: #727272;font-size: 13px;"> <i class="fal fa-clock"></i></span>
		                <span style="color: #727272; font-size: 13px;"> <?php echo get_the_date('d/m/Y')?></span>
		            </div>
		            
		            <!-- book lich tahm quan -->

            		
		            
		            <div class="post-con">
		                <?php the_content() ?>
		            </div>
		            <div id="share-buttons">
		                <a href="https://stackoverflow.com/" class="facebook" target="blank"><i
		                        class="fab fa-facebook-f"></i></a>
		                <a href="https://stackoverflow.com/" class="twitter" target="blank"><i class="fab fa-twitter"></i></a>
		            </div>

		            <?php comments_template()?>

		        </div>

		        <div class="col-lg-4">
		            <div class="container booking-ticket">
            		    <p class="booking-title">Book Lịch Golf</p>
            		    
            		    <?php echo do_shortcode('[contact-form-7 id="d59ad34" title="Gửi Yêu Cầu Book Lịch Golf"]')?>
            		</div>
		        </div>
		    </div>
		</div>
	</div>

<?php get_footer(); ?>