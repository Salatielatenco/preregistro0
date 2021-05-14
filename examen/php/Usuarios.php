<?php 

	class usuarios{
		public function registroUsuario($datos){
			$c=new conectar();
			$conexion=$c->conexion();

			$fecha=date('Y-m-d');

			$sql="INSERT into datos (nombre,
								apellido,
                                carrera,
								correo,
								resultado)
						values ('$datos[0]',
								'$datos[1]',
								'$datos[2]',
								'$datos[3]',
                                '$datos[4]'
								)";
			return mysqli_query($conexion,$sql);
		}
		

		public function obtenDatosUsuario($idusuario){

			$c=new conectar();
			$conexion=$c->conexion();

			$sql="SELECT id_usuario,
							nombre,
							apellido,
                            carrera,
				            correo,
				            resultado
					from datos 
					where id_usuario='$idusuario'";
			$result=mysqli_query($conexion,$sql);

			$ver=mysqli_fetch_row($result);

			$datos=array(
						'id_usuario' => $ver[0],
							'nombre' => $ver[1],
							'apellido' => $ver[2],
                            'carrera' => $ver[3],
                            'correo' => $ver[4],
                            'resultado' => $ver[5]
                                );

			return $datos;
		}

		public function actualizaUsuario($datos){
			$c=new conectar();
			$conexion=$c->conexion();

			$sql="UPDATE datos set nombre='$datos[1]',
									apellido='$datos[2]',
                                    carrera='$datos[3]',
								    correo='$datos[4]',
								    resultado='$datos[5]'
						where id_usuario='$datos[0]'";
			return mysqli_query($conexion,$sql);	
		}

		public function eliminaUsuario($idusuario){
			$c=new conectar();
			$conexion=$c->conexion();

			$sql="DELETE from datos 
					where id_usuario='$idusuario'";
			return mysqli_query($conexion,$sql);
		}
	}

 ?>