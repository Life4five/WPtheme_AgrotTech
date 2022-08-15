<?php get_header(); ?>

<div class="press-main wrapper">

    <div>
        <?php breadcrumbs(); ?>
        <aside class="about-sidebar">
            <div class="about-sidebar__title">
                О компании
            </div>
            <?php wp_nav_menu( array(
                        'menu' => 'about-menu',
                        'container' => 'ul',
                        'menu_class' => 'about-sidebar_list',
                    )); ?>
        </aside>
    </div>
    <div class="press-content">
        <div class="page_title">ПРЕСС-ЦЕНТР</div>
    </div>


</div>

<?php get_footer(); ?>