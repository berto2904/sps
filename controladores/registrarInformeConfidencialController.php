<?php
require ("../clases/InformeConfidencial.php");
include ('../helper/utf8EncodeDecodeDeep.php');
include ('../helper/sessionValidation.php');


$informeConfidencial = $_POST['informeConfidencial'];
$idEntrevista = $_POST['id_entrevista'];
// utf8_decode_deep($refLaboral);

if (InformeConfidencial::existeInformeConfidencial($informeConfidencial['idPostulante'])) {
  actualizarInformeConfidencial($informeConfidencial);
}else {
  crearInformeConfidencial($informeConfidencial);
}

header("location: ../vistas/consultarInformeConfidencial/consultaInformeConfidencial.php?id_entrevista=".$idEntrevista);

// header("location: ../vistas/crear_postulante.php");


/*----------------------------------------------------FUNCIONES------------------------------------------------*/
function crearInformeConfidencial($informeConfidencial){
  $id_postulante = $informeConfidencial['idPostulante'];
  //FIXME La pregunta está harcodeada
  $respuesta = $informeConfidencial['pregunta'][2];
  $infoConfidencial = new InformeConfidencial($id_postulante, 2, $respuesta);
  $infoConfidencial->registrarInformeConfidencial();
}

function actualizarInformeConfidencial($informeConfidencial){
  $id_postulante = $informeConfidencial['idPostulante'];
  //FIXME La pregunta está harcodeada
  $respuesta = $informeConfidencial['pregunta'][2];
  $infoConfidencial = new InformeConfidencial($id_postulante, 2, $respuesta);
  $infoConfidencial->updateInformeConfidencial();
}

 ?>
