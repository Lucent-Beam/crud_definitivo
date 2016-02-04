$(document).ready(function() {
	//petición al enviar el formulario de registro
	var form = $('.register_ajax');
	    form.bind('submit',function () {
	        $.ajax({
	            type: form.attr('method'),
	            url: form.attr('action'),
	            data: form.serialize(),
	            beforeSend: function(){
	            	$('.before').append('<img src="imgs/350.gif" />');
	            },
	            complete: function(data){

	            },
	            success: function (data) {
	            	$('.before').hide();
					$('.errors_form').html('');
					$('.success_message').hide().html('');
	            	if(data.success == false){
		            	var errores = '';
		            	for(datos in data.errors){
		            		errores += '<small class="error">' + data.errors[datos] + '</small>';
		            	}
		            	$('.errors_form').html(errores)
		            }else{
		            	$(form)[0].reset();//limpiamos el formulario
		            	$('.success_message').show().html(data.message)
		            }
	            },
	            error: function(errors){
	            	$('.before').hide();
					$('.errors_form').html('');
	            	$('.errors_form').html(errors);
	            }
	        });
	   return false;
	});


});
