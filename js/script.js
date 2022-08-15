console.log("script.js is loading...");


	// Срабатывание фильтра по цене при изменении положения ползунков диапозона цен
    $( ".sidebar-shop, .main_shop_filter_control" ).on( "mousedown", ".price_slider span", function() {
	  	 
        var el = $(this);
        $(document).on("mouseup", function(){
            $(el).closest('form').submit();
        })
     
   });

   	function open_popupBlackout() {
		$(".popup-blackout").show();
	   };

    $(".popup-blackout").click(function() {
        $(".popup-blackout, .popup").hide();
        $("body").css('overflow', 'visible');
		$('video').get(0).pause();
    });
    $(".header__phone, .import__btn").click(function() {
        $('.popup-phone, .popup-blackout').show();
        $("body").css('overflow', 'hidden');
    });

    	// Галерея товара

	if ($('.woocommerce-product-gallery__image').length > 1) {
		var pr_gal = $('.woocommerce-product-gallery__wrapper');
		var gal_imgs = 3;

		pr_gal.addClass('woocommerce-product-thumbs');

		pr_gal.find('.wp-post-image').closest('a')
		.clone()
		.insertAfter(pr_gal)
		.wrap('<div class="wp-post-image_wrap"></div>');

		if (pr_gal.find('div').length > gal_imgs) {
			pr_gal.addClass('woocommerce-product-gallery_scroll');
			pr_gal.find('div').eq(gal_imgs-1).nextAll('div').hide();
			// pr_gal.prepend('<img class="slider_arr slider-prev" src="/wp-content/themes/vseti/images/sl_arr_up.png" alt="">');
			// pr_gal.append('<img class="slider_arr slider-next" src="/wp-content/themes/vseti/images/arr_down.png" alt="">');
			pr_gal.prepend('<svg class="slider_arr slider-prev"><use xlink:href="#arr_top"></use></svg>');
			pr_gal.append('<svg class="slider_arr slider-next"><use xlink:href="#arr_down"></use></svg>');
			pr_gal.on('click', '.slider-prev', function(){
				if (pr_gal.find('div:visible').length == gal_imgs) {
					if (pr_gal.find('div:visible').first().prev('div').length != 0) {
						pr_gal.find('div:visible').last().slideUp();
					}
					pr_gal.find('div:visible').first().prev('div').slideDown();
				}
			});
			pr_gal.on('click', '.slider-next', function(){
				if (pr_gal.find('div:visible').length == gal_imgs) {
					if (pr_gal.find('div:visible').last().next('div').length != 0) {
						pr_gal.find('div:visible').first().slideUp();
					}
					pr_gal.find('div:visible').last().next('div').slideDown();
				}
			});
		}
	} else {
		$('.woocommerce-product-gallery__image').addClass('wp-post-image_wrap');
	}
	$('.woocommerce-product-gallery').find('a').attr({'rel':'gallery'}).fancybox();
	$('.woocommerce-product-gallery').find('img').attr({'title':''});


	// Блок с видео на странице "О компании
	$(".about-video").click(function() {
		open_popupBlackout();
		$(".about-video-file").show();
	});

	// $(window).on("scroll touchmove", function() {
	// 	var windowsize = $(window).width();
	
	// 	if ($(document).scrollTop() > 68) {
	// 		$('header').css('position', 'fixed');
	// 		$('.header__search').hide();
	// 		$('header > .wrapper').css('align-items', 'center');
	// 		$('.header__icon-search').show();
	// 	} else {
	// 		$('header').css('position', 'static');
	// 		$('.header__search').show();
	// 		$('header > .wrapper').css('align-items', 'flex-start');
	// 		$('.header__icon-search').hide();

	// 	}
	
	  
	// });




	// Кнопки + / -

	function insertQtyControls (quantity) {
		if (quantity.length != 0 && quantity.siblings('.pr_qty_minus').length == 0) {
			quantity.before('<span class="pr_qty_minus disabled">-</span>');
		}
		if (quantity.length != 0 && quantity.siblings('.pr_qty_plus').length == 0) {
			quantity.after('<span class="pr_qty_plus">+</span>');
		}
	}

	insertQtyControls($('.quantity').not('.hidden'));

	$( ".content" ).on( "change", ".quantity .qty", function() {
		if ($(this).val() > 1) {
			$(this).parent().siblings('.pr_qty_minus').removeClass('disabled');
		} else {
			$(this).parent().siblings('.pr_qty_minus').addClass('disabled');
		}
		var add_to_cart_button = $( this ).closest( ".product, .wish_list_item, .analogue_list_item" ).find( ".add_to_cart_button" );
		// Для работы добавления в корзину с помощью AJAX
		add_to_cart_button.attr( "data-quantity", $( this ).val() );
		// Для работы добавления в корзину БЕЗ AJAX
		add_to_cart_button.attr( "href", "?add-to-cart=" + add_to_cart_button.attr( "data-product_id" ) + "&quantity=" + $( this ).val() );
		// Для автообновления на странице корзины
		$('[name=update_cart]').removeAttr('disabled').click();
	});
	

	$('.content').on('click', '.pr_qty_minus', function(){
		var prod_change = $(this).siblings().find('input');
		var prod_count = $(prod_change).val();
		if (prod_count > 1) {
			prod_change.val(+prod_count - 1);
		}
		prod_change.change();
	});
	$('.content').on('click', '.pr_qty_plus', function(){
		var prod_change = $(this).siblings().find('input');
		var prod_count = $(prod_change).val();
		prod_change.val(+prod_count +1);
		prod_change.change();
	});


	// Анимация добавления в корзину
	$( ".content" ).on( "click", ".add_to_cart_button", function() {
		if ( /^\?add-to-cart(.*?)$/.test($(this).attr('href')) &&(!$(this).hasClass('prod_with_opts'))) {
			var img = $(this).closest('li').find('.woocommerce-loop-product__link').find('img');
			if (img.length == 0) {
				img = $(this).closest('.wish_list_item').find('.product-thumbnail').find('img');
				if (img.length == 0) {
					return;
				}
			}
			if (window.innerWidth <= WIDTH_TABL) {
				var minicart = $('.h_mob_cart');
			} else {
				var minicart = $('.h_cart');
			}
			img
			.clone()
			.appendTo('body')
			.css({
				"position": "absolute", 
				"top": img.offset().top+"px", 
				"left": img.offset().left+"px", 
				"z-index": 10000
			}).animate({
				left: minicart.offset().left + minicart.width()+"px",
				top: minicart.offset().top+"px",
				width: 'hide',
				height: 'hide',
			}, 700);
		}
	});

	// Обновление мини-корзины ajax
	$('body').on('added_to_cart removed_from_cart wc_fragments_refreshed', function(){
		$.ajax({
			type: "POST",
			url: '/wp-admin/admin-ajax.php',
			data: 'action=upd_cart',

			success: function(answ){
				if (answ.qty != 0) {
					if ($('.mini_cart_qty').length != 0) {
						$('.mini_cart_qty').text(answ.qty);
					} else {
						$('.mini_cart_qty_wrap').html('<div class="h_cart_qty mini_cart_qty">'+answ.qty+'</div>');
					}
				}
			}
		});
	});


console.log("script.js has been loaded.");