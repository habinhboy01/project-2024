<?php /**template name: intro */ get_header() ?>

<div class="bg-services">
    <?php the_post_thumbnail('full', ['class' => 'img-service']); ?>
    <h1><?php the_title(); ?></h1>
</div>

<div class="heading-des container">
    <div class="row">
        <div class="col-lg-7">
            <div class="heading-text-wrap">
                <?php echo get_field("heading-des") ?>
            </div>
            <div class="row includes">
                <?php if(have_rows('includes')):while(have_rows('includes')): the_row(); ?>
                <div class="col-lg-3 col-md-6 col-6">
                    <div class="include-item">
                        <div class="include-icon">
                            <img src="<?php echo get_sub_field('icon') ?>" alt="" class="w-100">
                        </div>
                        <div class="quantity">
                            <?php echo get_sub_field('number') ?>
                        </div>
                        <div class="include-des">
                            <?php echo get_sub_field('des') ?>
                        </div>
                    </div>
                </div>

                <?php endwhile;endif ?>
            </div>
        </div>
        <div class="col-lg-5">
            <div class="heading-img">
                <img src="<?php echo get_field("heading-img") ?>" alt="" class="w-100">
            </div>
        </div>
    </div>
</div>

<div class="mission-wrap" style="background-image: url('<?php echo get_field("mission-bg")?>')">
    <div class="mission-bg">
        <div class="container">
            <div class="mission-des">
                <?php echo get_field('mission-des') ?>
            </div>
            <div class="row mt-3">
                <?php if(have_rows('missions')):while(have_rows('missions')): the_row(); ?>
                <div class="col-lg-4">
                    <div class="mission-item">
                        <div class="mission-icon">
                            <img src="<?php echo get_sub_field('mission-icon') ?>" alt="" class="">
                        </div>
                        <div class="include-des">
                            <?php echo get_sub_field('mission-des') ?>
                        </div>
                    </div>
                </div>

                <?php endwhile;endif ?>
            </div>
        </div>
    </div>
</div>

<div class="container cores">
    <h2 class="last-title">
        <?php echo get_field('last-title') ?>
    </h2>
    <div class="row align-items-center">

        <div class="col-lg-6">
            <div class="core-img">

                <img src="<?php echo get_field('last-img') ?>" alt="" class="w-100">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="core-text">
                <?php echo get_field('last-des') ?>
            </div>

        </div>
    </div>
</div>


<?php get_footer() ?>