<?php 


	?>


	<!DOCTYPE html>
	<html>
	<head>
		<title>Alumnos</title>
		<link rel="icon" type="image/ico" href="../img/favicon.ico" />
		<?php require_once "menu.php"; ?>
        <?php require_once "../css/dependencias.php"; ?>
        <?php require_once "../scripts.php"; ?>
        <script src="../css/jquery-3.3.1.min.js"></script>
	</head>
	<body>
        <div class="col-sm-12">
            <div id="tablaCitasLoad"></div>
        </div>
        
       <!-- Modal -->
		<div class="modal fade" id="actualizaUsuarioModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog modal-sm" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Actualiza Alumno</h4>
					</div>
					<div class="modal-body">
						<form id="frmRegistroU">
						    <input type="text" hidden="" id="idUsuario" name="idUsuario">
							<label>Nombre</label>
							<input type="text" class="form-control input-sm" name="nombreU" id="nombreU">
							<label>Apellidos</label>
							<input type="text" class="form-control input-sm" name="apellidoU" id="apellidoU">
							<label>Email</label>
							<input type="text" class="form-control input-sm" id="emailU" name="emailU">
                            <label> Carrera </label>
                                <select class="form-control" id="carreraU" name="carreraU"><br>
                                <option value="sistemas">Ingeniería en Sistemas Computacionales</option>
                                <option value="gestion">Ingeniería en  Gestion Empresarial</option>
                                <option value="industrial">Ingeniería Industrial</option>
                                </select><br>
                            <label>Resultado</label>
							<input type="text" class="form-control input-sm" id="resultadoU" name="resultadoU">
						</form>
					</div>
					<div class="modal-footer">
						<button id="btnActualizaUsuario" type="button" class="btn btn-primary" data-dismiss="modal">Actualiza Usuario</button>

					</div>
				</div>
			</div>
		</div>

        
        
    
        
    </body>
	</html>

<script type="text/javascript">
		function agregaDatosUsuario(idusuario){

			$.ajax({
				type:"POST",
				data:"idusuario=" + idusuario,
				url:"../procesos/usuarios/obtenDatosUsuario.php",
				success:function(r){
					dato=jQuery.parseJSON(r);

					$('#idUsuario').val(dato['id_usuario']);
                    $('#nombreU').val(dato['nombre']);
					$('#apellidoU').val(dato['apellido']);
                    $('#carreraU').val(dato['carrera']);
					$('#emailU').val(dato['correo']);
                    $('#resultadoU').val(dato['resultado']);
				}
			});
		}

		function eliminarUsuario(idusuario){
			alertify.confirm('¿Desea eliminar este usuario?', function(){ 
				$.ajax({
					type:"POST",
					data:"idusuario=" + idusuario,
					url:"../procesos/usuarios/eliminarUsuario.php",
					success:function(r){
						if(r==1){
							$('#tablaCitasLoad').load('../php/tablaCitas.php');
							alertify.success("Eliminado con exito!!");
						}else{
							alertify.error("No se pudo eliminar :(");
						}
					}
				});
			}, function(){ 
				alertify.error('Cancelo !')
			});
		}


	</script>

	<script type="text/javascript">
		$(document).ready(function(){
			$('#btnActualizaUsuario').click(function(){

				datos=$('#frmRegistroU').serialize();
				$.ajax({
					type:"POST",
					data:datos,
					url:"../procesos/usuarios/actualizaUsuario.php",
					success:function(r){

						if(r==1){
							$('#tablaCitasLoad').load('../php/tablaCitas.php');
							alertify.success("Actualizado con exito :D");
						}else{
							alertify.error("No se pudo actualizar :(");
						}
					}
				});
			});
		});
	</script>

	<script type="text/javascript">
		$(document).ready(function(){

			$('#tablaCitasLoad').load('../php/tablaCitas.php');

			$('#registro').click(function(){

				vacios=validarFormVacio('frmRegistro');

				if(vacios > 0){
					alertify.alert("Debes llenar todos los campos!!");
					return false;
				}

				datos=$('#frmRegistro').serialize();
				$.ajax({
					type:"POST",
					data:datos,
					url:"../procesos/usuarios/registrarUsuario.php",
					success:function(r){
						//alert(r);

						if(r==1){
							$('#frmRegistro')[0].reset();
							$('#tablaCitasLoad').load('../php/tablaCitas.php');
							alertify.success("Agregado con exito");
						}else{
							alertify.error("Fallo al agregar :(");
						}
					}
				});
			});
		});
	</script>

	<?php 

?>