<?php
  $niveles = array("Primario","Secundario","Terciario","Universitario","Otros");
  $postulanteNivel = array_column($estudiosIdiomas['Estudios'], 'nivel_estudio');
  array_unshift($postulanteNivel,'valor0');
 ?>

<div class="titulo">
</div>
<h2><strong><em><u>Educacion</u></em></strong></h2>
<div class="datosFamiliares margin0 both"style="height: 27%; ">
  <table class="informe">
    <thead>
      <tr>
        <th>Nivel</th>
        <th>Establecimiento</th>
        <th>Situacion</th>
        <th>Titulo Obtenido</th>
      </tr>
    </thead>
    <tbody>
      <?php
        foreach ($niveles as $nivel) {
          if ($key = array_search($nivel, $postulanteNivel)) {
          ?>
          <tr>
            <td class="tipoFamilia"><?php echo $estudiosIdiomas['Estudios'][$key-1]['nivel_estudio'] != "" ? $estudiosIdiomas['Estudios'][$key-1]['nivel_estudio']:'-'  ?></td>
            <td><?php echo $estudiosIdiomas['Estudios'][$key-1]['estudio_establecimiento'] != "" ? $estudiosIdiomas['Estudios'][$key-1]['estudio_establecimiento']:'-'  ?></td>
            <td><?php echo $estudiosIdiomas['Estudios'][$key-1]['estudio_situacion'] != "" ? $estudiosIdiomas['Estudios'][$key-1]['estudio_situacion']:'-'  ?></td>
            <td><?php echo $estudiosIdiomas['Estudios'][$key-1]['estudio_titulo_obtenido'] != "" ? $estudiosIdiomas['Estudios'][$key-1]['estudio_titulo_obtenido']:'-'  ?></td>
          </tr>
          <?php
        } else {
          ?>
          <tr>
            <td class="tipoFamilia"><?php echo $nivel ?></td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
          </tr>
          <?php
          }
        }
       ?>
    </tbody>
  </table>
</div>
