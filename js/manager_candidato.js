
$(document).ready(function(){

    $.ajax({

      type:"POST",
      url: 'control/control_candidato_upload.php',
      success: function(resultado_up){
  
        (resultado_up == 1) ? $('#btn_go_upload').hide() : $('#btn_go_upload').show();
  
      }
  
    });

    $.ajax({

      type:"POST",
      url: 'control/control_candidato_test.php',
      success: function(resultado_test){

        (resultado_test == 1) ? $('#btn_go_test').show() : $('#btn_go_test').hide();
  
      }
  
    });

});