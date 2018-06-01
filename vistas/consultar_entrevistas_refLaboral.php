<?php
$server = ($_SERVER['DOCUMENT_ROOT']);
require ('../clases/UsuarioClass.php');
// require ('../clases/ConnQuery.php');
include ($server.'/sps/helper/sessionValidation.php');
include ('headersFooters/headerLibrerias.php');
?>
<link rel="stylesheet" href="../librerias/bootstrap-table/src/bootstrap-table.css">
<link rel="stylesheet" href="../librerias/bootstrap-table/dist/bootstrap-table.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.css">
<?php
include ('headersFooters/headerEnd.php');
?>
<header id="gtco-header" class="gtco-cover" role="banner" style="background-image: url('../librerias/Login/images/bg-05.jpg');">
  <div class="overlay"></div>
  <div class="gtco-container">
    <div class="row">
      <div class="col-md-12 col-md-offset-0 text-left">
        <div class="row contenidoPostulante">
          <section>
            <h1>Referencias Laborales</h1>
          </section>
          <section>
  					<div class="wizard" style="margin: 2em 0em; ">
              <div class="wizard-inner" style=" padding: 3% 2%;">
                <h3>Postulante</h3>
                <!-- <div id="toolbar">
                  <button id="remove" class="btn btn-danger" disabled>
                    <i class="glyphicon glyphicon-remove"></i> Delete
                  </button>
                </div> -->
                <table id="tablaEntrevistas"
                       data-toggle="table"
                       data-url="../controladores/consultarEntrevistas.php"
                       data-search="true"
                       data-show-refresh="true"
                       data-show-toggle="true"
                       data-show-columns="true"
                       data-pagination="true"
                       data-page-size="5"
                       data-page-list="[5,8,10,20]">
                  <thead>
                    <tr>
                      <th data-field="id_entrevista" data-visible="false">Entrevista</th>
                      <th data-field="nombres">Nombres</th>
                      <th data-field="apellido">Apellido</th>
                      <th data-field="dni">DNI</th>
                      <th data-field="fNacPostulante" data-visible="false">Fecha de Nacimiento</th>
                      <th data-field="organizacion">Organizacion</th>
                      <!-- <th data-field="fechaHoraEntrevista">Fecha y Hora</th> -->
                      <th data-field="puesto">Puesto</th>
                      <th data-field="sexo" data-visible="false">Sexo</th>
                      <th data-field="nacionalidad" data-visible="false">Nacionalidad</th>
                      <th data-field="informeSocioambiental" data-visible="false">Informe Socio-Ambiental</th>
                    </tr>
                  </thead>
                </table>
              </div>
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
<script src="../librerias/bootstrap-table/src/bootstrap-table.js"></script>
<script src="../librerias/bootstrap-table/dist/locale/bootstrap-table-es-AR.js"></script>
<script src="../librerias/jquery-confirm/dist/jquery-confirm.min.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js"></script> -->
<script src="../js/consultar_entrevistas_refLaboral.js"></script>

<?php
include ('headersFooters/footerEnd.php');
?>
