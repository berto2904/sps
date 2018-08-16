<div class="titulo">
  <h2>Informe de lectura rápida</h2>
</div>
<div class="domicilio both">
  <div class="infoDomicilio dosColumnas margin0 ladoIzquierdo" style="">
    <h4><strong><u>Domicilio:</u></strong></h4>
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
<div class="estudios both margin0">
  <br>
  <?php
  $key = array_search(4, array_column($estudiosIdiomas['Estudios'], 'id_nivel_estudio'));
  if (empty(!$key)) {?>
    <h4><strong><u>Estudios:</u></strong></h4>
    <p>Titulo: <strong><?php echo $estudiosIdiomas['Estudios'][$key]['estudio_titulo_obtenido']; ?></strong> </p>
    <p>Organizacion: <strong><?php echo $estudiosIdiomas['Estudios'][$key]['estudio_establecimiento']; ?></strong> </p>
    <?php

  }else {
    ?>
    <p><strong><u>Estudios:</u></strong></p>
    <p>Titulo: <strong><?php echo $estudiosIdiomas['Estudios'][sizeof($estudiosIdiomas['Estudios'])-1]['estudio_titulo_obtenido']; ?></strong> </p>
    <p>Organizacion: <strong><?php echo $estudiosIdiomas['Estudios'][sizeof($estudiosIdiomas['Estudios'])-1]['estudio_establecimiento']; ?></strong> </p>
    <?php
  }
  ?>
</div>
<?php

 ?>
<div class="referenciasLaborales both margin0">
  <br>
  <h4><strong><u>Referencias Laborales:</u></strong></h4>
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
          if ($empresa['desde'] == Null) {
            $desde = "(Sin fecha: desde)";
          }else {
            $desde = strftime("%B %G", strtotime($empresa['desde']));
          }
          if ($indice == sizeof($referenciasLaborales['Empresas'])-1 && $empresa['hasta'] == Null) {
            $hasta = "Actual";
          }else if ($empresa['hasta'] == Null) {
            $hasta = "(Sin fecha: hasta)";
          }
          else {
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
</div>
<br>
<div class="infoRelevante both margin0">
  <h4><strong><u>Otra informacion relevante:</u></strong></h4>
  <p><?php echo $datosDeEntrevista['informacion_relevante']?></p>
</div>
