<?php
$server = ($_SERVER['DOCUMENT_ROOT']);
require ('../clases/UsuarioClass.php');
include ('../helper/sessionValidation.php');
include ('headersFooters/headerLibrerias.php');
include ('headersFooters/headerEnd.php');
?>
<header id="gtco-header" class="gtco-cover" role="banner" style="background-image: url('../librerias/Login/images/bg-01.jpg');">
  <div class="overlay"></div>
  <div class="gtco-container">
    <div class="row">
      <div class="col-md-12 col-md-offset-0 text-left">
        <div class="row contenidoPostulante">
          <section>
            <h1>Cargar Informacion Entrevistadora</h1>
          </section>
          <section>
  					<div class="wizard">
  						<div class="wizard-inner">
  							<div class="connecting-line"></div>
  							<ul class="nav nav-tabs tab-selection" role="tablist">
                  <li role="presentation" class="active">
                    <a href="#formuInfoEntre" data-toggle="tab" aria-controls="" role="tab" title="Informacion de entrevista">
                      <span class="round-tab">
                        <i class="ti-clipboard"></i>
                      </span>
                    </a>
                  </li>
  								<li role="presentation" class="">
  									<a href="#formuInfoPersonal" data-toggle="tab" aria-controls="" role="tab" title="Informacion Personal">
  										<span class="round-tab">
  											<i class="glyphicon glyphicon-user"></i>
  										</span>
  									</a>
  								</li>

  								<li role="presentation" class="">
  									<a href="#formuInfoFamiliar" data-toggle="tab" aria-controls="" role="tab" title="Familiares">
  										<span class="round-tab">
  											<i class="glyphicon glyphicon-leaf"></i>
  										</span>
  									</a>
  								</li>
  								<li role="presentation" class="">
  									<a href="#formuInfoEducacion" data-toggle="tab" aria-controls="" role="tab" title="Educación">
  										<span class="round-tab">
  											<i class="glyphicon glyphicon-education"></i>
  										</span>
  									</a>
  								</li>
  								<li role="presentation" class="">
  									<a href="#formuInfoHobby" data-toggle="tab" aria-controls="" role="tab" title="Hobbies y pasatiempos">
  										<span class="round-tab">
  											<i class="glyphicon glyphicon-music"></i>
  										</span>
  									</a>
  								</li>
                  <li role="presentation" class="">
  									<a href="#formuInfoSocioambiental" data-toggle="tab" aria-controls="" role="tab" title="Informacion Socioambiental">
  										<span class="round-tab">
  											<i class="glyphicon glyphicon-home"></i>
  										</span>
  									</a>
  								</li>
                  <li role="presentation" class="">
  									<a href="#formuInfoEconomica" data-toggle="tab" aria-controls="" role="tab" title="Informacion Economica">
  										<span class="round-tab">
  											<i class="glyphicon glyphicon-piggy-bank"></i>
  										</span>
  									</a>
  								</li>
                  <li role="presentation" class="">
  									<a href="#formuInfoReferenciasLaborales" data-toggle="tab" aria-controls="" role="tab" title="Antecedentes Laborales">
  										<span class="round-tab">
  											<i class="glyphicon glyphicon-briefcase"></i>
  										</span>
  									</a>
  								</li>
                  <li role="presentation" class="">
  									<a href="#formuConfirmacion" data-toggle="tab" aria-controls="" role="tab" title="Confirmacion">
  										<span class="round-tab">
  											<i class="glyphicon glyphicon-ok"></i>
  										</span>
  									</a>
  								</li>
  							</ul>
  						</div>

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
    </div>
  </div>
</header>
<?php
include ('headersFooters/footerLibrerias.php');
?>
<script src="../js/crearPostulante.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?&key=AIzaSyBMCtHlS2MH-UExgf-0lkQyoppD2nDKA0U&libraries=places&callback=initAutocomplete" async defer></script>
<script src="../js/domicilioGMap.js"></script>
<?php
include ('headersFooters/footerEnd.php');
?>
