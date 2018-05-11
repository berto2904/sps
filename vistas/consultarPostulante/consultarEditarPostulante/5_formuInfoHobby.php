<?php
  require ($server. "/sps/clases/Hobby.php");
  $preguntas = Hobby::consultarPreguntas();
 ?>

<div class="tab-pane" role="tabpanel" id="formuInfoHobby">
  <div class="formuInfoHobby">
    <h3>Hobbies y Pasatiempos</h3>
    <div class="row">
      <div class="col-md-10">
        <?php foreach ($preguntas as $key => $pregunta) {
          ?>
          <i class="glyphicon glyphicon-chevron-right"></i>
          <label for=""><?php echo $pregunta['pregunta']?></label>
          <input type="text" name="hobbyPreguntas[<?php echo $pregunta['idPregunta']?>]" class="form-control" value="" maxlength="200">
        <?php } ?>
      </div>
    </div>
  </div>
</div>
