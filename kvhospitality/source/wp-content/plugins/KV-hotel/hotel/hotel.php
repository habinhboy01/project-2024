<?php
// Hook <strong>ql_custom_portfolio()</strong> to the init action hook
add_action('init', 'custom_hotel');

// The custom function to register a movie post type
function custom_hotel()
{

    register_post_type('hotel', [
        'label' => __('Hotel', 'txtdomain'),
        'public' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-building',
        'supports' => ['title', 'editor', 'thumbnail', 'author', 'revisions', 'comments', 'excerpt', 'custom-fields', 'post-formats', 'page-attributes', 'trackbacks'],
        'show_in_rest' => true,
        'rewrite' => ['slug' => 'hotel'],
        'taxonomies' => ['category-hotel', 'category-location'],
        'labels' => [
            'singular_name' => __('hotel', 'txtdomain'),
            'add_new_item' => __('Add new hotel', 'txtdomain'),
            'new_item' => __('New hotel', 'txtdomain'),
            'view_item' => __('View hotel', 'txtdomain'),
            'not_found' => __('No hotel found', 'txtdomain'),
            'not_found_in_trash' => __('No hotel found in trash', 'txtdomain'),
            'all_items' => __('All hotel', 'txtdomain'),
            'insert_into_item' => __('Insert into hotel', 'txtdomain')
        ],
    ]);

    // muc category

    register_taxonomy('category-hotel', ['hotel'], [
        'label' => __('Category hotel', 'txtdomain'),
        'hierarchical' => true,
        'rewrite' => ['slug' => 'category-hotel'],
        'show_admin_column' => true,
        'show_in_rest' => true,
        'labels' => [
            'singular_name' => __('category-hotel', 'txtdomain'),
            'all_items' => __('All category-hotel', 'txtdomain'),
            'edit_item' => __('Edit category-hotel', 'txtdomain'),
            'view_item' => __('View category-hotel', 'txtdomain'),
            'update_item' => __('Update category-hotel', 'txtdomain'),
            'add_new_item' => __('Add New category hotel', 'txtdomain'),
            'new_item_name' => __('New category-hotel Name', 'txtdomain'),
            'search_items' => __('Search category-hotel', 'txtdomain'),
            'parent_item' => __('Parent category hotel', 'txtdomain'),
            'parent_item_colon' => __('Parent category-hotel:', 'txtdomain'),
            'not_found' => __('No category-hotel found', 'txtdomain'),
        ],
    ]);
    register_taxonomy_for_object_type('category-hotel', 'hotel');


    // muc location

    register_taxonomy('category-location', ['hotel'], [
        'label' => __('Category location', 'txtdomain'),
        'hierarchical' => true,
        'rewrite' => ['slug' => 'category-location'],
        'show_admin_column' => true,
        'show_in_rest' => true,
        'labels' => [
            'singular_name' => __('category-location', 'txtdomain'),
            'all_items' => __('All category-location', 'txtdomain'),
            'edit_item' => __('Edit category-location', 'txtdomain'),
            'view_item' => __('View category-location', 'txtdomain'),
            'update_item' => __('Update category-location', 'txtdomain'),
            'add_new_item' => __('Add New category location', 'txtdomain'),
            'new_item_name' => __('New category-location Name', 'txtdomain'),
            'search_items' => __('Search category-location', 'txtdomain'),
            'parent_item' => __('Parent category location', 'txtdomain'),
            'parent_item_colon' => __('Parent category-location:', 'txtdomain'),
            'not_found' => __('No category-location found', 'txtdomain'),
        ],
    ]);
    register_taxonomy_for_object_type('category-location', 'hotel');
}


function hotel_cate()
{
    $cats = get_the_terms(get_the_ID(), 'category-hotel');
    foreach ($cats as $cat) :
        if ($cat->slug != 'category-hotel') :
            // echo '<a href="' . get_term_link($cat->slug, 'career') . '">';
            echo $cat->name;
            // echo '</a>';
        endif;
    endforeach;
}


function location_cate()
{
    $cats = get_the_terms(get_the_ID(), 'category-location');
    foreach ($cats as $cat) :
        if ($cat->slug != 'category-location') :
            // echo '<a href="' . get_term_link($cat->slug, 'career') . '">';
            echo $cat->name;
            // echo '</a>';
        endif;
    endforeach;
}