$(function (){
	//Que el boton enviar no se vea al cargar la pagina
	$('#enviar').hide();
	//Cuando detecte un cambio en los inputs
	$(':input').keyup(habilitaEnviar);
	//Cuando haga click en el boton enviar
	$('enviar').click(enviar);
});

function enviar(){
	var nombre = $('#nombre').val().trim();
	var matricula = $('#matricula').val().trim();
	var edad = $('#edad').val().trim();

	var cadenaPHP = 'name ='+nombre+' & matricula='+matricula+' & edad='+edad;

	$.ajax({
		type:'POST',
		url:'siguiente.php',
		data:cadenaPHP,
		success: function(){
			alert('Si jala');
		},
		error: function(){
			alert('Hubo un error');
		},
	});
}

//Esta funcion habilita el boton
function habilitaEnviar(){
	var nombre = $('#nombre').val().trim();
	var matricula = $('#matricula').val().trim();
	var edad = $('#edad').val().trim();

	if(nombre != '' && matricula != '' && edad != ''){
		$('#enviar').show();
	}else{
		$('#enviar').hide();
	}
}