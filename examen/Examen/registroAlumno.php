<?php 
	session_start();

 ?>
<!DOCTYPE html>
<html>
    <head>
       <title>Datos Alumno</title>
        <link rel="icon" type="image/ico" href="../img/favicon.ico" />
        <?php require_once("scripts.php");?>
        <link href="../css/main2.css" rel="stylesheet" type="text/css" media="screen">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <header></header>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                    <div class="panel panel-default" >
                        <div class="panel panel-heading" style="text-align:center; font-size:2.5rem; color:white;background-color:#0D8C9E; ">Por favor Ingresa los siguientes datos para tu examen:</div>
                        <div class="panel panel-body" >
                            <form id="frmRegistro" name="frmRegistro">
                            <p style="font-size:2rem;">Nombres</p>
                            <input type="text" class="form-control input-sm" id="nombre" onkeypress="return soloLetras(event)" style="font-size:1.7rem;">
                            <br>
                            <p style="font-size:2rem;">Apellidos</p>
                            <input type="text" class="form-control input-sm" id="apellido" onkeypress="return soloLetras(event)" style="font-size:1.7rem;"><!--#0d8c9e--><br>
                            <p style="font-size:2rem;"> Carrera </p>
                            <select style="font-size:2rem; height: 37px;" class="form-control" id="carrera"><br>
                                <option value="sistemas">Ingeniería en Sistemas Computacionales</option>
                                <option value="gestion">Ingeniería en  Gestion Empresarial</option>
                                <option value="industrial">Ingeniería Industrial</option>
                             </select><br>
                            <p style="font-size:2rem;">e-mail</p>
                            <input type="email" class="form-control input-sm" id="correo" style="font-size:1.7rem;" placeholder="Ingresa tu mail">
                           <br>
                            <div style="text-align: center;">
                                <a class="btn btn-primary" style="font-size:2.3rem;" id="registrarNuevo">Iniciar el Examen</a>
                            </div>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>


<script>
    function soloLetras(e){
       key = e.keyCode || e.which;
       //alert(key);
       tecla = String.fromCharCode(key).toLowerCase();
       letras = " abcdefghijklmnñopqrstuvwxyz";//Crear una lista con todas las letras permitidas (a,b,c ... etc).
       especiales = "8-37-39-46";

       tecla_especial = false;

       for(var i in especiales){
            if(key == especiales[i]){//si la tecla presionada es igual a una que este dentro del objeto especiales .. entra
                tecla_especial = true;//cambia a true la variable especial
                break;//rompe el bucle
            }
        }
        if(letras.indexOf(tecla)==-1 && !tecla_especial){
            return false;
        }
    }
</script>

<script type="text/javascript">
	$(document).ready(function(){
		$('#registrarNuevo').click(function(){

			if($('#nombre').val()==""){
				alertify.alert("Debes agregar el nombre");
				return false;
			}else if($('#apellido').val()==""){
				alertify.alert("Debes agregar el apellido");
				return false;
			}else if($('#carrera').val()==""){
				alertify.alert("Debes agregar una carrera");
				return false;
			}else if($('#correo').val()==""){
				alertify.alert("Debes agregar un correo");
				return false;
			}

			cadena="carrera=" + $('#carrera').val() +
					"&nombre=" + $('#nombre').val() +
					"&apellido=" + $('#apellido').val() +
					"&correo=" + $('#correo').val();
            
            var nombre=document.forms.frmRegistro.nombre.value;
            var apellido=document.forms.frmRegistro.apellido.value;
            var correo=document.forms.frmRegistro.correo.value;
            var carrera=document.forms.frmRegistro.carrera.value;
            window.location="index.php?car="+carrera+"&nom="+nombre+"&cor="+correo+"&apellido="+apellido;
		});
	});
</script>
<?php

?>