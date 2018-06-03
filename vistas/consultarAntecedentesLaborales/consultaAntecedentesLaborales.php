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
						<div class="tab-content formularioPostulante">
							<?php
                include('consultarEditarInformesLAborales/bodyReferenciasLaborales.php');
               ?>
							<div class="clearfix"></div>
						</div>
					</div>
				</section>
      </div>
    </div>
</header>
<script src="../js/crearPostulante.js" target="_top"></script>
<script src="../js/referenciasLaborales/consultarEditarEntrevistasRefLaboral.js"></script>
<!-- <script src="../js/consultarEntrevistas/consultarEditarPostulante.js"></script> -->
