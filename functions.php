<?php
add_theme_support('post-thumbnails');
add_theme_support( 'title-tag' );
add_theme_support('custom-logo');
/**
 * family_psih functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package family_psih
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}



/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
function page_h1_title ($id='') {
    if (!get_field('hide_h1') && page_title($id) !== false) { ?>
        <h1 class="page_title"><span><?=page_title($id)?></span></h1>
    <? }
}
function page_content () {
    if ( !empty(get_the_content()) ) { ?>
        <div class="text"><? the_content(); ?></div>
    <? } else {
        return false;
    }
    return true;
}
function page_title ($id='') {
    $cat_id = '';
    if (!empty($id)) {
        $cat_id = 'category_'.$id;
    }
    $alt_title_cat = get_field('alt_title', $cat_id);
    $alt_title_post = get_field('alt_title', $id);
    $title_cat = single_cat_title('', false);
    $title_post = get_the_title($id);
    if (!empty($alt_title_post)) {
        return $alt_title_post;
    } elseif (!empty($alt_title_cat)) {
        return $alt_title_cat;
    } elseif (!empty($title_cat)) {
        return $title_cat;
    } elseif (!empty($title_post)) {
        return $title_post;
    } else {
        return false;
    }
}
function breadcrumbs() {
    if ( function_exists('yoast_breadcrumb') ) {
        yoast_breadcrumb( '<div class="brcr">', '</div>' );
    }
}

function get_tel_link($text) {
	$tel_link = preg_replace('|[^0-9\+]|', '', $text );
	return $tel_link;
}

/**
 * Woocommerce функции
 */

// Поддержка темы

function mytheme_add_woocommerce_support () {
	add_theme_support ('woocommerce');
	// add_theme_support( 'wc-product-gallery-zoom' );
	// add_theme_support( 'wc-product-gallery-lightbox' );
	// add_theme_support( 'wc-product-gallery-slider' );
}

add_action ('after_setup_theme', 'mytheme_add_woocommerce_support');

// Удаление стандартных оберток

remove_action ('woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action ('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);
remove_action ('woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);
remove_action ('woocommerce_sidebar', 'woocommerce_get_sidebar', 10);
add_filter( 'woocommerce_show_page_title', '__return_false' );

// отключаем сортировку и показ количества товаров в категории
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20);
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30);

// Подключение новых оберток

add_action ('woocommerce_before_main_content', 'page_wrapper_start', 10);
add_action ('woocommerce_after_main_content', 'page_wrapper_end', 10);

//отключаем все стандартные css
add_filter( 'woocommerce_enqueue_styles', '__return_false' );

// Формирование блоков над контентом страницы
function page_wrapper_start () { ?>
	<div class="content">
		<div class="wrapper"><?
            breadcrumbs(); // Хлебные крошки
            // Заголовок
            if ( !is_product() ) {
				if (!is_paged()) { // h1 должен выводиться только на 1-й странице категории (требование СЕО)
				 ?><div class="h1 title"><?
				  echo page_title();
				 ?></div><?
				} else {
				 echo '<h1 class="h1-seo">'.page_title().'</h1>';
				}
			   }
			?><div class="page_content <?php if (!is_product()) echo "not_product_content" ?>"><? // класс для всех нетоварных страниц
				if ( !is_cart() && !is_checkout() && !is_product() ) { 
					get_sidebar(); // Задаем сайдбар на всех страницах, кроме корзины и оформления заказа и страницы товара
					?><div class="page_side_content"><?
				} else {
					?><div class="page_full_content"><?
				}
}

// Формирование блоков под контентом страницы
function page_wrapper_end () { ?>
				</div>
			</div>
		</div>
	</div>
<? }
// Кастомизация табов на стр. товара

function woo_customize_pr_tabs( $tabs ) {

    unset( $tabs['reviews'] );   // Удалить таб "Отзывы"

    $tabs['description'] = array(
        'title' => 'Описание',
        'priority'  => 2,
        'callback' => 'woo_descr_tab',
    );

	$tabs['additional_information'] = array(
        'title' => 'Технические характеристики',
        'priority'  => 1,
        'callback' => 'additional_tab',
    );

    return $tabs;
}

function woo_descr_tab () {
    if (!empty(get_the_content())) {
        the_content();
    } else {
        echo 'У данного товара нет описания';
    }
    
}
add_filter( 'woocommerce_product_tabs', 'woo_customize_pr_tabs', 98 );

function additional_tab () {
	global $product;
	echo
		'<div class="attributes-table-header">',
		'<div>Наименование показателя</div>',
		'<div>'.$product -> get_name().'</div>',
		'</div>';
    do_action( 'woocommerce_product_additional_information', $product );
}
add_filter( 'woocommerce_product_tabs', 'woo_customize_pr_tabs', 98 );

