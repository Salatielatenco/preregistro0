<?php 


	session_start();
	require_once "conexion.php";

	$conexion=conexion();

		$usuario=$_POST['usuario'];
		$pass=sha1($_POST['password']);

		$sql="SELECT * from usuarios where usuario='$usuario' and password='$pass'";
		$result=mysqli_query($conexion,$sql);

		$tipo=mysqli_fetch_assoc($result);

		if($tipo['opciones']==1){
			$_SESSION['user']=$tipo['usuario'];
			$_SESSION['opciones']=$tipo['opciones'];
			echo 1;
		}else if($tipo['opciones']==2){
			$_SESSION['user']=$usuario;
			$_SESSION['opciones']=$tipo['opciones'];
			echo 2;
		}else{
			echo 0;
		}
 ?>
