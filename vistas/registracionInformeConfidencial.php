<?php
$server = ($_SERVER['DOCUMENT_ROOT']);
$idPostulante = $_POST['id_postulante'];
require ($server. "/sps/clases/InformeConfidencial.php");
include ($server. "/sps/helper/utf8EncodeDecodeDeep.php");

$preguntas = InformeConfidencial::consultarPreguntasInfConfidencial();
$infoConfidencial = InformeConfidencial::consultarInformeConfidencialByIdPostulante($idPostulante);
// utf8_encode_deep($infoConfidencial);
?>
<form class="" id="registroInformeConfidencial" method="post" action="../controladores/registrarInformeConfidencialController.php">
  <div class="tab-content formularioPostulante">
    <div class="tab-pane active" role="tabpanel" id="">
      <input type="hidden" name="informeConfidencial[idPostulante]" value="<?php echo $idPostulante ?>">
      <?php foreach ($preguntas as $key => $pregunta) {
        ?>
        <div class="row">
          <div class="col-md-12">
          <!-- FIXME:  Arreglar pregunta informe confidencial -->
            <textarea class="form-control" name="informeConfidencial[pregunta][<?php echo $pregunta['idPregunta']?>]" rows="8" cols="80" maxlength="200"><?php echo empty($infoConfidencial['respuesta']) ? "" : $infoConfidencial['respuesta'] ?></textarea>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</form>
