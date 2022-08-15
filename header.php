<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package agroTech
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link href="<?=get_stylesheet_uri()?>?v=<?=filemtime(get_template_directory() . '/style.css')?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/responsive.css?v=<?=filemtime(get_template_directory() . '/css/responsive.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/slick/slick-theme.css">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/fancybox/jquery.fancybox-1.3.8.css">
    

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <header class="front-header">
        <div class="testwrap"></div>
        <div class="wrapper">
            <div class="header__logo"><?php the_custom_logo(); ?></div>

            <div class="header__center">
                <div class="header__search">
                    <?php echo do_shortcode('[fibosearch]'); ?>
                </div>
                <div class="header__bar">
                    <?php wp_nav_menu( array(
                        'menu' => 'Menu 1',
                        'container' => 'ul',
                        'menu_class' => 'nav-bar',
                    )); ?>
                </div>
            </div>
            <div class="header__phone">
                <div>
                <svg width="14" height="18" viewBox="0 0 14 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M3.01435 1.5C3.01435 2.32843 2.33957 3 1.50718 3C0.674786 3 0 2.32843 0 1.5C0 0.671573 0.674786 0 1.50718 0C2.33957 0 3.01435 0.671573 3.01435 1.5ZM6.53061 3C7.36301 3 8.03779 2.32843 8.03779 1.5C8.03779 0.671573 7.36301 0 6.53061 0C5.69822 0 5.02344 0.671573 5.02344 1.5C5.02344 2.32843 5.69822 3 6.53061 3ZM11.555 3C12.3874 3 13.0622 2.32843 13.0622 1.5C13.0622 0.671573 12.3874 0 11.555 0C10.7226 0 10.0478 0.671573 10.0478 1.5C10.0478 2.32843 10.7226 3 11.555 3ZM11.555 8C12.3874 8 13.0622 7.32843 13.0622 6.5C13.0622 5.67157 12.3874 5 11.555 5C10.7226 5 10.0478 5.67157 10.0478 6.5C10.0478 7.32843 10.7226 8 11.555 8ZM8.03779 6.5C8.03779 7.32843 7.36301 8 6.53061 8C5.69822 8 5.02344 7.32843 5.02344 6.5C5.02344 5.67157 5.69822 5 6.53061 5C7.36301 5 8.03779 5.67157 8.03779 6.5ZM1.50718 8C2.33957 8 3.01435 7.32843 3.01435 6.5C3.01435 5.67157 2.33957 5 1.50718 5C0.674786 5 0 5.67157 0 6.5C0 7.32843 0.674786 8 1.50718 8ZM13.0622 11.5C13.0622 12.3284 12.3874 13 11.555 13C10.7226 13 10.0478 12.3284 10.0478 11.5C10.0478 10.6716 10.7226 10 11.555 10C12.3874 10 13.0622 10.6716 13.0622 11.5ZM6.53061 13C7.36301 13 8.03779 12.3284 8.03779 11.5C8.03779 10.6716 7.36301 10 6.53061 10C5.69822 10 5.02344 10.6716 5.02344 11.5C5.02344 12.3284 5.69822 13 6.53061 13ZM3.01435 11.5C3.01435 12.3284 2.33957 13 1.50718 13C0.674786 13 0 12.3284 0 11.5C0 10.6716 0.674786 10 1.50718 10C2.33957 10 3.01435 10.6716 3.01435 11.5ZM6.53061 18C7.36301 18 8.03779 17.3284 8.03779 16.5C8.03779 15.6716 7.36301 15 6.53061 15C5.69822 15 5.02344 15.6716 5.02344 16.5C5.02344 17.3284 5.69822 18 6.53061 18Z" fill="#1B91E3"/>
                </svg>
                </div>
                <div><a><?php the_field('header-phone', 5); ?></a></div>
                <div><a style="color:#4AA8FF" class="header__phone-link">Заказать звонок</a></div>
            </div>
            <div class="header__icon-search">
                <img src="<?php echo get_template_directory_uri(); ?>/img/icon-search.svg" alt="">
            </div>
            <div class="header__icon-cart">
                <a href="<?php echo esc_url( wc_get_cart_url() ); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/icon-cart.svg" alt="">
                </a>
            </div>
        </div>
        <div class="popup-blackout"></div>
        <div class="popup-phone popup">
                <div class="popup-phone-container">
                    <div class="popup-phone-title"><span>ЗАПОЛНИТЕ ФОРМУ И МЫ СВЯЖЕМСЯ С ВАМИ</span></div>
                    <div class="popup-phone-form"><?php echo do_shortcode('[contact-form-7 id="224" title="popup-phone"]'); ?></div>
                </div>
            </div>
    </header>