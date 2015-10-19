$(function() {
	//Validación
    $('#formContacto')
        .bootstrapValidator({
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
				nombres: {
					validators: {
						notEmpty: {
                            message: 'El campo de Nombre es obligatorio.'
                        },
					}
				},
				edad: {
					validators: {
						notEmpty: {
                            message: 'El campo de Edad es obligatorio.'
                        },
						integer: {
                        	message: 'El campo de Edad, solo permite valores númericos.'
                    	},
						stringLength: {
							max: 3,
							message: 'El campo de Edad, máximo 3 carácteres.'
						}
					}
				},
				direccion: {
					validators: {
						notEmpty: {
                            message: 'El campo de Dirección es obligatorio.'
                        },
					}
				},
				ciudad: {
					validators: {
						notEmpty: {
                            message: 'El campo de Ciudad es obligatorio.'
                        },
					}
				},
				telefono: {
					validators: {
						notEmpty: {
                            message: 'El campo de Teléfono fijo es obligatorio.'
                        },
					}
				},
				celular: {
					validators: {
						notEmpty: {
                            message: 'El campo de Teléfono Celular es obligatorio.'
                        },
					}
				},
				email: {
					validators: {
						notEmpty: {
                            message: 'El campo de Email es obligatorio.'
                        },
						emailAddress: {
							message: 'El Email/Correo ingresado no es válido.'
						}
					}
				},
				interes: {
					validators: {
						notEmpty: {
                            message: 'El campo de Interes es obligatorio.'
                        },
					}
				},
				mensaje: {
					validators: {
						notEmpty: {
                            message: 'El campo de Mensaje es obligatorio.'
                        },
					}
				}
            }
        })

        .on('success.form.bv', function(e) {
            // Reset the message element when the form is valid
            $('#errors').html('');
        })

        .on('error.field.bv', function(e, data) {
            // data.bv      --> The BootstrapValidator instance
            // data.field   --> The field name
            // data.element --> The field element

            // Get the messages of field
            var messages = data.bv.getMessages(data.element);








            // Remove the field messages if they're already available
            $('#errors').find('li[data-field="' + data.field + '"]').remove();

            // Loop over the messages
            for (var i in messages) {
                // Create new 'li' element to show the message
                $('<li/>')
                    .attr('data-field', data.field)
                    .wrapInner(
                        $('<a/>')
                            .attr('href', 'javascript: void(0);')
                            .html(messages[i])
                            .on('click', function(e) {
                                // Focus on the invalid field
                                data.element.focus();
                            })
                    )
                    .appendTo('#errors');
            }

            // Hide the default message
            // $field.data('bv.messages') returns the default element containing the messages
            data.element
                .data('bv.messages')
                .find('.help-block[data-bv-for="' + data.field + '"]')
                .hide();
        })

		.on('error.form.bv', function(e) {
            /**
			* Funcionalidad Adicional
			* Removemos la clase HIDE
			* Mostramos el elemento principal con margenes.
			*/
			$('.alertMsjError').removeClass("hide");
			$('#errorModal2').modal('show');
        })

        .on('success.field.bv', function(e, data) {
            // Remove the field messages
            $('#errors').find('li[data-field="' + data.field + '"]').remove();


			/**
			* Funcionalidad Adicional
			* Agregamos la clase HIDE
			* Ocultamos el elemento principal con margenes.
			*/
			$('.alertMsjError').addClass("hide");
        })

		.on('success.form.bv', function(e) {

		//**************************************************************
		var str = $("#formContacto").serialize();
		$.ajax({
			beforeSend: function(){

				$("#formContacto").fadeOut("fast",function(){

					$('#enviando').modal({
						keyboard: false,
					});
				});

			},
			cache: false,
			type:"POST",
			dataType:"json",
			url:"/ajax/contacto.php",
			data:str + "&accion=addUser&id=" + Math.random(),
			success: function(response){

				if(response.respuesta == false){
					alert(response.mensaje);
				}else{

					$('#enviando').modal('hide');
					$("#formContacto").fadeIn("fast");
					$('html, body').animate({
						scrollTop: $("#formContacto").offset().top
					}, 1000);
					$("#formContacto").html(response.contenido);

					//alert(response.contenido)
				}

			},
			error:function(){

				$('#enviando').modal('hide');
				$("#formContacto").fadeIn("fast");
				alert('ERROR GENERAL DEL SISTEMA, INTENTELO MAS TARDE');
			}
		});

		return false;
		//**************************************************************

        });
});
