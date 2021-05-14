function valida_construccion_email(){

  cadena = $('#ingreso_mail').val();
  if(!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/.test(cadena))){

    swal('Upps', 'Ingresa un email valido por favor \n\nEjemplo: candidato@miemail.com', 'warning');
    return false;

  }else{

    $.ajax({

      type: 'POST',
      data: $('#formulario_ingreso').serialize(),
      url: 'control/control_login.php',
      success: function(resultado){
        
        console.log(resultado);

        

        if(resultado==1){

          swal({
            icon: "success",
            title: "Candidato Encontrado !!!",
            html: true,
            text:  '\n\n Estas siendo redirigido automaticamente, no desesperes (^.^)',
            closeOnClickOutside: false,
            closeOnEsc: false,
            value: true,
            buttons: false,
            timer: 10            
          }).then((value) => {

            window.location="candidato";

          });

          return false;

        }else if(resultado == 2){ 
        
          swal({
            icon: "success",
            title: "Bienvenida Regina",
            html: true,
            text:  '\n\n Iniciando tu interfaz (^.^)',
            closeOnClickOutside: false,
            closeOnEsc: false,
            value: true,
            buttons: false,
            timer: 1500            
          }).then((value) => {

            window.location="dda";

          });

          return false;
        
        }else if(resultado == 3){

          swal({
            icon: "success",
            title: "Hola Nelly",
            html: true,
            text:  '\n\n Cargando tu interfaz <3',
            closeOnClickOutside: false,
            closeOnEsc: false,
            value: true,
            buttons: false,
            timer: 1500            
          }).then((value) => {

            window.location="financieros";

          });

          return false;

        }else {

          $('#formulario_ingreso')[0].reset();
          swal('Upss', "Los datos que ingresas no existen en el sistema\n\n Vuelve a intentar por favor", 'warning');
          return false;

        }

      }

    });

  }

}

function valida_vacios(){
    
  if($('#ingreso_mail').val() == ""){
      
    swal("Upps","Falta ingresar tu dirección de EMAIL","warning")
    
    return false;
    
  }else if($('#ingreso_password').val() == ""){
      
    swal("Upps","Falta el PASSWORD","warning")
    
    return false;
    
  }else{
      
    valida_construccion_email();
    
  }
  
}
  
  
  $(document).ready(function(){

    $('#btn_ingreso_sistema').click(function(){

      valida_vacios();

    });

  });



  

  