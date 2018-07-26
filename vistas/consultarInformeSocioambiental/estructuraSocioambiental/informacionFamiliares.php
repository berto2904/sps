<div class="titulo">
</div>
<h2><strong><em><u>Familiares</u></em></strong></h2>
<div class="datosFamiliares margin0 both"style="height: 45%; ">
  <?php
  // print_r($datosFamiliares['Familiares']);
  // die();
   ?>
  <table>
    <thead>
      <tr>
        <th>Familiar</th>
        <th>Apellido y Nombre</th>
        <th>Domicilio</th>
        <th>Profesión</th>
      </tr>
    </thead>
    <tbody>
      <?php
        foreach ($datosFamiliares['Familiares'] as $key => $familiar) {
      ?>
      <tr>
        <td class="tipoFamilia"><?php echo $familiar['familiar_tipo'] ?></td>
        <td><?php echo $familiar['familiar_apellido_nombre'] ?></td>
        <td class="domicilioFamilia"><?php echo $familiar['familiar_domicilio'] ?></td>
        <td class="profesionFamilia"><?php echo $familiar['familiar_profesion'] ?></td>
      </tr>
      <?php
        }
        $restoFilas;
        if (sizeof($datosFamiliares['Familiares']) > 0) {
          $restoFilas = 8 - sizeof($datosFamiliares['Familiares']);
        }
        for ($i=0; $i<$restoFilas ; $i++) {
          ?>
          <tr>
            <td class="tipoFamilia">-</td>
            <td></td>
            <td class="domicilioFamilia"></td>
            <td class="profesionFamilia"></td>
          </tr>
          <?php
        }
      ?>

    </tbody>
  </table>
</div>
<h3><strong><em><u>Datos del Cónyuge</u></em></strong></h3>
<?php
if (isset($datosFamiliares['id_conyuge'])) {
?>
  <div class="datosConyuge margin0 both">
    <p>Nombre: <strong><?php echo $datosFamiliares['conyuge_nombres'] ?></strong> </p>
    <p>Apellido: <strong><?php echo $datosFamiliares['conyuge_apellido'] ?></strong> </p>
    <p>Fecha Nacimiento: <strong><?php echo $datosFamiliares['conyuge_fecha_nacimiento'] ?></strong> </p>
    <p>Lugar Nacimiento: <strong><?php echo $datosFamiliares['conyuge_lugar_nacimiento'] ?></strong> </p>
    <p>Nacionalidad: <strong><?php echo $datosFamiliares['conyuge_nacionalidad'] ?></strong> </p>
    <p>Profesion: <strong><?php echo $datosFamiliares['conyuge_profesion'] ?></strong> </p>
    <p>DNI: <strong><?php echo $datosFamiliares['conyuge_dni'] ?></strong> </p>
    <p>Sexo: <strong><?php echo $datosFamiliares['conyuge_sexo'] ?></strong> </p>
  </div>
<?php
}
else {
  ?>
  <p>La persona entrevistada no tiene Cónyuge</p>
  <?php
}
 ?>
<p><strong><u>Otras personas que conviven con el entrevistado:</u></strong></p>
<div class="convivencia both margin0">
<?php
  if (isset($datosFamiliares['observaciones_convivencia'])) {
    ?>
    <p><?php echo $datosFamiliares['observaciones_convivencia'] ?></p>
    <?php
  } else {
    ?>
    <p>Sin comentarios</p>
    <?php
  }
 ?>
</div>
