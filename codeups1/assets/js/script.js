// ローディング判定
jQuery(function ($) {
jQuery(window).on("load", function() {
	jQuery("body").attr("data-loading", "true");
});

jQuery(function() {
	// スクロール判定
	jQuery(window).on("scroll", function() {
		if (100 < jQuery(this).scrollTop()) {
			jQuery("body").attr("data-scroll", "true");
		} else {
			jQuery("body").attr("data-scroll", "false");
		}
	});

	/* ドロワー */
	jQuery(".js-drawer").on("click", function(e) {
		e.preventDefault();
		let targetClass = jQuery(this).attr("data-target");
		jQuery("." + targetClass).toggleClass("is-checked");
		return false;
	});

	/* ナビバートグル */
	$(function() {
		$('.js-hamburger').on('click', function () {
		$(this).toggleClass('open');
		$('.js-drawer-menu').fadeToggle('open');
		$('.js-overlay').fadeToggle('open');
		});
	});
	/* ナビメニュー以外にクリックしても開閉 */
	$(function() {
		$('.js-overlay').on('click', function () {
		$('.js-drawer-menu').fadeOut();
		$('.js-overlay').fadeOut();
		$('.js-hamburger').toggleClass('open');
		});
	});

	/* スクロールするとヘッダーの背景色変更 */
	$(function () {
		$(window).on("scroll", function () {
		const sliderHeight = $(".p-mv").height();
		if (sliderHeight - 30 < $(this).scrollTop()) {
		$(".js-top-header").addClass("headerColorScroll");
		} else {
		$(".js-top-header").removeClass("headerColorScroll");
		}
		});
	});
	$(function () {
		$(window).on("scroll", function () {
		const sliderHeight = $(".p-sub-mv").height();
		if (sliderHeight - 30 < $(this).scrollTop()) {
		$(".js-sub-header").addClass("headerColorScroll");
		} else {
		$(".js-sub-header").removeClass("headerColorScroll");
		}
		});
	});

	/* スムーススクロール */
	jQuery('a[href^="#"]').click(function() {
		let header = jQuery(".js-top-header").height();
		let speed = 300;
		let id = jQuery(this).attr("href");
		let target = jQuery("#" == id ? "html" : id);
		let position = jQuery(target).offset().top - header;
		if ("fixed" !== jQuery("#header").css("position")) {
			position = jQuery(target).offset().top;
		}
		if (0 > position) {
			position = 0;
		}
		jQuery("html, body").animate(
			{
				scrollTop: position
			},
			speed
		);
		return false;
	});

	/* 電話リンク */
	let ua = navigator.userAgent;
	if (ua.indexOf("iPhone") < 0 && ua.indexOf("Android") < 0) {
		jQuery('a[href^="tel:"]')
			.css("cursor", "default")
			.on("click", function(e) {
				e.preventDefault();
			});
	}
});
});
