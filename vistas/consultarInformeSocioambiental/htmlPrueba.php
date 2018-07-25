<?php
$serverDocument = ($_SERVER['DOCUMENT_ROOT']);
$referer = (isset($_SERVER['HTTPS']) ? "https" : "http");
$serverPort = (isset($_SERVER['SERVER_PORT']) ? ":".$_SERVER['SERVER_PORT'] :'');
$server = $referer.'://'.$_SERVER['SERVER_NAME'].$serverPort;

include ($serverDocument.'/sps/helper/sessionValidation.php');
include ($serverDocument.'/sps/helper/request_no_curl.php');

$idEntrevista = $_GET['entrevista'];
$entrevista = json_decode(postFunction($server.'/sps/controladores/consultarPostulante.php',array('id_entrevista' => $idEntrevista)),true);

$datosDeEntrevista = $entrevista['Postulante']['DatosDeEntrevistas'];
$datosPersonales = $entrevista['Postulante']['DatosPersonales'];
$datosFamiliares = $entrevista['Postulante']['DatosFamiliares'];
$estudiosIdiomas = $entrevista['Postulante']['EstudiosIdiomas'];
$hobbiesYPasatiempos = $entrevista['Postulante']['HobbiesYPasatiempos'];
$informacionSocioambiental = $entrevista['Postulante']['InformacionSocioambiental'];
$informacionEconomica = $entrevista['Postulante']['InformacionEconomica'];
$referenciasLaborales = $entrevista['Postulante']['ReferenciasLaborales'];
?>
<html>
   <head>
      <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
      <meta charset="utf-8">
      <title>SPS Entrevistas</title>
      <link rel="stylesheet" href="../css/informe.css"/>
      <link rel="stylesheet" href="../../css/informe.css"/>
   </head>
   <body>
    <div class="header margin0">
      <h2>Grupo SPS</h2>
      <p>Soluciones Integrales en RRHH</p>
    </div>
    <div class="content">
      <div id="infoPreLaboral" class="infoPreLaboral">
        <div class="titulo">
          <h1>Informe pre Laboral</h1>
        </div>
        <h4><strong><u>Organizacion:</u> <?php echo $datosDeEntrevista['organizacion']?></strong></h4>
        <div id="datosDelEntrevistado" class="datosDelEntrevistado margin0 both">
          <p><strong><u>Datos del Entrevistado:</u></strong> </p>
          <br>
          <p>Apellido: <strong><?php echo $datosPersonales['postulante_apellido']  ?></strong> </p>
          <p>Nombres: <strong><?php echo $datosPersonales['postulante_nombres'] ?></strong> </p>
          <p>Puesto: <strong><?php echo $datosDeEntrevista['puesto'] ?></strong> </p>
          <p>Fecha y hora de entrevista: <strong><?php echo $datosDeEntrevista['entrevista_fechaHora']?>hs</strong> </p>
        </div>
        <br>
        <div id="informeLecturaRapida" class="informeLecturaRapida bordererSolid both">
          <?php
            include ('estructuraSocioambiental/lecturaRapida.php');
           ?>
        </div>
        <br>
        <br>
        <br>
        <div id="informacionPersonal">
          <?php
            include ('estructuraSocioambiental/informacionDatosPersonales.php');
           ?>
        </div>
        <div id="informacionFamiliares">

        </div>
        <div id="informacionEducacion">

        </div>
        <div id="informacionHobbies">

        </div>
        <div id="informacionSocioambiental">
          <?php
          // include ('estructuraSocioambiental/informacionSocioambiental.php');
          ?>
        </div>
        <div id="informacionEconomica">

        </div>
        <div id="informacionReferenciasLaborales">

        </div>
      </div>
    </div>
   </body>
</html>