function custom_single_product_short_attrs() { 
    global $product; 
    if ( !empty($product->get_attributes()) ) { ?>
        <div class="single_product_short_attrs">
            <div class="single_product_short_attrs_tit">Технические характеристики:</div>
            <div class="single_product_title">
                <div>Наименование</div><div><?php echo $product -> get_name();   ?></div>
            </div>
            <div class="single_product_short_attrs_list">
                <?php  wc_display_product_attributes($product); ?>
            </div>
        </div>
    <? }
   }
   add_action( 'woocommerce_single_product_summary', 'custom_single_product_short_attrs', 9 );
   


// Удаление "похожие товары"
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20);


function show_cat_pr_page() {
    ?><div class="cat_pr_page_block"><?php 
    global $product;
    echo wc_get_product_category_list( $product->get_id(), ', ', '<span class="cat_pr_page"> ', '</span>' );
    ?></div><?php
}
add_action( 'woocommerce_before_single_product_summary', 'show_cat_pr_page', 4 );
remove_action ('woocommerce_single_product_summary', 'woocommerce_template_single_title', 5);
add_action ('woocommerce_before_single_product_summary', 'woocommerce_template_single_title', 5);


// Страница "Каталог"

remove_action('woocommerce_before_main_content', 1);

// Подключение виджетов
function theme_widgets_init() {
	register_sidebar( array(
		'name'          => 'Sidebar-2',
		'id'            => 'sidebar-2',
		'description'   => 'Вставьте виджеты сюда',
		'before_title'  => '<div class="widget-title">',
		'after_title'   => '</div>',
	) );
}
add_action( 'widgets_init', 'theme_widgets_init' );

// add_action( 'woocommerce_after_shop_loop_item_title', 'read_more' );


// function read_more() {
//     global $product;
//     if ( $product ) {
//         $url = esc_url( $product->get_permalink() );
//         echo '<a rel="nofollow" href="' . $url . '" class="read_more">Подробнее</a>';
//     }
// }

// Изменяет символ валюты
function change_existing_currency_symbol( $currency_symbol, $currency ) {
    switch( $currency ) {
		case 'RUB': 
			$currency_symbol = ' &#8381;'; 
		break;
    }
    return $currency_symbol;
}
add_filter('woocommerce_currency_symbol', 'change_existing_currency_symbol', 10, 2);


// Миниатюра
function change_woo_thumbnail_size($size){

    $size['width'] = 342;
    $size['height'] = 257;
    $size['crop']   = 0;
    return $size;
}
add_filter('woocommerce_get_image_size_thumbnail','change_woo_thumbnail_size',1,10);

add_filter('woocommerce_get_image_size_gallery_thumbnail','add_gallery_thumbnail_size',1,10);
function add_gallery_thumbnail_size($size){

    $size['width'] = 141;
    $size['height'] = 139;
    $size['crop']   = 1;
    return $size;
}


function custom_get_product_tags ($product) {
	$terms = get_the_terms( $product->get_id(), 'product_cat' );

	if ( is_wp_error( $terms ) ) {
		return $terms;
	}

	if ( empty( $terms ) ) {
		return false;
	}

	$tags = array();

	foreach ( $terms as $term ) {
		$tags[] = $term->name;
	}
	$tags_text = implode(', ', $tags);
	return $tags_text;
}

// Скрытие "Распродажа!"
remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 10 );

// Вес и метки в карточках товаров
function show_weight_and_tags_prod_card() {
	global $product;
	$tags = custom_get_product_tags($product);
	echo '<div class="product_card-meta">';
	echo '<span class="product-tags">' . $tags . '</span>';
	echo '</div>';
}
add_action( 'woocommerce_shop_loop_item_title', 'show_weight_and_tags_prod_card', 5 );

remove_action( 'woocommerce_cart_collaterals', 'woocommerce_cross_sell_display' );


// Для получения данных мини-корзины аяксом
function show_data_for_ajax_cart() {
    $arr = array(
     'qty' => WC()->cart->get_cart_contents_count(),
     'sum' => WC()->cart->get_cart_subtotal(),
    );
    wp_send_json( $arr );
   }
   add_action( 'wp_ajax_upd_cart', 'show_data_for_ajax_cart' );
   add_action( 'wp_ajax_nopriv_upd_cart', 'show_data_for_ajax_cart' );


// Удаление табов со страницы товара
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10);

function show_custom_button() {
	echo
		'<div class="catalog__btn">',
		'<a href="#">Оставить заявку</a>',
		'</div>'
	;
   }
add_action( 'woocommerce_before_single_product_summary', 'show_custom_button', 30 );


// Удаление мета-информации
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );

// Удаления добавления в корзину
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );

// Добавляем заголовок над описанием
function single_product_descr_title() {
    global $product;
    $short_description = $product->get_short_description();

    if ( !empty($short_description) ) {
        echo '<div class="woocommerce-product-description_title">Отличительные особенности:</div>';
       }
}

add_action( 'woocommerce_after_single_product_summary', 'single_product_descr_title', 9 );
// Перемещаем краткое описание
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );
add_action( 'woocommerce_after_single_product_summary', 'woocommerce_template_single_excerpt', 10 );

// Добавляем "Вопросы" после всей карточки товара
function single_product_questions() {?>
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
<?}

add_action( 'woocommerce_after_single_product', 'single_product_questions', 10 );