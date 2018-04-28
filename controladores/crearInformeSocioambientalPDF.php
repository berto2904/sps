<?php
  include("../librerias/domPdf/autoload.inc.php");
  // <link rel="stylesheet" href="estilo.css">

$html1 = '<html>
    <head>
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

     <title>One Page Resume</title>
   <!-- <script src="../librerias/crearPostulante/js/modernizr-2.6.2.min.js"></script> -->
</head>
<body>

<h1>Informaci&oacute;n socio-ambiental</h1>
<h2><strong> <em> Domicilio </em> </strong></h2>
<p><strong> Calle </strong> :</p>
<p><img src="https://www.ydesignservices.com/wp-content/uploads/2016/07/Googlemap-600x551.jpg" alt="" width="171" height="158" /></p>
<p><strong> N&ordm; </strong> <strong> Piso: </strong></p>
<p><strong> Dpto: </strong></p>
<p><strong> TE: </strong></p>
<p><strong> Entre calles: </strong> <strong> CP: </strong> <strong> Localidad: </strong></p>
<p><strong> Transporte: </strong></p>
<p>Distancia del domicilio:</p>
<p>Distancia del domicilio:&nbsp;</p>
<p><strong> Referencia &uacute;til (hospital, escuela, estaci&oacute;n, avenida): </strong></p>
<h1><strong> <em> Vivienda: </em> </strong></h1>
<p><strong> Tipo de vivienda: </strong> <strong> Ambientes: </strong></p>
<p><strong> Aspecto Interior: Aspecto exterior: </strong></p>
<p><strong> Propietario: Inquilino: Valor de la vivienda: </strong></p>
<p><strong> Servicios: </strong></p>
<p>Luz</p>
<p>TV x cable</p>
<p>Gas</p>
<p>Cloacas</p>
<p>Agua Corriente</p>
<p>Pavimento</p>
<p>Tel&eacute;fono</p>
<p>Vigilancia Privada</p>
<p>Accesibilidad:</p>
<h1><strong> <em> Concepto Vecinal </em> </strong></h1>
<p><u> Vecino 1: </u> Domicilio:</p>
<p>Concepto del entrevistado: Afinidad: Tipo de amistades:</p>
<p>Peleas o Ri&ntilde;as: Problemas policiales: Problemas econ&oacute;micos:</p>
<p>Problemas con otros vecinos: Tiempo que lo conoce:</p>
<p><u> Vecino 2: </u> Domicilio:</p>
<p>Concepto del entrevistado: Afinidad: Tipo de amistades:</p>
<p>Peleas o Ri&ntilde;as: Problemas policiales: Problemas econ&oacute;micos:</p>
<p>Problemas con otros vecinos: Tiempo que lo conoce:</p>

</body>
</html>';





  use Dompdf\Dompdf;
  use Dompdf\Options;
  $options = new Options();
  $options->set('enable_html5_parser', true);
  $options->setIsRemoteEnabled(true);
  $options->set('chroot', 'path-to-test-html-files');
  $mipdf = new Dompdf($options);

// test.html or test_single_line.html
  // $mipdf->loadHtmlFile('../vistas/OnePageResume/index.html');
  $mipdf->loadHtmlFile('../vistas/htmlPrueba.html');
  // $mipdf->loadHtml($html1);

  $mipdf->setPaper('A4', 'portait');



  // $mipdf->load_html(utf8_decode($html1));
  $mipdf->render();
  $mipdf->stream("ejemplo.pdf",array('Attachment'=>false));
 ?>
