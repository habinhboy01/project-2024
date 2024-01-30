<?php
// Hook <strong>ql_custom_portfolio()</strong> to the init action hook
add_action('init', 'custom_golf');

// The custom function to register a movie post type
function custom_golf()
{

    register_post_type('golf', [
        'label' => __('Golf', 'txtdomain'),
        'public' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-image-filter',
        'supports' => ['title', 'editor', 'thumbnail', 'author', 'revisions', 'comments', 'excerpt', 'custom-fields', 'post-formats', 'page-attributes', 'trackbacks'],
        'show_in_rest' => true,
        'rewrite' => ['slug' => 'golf'],
        'taxonomies' => ['category-golf','location-golf'],
        'labels' => [
            'singular_name' => __('golf', 'txtdomain'),
            'add_new_item' => __('Add new golf', 'txtdomain'),
            'new_item' => __('New golf', 'txtdomain'),
            'view_item' => __('View golf', 'txtdomain'),
            'not_found' => __('No golf found', 'txtdomain'),
            'not_found_in_trash' => __('No golf found in trash', 'txtdomain'),
            'all_items' => __('All golf', 'txtdomain'),
            'insert_into_item' => __('Insert into golf', 'txtdomain')
        ],
    ]);

    // muc category

    register_taxonomy('category-golf', ['golf'], [
        'label' => __('Category golf', 'txtdomain'),
        'hierarchical' => true,
        'rewrite' => ['slug' => 'category-golf'],
        'show_admin_column' => true,
        'show_in_rest' => true,
        'labels' => [
            'singular_name' => __('category-golf', 'txtdomain'),
            'all_items' => __('All category-golf', 'txtdomain'),
            'edit_item' => __('Edit category-golf', 'txtdomain'),
            'view_item' => __('View category-golf', 'txtdomain'),
            'update_item' => __('Update category-golf', 'txtdomain'),
            'add_new_item' => __('Add New category golf', 'txtdomain'),
            'new_item_name' => __('New category-golf Name', 'txtdomain'),
            'search_items' => __('Search category-golf', 'txtdomain'),
            'parent_item' => __('Parent category golf', 'txtdomain'),
            'parent_item_colon' => __('Parent category-golf:', 'txtdomain'),
            'not_found' => __('No category-golf found', 'txtdomain'),
        ],
    ]);
    register_taxonomy_for_object_type('category-golf', 'golf');
    
    // muc location

    register_taxonomy('location-golf', ['golf'], [
        'label' => __('Location golf', 'txtdomain'),
        'hierarchical' => true,
        'rewrite' => ['slug' => 'location-golf'],
        'show_admin_column' => true,
        'show_in_rest' => true,
        'labels' => [
            'singular_name' => __('location-golf', 'txtdomain'),
            'all_items' => __('All location-golf', 'txtdomain'),
            'edit_item' => __('Edit location-golf', 'txtdomain'),
            'view_item' => __('View location-golf', 'txtdomain'),
            'update_item' => __('Update location-golf', 'txtdomain'),
            'add_new_item' => __('Add New location golf', 'txtdomain'),
            'new_item_name' => __('New location-golf Name', 'txtdomain'),
            'search_items' => __('Search location-golf', 'txtdomain'),
            'parent_item' => __('Parent location golf', 'txtdomain'),
            'parent_item_colon' => __('Parent location-golf:', 'txtdomain'),
            'not_found' => __('No location-golf found', 'txtdomain'),
        ],
    ]);
    register_taxonomy_for_object_type('location-golf', 'golf');
}


function golf_cate()
{
    $cats = get_the_terms(get_the_ID(), 'category-golf');
    foreach ($cats as $cat) :
        if ($cat->slug != 'category-golf') :
            // echo '<a href="' . get_term_link($cat->slug, 'career') . '">';
            echo $cat->name;
            // echo '</a>';
        endif;
    endforeach;
}

// ----------------

function location_golf()
{
    $cats = get_the_terms(get_the_ID(), 'location-golf');
    foreach ($cats as $cat) :
        if ($cat->slug != 'location-golf') :
            // echo '<a href="' . get_term_link($cat->slug, 'career') . '">';
            echo $cat->name;
            // echo '</a>';
        endif;
    endforeach;
}