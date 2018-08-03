var base_url = window.location.origin;
/*-------------------------------------Document Ready------------------------------------------------*/

var $table = $('#tablaEntrevistas');

$(document).ready(function() {
  $table.bootstrapTable('hideColumn', 'id_entrevista');
});
var nombreApellido;
$table.on('dbl-click-row.bs.table', function (e, row, $element) {
        $.confirm({
          title: function(){
                var self = this;
                nombreApellido = row.nombres+' '+row.apellido;
                return $.ajax({
                    url: 'consultarPostulante/headerConsulta.php',
                    method: 'POST',
                }).done(function(response) {
                    var parentTitle = self.parentElement;
                    if (parentTitle != null) {
                     parentTitle.innerHTML = response;
                     // $('.tituloWizard').html('<p>'+row.organizacion+'</p>');
                     $('.tituloWizard').append('<p>'+nombreApellido+'</p>');
                    }
                }).fail(function(){
                   self.parentElement.innerHTML = "FAIL"
                });
            },
        		icon: 'fa fa-spinner fa-spin',
        		theme:'material',
            type:'dark',
        		columnClass: 'xlarge',
            containerFluid:false,
        		buttons:{
              Eliminar:{
                icon: 'glyphicon glyphicon-heart',
                btnClass: 'btn-danger',
                action: function(){
                  eliminarEntrevista(row.id_entrevista);
                  return false;
                }
              },
              Editar: {
                btnClass: 'btn-warning',
                isHidden: false,
                action: function(){
                  this.buttons.Consultar.show();
                  this.buttons.Editar.hide();
                  enablearCampos();
                  return false;
          			}
              },
              Consultar: {
                btnClass: 'btn-blue',
                isHidden: true,
                action: function(){
                  var self = this;
                  this.buttons.Consultar.hide();
                  this.buttons.Editar.show();
                  rellenarFormularioPostulante(postulanteInfo);
                  recargarGmap(postulanteInfo.Postulante.InformacionSocioambiental.gmap);
                  disablearCampos();
                  return false;
          			}
              },
        			Cerrar: {
                btnClass: 'btn-dark',
                action: function(){
                    $('#scriptDomicilio').remove();
                    $('#scriptGmap').remove();
                  }
        			 }
        		},
        		onContentReady: function(){
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

    function eliminarEntrevista(idEntrevista){
      $.confirm({
        icon: 'glyphicon glyphicon-trash',
        title: '¿Eliminar a '+nombreApellido+'?',
        content: 'Está funcion se cancelara en 8 segundos si no es ejecutada',
        autoClose: 'Cancelar|8000',
        columnClass: 'medium',
        theme:'material',
        type:'red',
        backgroundDismiss: false,
        backgroundDismissAnimation: 'glow',
        buttons: {
            Eliminar: {
                text: 'Aceptar',
                btnClass: 'btn-success',
                action: function () {
                  $.ajax({
                      url: '../controladores/eliminarEntrevistaController.php',
                      method: 'POST',
                      data:{
                        id_entrevista:idEntrevista,
                      },
                      success: function(){
                        window.location.href= base_url+'/sps/vistas/consultar_entrevistas.php'
                      }
                  });
                }
            },
            Cancelar:{
              btnClass: 'btn-dark',
              action:function () {
              }
            }
        }
    });
    }
