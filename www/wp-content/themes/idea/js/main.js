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
	
	// sub menu
	$('#sub-menu > li').has('ul').addClass('parent');
	$('#sub-menu > li').click(
		function () {
			$('#sub-menu ul').stop().slideUp(500);
			$(this).find('ul').stop().slideToggle(500);
			$('#sub-menu .parent').not(this).removeClass('active');
			if ($(this).hasClass('parent')) {
				$(this).toggleClass('active');
			}
		}
	).find('ul').click(function(e) {
		return false;
	});
	
	// title content
	var titleContentHeight = $('#title-content img.pull-right').height();
	$('#title-content').css({
		minHeight: titleContentHeight+'px'
	});
	
	// gallery - http://pgwjs.com/pgwslideshow/
	$('.right .pgwSlideshow').pgwSlideshow({
		transitionEffect: 'fading',
		displayControls: false
	});
	$('.slider .pgwSlideshow').pgwSlideshow({
		displayList: false
	});
	
	// placement
	$('.selectpicker').selectpicker({
        style: 'btn-info',
        size: 4
    });
	$("#placement").change(function(){
		$("#" + this.value).show().siblings().hide();
	});
	$("#placement").change();
  
});