var base_url = window.location.origin;
/*-------------------------------------Document Ready------------------------------------------------*/

var $table = $('#tablaEntrevistas');

$(document).ready(function() {
  // $table.bootstrapTable('hideColumn', 'id_entrevista');
});

$table.on('dbl-click-row.bs.table', function (e, row, $element) {
        $.confirm({
          title: function(){
                var self = this;
                return $.ajax({
                    url: 'consultarAntecedentesLAborales/headerConsultaAntecedentesLaborales.php',
                    method: 'POST',
                }).done(function(response) {
                    var parentTitle = self.parentElement;
                    if (parentTitle != null) {
                     parentTitle.innerHTML = response;
                     $('.tituloWizard').html('<h1>Postulante: '+row.nombres+' '+row.apellido+'</h1>');
                     // $('.tituloWizard').append('<h2>Postulante: '+row.nombres+' '+row.apellido+'</h2>');
                    }
                }).fail(function(){
                   self.parentElement.innerHTML = "FAIL"
                });
            },
        		icon: 'fa fa-spinner fa-spin',
        		theme:'material',
            type:'dark',
        		columnClass: 'xlarge',
        		buttons:{
              Cerrar: function(){
        			},
        		},
        		onContentReady: function(){
        	        var self = this;
                  return $.ajax({
        	            url: 'consultarAntecedentesLaborales/consultaAntecedentesLaborales.php',
        	            method: 'POST',
                      data: {
                      	id_entrevista:row.id_entrevista
                      }
        	        }).done(function (response) {
        	            self.setContentAppend(response);
        	        }).fail(function(){
        	            self.setContentAppend('<div>Fail!</div>');
        	        });
        	    }
        	});

    });
