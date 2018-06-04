<?php
$server = ($_SERVER['DOCUMENT_ROOT']);
$idReferenciaLaboral = $_POST['id_ref'];
require ($server. "/sps/clases/InformeLaboral.php");
require ($server. "/sps/clases/ReferenciaLaboral.php");
$preguntas = InformeLaboral::consultarPreguntas();
$referenciaLaboral=ReferenciaLaboral::consultarReferenciaLaboralByIdReferenciaLaboral($idReferenciaLaboral);
?>

<form class="" action="index.html" method="post">
  <div class="tab-content formularioPostulante">
    <div class="tab-pane active" role="tabpanel" id="">
      <div class="row">
        <div class="col-md-6">
          <label for="">Empresa</label>
          <input type="text" class="form-control" value="<?php echo $referenciaLaboral['empresa'] ?>" maxlength="70" readonly>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <label for="">Fecha de Ingreso</label>
          <input type="date" class="form-control" value="<?php echo $referenciaLaboral['desde'] ?>" maxlength="200" readonly>
          <label for="">Fecha de Egreso</label>
          <input type="date" class="form-control" value="<?php echo $referenciaLaboral['hasta'] ?>" maxlength="200" readonly>
        </div>
        <div class="col-md-6">
          <label for="">Puesto al ingresar</label>
          <input type="text" name="informeLaboral[]" class="form-control" value="" maxlength="200">
          <label for="">Ultimo Puesto ocupado</label>
          <input type="text" name="informeLaboral[]" class="form-control" value="" maxlength="200">
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <label for="">Causas de Egreso</label>
          <input type="text" name="informeLaboral[]" class="form-control" value="" maxlength="200">
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <label for="">Asistencia</label>
          <input type="text" name="informeLaboral[]" class="form-control" value="" maxlength="200">
        </div>
        <div class="col-md-6">
          <label for="">Puntualidad</label>
          <input type="text" name="informeLaboral[]" class="form-control" value="" maxlength="200">
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <label for="">Concepto general</label>
          <input type="text" name="informeLaboral[]" class="form-control" value="" maxlength="200">
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <?php foreach ($preguntas as $key => $pregunta) {
            ?>
            <!-- <i class="glyphicon glyphicon-chevron-down"></i> -->
            <label for=""><?php echo $pregunta['pregunta']?></label>
            <input type="text" id="<?php echo $pregunta['idPregunta']?>" name="informeLaboral['pregunta'][<?php echo $pregunta['idPregunta']?>]" class="form-control" value="" maxlength="200">
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</form>
