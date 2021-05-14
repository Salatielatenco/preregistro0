<!DOCTYPE html>
<html lang="en">
    <head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
        
        <title>Examen de Ingreso ITMA II</title>
        <link rel="icon" type="image/ico" href="../img/favicon.ico" />
        <link rel="stylesheet" href="css/main.css" type="text/css" media="screen"/>
        <?php require_once("scripts.php");?>
    </head>
    <header></header>
    <body>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-sm-0"></div>
                <div class="col-sm-13">
                    <div class="panel panel-default" >
                        <div class="panel panel-body" >
                            <form id="frmRegistro" name="frmRegistro">
                               <br>
                                <div style="text-align: center;">
                                    <label id="label1">Tecnológico de Milpa Alta II</label><br>
                                    <label id="label1">Muchas gracias por participar</label><br>
                                    <label id="label1">Toma una foto de estos resultados para evitar perder los datos</label><br>
                                   <label id="label1">Tu resultado es: </label>
                                   <label id="label1"></label>
                                   <label id="label1"> <?php echo $_REQUEST['res'];?> </label>
                                   <label id="label1"></label>
                                   <label id="label1"> de 120 preguntas</label>
                                   <br>
                                   <label id="label1"><h4>GRACIAS POR HACER TU EXAMEN</h4></label>
                                   <br>
                                   <label id="label1"><h4>El departamento de Desarrollo Académico se comunicará contigo para indicarte nuevos pasos y cualquier duda con tus resultados</h4></label>
                                </div>
                                <br>
                                <p></p>
                                <div style="text-align: center;">
                                   <a id="registrar" class="btn btn-primary" style="width:20%; height: 60px; font-size:2.3rem;" href="../../control/control_salir.php">Cerrar y Salir</a>
                               </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-sm-1"></div>
            </div>
        </div>
    </body>
</html>