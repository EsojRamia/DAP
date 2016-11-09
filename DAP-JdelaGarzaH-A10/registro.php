<?php include ('validasesion.php'); ?>

<!DOCTYPE html>

<html>
<head>
	<meta charset="UTF-8">
	<title>Registro de libro</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <style type="text/css">
		body{background-color: #61BA6C;}
		h1{text-align: center;}
		label{color: orange; 
			text-align: center; 
			font-family: "Verdana";}
		p{font-family: "Times New Roman";
			font-size: 20px;}
	</style>
</head>

<body>
	<header>
		<h1>Registro del libro</h1>
	</header>

	<div class="container">
		<section class="main_row">
			<article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="container">
					<p>Por favor llena todos los campos del formulario</p>
				</div>
			</article>
		</section>
		<form id="registroL">
		<div class="row container">
			<div class="col-xs-6 col-sm-6 col-md-3 col-1g-3">
				<label>Nombre:</label>
			</div>
			<div class="col-xs-6 col-sm-6 col-md-3 col-1g-3">
				<input type="text" name="nombre" id="nombre">
			</div>
		</div>
		<div class="row container">
			<div class="col-xs-6 col-sm-6 col-md-3 col-1g-3">
				<label>Autor:</label>
			</div>
			<div class="col-xs-6 col-sm-6 col-md-3 col-1g-3">
				<input type="text" name="autor" id="autor">
			</div>
		</div>
		<div class="row container">
			<div class="col-xs-6 col-sm-6 col-md-3 col-1g-3">
				<label>Edición:</label>
			</div>
			<div class="col-xs-6 col-sm-6 col-md-3 col-1g-3">
				<input type="text" name="edicion" id="edicion">
			</div>
		</div>
		<div class="row container">
			<div class="col-xs-6 col-sm-6 col-md-3 col-1g-3">
				<label>Año:</label>
			</div>
			<div class="col-xs-6 col-sm-6 col-md-3 col-1g-3">
				<input type="text" name="año" id="año">
			</div>
		</div>
		<div class="row container">
			<div class="col-xs-6 col-sm-6 col-md-3 col-1g-3">
				<label>Editorial:</label>
			</div>
			<div class="col-xs-6 col-sm-6 col-md-3 col-1g-3">
				<input type="text" name="editorial" id="editorial">
			</div>
		</div>
		<div class="row container">
			<div class="col-xs-6 col-sm-6 col-md-3 col-1g-3">
				<label>ISBN:</label>
			</div>
			<div class="col-xs-6 col-sm-6 col-md-3 col-1g-3">
				<input type="text" name="isbn" id="isbn">
			</div>
		</div>
		<div class="row container">
			<div class="col-xs-6 col-sm-6 col-md-3 col-1g-3">
				<label>Idioma:</label>
			</div>
			<div class="col-xs-6 col-sm-6 col-md-3 col-1g-3">
				<input type="text" name="idioma" id="idioma">
			</div>
		</div>
		<div class="row container">
			<div class="col-xs-6 col-sm-6 col-md-3 col-1g-3">
				<label>Páginas:</label>
			</div>
			<div class="col-xs-6 col-sm-6 col-md-3 col-1g-3">
				<input type="text" name="pag" id="pag">
			</div>
		</div>
		<div class="row container">
			<div class="col-xs-6 col-sm-6 col-md-3 col-1g-3">
				<label>Descripción:</label>
			</div>
			<div class="col-xs-6 col-sm-6 col-md-3 col-1g-3">
				<input type="text" name="descr" id="descr">
			</div>
		</div>
		<div class="row container">
			<div class="col-xs-6 col-sm-6 col-md-3 col-1g-3">
				<label>Código:</label>
			</div>
			<div class="col-xs-6 col-sm-6 col-md-3 col-1g-3">
				<input type="text" name="codigo" id="codigo">
			</div>
		</div>
		<div class="row container">
			<div class="col-xs-12 col-sm-12 col-md-12 col-1g-12">
				<input type="submit" name="enviar" id="enviar">
			</div>
		</div>
	</form>
	<div id="info"></div>
	</div>
	<script   src="https://code.jquery.com/jquery-3.1.1.js"   integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="   crossorigin="anonymous"></script>
	<script type="text/javascript" src="rlibro.js"></script>
</body>

</html>