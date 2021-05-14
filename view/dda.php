<?php

  if(isset($_SESSION['usuario'])){

    if($_SESSION['usuario'] == "dda_milpaalta2@tecnm.mx"){

?>

      

      <div class="container-fluid mt-4">
        <div class="row">
          <div class="col">
            <!-- inicio: construccion de la card -->
            <div class="card bg-light mb-3">
                <div class="card-header">
                  <i class="fab fa-battle-net mr-2" style="font-size: 35;"></i>
                </div>
                <div class="card-body">
                  <!-- inicio: construccion del espacio para el boton de agregar con icono -->
                  <div class="row">
                    <div class="col">
                      <!-- agregamos un div para presentar el contenido de la tabla: lo importante de este es el ID -->
                      <div class="table-wrapper-scroll-y my-custom-scrollbar">

                        <div id="datos_de_tabla" class="mt-3"></div>

                      </div>

                    </div>
                  </div>
                </div>
                <div class="card-footer lead text-muted text-right">
                  By Coder
                </div>
              </div>
          </div>
        </div>
      </div>

      <script src="js/manager_dda.js"></script>

<?php

      require_once 'dda_modal.php';

    }else{

      header('location:salir');

    }

  }else{

    header('location:salir');

  }

?>