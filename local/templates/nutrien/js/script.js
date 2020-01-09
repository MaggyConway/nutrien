jQuery(document).ready(function ($) {

	mapInit();

	//клик на тэг (стр. статьи и на стр. клинические рекомендации)
	$('.articles-js .taglist__item a').click(function(event) {

		$('.transition-loader').css('display', 'block');

		$(this).toggleClass('active'); 
		var activeElements = [];
		$('.taglist a').each(function( index ) { 
			if($(this).hasClass('active')){
				activeElements.push($(this).attr('data-name'));
			}
		});

		var json = JSON.stringify(activeElements);
		var dataPost = { 
			tags: json
		};

		$.post( "/local/templates/nutrien/ajax/filter_articles.php", dataPost,  function( data ) {

			$('.articles-box').html(' ').append(data);
			//из родительского блока удаляю секцию статей 
			//и вставляю новую c нужными статьями (section.articles)

			$('.transition-loader').css('display', 'none');
		});

		event.preventDefault();

	});


	$('.clinicals-js .taglist__item a').click(function(event) {

		$('.transition-loader').css('display', 'block');

		$(this).toggleClass('active'); 
		var activeElements = [];
		$('.taglist a').each(function( index ) { 
			if($(this).hasClass('active')){
				activeElements.push($(this).attr('data-name'));
			}
		});

		var json = JSON.stringify(activeElements);
		var dataPost = { 
			tags: json
		};

		$.post( "/local/templates/nutrien/ajax/filter_clinicals.php", dataPost,  function( data ) {

			$('.clinical-box').html(' ').append(data);
			//из родительского блока удаляю секцию статей 
			//и вставляю новую c нужными статьями (section.articles)

			$('.transition-loader').css('display', 'none');
		});

		event.preventDefault();

	});




	

	//ЗДЕСЬ ИСПРАВЛЯЕТСЯ КОСЯК ПРИ ВЫЗОВЕ МОБИЛЬНОГО БУРГЕР-МЕНЮ
	$(".checkbox-toggle").change(function() {
		if (this.checked) {
	        $('.articles-box, .clinical-box').css('z-index', '-1');
	    } else {
	    	$('.articles-box, .clinical-box').css('z-index', '1');
	    }
	});


	// SUBMIT FORM FEEDBACK
	$('.feedback__form').submit(function (e) {
		var $form = $(this);
		$.ajax({
			type: 'post',
			url: '/include/send.php',
			data: $form.serialize()
		}).done(function (event) {
			if (event == 1) {
				$('#modal-success-container').addClass('animate_modal');
				$('body').addClass('modal-success-active');
				$('.feedback__form')[0].reset();
			}
		}).fail(function () {
			console.log('fail');
		});
		event.preventDefault();
	});

	//СЛАЙДЕРЫ
	$('#products__slider').slick({
		infinite: true,
		slidesToShow: 3,
		slidesToScroll: 3,
		dots: false,
		responsive: [
		{
			breakpoint: 1000,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 2,
				swipe: true
			}
		},
		{
			breakpoint: 800,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				swipe: true
			}
		},
		]
	});
	$('#reviews__slider').slick({
		infinite: true,
		slidesToShow: 3,
		slidesToScroll: 3,
		dots: false,
		responsive: [
		{
			breakpoint: 1500,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 2,
				swipe: true
			}
		},
		{
			breakpoint: 800,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				swipe: true
			}
		},
		]
	});
	$('#card_reviews__slider').slick({
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		dots: false
	});
	$('#slider_shops').slick({
		infinite: true,
		slidesToShow: 6,
		slidesToScroll: 3,
		dots: false,
		arrow: true,
		responsive: [
		{
			breakpoint: 1100,
			settings: {
				slidesToShow: 5,
				slidesToScroll: 5,
				swipe: true,
			},
		},
		{
			breakpoint: 1000,
			settings: {
				slidesToShow: 4,
				slidesToScroll: 4,
				swipe: true,
			},
		},
		{
			breakpoint: 850,
			settings: {
				slidesToShow: 3,
				slidesToScroll: 3,
				swipe: true,
			},
		},
		{
			breakpoint: 700,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 2,
				swipe: true,
			},
		},
		{
			breakpoint: 550,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				swipe: true,
			},
		},
		]
	});
	$('#articles__slider').slick({
		infinite: true,
		slidesToShow: 3,
		slidesToScroll: 3,
		dots: false,
		arrows: true,
		responsive: [
		{
			breakpoint: 1000,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 2,
				swipe: true
			}
		},
		{
			breakpoint: 750,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				swipe: true
			}
		},
		]
	});
	// $('#partners #partners__companies').slick({
	// 	infinite: true,
	// 	slidesToShow: 3,
	// 	slidesToScroll: 1,
	// 	dots: false,
	// 	arrows: true,
	// 	swipe: true,
	// 	responsive: [
	// 	{
	// 		breakpoint: 600,
	// 		settings: {
	// 			slidesToShow: 2,
	// 			slidesToScroll: 1,
	// 		}
	// 	},
	// 	{
	// 		breakpoint: 380,
	// 		settings: {
	// 			slidesToShow: 1,
	// 			slidesToScroll: 1,
	// 		}
	// 	},
	// 	]
	// });

	

	//FILTER
	$('.filter__item .filter__item__title').on('click', function(e) {
		e.preventDefault();

	    // Add the correct active class
	    if($(this).closest('.filter__item').hasClass('active')) {
	        // Remove active classes
	        $('.filter__item').removeClass('active');
	    } else {
	        // Remove active classes
	        $('.filter__item').removeClass('active');

	        // Add the active class
	        $(this).closest('.filter__item').addClass('active');
	    }

	    // Show the content
	    var $content = $(this).next();
	    $content.slideToggle(100);
	    $('.filter__item .filter__item__content').not($content).slideUp('fast');
	});

	const filter = $('.filter__item__content');

	filter.on('click', function(event) {
		let targ = event.target;
		let label = $(targ).parent('label');
		label.toggleClass('violetColor');
	});

	$('.filter__title').click(function() {
		const filter = $('.filter');
		$(filter).toggleClass('mini');
		if ((event.target).innerHTML == 'Показать фильтр') {
			(event.target).innerHTML = 'Скрыть фильтр';
		} else if ((event.target).innerHTML == 'Скрыть фильтр') {
			(event.target).innerHTML = 'Показать фильтр';
		}
	});


	// TABS
	const tabLinks = document.querySelectorAll(".tabs a");
	const tabPanels = document.querySelectorAll(".tabs-panel");

	for (let el of tabLinks) {
		el.addEventListener("click", e => {
			e.preventDefault();

			document.querySelector(".tabs li.active").classList.remove("active");
			document.querySelector(".tabs-panel.active").classList.remove("active");

			const parentListItem = el.parentElement;
			parentListItem.classList.add("active");
			const index = [...parentListItem.parentElement.children].indexOf(parentListItem);

			const panel = [...tabPanels].filter(el => el.getAttribute("data-index") == index);
			panel[0].classList.add("active");
		});
	}



	//STARS REVIEWS
	const slideItem = $('.reviews__slider__item, .card_reviews__slider__item');
	
	$(slideItem).each(function () {
		let rating = $(this).find('.rate_value').val();
		//console.log(rating);
		let starsBox = $(this).find('.stars');

		if(rating === '0.5') {
			starsBox.append('<span class="star_half"></span>');
			starsBox.append('<span class="star_empty"></span>');
			starsBox.append('<span class="star_empty"></span>');
			starsBox.append('<span class="star_empty"></span>');
			starsBox.append('<span class="star_empty"></span>');
		} else if(rating === '1') {
			starsBox.append('<span class="star_solid"></span>');
			starsBox.append('<span class="star_empty"></span>');
			starsBox.append('<span class="star_empty"></span>');
			starsBox.append('<span class="star_empty"></span>');
			starsBox.append('<span class="star_empty"></span>');
		} else if(rating === '1.5') {
			starsBox.append('<span class="star_solid"></span>');
			starsBox.append('<span class="star_half"></span>');
			starsBox.append('<span class="star_empty"></span>');
			starsBox.append('<span class="star_empty"></span>');
			starsBox.append('<span class="star_empty"></span>');
		} else if(rating === '2') {
			starsBox.append('<span class="star_solid"></span>');
			starsBox.append('<span class="star_solid"></span>');
			starsBox.append('<span class="star_empty"></span>');
			starsBox.append('<span class="star_empty"></span>');
			starsBox.append('<span class="star_empty"></span>');
		} else if(rating === '2.5') {
			starsBox.append('<span class="star_solid"></span>');
			starsBox.append('<span class="star_solid"></span>');
			starsBox.append('<span class="star_half"></span>');
			starsBox.append('<span class="star_empty"></span>');
			starsBox.append('<span class="star_empty"></span>');
		} else if(rating === '3') {
			starsBox.append('<span class="star_solid"></span>');
			starsBox.append('<span class="star_solid"></span>');
			starsBox.append('<span class="star_solid"></span>');
			starsBox.append('<span class="star_empty"></span>');
			starsBox.append('<span class="star_empty"></span>');
		} else if(rating === '3.5') {
			starsBox.append('<span class="star_solid"></span>');
			starsBox.append('<span class="star_solid"></span>');
			starsBox.append('<span class="star_solid"></span>');
			starsBox.append('<span class="star_half"></span>');
			starsBox.append('<span class="star_empty"></span>');
		} else if(rating === '4') {
			starsBox.append('<span class="star_solid"></span>');
			starsBox.append('<span class="star_solid"></span>');
			starsBox.append('<span class="star_solid"></span>');
			starsBox.append('<span class="star_solid"></span>');
			starsBox.append('<span class="star_empty"></span>');
		} else if(rating === '4.5') {
			starsBox.append('<span class="star_solid"></span>');
			starsBox.append('<span class="star_solid"></span>');
			starsBox.append('<span class="star_solid"></span>');
			starsBox.append('<span class="star_solid"></span>');
			starsBox.append('<span class="star_half"></span>');
		} else if(rating === '5') {
			starsBox.append('<span class="star_solid"></span>');
			starsBox.append('<span class="star_solid"></span>');
			starsBox.append('<span class="star_solid"></span>');
			starsBox.append('<span class="star_solid"></span>');
			starsBox.append('<span class="star_solid"></span>');
		}
	}); // end of each function
});


