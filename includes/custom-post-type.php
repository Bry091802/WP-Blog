<?php

function nev_custom_post(){


$service_label = array(
    'name'                     => __('Services', 'textdomain'),
    'singular_name'            => __('Services', 'textdomain'),
    'add_new'                  => __('Add Service', 'textdomain'),
    'add_new_item'             => __('Add New Service', 'textdomain'),
    'edit_item'                => __('Edit Service', 'textdomain'),
    'all_items'                => __('Service', 'textdomain'),
);      

$service_args = array(      
    'labels'                   => $service_label,
    'public'                   => true,
    'capability_type'          => 'post',
    'show_ui'                  => true,
    'taxonomies'               => array('post_tag', 'category'),
    'supports'                 => array('title', 'editor', 'thumbnail', 'excerpt')
);
register_post_type('service', $service_args);

// tours post
$tour_label = array(
    'name'                     => __('Tour', 'textdomain'),
    'singular_name'            => __('Tour', 'textdomain'),
    'add_new'                  => __('Add Tour', 'textdomain'),
    'add_new_item'             => __('Add New Tour', 'textdomain'),
    'edit_item'                => __('Edit Tour', 'textdomain'),
    'all_items'                => __('Tour', 'textdomain'),
);      

$tour_args = array(      
    'labels'                   => $tour_label,
    'public'                   => true,
    'capability_type'          => 'post',
    'show_ui'                  => true,
    'taxonomies'               => array('post_tag', 'category'),
    'supports'                 => array('title', 'editor', 'thumbnail', 'excerpt')
);
register_post_type('tour', $tour_args);
}

add_action('init', 'nev_custom_post');

?>