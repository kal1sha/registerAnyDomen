$(document).ready(function() {

	$('.sign_up_click').click(function() {
		var flag = 1;
		if ($('#login').val()=='') {
			flag = 0;
			$('#login').parent().parent().addClass('error');
		} else {
			$('#login').parent().parent().removeClass('error');			
		}

		if ($('#email').val()=='') {
			flag = 0;
			$('#email').parent().parent().addClass('error');
		} else {
			$('#email').parent().parent().removeClass('error');			
		}

		if ($('#password').val() != $('#password_confirm').val() || $('#password').val() == '') {
			flag = 0;
			$('#password').parent().parent().addClass('error');
			$('#password_confirm').parent().parent().addClass('error');
		} else {
			$('#password').parent().parent().removeClass('error');
			$('#password_confirm').parent().parent().removeClass('error');		
		}

		if (flag) {
			$.getJSON("http://server2.demo.loc/sign_up.php?callback=?", {data:$('#sign_up').serialize()}, function(data){
				if (data.result == 'ok') {
					$('#sign_up').html('<h4>Регистрация прошла успешно, <a href="sign_in.php">войдите в систему</a></h4>');
				} else {
					$('#sign_up').html('<h4>Регистрация прошла с ошибками, <a href="sign_up.php">повторите ещё раз</a></h4>');				
				}
			});			
		}
	});	


	$('.sign_in_click').click(function() {
		var flag = 1;
		if ($('#login').val()=='') {
			flag = 0;
			$('#login').parent().parent().addClass('error');
		} else {
			$('#login').parent().parent().removeClass('error');			
		}

		if ($('#password').val() == '') {
			flag = 0;
			$('#password').parent().parent().addClass('error');
		} else {
			$('#password').parent().parent().removeClass('error');	
		}

		if (flag) {
			$.getJSON("http://server2.demo.loc/sign_in.php?callback=?", {data:$('#sign_in').serialize()}, function(data){
				if (data.result == 'ok') {
					$('#sign_in').html('<h4>Ура! Вход успешен. Можно закрывать страницу.</h4>');
				} else {
					$('#sign_in').html('<h4>Ошибка, не правильные данные, <a href="sign_in.php"	>повторите</a> </h4>');				
				}
			});			
		}
	});	

});