var base_url = window.location.origin;
/*-------------------------------------Document Ready------------------------------------------------*/

var $table = $('#tablaEntrevistas');

$(document).ready(function() {
  $table.bootstrapTable('hideColumn', 'id_entrevista');
});

$table.on('dbl-click-row.bs.table', function (e, row, $element) {
        console.log(row);
        $.confirm({
          title: function(){
                var self = this;
                return $.ajax({
                    url: 'consultarPostulante/headerConsulta.php',
                    method: 'POST'
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
        			Cerrar: function(){
        			},
        		},
        		content: function(){
        	        var self = this;
        	        return $.ajax({
        	            url: 'consultarPostulante/consultarEditarPostulante.php',
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
    // $.ajax({
    //         url: "/bbtw1/agregarCombo",
    //         type:"POST",
    //         data: {
    //         	pan:idPan,
    //         	carne:idCarne,
    //         	aderezo:idAderezos,
    //         	vegetales:idVegetales
    //         },
    //         success: function(e) {
    //         	$.alert($(e).filter('.mensaje').val());
    //         	$('.combosCreados').html($(e).find('.combosCreados'));
    //         	sumarCombos();
    //         }
    // 	});
/*-------------------------------------Funciones------------------------------------------------*/

// $(document).on('click', '.deleteButton', function() {
// });
