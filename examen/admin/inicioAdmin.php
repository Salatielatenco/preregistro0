<?php 
	
 ?>
<!DOCTYPE html>
<html>
    <head>
       <title>Administrador</title>
        <link rel="icon" type="image/ico" href="../img/favicon.ico" />
        <?php require_once("../scripts.php");?>
        <link href="../css/main2.css" rel="stylesheet" type="text/css" media="screen">
        <?php require_once "menu.php"; ?>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                    <div class="panel panel-default" >
                        <div class="panel panel-heading" style="text-align:center; font-size:2.5rem; color:white;background-color:#0D8C9E; ">Registro</div>
                        <div class="panel panel-body" >
                            <form id="frmRegistro">
                            <p style="font-size:2rem;">Nombre</p>
                            <input type="text" class="form-control input-sm" id="nombre" style="font-size:1.7rem;">
                            <p style="font-size:2rem;">Apellido</p>
                            <input type="text" class="form-control input-sm" id="apellido" style="font-size:1.7rem;">
                            <p style="font-size:2rem;"> Tipo de Usuario</p>
                            <select style="font-size:2rem; height: 37px;" class="form-control" id="opciones"><br>
                                <option value="1">Administrador</option>
                                <option value="2">Alumno</option>
                             </select><br>
                            
                            <p style="font-size:2rem;">Usuario</p>
                            <input type="text" class="form-control input-sm" id="usuario" style="font-size:1.7rem;">
                            <p style="font-size:2rem;">Password</p>
                            <input type="text" class="form-control input-sm" id="password" style="font-size:1.7rem;"><br>
                            
                            <div style="text-align: center;">
                                <a class="btn btn-warning" style="width:30%; height: 50px; font-size:2.3rem;" id="registrarNuevo" >Registrar</a>
                            </div>
                                </form>
                            <div style="text-align: right;"><br>
                                <a href="../php/salir.php" class="btn btn-info" style="font-size:1.8rem;">Salir del sistema</a>
                                
					        </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3"></div>
                
            </div>
        </div>
    </body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$('#registrarNuevo').click(function(){

			if($('#nombre').val()==""){
				alertify.alert("Debes agregar el nombre");
				return false;
			}else if($('#apellido').val()==""){
				alertify.alert("Debes agregar el apellido");
				return false;
			}else if($('#opciones').val()==""){
				alertify.alert("Debes agregar una opcion");
				return false;
			}else if($('#usuario').val()==""){
				alertify.alert("Debes agregar el usuario");
				return false;
			}else if($('#password').val()==""){
				alertify.alert("Debes agregar el password");
				return false;
			}

			cadena="opciones=" + $('#opciones').val() +
					"&nombre=" + $('#nombre').val() +
					"&apellido=" + $('#apellido').val() +
					"&usuario=" + $('#usuario').val() + 
					"&password=" + $('#password').val();

					$.ajax({
						type:"POST",
						url:"../php/registro.php",
						data:cadena,
						success:function(r){

							if(r==2){
								alertify.alert("Este usuario ya existe, prueba con otro :)");
							}
							else if(r==1){
								$('#frmRegistro')[0].reset();
								alertify.success("Agregado con exito");
							}else{
								alertify.error("Fallo al agregar");
							}
						}
					});
		});
	});
</script>
<?php
	
?>