$(function(){
	$('#select-category').on('change', function(){
		var f = $(this).parents('form');
		var action = f.attr('action').replace(/(category\/)(\d)/, "$1" + $(this).val());
		console.log(action);
		f.attr('action', action);
		f.submit();
	});

	$('.nav-info').on('click', function(){
		$('.information-wrapper').fadeToggle('slow');
	});

	$(window).scroll(function(){
		if ($(this).scrollTop() > 100){
			$('#page-top').fadeIn();
		} else {
			$('#page-top').fadeOut();
		}
	});
	$('#page-top').hide().on('click', function(){
		$('body,html').animate({
			scrollTop: 0
		}, 500);
		return false;
	});

});