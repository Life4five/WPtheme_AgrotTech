<?php get_header(); ?>

<div class="contacts-main wrapper">
    <?php breadcrumbs(); ?>
    <?php page_h1_title(); ?>
    <div class="contacts-maps">
        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ad9dee0eebe14f3ec1584f5b4ff6c96a554269e25924aaa0a80b9f525d41bf6ee&amp;width=100%25&amp;height=586&amp;lang=ru_RU&amp;scroll=false"></script>
        <div class="contacts-maps_panel">
            <div class="contacts-maps_panel-title">Мы всегда открыты сотрудничеству!</div>
            <div class="contacts-maps_panel-elem">
                <div class="contacts-maps_panel-elem-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/contacts-panel1.svg" alt="">
                </div>
                <div class="contacts-maps_panel-elem-info">
                    <div>Время работы:</div>
                    <div>пн-пт 8:00-17:00</div>
                </div>
            </div>
            <div class="contacts-maps_panel-elem">
                <div class="contacts-maps_panel-elem-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/contacts-panel2.svg" alt="">
                </div>
                <div class="contacts-maps_panel-elem-info">
                    <div>Адрес:</div>
                    <div>
                        346720, РОСТОВСКАЯ ОБЛАСТЬ,<br>
                            г. АКСАЙ, УЛ. ПРОМЫШЛЕННАЯ, 13
                    </div>
                </div>
            </div>
            <div class="contacts-maps_panel-elem">
                <div class="contacts-maps_panel-elem-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/contacts-panel3.svg" alt="">
                </div>
                <div class="contacts-maps_panel-elem-info">
                    <div>Телефон:</div>
                    <div>+7 (919) 886-55-17</div>
                </div>
            </div>
            <div class="contacts-maps_panel-elem">
                <div class="contacts-maps_panel-elem-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/contacts-panel4.svg" alt="">
                </div>
                <div class="contacts-maps_panel-elem-info">
                    <div>Почта:</div>
                    <div>info@rzs-rostov.com</div>
                </div>
            </div>
        </div>
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
        <div class="questions__img">
            <img src="<? echo get_template_directory_uri(); ?>/img/questions-img.png" alt="">
        </div>
    </div>
</div>

<?php get_footer(); ?>