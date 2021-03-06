<div class="titulo">
  <!-- <h1>Informacion Personal</h1> -->
</div>
<h2><strong><em><u>Informacion Económica</u></em></strong></h2>
<div class="movilidadPropia margin0 both">
  <p><strong><u>Movilidad Propia</u></strong> </p>
  <p>Tipo: <strong><?php echo $informacionEconomica['vehiculo']?></strong> </p>
  <p>Marca: <strong><?php echo $informacionEconomica['marca']?></strong> </p>
  <p>Modelo: <strong><?php echo $informacionEconomica['modelo']?></strong> </p>
  <p>Año: <strong><?php echo $informacionEconomica['anio']?></strong> </p>
  <p>Titular: <strong><?php echo $informacionEconomica['titular']?></strong> </p>
  <p>Patente: <strong><?php echo $informacionEconomica['patente']?></strong> </p>
</div>
<div class="cuentasBancarias margin0 both">
  <p><strong><u>Cuentas Bancarias</u></strong> </p>
  <?php
    foreach ($informacionEconomica['CuentasBancarias'] as $key => $cuentaBancaria) {
      ?>
      <p>Entidad: <strong><?php echo $cuentaBancaria['entidad_bancaria']?></strong> </p>
      <?php
    }
   ?>
</div>
<div class="tarjetasCredito margin0 both">
  <p><strong><u>Tarjetas de Crédito</u></strong> </p>
  <?php
  foreach ($informacionEconomica['TarjetasEntidades'] as $key => $tarjetaEntidad) {
    ?>
    <div style="width:70%;">
      <div class="dosColumnas">
        <p class="">Tarjeta: <strong><?php echo $tarjetaEntidad['tarjeta']?></strong></p>
      </div>
      <div class="dosColumnas">
        <p class="">Entidad: <strong><?php echo $tarjetaEntidad['entidad']?></strong></p>
      </div>
    </div>
      <br>
    <?php
  }
   ?>
   <br>
   <p>Otras propiedades: <strong><?php echo $informacionEconomica['otras_propiedades']?></strong></p>
   <p>Seguros de vida: <strong><?php echo $informacionEconomica['seguro_de_vida']?></strong></p>
   <p>Prendas: <strong><?php echo $informacionEconomica['prendas']?></strong></p>
   <p>Observaciones: <strong><?php echo $informacionEconomica['cre_deb_observaciones']?></strong></p>
</div>
