<?php 

	require_once "../../php/conexion2.php";
	require_once "../../php/Usuarios.php";

	$obj= new usuarios;

	$datos=array(
			$_POST['idUsuario'],  
		    $_POST['nombreU'] , 
		    $_POST['apellidoU'], 
            $_POST['carreraU'],
			$_POST['emailU'],
			$_POST['resultadoU']
				);  
	echo $obj->actualizaUsuario($datos);


 ?>