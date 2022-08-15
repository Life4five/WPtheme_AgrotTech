<?php get_header(); ?>
<?php breadcrumbs(); ?>
<aside class="services-sidebar">
    <div class="services-sidebar__title">
        Наши услуги
    </div>
    <?php wp_nav_menu( array(
        'menu' => 'services-menu',
        'container' => 'ul',
        'menu_class' => 'services-sidebar_list',
    )); ?>
</aside>

<?php get_footer(); ?>