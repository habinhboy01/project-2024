<?php get_header() ?>

<div class="bg-single">
    <div class="container">
        <div class="row">
            <h3 class="title-single"><?php the_title(); ?></h3>

            <?php the_post_thumbnail('full', ['class' => 'img-single']); ?>

            <div class="content-single"><?php the_content(); ?></div>
        </div>
    </div>
</div>

<?php get_footer() ?>