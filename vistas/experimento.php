<?php
$server = ($_SERVER['DOCUMENT_ROOT']);
 ?>
	<header>
    <div class="col-md-12 col-md-offset-0 text-left">
      <div class="row">
        <section>
					<div class="wizard" style=" margin: 0!important;">
						<form role="form" method="post" action="../controladores/registrarPostulanteController.php">
							<div class="tab-content formularioPostulante">
								<?php
                  include('registracionPostulante/formuInfoEntre.php');
                  include('registracionPostulante/formuInfoPersonal.php');
                  include('registracionPostulante/formuInfoFamiliar.php');
                  include('registracionPostulante/formuInfoEducacion.php');
                  include('registracionPostulante/formuInfoHobby.php');
                  include('registracionPostulante/formuInfoSocioambiental.php');
                  include('registracionPostulante/formuInfoEconomica.php');
                  include('registracionPostulante/formuInfoReferenciasLaborales.php');
                  include('registracionPostulante/formuConfirmacion.php');
                 ?>
								<div class="clearfix"></div>
							</div>
						</form>
					</div>
				</section>
      </div>
    </div>
</header>
<script src="../js/domicilioGMap.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBMCtHlS2MH-UExgf-0lkQyoppD2nDKA0U&libraries=places&callback=initAutocomplete" async defer></script>
