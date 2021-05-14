function precargar_tabla(){
  $.ajax({

    url: 'control/control_dda.php',
    success: function(resultado){

      //console.log(resultado);
      $('#datos_de_tabla').html(resultado);

    }

  });
}

function ver_pdfs(id){
  
  //console.log(id);
  
  colector = "id="+id.toString();

  $.ajax({

    type: 'post',
    url: 'control/control_dda_modal.php',
    data: colector,
    success: function(resultado){
      //console.log(resultado);
      $('#documentos_usuario').html(resultado);
    }

  });

}

function elimina_pdfs(id){

  //console.log(id);

  colector = "id="+id.toString();

  $.ajax({
    type: 'post',
    data: colector,
    url: 'control/control_dda_elimina_pdfs.php',
    success: function(resultado){

      if(resultado != null){

        swal({
  
          icon: "success",
          title: "Formatos Eliminados !",
          text:  '\n\n\n Actualizando la tabla...',
          closeOnClickOutside: false,
          closeOnEsc: true,
          value: true,    

        }).then((value) => {

          window.location="dda";

        });

        return false;

      }

    }

  });

}

function autoriza_pdfs(id){

  //console.log(id);

  colector = "id="+id.toString();

  $.ajax({
    type: 'post',
    data: colector,
    url: 'control/control_dda_autoriza_pdfs.php',
    success: function(resultado){

      if(resultado == 1){

        swal({
  
          icon: "success",
          title: "Formatos autorizados con exito !",
          text:  '\n\n\n Actualizando la tabla...',
          closeOnClickOutside: false,
          closeOnEsc: true,
          value: true,    

        }).then((value) => {

          window.location="dda";

        });

        return false;

      }
      
    }
  });

}

$('document').ready(function(){

  //console.log("Hola mundo");

  precargar_tabla();

});