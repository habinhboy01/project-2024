<?php

/**
 * template name: Home
 */

get_header()?>

	<?php $image = get_field('img-intro');

    if( !empty( $image ) ): ?>

        <img class="img-home" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

    <?php endif; ?>

    <div class="bg-home">
    	<div class="container">
    		<h1 class="title-home"><?php echo get_field('title-intro'); ?></h1>

    		<p class="intro-home"><?php the_field('description'); ?></p>

    		<form class="form-code">
    			<input type="text" name="code" placeholder="Mã đơn hàng">

    			<button type="submit">Tra cứu <i class="fa-sharp fa-regular fa-magnifying-glass"></i></button>
    		</form>
    	</div>
    </div>

    <!-- Dịch Vụ Chuyển Phát -->

    <div class="service-home">
       <div class="container">
           <p class="title-service text-center"><?php echo get_field('title-service'); ?></p>

           <p class="title-service-2 text-center"><?php echo get_field('title-service-2'); ?></p>

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

    <!-- Chào mừng đến với VTP Express -->

    <div class="mr-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-12">
                    <p class="title-service-2 title-wellcome"><?php echo get_field('title-wellcome'); ?></p>

                    <p class="title-service title-wellcome"><?php echo get_field('title-wellcome-2'); ?></p>

                    <p class="des-wellcome"><?php the_field('des-wellcome');?></p>

                    <div class="list-des">
                        <?php if( have_rows('list-des') ): ?>
                            <?php while( have_rows('list-des') ): the_row(); ?>

                                <p>
                                    <i class="fa-sharp fa-solid fa-check"></i> 
                                    <?php echo get_sub_field('text'); ?>
                                </p>

                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>

                    <a href="<?php echo get_field('link-learn-more'); ?>">
                        <p class="more-home"><?php echo get_field('learn-more'); ?></p>
                    </a>
                </div>

                <!-- ------------------------------------ -->

                <div class="col-lg-7 col-12">
                    <?php $image = get_field('img-well');

                    if( !empty( $image ) ): ?>

                        <img class="img-well" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Theo dõi Đơn Hàng của Bạn Dễ Dàng  -->

    <div class="bg-follow">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <?php $image = get_field('img-follow');

                    if( !empty( $image ) ): ?>

                        <img class="img-well img-follow" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

                    <?php endif; ?>
                </div>

                <div class="col-lg-6 col-12">
                    <p class="title-service title-wellcome"><?php echo get_field('title-follow'); ?></p>

                    <p class="title-service-2 title-wellcome"><?php echo get_field('title-follow-2'); ?></p>

                    <p class="des-wellcome"><?php the_field('des-follow');?></p>

                    <form class="form-code border-follow">
                        <input type="text" name="code" placeholder="Mã đơn hàng">

                        <button type="submit">Tra cứu <i class="fa-sharp fa-regular fa-magnifying-glass"></i></button>
                    </form>
                </div>
            </div>
        </div>


        <!-- Quy trình gửi hàng chuyên nghiệp -->

        <div class="bg-procedure">
            <div class="container">
                <p class="title-service text-center"><?php echo get_field('title-procedure'); ?></p>

                <p class="title-service-2 text-center"><?php echo get_field('title-procedure-2'); ?></p>

                <?php $image = get_field('img-procedure');

                if( !empty( $image ) ): ?>

                    <img class="img-procedure" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

                <?php endif; ?>
            </div>
        </div>

        <!-- VÌ SAO KHÁCH HÀNG TIN TƯỞNG VTP EXPRESS -->

        <div class="container">
            <p class="title-service text-center"><?php echo get_field('title-why'); ?></p>

            <p class="des-why"><?php echo get_field('des-why'); ?></p>

            <div class="row">
                <?php if( have_rows('list-why') ): ?>
                    <?php while( have_rows('list-why') ): the_row();
                        $image = get_sub_field('icon');
                        $picture = $image['sizes']['thumbnail']; ?>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="list-why">
                                <div class="list-why-2">
                                    <img class="icon-why" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">

                                    <p class="title-why"><?php echo get_sub_field('title'); ?></p>
                                </div>

                                <div class="content-why"><?php the_sub_field('content'); ?></div>
                            </div>
                        </div>

                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <!-- Thông Tin Liên Hệ -->

    <div class="bg-contact-home">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12">
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

                <div class="col-lg-6 col-12">
                    <p class="map-address active-map"><?php echo get_field('address-map'); ?></p>

                    <p class="map-address"><?php echo get_field('address-map-2'); ?></p>
                </div>
            </div>
        </div>
    </div>

    <!-- tin tức -->

    <div class="bg-follow">
        <div class="container">
            <p class="title-service text-center"><?php echo get_field('title-news'); ?></p>

            <p class="title-service-2 text-center"><?php echo get_field('title-news-2'); ?></p>

            <div class="row mr-top-2">
                <?php
                    $newsHome = get_field('list-news');

                    $args = array(  
                        'post_status' => 'publish',
                        'post_type' => 'post',
                        'posts_per_page' => 4,
                        'cat' => $newsHome,
                        'order' => 'date',          
                    );
                ?>
                <?php $getposts = new WP_query($args); ?>
                <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>

                    <div class="col-lg-3 col-md-6 col-12">
                        <a href="<?php the_permalink(); ?>">
                            <div class="list-news-home">
                                <?php the_post_thumbnail('full'); ?>

                                <div class="list-news-home-2">
                                    <div class="content-news-home">
                                        <h4 class="title-news-home"><?php the_title(); ?></h4>

                                        <div class="text-news-home"><?php the_excerpt();?></div>
                                    </div>

                                    <div class="content-news-home-2"></div>
                                </div>
                            </div>  
                        </a>
                    </div>

                <?php endwhile; wp_reset_postdata(); ?>
            </div>
        </div>
    </div>


    <!-- đối tác -->

    <div class="bg-partner">
        <div class="container">
            <p class="title-service text-center"><?php echo get_field('title-partner'); ?></p>
        </div>

        <div class="swiper slider-intro">
            <div class="swiper-wrapper">
                <?php if( have_rows('list-partner') ): ?>
                    <?php while( have_rows('list-partner') ): the_row();
                        $image = get_sub_field('img');
                        $picture = $image['sizes']['thumbnail']; ?>

                        <div class="swiper-slide">

                            <img class="img-partner" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">

                        </div>

                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>

<?php get_footer() ?>