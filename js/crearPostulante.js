var base_url = window.location.origin;
/*-------------------------------------Document Ready------------------------------------------------*/
$(document).ready(function() {
  // $('#inputSubmit').click(function(){
  //     $.ajax({
  //       url:base_url+"sps/controladores/registrarPostulanteController.php",
  //       type:"POST",
  //       data{
  //         nombrePadre:$('#anPadre').val();
  //       }
  //     });
  //     return true;
  // });

  //Familiar
  $('#addfamiliar').click(function(){
    $("#datosFamiliares").append('<div class="form-group col-md-12" id="infoFam"> <div class="col-md-2"> <select class="tipoFamiliar  form-control" name="infoFamiliar[]"> <option value=""></option> <option value="1">Padre</option> <option value="2">Madre</option> <option value="3">Hijo</option> <option value="4">Hija</option> </select> </div> <div class="col-md-3"> <input type="text" class="form-control"  name="infoFamiliar[]" placeholder="Apellido y Nombre"> </div> <div class="col-md-3"> <input type="text" class="form-control"  name="infoFamiliar[]" placeholder="Domicilio"> </div> <div class="col-md-3"> <input type="text" class="form-control" name="infoFamiliar[]" placeholder="Profesion"> </div> <div class="col-md-1"> <button type="button" name="button" class="btn btn-sm btn-danger deleteFamiliar">-</button> </div> </div>');
  });

  //Educacion
  $("input:radio").click(function(){
    var group = "input:radio[name='"+$(this).attr("name")+"'][value=1]";
    $(group).attr("checked",true);
  });

  toggleIdiomas();
  $(".activarIdioma").trigger( "click" );

});

/*-------------------------------------Funciones------------------------------------------------*/

function toggleIdiomas(){
  $(".activarIdioma").click(function() {
    var grupo = $(this).parent().parent().parent()["0"];
    if ($(this).prop('checked') == false) {
      $(grupo).find('input:radio').attr('checked', false);
      $(grupo).find('input:radio').parent().parent().css('pointer-events','none')

    }else{
      $(grupo).find('input:radio[value=1]').prop('checked', true);
      $(grupo).find('input:radio').parent().parent().css('pointer-events','')
    }
  });
}
/**/
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

//Borrar familiar
$(document).on('click', '.deleteFamiliar', function() {
    $(this).parent().parent().remove();
});
