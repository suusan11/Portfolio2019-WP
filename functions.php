<?php

add_theme_support('post-thumbnails');

//header navigation
register_nav_menus( array(
    'pc-nav' => esc_html__( 'PC header menu', 'portfolio2019' ),
    'mobile-nav' => esc_html('Mobile header menu', 'portfolio2019')
) );

function add_files() {
    //main.js
    wp_enqueue_script('main', get_template_directory_uri().'/dist/main.js');
    //smooth-scroll.js
    wp_enqueue_script('smooth-scroll', get_template_directory_uri().'/dist/js/smooth-scroll.polyfills.min.js');

    //common css
    wp_enqueue_style('stylesheet', get_stylesheet_uri());
}
add_action( 'wp_enqueue_scripts', 'add_files' );