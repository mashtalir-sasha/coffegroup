$(function() {

	// Скролинг по якорям
	$('.anchor').bind("click", function(e){
		var anchor = $(this);
		$('html, body').stop().animate({
			scrollTop: $(anchor.attr('href')).offset().top-0 // отступ от меню
		}, 500);
	e.preventDefault();
	});

	// Клик по гамбургеру на моб версии
	$('.nav-ico').click(function() {
		$('.menu').toggleClass('show');
	});
	$('.menu-list__item, .menu-close').click(function() {
		$('.menu').removeClass('show');
	});

	$('.catalog-item').click(function () {
		$(this).toggleClass('active');
		$(this).find('.catalog-item__ttl').toggleClass('h4_bold');
		$('.catalog-item').not(this).removeClass('active');
		$('.catalog-item').not(this).find('.catalog-item__ttl').removeClass('h4_bold');
	});

	$('.slider1').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		dots: false,
		arrows: true,
		fade: true,
		responsive: [
			{
				breakpoint: 1200,
				settings: {
					dots: true,
					arrows: false,
				}
			},
		]
	});

	$('.catalog-item.i1').click(function () {
		$('.slider1').toggleClass('active');
		$('.catalog-slider').not('.slider1').removeClass('active');
		$('.slider1').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			dots: false,
			arrows: true,
			fade: true,
			responsive: [
				{
					breakpoint: 1200,
					settings: {
						dots: true,
						arrows: false,
					}
				},
			]
		});
	});
	$('.catalog-item.i2').click(function () {
		$('.slider2').toggleClass('active');
		$('.catalog-slider').not('.slider2').removeClass('active');
		$('.slider2').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			dots: false,
			arrows: true,
			fade: true,
			responsive: [
				{
					breakpoint: 1200,
					settings: {
						dots: true,
						arrows: false,
					}
				},
			]
		});
	});
	$('.catalog-item.i3').click(function () {
		$('.slider3').toggleClass('active');
		$('.catalog-slider').not('.slider3').removeClass('active');
		$('.slider3').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			dots: false,
			arrows: true,
			fade: true,
			responsive: [
				{
					breakpoint: 1200,
					settings: {
						dots: true,
						arrows: false,
					}
				},
			]
		});
	});
	$('.catalog-item.i4').click(function () {
		$('.slider4').toggleClass('active');
		$('.catalog-slider').not('.slider4').removeClass('active');
		$('.slider4').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			dots: false,
			arrows: true,
			fade: true,
			responsive: [
				{
					breakpoint: 1200,
					settings: {
						dots: true,
						arrows: false,
					}
				},
			]
		});
	});


	// Отправка формы
	$('form').submit(function() {
		var data = $(this).serialize();
		data += '&ajax-request=true';
		$.ajax({
			type: 'POST',
			url: '/mail.php',
			dataType: 'json',
			data: data,
			success: (function() {
				$.fancybox.close();
				window.open('/thanks.php');
			})()
		});
		return false;
	});

	// Инит фансибокса
	$('.fancybox').fancybox({
		margin: 0,
		padding: 0
	});

	// Функция для анимации
	$(".scroll").each(function () {
		var block = $(this);
		$(window).scroll(function() {
			if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
				var top = block.offset().top+400;
			} else {
				var top = block.offset().top+400;
			}
			var bottom = block.height()+top;
			top = top - $(window).height();
			var scroll_top = $(this).scrollTop();
			if ((scroll_top > top) && (scroll_top < bottom)) {
				if (!block.hasClass("animated")) {
					block.addClass("animated");
					block.trigger('animatedIn');
				}
			}

			if ($('.catalog').hasClass('animated') == true ) {
				$('.about').find('.line-marker').hide();
			}
			if ($('.offer').hasClass('animated') == true ) {
				$('.catalog').find('.line-marker').hide();
			}
			if ($('.coop').hasClass('animated') == true ) {
				$('.offer').find('.line-marker').hide();
			}


		});
		
	});


	$('.reviews-slider').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		dots: false,
		arrows: true,
		fade: true,
		adaptiveHeight: true
	});

	tippy('[data-tippy-content]');

	function getAllUrlParams(url) {
		var queryString = url ? url.split('?')[1] : window.location.search.slice(1);
		var obj = {};
		if (queryString) {
			queryString = queryString.split('#')[0];
			var arr = queryString.split('&');
			for (var i=0; i<arr.length; i++) {
				var a = arr[i].split('=');
				var paramNum = undefined;
				var paramName = a[0].replace(/\[\d*\]/, function(v) {
					paramNum = v.slice(1,-1);
					return '';
				});
				var paramValue = typeof(a[1])==='undefined' ? true : a[1];
				paramName = paramName.toLowerCase();
				paramValue = paramValue.toLowerCase();
				if (obj[paramName]) {
					if (typeof obj[paramName] === 'string') {
						obj[paramName] = [obj[paramName]];
					}
					if (typeof paramNum === 'undefined') {
						obj[paramName].push(paramValue);
					}
					else {
						obj[paramName][paramNum] = paramValue;
					}
				}
				else {
					obj[paramName] = paramValue;
				}
			}
		}
		return obj;
	};

	var param = getAllUrlParams().rate;
	if (param == 'middle') {
		$('.form-ttl span').html('Middle.');
		$('.calc-form input[name=paket]').val('Middle');
	}
	if (param == 'senior') {
		$('.form-ttl span').html('Senior.');
		$('.calc-form input[name=paket]').val('Senior');
	}
	if (param == 'teamlead') {
		$('.form-ttl span').html('Team Lead.');
		$('.calc-form input[name=paket]').val('Team Lead');
	}

	$('.calc-form').on('change',function() {
		var totalRate = 0;
		$('.radio input:checked').each(function() {
			totalRate += parseInt( $(this).data('rate') );
		});

		if (param == 'senior') {
			if (totalRate >= 9) {
				$('.form-ttl span').html('Senior.');
				$('.calc-form input[name=paket]').val('Senior');
			}
			if (totalRate >= 14) {
				$('.form-ttl span').html('Team Lead.');
				$('.calc-form input[name=paket]').val('Team Lead');
			}
		}

		if (param == 'middle') {
			if (totalRate >= 4) {
				$('.form-ttl span').html('Middle.');
				$('.calc-form input[name=paket]').val('Middle');
			}
			if (totalRate >= 9) {
				$('.form-ttl span').html('Senior.');
				$('.calc-form input[name=paket]').val('Senior');
			}
			if (totalRate >= 14) {
				$('.form-ttl span').html('Team Lead.');
				$('.calc-form input[name=paket]').val('Team Lead');
			}
		}
	});

});
