$(function(){                                 //jquery.(document).ready(function() {} )       //window.onload
       $('#login').validate({					//inicia la validación del formulario formInscripcion
           rules: {
           'username': {required:true,minlength:3},
           'password': {required:true,minlength:3}
           },
       messages: {
           'username': {required:'Debe ingresar el Usuario',minlength:'minimo 3 car.'},
           'password': {required:'Debe ingresar el password',minlength:'minimo 3 car.'}
                            },
       debug: true,
       
	   submitHandler: function(form){
           //alert('El formulario ha sido validado correctamente!');
		   form.submit();
       }
    });
});