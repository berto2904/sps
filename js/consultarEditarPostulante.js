var base_url = window.location.origin;
var indice = 1;
/*-------------------------------------Document Ready------------------------------------------------*/
var postulanteInfo;

$(document).ready(function() {
var id = $('#idEntrevista').val();
 $.ajax({
        url: "../controladores/consultarPostulante.php",
        type:"POST",
        data: {
        	id_entrevista:id,
        },
        success: function(response) {
        	postulanteInfo = JSON.parse(response);
        }
	});

});
