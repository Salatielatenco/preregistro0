<?php

/**
 * session start permite matener viva la variable de $_SESSION['usuario']
 * una vez que logramos hacer el logion asi que hasta que no se destuya la variable
 * esta puede verse en todos los documentos PHP (visuales o logicos del sistema)
 * 
 * en esta ocasion toma mas importancia en mi flujo xq con ella voy a consultar si el usuario 
 * logueado ya subio sus documentos al server o no
 * 
 */
  session_start();

  //print_r($_SESSION['usuario']);//testing exitoso
  //print_r("\n");// para que se escape bien el salto de line usa comillas dobles

  if(file_exists("../archivo/".$_SESSION['usuario'])){
    //print_r('Existe su directorio');
    echo 1;
  }else{
    //print_r('Brick...... NOO Existe su directorio');
    echo 0;
  }

?>