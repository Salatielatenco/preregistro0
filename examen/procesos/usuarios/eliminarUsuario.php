<?php 

	require_once "../../php/conexion2.php";
	require_once "../../php/Usuarios.php";

	$obj= new usuarios;

	echo $obj->eliminaUsuario($_POST['idusuario']);

 ?>