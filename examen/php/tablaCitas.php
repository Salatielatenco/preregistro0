<?php 
	
	require_once "conexion2.php";
	$c= new conectar();
	$conexion=$c->conexion();

	$sql="SELECT id_usuario,
                    nombre,
					apellido,
                    carrera,
                    correo,
				    resultado
			from datos";
	$result=mysqli_query($conexion,$sql);

 ?>
<div class="jumbotron">
    <div class="table-responsive">
<table class="table table-hover table-condensed table-bordered" style="text-align: center;">
	<caption><label>Alumnos :)</label></caption>
	<tr>
		<td>Nombre</td>
		<td>Apellido</td>
        <td>Carrera</td>
        <td>Email</td>
        <td>Resultado</td>
		<td>Editar</td>
		<td>Eliminar</td>
	</tr>

	<?php while($ver=mysqli_fetch_row($result)): ?>

	<tr>
		<td><?php echo $ver[1]; ?></td>
		<td><?php echo $ver[2]; ?></td>
        <td><?php echo $ver[3]; ?></td>
        <td><?php echo $ver[4]; ?></td>
        <td><?php echo $ver[5]; ?></td>
		<td>
			<span data-toggle="modal" data-target="#actualizaUsuarioModal" class="btn btn-warning btn-xs" onclick="agregaDatosUsuario('<?php echo $ver[0]; ?>')">
				<span class="glyphicon glyphicon-pencil"></span>
			</span>
		</td>
		<td>
			<span class="btn btn-danger btn-xs" onclick="eliminarUsuario('<?php echo $ver[0]; ?>')">
				<span class="glyphicon glyphicon-remove"></span>
			</span>
		</td>
	</tr>
<?php endwhile; ?>
</table>
    </div>
</div>