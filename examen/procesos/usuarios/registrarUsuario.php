<?php 

	require_once "../../php/conexion2.php";
	require_once "../../php/Usuarios.php";

	$obj= new usuarios();

	$datos=array(
		$_POST['nombre'],
		$_POST['apellido'],
        $_POST['carrera'],
        $_POST['correo'],
        $_POST['resultado']
				);

	echo $obj->registroUsuario($datos);

 ?>