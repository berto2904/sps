var base_url = window.location.origin;
var indice = 1;
var flagGmap = false;
/*-------------------------------------Document Ready------------------------------------------------*/
var postulanteInfo;
var id = $('#idEntrevista').val();



$(document).ready(function() {

});



function crearInformeConfidencial(idPostulante){
  $.confirm({
      title:"Consultadas fuentes fidedignas arrojaron que:",
      icon: 'fa fa-spinner fa-spin',
      theme:'material',
      type:'dark',
      columnClass: 'xlarge',
      containerFluid: false,
      buttons:{
        formSubmit: {
           text: 'Registrar',
           btnClass: 'btn-green',
           action: function(){
             $.ajax({
               url:'../controladores/registrarInformeConfidencialController.php',
               method:'POST',
               data: $('#registroInformeConfidencial').serialize()+ "&id_entrevista="+$('#idEntrevista').val(),
               success: function(result){
                 $('#headerConsultaInfConfidencial').html(result);
               }
             });
           }
        },
        Cerrar: function(){
        },
      },
      content:function(){
            var self = this;
            return $.ajax({
                url: 'registracionInformeConfidencial.php',
                method: 'POST',
                data:{
                  id_postulante:idPostulante
                }
            }).done(function (response) {
                self.setContentAppend(response);
              }).fail(function(){
                self.setContentAppend('<div>Fail!</div>');
            });
        },
      onContentReady: function(){
            var jc = this;
            jc.$content.find('form').on('submit', function (e) {
                    e.preventDefault();
                  jc.$$formSubmit.trigger('click');
                  });
                }
        });
}

function eliminarInformeConfidencial(idPostulante){
  $.confirm({
    title: '¿Estás Seguro de eliminar el Informe Confidencial?',
    content: 'Está funcion se cancelara en 8 segundos si no es ejecutada',
    autoClose: 'Cancelar|8000',
    theme:'material',
    type:'dark',
    buttons: {
        Eliminar: {
            text: 'Aceptar',
            btnClass: 'btn-success',
            action: function () {
              $.ajax({
                  url: '../controladores/eliminarInformeConfidencialController.php',
                  method: 'POST',
                  data:{
                    id_postulante:idPostulante,
                    id_entrevista : $('#idEntrevista').val()
                  },
                  success: function(result){
                    $('#headerConsultaInfConfidencial').html(result);
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
