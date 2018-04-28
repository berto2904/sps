<?php
$server = ($_SERVER['DOCUMENT_ROOT']);
require ('../clases/UsuarioClass.php');
// require ('../clases/ConnQuery.php');

session_start();

if (isset($_SESSION['usuario'])) {
  $idUsuario = $_SESSION['usuario'];

}
else {
  session_destroy();
  header("location: ../index.php");
}
include ('header.php');
?>
<header id="gtco-header" class="gtco-cover" role="banner" style="background-image: url('../librerias/Login/images/bg-02.jpg');">
  <div class="overlay"></div>
  <div class="gtco-container">
    <div class="row">
      <div class="col-md-12 col-md-offset-0 text-left">
        <div class="row contenidoPostulante">
          <section>
            <h1>Consultar Postulante</h1>
          </section>
          <section>
  					<div class="wizard">
              <div class="wizard-inner" style=" padding: 3% 2%;">
                <!-- <div id="toolbar">
                  <button id="remove" class="btn btn-danger" disabled>
                    <i class="glyphicon glyphicon-remove"></i> Delete
                  </button>
                </div> -->
                <h3>Entrevistas</h3>
                <table data-toggle="table"
                       data-url="../controladores/consultarEntrevistas.php"
                       data-search="true"
                       data-show-refresh="true"
                       data-show-toggle="true"
                       data-show-columns="true"
                       data-height="600"
                       data-pagination="true">
                  <thead>
                    <tr>
                      <th data-field="fechaHoraEntrevista">Fecha y Hora</th>
                      <th data-field="organizacion">Organizacion</th>
                      <th data-field="puesto">Puesto</th>
                      <th data-field="nombres">Nombres</th>
                      <th data-field="apellido">Apellido</th>
                      <th data-field="dni">DNI</th>
                      <th data-field="sexo">Sexo</th>
                      <th data-field="lugarNacimiento">Lugar de Nacimiento</th>
                      <th data-field="nacionalidad">Nacionalidad</th>
                      <th data-field="estadoCivil">Estado Civil</th>
                      <th data-field="informeSocioambiental">Informe Socio-Ambiental</th>
                      <th data-field="fNacPostulante">Fecha de Nacimiento</th>
                      <!-- <th data-field="licenciaCategoria">Categoria licencia</th> -->
                      <!-- <th data-field="ciNumero">Nº CI</th> -->
                      <!-- <th data-field="expedidaCi">Expedida Por(CI)</th> -->
                      <!-- <th data-field="licenciaConductor">Licencia de conducir</th> -->
                      <!-- <th data-field="expedidaLicConducir">Expedida Por(Lic. Conducir)</th> -->
                      <!-- <th data-field="id_entrevista">id_entrevista</th> -->
                      <!-- <th data-field="idPostulante">idPostulante</th> -->
                      <!-- <th data-field="infoRelevante">Informacion Relevante</th> -->
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
include ('footer.php');
?>
