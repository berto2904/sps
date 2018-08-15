<div class="tab-pane" role="tabpanel" id="formuInfoPersonal">
  <div class="formuInfoPersonal">
    <div class="row">
      <h3>Datos personales</h3>
    </div>

    <div class="row">
      <div class="col-md-8">
        <div class="row">
          <div class="col-md-6">
            <label for="inputNombres">Nombres</label>
            <input type="text" required class="form-control" id="inputNombres" name="inputNombres" placeholder="Nombres" maxlength="70">
          </div>
          <div class="col-md-6">
            <label for="">Apellido</label>
            <input type="text" required class="form-control" id="inputApellido" name="inputApellido" placeholder="Apellido" maxlength="70">
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <label for="inputFechaNacimmiento">Fecha de Nacimiento</label>
            <input type="date" required class="form-control" id="postulante_fecha_de_nacimiento" name="inputFechaNacimmiento" placeholder="Fecha de Nacimmiento">
          </div>
          <div class="col-md-6">
            <label for="inputLugarNacimiento">Lugar de Nacimiento</label>
            <input type="text" class="form-control" id="inputLugarNacimiento" name="inputLugarNacimiento" placeholder="Lugar de Nacimiento" maxlength="70">
          </div>
        </div>
        <div class="row">
          <div class="col-md-3">
            <label for="inputLicenciaConductor">Lic. de Conducir</label>
            <select class="form-control" name="inputLicenciaConductor" placeholder="Licencia de conducir">
              <option value="">Licencia</option>
              <option value="Si">Si</option>
              <option value="No">No</option>
            </select>
          </div>
          <div class="col-md-3">
            <label for="inputCategoriaConducir">Categoria</label>
            <input type="text" class="form-control" id="inputCategoriaConducir" name="inputCategoriaConducir" placeholder="Categoria" maxlength="70">
          </div>
          <div class="col-md-6">
            <label for="inputExpedidaPorB">Expedida Por:</label>
            <input type="text" class="form-control" id="inputExpedidaPorB" name="inputExpedidaPorB" placeholder="Expedida Por:" maxlength="70">
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <label for="inputSexo">Sexo</label>
        <select class="form-control" name="inputSexo" placeholder="Sexo">
          <option value="">Sexo</option>
          <option value=1>Masculino</option>
          <option value=2>Femenino</option>
        </select>
        <div class="row">
          <div class="col-md-6">
            <label for="inputDni">DNI</label>
            <input type="number" required class="form-control" id="inputDni" name="inputDni" placeholder="DNI" min="1" max="999999999">
          </div>
          <div class="col-md-6">
            <label for="inputNacionalidad">Nacionalidad</label>
            <input type="text" class="form-control" id="inputNacionalidad" name="inputNacionalidad" placeholder="Nacionalidad" maxlength="70">
          </div>
        </div>

        <label for="inputEstadoCivil">Estado Civil</label>
        <select class="form-control" name="inputEstadoCivil" placeholder="Estado Civil">
          <option value="">Estado Civil</option>
          <option value=1>Soltero</option>
          <option value=3>Casado</option>
          <option value=5>Concubino</option>
        </select>
      </div>
    </div>
  </div>
</div>
