<?php
  $serverDocument = ($_SERVER['DOCUMENT_ROOT']);
  $referer = (isset($_SERVER['HTTPS']) ? "https" : "http");
  $serverPort = (isset($_SERVER['SERVER_PORT']) ? ":".$_SERVER['SERVER_PORT'] :'');
  $server = $referer.'://'.$_SERVER['SERVER_NAME'].$serverPort;

  require ($serverDocument. "/sps/clases/ReferenciaLaboral.php");
  include ($serverDocument.'/sps/helper/sessionValidation.php');
  include ($serverDocument.'/sps/helper/request_no_curl.php');
  include("../librerias/domPdf/autoload.inc.php");

  $idRefLaboral = $_GET['idRefLaboral'];
  $idEntrevista = $_GET['entrevista'];
  $fileUrl = $server."/sps/vistas/consultarAntecedentesLaborales/htmlInformeLaboral.php?idRefLaboral=".$idRefLaboral."&idEntrevista=".$idEntrevista;
  $fileContent = curl_get_contents($fileUrl);

  $referenciaLaboral = ReferenciaLaboral::consultarReferenciaLaboralByIdReferenciaLaboral($idRefLaboral);
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
  $mipdf->loadHtml($fileContent);
  $mipdf->setPaper('A4', 'portait');
  $mipdf->render();
  $mipdf->stream("Informe Laboral - ".$referenciaLaboral['empresa']." - ".$datosPersonales['postulante_nombres']." ".$datosPersonales['postulante_apellido']." - "."DNI ".$datosPersonales['postulante_dni'].".pdf",array('Attachment'=>false));
 ?>
