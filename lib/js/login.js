jQuery(document).on('submit','#formlg',function(event){
	event.preventDefault();
    jQuery.ajax({
		url: '../view/login/login.php',
		type: 'POST',
		dataType: 'json',
		data: $(this).serialize(),
		beforeSend: function(){
			$('.botonlg').val('Validando...');

		}
	})
	.done(function(respuesta){
		console.log(respuesta);
		if (!respuesta.error) {
			if (respuesta.tipo == "1") {
				location.href = "../view/administrator/view/admin_welcome.php?id=1"
			}else if (respuesta.tipo == "2") {
                location.href = "../view/user/view/user_welcome.php?id=2"
            }else if (respuesta.tipo == "3") {
                    location.href = "../view/employee/view/employee_welcome.php?id=3"
			}
		}else{
			$('.error').slideDown('slow');
			setTimeout(function(){
				$('.error').slideUp('slow');
			},3000);
			$('.botonlg').val('Iniciar Sesión');
		}
	})
	.fail(function(resp){
		console.log(resp.responseText);
	})
	.always(function(){
		console.log("Complete");
	});
});
