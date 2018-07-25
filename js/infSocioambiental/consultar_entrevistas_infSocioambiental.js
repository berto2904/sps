var base_url = window.location.origin;
/*-------------------------------------Document Ready------------------------------------------------*/

var $table = $('#tablaEntrevistas');

$(document).ready(function() {
  // $table.bootstrapTable('hideColumn', 'id_entrevista');
});

$table.on('dbl-click-row.bs.table', function (e, row, $element) {
        $.confirm({
            title: 'Informe Socioambiental',
        		theme:'material',
            type:'dark',
        		columnClass: 'large',
        		buttons:{
              Cerrar: function(){
        			},
        		},
        		onContentReady: function(){
        	        var self = this;
                  return $.ajax({
        	            url: 'consultarInformeSocioambiental/consultaInformeSocioambiental.php',
        	            method: 'GET',
                      data:"id_entrevista="+row.id_entrevista
                      // data: {
                      // 	id_entrevista:row.id_entrevista
                      // }
        	        }).done(function (response) {
        	            self.setContentAppend(response);
        	        }).fail(function(){
        	            self.setContentAppend('<div>Fail!</div>');
        	        });
        	    }
        	});

    });
