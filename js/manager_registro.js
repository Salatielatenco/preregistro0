$(document).ready(function(){

  function valida_confirmacion_password(){

    if($('#registro_password').val() != $('#registro_password_confirmacion').val()){

      swal('Upps', 'Los password no coinciden, por favor vuelvelo a confirmar', 'warning');
      $('#registro_password_confirmacion').val("");
      return false;

    }else{

      registro_password = $('#registro_password').val();

      console.log("Validacion password OK\n\n Sending info to server...\n");

      recolector_de_informacion = "registro_nombre="+registro_nombre+
                                              "&registro_paterno="+registro_paterno+
                                              "&registro_materno="+registro_materno+
                                              "&registro_fecha_nacimiento="+registro_fecha_nacimiento+
                                              "&registro_telefono="+registro_telefono+
                                              "&registro_carrera="+registro_carrera+
                                              "&registro_mail="+registro_mail+
                                              "&registro_password="+registro_password
                                              ;

      // Construccion de la interfaz ajax
      $.ajax({
        type: 'POST',
        data: recolector_de_informacion,
        url: 'control/control_registro.php',
        success: function(resultado){

          console.log(resultado);

          a = JSON.parse(resultado);

          resultado_db = a['resultado_db'].toString();

          resultado_mail = a['resultado_mail'].toString();

          direccion_destinatario = a['mail'].toString();

          if(resultado_db  == "1"){
            
            if(resultado_mail == "100"){

              mensaje_resultado_mail = "El mail se envió exitosamente";

            }else{

              mensaje_resultado_mail = "Checking the email send process.... Upss.... This maybe Brick...";

            }

            swal({
              icon: "success",
              title: "Usuario creado con exito !!!",
              html: true,
              text:  '\n\n Al cerrar esta venta regresarás al LogIn (^.^)'+
                      '\n\n Tus datos de acceso son:\n\nMAIL y PASSWORD'+
                      '\n\n Se te envió un correo con los datos de tu registro'+
                      '\n\n Direccion del envío: '+direccion_destinatario,
              closeOnClickOutside: false,
              closeOnEsc: false,
              value: true,
              buttons: false,
              timer: 3000             
            }).then((value) => {
              window.location="login";
            });

            return false;

          }else if(resultado_db  == "correo_ya_existente"){

            swal('Upps', 'El correo:\n\n' +direccion_destinatario+
                    '\n\nYa existe en el sistema\n\n'+
                    'Si olvidaste tu password revisa tu cuenta de email, ya que al registrarte enviamos tus datos de acceso '+
                    'o escribenos a:\n\n contacto.preinscripcion.itma2@gmail.com',
                    'error');
            return false;

          }else{

            swal('Upps', 'Error al crear el nuevo usuario', 'error');

            return false;

          }

        }
      
      });

    }

  }

  function valida_confirmacion_email(){

    if($('#registro_mail').val() != $('#registro_mail_confirmacion').val()){

      swal('Upps', 'Los email no coinciden, por favor vuelvelo a confirmar', 'warning');
      $('#registro_mail_confirmacion').val("");
      return false;

    }else{

      registro_mail = $('#registro_mail').val();

      console.log("Validacion mail OK");
      valida_confirmacion_password();

    }

  }

  function valida_construccion_email(){

    //evaluacion de construccion de email
    cadena = $('#registro_mail').val();
    if(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/.test(cadena)){

      console.log("Construccion mail  OK");
      valida_confirmacion_email();

    }else{

      swal('Upps', 'Ingresa un email valido por favor \n\nEjemplo: candidato@miemail.com', 'warning');
      return false;

    }

  }

  function valida_seleccion_carrera(){
    
    carrera = $('#registro_carrera').val();

    console.log(carrera);

    carrera = carrera.toUpperCase();

    if(carrera == "SIS" || carrera == "IND" || carrera == "GES"){
      
      registro_carrera = carrera;

      console.log("Validacion carrera OK");

      valida_construccion_email();

    }

  }

  function valida_telefono(){

    telefono = $('#registro_telefono').val();

    //console.log(telefono);

    telefono = parseInt(telefono);
    
    if(telefono < 0){

      swal(' Alerta en: TELEFONO', 'No existen número de telefono negativos', 'warning');
      return false;

    }else{

      telefono = telefono.toString();

      if(telefono.length < 10){

        swal(' Alerta en: TELEFONO', 
                'Debes de tener al menos 10 digitos en tu telefono\n' +
                'Recuerda que en zona metropolitana los números inician con 55\n' +
                'Ejemplo:   5558442834', 
                'warning');
        return false;

      }else if(telefono.length > 10){

        swal(' Alerta en: TELEFONO', 
                'No debes tener más de 10 digitos\n' +
                'Recuerda que en zona metropolitana los números inician con 55\n' +
                'Ejemplo:   5558442834', 
                'warning');
        return false;

      }else{

        registro_telefono = $('#registro_telefono').val();

        console.log("Validacion Telefono OK");

        valida_seleccion_carrera();

      }

    }

  }

  function valida_fecha_nacimiento(){

    if($('#registro_fecha_nacimiento').val() == ""){

    }else{

      fecha_ingresada = $('#registro_fecha_nacimiento').val().split("-");

      edad = 2020-fecha_ingresada[0];

      if(edad < 16){

        swal(' Alerta en: FECHA DE NACIMIENTO', 'La fecha que indicas no es válida, \n\nEres muy jóven!!!', 'warning');
        return false;

      }else if(edad > 99){

        swal(' Alerta en: FECHA DE NACIMIENTO', 'La fecha que indicas no es válida !!!', 'warning');
        return false;

      }else{

        registro_fecha_nacimiento = $('#registro_fecha_nacimiento').val();

        console.log("Validacion Fecha OK");

        valida_telefono();

      }

    }
    
  }

  function valida_construccion_alfabetica(){

    cadena = $('#registro_nombre').val();
    regexp1 = /[^\w\s]/gi;
    regexp2 = /[^A-Z\s]/gi;
    resultado1 = cadena.match(regexp1);
    resultado2 = cadena.match(regexp2);

    if( resultado1 != null || resultado2 != null){

      if(resultado1 == null){
        resultado1="";
      }
      if(resultado2 == null){
        resultado2="";
      }
      swal(' Alerta en: NOMBRE', 'los siguientes caracteres no son validos:\n\n' + resultado2 + resultado1, 'warning');
      return false;

    }else{

      registro_nombre = $('#registro_nombre').val();
      registro_nombre = registro_nombre.trim();
      registro_nombre = registro_nombre.toUpperCase();

      cadena = $('#registro_paterno').val();
      resultado1 = cadena.match(regexp1);
      resultado2 = cadena.match(regexp2);

      if( resultado1 != null || resultado2 != null){

        if(resultado1 == null){
          resultado1="";
        }
        if(resultado2 == null){
          resultado2="";
        }
        swal(' Alerta en: APELLIDO PATERNO', 'los siguientes caracteres no son validos:\n\n' + resultado2 + resultado1, 'warning');
        return false;

      }else{

        registro_paterno = $('#registro_paterno').val();
        registro_paterno = registro_paterno.trim();
        registro_paterno = registro_paterno.toUpperCase();

        cadena = $('#registro_materno').val();
        resultado1 = cadena.match(regexp1);
        resultado2 = cadena.match(regexp2);

        if( resultado1 != null || resultado2 != null){

          if(resultado1 == null){
            resultado1="";
          }
          if(resultado2 == null){
            resultado2="";
          }

          swal(' Alerta en: APELLIDO MATERNO', 'los siguientes caracteres no son validos:\n\n' + resultado2 + resultado1, 'warning');
          return false;
  
        }else{

          registro_materno = $('#registro_materno').val();
          registro_materno = registro_materno.trim();
          registro_materno = registro_materno.toUpperCase();

          console.log("Validacion Alfabetica OK");
          valida_fecha_nacimiento();

          return false;

        }

      }

    }

  }

  function valida_vacios(){

    if($('#registro_nombre').val() == ""){
      swal('Upps', 'Ingresa tu "Nombre" por favor', 'warning');
      return false;
    }else if($('#registro_paterno').val() == ""){
      swal('Upps', 'Ingresa tu "Apellido Paterno" por favor', 'warning');
      return false;
    }else if($('#registro_materno').val() == ""){
      swal('Upps', 'Ingresa tu "Apellido Materno" por favor', 'warning');
      return false;
    }else if($('#registro_fecha_nacimiento').val() == ""){
      swal('Upps', 'Ingresa tu "Fecha de Nacimiento" por favor', 'warning');
      return false;
    }else if($('#registro_telefono').val() == ""){
      swal('Upps', 'Ingresa un "Telefono" para poderte contactar', 'warning');
      return false;
    }else if($('#registro_carrera').val() == ""){
      swal('Upps', 'Ingresa tu "carrra" por favor', 'warning');
      return false;
    }else if($('#registro_mail').val() == ""){
      swal('Upps', 'Ingresa tu "email" por favor', 'warning');
      return false;
    }else if($('#registro_mail_confirmacion').val() == ""){
      swal('Upps', 'Por favor confirma tu email', 'warning');
      return false;
    }else if($('#registro_password').val() == ""){
      swal('Upps', 'Ingresa un password para tu cuenta por favor', 'warning');
      return false;
    }else if($('#registro_password_confirmacion').val() == ""){
      swal('Upps', 'Por favor confirma tu password por favor', 'warning');
      return false;
    }else{
      console.log("Todos los datos FULL");
      valida_construccion_alfabetica();
    }

  } 

  $('#btn_registro_usuario').click(function(){

    valida_vacios();
    
  });

});