$(function(){
	$('.clickable').on('click', function(e){
		
		if (!$(e.target).is('a')) {
			console.log($(e.target).closest('tr').data('href'));
		}
	});
});