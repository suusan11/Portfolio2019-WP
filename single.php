<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package hungrydeveloper
 */

get_header();
?>
    //link to each category slug page
    <?php
        $post = $wp_query -> post;
        if (in_category('work')) {
            if ( is_single('kulkuri') ) {
                include(TEMPLATEPATH . '/single/single-kulkuri.php');
            }else if ( is_single('mogu') ) {
                include(TEMPLATEPATH . '/single/single-mogu.php');
            }else if ( is_single('wordsworth') ){
                include(TEMPLATEPATH . '/single/single-wordsworth.php');
            }else {
                include(TEMPLATEPATH . '/single/single-ui.php');
            }
        }
    ?>

<?php
get_footer();