<?php

/* Disable WordPress Admin Bar for all users */
add_filter( 'show_admin_bar', '__return_false' );

// Thêm ảnh đại diện
add_theme_support('post-thumbnails');

function m_register_menu()
{
	register_nav_menus(
		array(
			'menu-1' => __('Menu Category'),
			'menu-2' => __('Menu info'),
			'menu-3' => __('Menu footer'),
		)
	);
}
add_action('init', 'm_register_menu');


// add theme option menu bar admin 
if (function_exists('acf_add_options_page')) {
    acf_add_options_page();
}



// thanh tìm kiếm
/**
 * Generate custom search form
 *
 * @param string $form Form HTML.
 * @return string Modified form HTML.
 */
function wpdocs_my_search_form( $form ) {
    $form = '<form role="search" method="get" id="searchform" class="searchform" action="' . home_url( '/' ) . '" >
    <button type="submit" class="csw-search-submit">
        <img src="http://localhost/artrepublik/wp-content/themes/artrepublik_themes/images/search.png">
    </button>
    <input type="search" class="search-field" value="' . get_search_query() . '" name="s" id="s" placeholder="Search for..."/>
    </form>';
 
    return $form;
}
add_filter( 'get_search_form', 'wpdocs_my_search_form' );