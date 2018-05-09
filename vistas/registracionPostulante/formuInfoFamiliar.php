<div class="tab-pane" role="tabpanel" id="formuInfoFamiliar">
  <div class="formuInfoFamiliar">
    <div class="form-inline">
      <div class="addDamiliarPanel">
        <h3>Datos Familiares</h3>
        <button type="button" name="button" class="btn btn-sm btn-primary" id="addfamiliar">Agregar Familiar</button>
      </div>
    </div>
    <div class="row form-inline" id="datosFamiliares">
      <div class="form-group col-md-12" id="infoFam">
        <div class="col-md-1">
          <button type="button" name="button" class="btn btn-sm btn-danger deleteButton">-</button>
        </div>
        <div class="col-md-2">
          <select class="tipoFamiliar  form-control" name="infoFamiliar[]">
            <option value=""></option>
            <option value="1">Padre</option>
            <option value="2">Madre</option>
            <option value="3">Hijo</option>
            <option value="4">Hija</option>
          </select>
        </div>
        <div class="col-md-3">
          <input type="text" class="form-control"  name="infoFamiliar[]" placeholder="Apellido y Nombre" maxlength="70">
        </div>
        <div class="col-md-3">
          <input type="text" class="form-control"  name="infoFamiliar[]" placeholder="Domicilio" maxlength="70">
        </div>
        <div class="col-md-3">
          <input type="text" class="form-control" name="infoFamiliar[]" placeholder="Profesion" maxlength="70">
        </div>
      </div>
    </div>
    <hr>
    <h3>Datos del Cónyuge</h3>
    <div class="row">
      <div class="col-md-6">
        <div class="row">
          <div class="col-md-6">
            <label for="">Apellido</label>
            <input type="text" class="form-control" id="inputApellidoConyuge" name="inputApellidoConyuge" placeholder="Apellido" maxlength="70">
          </div>
          <div class="col-md-6">
            <label for="inputNombres">Nombres</label>
            <input type="text" class="form-control" id="inputNombresConyuge" name="inputNombresConyuge" placeholder="Nombres" maxlength="70">
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <label for="inputFechaNacimmiento">Fecha de Nacimiento</label>
            <input type="date" class="form-control" id="inputFechaNacimmientoConyuge" name="inputFechaNacimmientoConyuge" placeholder="Fecha de Nacimmiento">
          </div>
          <div class="col-md-6">
            <label for="inputLugarNacimiento">Lugar de Nacimiento</label>
            <input type="text" class="form-control" id="inputLugarNacimientoConyuge" name="inputLugarNacimientoConyuge" placeholder="Lugar de Nacimiento" maxlength="70">
          </div>
        </div>

        <label for="inputProfesion">Profesion</label>
        <input type="text" class="form-control" id="inputProfesionConyuge" name="inputProfesionConyuge" placeholder="Profesion" maxlength="70">
      </div>
      <div class="col-md-6">
        <label for="inputSexo">Sexo</label>
        <select class="form-control" name="inputSexoConyuge" placeholder="Sexo">
          <option value="">Sexo</option>
          <option value=1>Masculino</option>
          <option value=2>Femenino</option>
        </select>

        <label for="inputDni">DNI</label>
        <input type="number" class="form-control" id="inputDniConyuge" name="inputDniConyuge" placeholder="DNI">

        <label for="inputNacionalidad">Nacionalidad</label>
        <input type="text" class="form-control" id="inputNacionalidadConyuge" name="inputNacionalidadConyuge" placeholder="Nacionalidad" maxlength="70">

      </div>
    </div>
    <hr>
    <h3>Otras personas que conviven con el entrevistado</h3>
    <div class="row">
      <div class="col-md-12">
        <textarea name="inputObservacionesConvivencia" class="form-control" rows="4" cols="80" maxlength="250"></textarea>
      </div>
    </div>
  </div>
</div>
