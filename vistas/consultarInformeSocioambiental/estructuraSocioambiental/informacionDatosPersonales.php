<div class="titulo">
  <!-- <h1>Informacion Personal</h1> -->
</div>
<h2><strong><em><u>Informacion Personal</u></em></strong></h2>
<div class="datosPersonales margin0 both">
  <?php
    if ($datosPersonales['postulante_sexo'] == "Femenino") {
      $index = strlen($datosPersonales['postulante_estado_civil'])-1;
      $datosPersonales['postulante_estado_civil'] = substr_replace($datosPersonales['postulante_estado_civil'],'a',$index);
    }
  ?>
  <p>Apellido: <strong><?php echo $datosPersonales['postulante_apellido']?></strong> </p>
  <p>Nombres: <strong><?php echo $datosPersonales['postulante_nombres'] ?></strong> </p>
  <p>Fecha de nacimiento: <strong><?php echo $datosPersonales['postulante_fecha_de_nacimiento'] ?></strong> </p>
  <p>DNI: <strong><?php echo str_replace(",",".",number_format($datosPersonales['postulante_dni'])) ?></strong> </p>
  <p>Sexo: <strong><?php echo $datosPersonales['postulante_sexo'] ?></strong> </p>
  <p>Estado civil: <strong><?php echo $datosPersonales['postulante_estado_civil'] ?></strong> </p>
  <p>Lugar de nacimiento: <strong><?php echo $datosPersonales['postulante_lugar_nacimiento'] ?></strong> </p>
  <p>Nacionalidad: <strong><?php echo $datosPersonales['postulante_nacionalidad'] ?></strong> </p>
  <br>
  <p>Licencia de conductor: <strong><?php echo $datosPersonales['licencia_conductor'] ?></strong> </p>
  <p>Categoria: <strong><?php echo $datosPersonales['licencia_categoria'] ?></strong> </p>
  <p>Expedida por: <strong><?php echo $datosPersonales['expedida_lic_conducir'] ?></strong> </p>
</div>
