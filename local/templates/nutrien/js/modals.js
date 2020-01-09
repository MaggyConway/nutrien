$('.card__item__img').click(function () {
	$('#modal-card-container').addClass('animate_modal');
	$('body').addClass('modal-card-active');
});





//Close function
$('.modal--background, .modal-close').click(function(){
	$('#modal-success-container').removeClass('animate_modal');
	$('body').removeClass('modal-success-active');

	$('#modal-card-container').removeClass('animate_modal');
	$('body').removeClass('modal-card-active');
});