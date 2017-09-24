<?php

function Mytheme_resources(){
//    wp_enqueue_style('reset', get_template_directory_uri() . '/assets/css/reset.css' );
    wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'MyTheme_resources');

add_post_type_support( 'page', 'excerpt' );

function Theme_setup(){
    //Add Featured image support
    add_theme_support( 'post-thumbnails' );
    // add_image_size('banner-size', 300, 300, true);
    // add_image_size('banner-size-large', 580, 300, true);

};

add_action('after_setup_theme', 'Theme_setup');

function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );