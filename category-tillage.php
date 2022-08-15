<?php get_header(); ?>

<div class="tillage-main wrapper">
    <?php breadcrumbs(); ?>
    <div class="tillage-container">
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
        <div class="tillage_content">
            <div class="tillage__title">УСЛУГИ ПО ОБРАБОТКЕ ПОЧВЫ</div>
            <div class="tillage__text"><b>Оказываем услуги по обработке земли по Ростовской области и Краснодарскому краю</b></div>
            <ul class="tillage__list">
                <li class="tillage__list-service">
                    <div class="tillage__list-service-name">Пахотные работы</div>
                    <span class="tillage__list-dots"></span>
                    <div class="tillage__list-price">1300 р/га</div>
                </li>
                <li class="tillage__list-service">
                    <div class="tillage__list-service-name">Дискование</div>
                    <span class="tillage__list-dots"></span>
                    <div class="tillage__list-price">800 р/га</div>
                </li>
                <li class="tillage__list-service">
                    <div class="tillage__list-service-name">Сев пропашных культур</div>
                    <span class="tillage__list-dots"></span>
                    <div class="tillage__list-price">Цена договорная</div>
                </li>
                <li class="tillage__list-service">
                    <div class="tillage__list-service-name">Чизелевание</div>
                    <span class="tillage__list-dots"></span>
                    <div class="tillage__list-price">1300 р/га</div>
                </li>
            </ul>
            <div class="tillage__btns">
                <div class="tillage__btn tillage__offer"><a href="">Заказать</a></div>
                <div class="tillage__btn tillage__consult"><a href="">Консультация</a></div>
            </div>
        </div>
    </div>
    <div class="tillage__img">
        <svg width="1295" height="747" viewBox="0 0 1295 747" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M690 0V110.5V566H0V746.5H1298.5V0H690Z" fill="#E9F5FF"/>
        </svg>
        <img src="<?php echo get_template_directory_uri(); ?>/img/tillage-img.png" alt="">
    </div>
</div>
<?php get_footer(); ?>