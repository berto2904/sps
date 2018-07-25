<?php
  $serverDocument = ($_SERVER['DOCUMENT_ROOT']);
  $referer = (isset($_SERVER['HTTPS']) ? "https" : "http");
  $serverPort = (isset($_SERVER['SERVER_PORT']) ? ":".$_SERVER['SERVER_PORT'] :'');
  $server = $referer.'://'.$_SERVER['SERVER_NAME'].$serverPort;

  include ($serverDocument.'/sps/helper/sessionValidation.php');
  include ($serverDocument.'/sps/helper/request_no_curl.php');
  include("../librerias/domPdf/autoload.inc.php");

  $idEntrevista = $_GET['entrevista'];
  $fileUrl = $server."/sps/vistas/consultarInformeSocioambiental/htmlPrueba.php?entrevista=".$idEntrevista;
  $fileContent = curl_get_contents($fileUrl);

  // print_r($fileContent);
  // die();
  // print_r(postFunction($referer.'://'.$_SERVER['SERVER_NAME'].':'.$_SERVER['SERVER_PORT'].'/sps/controladores/consultarPostulante.php',array('id_entrevista' => $idEntrevista)));
  $entrevista = json_decode(postFunction($server.'/sps/controladores/consultarPostulante.php',array('id_entrevista' => $idEntrevista)),true);

  $datosDeEntrevista = $entrevista['Postulante']['DatosDeEntrevistas'];
  $datosPersonales = $entrevista['Postulante']['DatosPersonales'];
  $datosFamiliares = $entrevista['Postulante']['DatosFamiliares'];
  $estudiosIdiomas = $entrevista['Postulante']['EstudiosIdiomas'];
  $hobbiesYPasatiempos = $entrevista['Postulante']['HobbiesYPasatiempos'];
  $informacionSocioambiental = $entrevista['Postulante']['InformacionSocioambiental'];
  $informacionEconomica = $entrevista['Postulante']['InformacionEconomica'];
  $referenciasLaborales = $entrevista['Postulante']['ReferenciasLaborales'];
?>

<?php

  use Dompdf\Dompdf;
  use Dompdf\Options;
  $options = new Options();
  $options->set('enable_html5_parser', true);
  $options->setIsRemoteEnabled(true);
  $options->set('chroot', 'path-to-test-html-files');
  $mipdf = new Dompdf($options);

// test.html or test_single_line.html
  // $mipdf->loadHtmlFile('../vistas/htmlPrueba.html');
  // $mipdf->loadHtml($html1);
  $mipdf->loadHtml($fileContent);

  $mipdf->setPaper('A4', 'portait');



  // $mipdf->load_html(utf8_decode($html1));
  $mipdf->render();
  $mipdf->stream("ejemplo.pdf",array('Attachment'=>false));
 ?>
