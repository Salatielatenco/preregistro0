<!DOCTYPE html>
<html>
<head>
    <?php require_once "scripts.php"; ?>
    <link href="css/main2.css" rel="stylesheet" type="text/css" media="screen">
    <link rel="icon" type="image/ico" href="img/favicon.ico" />
    <title>Examen de Ingreso ITMA II</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<header></header>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-6"><br>
                <div class="panel panel-primary">
                    <div class="panel panel-body">
                        <div  style="text-align: center;">
                            <!--<img src="img/escudo4x4.png" height="100%" width="100%" >-->
                            <a class="example-image-link" href="img/escudo4x4.png" data-lightbox="example-1"><img class="example-image" src="img/escudo4x4.png" alt="image-1" height="100%" width="100%"/></a>
                            <a class="example-image-link" href="img/logoTec_NM.png" data-lightbox="example-1"><a class="example-image" alt="image-1"></a></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">  <br>
                <form class="panel panel-success" >
                    <div class="panel panel-heading" style="text-align:center;font-size:2.3rem;">BIENVENIDO</div>
                    <div class="panel panel-body">
                        <div class="text-align:centre;"><!--<br>-->
                            <p style="text-align:centre;font-size:1.5rem;">Tu usuario es: alumno</p><br>
                            <p style="text-align:centre;font-size:1.5rem;">Tu password es: 123</p><br>
                            <p style="font-size:2.3rem;">Usuario</p>
                            <input type="text" id="usuario"  class="form-control input-sm" style="font-size:1.7rem;"><br><br>
                            <p style="font-size:2.3rem;">Password</p>
                            <input type="password" id="password" class="form-control input-sm" style="font-size:1.7rem;"><br>
                            
                            <br>
                            <a class="btn btn-success" id="entrarSistema" style="width:100%;" >Ingresar</a>
                        </div>
                        
                    </div>
                </form>
            </div>
            
        </div> 
    </div> 
    
</body>


</html>
<script type="text/javascript">
	$(document).ready(function(){
		$('#entrarSistema').click(function(){
			if($('#usuario').val()==""){
				alertify.alert("Debes agregar el usuario");
				return false;
			}else if($('#password').val()==""){
				alertify.alert("Debes agregar el password");
				return false;
			}

			cadena="usuario=" + $('#usuario').val() + "&password=" + $('#password').val();

			$.ajax({
				type:"POST",
				url:"php/login.php",
				data:cadena,
				success:function(r){
					if(r==1){
						window.location="admin/inicioAdmin.php";
					}else if(r==2){
						window.location="Examen/registroAlumno.php";
					}else{
						alertify.alert("Fallo al entrar :(");
					}
				}
			});
		});	
	});
</script>

<script type="text/javascript" src="js/middleBodyMain/lightbox-plus-jquery.min.js"></script>