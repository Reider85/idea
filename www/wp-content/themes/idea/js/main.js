$().ready(function () {
	if ($('#sub-menu').length>0) {
		var currentPageItem=$('.current_page_item');
		if ($(currentPageItem).parent().length > 0) {
			if ($(currentPageItem).parent().hasClass('sub-menu')) {
				$(currentPageItem).parent().parent().addClass('current_page_item');
			}
			$(currentPageItem).parent().show();
		}
	}
	// search field
	$.fn.slideFadeToggle = function(speed, easing, callback){
		return this.animate({opacity: 'toggle'}, speed, easing, callback);
	};
	$('#search button').click(function(){
		$(this).toggleClass('active');
		$('#search form').fadeToggle(200);
    });
	$(function(){
		$(document).click(function(event) {
			if ($(event.target).closest('#search').length) return;
			$('#search form').fadeOut(200);
			$('#search button').removeClass('active');
			event.stopPropagation();
		});
	});

	function toggleSlide(ulObj){
		$('#sub-menu ul').stop().slideUp(500);
		$(ulObj).stop().slideToggle(500);
		$('#sub-menu .parent').not($(ulObj).parent()).removeClass('current_page_item');
		if ($(ulObj).parent().hasClass('parent')) {
			$(ulObj).parent().addClass('current_page_item');
		}
	}
	// sub menu
	$('#sub-menu > li').has('ul').addClass('parent');
	$('#sub-menu > li').has('ul').click(
		function (event) {
			toggleSlide($(this).find('ul'));
		}
	);

	$('#sub-menu > li > div > a').click(function(event){
		var li=$(this).parent().parent();
		if ($(li).find('ul').length>0) {
			toggleSlide($(this).parent().parent().find('ul'));
			return false;
		}
	});

	$('#sub-menu > li ul a').click(function(event){
		event.stopPropagation();
	});
	// title content
	var titleContentHeight = $('#title-content img.pull-right').height();
	$('#title-content').css({
		minHeight: titleContentHeight+'px'
	});
	
	// gallery - http://pgwjs.com/pgwslideshow/
	if ($('*').is('.pgwSlideshow')) {
		$('.right .pgwSlideshow').pgwSlideshow({
			transitionEffect: 'fading',
			displayControls: false
		});
		$('.slider .pgwSlideshow').pgwSlideshow({
			displayList: false
		});
	}

	// placement
	if ($('*').is('.selectpicker')) {
		$('.selectpicker').selectpicker({
			style: 'btn-info',
			size: 4
		});
	}
	$("#placement").change(function(){
		$("#" + this.value).show().siblings().hide();
	});
	$("#placement").change();

	// fix header / 15.01.2016

	function fixHeader() {
		var x = $(document).scrollTop();
		if (x > 60) {
			$('header').css({
				boxShadow: '0 0 5px #999'
			});
		} else {
			$('header').css({
				boxShadow: 'none'
			});
		}
	}

	$(document).scroll(
		function() {
			fixHeader();
		}
	);

});