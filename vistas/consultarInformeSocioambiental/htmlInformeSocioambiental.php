<?php
  include ('estructuraSocioambiental/inicializador.php');
?>
<html>
   <head>
      <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
      <meta charset="utf-8">
      <title>RH Global</title>
      <link rel="stylesheet" href="../css/informe.css"/>
      <link rel="stylesheet" href="../../css/informe.css"/>
    	<link rel="icon" type="image/png" href="../librerias/Login/images/icons/rh.ico"/>
   </head>
   <body>
    <div class="header margin0">
      <!-- <h2>Grupo SPS</h2> -->
      <!-- <p>Soluciones Integrales en RRHH</p> -->
       <i class="zmdi zmdi-landscap"> <img src="../resources/images/logoFinalFondoBlanco.png" alt="" style="width: 25%; margin:5px 0px 0px 0px;"> </i>
       <div class="" style = "float:right; margin: 2% 0%;">
         <p><strong> Socio-ambiental:</strong> #<?php echo $idEntrevista ?></p>
       </div>
    </div>
    <div class="content">
      <div id="infoPreLaboral" class="infoPreLaboral">
        <div class="pagina" id="pagina_1">
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
        </div>
        <div class="pagina" id="pagina_2">
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
        </div>
        <div class="pagina" id="pagina_3">
          <div id="informacionEducacion" style="height: 600px;">
            <?php
            include ('estructuraSocioambiental/informacionEducacion.php');
            ?>
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
        </div>
        <div class="pagina" id="pagina_4">
          <div id="informacionSocioambiental">
            <?php
            include ('estructuraSocioambiental/informacionSocioambiental.php');
            ?>
          </div>
        </div>
        <div class="pagina" id="pagina_5">
          <div id="informacionEconomica" class="">
            <?php
            include ('estructuraSocioambiental/informacionEconomica.php');
            ?>
          </div>
          <div id="informacionVecinal" style="height: 450px;">
            <?php
            include ('estructuraSocioambiental/informacionVecinal.php');
            ?>
          </div>
        </div>
        <div class="pagina" id="pagina_6">
          <div id="informacionReferenciasLaborales" style="height: 300px;">
            <?php
            include ('estructuraSocioambiental/informacionLaborales.php');
            ?>
          </div>
        </div>
      </div>
    </div>
   </body>
</html>
