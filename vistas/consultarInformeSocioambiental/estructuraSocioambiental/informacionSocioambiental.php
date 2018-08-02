<div class="titulo">
  <h1>Información socio-ambiental</h1>
</div>
<h2><strong><em><u>Domicilio</u></em></strong></h2>
<div class="domicilio both" style="height: 12em;">
  <div class="googleMap dosColumnas margin0" style=" top: 7%; position: relative; ">
      <a href="https://www.google.com/maps/place/<?php echo $informacionSocioambiental['route']; ?> <?php echo $informacionSocioambiental['street_number']; ?>, <?php echo $informacionSocioambiental['locality']; ?> /@<?php echo $informacionSocioambiental['gmap']; ?>" target="_blank">
        <img width="240" height="232" src="https://maps.googleapis.com/maps/api/staticmap?center=<?php echo $informacionSocioambiental['gmap']; ?>&zoom=17&size=400x400&markers=<?php echo $informacionSocioambiental['gmap']; ?>&key=AIzaSyBMCtHlS2MH-UExgf-0lkQyoppD2nDKA0U"/>
      </a>
  </div>
  <div class="infoDomicilio dosColumnas margin0" style=" line-height: 2em;">
    <p><strong>Calle: </strong><?php echo $informacionSocioambiental['route']; ?></p>
    <p><strong>Numero: </strong> <?php echo $informacionSocioambiental['street_number']; ?></p>
    <p><strong>Localidad: </strong> <?php echo $informacionSocioambiental['locality']; ?></p>
    <p><strong>Codigo Postal: </strong> <?php echo $informacionSocioambiental['postal_code']; ?></p>
    <p><strong>Partido: </strong> <?php echo $informacionSocioambiental['administrative_area_level_2']; ?></p>
    <p><strong>Piso:</strong> <?php echo $informacionSocioambiental['piso']; ?></p>
    <p> <strong>Dpto: </strong> <?php echo $informacionSocioambiental['depto']; ?></p>
    <p><strong>Telefono: </strong><?php echo $informacionSocioambiental['telefono']; ?> </p>
  </div>
</div>
<br>
<div class="transportes margin0 both">
  <?php
    if ($informacionSocioambiental['Transportes'][0]['id_transporte'] != Null) {
     ?>
     <p><strong>Transporte:</strong> </p>
     <?php
      foreach ($informacionSocioambiental['Transportes'] as $key => $transporte) {
        ?>
        <p><?php echo $transporte['transporte_tipo']?>: Distancia del domicilio: <?php echo $transporte['cuadras']  ?> cuadra<?php if ($transporte['cuadras'] > 1) {
          echo 's';
          } ?>
        </p>
        <?php
       }
    }
   ?>
</div>
<br>
<div class="referenciaUtil margin0">
  <p><strong>Referencia útil (hospital, escuela, estación, avenida): </strong> </p>
  <?php
    if ($informacionSocioambiental['referencia_util'] != Null) {
      ?>
      <p><?php echo $informacionSocioambiental['referencia_util'] ?></p>
      <?php
    }else {
      ?>
      <p>Sin Comentarios</p>
      <?php
    }
   ?>
</div>
<br>
<div class="viviendaServicios both" style="height:250px;">
  <h2><strong><em><u>Vivienda</u>:</em></strong></h2>
  <div class="vivienda dosColumnas">
    <p><strong>Tipo de vivienda:</strong> <?php echo $informacionSocioambiental['tipo_vivienda']?></p>
    <p><strong>Ambientes: </strong><?php echo $informacionSocioambiental['vivienda_ambientes'] ?></p>
    <p><strong>Aspecto Interior: </strong><?php echo $informacionSocioambiental['aspecto_interior']  ?></p>
    <p><strong>Aspecto exterior: </strong><?php echo $informacionSocioambiental['aspecto_exterior'] ?></p>
    <p><strong>Propietario: </strong> <?php echo $informacionSocioambiental['vivienda_propietario'] ?></p>
    <p><strong>Inquilino: </strong> <?php echo $informacionSocioambiental['vivienda_inquilino'] ?></p>
    <p><strong>Importe de Alquiler: </strong> <?php echo $informacionSocioambiental['vivienda_importe_alquiler'] ?></p>
  </div>
  <div class="servicios dosColumnas" >
    <p> <strong>Servicios:</strong> </p>
    <?php
      if ($informacionSocioambiental['Servicios'][0]['id_servicio'] != Null) {
        ?>
        <ul>
          <?php
          foreach ($informacionSocioambiental['Servicios'] as $key => $servicio) {
            ?>
            <li><?php echo $servicio['servicio'] ?></li>
            <?php
          }
          ?>
        </ul>
        <?php
      }else {
        ?>
        <p>No hay informacion sobre servicios</p>
        <?php
      }
     ?>
  </div>
</div>
<div class="Accesibilidad both margin0">
  <p>
    <strong>Accesibilidad:</strong>
  </p>
  <?php
    if ($informacionSocioambiental['vivienda_accesibilidad'] != Null) {
      ?>
        <p><?php echo $informacionSocioambiental['vivienda_accesibilidad'] ?></p>
      <?php
    }else {
      ?>
        <p>Sin Comentarios</p>
      <?php
    }
   ?>
</div>
<br/>
<?php
  if ($informacionSocioambiental['ConceptosVecinales'][0]['id_concepto_vecinal'] != Null) {
 ?>
<div class="conceptoVecinal" style=" height: 42%;">
  <h2><strong><em><u>Concepto Vecinal</u>:</em></strong></h2>
  <div class="both">
  <?php
     foreach ($informacionSocioambiental['ConceptosVecinales'] as $key => $vecino) {
       ?>
       <div class="dosColumnas">
         <p><strong><u>Vecino <?php echo $key + 1 ?></u></strong></p>
         <div class="borderer margin0">
           <p> <strong> Nombre y Apellido:</strong></p>
           <p><?php echo $vecino['vecino_nombre_apellido'] ?></p>
           <p> <strong> Domicilio:</strong> </p>
           <p><?php echo $vecino['vecino_domicilio'] ?></p>
           <p> <strong> Concepto del entrevistado:</strong> </p>
           <p><?php echo $vecino['concepto_del_entrevistado'] ?></p>
           <p> <strong> Afinidad:</strong> </p>
           <p><?php echo $vecino['afinidad'] ?></p>
           <p> <strong> Tipo de amistades:</strong> </p>
           <p><?php echo $vecino['tipo_de_amistades'] ?></p>
           <p> <strong> Problemas policiales:</strong> </p>
           <p><?php echo $vecino['problemas_policiales'] ?></p>
           <p> <strong> Problemas económicos:</strong> </p>
           <p><?php echo $vecino['problemas_economicos'] ?></p>
           <p> <strong> Tiempo que lo conoce:</strong> </p>
           <p><?php echo $vecino['tiempo_que_conoce'] ?></p>
         </div>
       </div>
       <?php
     }
   } else {
     ?>
     <div class="conceptoVecinal" style=" height: 10%;">
       <h2><strong><em><u>Concepto Vecinal</u>:</em></strong></h2>
       <div class="both">
         <p>No hay informacion sobre vecinos del postulante</p>
       </div>
     <?php
   }
   ?>
  </div>
</div>
