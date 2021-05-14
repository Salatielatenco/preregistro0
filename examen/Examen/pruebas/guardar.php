<html>

    <head>
        <link href="../css/main.css" rel="stylesheet" type="text/css" media="screen"/>
    </head>
    <body>
        <header></header>
        <section> </section>
        <article> 
            <?php
	           //conectamos Con el servidor
	           $conectar = mysql_connect("localhost","root","")//verificamos la conexion
               or die("No Se Pudo Conectar Con El Servidor");;
    
               $base =mysql_select_db("prueba",$conectar) or die ("No Se Encontro La Base De Datos");			
	           //recuperar las variables
	           $nombre=$_REQUEST['nom'];
	           $correo=$_REQUEST['cor'];
	           $mensaje=$_REQUEST['men'];
               $resultado=$_REQUEST['res'];
	           //hacemos la sentencia de sql
	           mysql_query("INSERT INTO datos VALUES('$nombre',
								        '$correo',
								        '$mensaje',
                                        '$resultado')",$conectar) or die("Hubo Algun Error");
               $destino=$_REQUEST['cor'];
               $asunto= "Resultados de Examen de Aspirante Itma II";
               $cuerpo="
                    Estimado Aspirante al ITMA II <br><br><br>
    
                    Nombre: $nombre \n<br><br><br>
    
                    Por  medio del presente les envío un cordial saludo y aprovecho el medio para hacer de su conocimiento los resultados obtenidos en el Examen de ingreso al ITMA II el cual fue:<br><br><br>
    
                    Resultado del examen: $resultado de 5 preguntas"; 
               $headers  = "MIME-Version: 1.0\r\n";
               $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
               $headers .= "From: ".$_REQUEST['cor']."\r\n";
               mail($destino,$asunto,$cuerpo,$headers);
               echo"Mensaje enviado a tu correo electronico <br>";
               echo"Datos Guardados Correctamente <br>  <a href='index.html'> Volver </a>";
           ?>
        </article>
    </body>
</html>