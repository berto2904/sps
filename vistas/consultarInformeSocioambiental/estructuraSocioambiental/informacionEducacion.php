<?php
  $niveles = array("Primario","Secundario","Terciario","Universitario","Otros");
  $postulanteNivel = array_column($estudiosIdiomas['Estudios'], 'nivel_estudio');
  array_unshift($postulanteNivel,'valor0');
 ?>

<div class="titulo">
</div>
<h2><strong><em><u>Educacion</u></em></strong></h2>
<div class="datosFamiliares margin0 both"style="height: 45%; ">
  <table class="informe">
    <thead>
      <tr>
        <th data-field="stargazers_count" data-sortable="true" rowspan="2">Nivel</th>
        <th rowspan="2">Establecimiento</th>
        <th colspan="2">Fecha</th>
        <th rowspan="2">Situacion</th>
        <th rowspan="2">Titulo Obtenido</th>
      </tr>
      <tr>
        <th>Desde (Año)</th>
        <th>Hasta (Año)</th>
      </tr>
    </thead>
    <tbody>
      <?php
        foreach ($niveles as $nivel) {
          if ($key = array_search($nivel, $postulanteNivel)) {
          ?>
          <tr>
            <td class="tipoFamilia"><?php echo $estudiosIdiomas['Estudios'][$key-1]['nivel_estudio'] ?></td>
            <td><?php echo $estudiosIdiomas['Estudios'][$key-1]['estudio_establecimiento'] ?></td>
            <td><?php echo $estudiosIdiomas['Estudios'][$key-1]['estudio_desde'] ?></td>
            <td><?php echo $estudiosIdiomas['Estudios'][$key-1]['estudio_hasta'] ?></td>
            <td><?php echo $estudiosIdiomas['Estudios'][$key-1]['estudio_situacion'] ?></td>
            <td><?php echo $estudiosIdiomas['Estudios'][$key-1]['estudio_titulo_obtenido'] ?></td>
          </tr>
          <?php
        } else {
          ?>
          <tr>
            <td class="tipoFamilia"><?php echo $nivel ?></td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
          </tr>
          <?php
          }
        }
        die();
       ?>


    </tbody>
  </table>
</div>
