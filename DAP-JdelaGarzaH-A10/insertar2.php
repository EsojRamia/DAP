<?php

include('validasesion.php');
$nombre = $_POST['nombre'];
$autor = $_POST['autor'];
$edicion = $_POST['edicion'];
$año = $_POST['año'];
$editorial = $_POST['editorial'];
$isbn = $_POST['isbn'];
$idioma = $_POST['idioma'];
$pag = $_POST['pag'];
$descr = $_POST['descr'];
$codigo = $_POST['codigo'];

include('conexion.php');

$r = mysqli_query($conexion, "INSERT INTO registro VALUES (null,'$nombre','$autor','$edicion','$año','$editorial','$isbn','$idioma','$pag','$descr','$codigo')");

if($r){
	echo "se guardo correctamente";
}else{
	echo "no se guardo correctamente";
}

mysqli_close($conexion);
?>