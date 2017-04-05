$(function(){

	var formContact= $('#form-contact');
	var inputName = $('#contact-name');
	var inputEmail = $('#contact-email');
	var inputArea = $('#contact-area');
	function isEmpty(event){
		if(event.val()==false){
			event.addClass('error');
		}
		else{
			event.removeClass('error');
		}
	}

	inputName.blur(function(){
		isEmpty($(this));
	});
	inputEmail.blur(function(){
		isEmpty($(this));
	});
	inputArea.blur(function(){
		isEmpty($(this));
	});

	formContact.submit(function(event){
		
		if(inputName.val()==false || inputEmail.val()==false || inputArea.val()==false){
			isEmpty(inputName);
			isEmpty(inputEmail);
			isEmpty(inputArea);
			$('.notification').text('Заполните все поля, подсвеченные красыным').addClass('error').fadeIn(1000); 
			setTimeout("$('.notification').fadeOut(1000)",3000);
		}
		else{
			inputName.val('');
			inputEmail.val('');
			inputArea.val('');
			$('.notification').text('Сообщение отправлено, наш Менеджер свяжется с Вами в ближайшее время').addClass('success').fadeIn(1000); 
			setTimeout("$('.notification').fadeOut(1000)",3000);
		}
		event.preventDefault();

	})








});