<?php 
  session_start();
  if(isset($_SESSION['usuario'])){
    $usuario = $_SESSION['usuario'];
  }else{
    $usuario ="";
  }
  require_once 'app/config.php';
  
?>
<!DOCTYPE html>

<html>
<head><meta charset="utf-8">
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistema de Preinscripción</title>
  <?php require_once 'app/dependencias.php';  ?>
</head>
<body>
  <!-- INICIO DE PRIMERA ZONA COMUNITARIA VISUAL -->
  <div class="container-fluid">
    <div class="row mt-3">
      <div class="col">
        <?php require_once 'view/navbar.php' ?>
      </div>
    </div>
  </div>
  <!-- FIN DE PRIMERA ZONA COMUNITARIA VISUAL -->

  <!-- INICIO ZONA DE CONTROL LOGICO -->
  <?php

    if(isset($_GET['vista_solicitada'])){

      $direccion_solicitada = explode('/', $_GET['vista_solicitada']);

      switch($direccion_solicitada[0]){

        case 'login':{
          require_once 'view/login.php';
          break;
        }
        
        case 'registro':{
          require_once 'view/registro.php';
          break;
        }

        case 'upload':{
          require_once 'view/upload.php';
          break;
        }

        case 'candidato':{
          require_once 'view/candidato.php';
          break;
        }

        case 'dda':{
          require_once 'view/dda.php';
          break;
        }

        case 'financieros':{
          require_once 'view/financieros.php';
          break;
        }

        case 'salir':{
          require_once 'control/control_salir.php';
          break;
        }
        
        case 'examen':{
          require_once 'examen/index.php';
          break;
        }
        
        default:{ 
          require_once 'view/login.php';
          break;
        }
        

      }

    }else{

      require_once 'view/login.php';

    }
  
  ?>
  <!-- FIN ZONA DE CONTROL LOGICO -->

</body>
</html>