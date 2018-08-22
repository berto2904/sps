<?php
$server = ($_SERVER['DOCUMENT_ROOT']);
$idReferenciaLaboral = $_GET['idRefLaboral'];
$idEntrevista = $_GET['idEntrevista'];
require ($server. "/sps/clases/InformeLaboral.php");
require ($server. "/sps/clases/InformeLaboralPregunta.php");
require ($server. "/sps/clases/ReferenciaLaboral.php");
include ($server. "/sps/helper/utf8EncodeDecodeDeep.php");

$preguntas = InformeLaboral::consultarPreguntas();
$referenciaLaboral=ReferenciaLaboral::consultarReferenciaLaboralByIdReferenciaLaboral($idReferenciaLaboral);
$informeLaboral = InformeLaboral::consultarInformeLaboralByIdReferenciaLaboral($idReferenciaLaboral);
$informeLaboralPreguntas = InformeLaboralPregunta::consultarReferenciaPreguntaRespuestaByIdReferenciaLaboral($idReferenciaLaboral);

// utf8_encode_deep($referenciaLaboral);
// utf8_encode_deep($informeLaboral);
// utf8_encode_deep($informeLaboralPreguntas);
?>
