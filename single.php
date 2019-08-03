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
        if ( in_category('kulkuri') ) {
            include(TEMPLATEPATH . '/single/single-kulkuri.php');
        }else if ( in_category('mogu') ) {
            include(TEMPLATEPATH . '/single/single-mogu.php');
        }else if ( in_category('wordsworth') ){
            include(TEMPLATEPATH . '/single/single-wordsworth.php');
        }else {
            include(TEMPLATEPATH . '/single/single-ui.php');
        }
    ?>

<?php
get_footer();