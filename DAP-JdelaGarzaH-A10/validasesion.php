<?php

session_start();

if(!isset ($_SESSION['s_usuario'])){
	header("Location: index.html");
}

?>