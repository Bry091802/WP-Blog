<?php

function my_assets(){
    wp_enqueue_style('myAssets', get_template_directory_uri() . '/css/style.css', microtime());
    wp_enqueue_script('my_script', get_template_directory_uri() . '/js/script.js', array(), microtime(), true);
    
}

add_action('wp_enqueue_scripts', 'my_assets');