//DROPDOWM QUESTIONS
$(function() {

	var Accordion = function(el, multiple) {
		this.el = el || {};
    // more then one submenu open?
    this.multiple = multiple || false;
    
    var dropdownlink = this.el.find('.title');
    dropdownlink.on('click',
    	{ el: this.el, multiple: this.multiple },
    	this.dropdown);
};

Accordion.prototype.dropdown = function(e) {
	var $el = e.data.el,
	$this = $(this),
        //this is the ul.submenuItems
        $next = $this.next();

        $next.slideToggle();
        $this.parent().toggleClass('open');

    // if(!e.data.multiple) {
    //   //show only one menu at the same time
    //   $el.find('.submenuItems').not($next).slideUp().parent().removeClass('open');
    // }
}

const accordion = new Accordion($('.question-menu'), false);
});

// 
// Map
// 
function mapInit() {
    "use strict";

    if (jQuery('#map').length) {
        ymaps.ready(function () {
            var myMap = new ymaps.Map('map', {
                    center: [55.79730265645895,37.49033661370847],
                    zoom: 16,
                    controls: []
                }, {
                    // searchControlProvider: 'yandex#search'
                }),

                // Создаём макет содержимого.
                /*  MyIconContentLayout = ymaps.templateLayoutFactory.createClass(
                      '<div style="color: #FFFFFF; font-weight: bold;">$[properties.iconContent]</div>'
                  ),*/

                myPlacemark = new ymaps.Placemark([55.797291, 37.496731], {
                    id: '1'
                }, {

                    // Опции.
                    // Необходимо указать данный тип макета.
                    iconLayout: 'default#image',
                    // Своё изображение иконки метки.

                    iconImageHref: '/local/templates/nutrien/images/placemark_map.png',
                    // Размеры метки.
                    iconImageSize: [28, 38],
                    // Смещение левого верхнего угла иконки относительно
                    // её "ножки" (точки привязки).
                    iconImageOffset: [-14, -38]
                });

                //on mobile disable touch
        if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
            //... отключаем перетаскивание карты
            myMap.behaviors.disable('drag');
        } 

    			myPlacemark.events.add(['click'],  function (e) {
			    	$('.baloon_map').addClass('clicked');

				});
        	
                

				// ON RESIZE
		        //Get curent center and zoom
		        var pixelCenter = myMap.getGlobalPixelCenter('map');

		        //
		        function onResizeMap() {
		        if ($(window).width() > '800') { 
		            //Set New center
		            myMap.setCenter([55.79730265645895,37.49033661370847]);
		            var pixelCenter = myMap.getGlobalPixelCenter('map');
		            } else {
		                myMap.setCenter([55.797291, 37.496731]);
		            }
		        } onResizeMap();

		        window.onresize = function () {
		            onResizeMap();
		        };


            myMap.geoObjects.add(myPlacemark);
            myMap.behaviors.disable('scrollZoom');
            myMap.behaviors.disable('multiTouch'); 
            myMap.controls.add(new ymaps.control.ZoomControl({options: { position: { right: 10, top: 50 }}}));
        });
    }
}

$('.close_baloon_map').click(function(event) {
	$('.baloon_map').removeClass('clicked');
});