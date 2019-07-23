<?php

add_theme_support('post-thumbnails');

//header navigation
register_nav_menus( array(
    'pc-nav' => esc_html__( 'PC header menu', 'portfolio2019' ),
    'mobile-nav' => esc_html('Mobile header menu', 'portfolio2019')
) );