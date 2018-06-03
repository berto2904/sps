var base_url = window.location.origin;
var indice = 1;
var flagGmap = false;
/*-------------------------------------Document Ready------------------------------------------------*/
var postulanteInfo;



$(document).ready(function() {

var id = $('#idEntrevista').val();
 $.ajax({
        url: "../controladores/consultarPostulante.php",
        type:"POST",
        async:true,
        data: {
        	id_entrevista:id,
        },
        success: function(response) {
        	postulanteInfo = JSON.parse(response);
          $.each(postulanteInfo.Postulante.ReferenciasLaborales.Empresas,function(id1, empresa){
           $.each(empresa,function(id2, value){
             if ($('#empresa_'+id1+' #'+id2).exists()) {
               $('#empresa_'+id1+' #'+id2).text(value);
             }
            });
          });
        }
     });
});
