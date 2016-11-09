$(function (){
	$('#enviar').click(almacenar);
});

function almacenar(){
	var nombre = $('#nombre').val().trim();
	var autor = $('#autor').val().trim();
	var edicion = $('#edicion').val().trim();
	var año = $('#año').val().trim();
	var editorial = $('#editorial').val().trim();
	var isbn = $('#isbn').val().trim();
	var idioma = $('#idioma').val().trim();
	var pag = $('#pag').val().trim();
	var descr = $('#descr').val().trim();
	var codigo = $('#codigo').val().trim();
	//var datos = 'nombre = '+nombre+' & autor = '+autor+' & edicion = '+edicion+' & año = '+año+' & editorial = '+editorial+' & isbn = '+isbn+' & idioma = '+idioma+' & pag = '+pag+' & descr = '+descr+' & codigo = '+codigo;

	$.ajax({
		type:'POST',
		url:'insertar2.php'
		data: $('#registroU').serialize(),
		success: function(respuesta){
			$('#info').html(respuesta);
			alert('Se guardo correctamente');
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