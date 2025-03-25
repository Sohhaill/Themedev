<?php

function coursescpt()
{
    $args = array(
        'label' => 'Courses',
        'public' => true, //enable in dashboard and website
        'menu_icon' => 'dashicons-portfolio',
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
        'rewrite' => array('slug' => 'courses'),
        'taxonomies' => array('courses_category')
    );
    register_post_type('courses', $args);
}
add_action('init', 'coursescpt');

function courses_category_taxonomy()
{
    $args = array(
        'label' => 'Add New Categories',
        'public' => true,
        'hierarchical' => true, //enable parent child hierarchy in catagory
        'show_admin_column' => true, //show in list view in admin panel
        'rewrite' => array('slug' => 'courses-category')

    );
    register_taxonomy('courses_category', 'courses', $args);
}

add_action('init', 'courses_category_taxonomy');
?>