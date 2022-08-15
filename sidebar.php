<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package concrete2022
 */

if ( ! is_active_sidebar( 'sidebar-2' ) ) {
	return;
}
?>

<aside class="sidebar-shop">
    <div class="sidebar-shop__title">Каталог товаров</div>
	<?php wp_nav_menu( array(
                    'menu' => 'catalog-menu',
                    'container' => 'ul',
                    'menu_class' => 'sidebar-shop__list',
                )); ?>
	<?php dynamic_sidebar( 'sidebar-2' ); ?>
</aside><!-- .sidebar-shop -->