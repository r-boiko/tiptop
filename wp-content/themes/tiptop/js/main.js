(function($) {
	$(document).ready(function() {
	
		//top-menu
		$('.burger').on('click', function() {
			$('.top-menu__wrapper').slideToggle();
		});
		$(window).on('resize', function() {
			$('.top-menu__wrapper').removeAttr('style');
		});


		//sliders
		var example_slider = $('.example-slider');
		if (example_slider.length) {
			example_slider.slick({
				arrows: false,
				dots: true,
				centermode: true,
				slidesToShow: 3,
				responsive: [
					{
						breakpoint: 992,
						settings: {
							slidesToShow: 2
						}
					},
					{
						breakpoint: 576,
						settings: {
							slidesToShow: 1
						}
					}
				]
			});
		}

		var project_slider = $('.project-slider');
		if (project_slider.length) {
			project_slider.slick({
				arrows: false,
				dots: true,
				appendDots: $('.project-slider__thumbs'),
				customPaging: function (slick, index) {
					var image = $(slick.$slides[index]).find('.slide-thumb').attr('src');
					return '<div class="thumb bg-layout-cover" style="background-image: url(' + image + ');"></div>';
				}
			});
		}

		var serm_slider = $('.serm-slider');
		if (serm_slider.length) {
			serm_slider.slick({
				slidesToShow: 3,
				prevArrow: '<button class="slick-prev slick-arrow" aria-label="Prev" type="button"><i class="icon-left-open"></i></button>',
				nextArrow: '<button class="slick-next slick-arrow" aria-label="Next" type="button"><i class="icon-right-open"></i></button>',
				responsive: [
					{
						breakpoint: 992,
						settings: {
							slidesToShow: 2
						}
					},
					{
						breakpoint: 576,
						settings: {
							slidesToShow: 1
						}
					}
				]
			});
		}

		var tab_pane = $('.tab-pane');
		function tab_pane_settings() {
			return {
				arrows: false,
				dots: true,
				customPaging: function (slick, index) {
					var image = $(slick.$slides[index]).find('.slide-thumb').attr('src');
					return '<div class="thumb bg-layout-cover" style="background-image: url(' + image + ');"></div>';
				}
			}
		}
		if (tab_pane.length) {
			tab_pane.slick(tab_pane_settings());
		}

		var testimonials_slider = $('.testimonials-slider'),
			faces_slider = $('.faces-slider');
		if (faces_slider.length) {
			faces_slider.slick({
				prevArrow: '<button class="slick-prev slick-arrow" aria-label="Prev" type="button"><i class="icon-left"></i></button>',
				nextArrow: '<button class="slick-next slick-arrow" aria-label="Next" type="button"><i class="icon-right"></i></button>',
				slidesToShow: 3,
				focusOnSelect: true,
				centerMode: true,
				centerPadding: '5px',
				asNavFor: testimonials_slider,
				responsive: [
					{
						breakpoint: 576,
						settings: {
							slidesToShow: 1
						}
					}
				]
			});
		}
		if (testimonials_slider.length) {
			testimonials_slider.slick({
				arrows: false,
				fade: true
			});
		}

		//reinit slick after tabs changing
		$('a[data-toggle="tab"]').on('shown.bs.tab', function(e) {
			tab_pane.slick('unslick');
			tab_pane.slick(tab_pane_settings());
		})


		//jquery form validation
		$('#contact-form').validate({
			rules: {
				user_name: 'required',
				user_tel: 'required',
				user_mess: 'required'
			},
			messages: {
				user_name: 'Это поле необходимо заполнить',
				user_tel: 'Это поле необходимо заполнить',
				user_mess: 'Это поле необходимо заполнить'
			}
		});

		$('#modal-form').validate({
			rules: {
				user_name: 'required',
				user_tel: 'required'
			},
			messages: {
				user_name: 'Это поле необходимо заполнить',
				user_tel: 'Это поле необходимо заполнить'
			}
		});

		$('#subscribe-form').validate({
			rules: {
				user_name: 'required'
			},
			messages: {
				user_name: 'Это поле необходимо заполнить'
			},
			errorPlacement: function(error, element) {
				if (element.attr("name") == "user_name") error.insertAfter($('.subscribe-form .input-wrapper'));
			}
		});



	
	});
}) (jQuery);