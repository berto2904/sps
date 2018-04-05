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
});



function mostrarMascotasDelUser(idUsuario) {
  $.ajax({
    url:base_url+"/fluffy/controladores/cargarMascotasDelUserController.php",
    type:"POST",
    data:{usuario:idUsuario},
    success: function (result) {
      var parsed = JSON.parse(result);
      var jsonString = JSON.stringify(parsed);
      enviarMascotasAVistaMascotasDelUser(jsonString);
      }
  });
}

function enviarMascotasAVistaMascotasDelUser(mascotasDelUser){
    $.ajax({
      url:base_url+"/fluffy/vistas/home.php",
      type:"POST",
      data:{mascotas:mascotasDelUser},
      success: function(data){
        var result = $('<div />').append(data).find('#mascotasUserSection').html();
            $('#mascotasUserSection').html(result);
            $('.dropdown-submenu a.test').on("click", function(e){
               $(this).next('ul').toggle();
               e.stopPropagation();
               e.preventDefault();
             });
        }
    });
}
