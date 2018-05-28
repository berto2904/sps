var base_url = window.location.origin;
/*-------------------------------------Document Ready------------------------------------------------*/

var $table = $('#tablaEntrevistas');

$(document).ready(function() {
  $table.bootstrapTable('hideColumn', 'id_entrevista');
});

$table.on('dbl-click-row.bs.table', function (e, row, $element) {
        $.confirm({
          title: function(){
                var self = this;
                return $.ajax({
                    url: 'consultarPostulante/headerConsulta.php',
                    method: 'POST',
                    async: true
                }).done(function(response) {
                    var parentTitle = self.parentElement;
                    if (parentTitle != null) {
                     parentTitle.innerHTML = response;
                     $('.tituloWizard').html('<h1>Entrevista Nº: '+row.id_entrevista+'</h1>');
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
              Eliminar: function(){
        				$.alert('Proximamente!!');
        			},
              Editar: function(){
                $.alert('Proximamente!!');
        			},
        			Cancelar: function(){
                $('#scriptDomicilio').remove();
                $('#scriptGmap').remove();
        			},
        		},
        		content: function(){
        	        var self = this;
        	        return $.ajax({
        	            url: 'consultarPostulante/consultarEditarPostulante.php',
        	            method: 'POST',
                      async: true,
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
