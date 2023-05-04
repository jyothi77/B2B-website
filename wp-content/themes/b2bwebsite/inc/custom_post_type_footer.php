<?php
// Product Custom Post Type
function create_custom_post_type_footer()
{
    // set up product labels
    $labels = array(
        'name' => 'footer',
        'singular_name' => 'footer',
        'add_new' => 'Add New',
        'add_new_item' => 'Add New footer',
        'edit_item' => 'Edit footer',
        'new_item' => 'New footer',
        'all_items' => 'All footer',
        'view_item' => 'View footer',
        'search_items' => 'Search footer',
        'not_found' =>  'No footer Found',
        'not_found_in_trash' => 'No footer found in Trash',
        'parent_item_colon' => '',
        'menu_name' => 'Footer',
    );

    // register post type
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'footer'),
        'query_var' => true,
        'taxonomies' => array('post_tag', 'post'),
        'menu_icon' => 'dashicons-table-row-before',
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'trackbacks',
            'custom-fields',
            'comments',
            'revisions',
            'thumbnail',
            'author',
            'page-attributes'
        )
    );
    register_post_type('footer', $args);

    $labels = array(
        'name'              => _x('footer Categories', 'phoronesis'),
        'singular_name'     => _x('footer Category', 'phoronesis'),
        'search_items'      => __('Search Category', 'phoronesis'),
        'all_items'         => __('All Category', 'phoronesis'),
        'parent_item'       => __('Parent Category', 'phoronesis'),
        'parent_item_colon' => __('Parent Category:', 'phoronesis'),
        'edit_item'         => __('Edit Category', 'phoronesis'),
        'update_item'       => __('Update Category', 'phoronesis'),
        'add_new_item'      => __('Add New Category', 'phoronesis'),
        'new_item_name'     => __('New Category Name', 'phoronesis'),
        'menu_name'         => __('Category', 'phoronesis'),
    );

    $rewrite = array(
        'slug'                       => 'footer-category',
        'with_front'                 => true,
        'hierarchical'               => false,
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
        'query_var' => true,
        'rewrite'                    => $rewrite,
    );

    register_taxonomy('footer-category', array('footer'), $args);
}
add_action('init', 'create_custom_post_type_footer');
