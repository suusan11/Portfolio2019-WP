<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hungrydeveloper
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11"><meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name'); ?></title>
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri()?>/dist/images/favicon.ico">

	<?php wp_head(); ?>
</head>

<body>
    <!--header-->
    <header data-scroll-header class="header">

        <div class="header__flex">
            <div class="name__flex">
                <a class="header__icon" href="#"><img src="<?php echo get_template_directory_uri()?>/dist/images/profile.png" alt="profile image"></a>
                <h3>MIE SUZUKI</h3>
            </div>
            <?php
            wp_nav_menu( array(
                'theme_location' => 'pc-nav',
                'menu_class' => 'header__flex--right'
            ));
            ?>
            <ul class="header__flex--right">
                <li><a data-scroll href="#works">WORKS</a></li>
                <li><a data-scroll href="#values">VALUES</a></li>
                <li><a data-scroll href="#contact">CONTACT</a></li>
            </ul>
            <div class="global__menu">
                <button id="js-open-menu">MENU</button>
                <div id="js-global-menu" class="click__open">
                    <div id="js-close-menu" class="close__button">×</div>
                    <?php
                    wp_nav_menu( array(
                        'theme_location' => 'mobile-nav',
                    ));
                    ?>
                    <ul>
                        <li class="js-link-menu"><a href="#">HOME</a></li>
                        <li class="js-link-menu"><a href="#works">WORKS</a></li>
                        <li class="js-link-menu"><a href="#values">VALUES</a></li>
                        <li class="js-link-menu"><a href="#contact">CONTACT</a></li>
                    </ul>
                    <div class="sns__flex">
                        <a href="https://www.linkedin.com/in/mie-suzuki-079644161/" target="_blank"><svg class="icon icon-linkedin2"><use xlink:href="#icon-linkedin2"><symbol id="icon-linkedin2" viewBox="0 0 32 32">
                                        <title>linkedin2</title>
                                        <path d="M12 12h5.535v2.837h0.079c0.77-1.381 2.655-2.837 5.464-2.837 5.842 0 6.922 3.637 6.922 8.367v9.633h-5.769v-8.54c0-2.037-0.042-4.657-3.001-4.657-3.005 0-3.463 2.218-3.463 4.509v8.688h-5.767v-18z"></path>
                                        <path d="M2 12h6v18h-6v-18z"></path>
                                        <path d="M8 7c0 1.657-1.343 3-3 3s-3-1.343-3-3c0-1.657 1.343-3 3-3s3 1.343 3 3z"></path>
                                    </symbol></use></svg></a>
                        <a href="https://github.com/suusan11" target="_blank"><svg class="icon icon-github"><use xlink:href="#icon-github"><symbol id="icon-github" viewBox="0 0 24 24">
                                        <title>github</title>
                                        <path d="M22.5 8.5c0-1.5-0.5-2.8-1.4-4 0.3-1.3 0.2-2.7-0.3-3.9-0.1-0.3-0.3-0.5-0.6-0.6-0.4-0.1-1.7-0.3-4.4 1.4-2.2-0.5-4.5-0.5-6.6 0-2.7-1.7-4-1.5-4.4-1.4-0.3 0.1-0.5 0.3-0.6 0.6-0.6 1.3-0.7 2.6-0.3 3.9-0.9 1.2-1.4 2.6-1.4 4 0 5.4 3 7.1 5.8 7.7-0.2 0.7-0.3 1.3-0.3 1.9v0.1c-2.1 0.4-2.8-0.4-3.6-1.5-0.5-0.7-1.1-1.5-2.2-1.7-0.5-0.1-1.1 0.2-1.2 0.7s0.2 1.1 0.7 1.2c0.3 0.1 0.7 0.5 1.1 1 0.9 1.2 2.2 2.8 5.2 2.4v1.7c0 0.6 0.4 1 1 1s1-0.4 1-1v-2.9c0 0 0-0.1 0-0.1v-0.9c0-0.7 0.2-1.3 0.7-1.8 0.3-0.3 0.4-0.7 0.2-1-0.1-0.4-0.4-0.6-0.8-0.7-2.9-0.4-5.6-1.3-5.6-6 0-1.2 0.4-2.2 1.2-3.1 0.3-0.3 0.3-0.7 0.2-1-0.3-0.9-0.3-1.7-0.1-2.5 0.5 0.1 1.4 0.4 2.6 1.3 0.3 0.2 0.6 0.2 0.9 0.1 2.1-0.6 4.4-0.6 6.5 0 0.3 0.1 0.6 0 0.8-0.1 1.3-0.9 2.2-1.2 2.6-1.3 0.2 0.8 0.2 1.6-0.1 2.4-0.1 0.4-0.1 0.8 0.2 1 0.8 0.8 1.2 1.9 1.2 3.1 0 4.7-2.7 5.7-5.6 6-0.4 0-0.7 0.3-0.8 0.7s0 0.8 0.2 1c0.5 0.5 0.7 1.2 0.7 1.9v3.9c0 0.6 0.4 1 1 1s1-0.4 1-1v-3.8c0.1-0.7 0-1.3-0.3-1.9 2.4-0.5 5.8-2.1 5.8-7.8z"></path>
                                    </symbol></use></svg></a>
                        <a href="https://dribbble.com/suusan1228" target="_blank"><svg class="icon icon-dribbble"><use xlink:href="#icon-dribbble"><symbol id="icon-dribbble" viewBox="0 0 32 32">
                                        <title>dribbble</title>
                                        <path d="M16 32c-8.825 0-16-7.175-16-16s7.175-16 16-16c8.825 0 16 7.175 16 16s-7.175 16-16 16v0zM29.494 18.188c-0.469-0.15-4.231-1.269-8.512-0.581 1.788 4.912 2.512 8.912 2.656 9.744 3.063-2.075 5.25-5.356 5.856-9.163v0zM21.337 28.6c-0.206-1.2-0.994-5.375-2.913-10.363-0.031 0.012-0.063 0.019-0.087 0.031-7.713 2.688-10.481 8.031-10.725 8.531 2.319 1.806 5.231 2.887 8.387 2.887 1.894 0 3.7-0.387 5.338-1.087v0zM5.844 25.156c0.313-0.531 4.063-6.738 11.106-9.019 0.175-0.056 0.356-0.113 0.538-0.162-0.344-0.775-0.719-1.556-1.106-2.319-6.819 2.044-13.444 1.956-14.044 1.95-0.006 0.137-0.006 0.275-0.006 0.419 0 3.506 1.331 6.712 3.512 9.131v0zM2.625 13.219c0.612 0.006 6.244 0.031 12.637-1.662-2.262-4.025-4.706-7.412-5.069-7.906-3.825 1.806-6.688 5.331-7.569 9.569v0zM12.8 2.731c0.375 0.506 2.863 3.888 5.1 8 4.863-1.819 6.919-4.588 7.163-4.938-2.413-2.144-5.587-3.444-9.063-3.444-1.1 0.006-2.175 0.138-3.2 0.381v0zM26.581 7.381c-0.288 0.388-2.581 3.325-7.631 5.388 0.319 0.65 0.625 1.313 0.906 1.981 0.1 0.238 0.2 0.469 0.294 0.706 4.55-0.569 9.069 0.344 9.519 0.438-0.031-3.225-1.188-6.188-3.087-8.512v0z"></path>
                                    </symbol></use></svg></a>
                        <a href="https://www.instagram.com/miiiiiiiiiiie.55/" target="_blank"><svg class="icon icon-instagram"><use xlink:href="#icon-instagram"><symbol id="icon-instagram" viewBox="0 0 32 32">
                                        <title>instagram</title>
                                        <path d="M16 2.881c4.275 0 4.781 0.019 6.462 0.094 1.563 0.069 2.406 0.331 2.969 0.55 0.744 0.288 1.281 0.638 1.837 1.194 0.563 0.563 0.906 1.094 1.2 1.838 0.219 0.563 0.481 1.412 0.55 2.969 0.075 1.688 0.094 2.194 0.094 6.463s-0.019 4.781-0.094 6.463c-0.069 1.563-0.331 2.406-0.55 2.969-0.288 0.744-0.637 1.281-1.194 1.837-0.563 0.563-1.094 0.906-1.837 1.2-0.563 0.219-1.413 0.481-2.969 0.55-1.688 0.075-2.194 0.094-6.463 0.094s-4.781-0.019-6.463-0.094c-1.563-0.069-2.406-0.331-2.969-0.55-0.744-0.288-1.281-0.637-1.838-1.194-0.563-0.563-0.906-1.094-1.2-1.837-0.219-0.563-0.481-1.413-0.55-2.969-0.075-1.688-0.094-2.194-0.094-6.463s0.019-4.781 0.094-6.463c0.069-1.563 0.331-2.406 0.55-2.969 0.288-0.744 0.638-1.281 1.194-1.838 0.563-0.563 1.094-0.906 1.838-1.2 0.563-0.219 1.412-0.481 2.969-0.55 1.681-0.075 2.188-0.094 6.463-0.094zM16 0c-4.344 0-4.887 0.019-6.594 0.094-1.7 0.075-2.869 0.35-3.881 0.744-1.056 0.412-1.95 0.956-2.837 1.85-0.894 0.888-1.438 1.781-1.85 2.831-0.394 1.019-0.669 2.181-0.744 3.881-0.075 1.713-0.094 2.256-0.094 6.6s0.019 4.887 0.094 6.594c0.075 1.7 0.35 2.869 0.744 3.881 0.413 1.056 0.956 1.95 1.85 2.837 0.887 0.887 1.781 1.438 2.831 1.844 1.019 0.394 2.181 0.669 3.881 0.744 1.706 0.075 2.25 0.094 6.594 0.094s4.888-0.019 6.594-0.094c1.7-0.075 2.869-0.35 3.881-0.744 1.050-0.406 1.944-0.956 2.831-1.844s1.438-1.781 1.844-2.831c0.394-1.019 0.669-2.181 0.744-3.881 0.075-1.706 0.094-2.25 0.094-6.594s-0.019-4.887-0.094-6.594c-0.075-1.7-0.35-2.869-0.744-3.881-0.394-1.063-0.938-1.956-1.831-2.844-0.887-0.887-1.781-1.438-2.831-1.844-1.019-0.394-2.181-0.669-3.881-0.744-1.712-0.081-2.256-0.1-6.6-0.1v0z"></path>
                                        <path d="M16 7.781c-4.537 0-8.219 3.681-8.219 8.219s3.681 8.219 8.219 8.219 8.219-3.681 8.219-8.219c0-4.537-3.681-8.219-8.219-8.219zM16 21.331c-2.944 0-5.331-2.387-5.331-5.331s2.387-5.331 5.331-5.331c2.944 0 5.331 2.387 5.331 5.331s-2.387 5.331-5.331 5.331z"></path>
                                        <path d="M26.462 7.456c0 1.060-0.859 1.919-1.919 1.919s-1.919-0.859-1.919-1.919c0-1.060 0.859-1.919 1.919-1.919s1.919 0.859 1.919 1.919z"></path>
                                    </symbol></use></svg></a>
                    </div>
                </div>
            </div>
        </div>
    </header>