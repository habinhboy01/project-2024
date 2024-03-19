
	<div class="bg-footer">
		<div class="container">
			<div class="bg-footer2">
			    <?php $image = get_field('logo-footer', 'option');

                if( !empty( $image ) ): ?>

                    <a href="<?php echo home_url(); ?>">
                        <img class="img_logo" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    </a>

                <?php endif; ?>


                <?php wp_nav_menu (
                array('theme_location' => 'menu-3', 'menu_class' => 'menu-footer'));?>

			</div>

			<p class="text-footer"><?php echo get_field('copyright', 'option'); ?></p>
		</div>
	</div>

	<a class="back-top" href="#"><i class="fas fa-chevron-up"></i></a>



<!-- Thư Viện jquery -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<!-- bootstrap -->

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
</script>

<!-- Thư Viện swiper -->

<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<!-- My Js -->

<script src="<?php bloginfo('template_directory')?>/js/style.js"></script>

<?php wp_footer() ?>

</body>

</html>