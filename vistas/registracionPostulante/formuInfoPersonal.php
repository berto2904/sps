<div class="tab-pane" role="tabpanel" id="formuInfoPersonal">
  <div class="formuInfoPersonal">
    <div class="row">
      <h3>Datos personales</h3>
        <div class="col-md-6">
            <label for="">Apellido</label>
            <input type="text" class="form-control" id="inputApellido" name="inputApellido" placeholder="Apellido">
        </div>
    </div>

    <div class="row">
      <div class="col-md-6">
        <label for="inputNombres">Nombres</label>
        <input type="text" class="form-control" id="inputNombres" name="inputNombres" placeholder="Nombres">
        <div class="row">
          <div class="col-md-5">
            <label for="inputFechaNacimmiento">Fecha de Nacimiento</label>
            <input type="date" class="form-control" id="inputFechaNacimmiento" name="inputFechaNacimmiento" placeholder="Fecha de Nacimmiento">
          </div>
          <div class="col-md-7">
            <label for="inputLugarNacimiento">Lugar de Nacimiento</label>
            <input type="text" class="form-control" id="inputLugarNacimiento" name="inputLugarNacimiento" placeholder="Lugar de Nacimiento">
          </div>
        </div>

        <label for="inputExpedidaPorA">Expedida Por:</label>
        <input type="text" class="form-control" id="inputExpedidaPorA" name="inputExpedidaPorA" placeholder="Expedida Por:">

        <div class="row">
          <div class="col-md-4">
            <label for="inputLicenciaConductor">Lic. de Conducir</label>
            <select class="form-control" name="inputLicenciaConductor" placeholder="Licencia de conducir">
              <option value="">Licencia</option>
              <option value=1>Si</option>
              <option value=0>No</option>
            </select>
          </div>
          <div class="col-md-4">
            <label for="inputCategoriaConducir">Categoria</label>
            <input type="text" class="form-control" id="inputCategoriaConducir" name="inputCategoriaConducir" placeholder="Categoria">
          </div>
          <div class="col-md-4">
            <label for="inputExpedidaPorB">Expedida Por:</label>
            <input type="text" class="form-control" id="inputExpedidaPorB" name="inputExpedidaPorB" placeholder="Expedida Por:">
          </div>
        </div>

        <label for="inputProfesion">Profesion</label>
        <input type="text" class="form-control" id="inputProfesion" name="inputProfesion" placeholder="Profesion">


      </div>
      <div class="col-md-6">

        <label for="inputSexo">Sexo</label>
        <select class="form-control" name="inputSexo" placeholder="Sexo">
          <option value="">Sexo</option>
          <option value=1>Masculino</option>
          <option value=2>Femenino</option>
        </select>

        <label for="inputDni">DNI</label>
        <input type="number" class="form-control" id="inputDni" name="inputDni" placeholder="DNI">

        <label for="inputCiNumero">CI Nº</label>
        <input type="number" class="form-control" id="inputCiNumero" name="inputCiNumero" placeholder="CI Nº">

        <label for="inputNacionalidad">Nacionalidad</label>
        <input type="text" class="form-control" id="inputNacionalidad" name="inputNacionalidad" placeholder="Nacionalidad">

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
