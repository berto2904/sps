<div class="titulo">
  <h2>Informe de lectura rápida</h2>
</div>
<div class="domicilio both">
  <div class="infoDomicilio dosColumnas margin0 ladoIzquierdo" style="">
    <p><strong><u>Domicilio:</u></strong> </p>
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
    <a href="https://www.google.com/maps/place/<?php echo $informacionSocioambiental['route']; ?> <?php echo $informacionSocioambiental['street_number']; ?>, <?php echo $informacionSocioambiental['locality']; ?> /@<?php echo $informacionSocioambiental['gmap']; ?>" target="_blank" class="ladoDerecho"  style=" top: 1em; position: relative; ">
      <img width="200" height="200" src="https://maps.googleapis.com/maps/api/staticmap?center=<?php echo $informacionSocioambiental['gmap']; ?>&zoom=17&size=400x400&markers=<?php echo $informacionSocioambiental['gmap']; ?>&key=AIzaSyBMCtHlS2MH-UExgf-0lkQyoppD2nDKA0U"/>
    </a>
  </div>
</div>
<br>
<div class="estudios both margin0">
  <?php
  $key = array_search(4, array_column($estudiosIdiomas['Estudios'], 'id_nivel_estudio'));
  if (empty(!$key)) {?>
    <p><strong><u>Estudios:</u></strong></p>
    <p>Titulo: <strong><?php echo $estudiosIdiomas['Estudios'][$key]['estudio_titulo_obtenido']; ?></strong> </p>
    <p>Organizacion: <strong><?php echo $estudiosIdiomas['Estudios'][$key]['estudio_establecimiento']; ?></strong> </p>
    <p>Año: <strong><?php echo $estudiosIdiomas['Estudios'][$key]['estudio_hasta']!==0 ? $estudiosIdiomas['Estudios'][$key]['estudio_hasta'] : "(Hasta la actualidad)"; ?></strong> </p>
    <?php

  }else {
    ?>
    <p><strong><u>Estudios:</u></strong></p>
    <p>Titulo: <strong><?php echo $estudiosIdiomas['Estudios'][sizeof($estudiosIdiomas['Estudios'])-1]['estudio_titulo_obtenido']; ?></strong> </p>
    <p>Organizacion: <strong><?php echo $estudiosIdiomas['Estudios'][sizeof($estudiosIdiomas['Estudios'])-1]['estudio_establecimiento']; ?></strong> </p>
    <p>Año: <strong><?php echo $estudiosIdiomas['Estudios'][sizeof($estudiosIdiomas['Estudios'])-1]['estudio_hasta']!==0 ? $estudiosIdiomas['Estudios'][$key]['estudio_hasta'] : "(Actual)"; ?></strong> </p>
    <?php
  }
  ?>
</div>
<?php

 ?>
<div class="referenciasLaborales both margin0">
  <p><strong><u>Referencias Laborales:</u></strong></p>
  <?php
  foreach ($referenciasLaborales['Empresas'] as $indice => $empresa) {
    if ($empresa['empresa']!= Null) {
    ?>
    <div class="refLaboral">
      <div class="dosColumnas">
        <p>- <?php echo $empresa['empresa'] ?></p>
      </div>
      <div class="dosColumnas">
        <?php
          setlocale(LC_TIME, 'es_ES', 'esp_esp');
          $desde = strftime("%B %G", strtotime($empresa['desde']));
          if ($indice == sizeof($referenciasLaborales['Empresas'])-1 && $empresa['hasta'] == Null) {
            $hasta = "Actual";
          }else {
            $hasta = strftime("%B %G", strtotime($empresa['hasta']));
          }
         ?>
        <p><?php echo $desde ?>   -   <?php echo $hasta ?></p>
      </div>
    </div>
    <br>
    <?php
  }else {
    ?>
    <div class="refLaboral">
      <div class="dosColumnas">
        <p>- (No presenta referencia laborales)</p>
      </div>
    </div>
    <br>
    <?php
  }
  }
   ?>
  <div class="refLaboral observacion" style="margin-top:1em;">
    <?php if ($referenciasLaborales['observacion_ref_laboral'] != Null) {
      ?>
        <p><strong>Observacion: </strong> <?php echo $referenciasLaborales['observacion_ref_laboral'] ?></p>
      <?php
    }else {
      ?>
        <p><strong>Observacion: </strong> Sin comentarios </p>
      <?php
    } ?>
  </div>
</div>
<div class="infoRelevante both margin0">
  <p><strong><u>Otra informacion relevante:</u></strong></p>
  <p><?php echo $datosDeEntrevista['informacion_relevante']?></p>
</div>
