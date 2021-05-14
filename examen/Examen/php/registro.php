<?php 

	require_once "conexion.php";
	$conexion=conexion();

		$nombre=$_POST['nombre'];
		$apellido=$_POST['apellido'];
        $carrera=$_POST['carrera'];
		$correo=$_POST['correo'];
		$correoremitente='contacto@itmilpaalta2.net';
        $resultado=$_POST['resultado'];

		
        $sql="INSERT into datos (nombre,apellido,carrera,correo,resultado)
            values ('$nombre','$apellido','$carrera','$correo','$resultado')";
        echo $result=mysqli_query($conexion,$sql);


        $destino=$_POST['correo'];
        $asunto= "Resultados de Examen de Aspirante Itma II";
        $cuerpo="
            Estimado Aspirante al ITMA II <br><br><br>

            Nombre: $nombre    $apellido \n<br><br><br>

            Por  medio del presente les envio un cordial saludo y aprovecho el medio para hacer de su conocimiento los resultados obtenidos en el Examen de ingreso al ITMA II el cual fue:<br><br><br>

            Resultado del examen: $resultado de 120 preguntas"; 
        $headers  = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
        $headers .= "From: ".$correoremitente;
        mail($destino,$asunto,$cuerpo,$headers
        
        departamento();
        
        
        function departamento(){
            $destino='dda_milpaalta2@tecnm.mx.';
        $asunto= "Resultados de Examen de Aspirante Itma II";
        $cuerpo="
            Estimado Aspirante al ITMA II <br><br><br>

            Nombre: $nombre    $apellido \n<br><br><br>

            Por  medio del presente les envio un cordial saludo y aprovecho el medio para hacer de su conocimiento los resultados obtenidos en el Examen de ingreso al ITMA II el cual fue:<br><br><br>

            Resultado del examen: $resultado de 120 preguntas"; 
        $headers  = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
        $headers .= "From: ".$correoremitente;
        mail($destino,$asunto,$cuerpo,$headers);
        }

 ?>