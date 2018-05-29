<div class="tab-pane" role="tabpanel" id="formuInfoEconomica">
  <div class="formuInfoEconomica">
    <h3>Informacion Economica</h3>
    <label class="tituloLabel">Movilidad Propia</label>
    <div class="row">
      <div class="col-md-3">
          <label for="movilidadPropia[tipo]">Tipo</label>
          <select id="id_vehiculo_tipo" class="form-control" name="movilidadPropia[tipo]">
            <option value="">Tipo</option>
            <option value=1>Automovil</option>
            <option value=2>Moto</option>
          </select>
          <label for="movilidadPropia[titular]">Titular</label>
          <input type="text" class="form-control" id="titular" name="movilidadPropia[titular]" placeholder="Titular" maxlength="70">
      </div>
      <div class="col-md-3">
          <label for="movilidadPropia[marca]">Marca</label>
          <input type="text" class="form-control" id="marca" name="movilidadPropia[marca]" placeholder="Marca" maxlength="70">

          <label for="movilidadPropia[patente]">Patente</label>
          <input type="text" class="form-control" id="patente" name="movilidadPropia[patente]" placeholder="Patente" maxlength="70">
      </div>
      <div class="col-md-3">
          <label for="movilidadPropia[modelo]">Modelo</label>
          <input type="text" class="form-control" id="modelo" name="movilidadPropia[modelo]" placeholder="Modelo" maxlength="70">
      </div>
      <div class="col-md-3">
          <label for="movilidadPropia[año]">Año</label>
          <input type="number" class="form-control" id="anio" name="movilidadPropia[año]" placeholder="Año" maxlength="4" onKeyUp="if(this.value>9999){this.value='';}else if(this.value < 0){this.value=''}" onmouseup="if(this.value>9999){this.value='';}else if(this.value < 0){this.value=''}">
      </div>
    </div>
    <br>
    <div class="addDamiliarPanel">
      <label class="tituloLabel">Cuentas Bancarias</label>
      <button type="button" class="btn btn-sm btn-primary" id="addCuentaBancaria">Agregar Cuenta Bancaria</button>
    </div>
    <div id="entidadesBancarias">
    </div>
    <br>
    <div class="addDamiliarPanel">
      <label class="tituloLabel">Tarjetas de Credito/Debito: </label>
      <button type="button" class="btn btn-sm btn-primary" id="addTarjetaEntidad">Agregar Tarjeta/Entidad</button>
    </div>
    <div class="row">
      <div class="col-md-6" id="tarjetasEntidades">
      </div>
      <div class="col-md-6">
        <label for="tCredDeb[otrasPropiedades]">Otras Propiedades</label>
        <input type="text" class="form-control" id="otras_propiedades" name="tCredDeb[otrasPropiedades]" placeholder="Otras Propiedades" maxlength="70">

        <label for="tCredDeb[segVida]">Seguros de Vida</label>
        <input type="text" class="form-control" id="seguro_de_vida" name="tCredDeb[segVida]" placeholder="Seguros de Vida" maxlength="70">

        <label for="tCredDeb[prendas]">Prendas</label>
        <input type="text" class="form-control" id="prendas" name="tCredDeb[prendas]" placeholder="Prendas" maxlength="70">
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <label for="tCredDeb[observaciones]">Observaciones</label>
        <textarea name="tCredDeb[observaciones]" id="cre_deb_observaciones" class="form-control" rows="4" cols="80" maxlength="250"></textarea>
      </div>
    </div>
  </div>
</div>
