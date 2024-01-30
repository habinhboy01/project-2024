<?php
/*

Template Name: Form user

*/
get_header(); ?>
    
    <div class="bg-content">
        <div class="container">
            <?php
            /* Get user info. */
             
            global $current_user, $wp_roles;
             
            get_currentuserinfo();
             
             
             
            /* Load the registration file. */
             
            require_once( ABSPATH . WPINC . '/registration.php' );
             
            $error = array();
             
            /* If profile was saved, update profile. */
             
            if ( 'POST' == $_SERVER['REQUEST_METHOD'] && !empty( $_POST['action'] ) && $_POST['action'] == 'update-user' ) {
             
             
             
                /* Update user password. */
        
 
             
                /* Redirect so the page will show updated info.*/
             
              /*I am not Author of this Code- i dont know why but it worked for me after changing below line to if ( count($error) == 0 ){ */
             
                if ( count($error) == 0 ) {
             
                    //action hook for plugins and extra fields saving
             
                    do_action('edit_user_profile_update', $current_user->ID);
             
                    wp_redirect( get_permalink() );
             
                    exit;
             
                }
             
            }
             
            ?>
        
        
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
         
                <div id="post-<?php the_ID(); ?>">
             
                    <div class="entry-content entry">
             
                        <?php the_content(); ?>
             
                            <?php if ( count($error) > 0 ) echo '<p class="error">' . implode("<br />", $error) . '</p>'; ?>
             
                            <form method="post" class="bg-user" action="https://kvhospitality.com.vn/wp-admin/profile.php">

                                <?php
             
                                    //action hook for plugin and extra fields
             
                                    do_action('edit_user_profile',$current_user);
             
                                ?>
                                
                                <div class="bg-user-2">
                                    <p>
                 
                                        <?php echo $referer; ?>
                 
                                        <input name="updateuser" type="submit" id="updateuser" class="submit button submit-user" value="<?php _e('Cập nhật', 'profile'); ?>" />
                 
                                        <?php wp_nonce_field( 'update-user' ) ?>
                 
                                        <input name="action" type="hidden" id="action" value="update-user" />
                 
                                    </p><!-- .form-submit -->
                                    
                                    <a href="<?php echo home_url(); ?>">
                                        <p class="skip-user ">Bỏ qua</p>
                                    </a>
                                </div>
             
                            </form><!-- #adduser -->
             

                    </div><!-- .entry-content -->
             
                </div><!-- .hentry .post -->
             
                <?php endwhile; ?>
             
            <?php else: ?>
             
                <p class="no-data">
             
                    <?php _e('Sorry, no page matched your criteria.', 'profile'); ?>
             
                </p><!-- .no-data -->
             
            <?php endif; ?>
        </div>
    </div>

<?php get_footer(); ?>