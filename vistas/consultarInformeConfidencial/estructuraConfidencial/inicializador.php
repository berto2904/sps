<?php
$serverDocument = ($_SERVER['DOCUMENT_ROOT']);
// include ($serverDocument.'/sps/helper/sessionValidation.php');

$referer = (isset($_SERVER['HTTPS']) ? "https" : "http");
$serverPort = (isset($_SERVER['SERVER_PORT']) ? ":".$_SERVER['SERVER_PORT'] :'');
$server = $referer.'://'.$_SERVER['SERVER_NAME'].$serverPort;

include ($serverDocument.'/sps/helper/request_no_curl.php');

$idEntrevista = $_GET['entrevista'];
// $entrevista = json_decode(postFunction($server.'/sps/controladores/consultarPostulante.php',array('id_entrevista' => $idEntrevista)),true);
$entrevista = json_decode(postFunction2($server.'/sps/controladores/consultarPostulante.php','id_entrevista='.$idEntrevista),true);
$datosDeEntrevista = $entrevista['Postulante']['DatosDeEntrevistas'];
$datosPersonales = $entrevista['Postulante']['DatosPersonales'];
$datosFamiliares = $entrevista['Postulante']['DatosFamiliares'];
$estudiosIdiomas = $entrevista['Postulante']['EstudiosIdiomas'];
$hobbiesYPasatiempos = $entrevista['Postulante']['HobbiesYPasatiempos'];
$informacionSocioambiental = $entrevista['Postulante']['InformacionSocioambiental'];
$informacionEconomica = $entrevista['Postulante']['InformacionEconomica'];
$referenciasLaborales = $entrevista['Postulante']['ReferenciasLaborales'];
?>
