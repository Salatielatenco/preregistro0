<?php

  session_start();

  require_once '../app/conexion.php';

  $conexion = conexion();//genera un objeto de la clase MySQLi que me permite usar todo el abanico de metodos y atributos disponibles


  // 1  -> creo el query desde una cadena simple
  $query_busqueda_usuario = 'SELECT habilitar_examen FROM usuario WHERE mail_usuario = ?';

  // 2 -> Preparo esa cadena simple con el metodo prepare() de MySQLi para que pueda evitar inyecciones SQL y recibir parametros seguros
  $busqueda_preparada_usuario = $conexion->prepare($query_busqueda_usuario);

  // 3-> Hago paso de parametros seguros gracias a bind_param quien preprocesara el tipo y el valor del parametro
  $busqueda_preparada_usuario->bind_param('s', $_SESSION['usuario']);

  // 4-> ejecuto el query preparado con execute() de MySQLi 
  //     [La diferencia con query() es que esto es una sentencia preparada a ejecutarse y solo se logra ejecutar de esta forma]
  $busqueda_preparada_usuario->execute();

  // 5-> obtengo los resultados de la ejecucion del query
  $resultado = $busqueda_preparada_usuario->get_result();

  // 6-> A los resultados del query los vuelvo un arreglo asociativo de php para poder manipularlos
  $arreglo_resultante = $resultado->fetch_assoc();

  echo $arreglo_resultante['habilitar_examen'];

  /* 

  // Testing en base a impresiones, los datos los imprime el ajax del lado de JS

  // como testing hago la impresion del arreglo completo
  print_r($arreglo_resultante);

  //
  print_r("\n");

  // imprimo solo una llave del arreglo
  print_r($arreglo_resultante['habilitar_examen']);

  */

?>
