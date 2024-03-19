<!DOCTYPE html>
<html>
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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- fontawesome -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory')?>/FontAwesome6.4Pro/css/all.css">

    <!-- swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

    <!-- library animation -->
    <link rel="shortcut icon" type="image/png" href="<?php bloginfo('template_directory') ?>/images/logo.ico"/>

     <!-- My CSS -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/css/reset.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/css/custom.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/style.css">

    <?php wp_head() ?>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-RHPKDHJHRZ"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-RHPKDHJHRZ');
    </script>
</head>
<body>

    <!-- banner -->

    <?php if( have_rows('banner', 'option') ): ?>
        <?php while( have_rows('banner', 'option') ): the_row(); 
            $image = get_sub_field('img');
            $link = get_sub_field('link');
            ?>
            <a href="<?php echo $link;?>">
                <img class="banner-header" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo $image['alt'];?>">
            </a>
        <?php endwhile; ?>
    <?php endif; ?>

    <!-- menu pc -->

    <div class="bg-header-pc">
        <div class="container">
            <div class="header-pc">

                <?php $image = get_field('logo-header', 'option');

                if( !empty( $image ) ): ?>

                    <a class="home-url" href="<?php echo home_url(); ?>">
                        <img class="img_logo" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    </a>

                <?php endif; ?>

                <span class="icon-bar"><i class="fas fa-bars"></i></span>
            </div>
        </div>

        <div class="modal-menu">
            <div class="bg-menu"></div>

            <div class="bg-menu2">
                <div class="menu-pc">
                    <?php $image = get_field('logo-header', 'option');

                    if( !empty( $image ) ): ?>

                        <a class="home-url" href="<?php echo home_url(); ?>">
                            <img class="img_logo img_logo2" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        </a>

                    <?php endif; ?>

                    <ul class="list-icon">        
                        <li class="search-menu">
                            <img src="<?php bloginfo('template_directory') ?>/images/search.png">
                        </li>

                        <li class="close-menu">
                            <img src="<?php bloginfo('template_directory') ?>/images/close.png">
                        </li>
                    </ul>
                </div>

                <!-- ---------------------- -->

                <div class="bg-search">
                    <?php get_search_form(); ?>

                    <img class="close-menu2" src="<?php bloginfo('template_directory') ?>/images/close.png">
                </div>

                <!-- ------------------------------ -->

                <?php wp_nav_menu (
                array('theme_location' => 'menu-1', 'menu_class' => 'menu-pc2'));?>

                <?php wp_nav_menu (
                array('theme_location' => 'menu-2', 'menu_class' => 'menu-pc3'));?>

                <!-- social menu -->

                <ul class="social-menu">
                    <?php if( have_rows('list-social', 'option') ): ?>
                        <?php while( have_rows('list-social', 'option') ): the_row(); 
                            $link = get_sub_field('link');
                            ?>

                            <li>
                                <a href="<?php echo $link;?>">
                                    <?php echo get_sub_field('icon'); ?>
                                </a>
                            </li>

                        <?php endwhile; ?>
                    <?php endif; ?>
                </ul>

                <p class="rights-reserved"><?php echo get_field('copyright', 'option'); ?></p>
            </div>
        </div>
    </div>