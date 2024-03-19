<?php
/*
	Template Name: About Us
*/
get_header(); ?>

	<div class="container">
		<h1 class="title-contact"><?php echo get_field('title'); ?></h1>

		<p class="text-about"><?php the_field('content'); ?></p>
	</div>

<?php get_footer(); ?>