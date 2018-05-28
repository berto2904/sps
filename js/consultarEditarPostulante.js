var base_url = window.location.origin;
var indice = 1;
var flagGmap = false;
/*-------------------------------------Document Ready------------------------------------------------*/
var postulanteInfo;



$(document).ready(function() {
  var scripts = document.getElementsByTagName("script");

   

    // $.each(scripts, function(id,item){
    // 	if(scripts[id].src.match("maps.googleapis") != null){
    //     flagGmap = true;
    // 	}
    //
    // });

      var s2 = document.createElement("script");
      s2.type = "text/javascript";
      s2.src="../js/domicilioGMap.js";
      s2.id="scriptDomicilio";
      $("head").append(s2);

      var s1= document.createElement("script");
      s1.type = "text/javascript";
      s1.src = "https://maps.googleapis.com/maps/api/js?key=AIzaSyBMCtHlS2MH-UExgf-0lkQyoppD2nDKA0U&libraries=places&callback=initAutocomplete";
      s1.id = "scriptGmap";
      $("head").append(s1);
      //
      // if (flagGmap == false) {
      //
      //   flagGmap = true;
      // }


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
                $("#"+id2+"_"+id).val(item2);
              }
              });
          });
          $.each(postulanteInfo.Postulante.EstudiosIdiomas.Estudios, function(indice, estudios) {
          	$.each(estudios, function(key,valor){
              if ($("#"+key+"_"+estudios.id_estudios).exists()) {
                $("#"+key+"_"+estudios.id_estudios).val(valor);
              }
        	   });
          });
          $.each(postulanteInfo.Postulante.EstudiosIdiomas.Idiomas, function(indice, estudios) {
             if ($("#id_idioma_"+estudios.id_idioma+"_1_"+estudios.id_lee).exists()) {
               $("#id_idioma_"+estudios.id_idioma+"_1_"+estudios.id_lee).prop('checked', true);
              }
              if ($("#id_idioma_"+estudios.id_idioma+"_2_"+estudios.id_habla).exists()) {
                $("#id_idioma_"+estudios.id_idioma+"_2_"+estudios.id_habla).prop('checked', true);
               }
               if ($("#id_idioma_"+estudios.id_idioma+"_3_"+estudios.id_escribe).exists()) {
                 $("#id_idioma_"+estudios.id_idioma+"_3_"+estudios.id_escribe).prop('checked', true);
                }
          });

          $.each(postulanteInfo.Postulante.HobbiesYPasatiempos, function(indice, hobby) {
            if ($('#hobby_'+hobby.id_pregunta).exists()) {
               $('#hobby_'+hobby.id_pregunta).val(hobby.respuesta);
            }
            });
        }
     });
});
