
<?php

  //session_start();

  if(isset($_SESSION['usuario'])){
    $usuario = $_SESSION['usuario'];
?>
    <div class="container mt-4">
      <div class="row">
        <div class="col">
          <div class="display-3 text-center">has iniciado sesion</div>
        </div>
      </div>

      <div class="row mt-4 d-flex justify-content-around">
        <div class="col-sm-5">

          <div class="card" style="width: 100%;">
            <img src="img/upload.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title text-center">Subir archivos</h5>
              <p class="card-text text-justify mt-2">
                En este apartado podrás subir tu documentación en formato 
                <strong style="color: red;">PDF</strong> con un peso de hasta 
                <strong style="color: green;">1MB</strong> por cada documento
              </p>
              <a href="upload" class="btn btn-primary btn-block" id="btn_go_upload">Vamos</a>
            </div>
          </div>

        </div>
        <div class="col-sm-5">

          <div class="card " style="width: 100%;">
            <div class="d-flex justify-content-center">
              <img src="img/test.png" class="card-img-top imgen-panel-candidato" alt="...">
            </div>
            <div class="card-body">
              <h5 class="card-title text-center mt-2">Realizar Examen</h5>
              <hr>
              <br>
              <hr>
              <div id="kike">
              <h4 class="card-text text-justify">
                SI TUS DOCUMENTOS FUERON ACEPTADOS APARECERÁ UN BOTON PARA HACER TU EXAMEN JUSTO ABAJO DE ESTAS LETRAS
              </h4>
              <br>
              <hr>
              <br>
              </div>
              <a href="examen" class="btn btn-danger btn-block" id="btn_go_test"><strong>Iniciar Examen</strong></a>
            </div>
          </div>

        </div>
      </div>

    </div>

    <script src="js/manager_candidato.js"></script>

<?php  

  }else{

    header("location:login");
    
  }

?>