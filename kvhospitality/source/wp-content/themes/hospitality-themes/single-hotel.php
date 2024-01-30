<?php  get_header() ?>

<div class="container">
    <div class="grid-imgs">

        <?php if(have_rows('room-img')): while(have_rows('room-img')): the_row(); ?>

        <div class="grid-item">
            <a href="<?php echo get_sub_field('img') ?>">
                <img src="<?php echo get_sub_field('img') ?>" alt="">
            </a>
        </div>

        <?php endwhile;endif ?>
    </div>
    
    <div class="row booking-details">
        <div class="col-lg-8">
            <div class="room-detail">
				<div class="room-guest">
					<?php
global $post;
$taxonomy = 'category-hotel';
$categories = get_the_terms($post->ID, $taxonomy);

    $category_names = array();

    foreach ($categories as $category) {
        $category_names[] = $category->name;
    }

    echo implode(', ', $category_names);

?>
				</div>


                <div class="room-name"> <a href="<?php the_permalink() ?>"><?php the_title() ?></a></div>

                <p class="address-hotel"><i class="fal fa-map-marker-alt"></i> <?php echo get_field('address'); ?></p>

                <div class="room-short-des des-detail">
                    <?php the_content() ?>
                </div>
            </div>

            <div class=" row room-facilities">
                <div class="room-facilites-title"><?php echo get_field('title-amenities')?></div>

                <?php if(have_rows('room-facilities')): while(have_rows('list-amenities')): the_row(); ?>
                <div class="col-6">
                    <div class="facility">
                        <?php echo get_sub_field("svg") ?>
                        <span><?php echo get_sub_field("text") ?></span>
                    </div>
                </div>

                <?php endwhile;endif ?>
            </div>

            <div class=" room-rules">
                <div class="room-rules-text"><?php echo get_field('title-rules')?></div>
                
                <ul style="list-style: none">
                    <?php if(have_rows('room-rules')): while(have_rows('room-rules')): the_row(); ?>
                    <li><?php echo get_sub_field('rule')?></li>
                    <?php endwhile;endif ?>

                </ul>
            </div>
            
            <!--loại chỗ ở-->

            <div class="room-rules-text"><?php echo get_field('title-type')?></div>
            
            <?php if( have_rows('list-type') ): ?>
                <?php while( have_rows('list-type') ): the_row(); 
                	$image = get_sub_field('img');
	                $picture = $image['sizes']['thumbnail']; 
	                ?>
                    
                    <div class="bg-detail-hotel">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-12">
                                <img class="img-detail-hotel" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
                            </div>
                            
                            <div class="col-lg-8 col-md-8 col-12">
                                <div class="content-detail-hotel">
                                    <h3 class="title-detail-hotel"><?php echo get_sub_field('title'); ?></h3>
                                    
                                    <div id="content-detail-hotel-2" class="post-con"><?php the_sub_field('content'); ?></div>
                                    
                            		<p class="price-hotel">
    				        			<span>Chỉ từ:</span>
    
    				        			<b><?php echo get_sub_field('price'); ?></b>
    
    				        			<span>/ Đêm</span>
    				        		</p>
    				        	</div>
                            </div>
                        </div>
                    </div>

                <?php endwhile; ?>
            <?php endif; ?>
        </div>

        
        <div class="col-lg-4">
            <div class="booking">
                <p class="booking-title">Đặt phòng của bạn</p>
                <?php echo do_shortcode('[contact-form-7 id="3660791" title="Detail Hotel"]')?>
            </div>
        </div>
    </div>

</div>


<?php  get_footer() ?>