<?php
  include("../librerias/domPdf/autoload.inc.php");
  // <link rel="stylesheet" href="estilo.css">

$html1 = '<html>
  <head>
     <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
     <meta charset="utf-8">
     <title>SPS Entrevistas</title>
     <link rel="stylesheet" href="../css/informe.css"/>
  </head>
  <body>
   <div class="header margin0">
     <h2>Grupo SPS</h2>
     <p>Soluciones Integrales en RRHH</p>
   </div>
   <div class="content">
     <div class="titulo">
       <h1>Información socio-ambiental</h1>
     </div>
     <h2><strong><em><u>Domicilio</u></em></strong></h2>
     <div class="domicilio both" style="height: 15em;">
       <div class="googleMap dosColumnas margin0">
         <p><img width="240" height="232" src="https://maps.googleapis.com/maps/api/staticmap?center=-34.7117692,-58.52578089999997&zoom=17&size=400x400&markers=-34.7117692,-58.52578089999997&key=AIzaSyBMCtHlS2MH-UExgf-0lkQyoppD2nDKA0U" /></p>
       </div>
       <div class="infoDomicilio dosColumnas margin0" style=" line-height: 2em;">
         <p><strong>Calle</strong> : hasta30caracteressepuedeingres</p>
         <p><strong>Numero:</strong> sta30caracteressepuedeingres</p>
         <p><strong>Localidad:</strong> ta30caracteressepuedeingres</p>
         <p><strong>Codigo Postal:</strong> hasta30caracteressepuedeingres</p>
         <p><strong>Partido:</strong> hasta30caracteressepuedeingres</p>
         <p> <strong>Dpto: </strong> hasta30caracteressepuedeingres</p>
         <p><strong>Telefono: </strong> </p>
       </div>
     </div>
     <br>
     <div class="transportes margin0 both">
       <p><strong>Transporte:</strong> </p>
       <p>Colectivos: Distancia del domicilio: 2 cuadras </p>
       <p>Ferrocarril: Distancia del domicilio: 2 cuadras </p>
     </div>
     <br>
     <div class="referenciaUtil margin0 both">
       <p><strong>Referencia útil (hospital, escuela, estación, avenida): </strong> </p>
       <p>ReferenciaUtiReferenciaUtiReferenciaUtiReferenciaUtiReferenciaUtiReferenciaUtiRefe </p>
     </div>
     <br>
     <div class="viviendaServicios both">
       <h2><strong><em><u>Vivienda</u>:</em></strong></h2>
       <div class="vivienda dosColumnas">
         <p><strong>Tipo de vivienda: </strong> Prefabricada</p>
         <p><strong>Ambientes: </strong>Cantidad</p>
         <p><strong>Aspecto Interior: </strong> Muy Bueno </p>
         <p><strong>Aspecto exterior: </strong> Muy Bueno</p>
         <p><strong>Propietario: </strong> No</p>
         <p><strong>Inquilino: </strong> Si</p>
         <p><strong>Importe de Alquiler: </strong> $1000000</p>
       </div>
       <div class="servicios dosColumnas" >
         <p> <strong>Servicios:</strong> </p>
         <ul>
             <li>Luz</li>
             <li>TV por cable</li>
             <li>Gas</li>
             <li>Cloacas</li>
             <li>Agua</li>
             <li>Corriente</li>
             <li>Pavimento</li>
             <li>Teléfono</li>
             <li>Vigilancia Privada</li>
         </ul>
       </div>
     </div>
     <div class="Accesibilidad both margin0">
       <p>
         <strong>Accesibilidad:</strong>
       </p>
       <p>
         ReferenciaUtiReferenciaUtiReferenciaUtiReferenciaUtiReferenciaUtiReferenciaUtiRefe
         ReferenciaUtiReferenciaUtiReferenciaUtiReferenciaUtiReferenciaUtiReferenciaUtiRefe
       </p>
     </div>
     <br/>
     <div class="conceptoVecinal">
       <h2><strong><em><u>Concepto Vecinal</u>:</em></strong></h2>
      <div class="both">
         <div class="dosColumnas">
           <p><strong><u>Vecino 1</u></strong></p>
           <div class="borderer margin0">
             <p> <strong> Nombre y Apellido:</strong></p>
             <p>70caracteres70caracteres70caracteres</p>
             <p> <strong> Domicilio:</strong> </p>
             <p>70caracteres70caracteres70caracteres</p>
             <p> <strong> Concepto del entrevistado:</strong> </p>
             <p>70caracteres70caracteres70caracteres</p>
             <p> <strong> Afinidad:</strong> </p>
             <p>70caracteres70caracteres70caracteres</p>
             <p> <strong> Tipo de amistades:</strong> </p>
             <p>70caracteres70caracteres70caracteres</p>
             <p> <strong> Peleas o Riñas:</strong> </p>
             <p>70caracteres70caracteres70caracteres</p>
             <p> <strong> Problemas policiales:</strong> </p>
             <p>70caracteres70caracteres70caracteres</p>
             <p> <strong> Problemas económicos:</strong> </p>
             <p>70caracteres70caracteres70caracteres</p>
             <p> <strong> Problemas con otros vecinos:</strong> </p>
             <p>70caracteres70caracteres70caracteres</p>
             <p> <strong> Tiempo que lo conoce:</strong> </p>
             <p>70caracteres70caracteres70caracteres</p>
           </div>
         </div>
         <div class="dosColumnas">
           <p><strong><u>Vecino 2</u></strong></p>
           <div class="borderer margin0">
             <p> <strong> Nombre y Apellido:</strong></p>
             <p>70caracteres70caracteres70caracteres</p>
             <p> <strong> Domicilio:</strong> </p>
             <p>70caracteres70caracteres70caracteres</p>
             <p> <strong> Concepto del entrevistado:</strong> </p>
             <p>70caracteres70caracteres70caracteres</p>
             <p> <strong> Afinidad:</strong> </p>
             <p>70caracteres70caracteres70caracteres</p>
             <p> <strong> Tipo de amistades:</strong> </p>
             <p>70caracteres70caracteres70caracteres</p>
             <p> <strong> Peleas o Riñas:</strong> </p>
             <p>70caracteres70caracteres70caracteres</p>
             <p> <strong> Problemas policiales:</strong> </p>
             <p>70caracteres70caracteres70caracteres</p>
             <p> <strong> Problemas económicos:</strong> </p>
             <p>70caracteres70caracteres70caracteres</p>
             <p> <strong> Problemas con otros vecinos:</strong> </p>
             <p>70caracteres70caracteres70caracteres</p>
             <p> <strong> Tiempo que lo conoce:</strong> </p>
             <p>70caracteres70caracteres70caracteres</p>
           </div>
         </div>

       </div>
     </div>
   </div>
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
  // $mipdf->loadHtmlFile('../vistas/htmlPrueba.html');
  $mipdf->loadHtml($html1);

  $mipdf->setPaper('A4', 'portait');



  // $mipdf->load_html(utf8_decode($html1));
  $mipdf->render();
  $mipdf->stream("ejemplo.pdf",array('Attachment'=>false));
 ?>
