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

	<!-- font -->

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans:ital,wght@0,100;0,300;0,400;0,500;0,700;0,800;0,900;1,100;1,300;1,400;1,500;1,700;1,800;1,900&family=DM+Sans:ital,opsz,wght@0,9..40,100;0,9..40,200;0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;0,9..40,800;0,9..40,900;0,9..40,1000;1,9..40,100;1,9..40,200;1,9..40,300;1,9..40,400;1,9..40,500;1,9..40,600;1,9..40,700;1,9..40,800;1,9..40,900;1,9..40,1000&family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Noto+Serif:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

	<!-- fontawesome -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/vendor/FontAwesome.Pro.5.15.2.Web/css/all.css">

	<!-- thư viện gallery -->

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">

    <!-- swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

  	<!-- library animation -->
  	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/css/aos.css">

  	<!-- My CSS -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/css/reset.css"> 
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/css/custom.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/style.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/css/css2.css">

	<?php wp_head() ?>
</head>
<body>
	
	<!-- menu contact -->

	<div class="display-pc">
		<div class="bg-header">
			<div class="container-fluid">

				<div class="header-contact">
					<ul class="menu-contact">
						<li>
							<a href="tel:<?php echo get_field('phone-number', 'option'); ?>">
								<?php echo get_field('phone-number', 'option'); ?>
							</a>
						</li>

						<li>
							<a href="mailto:<?php echo get_field('email', 'option'); ?>">
								<?php echo get_field('email', 'option'); ?>
							</a>
						</li>
					</ul>
                    
                    <div class="login-language">
                        <ul class="menu-login">
                            <!----------------------------------->
                            
                            <?php if(is_user_logged_in()) { $user_id = get_current_user_id();$current_user = wp_get_current_user();$profile_url = get_author_posts_url($user_id);$edit_profile_url = get_edit_profile_url($user_id); ?>
                
                				<li class="sub-user">
                				    <p class="text-user"><?php echo $current_user->display_name; ?></p>
                				    
                				    <ul class="sub-user-2">
                				        <li>
                				            <a href="https://kvhospitality.com.vn/thong-tin-thanh-vien/">
                                                <p>Cập nhật hồ sơ</p>
                                            </a>
                				        </li>
                				        
                				        <li>
                				            <a href="<?php echo esc_url(wp_logout_url($current_url)); ?>">Thoát</a>
                				        </li>
                				    </ul>
                				</li>
                
                			<?php } else { ?>
            
            			    <li class="sub-user-3">
                			    <?php $err = ''; $success = ''; global $wpdb, $PasswordHash, $current_user, $user_ID; if(isset($_POST['task']) && $_POST['task'] == 'register' ) { $pwd1 = $wpdb->escape(trim($_POST['pwd1']));
                			        $pwd2 = $wpdb->escape(trim($_POST['pwd2']));
                			        $email = $wpdb->escape(trim($_POST['email']));
                			        $username = $wpdb->escape(trim($_POST['username']));
                			 
                			        if( $email == "" || $pwd1 == "" || $pwd2 == "" || $username == "") {
                			            $err = 'Vui lòng không bỏ trống những thông tin bắt buộc!';
                			        } else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                			            $err = 'Địa chỉ Email không hợp lệ!.';
                			        } else if(email_exists($email) ) {
                			            $err = 'Địa chỉ Email đã tồn tại!.';
                			        } else if($pwd1 <> $pwd2 ){
                			            $err = '2 Password không giống nhau!.';
                			        } else {
                			            $user_id = wp_insert_user( array ('user_pass' => apply_filters('pre_user_user_pass', $pwd1), 'user_login' => apply_filters('pre_user_user_login', $username), 'user_email' => apply_filters('pre_user_user_email', $email), 'role' => 'subscriber' ) );
                			            if( is_wp_error($user_id) ) {
                			                $err = 'Error on user creation.';
                			            } else {
                			                do_action('user_register', $user_id);
                			                $success = 'Bạn đã đăng ký thành công!';
                			            }
                			        }
                			    }
                			    ?>
            
                                <a href="<?php echo get_field('link-login','option'); ?>">
                                    <?php echo get_field('login','option'); ?>
                                </a>
            
            			    </li>
            
            			    <?php } ?>
                            
                            <li>
                                <a href="<?php echo get_field('link-sign-up','option'); ?>">
                                    <?php echo get_field('sign-up','option'); ?>
                                </a>
                            </li>
                        </ul>
    				    
    				    <?php echo do_shortcode('[gtranslate]'); ?>
                    </div>
				</div>
			</div>
		</div>

		<!-- menu pc -->

		<div class="container-fluid">
			<div class="bg-header-2">

				<?php $image = get_field('img-logo', 'option');

			    if( !empty( $image ) ): ?>

			    	<a href="<?php echo home_url(); ?>">
			        	<img class="img_logo" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
			        </a>

			    <?php endif; ?>

				<?php wp_nav_menu (
			    array('theme_location' => 'menu-1', 'menu_class' => 'menu-pc'));?>

			</div>
		</div>
	</div>

	<!-- menu mobile -->

	<div class="display-mobile">
		<div class="bg-header-mobile">
			<div class="container-fluid">
			     <?php echo do_shortcode('[gtranslate]'); ?>
			    
                <ul class="menu-login">
                    <!----------------------------------->
                    
                    <?php if(is_user_logged_in()) { $user_id = get_current_user_id();$current_user = wp_get_current_user();$profile_url = get_author_posts_url($user_id);$edit_profile_url = get_edit_profile_url($user_id); ?>
        
        				<li class="sub-user">
        				    <p class="text-user"><?php echo $current_user->display_name; ?></p>
        				    
        				    <ul class="sub-user-2">
        				        <li>
        				            <a href="https://demo.kvhospitality.com.vn/thong-tin-thanh-vien/">
                                        <p>Cập nhật hồ sơ</p>
                                    </a>
        				        </li>
        				        
        				        <li>
        				            <a href="<?php echo esc_url(wp_logout_url($current_url)); ?>">Thoát</a>
        				        </li>
        				    </ul>
        				</li>
        
        			<?php } else { ?>
    
    			    <li class="sub-user-3">
        			    <?php $err = ''; $success = ''; global $wpdb, $PasswordHash, $current_user, $user_ID; if(isset($_POST['task']) && $_POST['task'] == 'register' ) { $pwd1 = $wpdb->escape(trim($_POST['pwd1']));
        			        $pwd2 = $wpdb->escape(trim($_POST['pwd2']));
        			        $email = $wpdb->escape(trim($_POST['email']));
        			        $username = $wpdb->escape(trim($_POST['username']));
        			 
        			        if( $email == "" || $pwd1 == "" || $pwd2 == "" || $username == "") {
        			            $err = 'Vui lòng không bỏ trống những thông tin bắt buộc!';
        			        } else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        			            $err = 'Địa chỉ Email không hợp lệ!.';
        			        } else if(email_exists($email) ) {
        			            $err = 'Địa chỉ Email đã tồn tại!.';
        			        } else if($pwd1 <> $pwd2 ){
        			            $err = '2 Password không giống nhau!.';
        			        } else {
        			            $user_id = wp_insert_user( array ('user_pass' => apply_filters('pre_user_user_pass', $pwd1), 'user_login' => apply_filters('pre_user_user_login', $username), 'user_email' => apply_filters('pre_user_user_email', $email), 'role' => 'subscriber' ) );
        			            if( is_wp_error($user_id) ) {
        			                $err = 'Error on user creation.';
        			            } else {
        			                do_action('user_register', $user_id);
        			                $success = 'Bạn đã đăng ký thành công!';
        			            }
        			        }
        			    }
        			    ?>
    
                        <a href="<?php echo get_field('link-login','option'); ?>">
                            <?php echo get_field('login','option'); ?>
                        </a>
    
    			    </li>
    
    			    <?php } ?>
                    
                    <li>
                        <a href="<?php echo get_field('link-sign-up','option'); ?>">
                            <?php echo get_field('sign-up','option'); ?>
                        </a>
                    </li>
                </ul>
			</div>
		</div>

		<div class="container-fluid">
			<div class="bg-header-mobile-2">
				<?php $image = get_field('img-logo', 'option');

			    if( !empty( $image ) ): ?>

			    	<a href="<?php echo home_url(); ?>">
			        	<img class="img_logo" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
			        </a>

			    <?php endif; ?>

			    <span class="icon-bar"><i class="far fa-bars"></i></span>
			</div>
		</div>

		<!-- menu mobile -->

		<div class="modal-menu">
			<div class="modal-menu-2">
				<?php wp_nav_menu (
			    array('theme_location' => 'menu-1', 'menu_class' => 'menu-mobile'));?>
			</div>
		</div>
	</div>





