<?php

function eventscpt()
{
    $args = array(
        'label' => 'Events',
        'public' => true, //enable in dashboard and website
        'menu_icon' => 'dashicons-portfolio',
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
        'rewrite' => array('slug' => 'events'),
        'taxonomies' => array('events_category')
    );
    register_post_type('events', $args);
}
add_action('init', 'eventscpt');

function events_category_taxonomy()
{
    $args = array(
        'label' => 'Add New Categories',
        'public' => true,
        'hierarchical' => true, //enable parent child hierarchy in catagory
        'show_admin_column' => true, //show in list view in admin panel
        'rewrite' => array('slug' => 'events-category')

    );
    register_taxonomy('events_category', 'events', $args);
}

add_action('init', 'events_category_taxonomy');
?>