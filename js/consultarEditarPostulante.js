var base_url = window.location.origin;
var indice = 1;
/*-------------------------------------Document Ready------------------------------------------------*/
var postulanteInfo;

$.fn.exists = function () {
    return this.length !== 0;
}

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

          $.each(postulanteInfo.Postulante, function(id, item) {
            $.each(item, function (id2,item2){
              if(isNaN(id2)){
                if (id2 == 'entrevista_fechaHora') {
                  $('#'+id2).val(new Date(item2).toISOString().split('.')[0]);
                } else if ($("#"+id2).exists()) {
                  console.log(id2);
                  $('#'+id2).val(item2);
                }
              }
            });
          });
          $.each(postulanteInfo.Postulante.DatosFamiliares.Familiares, function(id, item) {
            $("#datosFamiliares").append('<div class="form-group col-md-12" id="infoFam_'+id+'"> <div class="col-md-1"> <button type="button" name="button" class="btn btn-sm btn-danger deleteButton">-</button> </div> <div class="col-md-2"> <select class="tipoFamiliar form-control" id="id_familiar_tipo_'+id+'" name="infoFamiliar[]"> <option value=""></option> <option value="1">Padre</option> <option value="2">Madre</option> <option value="3">Hijo</option> <option value="4">Hija</option> </select> </div> <div class="col-md-3"> <input type="text" class="form-control" id="familiar_apellido_nombre_'+id+'" name="infoFamiliar[]" placeholder="Apellido y Nombre" maxlength="70"> </div> <div class="col-md-3"> <input type="text" class="form-control" id="familiar_domicilio_'+id+'" name="infoFamiliar[]" placeholder="Domicilio" maxlength="70"> </div> <div class="col-md-3"> <input type="text" class="form-control" name="infoFamiliar[]" id="familiar_profesion_'+id+'"'
            +'placeholder="Profesion" maxlength="70"> </div> </div>');
            $.each(item,function(id2,item2){
              if ($("#"+id2+"_"+id).exists()) {
                console.log(id2);
                $("#"+id2+"_"+id).val(item2);
              }
              });
          });
          $.each(postulanteInfo.Postulante.EstudiosIdiomas.Estudios, function(indice, estudios) {
          	$.each(estudios, function(key,valor){
              if ($("#"+key+"_"+estudios.id_estudios).exists()) {
                console.log(valor);
                $("#"+key+"_"+estudios.id_estudios).val(valor);
              }
        	   });
          })


        }
     });
});
