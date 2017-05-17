(function($){

$(document).ready(function(){
	$('#woocommerce-wrapper .content-area').removeClass('col-md-8');
	$('#woocommerce-wrapper .content-area').addClass('col-md-12');
	// $('#woocommerce-wrapper .widget-area').remove();

	$('.panel-container-1').hover(function(){
		$(this).addClass('flip');
	},function(){
		$(this).removeClass('flip');
	});
	$('.panel-container-2').hover(function(){
		$(this).addClass('flip');
	},function(){
		$(this).removeClass('flip');
	});
})

})(jQuery)