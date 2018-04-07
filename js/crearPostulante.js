var base_url = window.location.origin;

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
  $('#addfamiliar').click(function(){
    $("#datosFamiliares").append('<div class="form-group col-md-12" id="infoFam"> <div class="col-md-2"> <select class="tipoFamiliar  form-control" name="infoFamiliar[]"> <option value=""></option> <option value="1">Padre</option> <option value="2">Madre</option> <option value="3">Hijo</option> <option value="4">Hija</option> </select> </div> <div class="col-md-3"> <input type="text" class="form-control"  name="infoFamiliar[]" placeholder="Apellido y Nombre"> </div> <div class="col-md-3"> <input type="text" class="form-control"  name="infoFamiliar[]" placeholder="Domicilio"> </div> <div class="col-md-3"> <input type="text" class="form-control" name="infoFamiliar[]" placeholder="Profesion"> </div> <div class="col-md-1"> <button type="button" name="button" class="btn btn-sm btn-danger deleteFamiliar">-</button> </div> </div>');
  });
});

//Borrar familiar
$(document).on('click', '.deleteFamiliar', function() {
    $(this).parent().parent().remove();
});
