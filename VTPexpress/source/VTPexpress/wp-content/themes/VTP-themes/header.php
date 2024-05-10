<!DOCTYPE html>
<html lang="en">

<head>
    <title>
        <?php if (is_front_page()) : ?>
        <?php bloginfo('name') ?>
        <?php elseif (is_single()) : ?>
        <?php echo wp_title('', true, ''); ?>
        <?php else : ?>
        <?php echo wp_title('', true, ''); ?>
        <?php endif ?>
    </title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="<?php bloginfo('template_directory')?>/FontAwesome6.4Pro/css/all.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/style.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/css/reset.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/css/custom.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/css/custom2.css">

    <?php wp_head() ?>
</head>

<body>

    <div class="nav-wrap">
        <nav class="nav-mobile">
            <div class="close">
                <div><i class="fa-solid fa-xmark"></i></div>
            </div>
            <?php 
            wp_nav_menu(array(
                'theme_location' => 'menu-2',
                'menu_class' => 'heading2-info-mobile'
            ))
            ?>

            <?php 
            wp_nav_menu(array(
                'theme_location' => 'menu-5',
                'menu_class' => 'sub-menu-service'
            ))
            ?>


        </nav>

    </div>

    <div class="heading-wrap ">
        <div class="heading1">
            <div class="container position-relative">
                <div class="heading1-info">

                    <?php echo get_field('heading1-info','option') ?></li>

                </div>
                <div class="logo">
                    <a href="<?php echo get_bloginfo('url'); ?>"><img src="<?php echo get_field('logo','option') ?>"
                            alt="" class=""></a>
                </div>

            </div>
        </div>
        <div class="heading2">
            <div class="container">
                <div class="container-heading2-wrap">
                    <?php 
                    wp_nav_menu(array(
                        'theme_location' => 'menu-1',
                        'menu-class' => 'heading2-info'
                    ))
                    ?>
                    <div class="translator-dropdown">
                        <div class="select">
                            <span class="selected"></span>
                            <div class="caret">

                            </div>
                            <?php 
                        wp_nav_menu(array(
                            'theme_location' => 'menu-4',
                            'menu-class' => 'menu-language'
                        ))
                        ?>
                        </div>

                    </div>
                    <div class="search-form-wrap">
                        <?php echo get_search_form() ?>
                    </div>
                    <div class="bars-mobile">
                        <i class="fa-solid fa-bars"></i>
                    </div>
                </div>
            </div>
        </div>

    </div>