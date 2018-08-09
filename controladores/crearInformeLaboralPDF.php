<?php
  $serverDocument = ($_SERVER['DOCUMENT_ROOT']);
  $referer = (isset($_SERVER['HTTPS']) ? "https" : "http");
  $serverPort = (isset($_SERVER['SERVER_PORT']) ? ":".$_SERVER['SERVER_PORT'] :'');
  $server = $referer.'://'.$_SERVER['SERVER_NAME'].$serverPort;

  include ($serverDocument.'/sps/helper/sessionValidation.php');
  include ($serverDocument.'/sps/helper/request_no_curl.php');
  include("../librerias/domPdf/autoload.inc.php");
  $idRefLaboral = $_GET['idRefLaboral'];
  $idEntrevista = $_GET['entrevista'];
  $fileUrl = $server."/sps/vistas/consultarAntecedentesLaborales/htmlInformeLaboral.php?idRefLaboral=".$idRefLaboral;
  // print_r($idEntrevista);
  // die();
  $fileContent = curl_get_contents($fileUrl);

  // TODO: Obtener informacion laboral para el pdf
  $entrevista = json_decode(postFunction2($server.'/sps/controladores/consultarPostulante.php','id_entrevista='.$idRefLaboral),true);

  $datosPersonales = $entrevista['Postulante']['DatosPersonales'];
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
  $mipdf->stream("Laboral - ".$datosPersonales['postulante_nombres']." ".$datosPersonales['postulante_apellido']." - "."DNI ".$datosPersonales['postulante_dni'].".pdf",array('Attachment'=>false));
 ?>
