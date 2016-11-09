$(function (){
	$('#enviar').click(almacenar);
});

function almacenar(){
	var usuario = $('#usuario').val().trim();
	var pass = $('#pass').val().trim();
	var datos = 'usuario = '+usuario+' & pass = '+pass;

	$.ajax({
		type:'POST',
		url:'insertar.php',
		data: $('#registroU').serialize(),
		success: function(respuesta){
			$('#info').html(respuesta);
			alert('se guardo correctamente');
		},
		error: function(xhr, status, error){
			$('#info').html(status, error);
			alert('No se guardo correctamente');
		},

		complete:function(xhr, status){
			$(':input').val('');
		}
	});
}