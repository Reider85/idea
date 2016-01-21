$().ready(function () {
	
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
		$('#sub-menu .parent').not($(ulObj).parent()).removeClass('active');
		if ($(ulObj).parent().hasClass('parent')) {
			$(ulObj).parent().addClass('active');
		}
	}
	// sub menu
	$('#sub-menu > li').has('ul').addClass('parent');
	$('#sub-menu > li').click(
		function (event) {
			toggleSlide($(this).find('ul'));
		}
	);

	$('#sub-menu > li>div > a').click(function(event){
		var li=$(this).parent().parent();
		if ($(li).has('ul')) {
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
	if ($('.right .pgwSlideshow').length>0) {
		$('.right .pgwSlideshow').pgwSlideshow({
			transitionEffect: 'fading',
			displayControls: false
		});
	}
	if ($('.slider .pgwSlideshow').length>0) {
		$('.slider .pgwSlideshow').pgwSlideshow({
			displayList: false
		});
	}
	// placement
	if ($('.selectpicker').length>0) {
		$('.selectpicker').selectpicker({
			style: 'btn-info',
			size: 4
		});
	}

	if ($("#placement").length>0) {

		$("#placement").change(function () {
			$("#" + this.value).show().siblings().hide();
		});

		$("#placement").change();
	}
});