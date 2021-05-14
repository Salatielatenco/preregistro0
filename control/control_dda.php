<?php

  session_start();
  require_once '../app/conexion.php';

  $conexion = conexion();

  $query = "SELECT * FROM usuario WHERE rol=0";

  $resultado = $conexion->query($query);

  $pre_tabla="";
  $estado_btn_ver='';
  $estado_btn_autorizar='';
  $estado_btn_eliminar='';

  /**
   * Nota: para onclick solo le puedes pasar valores enteros por lo que no se logro enviar el mail directamente, en su lugar se manda el ID del usuario
   */
  while($datos = $resultado->fetch_assoc()){

    if($datos['subio_archivos']==0){

      $img_estado='error.png';
      $estado_btn_ver='disabled';
      $estado_btn_autorizar='disabled';
      $estado_btn_eliminar='disabled';

    }else if(($datos['subio_archivos']==1)&&($datos['dda_autorizo']==0)){

      $img_estado='warning.png';
      $estado_btn_ver='';
      $estado_btn_autorizar='';
      $estado_btn_eliminar='';

    }else if(($datos['subio_archivos']==1)&&($datos['dda_autorizo']==1)){

      $img_estado='succes.png';
      $estado_btn_ver='';
      $estado_btn_autorizar='disabled';
      $estado_btn_eliminar='disabled';

    }

    $pre_tabla=$pre_tabla.'
    <tr>
      <td><img id="img_estado" src="img/'.$img_estado.'" class="img-fluid" style="width:2rem;"></td>
      <td>'.$datos['id_usuario'].'</td>
      <td>'.$datos['nombre_usuario'].'</td>
      <td>'.$datos['paterno_usuario'].'</td>
      <td>'.$datos['materno_usuario'].'</td>
      <td>'.$datos['telefono_usuario'].'</td>
      <td>'.$datos['mail_usuario'].'</td>
      <td>
        <button '.$estado_btn_ver.' type="button" class="btn btn-warning" onclick="ver_pdfs('.$datos['id_usuario'].')"><i class="fas fa-eye"></i></button>
      </td>
      <td>
        <button '.$estado_btn_autorizar.' type="button" class="btn btn-success" onclick="autoriza_pdfs('.$datos['id_usuario'].')"><i class="fas fa-check-circle"></i></button>
      </td>
      <td>
        <button '.$estado_btn_eliminar.' type="button" class="btn btn-danger" onclick="elimina_pdfs('.$datos['id_usuario'].')"><i class="fas fa-trash-alt"></i></button>
      </td>
    </tr>';

  }

  $conexion->close();

  echo '
      <table class="table table striped">
        <thead>
          <th>Estado</th>
          <th>Ficha</th>
          <th>Nombre</th>
          <th>Apellido Paterno</th>
          <th>Apellido Materno</th>
          <th>Movil</th>
          <th>Ver Documentos</th>
          <th>Autorizar Documentos</th>
          <th>Eliminar Documentos</th>
        </thead>
        <tbody>
          '.$pre_tabla.'
        </tbody>
      </table>';

?>