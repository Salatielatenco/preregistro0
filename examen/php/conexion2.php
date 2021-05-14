<?php 

	class conectar{
	  
		private $servidor="localhost:3306";
		private $usuario="tecmilpa_tachi";
		private $password="N0olv1d4r._";
		private $bd="tecmilpa_prueba";

		public function conexion(){
			$conexion=mysqli_connect($this->servidor,
									 $this->usuario,
									 $this->password,
									 $this->bd);
			return $conexion;
		}
	}


 ?>