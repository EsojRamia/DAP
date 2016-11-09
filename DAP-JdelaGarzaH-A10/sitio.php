<?php include ('validasesion.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Pagina en sesión</title>
	<meta charset="UTF-8">
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
			font-size: 20px;
			text-align: center;}
	</style>
</head>

<body>
	<header>
		<h1>Hola. Estas en sesión</h1>
	</header>

	<div class="container">
		<section class="main_row">
			<article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="container">
					<p><?php echo "<label>Usuario: </label> <h2>".$_SESSION['s_usuario']."</h2>";?></p>
				</div>
			</article>
		</section>
		<div class="row container">
			<div class="col-xs-12 col-sm-12 col-md-4 col-1g-4">
				<a href="capturaU.php" class="btn btn-primary">Nuevo Usuario</a>
			</div>
			<div class="col-xs-6 col-sm-6 col-md-4 col-1g-4">
				<a href="registro.php" class="btn btn-primary">Nuevo Libro</a>
			</div>
			<div class="col-xs-6 col-sm-6 col-md-4 col-1g-4">
				<a href="cierraS.php" class="btn btn-primary">Cerrar Sesion</a>
			</div>
		</div>
	</div>
</body>

</html>