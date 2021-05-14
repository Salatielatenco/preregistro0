<?php

  session_start();

  require_once '../app/conexion.php';

  $conexion = conexion();

  $query_busqueda_usuario = 'SELECT habilitar_examen FROM usuario WHERE mail_usuario = ?';

  $busqueda_preparada_usuario = $conexion->prepare($query_busqueda_usuario);

  $busqueda_preparada_usuario->bind_param('s', $_SESSION['usuario']);

  $busqueda_preparada_usuario->execute();

  $resultado = $busqueda_preparada_usuario->get_result();

  $arreglo_resultante = $resultado->fetch_assoc();

  echo $arreglo_resultante['habilitar_examen'];

  $busqueda_preparada_usuario->close();
  
  $conexion->close();

?>
