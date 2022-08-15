<?php get_header(); ?>

<div class="services">

        <div class="services__title subtitle"><?php the_field('services-title',5); ?></div>
        <div class="services__container">
            <?php while (have_rows('services-blocks',5)) { the_row(); ?>
            <div class="services__block">
                <a href="<?php echo get_sub_field('block-link',5); ?>">
                    <div class="services__block__container">
                        <div class="services__block__img"><img src="<?php echo get_sub_field('block-img',5); ?>" alt=""></div>
                        <div class="services__block__title"><?php echo get_sub_field('block-title',5); ?></div>
                        <div class="services__block__text"><?php echo get_sub_field('block-text',5); ?></div>
                    </div>
                </a>
            </div>
            <?php } ?>
        </div>

</div>

<?php get_footer(); ?>