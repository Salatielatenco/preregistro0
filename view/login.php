<div class="container mt-4">
  <div class="row mt-3">
    <div class="col">
      <div class="display-4 text-center">
        Sistema de Preinscripción
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <div class="display-3 text-center">
        TecNM  Campus Milpa Alta II
      </div>
    </div>
  </div>
  <div class="row mt-3">
    <div class="col-sm-4"></div>
    <div class="col-sm-4">

      <div class="card border-0" style="width: 18rem;">
        <img class="card-img-top" src="img/logo.png" alt="Card image cap">
        <div class="card-body">

          <form id="formulario_ingreso">
            <div class="form-group d-flex justify-content-end">
              <a class="badge badge-light" href="registro">Registrarse</a>
            </div>
            <div class="form-group">
              <label for="ingreso_mail">Correo electrónico</label>
              <input 
                type="text" 
                class="form-control" 
                id="ingreso_mail" 
                name="ingreso_mail" 
                placeholder="Ingresa tu mail"
              >
            </div>
            <div class="form-group">
              <label for="ingreso_password">Password</label>
              <input 
                type="password" 
                class="form-control" 
                id="ingreso_password"
                name="ingreso_password" 
                placeholder="Password"
              >
            </div>
            <div class="form-check d-flex justify-content-end">
              <span class="btn btn-dark" id="btn_ingreso_sistema">Entrar</span>
            </div>
          </form>

        </div>
      </div>

    </div>
    <div class="col-sm-4"></div>
  </div>
</div>

<!-- Funcionalidad de la vista -->
<script src="js/manager_login.js"></script>