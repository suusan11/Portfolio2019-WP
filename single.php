<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package hungrydeveloper
 */

get_header('workpage');
?>
//link to each category slug page
<?php
        $post = $wp_query -> post; //get THE post including posts
        if (in_category('work')) {
            if (is_single('kulkuri')) {
                include(TEMPLATEPATH . '/single/single-kulkuri.php');
            } elseif (is_single('mogu')) {
                include(TEMPLATEPATH . '/single/single-mogu.php');
            } elseif (is_single('portfolio')) {
                include(TEMPLATEPATH . '/single/single-portfolio.php');
            } elseif (is_single('wordsworth-planner')) {
                include(TEMPLATEPATH . '/single/single-wordsworth.php');
            } elseif (is_single('react-form')) {
                include(TEMPLATEPATH . '/single/single-reactform.php');
            } else {
                include(TEMPLATEPATH . '/single/single-ui.php');
            }
        }
    ?>

<?php
get_footer();
