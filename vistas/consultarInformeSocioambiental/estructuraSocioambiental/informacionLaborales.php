<div class="titulo">
</div>
<h2><strong><em><u>Antecedentes Laborales</u></em></strong></h2>
<div class="datosFamiliares margin0 both">
  <?php
  // print_r($datosFamiliares['Familiares']);
  // die();
   ?>
  <table class="informe">
    <thead>
      <tr>
        <th rowspan="2">Empresa</th>
        <th rowspan="2">Domicilio</th>
        <th colspan="2">Periodo</th>
      </tr>
      <tr>
        <th>Desde</th>
        <th>Hasta</th>
      </tr>
    </thead>
    <tbody>
      <?php
        foreach ($referenciasLaborales['Empresas'] as $key => $empresa) {
          if ($key == sizeof($referenciasLaborales['Empresas'])-1 && $empresa['hasta'] == Null) {
            $empresa['hasta'] = "Actual";
          }
      ?>
      <tr>
        <td><?php echo $empresa['empresa'] ?></td>
        <td><?php echo $empresa['domicilio'] ?></td>
        <td><?php echo $empresa['desde'] ?></td>
        <td><?php echo $empresa['hasta'] ?></td>
      </tr>
      <?php
        }
        $restoFilas;
        if (sizeof($referenciasLaborales['Empresas']) > 0) {
          $restoFilas = 3 - sizeof($referenciasLaborales['Empresas']);
        }
        for ($i=0; $i<$restoFilas ; $i++) {
          ?>
          <tr>
            <td>-</td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <?php
        }
      ?>

    </tbody>
  </table>
</div>
<div style="height: 20%;" >
<p><strong><u>Observaciones:</u></strong></p>
  <div class="convivencia both margin0">
  <?php
    if (isset($referenciasLaborales['observacion_ref_laboral'])) {
      ?>
      <p><?php echo $referenciasLaborales['observacion_ref_laboral'] ?></p>
      <?php
    } else {
      ?>
      <p>Sin comentarios</p>
      <?php
    }
   ?>
  </div>
</div>
