<?php

$nombre = $_POST['nombre'];
$matricula = $_POST['matricula'];
$edad = $_POST['edad'];

echo $nombre.' '.$matricula.' '.$edad;

//Codigo para envio de correo
//francisco.alvizo.@itesm.mx

$mensaje = $nombre."\n".$matricula."\n".$tel."\n".$edad;

$email_to="jmgh2010@hotmail.com";
$email_subjects = "Prueba de Ajax y PHP- José María de la Garza Huerta";


mail($email_to, $email_subjects, $mensaje);

echo "El mensaje a sido mandado";


?>