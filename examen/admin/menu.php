<?php
	session_start();
    if(isset($_SESSION['user']) && ($_SESSION['opciones']==1) ){
	
 ?>

 <!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>
	<?php require_once "../scripts.php"; ?>
    <?php require_once "../css/dependencias.php"; ?>
    <link href="../css/menu.css" rel="stylesheet" type="text/css" media="screen">
    <link rel="stylesheet" type="text/css" href="../css/middleBodyMain/lightbox.min.css" />
</head>
<body>
<br><br><br>

    <div id="nav">
    <div class="navbar navbar-inverse navbar-fixed-top" data-spy="affix" data-offset-top="100">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!--<a class="navbar-brand" href="../index.php"><img class="img-responsive logo img-thumbnail" src="../img/escudo4x4.png" alt="" width="100px" height="100px"></a>-->
          
          <a class="navbar-brand example-image-link" href="../img/escudo4x4.png" data-lightbox="example-1"><img class="img-responsive logo img-thumbnail example-image" src="../img/escudo4x4.png" alt="image-1" width="100px" height="100px"/></a>
          
        </div>
        <div id="navbar" class="collapse navbar-collapse">

          <ul class="nav navbar-nav navbar-right">
              
              
              <li class="active"><a href="inicioAdmin.php" style="font-size:1.8rem;"><span class="glyphicon glyphicon-home"></span> Inicio</a>
            </li>


           <li class="active"><a href="citas.php" style="font-size:1.8rem;"><span class="glyphicon glyphicon-user"></span> Alumnos </a>
           </li>
            <li class="active"><a href="index.php" style="font-size:1.8rem;"><span class="glyphicon glyphicon-list-alt"></span> Graficas </a>

              
          <li class="dropdown" >
            <a href="#" style="color: white; font-size:1.8rem;" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Usuario: <?php echo $_SESSION['user']; ?>  <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li> <a style="color: red; font-size:1.8rem;" href="../php/salir.php"><span class="glyphicon glyphicon-off"></span> Salir</a></li>
              
            </ul>
          </li>
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
    <!--/.contatiner -->
  </div>
</div>    
    
    
</body>
</html>

<script type="text/javascript" src="../js/middleBodyMain/lightbox-plus-jquery.min.js"></script>

<?php
       }else{
		header("location:../index.php");
	}
 ?>