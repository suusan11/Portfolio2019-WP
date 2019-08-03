<?php

add_theme_support('post-thumbnails');

//header navigation
register_nav_menus( array(
    'pc-nav' => esc_html__( 'PC header menu', 'portfolio2019' ),
    'mobile-nav' => esc_html('Mobile header menu', 'portfolio2019')
) );

//manege js and css files
function add_files() {
    //main.js
    wp_enqueue_script('main', get_template_directory_uri().'/dist/main.js');
    //smooth-scroll.js
    wp_enqueue_script('smooth-scroll', get_template_directory_uri().'/dist/js/smooth-scroll.polyfills.min.js');

    //common css
    wp_enqueue_style('stylesheet', get_stylesheet_uri());
}
add_action( 'wp_enqueue_scripts', 'add_files' );

/* pageNation
$paged: current page
$pages: all pages
$range: how many pages to left and right
*/
function the_pagination() {
    global $wp_query;
    $bignum = 999999999;
    if ( $wp_query->max_num_pages <= 1 )
        return;
    echo '<nav class="pagination">';
    echo paginate_links( array(
        'base'         => str_replace( $bignum, '%#%', esc_url( get_pagenum_link($bignum) ) ),
        'format'       => '',
        'current'      => max( 1, get_query_var('paged') ),
        'total'        => $wp_query->max_num_pages,
        'prev_text'    => '<<',
        'next_text'    => '>>',
        'type'         => 'list',
        'end_size'     => 3,
        'mid_size'     => 3
    ) );
    echo '</nav>';
}