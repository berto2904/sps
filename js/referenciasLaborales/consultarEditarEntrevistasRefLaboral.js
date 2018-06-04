var base_url = window.location.origin;
var indice = 1;
var flagGmap = false;
/*-------------------------------------Document Ready------------------------------------------------*/
var postulanteInfo;
var id = $('#idEntrevista').val();



$(document).ready(function() {
  traerInfoDeEntrevista();
});

function traerInfoDeEntrevista(){
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
}


function crearInformeLaboral(idRefLaboral){
  $.confirm({
    title:"Informe Laboral",
      icon: 'fa fa-spinner fa-spin',
      theme:'material',
      type:'dark',
      columnClass: 'xlarge',
      containerFluid: false,
      buttons:{
        formSubmit: {
           text: 'Registrar',
           btnClass: 'btn-green'
        },
        Cerrar: function(){
        },
      },
      onContentReady: function(){
            var self = this;
            return $.ajax({
                url: 'registracionInformeLaboral.php',
                method: 'POST',
                data:{
                  id_ref:idRefLaboral
                }
            }).done(function (response) {
                self.setContentAppend(response);
                console.log("hola");
                // self.$content.find('form').on('submit', function (e) {
                //     // if the user submits the form by pressing enter in the field.
                //   e.preventDefault();
                //   self.$$formSubmit.trigger('click'); // reference the button and click it
                //   });
            }).fail(function(){
                self.setContentAppend('<div>Fail!</div>');
            });
        }
    });
}
