<?php 

	require_once "../../php/conexion2.php";
	require_once "../../php/Usuarios.php";

	$obj= new usuarios;

	echo json_encode($obj->obtenDatosUsuario($_POST['idusuario']));

 ?>