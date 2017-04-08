$(function(){

	var formModal= $('#modal-form');
	
	var inputEmail = $('#modal-email');
	var inputArea = $('#modal-text');
	function isEmpty(event){
		if(event.val()==false){
			event.addClass('error');
		}
		else{
			event.removeClass('error');
		}
	}

	inputEmail.blur(function(){
		isEmpty($(this));
	});
	inputArea.blur(function(){
		isEmpty($(this));
	});

	formModal.submit(function(event){
		
		if(inputEmail.val()==false || inputArea.val()==false){

			isEmpty(inputEmail);
			isEmpty(inputArea);
			$('.modal_notification').removeClass('success').text('Заполните все поля, подсвеченные красным').addClass('error').fadeIn(1000); 
			setTimeout("$('.modal_notification').fadeOut(1000)",3000);
		}
		else{

			inputEmail.val('');
			inputArea.val('');
			$('.modal_notification').removeClass('error').text('Сообщение отправлено, наш Менеджер свяжется с Вами в ближайшее время').addClass('success').fadeIn(1000); 
			setTimeout("$('.modal_notification').fadeOut(1000)",3000);
		}
		event.preventDefault();

	})
	$('button.close-modal-group').click(function(){
		$('button.mfp-close').click();
	})








});