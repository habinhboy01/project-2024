<footer>
    <div class="footer-wrap" style="--bg: url('<?php echo get_field('footer-background','option') ?>') ">
        <div class="container footer">
            <div class="company-name">
                <?php echo get_field('company-name','option') ?>
            </div>

            <div class="row">
            	<div class="col-lg-4 col-12">
            		<div class="footer-item">
                        <div class="item-title"><?php echo get_field('title-branch', 'option') ?></div>
                    </div>

                    <ul class="item-info">
                    	<?php if( have_rows('address-branch', 'option') ): ?>
                    		<?php while( have_rows('address-branch', 'option') ): the_row(); ?>

		                        <li>
		                            <?php echo get_sub_field('icon') ?>
		                            <span><?php  echo get_sub_field('text') ?></span>
		                        </li>

                    		<?php endwhile; ?>
                		<?php endif; ?>
                    </ul>
            	</div>

            	<!-- ----------------------- -->

            	<div class="col-lg-4 col-12">
            		<div class="footer-item">
                        <div class="item-title"><?php echo get_field('title-branch-2', 'option') ?></div>
                    </div>

                    <ul class="item-info">
                    	<?php if( have_rows('address-branch-2', 'option') ): ?>
                    		<?php while( have_rows('address-branch-2', 'option') ): the_row(); ?>

		                        <li>
		                            <?php echo get_sub_field('icon') ?>
		                            <span><?php  echo get_sub_field('text') ?></span>
		                        </li>

                    		<?php endwhile; ?>
                		<?php endif; ?>
                    </ul>
            	</div>

            	<!-- ------------------------- -->

            	<div class="col-lg-4">
                    <div class="footer-item">
                        <div class="item-title">THÔNG TIN CHUNG</div>
                        <?php 
                        wp_nav_menu(array(
                            'theme_location' => 'menu-3',
                            'menu-class' => 'menu-footer'
                        ))
                        ?>
                    </div>
                </div>
            </div>

            <!-- socials -->

            <div class="socials">
                <?php if(have_rows('socials', 'option')):while(have_rows('socials', 'option')): the_row(); ?>
                <div class="social">

                    <a href="<?php echo get_sub_field('link') ?>"><?php echo get_sub_field('icon') ?></a>

                </div>

                <?php endwhile;endif ?>
            </div>
        </div>
    </div>

    <div class="footer-copyright">
        <?php echo get_field('copyright', 'option') ?>
    </div>

   <a class="back-top-rocket" href="#"><i class="fa-brands fa-space-awesome"></i></i></a>
</footer>


<!-- Thư Viện jquery -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<!-- bootstrap -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>

<!-- Thư Viện swiper -->

<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<!-- animetion -->

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
AOS.init();
</script>

<script src="<?php bloginfo('template_directory')?>/js/gsap.js"></script>
<script src="<?php bloginfo('template_directory')?>/js/app.js"></script>
<script src="<?php bloginfo('template_directory')?>/js/style.js"></script>
<script src="<?php bloginfo('template_directory')?>/js/tracking.js"></script>


<?php wp_footer() ?>

</body>

</html>