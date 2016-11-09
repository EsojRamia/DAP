<?php
session_start();

include('conexion.php');

$usuario = $_POST['usuario'];
$pass = $_POST['pass'];
$passC = md5($pass,true);


$qUsuario = $conexion->query("SELECT * FROM sesion WHERE usuario = '$usuario' AND pass='$passC'");

if($resultado = mysqli_fetch_array($qUsuario)){
	$_SESSION['s_usuario'] = $usuario;
	header('Location: sitio.php');
}else{
	header('Location: index.html');
}
?>