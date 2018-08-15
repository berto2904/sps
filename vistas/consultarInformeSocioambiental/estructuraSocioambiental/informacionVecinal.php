<?php
  if ($informacionSocioambiental['ConceptosVecinales'][0]['id_concepto_vecinal'] != Null) {
 ?>
<div class="conceptoVecinal" style=" height: 40%;">
  <h2><strong><em><u>Concepto Vecinal</u>:</em></strong></h2>
  <div class="both">
  <?php
     foreach ($informacionSocioambiental['ConceptosVecinales'] as $key => $vecino) {
       ?>
       <div class="dosColumnas">
         <p><strong><u>Vecino <?php echo $key + 1 ?></u></strong></p>
         <div class="borderer margin0">
           <p> <strong> Nombre y Apellido:</strong></p>
           <p><?php echo $vecino['vecino_nombre_apellido'] ?></p>
           <p> <strong> Domicilio:</strong> </p>
           <p><?php echo $vecino['vecino_domicilio'] ?></p>
           <p> <strong> Concepto del entrevistado:</strong> </p>
           <p><?php echo $vecino['concepto_del_entrevistado'] ?></p>
           <p> <strong> Afinidad:</strong> </p>
           <p><?php echo $vecino['afinidad'] ?></p>
           <p> <strong> Tipo de amistades:</strong> </p>
           <p><?php echo $vecino['tipo_de_amistades'] ?></p>
           <p> <strong> Problemas policiales:</strong> </p>
           <p><?php echo $vecino['problemas_policiales'] ?></p>
           <p> <strong> Problemas económicos:</strong> </p>
           <p><?php echo $vecino['problemas_economicos'] ?></p>
           <p> <strong> Tiempo que lo conoce:</strong> </p>
           <p><?php echo $vecino['tiempo_que_conoce'] ?></p>
         </div>
       </div>
       <?php
     }
   } else {
     ?>
     <div class="conceptoVecinal" style=" height: 10%;">
       <h2><strong><em><u>Concepto Vecinal</u>:</em></strong></h2>
       <div class="both">
         <p>No hay informacion sobre vecinos del postulante</p>
       </div>
     <?php
   }
   ?>
  </div>
</div>
