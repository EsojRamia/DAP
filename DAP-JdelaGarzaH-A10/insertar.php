<?php

include('validasesion.php');
$usuario = $_POST['usuario'];
$pass = $_POST['pass'];
$pass_cifrada = md5($pass, true);

include('conexion.php');

$r = mysqli_query($conexion, "INSERT INTO sesion VALUES (null,'$usuario','$pass_cifrada')");

if($r){
	echo "se guardo correctamente";
}else{
	echo "no se guardo correctamente";
}

mysqli_close($conexion);
?>