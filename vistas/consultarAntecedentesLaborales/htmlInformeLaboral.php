<?php
  include ('estructuraLaboral/inicializador.php');
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
       <!-- <h2>Grupo SPS</h2>
       <p>Soluciones Integrales en RRHH</p> -->
       <i class="zmdi zmdi-landscap"> <img src="../resources/images/rhGlobal.png" alt="" style="width: 25%; margin:5px 0px 0px 0px;"> </i>
     </div>
     <h1>Informe Laboral</h1>
     <div id="cuerpo" class="both infoLaboral">
       <div class="both margin0">
         <?php
          // print_r($referenciaLaboral);
          // print_r($informeLaboral);
          // print_r($informeLaboralPreguntas);
          // die();
          ?>
         <p><strong>Empresa: </strong><?php echo $referenciaLaboral['empresa']?></p>
         <br>
         <br>
         <div class="both">
           <div class="dosColumnas ladoIzquierdo">
             <p><strong>Fecha de Ingreso:  </strong><?php echo $referenciaLaboral['desde']?></p>
           </div>
           <div class="dosColumnas">
             <p><strong>Puesto al ingresar:  </strong><?php echo $informeLaboral['puesto_al_ingresar']?></p>
             <br>
           </div>
         </div>
         <br>
         <div class="both">
           <div class="dosColumnas ladoIzquierdo">
             <p><strong>Fecha de Egreso:  </strong><?php echo $referenciaLaboral['hasta']?></p>
           </div>
           <div class="dosColumnas">
             <p><strong>Ultimo puesto ocupado:  </strong><?php echo $informeLaboral['ultimo_puesto_ocupado']?></p>
             <br>
           </div>
         </div>
         <div class="both">
           <p><strong>Causas de Egreso:  </strong><?php echo $informeLaboral['causa_de_egreso']?></p>
         </div>
         <br>
         <div class="both">
           <div class="dosColumnas ladoIzquierdo">
             <p><strong>Asistencia:  </strong><?php echo $informeLaboral['asistencia']?></p>
           </div>
           <div class="dosColumnas">
             <p><strong>Puntualidad:  </strong><?php echo $informeLaboral['puntualidad']?></p>
             <br>
             <br>
           </div>
         </div>
         <?php
          foreach ($informeLaboralPreguntas as $key => $preguntaRespuesta) {
            ?>
          <div class="both">
            <p><strong><?php echo $preguntaRespuesta['pregunta'] ?></strong></p>
            <p><?php echo $preguntaRespuesta['respuesta']?></p>
          </div>
          <br>
            <?php
          }
          ?>
         <br>
       </div>
     </div>
     <div class="footerInfoLaboral">
       <div class="tresColumnas borderTop">
         Firma del informante
       </div>
       <div class="tresColumnas borderTop">
         Cargo
       </div>
       <div class="tresColumnas borderTop">
         Fecha
       </div>
     </div>
   </body>
</html>
