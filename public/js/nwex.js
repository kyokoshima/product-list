$(function(){
	$('#select-category').on('change', function(){
		var f = $(this).parents('form');
		var action = f.attr('action').replace(/(category\/)(\d)/, "$1" + $(this).val());
		console.log(action);
		f.attr('action', action);
		f.submit();
	});
});