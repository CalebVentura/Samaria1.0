
$(document).ready(function(){

	//guardar registro
	$('#guardar-registro').on('submit',function(e){
		e.preventDefault();
		var datos = $(this).serializeArray();
		$.ajax({
			type: $(this).attr('method'),
			data: datos,
			url: $(this).attr('action'),
			dataType: 'json',
			success : function(data){
				console.log(data);
				var resultado = data;
				if (resultado.respuesta == 'exito') { 
					swal(
					  'Buen Trabajo!',
					  'Se guardo correctamente!',
					  'success'
					)
				}else{
					swal(
					  'Oops...',
					  'Ocurrio algun error en el regitro!',
					  'error'
					)
				}
			}
		});

	});

	// Subir archivos
	$('#guardar-registro-archivo').on('submit',function(e){
		e.preventDefault();
		var datos = new FormData(this);
		$.ajax({
			type: $(this).attr('method'),
			data: datos,
			url: $(this).attr('action'),
			dataType: 'json',
			//para archivos
			contentType: false,
			processData: false,
			async: true,
			cache: false, 
			success : function(data){
				console.log(data);
				var resultado = data;
				if (resultado.respuesta == 'exito') { //carajo el doble igual
					swal(
					  'Buen Trabajo!',
					  'Se guardo correctamente!',
					  'success'
					)
				}else{
					swal(
					  'Oops...',
					  'Ocurrio algun error en el regitro!',
					  'error'
					)
				}
			}
		});

	});

	// eliminar registro
	$('.borrar_registro').on('click',function(e){
		e.preventDefault();
		var id = $(this).attr('data-id');
		var tipo = $(this).attr('data-tipo');

		// console.log("ID: " + id)

		swal({
		  title: '¿ Estas seguro de Eliminar ?',
		  text: "La informacion Eliminada no puede recuperarse",
		  type: 'warning',
		  showCancelButton: true,
		  confirmButtonColor: '#3085d6',
		  cancelButtonColor: '#d33',
		  confirmButtonText: 'Si, Eliminar!',
		  cancelButtonText: 'cancelar'
		}).then( function() {
			$.ajax({
				type: 'post',
				data: {
					id: id,
					registro: 'eliminar'
				},
				url: 'modelo-'+tipo+'.php',
				success: function(data){
					console.log(data);
					var resultado = JSON.parse(data);
					if (resultado.respuesta == 'exito') {
						swal(
							'Eliminado',
							'Registro eliminado',
							'success'
						)
						jQuery('[data-id="'+resultado.id_eliminado +'"]').parents('tr').remove(); 
					}else{
						swal(
							'Error',
							'No se pudo eliminar',
							'error'
						)
					}
				}
			})
		})
	});
	
});