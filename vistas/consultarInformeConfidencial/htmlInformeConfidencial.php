<?php
  include ('estructuraConfidencial/inicializador.php');
?>
<html>
   <head>
      <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
      <meta charset="utf-8">
      <title>SPS Informe Confidencial</title>
      <link rel="stylesheet" href="../css/informe.css"/>
      <link rel="stylesheet" href="../../css/informe.css"/>
   </head>
   <body>
     <div id="titulo" class="bordererSolid margin0 both headerConfidencial">
       <h2>INFORME CONFIDENCIAL</h2>
     </div>
     <br>
     <div id="cuerpo" class="bordererSolid both">
       <div id="infoPostulante"class="infoPostulanteConficencial margin0">
         <p><strong>Apellido: </strong><?php echo $apellido?></p>
         <br>
         <p><strong>Nombres: </strong><?php echo $nombres?></p>
         <br>
         <p><strong>Nacionalidad: </strong><?php echo $nacionalidad?></p>
         <br>
         <p><strong>DNI: </strong><?php echo $dni?></p>
         <br>
         <p><strong>Padre: </strong><?php echo $padre?></p>
         <br>
         <p><strong>Madre: </strong><?php echo $madre?></p>
         <br>
         <p><strong>Consultadas fuentes fidedignas arrojaron que: </strong></p>
       </div>
       <div id="observacion" class="bordererSolid both observacionConfidencial">
         <p><strong><?php echo $observacion ?></strong></p>
       </div>
       <div id="aclaracion" class="bordererSolidGris both detalleConfidencial">
         <p>La informacion consignada precedentemente deberá ser manejada en forma
           ESTRICTAMENTE CONFIDENCIAL Y A TITUTLO ILUSTRATIVO, la divulgacion de esta informacion
           se encuentra penada por la ley (art. 51 del codigo penal, modificado por la ley 23057).
           La transgresion de lo dispuesto por esta norma, acarreará las consecuencias
           penales previstas, ademas de la accion que se pudiese ejercer el causante por considerarse damnificado</p>
       </div>
     </div>
   </body>
</html>
