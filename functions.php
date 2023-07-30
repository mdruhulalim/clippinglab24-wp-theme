<?php
    // for menu
    register_nav_menus(
        array('primary-menu'=>'top menu')
    );

    // for fetures images
    add_theme_support('post-thumbnails');
    
    // for header logo
    add_theme_support('custom-header');

    // add background image option in theme option
    add_theme_support('custom-background');

    // add excerpt option in page edit, create option
    add_post_type_support('page','excerpt');



    // Clear the cache
    function clear_cache() {
        wp_cache_flush();
    }
    add_action('after_setup_theme', 'clear_cache');

    // for showing comments
    function theme_setup() {
        // Add support for comments
        add_theme_support('comments');
    }
    add_action('after_setup_theme', 'theme_setup');
    
?>