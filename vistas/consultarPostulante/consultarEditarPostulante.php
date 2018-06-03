<?php
$server = ($_SERVER['DOCUMENT_ROOT']);
include ($server.'/sps/helper/sessionValidation.php');
// include ($server.'/sps/controladores/consultarPostulante.php');
 $idEntrevista = $_POST["id_entrevista"];
 ?>
 <input type="hidden" id="idEntrevista" name="" value="<?= $idEntrevista?>">
	<header>
    <div class="col-md-12 col-md-offset-0 text-left">
      <div class="row">
        <section>
					<div class="wizard" style=" margin: 0!important;">
						<form role="form" method="post" action="../controladores/registrarPostulanteController.php">
							<div class="tab-content formularioPostulante">
								<?php
                  include('consultarEditarPostulante/1_formuInfoEntre.php');
                  include('consultarEditarPostulante/2_formuInfoPersonal.php');
                  include('consultarEditarPostulante/3_formuInfoFamiliar.php');
                  include('consultarEditarPostulante/4_formuInfoEducacion.php');
                  include('consultarEditarPostulante/5_formuInfoHobby.php');
                  include('consultarEditarPostulante/6_formuInfoSocioambiental.php');
                  include('consultarEditarPostulante/7_formuInfoEconomica.php');
                  include('consultarEditarPostulante/8_formuInfoReferenciasLaborales.php');
                  include('../registracionPostulante/formuConfirmacion.php');
                 ?>
								<div class="clearfix"></div>
							</div>
						</form>
					</div>
				</section>
      </div>
    </div>
</header>
<script src="../js/crearPostulante.js" target="_top"></script>
<script src="../js/consultarEntrevistas/consultarEditarPostulante.js"></script>
<script src="../js/domicilioGMap.js"></script>
<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBMCtHlS2MH-UExgf-0lkQyoppD2nDKA0U&libraries=places&callback=initAutocomplete" async defer></script> -->
