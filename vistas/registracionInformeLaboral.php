<?php
$server = ($_SERVER['DOCUMENT_ROOT']);
$idReferenciaLaboral = $_POST['id_ref'];
require ($server. "/sps/clases/InformeLaboral.php");
require ($server. "/sps/clases/InformeLaboralPregunta.php");
require ($server. "/sps/clases/ReferenciaLaboral.php");
include ($server. "/sps/helper/utf8EncodeDecodeDeep.php");

$preguntas = InformeLaboral::consultarPreguntas();
$referenciaLaboral=ReferenciaLaboral::consultarReferenciaLaboralByIdReferenciaLaboral($idReferenciaLaboral);

$informeLaboral = InformeLaboral::consultarInformeLaboralByIdReferenciaLaboral($idReferenciaLaboral);
$informeLaboralPreguntas = InformeLaboralPregunta::consultarInformeLaboralPreguntaByIdReferenciaLaboral($idReferenciaLaboral);

utf8_encode_deep($referenciaLaboral);
utf8_encode_deep($informeLaboral);
utf8_encode_deep($informeLaboralPreguntas);

?>
<form class="" id="registroInformeLaboral" method="post" action="../controladores/registrarInformeLaboralController.php">
  <input type="hidden" name="informeLaboral[idRefLaboral]" value="<?php echo $referenciaLaboral['id_referencias_laborales'] ?>">
  <div class="tab-content formularioPostulante">
    <div class="tab-pane active" role="tabpanel" id="">
      <div class="row">
        <div class="col-md-6">
          <label for="">Empresa</label>
          <input type="text" class="form-control" value="<?php echo $referenciaLaboral['empresa'] ?>" readonly>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <label for="">Fecha de Ingreso</label>
          <input type="date" class="form-control" value="<?php echo $referenciaLaboral['desde'] ?>"readonly>
          <label for="">Fecha de Egreso</label>
          <input type="date" class="form-control" value="<?php echo $referenciaLaboral['hasta'] ?>" readonly>
        </div>
        <div class="col-md-6">
          <label for="">Puesto al ingresar</label>
          <input type="text" name="informeLaboral[puestoIngresar]" class="form-control" value="<?php echo empty($informeLaboral['puesto_al_ingresar'])?"":$informeLaboral['puesto_al_ingresar']; ?>" maxlength="65">
          <label for="">Ultimo Puesto ocupado</label>
          <input type="text" name="informeLaboral[puestoOcupado]" class="form-control" value="<?php echo empty($informeLaboral['ultimo_puesto_ocupado']) ? "" : $informeLaboral['ultimo_puesto_ocupado']; ?>" maxlength="65">
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <label for="">Causas de Egreso</label>
          <input type="text" name="informeLaboral[causasEgreso]" class="form-control" value="<?php echo empty($informeLaboral['causa_de_egreso']) ? "" : $informeLaboral['causa_de_egreso'] ; ?>" maxlength="140">
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <label for="">Asistencia</label>
          <input type="text" name="informeLaboral[asistencia]" class="form-control" value="<?php echo empty($informeLaboral['asistencia']) ? "" : $informeLaboral['asistencia'] ; ?>" maxlength="65">
        </div>
        <div class="col-md-6">
          <label for="">Puntualidad</label>
          <input type="text" name="informeLaboral[puntualidad]" class="form-control" value="<?php echo empty($informeLaboral['puntualidad']) ? "" : $informeLaboral['puntualidad'] ; ?>" maxlength="65">
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <label for="">Concepto general</label>
          <input type="text" name="informeLaboral[conceptoGeneral]" class="form-control" value="<?php echo empty($informeLaboral['concepto_general']) ? "" : $informeLaboral['concepto_general'] ; ?>" maxlength="140">
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <?php foreach ($preguntas as $key => $pregunta) {
            ?>
            <!-- <i class="glyphicon glyphicon-chevron-down"></i> -->
            <label for=""><?php echo $pregunta['pregunta']?></label>
            <input type="text" id="<?php echo $pregunta['idPregunta']?>" name="informeLaboral[pregunta][<?php echo $pregunta['idPregunta']?>]" class="form-control" value="<?php echo empty($informeLaboralPreguntas)?"":$informeLaboralPreguntas[$key]['respuesta']; ?>" maxlength="200">
          <?php } ?>
        </div>
      </div>
      <!-- <input type="submit" name="" value="Registar Informe"> -->
    </div>
  </div>
</form>
