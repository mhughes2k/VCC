$(document).ready(function(){
	$("form").hide();
	
	$('.toggle').click(function(e) {
		//alert('click');
		$(this).next().slideToggle('fast');
	});
	
	$('.cancel').click(function(e) {
		e.preventDefault();
		$(this).parent().slideUp('fast');
	});
}
);
