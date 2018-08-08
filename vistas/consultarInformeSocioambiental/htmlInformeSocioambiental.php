<?php
  include ('estructuraSocioambiental/inicializador.php');
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
        <div id="informeLecturaRapida" class="informeLecturaRapida bordererSolid both" style="height: 650px;">
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
        <div id="informacionFamiliares" style="height: 600px; ">
          <?php
            include ('estructuraSocioambiental/informacionFamiliares.php');
          ?>
        </div>
        <br>
        <div id="informacionEducacion" style="height: 600px;">
         <?php
            include ('estructuraSocioambiental/informacionEducacion.php');
          ?>
          <br>
          <br>
          <?php
            include ('estructuraSocioambiental/informacionIdiomas.php');
          ?>
        </div>
        <br>
        <br>
        <div id="informacionHobbies" style="height: 250px;">
          <?php
            include ('estructuraSocioambiental/informacionHobbies.php');
           ?>
        </div>
        <div id="informacionSocioambiental">
          <?php
            include ('estructuraSocioambiental/informacionSocioambiental.php');
          ?>
        </div>
        <br>
        <div id="informacionEconomica" style="height: 430px;">
          <?php
          include ('estructuraSocioambiental/informacionEconomica.php');
          ?>
        </div>
        <br>
        <div id="informacionReferenciasLaborales" style="height: 300px;">
          <?php
            include ('estructuraSocioambiental/informacionLaborales.php');
          ?>
        </div>
      </div>
    </div>
   </body>
</html>
