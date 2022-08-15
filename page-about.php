<?php get_header(); ?>

<div class="about-main wrapper">

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
    <div class="about-content">
        <div class="page_title">КОМПАНИЯ «РЗС» </div>
        <div class="about-text">
            <?php echo the_field('about-text'); ?>
        </div>
        <div class="about-video">
            <div class="play-btn">
                <img src="<?php echo get_template_directory_uri(); ?>/img/play-btn.svg" alt="">
            </div>
        </div>
        <div class="about-video-file popup">
            <video class="video" src="<?php echo get_template_directory_uri(); ?>/img/about.mp4" controls width="960" height="540"></video>
        </div>
        <div class="about-list">
            <div class="about-list__title">
            Основные направления <br> деятельности «РЗС»:
            </div>
            <ul>
                <li>Производство и продажа прицепной сельскохозяйственной техники отечественного и импортного производства и их аналогов</li>
                <li>Аналоги LEMKEN, AMAZONE и др. топовых брендов.</li>
                <li>Производство и продажа запасных частей.</li>
                <li>Ремонт и усовершенствование всех видов прицепных агрегатов</li>
                <li>Услуги по приобретению техники в кредит, лизинг.</li>
                <li>Ремонт гидравлических узлов и оборудования.</li>
                <li>Ремонт сельскохозяйственных шин.</li>
                <li>Восстановление дисков к дисковым орудиям.</li>
            </ul>
        </div>

        <div class="questions">
            <div>
                <div class="questions__title title"><?php the_field('questions-title', 5); ?></div>
                <div class="questions__subtitle subtitle"><?php the_field('questions-subtitle', 5); ?></div>
                <div class="questions__text">
                    <?php the_field('questions-text', 5); ?>
                </div>
            </div>
            <div class="questions__form">
                        <?php echo do_shortcode('[contact-form-7 id="8" title="Front_contact_form"]'); ?>
                </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>