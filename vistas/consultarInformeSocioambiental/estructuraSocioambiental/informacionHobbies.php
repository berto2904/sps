<h2><strong><em><u>Hobbies y Pasatiempos</u></em></strong></h2>
<?php
if (empty($hobbiesYPasatiempos[0]['pregunta'])) {
  ?>
  <p>El postulante no presenta hobbies ni pasatiempos</p>
  <?php
}else {
  foreach ($hobbiesYPasatiempos as $key => $hobbie) {
    ?>
    <div class="datosPersonales margin0 both">
      <p><strong><?php echo $hobbie['pregunta']?></strong> </p>
      <p><?php echo $hobbie['respuesta']?> </p>
    </div>
    <?php
  }
}
?>
