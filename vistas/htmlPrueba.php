<?php
$serverDocument = ($_SERVER['DOCUMENT_ROOT']);
$referer = (isset($_SERVER['HTTPS']) ? "https" : "http");
$serverPort = (isset($_SERVER['SERVER_PORT']) ? ":".$_SERVER['SERVER_PORT'] :'');
$server = $referer.'://'.$_SERVER['SERVER_NAME'].$serverPort;

include ($serverDocument.'/sps/helper/sessionValidation.php');
include ($serverDocument.'/sps/helper/request_no_curl.php');
include("../librerias/domPdf/autoload.inc.php");

$idEntrevista = $_GET['entrevista'];
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
<html>
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

      <div class="infoPreLaboral">
        <div class="titulo">
          <h1>Informe pre Laboral</h1>
        </div>
        <h4><strong><u>Organizacion:</u> <?php echo $datosDeEntrevista['organizacion']?></strong></h4>
        <div class="datosDelEntrevistado margin0 both">
          <p><strong><u>Datos del Entrevistado:</u></strong> </p>
          <br>
          <p>Apellido: <strong><?php echo $datosPersonales['postulante_apellido']  ?></strong> </p>
          <p>Nombres: <strong><?php echo $datosPersonales['postulante_nombres'] ?></strong> </p>
          <p>Puesto: <strong><?php echo $datosDeEntrevista['puesto'] ?></strong> </p>
          <p>Fecha y hora de entrevista: <strong><?php echo $datosDeEntrevista['entrevista_fechaHora']?>hs</strong> </p>
        </div>
        <br>
        <div class="informeLecturaRapida bordererSolid both">
          <div class="titulo">
            <h2>Informe de lectura rápida</h2>
          </div>
          <div class="domicilio both">
            <div class="infoDomicilio dosColumnas margin0 ladoIzquierdo" style="">
              <p><strong><u>Domicilio:</u></strong> </p>
              <br>
              <p><strong>Calle: </strong><?php echo $informacionSocioambiental['route']; ?></p>
              <p><strong>Numero: </strong> <?php echo $informacionSocioambiental['street_number']; ?></p>
              <p><strong>Localidad: </strong> <?php echo $informacionSocioambiental['locality']; ?></p>
              <p><strong>Codigo Postal: </strong> <?php echo $informacionSocioambiental['postal_code']; ?></p>
              <p><strong>Partido: </strong> <?php echo $informacionSocioambiental['administrative_area_level_2']; ?></p>
              <br>
              <p><strong>Piso:</strong> <?php echo $informacionSocioambiental['piso']; ?></p>
              <p> <strong>Dpto: </strong> <?php echo $informacionSocioambiental['depto']; ?></p>
              <p><strong>Telefono: </strong><?php echo $informacionSocioambiental['telefono']; ?> </p>
            </div>
            <div class="googleMap dosColumnas margin0">
              <a href="https://www.google.com/maps/place/<?php echo $informacionSocioambiental['route']; ?> <?php echo $informacionSocioambiental['street_number']; ?>, <?php echo $informacionSocioambiental['locality']; ?> /@<?php echo $informacionSocioambiental['gmap']; ?>" target="_blank" class="ladoDerecho"  style=" top: 2em; position: relative; ">
                <img width="200" height="200" src="https://maps.googleapis.com/maps/api/staticmap?center=<?php echo $informacionSocioambiental['gmap']; ?>&zoom=17&size=400x400&markers=<?php echo $informacionSocioambiental['gmap']; ?>&key=AIzaSyBMCtHlS2MH-UExgf-0lkQyoppD2nDKA0U"/>
              </a>
            </div>
          </div>
          <br>
          <div class="estudios both margin0">
            <p><strong><u>Estudios:</u></strong></p>
            <br>
            <p>Titulo: <strong><?php echo $estudiosIdiomas['telefono']; ?></strong> </p>
            <p>Organizacion: <strong>textoPlano</strong> </p>
            <p>Fecha: <strong>textoPlano</strong> </p>
          </div>
          <div class="referenciasLaborales both margin0">
            <p><strong><u>Referencias Laborales:</u></strong></p>
            <div class="refLaboral">
              <div class="dosColumnas">
                <p>- EMPRESA</p>
              </div>
              <div class="dosColumnas">
                <p>1995 - 1998</p>
              </div>
            </div>
            <br>
            <div class="refLaboral">
              <div class="dosColumnas">
                <p>- EMPRESA</p>
              </div>
              <div class="dosColumnas">
                <p>1995 - 1998</p>
              </div>
            </div>
            <br>
            <div class="refLaboral">
              <div class="dosColumnas">
                <p>- EMPRESA</p>
              </div>
              <div class="dosColumnas">
                <p>1995 - 1998</p>
              </div>
            </div>
            <br>
            <div class="refLaboral observacion" style="margin-top:1em;">
              <p><strong>Observacion: </strong> hasta30caracteressepuedeingres</p>
            </div>
          </div>
          <div class="infoRelevante both margin0">
            <p><strong><u>Otra informacion relevante:</u></strong></p>
            <p>refLaboralrefLaboralrefLaboralrefLaboralrefLaboralrefLaboralrefLaboralrefLaboralrefLaboralrefLaboralrefLaboralrefLaboralrefLaboralrefLaboralrefLaboralrefLaboralrefLaboralrefLaboralrefLdsdasdsadsadsadd</p>
          </div>
        </div>
      </div>
      <br>
      <br>
      <div class="titulo">
        <h1>Información socio-ambiental</h1>
      </div>
      <h2><strong><em><u>Domicilio</u></em></strong></h2>
      <div class="domicilio both" style="height: 15em;">
        <div class="googleMap dosColumnas margin0" style=" top: 3em; position: relative; ">
            <a href="https://www.google.com/maps/place/Avenida Monseñor Bufano 7108, Aldo Bonzi /@-34.7117807,-58.5257934" target="_blank">
              <img width="240" height="232" src="https://maps.googleapis.com/maps/api/staticmap?center=-34.71139705553087,-58.525847044180296&zoom=17&size=400x400&markers=-34.71139705553087,-58.525847044180296&key=AIzaSyBMCtHlS2MH-UExgf-0lkQyoppD2nDKA0U"/>
            </a>
        </div>
        <div class="infoDomicilio dosColumnas margin0" style=" line-height: 2em;">
          <p><strong>Calle</strong> : '."Hola amigos".' </p>
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
        <p >ReferenciaUtiReferenciaUtiReferenciaUtiReferenciaUtiReferenciaUtiReferenciaUtiRefe </p>
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
</html>
